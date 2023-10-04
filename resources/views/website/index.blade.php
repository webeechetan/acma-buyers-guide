<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ul{
            list-style: none;
            display: flex;
            justify-content: center;
            height: 100vh;
        }
        li{
            margin: 0 10px;
        }
        li a {
            text-decoration: none;
            color: #000;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="{{ route('company.login') }}">Login</a></li>
        <li><a href="{{ route('company.register') }}">Register</a></li>
    </ul>
</body>
</html>