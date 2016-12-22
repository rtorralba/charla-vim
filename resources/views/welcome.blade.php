<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Charla VIM</title>

    </head>
    <body>
        <h1>Charla VIM</h1>
        <img src="http://i.giphy.com/ZaOWGY4zFrXYQ.gif" alt="Charla VIM" />
        <ul>
            @foreach ($categories as $category)
                <li>
                    {{ $category }}
                </li>
            @endforeach
        </ul>
    </body>
</html>
