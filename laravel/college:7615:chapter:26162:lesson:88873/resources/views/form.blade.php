<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Quera </title>

        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                background-color: #eee;
                font-family: 'helvetica neue', helvetica, arial, sans-serif;
                color: #222;
                display: flex;
                justify-content: center;
            }

            #form {
                padding: 2rem;
                margin: 0 auto;
                box-sizing: border-box;
            }

            .form-field {
                display: flex;
                margin: 0 0 1rem 0;
            }
            label, input {
                width: 100%;
                padding: 0.5rem;
                box-sizing: border-box;
                justify-content: space-between;
                font-size: 1.1rem;
            }
            input {
                border: 2px solid #aaa;
                border-radius: 2px;
            }
        </style>
    </head>
    <body>
        <form method="post" action="/form" id="form" class="validate">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="color: red; padding-bottom: 1rem;">
                        @foreach ($errors->all() as $error)
                            <span>{{ $error }}</span>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-field">
                <input type="text" name="number" id="number" placeholder="Enter a Number">
            </div>
            <div class="form-field">
                <input type="submit" value="Send">
            </div>
        </form>
    </body>
</html>
