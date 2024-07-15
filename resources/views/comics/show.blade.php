<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @vite('resources/js/app.js')

</head>

<body>
    <header class="py-4">
        <div class="container">
            <h1 class="text-center">{{ $comics['title'] }}</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row border border-black px-3 py-5 rounded">
                <div class="col-6">
                    <div class="content text-center">
                        <img src="{{ $comics['thumb'] }}" class="img-fluid rounded-start" alt="{{ $comics['title'] }}">
                    </div>
                </div>
                <div class="col position-relative ">
                    <div class="content ">
                        <h5 class="mt-2 mb-5">{{ $comics['writers'] }} - {{ $comics['artists'] }}</h5>
                        <p class="mb-3 lh-lg">{{ $comics['description'] }}</p>
                        <div class="fw-semibold font-monospace">Serie: {{ $comics['series'] }} || Tipo:
                            {{ $comics['type'] }}</div>
                        <h4 class="position-absolute bottom-0 start-0 "> {{ $comics['price'] }}$</h4>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
