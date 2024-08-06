<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Posiciones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">    
    <style>
        .table-container {
            margin-top: 40px;
            margin-left: 19%;
            width: 63%;
        }
        .thin-column {
            width: 100px;
        }
        body{
            background-image: url("img/blue3.jpg");
        }
        tr {
            color: white;
        }

        .header{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 15%;
            padding: 20px 100px;
            background-image: url("img/blue3.jpg");
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            transition: 0.8s;
        }

        .header.abajo{
            background-image: url("img/bi4.png");
            padding: 20px 100px;
            transition: 0.8s;
        }

        .header.abajo a{
            color: #c0bcbc;
            transition: 0.8s;
        }

        .logo{
            font-size: 26px;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
        }

        .container{
            margin-top: 100px;
        }

        .navbar{
            top: 50%;
        }

        .navbar a{
            position: relative;
            font-size: 18px;
            color: #fff;
            font-weight: 500;
            text-decoration: none;
            margin-left: 40px;
        }

        .navbar a::before{
            content:'';
            position: absolute;
            top: 100%;
            left: 0;
            width: 0;
            height: 2px;
            background: #fff;
            transition: 0.3s;
        }

        .navbar a:hover::before{
            width: 100%;
        }
        .apf{
            margin-top: 0mm;
            margin-left: 50mm;
            position: fixed;
            top: 0;
            left: 0;
            width: 15%;
        }

        h1 {
            font-size: 35px;
            text-transform: capitalize;
            text-shadow:
            -1px -1px 1px #aaa,
            0px 2px 1px rgba(202, 194, 194, 0.5),
            2px 2px 2px rgba(238, 233, 233, 0.7),
            0px 0px 3px rgba(167, 161, 161, 0.4);
            text-align: center;
        }

        .resultados{
            margin-top: 150px;
        }

        .fechas{
            color: white;
            font-family: fantasy;
            font-size: 18px;
        }
    </style>
</head>
<body>

    <header class="header">
        <a href="#" class="logo" ></a>

        <nav class="navbar">
            <a href="{{ url('/') }}" class="#" >Inicio</a>
            <a href="{{ url('/mensual') }}" class="#" >Tabla Mensual</a>
            <a href="{{ url('/quienes-somos') }}" class="#" >Resultado</a>
            <a href="#" class="#" >Services</a>
            <a href="#" class="#" >Contact</a>
        </nav>
            <img src="img/depor.png" alt="APF" class="apf" width="15%">
    </header>
        @yield('content')
    </body>

    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("abajo", window.scrollY>0);
        })
    </script>
</html>
