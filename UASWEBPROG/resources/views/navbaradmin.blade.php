<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>navbaradmin</title>
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
        .Logout{
            background-color: yellow;
            text-decoration: none;
            color: black;
            margin-right: 200pt;
        }
        .container-fluid2{
            justify-content: center;
            margin-left: 40%;
            text-decoration: none;
        }
        
        </style>       
        <nav class="navbar navbar-expand-lg" style="background-color: aqua">
            
            <div class="container-fluid">
                <a class="navbar-brand" href=>Amazing E-Grocery</a>
                <a class="Logout" href="/logout">Logout</a>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg" style="background-color: rgb(240, 180, 51)">
            
            <div class="container-fluid2">
                <a class="home" style="margin-right: 10px" href="/admin/2">Home</a>
                <a class="cart" style="margin-right: 10px" href="/admincart/2">Cart</a>
                <a class="profile" style="margin-right: 10px" href="/adminprofile/2">Profile</a>
                <a class="accountmaintenance" style="margin-right: 10px" href="/accmain/2">Account Maintenance</a>
            </div>
        </nav>

</body>
</html>