<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista comics</title>
    @vite('resources/js/app.js')

</head>

<body>
    <header class="my-4">
        <div class="container">
            <h1>LISTA FUMETTI</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                @foreach ($comics as $fumetto)
                    <div class="col-6">
                        <div class="card mb-3 py-2">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $fumetto['thumb'] }}" class="img-fluid rounded-start"
                                        alt="{{ $fumetto['title'] }}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title my-3">{{ $fumetto['title'] }}</h5>
                                        <a href="{{ route('comics.show', $fumetto) }}" class="btn btn-primary">Altri
                                            dettagli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>
</body>

</html>
