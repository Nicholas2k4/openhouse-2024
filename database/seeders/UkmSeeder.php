<?php

namespace Database\Seeders;

use App\Models\Ukm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class UkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ukms =
            [
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'LK BEM',
                    'slug' => 'bem',
                    'current_slot' => 10000,
                    'max_slot' => 10000,
                    'regist_fee' => 0,
                    'description' => 'Badan Eksekutif Mahasiswa (BEM) merupakan Lembaga Kemahasiswaan yang bergerak sebagai badan eksekutif dalam tingkat universitas. BEM Petra memiliki peran penting dalam menjalankan program-program yang bertujuan untuk meningkatkan kualitas kehidupan kampus dan mengakomodasi kepentingan serta aspirasi mahasiswa. Dimulai dari bidang yang menjadi penggerak administratif, menaungi perkembangan bakat dan minat mahasiswa, pengembangan internal BEM, hingga bekerja sama dengan pihak eksternal. 

Periode 2024/2025, kabinet #RISE siap meluncur dengan visi misi yang baru untuk perubahan dan kebangkitan mahasiswa!🚨⚡️ <br>

<h2 class = "mt-3 text-3xl">𝙍𝙄𝙎𝙀 (𝙍𝙞𝙜𝙝𝙩𝙚𝙤𝙪𝙨, 𝙄𝙜𝙣𝙞𝙩𝙚, 𝙎𝙥𝙞𝙧𝙞𝙩, 𝙀𝙣𝙩𝙧𝙪𝙨𝙩)</h2>
<ol class = "list-inside list-disc">
<li>Righteous: menjadi teladan yang benar ✅</li>
<li>Ignite: membawa sebuah kebangkitan atau perubahan baru 🔥</li>
<li>Spirit: menghidupkan esensi kemahasiswaan ✊🏻</li>
<li>Entrust: Melandaskan pelayanan pada Firman Tuhan ✝️ </li>
</ol>

<h2 class = "mt-3 text-3xl">𝐕𝐢𝐬𝐢:</h2>
Menjadi organisasi inspiratif yang membangkitkan semangat kemahasiswaan berlandaskan Firman Tuhan.

<h2 class = "mt-3 text-3xl">𝐌𝐢𝐬𝐢:</h2>
<ol class = "list-inside list-disc">
<li>Menciptakan lingkungan yang inspiratif dengan menjalin integritas dan kredibilitas.</li> 
<li>Mengobarkan esensi kemahasiswaan melalui sinergi bersama keluarga besar LK-KBM dan Biro Universitas.</li> 
<li>Membangkitkan semangat mahasiswa dalam meraih potensi dan prestasi melalui kegiatan kemahasiswaan dan UKM.</li> 
<li>Meningkatkan pelayanan dan aktif berdampak pada mahasiswa, serta masyarakat berlandaskan Firman Tuhan.</li>
</ol>',
                    'logo_url' => 'logo/1_bem_final.png',
                    'poster_url' => null,
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'LK MPM',
                    'slug' => 'mpm',
                    'current_slot' => 10000,
                    'max_slot' => 10000,
                    'regist_fee' => 0,
                    'description' => 'MPM (Majelis Perwakilan Mahasiswa) Petra Christian University adalah lembaga legislatif tingkat Universitas yang berwenang menyerap aspirasi dari lembaga kemahasiswaan lainnya, menjalankan advokasi terhadap masalah yang dialami mahasiswa serta mengawasi BEM PCU dalam kinerjanya.',
                    'logo_url' => 'logo/2_mpm_nobg.png',
                    'poster_url' => null,
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'LK BPMF',
                    'slug' => 'bpmf',
                    'current_slot' => 10000,
                    'max_slot' => 10000,
                    'regist_fee' => 0,
                    'description' => '
   <h1 class = "text-5xl">BPMF 1</h1>  
    <h2 class = "mt-3 text-3xl">Visi</h2>
Menjadi lembaga legislatif yang membangun komunikasi yang harmonis dan kolaboratif, terbuka terhadap aspirasi mahasiswa, serta mendorong inovasi dan kreativitas yang berlandaskan kasih. 

<h2 class = "mt-3 text-3xl">Misi</h2>
<ol class = "list-inside list-decimal">
<li>Leading with humility and empathy: Memimpin dengan rendah hati dan empati, mendengarkan dengan teliti dan memahami kebutuhan serta aspirasi mahasiswa dengan penuh kasih.
</li> 
<li>Orchestrating unity through diversity: Mengatur kesatuan melalui keberagaman, mendorong kerjasama antara mahasiswa dari berbagai prodi.</li> 
<li>Visionary Support: Memberikan dukungan untuk mewujudkan ide-ide kreatif yang dituangkan melalui program kerja yang berdampak positif untuk mahasiswa tingkat fakultas.
</li> 
<li>Ensuring Smooth Operations: Memastikan bahwa semua kegiatan berjalan dengan lancar melalui forum dan pengawasan.</li>
</ol>

<h1 class = "text-5xl mt-3">BPMF 2</h1>
BPMF 2 (Badan Perwakilan Mahasiswa Fakultas) merupakan Lembaga Legislatif Kemahasiswaan Universitas Kristen yang memiliki tujuan mengawasi pelaksanaan kegiatan dan pembuatan peraturan Lembaga Kemahasiswaan FTI dan FTSP. Berikut merupakan visi, misi, value, dan motto BPMF 2 Periode 2024/2025.
<h2 class = "mt-3 text-3xl">Visi</h2>
Menjadi BPMF 2 yang inklusif dalam membangun kerja sama antara Lembaga Kemahasiswaan FTI-FTSP, serta melayani mahasiswa hingga tercapai kesejahteraan yang menjunjung tinggi nilai-nilai Kristiani.

<h2 class = "mt-3 text-3xl">Misi</h2>
<ol class = "list-inside list-decimal">
<li>Membangun kerja sama dan sinergi untuk kepentingan bersama Lembaga Kemahasiswaan FTI-FTSP UK Petra.</li> 
<li>Menjadi wadah untuk menampung, menyalurkan, dan memperjuangkan aspirasi mahasiswa FTI-FTSP UK Petra.</li> 
<li>Meningkatkan kinerja dan melakukan proses secara bijak, adil, dan transparan untuk memperluas dampak dan meningkatkan eksistensi BPMF 2 bagi mahasiswa FTI-FTSP UK Petra.</li> 
<li>Melakukan pengawasan bersifat adil terhadap pelaksanaan kegiatan Lembaga Kemahasiswaan FTI-FTSP UK Petra.</li>
<li>Memastikan terdapat regenerasi dan kaderisasi dalam Lembaga Kemahasiswaan FTI-FTSP UK Petra.</li>
</ol>

<h2 class = "mt-3 text-3xl">Value</h2>
<h2 class = "text-3xl">(CARE)</h2>

<ol class = "list-inside list-disc">
<li>Collaborative <br> Berkolaborasi dengan semua Lembaga Kemahasiswaan FTI-FTSP UK Petra.</li> 
<li>Aspire<br>Mementingkan dan memperjuangkan aspirasi mahasiswa FTI-FTSP UK Petra.</li> 
<li>Raise<br>Meningkatkan kinerja BPMF 2 yang dapat memperluas dampak bagi mahasiswa FTI-FTSP UK Petra.</li> 
<li>Evaluate<br>Memberikan evaluasi dan saran yang membangun dalam pelaksanaan kegiatan oleh Lembaga Kemahasiswaan FTI-FTSP UK Petra.</li>
</ol>

<h2 class = "mt-3 text-3xl">Motto</h2>
“Working in Unity, Building Generations, Serving with #CARE”

<h1 class = "text-5xl mt-3">BPMF 3</h1>
BPMF (Badan Perwakilan Mahasiswa Fakultas) merupakan Lembaga Legislatif Kemahasiswaan Universitas Kristen yang memiliki tujuan mengawasi pelaksanaan kegiatan dan pembuatan peraturan Lembaga Kemahasiswaan Fakultas di Petra Christian University.

<h2 class = "mt-3 text-3xl">Visi</h2>
Menjadi perwakilan mahasiswa School of Business dan Management yang RESPONSIF dan mewujudkan tata kelola yang EFEKTIF dan EFISIEN bagi mahasiswa serta terebntuk wadah yang KONDUSIF untuk para mahasiswa mengekspresikan dirinya.


<h2 class = "mt-3 text-3xl">Misi</h2>
<ol class = "list-inside list-decimal">
<li>Menampung dan mewujudkan ASPIRASI mahasiswa fakultas SBM.</li> 
<li>Menyokong KOLABORASI antar lembaga-lembaga universitas serta lembaga kemahasiswaan, baik antar lingkup internal
 maupun eksternal.</li> 
<li>Mendorong INOVASI dan kreativitas mahasiswa untuk mengeksplorasikan diri dengan memastikan dengan baik dan bertanggung jawab berjalannya sebuah program kerja khususnya di fakultas SBM.</li> 
<li>RESPONSIF terhadap kebutuhan mahasiswa dan meningkatkan komunikasi yang membangun serta berparitisipasi membantu mahasiswa merencanakan kegiatan yang sesuai dengan target dan tujuan lembaga kemahasiswaan.</li>
</ol>

<h2 class = "mt-3 text-3xl">Value</h2>

<ol class = "list-inside list-disc">
<li>Refine</li> 
<li>Aspiration</li> 
<li>Collaboration</li> 
<li>Excellence</li>
</ol>',
                    'logo_url' => 'logo/3_bpmf.png',
                    'poster_url' => null,
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'LK PERSMA',
                    'slug' => 'persma',
                    'current_slot' => 10000,
                    'max_slot' => 10000,
                    'regist_fee' => 0,
                    'description' => 'Pers Mahasiswa atau Persma adalah Lembaga Kemahasiswaan yang bergerak pada bidang jurnalistik dan yang bertugas meliput kegiatan internal maupun eksternal dari LK ataupun kampus. Pers Mahasiswa juga menjadi tempat mahasiswa mengembangkan bakat lain di luar jurnalistik dengan departemen Teknologi Informasi, Konten Kreatif, Multimedia, Riset dan Pengembangan, dan juga Kewirausahaan.',
                    'logo_url' => 'logo/4_persma.png',
                    'poster_url' => null,
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'LK PELMA',
                    'slug' => 'pelma',
                    'current_slot' => 10000,
                    'max_slot' => 10000,
                    'regist_fee' => 0,
                    'description' => 'Pelma adalah organisasi yang berfokus pada penginjilan dan pemuridan mahasiswa di PCU. Sebagai wadah pelayanan bagi mahasiswa PCU dalam bidang kerohanian, Pelma mengadakan berbagai program seperti Kebaktian Universitas, Kelompok Tumbuh Bersama (KTB), Mission Trip, dan program lainnya.',
                    'logo_url' => 'logo/5_pelma.JPG',
                    'poster_url' => null,
                    'groupchat' => 'helo',
                ],

                [
                    'id' => (string)Str::uuid(),
                    'name' => 'LK TPS',
                    'slug' => 'tps',
                    'current_slot' => 10000,
                    'max_slot' => 10000,
                    'regist_fee' => 0,
                    'description' => 'Tim Petra Sinergi (TPS) adalah sinergi dari LK (Lembaga Kemahasiswaan), Pelma (Pelayanan Mahasiswa), dan DMU (Departemen Mata Kuliah Umum) yang menjadi keluarga pertama tempat mahasiswa baru berproses dan belajar membangun hidup bersama-sama.

Dalam kelompok kecil Life Enrichment Grace (LEG), teman-teman mahasiswa baru akan belajar membangun hidup. Bersama kakak pendamping yang dikenal sebagai Asisten Tutor (Astor), kita akan bersama-sama melihat apa saja yang perlu dipersiapkan dalam hidup untuk masa depan kita. Persiapan ini sangat penting supaya kita tidak menjalani hidup tanpa tujuan, yang akhirnya menuntun kita ke hidup yang meaningless. ',
                    'logo_url' => 'logo/6_tps.png',
                    'poster_url' => null,
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'Klub Chinese Art',
                    'slug' => 'chinese',
                    'current_slot' => 60,
                    'max_slot' => 60,
                    'regist_fee' => 250008,
                    'description' => 'Dalam Klub Chinese Art ini, peserta akan belajar mengenai cara bermain salah satu alat musik Tiongkok, yaitu guzheng. Peserta akan diajarkan teknik dasar dalam memetik guzheng hingga dapat memainkan beberapa buah lagu dengan lancar.',
                    'logo_url' => 'logo/7_chinese.jpeg',
                    'poster_url' => 'poster/7_chinese.png',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM ASFS',
                    'slug' => 'asfs',
                    'current_slot' => 80,
                    'max_slot' => 80,
                    'regist_fee' => 200006,
                    'description' => 'UKM ASFS merupakan UKM yang akan mengajak peserta untuk belajar banyak hal terkait dunia perfilman. Akan terdapat 4 kelas konsentrasi dalam UKM ini yang dapat dipilh oleh peserta, yaitu videographer, director, screenwriter, dan actor. Setiap peserta yang telah memilih kelas konsentrasi akan mempelajari hal spesifik terkait materi pilihannya, dan pada akhir UKM, peserta akan membentuk beberapa kelompok, dan tiap kelompok akan berisi peserta dari berbagai kelas konsentrasi yang ada untuk berkolaborasi membuat film.',
                    'logo_url' => 'logo/8_asfs.png',
                    'poster_url' => 'poster/8_asfs.png',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Dance',
                    'slug' => 'dance',
                    'current_slot' => 65,
                    'max_slot' => 65,
                    'regist_fee' => 575009,
                    'description' => 'UKM Dance adalah wadah untuk mahasiswa Petra Christian University dapat mengembangkan bakat melalui koreografi dari kelas dance yang ada dengan berbagai genre.

Peserta UKM Dance akan berkontribusi dalam performance dan competition dance untuk mengharumkan nama Petra Christian University.',
                    'logo_url' => 'logo/9_dance.png',
                    'poster_url' => 'poster/9_dance.png',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Dekorasi',
                    'slug' => 'dekor',
                    'current_slot' => 50,
                    'max_slot' => 50,
                    'regist_fee' => 380007,
                    'description' => 'UKM Dekorasi adalah Unit Kegiatan Mahasiswa yang diadakan oleh Petra Christian University yang pada tiap pertemuannya akan membuat kerajinan tangan yang berbeda.',
                    'logo_url' => 'logo/10_dekor.png',
                    'poster_url' => '33_dekorasi',
                    'groupchat' => 'helo',
                ],

                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Ilustrasi',
                    'slug' => 'ilustrasi',
                    'current_slot' => 45,
                    'max_slot' => 45,
                    'regist_fee' => 150002,
                    'description' => 'UKM Ilustrasi adalah tempat bagi para ilustrator untuk mengembangkan keterampilan mereka dan menjalin hubungan dengan orang lain, membentuk komunitas orang-orang yang menikmati proses seni. Peserta akan dituntun dan akan memperoleh akses ke banyak material dan resource, dan akan dapat berkompetisi dalam lomba seni tingkat Internasional. Akan ada pertemuan mingguan dan latihan intensif bagi yang memerlukannya.',
                    'logo_url' => 'logo/11_ilustrasi.png',
                    'poster_url' => null,
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Martografi',
                    'slug' => 'martografi',
                    'current_slot' => 100,
                    'max_slot' => 100,
                    'regist_fee' => 550001,
                    'description' => 'UKM Martografi merupakan bagian dari Unit Kegiatan Mahasiswa di Universitas Kristen Petra. UKM ini mewadahi mahasiswa yang senang dan ingin belajar mengenai fotografi. Tak hanya kegiatan rutin tiap Jumat, UKM Martografi juga mengadakan kegiatan lepas yaitu hunting bersama di luar kota. Hunting dalam kota juga dilaksanakan agar peserta UKM dapat berkesempatan untuk mempraktekkan pengetahuan dan mengasah skill yang dipaparkan pada kegiatan rutin.',
                    'logo_url' => 'logo/12_marto_black.png',
                    'poster_url' => null,
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Modeling',
                    'slug' => 'modeling',
                    'current_slot' => 40,
                    'max_slot' => 40,
                    'regist_fee' => 250003,
                    'description' => 'UKM Modeling adalah Unit Kegiatan Mahasiswa yang diadakan oleh Petra Christian University yang memberikan wadah bagi mahasiswa mengembangkan potensinya di bidang modelling dan fashion.',
                    'logo_url' => 'logo/13_modeling.png',
                    'poster_url' => 'poster/13_modeling.png',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Teater',
                    'slug' => 'teater',
                    'current_slot' => 40,
                    'max_slot' => 40,
                    'regist_fee' => 350004,
                    'description' => 'UKM Teater Rumpun Padi merupakan teater yang menawarkan kegiatan rutin yang berfokus pada latihan teater seperti berlatih menjadi aktor, berlatih menata panggung atau sering disebut sebagai artistik, berlatih dalam bidang tata rias dan busana, serta pengembangan diri anggotanya. Selain itu, UKM Teater Rumpun Padi juga menyelenggarakan kegiatan pendidikan dan latihan (DIKLAT) untuk mempersiapkan anggota menghadapi Pentas Akbar, pementasan akhir yang menjadi puncak kegiatan UKM Rumpun Padi dengan kolaborasi antar komunitas teater di sekitar Surabaya. Mahasiswa baru juga dapat mengikuti Pentas Tunggal sebagai ajang untuk meningkatkan rasa percaya diri dan mengurangi kecanggungan sosial.',
                    'logo_url' => 'logo/14_teater.png',
                    'poster_url' => 'poster/14_teater.jpg',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Vocal Group',
                    'slug' => 'vg',
                    'current_slot' => 100,
                    'max_slot' => 100,
                    'regist_fee' => 450005,
                    'description' => 'UKM Vocal Group memberikan pelatihan yang sesuai dengan kebutuhan setiap peserta. Selama satu tahun ke depan, program kami dirancang untuk membantu peserta berkembang pesat dan mencapai potensi maksimal mereka. Kami menyediakan rangkaian showcase dan workshop yang dirancang khusus untuk mengasah keterampilan dan meningkatkan kepercayaan diri dalam performa. Join us and be part of this amazing journey!',
                    'logo_url' => 'logo/15_vg.png',
                    'poster_url' => 'poster/15_vg.jpg',
                    'groupchat' => 'helo',
                ],

                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM English Debate Society',
                    'slug' => 'debate',
                    'current_slot' => 60,
                    'max_slot' => 60,
                    'regist_fee' => 100022,
                    'description' => 'English Debate Society (EDS) merupakan wadah pertukaran pendapat yang inklusif dan sangat menyambut anggota dari latar belakang apapun. Selama periode UKM, anggota akan diajarkan oleh coach yang handal mengenai tata cara berdebat yang benar. Oleh karena itu, para anggota tidak usah khawatir mengenai kemampuan berdebat mereka karena akan dilatih sampai matang. Bahkan, setiap tahun, UKM EDS juga rutin membawa pulang prestasi bahkan sampai di ajang nasional. Selain pelatihan skill berdebat, EDS juga menitikberatkan kepada rasa kekeluargaan tiap anggota agar dapat menciptakan lingkungan yang suportif dan seru.',
                    'logo_url' => 'logo/16_english_debate.png',
                    'poster_url' => 'poster/16_debate.jpg',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Pengembangan Diri',
                    'slug' => 'pd',
                    'current_slot' => 50,
                    'max_slot' => 50,
                    'regist_fee' => 420023,
                    'description' => 'UKM Pengembangan Diri berfokus pada self development, yaitu sebagai wadah bagi mahasiswa yang berfokus untuk mengenal diri sendiri, bertumbuh, dan mengembangkan potensi diri melalui kegiatan workshop, seminar, dan talkshow dengan berbagai topik menarik. Tentunya akan dibawakan oleh narasumber yang berkompeten, dengan menerapkan Hands-on Workshop sebagai bentuk praktik dari insight yang sudah didapat dari narasumber. Sehingga melalui UKM Pengembangan Diri, mahasiswa dapat mengembangkan soft skill dan hard skill mahasiswa. Tentunya juga menyelenggarakan kegiatan bonding antar peserta melalui group coaching, dan rally games yang seru.

