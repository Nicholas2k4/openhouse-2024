<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="p-5">
        @foreach ($ukms as $ukm)
            <h2 class="font-bold">{{ $ukm->name }}</h2>
            <h3 class="italic">{{ $ukm->slug }}</h3>
            <h3>{{ $ukm->current_slot }}</h3>
            <h3>{{ $ukm->max_slot }}</h3>
            <h3 class="font-black">{{ $ukm->regist_fee }}</h3>
            <p class="text-justify">{{ $ukm->description }}</p>

            @if($ukm->logo_url != null)
                <img src="{{ asset($ukm->logo_url) }}" alt="" class="w-60">
            @endif
            <br><br><br>
        @endforeach
    </div>
</body>
</html>