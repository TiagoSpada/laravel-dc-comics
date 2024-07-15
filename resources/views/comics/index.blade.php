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
    <header>
        <div class="container">
            <h1>lista fumetti</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                @foreach ($comics as $fumetto)
                    <div class="col">
                        <div>{{ $fumetto['title'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>
</body>

</html>