Tak hanya itu, UKM Pengembangan Diri juga menyelenggarakan kegiatan fine dining yang bertujuan untuk memperkenalkan pentingnya table manner sebagai bentuk kepercayaan diri dan profesionalitas. Selain itu, terdapat kegiatan pengabdian masyarakat yang bertujuan agar mahasiswa dapat mengimplementasikan insight yang sudah didapatkan selama mengikuti kegiatan UKM Pengembangan Diri, dan memberikan dampak positif bagi masyarakat.',
                    'logo_url' => 'logo/17_pd.png',
                    'poster_url' => null,
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Esport',
                    'slug' => 'esport',
                    'current_slot' => 10000,
                    'max_slot' => 10000,
                    'regist_fee' => 0,
                    'description' => 'UKM Esports sebagai wadah bagi para mahasiswa untuk menunjukan talenta dan kerja kerasnya di bidang Esports. UKM ini diawali dengan adanya seleksi team tanpa biaya untuk 2 divisi, yaitu Mobile Legends dan Valorant. Setelah para mahasiswa diseleksi, UKM Esports akan melakoni tournament - tournament eksternal, baik swasta maupun negeri dari mahasiswa yang sudah terpilih untuk menjadi bagian dari TEAM PETRA ESPORTS. Petra Esprots juga menyediakan berbagai merchandise, mulai dari jersey, baseball cap, varsity sampai dengan keychain logo Petra Esports. ',
                    'logo_url' => 'logo/18_esport.png',
                    'poster_url' => null,
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Badminton',
                    'slug' => 'badmin',
                    'current_slot' => 190,
                    'max_slot' => 190,
                    'regist_fee' => 450011,
                    'description' => 'UKM Badminton akan dilakukan setiap minggu terkhususnya di hari sabtu. Di setiap pertemuan ini para peserta UKM Badminton, mereka akan mendapatkan pengetahuan pengetahuan baru tentang teknik dasar bermain badminton dari pelatih yang berpengalaman, para peserta UKM Badminton juga bisa menjaga kesehatan mereka dan bisa melatih kekuatan dan kelincahan.',
                    'logo_url' => 'logo/19_badmin.png',
                    'poster_url' => 'poster/19_badmin.jpg',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Basket',
                    'slug' => 'basket',
                    'current_slot' => 100,
                    'max_slot' => 100,
                    'regist_fee' => 410031,
                    'description' => 'UKM Basket akan memberikan pengalaman belajar teknik dasar basket dan situasi berkompetisi bagi tiap anggota UKM Basket.',
                    'logo_url' => 'logo/20_basket.png',
                    'poster_url' => 'poster/20_basket.jpg',
                    'groupchat' => 'helo',
                ],

                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Catur',
                    'slug' => 'catur',
                    'current_slot' => 64,
                    'max_slot' => 64,
                    'regist_fee' => 65016,
                    'description' => 'UKM Catur akan berfokus pada pembelajaran strategi opening, middle, dan end game. Setiap minggu, anggota UKM berkumpul untuk sesi latihan intensif yang mencakup analisis pembukaan catur terkenal, strategi pertengahan permainan yang efektif, serta teknik penyelesaian permainan yang optimal. Melalui pertandingan internal, eksternal dan diskusi dengan pelatih, anggota tidak hanya meningkatkan keterampilan mereka tetapi juga memahami nuansa dan taktik yang diperlukan untuk menjadi pemain catur yang lebih unggul.',
                    'logo_url' => 'logo/21_catur.png',
                    'poster_url' => 'poster/21_catur.jpg',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Futsal',
                    'slug' => 'futsal',
                    'current_slot' => 35,
                    'max_slot' => 35,
                    'regist_fee' => 310013,
                    'description' => '<h2 class = "mt-3 text-3xl">Latihan Rutin</h2>  

