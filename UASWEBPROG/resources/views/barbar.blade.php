<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>barbar</title>
</head>
<body>
    @section('title','header')
    <style>
        .navbar-brand{
            margin-left: 45%;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .register{
            background-color: yellow;
            text-decoration: none;
            color: black;
            margin-left: 70pt;
            margin-right: -80pt;
        }  
        .Login{
            background-color: yellow;
            text-decoration: none;
            color: black;
            margin-right: 200pt;
        }
        
        </style>       
        <nav class="navbar navbar-expand-lg" style="background-color: aqua">
            
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Amazing E-Grocery</a>
                <a class="register" href="/register">Register</a>
                <a class="Login" href="/login">Login</a>
            </div>
        </nav>

</body>
</html>