<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navdiv">
            <div class="navLogo">
                <div class="logo">
                <img src="logo.svg" alt="logo">
                <p><a href="#">Inkspire</a></p>
                </div>
            </div>
            <div class="navLinks">
                <a href="{{ route('home') }}">Home</a>
                <a href="#">Features</a>
                <a href="{{ route('pricing') }}">Pricing</a>
                <a href = "{{ route('contact') }}">Contact</a>
                <button class="navbarCTA"><a href="{{ route('home') }}">Get Started</a></button>
            </div>
        </div>
    </nav>
</body>
</html>