<ol class = "list-inside list-disc">
<li>Jadwal: Latihan diadakan setiap Jumat.</li> 
<li>Fokus: Teknik dasar, strategi, dan fisik.</li> 
<li>Teknik Dasar: Dribbling, passing, shooting, penjagaan gawang.</li> 
<li>Strategi: Formasi, taktik permainan, koordinasi tim.</li>
<li>Fisik: Latihan kekuatan, stamina, dan agility.</li>
<li>Pelatih: Pelatih profesional serta kating yang berpengalaman.</li>
</ol>

<h2 class = "mt-3 text-3xl">Sparing dan Pertandingan Persahabatan</h2>  
<ol class = "list-inside list-disc">
<li>Frekuensi: Setiap bulan diadakan minimal satu kali sparing.</li> 
<li>Tujuan: Mengasah kemampuan bermain di bawah tekanan, evaluasi performa.</li> 
<li>Lawan: Tim futsal dari universitas lain atau klub futsal lokal.</li> 
</ol>

<h2 class = "mt-3 text-3xl">Turnamen</h2>
<h2 class = "text-xl">Internal</h2>
<ol class = "list-inside list-disc">
<li>Turnamen Antar Fakultas: Diadakan setiap semester, melibatkan semua fakultas di UK Petra.</li> 
</ol>
<h2 class = "text-xl">Eksternal</h2>
<ol class = "list-inside list-disc">
<li>Turnamen Regional: Berpartisipasi dalam turnamen futsal tingkat regional Jawa Timur.</li> 
<li>Turnamen Nasional: Mengikuti kompetisi futsal antar universitas di tingkat nasional.</li> 
</ol>
',
                    'logo_url' => 'logo/22_futsal.png',
                    'poster_url' => 'poster/22_futsal.jpg',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Renang',
                    'slug' => 'renang',
                    'current_slot' => 50,
                    'max_slot' => 50,
                    'regist_fee' => 350021,
                    'description' => 'Pada periode ini, kegiatan renang di UKM Renang penuh dengan keseruan dan manfaat. pertama, sesi renang rutin di kolam yang bertujuan untuk meningkatkan keterampilan dan kebugaran peserta; kedua, lomba internal antar peserta yang memupuk semangat kompetisi sehat dan memberikan penghargaan atas partisipasi mereka; dan ketiga, keseruan fun games yang melibatkan berbagai permainan, mempererat kebersamaan, dan menciptakan momen tak terlupakan. Kegiatan ini menggabungkan olahraga dan kesenangan, memberikan pengalaman bermanfaat serta mempererat hubungan antar peserta.',
                    'logo_url' => 'logo/23_renang.png',
                    'poster_url' => 'poster/23_renang.jpg',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Taekwondo',
                    'slug' => 'taekwondo',
                    'current_slot' => 50,
                    'max_slot' => 50,
                    'regist_fee' => 150010,
                    'description' => 'UKM Taekwondo terdapat kegiatan latihan rutin, bonding, dan workshop. Latihan rutin bersama memiliki fokus dalam materi dan praktik tendangan, tangkisan, pukulan dasar. Materi tersebut merupakan bagian Poomsae, Kyorugi, dan Kyukpa. Bonding akan dilakukan untuk mempererat hubungan antar 3 universitas yang merupakan bagian dalam club yang sama yaitu Universitas Kristen Petra, Universitas Surabaya, dan Universitas Widya Mandala. Sedangkan workshop akan diadakan untuk mempersiapkan peserta untuk meningkatkan sabuk yang sedang dimiliki.',
                    'logo_url' => 'logo/24_taekwondo.png',
                    'poster_url' => 'poster/24_taekwondo.jpg',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Tenis Lapangan',
                    'slug' => 'tenis-lapangan',
                    'current_slot' => 34,
                    'max_slot' => 34,
                    'regist_fee' => 255012,
                    'description' => 'Kegiatan rutin UKM Tenis Lapangan yang akan diadakan setiap hari Jumat, bertujuan untuk mengembangkan strategi permainan, serta penguatan aspek fisik dan mental. Setiap 4 pertemuan sekali, akan diadakan kompetisi antar peserta, agar para peserta dapat mempelajari cara membaca gerakan lawan dan merespons dengan taktik yang tepat. Melalui kompetisi tersebut, peserta diharapkan dapat menyempurnakan teknik dasar tenis lapangan (forehand & backhand, servis, dan smash)',
                    'logo_url' => 'logo/25_tenis_lapangan.png',
                    'poster_url' => 'poster/25_tenis-lapangan.jpg',
                    'groupchat' => 'helo',
                ],

                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Tenis Meja',
                    'slug' => 'tenis-meja',
                    'current_slot' => 50,
                    'max_slot' => 50,
                    'regist_fee' => 250015,
                    'description' => 'Di UKM Tenis Meja tahun ini, tentu saja selain latihan berbagai macam teknik dan juga sparing bersama teman kalian, kita akan mengadakan beberapa turnamen kecil maupun besar dan juga berkesempatan mendapatkan hadiah seruu.',
                    'logo_url' => 'logo/26_tenis_meja.png',
                    'poster_url' => 'poster/26_tenis-meja.jpg',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Voli',
                    'slug' => 'voli',
                    'current_slot' => 45,
                    'max_slot' => 45,
                    'regist_fee' => 250014,
                    'description' => 'VOLI adalah olahraga yang membutuhkan teknik, taktik, dan strategi serta kerja sama tim sehingga mengharuskan para pemain untuk belajar agar dapat bermain dengan baik di lapangan. Program latihan yang akan dilakukan berupa latihan dasar dalam olahraga VOLI seperti latihan bagaimana cara yang benar dalam melakukan serving, passing atas dan bawah, blocking, dan smashing, terdapat juga latihan fisik yang bertujuan untuk menguatkan tubuh agar dapat melakukan gerakan teknik dasar dalam permainan bola VOLI bersama tim dengan baik dan benar.  Program latihan ini dilakukan setiap minggu dengan fokus dan porsi yang berbeda-beda. Setelah latihan, akan diadakan permainan beregu 6x6 setiap minggu sebagai bagian dari pertemuan, untuk memberikan pengalaman belajar yang lebih nyata. UKM VOLI akan mengadakan pertandingan internal yang diadakan di akhir periode dengan ketentuan peserta wajib aktif dalam mengikuti setiap pertemuan.',
                    'logo_url' => 'logo/27_voli.png',
                    'poster_url' => 'poster/27_voli.png',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Matrapenza',
                    'slug' => 'mpz',
                    'current_slot' => 150,
                    'max_slot' => 150,
                    'regist_fee' => 200027,
                    'description' => 'Berikut adalah ringkasan dalam satu periode tentang Matrapenza yang mencakup empat diklat, seminar nasional (SEMNAS), dan pengabdian masyarakat (pengmas):

