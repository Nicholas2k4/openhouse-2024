<?php

namespace App\Exports;

use App\Models\DetailRegistration;
use App\Models\Ukm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;

class MatrapalaSheet implements WithTitle, WithHeadings, FromQuery, WithMapping
{

    private $iteration = 0;
    public function headings(): array
    {
        return [
            'No',
            'NRP',
            'Nama',
            'ID Line',
            'Nomor Telepon',
            'payment'
        ];
    }

    public function title(): string
    {
        return 'UKM Matrapala';
    }

    public function query()
    {
        return DetailRegistration::query()
            ->join('users', 'detail_registrations.nrp', '=', 'users.nrp')
            ->join('ukms', 'detail_registrations.ukm_id', '=', 'ukms.id')
            ->where('ukms.slug', 'matrapala')
            ->where('detail_registrations.payment_validated', 1)
            ->select('users.name', 'users.nrp', 'users.line_id', 'users.phone', 'detail_registrations.code', 'detail_registrations.payment_validated');
    }

    public function map($row): array
    {
        return [
            ++$this->iteration,
            $row->nrp,
            $row->name,
            $row->line_id,
            $row->phone,
            $row->payment_validated == 1 ? 'Tervalidasi' : 'Tidak tervalidasi',
        ];
    }
}
