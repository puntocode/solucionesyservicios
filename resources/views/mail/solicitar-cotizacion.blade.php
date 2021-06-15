<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta Web</title>
    <style>
        body{
            background-color: #f9f9f9;
            font-family: Helvetica, sans-serif;
        }

        .container{
            width: 80%;
            padding: 30px;
            max-width: 600px;
        }
        .row{
            border: 1px solid #cecece;
        }
        .cabecera{
            background-color: #21C5FF;
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
        }

        .cabecera h2{
            color: #fff;
        }

        .cabecera img{
            height: 40px;
            filter: invert(1);
            padding-top: 10px;
        }

        .list-group-item{
            list-style: none;
            color: #7d7d7d;
            padding-top: 10px;
        }

        @media screen and (max-width: 425px) {
            .container{
                width: 90%;
                padding: 10px;
            }
            .cabecera{
                flex-direction: column-reverse;
                align-items: center;
            }
            ul{
                padding: 15px;
                margin:0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="cabecera">
                <h2>Consulta de la Web</h2>
                <img src="{{ asset('img/logo-footer.svg') }}" alt="logo de puntocode">
            </div>
            <ul style="padding-bottom: 20px;">
                <li class="list-group-item"><strong>Nombre:</strong> {{ $mensaje['nombre'] }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $mensaje['email'] }}</li>
                <li class="list-group-item"><strong>Numero:</strong> {{ $mensaje['telefono'] }}</li>
                <li class="list-group-item"><strong>Mensaje:</strong> {{ $mensaje['mensaje'] }}</li>
            </ul>
        </div>
    </div>
</body>
</html>