<h2 class = "mt-3 text-3xl">Empat Diklat Utama</h2>  
<ol class = "list-inside list-decimal">
<li>Pengenalan NAPZA dan Faktor Penyebab: Diklat pertama ini akan memberikan pemahaman mendalam tentang apa itu NAPZA (Narkotika, Psikotropika, dan Zat adiktif lainnya), jenis-jenisnya, serta faktor-faktor yang mendorong seseorang untuk menyalahgunakannya. Peserta akan diajak untuk mengenali tanda-tanda awal penyalahgunaan NAPZA dan memahami dampaknya terhadap individu, keluarga, dan masyarakat.</li> 
<li>Dampak Penyalahgunaan NAPZA dan Pencegahan: Diklat kedua akan membahas secara detail mengenai dampak negatif penyalahgunaan NAPZA terhadap kesehatan fisik dan mental, sosial, serta produktivitas. Selain itu, peserta akan diberikan pengetahuan tentang berbagai strategi pencegahan yang efektif, mulai dari tingkat individu hingga tingkat komunitas.</li> 
<li>How to be a Helping Hand Person: Diklat ini akan membekali peserta dengan keterampilan untuk menjadi seorang pemberi dukungan bagi mereka yang sedang berjuang dengan masalah penyalahgunaan NAPZA. Peserta akan belajar bagaimana berkomunikasi secara efektif, memberikan empati, dan mengarahkan mereka ke sumber-sumber bantuan yang tepat.</li> 
<li>Pengobatan dan Sharing Pengalaman: Diklat terakhir ini akan membahas berbagai metode pengobatan yang tersedia untuk mengatasi penyalahgunaan NAPZA, serta memberikan kesempatan bagi para mantan pengguna untuk berbagi pengalaman mereka dalam proses pemulihan.</li>
</ol>

