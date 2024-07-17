<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modifica fumetto</title>
    @vite('resources/js/app.js')

</head>

<body>
    <header class="py-4">
        <div class="container">
            <h1>Modifica Fumetto</h1>
        </div>
    </header>
    <main>
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                {{-- TITOLO --}}
                <div class="mb-3">
                    <label for="titolo" class="form-label">Titolo:</label>
                    <input type="text" class="form-control" id="titolo" name="title"
                        value="{{ old('title', $comic['title']) }}">
                </div>
                {{-- DESCRIZIONE --}}
                <div class="mb-3">
                    <label for="descrizione">Descrizione:</label>
                    <textarea class="form-control" id="descrizione" style="height: 100px" name='description'>{{ old('description', $comic['description']) }}</textarea>
                </div>
                {{-- IMMAINE --}}
                <div class="mb-3">
                    <label for="copertina" class="form-label">Link immagine copertina:</label>
                    <input type="text" class="form-control" id="copertina" name="thumb"
                        value="{{ old('thumb', $comic['thumb']) }}">
                </div>
                {{-- PREZZO --}}
                <div class="mb-3">
                    <label for="prezzo" class="form-label">Prezzo:</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="prezzo" name="price" step="0.01"
                            value="{{ old('price', $comic['price']) }}">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                    </div>
                </div>
                {{-- SERIE --}}
                <div class="mb-3">
                    <label for="serie" class="form-label">Serie:</label>
                    <input type="text" class="form-control" id="serie" name="series"
                        value="{{ old('series', $comic['series']) }}">
                </div>
                {{-- DATA D'USCITA --}}
                <div class="mb-3">
                    <label for="data-vendita" class="form-label">Data d'uscita:</label>
                    <input type="text" class="form-control" id="data-vendita" name="sale_date"
                        placeholder="yyyy/mm/dd" value="{{ old('sale_data', $comic['sale_date']) }}">
                </div>
                {{-- TIPO --}}
                <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo di fumetto:</label>
                    <select class="form-select" id="tipo" aria-label="Default select example" name="type">
                        <option selected></option>
                        <option value="comic book" @if ($comic->type === 'comic book') selected @endif>comic book</option>
                        <option value="graphic novel" @if ($comic->type === 'graphic novel') selected @endif>graphic novel
                        </option>
                    </select>
                </div>
                {{-- ARTISTI --}}
                <div class="mb-3">
                    <label for="artisti" class="form-label">Artisti:</label>
                    <input type="text" class="form-control" id="artisti" name="artists"
                        value="{{ old('artist', $comic->artists) }}">
                    <div id="emailHelp" class="form-text">inserire i dati come in un array</div>
                </div>
                {{-- SCRITTORE --}}
                <div class="mb-3">
                    <label for="autore" class="form-label">Autore:</label>
                    <input type="text" class="form-control" id="autore" name="writers"
                        value="{{ old('writers', $comic->artists) }}">
                    <div id="emailHelp" class="form-text">inserire i dati come in un array</div>
                </div>

                <div class="row justify-content-around my-4">
                    <div class="col-4">
                        <button type="submit" class="btn btn-success">Modifica Fumetto</button>
                    </div>
                    <div class="col-4 text-end">
                        <a href="{{ route('comics.index') }}" class="btn btn-primary ">
                            Torna al fumetto</a>
                    </div>
                </div>


            </form>
        </div>
    </main>
</body>

</html>
