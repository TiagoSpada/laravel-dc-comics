<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nuovo fumetto</title>
    @vite('resources/js/app.js')

</head>

<body>
    <header class="py-4">
        <div class="container">
            <h1>Inserimento nuovo fumetto</h1>
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

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                {{-- TITOLO --}}
                <div class="mb-3">
                    <label for="titolo" class="form-label">Titolo:</label>
                    <input type="text" class="form-control" id="titolo" name="title">
                </div>
                {{-- DESCRIZIONE --}}
                <div class="mb-3">
                    <label for="descrizione">Descrizione:</label>
                    <textarea class="form-control" id="descrizione" style="height: 100px" name='description'></textarea>
                </div>
                {{-- IMMAINE --}}
                <div class="mb-3">
                    <label for="copertina" class="form-label">Link immagine copertina:</label>
                    <input type="text" class="form-control" id="copertina" name="thumb">
                </div>
                {{-- PREZZO --}}
                <div class="mb-3">
                    <label for="prezzo" class="form-label">Prezzo:</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="prezzo" name="price" step="0.01">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                    </div>
                </div>
                {{-- SERIE --}}
                <div class="mb-3">
                    <label for="serie" class="form-label">Serie:</label>
                    <input type="text" class="form-control" id="serie" name="series">
                </div>
                {{-- DATA D'USCITA --}}
                <div class="mb-3">
                    <label for="data-vendita" class="form-label">Data d'uscita:</label>
                    <input type="text" class="form-control" id="data-vendita" name="sale_date"
                        placeholder="yyyy/mm/dd">
                </div>
                {{-- TIPO --}}
                <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo di fumetto:</label>
                    <select class="form-select" id="tipo" aria-label="Default select example" name="type">
                        <option selected></option>
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                    </select>
                </div>
                {{-- ARTISTI --}}
                <div class="mb-3">
                    <label for="artisti" class="form-label">Artisti:</label>
                    <input type="text" class="form-control" id="artisti" name="artists">
                    <div id="emailHelp" class="form-text">Se sono più di uno separarli con ', '</div>
                </div>
                {{-- SCRITTORE --}}
                <div class="mb-3">
                    <label for="autore" class="form-label">Autore:</label>
                    <input type="text" class="form-control" id="autore" name="writers">
                    <div id="emailHelp" class="form-text">Se sono più di uno separarli con ', '</div>
                </div>


                <button type="submit" class="btn btn-success">Crea nuovo Fumetto</button>
            </form>
        </div>
    </main>
</body>

</html>