<h2 class = "mt-3 text-3xl">Seminar Nasional (SEMNAS)</h2>  
Sebagai puncak dari rangkaian kegiatan, Matrapenza akan menyelenggarakan sebuah seminar nasional yang mengundang para ahli, praktisi, dan pemangku kepentingan untuk membahas isu-isu terkini terkait penyalahgunaan NAPZA. SEMNAS ini diharapkan dapat menjadi wadah untuk berbagi pengetahuan, pengalaman, dan menginspirasi kolaborasi dalam upaya memerangi penyalahgunaan NAPZA.

<h2 class = "mt-3 text-3xl">Pengabdian Masyarakat (Pengmas)</h2>
Selain kegiatan-kegiatan di atas, Matrapenza juga akan aktif melakukan pengabdian masyarakat dengan menyasar berbagai komunitas, sekolah, dan lembaga terkait. Tujuannya adalah untuk menyebarluaskan informasi tentang bahaya NAPZA dan mendorong partisipasi aktif masyarakat dalam upaya pencegahan.',
                    'logo_url' => 'logo/28_matrapenza.png',
                    'poster_url' => 'poster/28_mpz.png',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM EMR',
                    'slug' => 'emr',
                    'current_slot' => 50,
                    'max_slot' => 50,
                    'regist_fee' => 180029,
                    'description' => 'UKM EMR merupakan Unit Kegiatan Mahasiswa yang berfokus pada pertolongan pertama dalam keadaan darurat. Nantinya, bersama-sama kita akan belajar materi serta praktik first aid dengan efesien. Kegiatan ini bertujuan untuk membantu kehidupan kita sehari-hari. ',
                    'logo_url' => 'logo/29_emr.png',
                    'poster_url' => null,
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Menwa',
                    'slug' => 'menwa',
                    'current_slot' => 15,
                    'max_slot' => 15,
                    'regist_fee' => 0,
                    'description' => 'Ringkasan Kegiatan UKM Resimen Mahasiswa 843 Universitas Kristen Petra (Selama 1 Periode)
