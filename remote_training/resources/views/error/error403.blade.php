<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error 403</title>
    <style>
        body{
        display:flex;
        justify-content: center;
        }

        .error{
        font-family: "Press Start 2p";
        display:flex;
        flex-direction: column;
        align-items: center;
        margin: 50px;
        border: solid 15px;
        border-radius: 20px;
        box-shadow: 10px 10px 30px;
        }
        .head{
        margin: 50px;
        font-size: 12px;

        }

        .mens{
        margin: 20px 50px 50px 50px;
        font-size: 90px;
        }

        .desc{
        margin: 20px 50px 50px 50px;
        font-size: 12px;
        } 
    </style>
</head>
<body>
    <div class="error">
        <div class="head">error</div>
        <div class="mens">403</div>
        <div class="desc">Accesso negato</div>
    </div>
</body>
</html>