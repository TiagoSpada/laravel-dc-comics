<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $comic['title'] }}</title>
    @vite('resources/js/app.js')

</head>

<body>
    <header class="py-4">
        <div class="container">
            <h1 class="text-center">{{ $comic['title'] }}</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row border border-black px-3 py-5 rounded">

                <div class="col-6">
                    <div class="content text-center">
                        <img src="{{ $comic['thumb'] }}" class="img-fluid rounded-start" alt="{{ $comic['title'] }}">
                    </div>
                </div>
                <div class="col position-relative ">
                    <div class="content ">
                        <h5 class="mt-2 mb-5">Autori: <br>{{ str_replace(['"', '[', ']'], '', $comic->writers) }}
                        </h5>
                        <h5 class="mt-2 mb-5">Disegnatori
                            <br>{{ str_replace(['"', '[', ']'], '', $comic->artists) }}
                        </h5>
                        <p class="mb-3 lh-lg">{{ $comic['description'] }}</p>
                        <div class="fw-semibold font-monospace">Serie: {{ $comic['series'] }} || Tipo:
                            {{ $comic['type'] }}</div>
                        <h4 class="position-absolute bottom-0 end-0 "> {{ $comic['price'] }}$</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-4">
                    <a href="{{ route('comics.index') }}" class="btn btn-primary my-4">
                        Torna alla home</a>
                </div>
                <div class="col-4 text-end">
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary my-4 ">Modifica
                        dati</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