<h2 class = "mt-3 text-4xl">Tugas Pokok</h2>  

<h2 class = "mt-3 text-2xl">Upacara</h2> 

17 Agustus: Mengadakan upacara bendera untuk memperingati Hari Kemerdekaan Indonesia. Seluruh anggota UKM Resimen Mahasiswa terlibat dalam persiapan dan pelaksanaan upacara, termasuk pengibaran bendera dan pembacaan teks proklamasi.
<br>
28 Oktober: Mengadakan upacara untuk memperingati Hari Sumpah Pemuda. Kegiatan ini bertujuan untuk meningkatkan semangat persatuan dan kesatuan di kalangan mahasiswa.
<br>
10 November: Mengadakan upacara untuk memperingati Hari Pahlawan, mengenang jasa-jasa para pahlawan bangsa yang telah gugur.
<br>
2 Mei: Mengadakan upacara Hari Pendidikan Nasional, dengan tujuan meningkatkan kesadaran akan pentingnya pendidikan di kalangan mahasiswa.

<h2 class = "mt-3 text-2xl">Pam Wisuda Universitas Kristen Petra</h2> 
Menyediakan keamanan dan ketertiban selama acara wisuda Universitas Kristen Petra. Anggota UKM Resimen Mahasiswa bertugas mengawal jalannya acara, membantu tamu undangan, dan memastikan kegiatan berjalan lancar.

<h2 class = "mt-3 text-2xl">Pembawa Pataka Bendera Welcome Grateful Generation</h2> 
Bertugas sebagai pembawa pataka bendera dalam acara Welcome Grateful Generation, sebuah acara penyambutan mahasiswa baru. Tugas ini melibatkan pengibaran bendera dan penampilan atraksi keprajuritan.

<h2 class = "mt-3 text-2xl">Pam Kegiatan dan Acara Penting Universitas Kristen Petra</h2> 
Menyediakan keamanan dan ketertiban selama acara penting di universitas, seperti seminar, workshop, dan acara lainnya. Anggota UKM Resimen Mahasiswa memastikan bahwa setiap kegiatan berjalan dengan aman dan tertib.

<h2 class = "mt-3 text-4xl">Visi</h2>  
Menyiapkan mahasiswa sebagai generasi intelektual bangsa dan warga negara yang dibekali dengan kemampuan dan pengetahuan dalam olah keprajuritan untuk pembelaan negara. Selain itu, anggota UKM Resimen Mahasiswa juga dibekali dengan keterampilan lain yang bermanfaat bagi masyarakat luas, dengan tujuan pengembangan bakat dan kepribadian secara penuh dan utuh.',
                    'logo_url' => 'logo/30_menwa.png',
                    'poster_url' => 'poster/30_menwa.png',
                    'groupchat' => 'helo',
                ],

                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Matrapala',
                    'slug' => 'matrapala',
                    'current_slot' => 50,
                    'max_slot' => 50,
                    'regist_fee' => 299028,
                    'description' => 'Matrapala merupakan UKM pecinta alam yang tentunya bergerak dalam bidang alam. Matrapala banyak mengadakan kegiatan dibidang alam seperti matrapala camp, rafting, hiking, rock climbing, dan caving.',
                    'logo_url' => 'logo/31_matrapala.png',
                    'poster_url' => 'poster/31_matrapala.png',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Paduan Suara',
                    'slug' => 'padus',
                    'current_slot' => 80,
                    'max_slot' => 80,
                    'regist_fee' => 400025,
                    'description' => 'PCU Choir merupakan kelompok paduan suara yang aktif dalam berbagai kegiatan musik dan sosial. Salah satu bentuk pengabdian masyarakat yang dilakukan oleh PCU Choir adalah memberikan pelayanan di gereja-gereja di desa. Kegiatan ini tidak hanya bertujuan untuk mempersembahkan lagu-lagu pujian, tetapi juga untuk menjalin hubungan yang lebih erat dengan masyarakat setempat dan memberikan dampak positif melalui musik.

Selain itu, PCU Choir juga aktif berpartisipasi dalam berbagai ajang kompetisi dan festival paduan suara. Salah satu prestasi yang membanggakan adalah kemenangan dalam festival paduan suara di Universitas Surabaya (Ubaya) dan partisipasi lomba paduan suara di Singapura. Melalui kegiatan ini, PCU Choir tidak hanya menunjukkan kemampuan musikalitasnya tetapi juga membawa nama baik institusi dan memperluas jaringan di tingkat nasional maupun internasional.',
                    'logo_url' => 'logo/32_padus.png',
                    'poster_url' => 'poster/32_padus.jpg',
                    'groupchat' => 'helo',
                ],
                [
                    'id' => (string)Str::uuid(),
                    'name' => 'UKM Orkestra',
                    'slug' => 'orkestra',
                    'current_slot' => 10000,
                    'max_slot' => 10000,
                    'regist_fee' => 0,
                    'description' => 'PCU Orchestra merupakan salah satu grup musik orkestra yang aktif membawakan musik klasik dan kontemporer di Surabaya. PCU Orchestra di bawah naungan Pusat Pengembangan Musik Gereja (PPMG) Petra Christian University telah mengisi berbagai konser, kegiatan universitas, maupun kolaborasi bersama grup orchestra lainnya. Beberapa konser yang telah terlaksana diantaranya; Peace is in Me, Kim Andre Arnesen’s Magnificat, He is Coming, Part of You, Feast of Gratitude, Tracing The Horizon, dan Eufoni Nusantara.',
                    'logo_url' => 'logo/33_orkestra.png',
                    'poster_url' => null,
                    'groupchat' => 'helo',
                ],
            ];

        foreach ($ukms as $ukm) {
            Ukm::insert($ukm);
        }
    }
}
