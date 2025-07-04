<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <title>Inkspire</title>
</head>
<body>
    @include('header')
    <div class="container">
        <div class="content">
            <h1>Inkspire: Your AI Co-Creator for Social Media</h1>
            <h4>From niche to narrative in seconds. Just type in your niche — Inkspire will do the rest, generating post ideas that inform, inspire, and engage.</h4>
            <form action="{{route('ideas.generate')}}" method="POST" id="ideaForm">
                @csrf 
                <div class="userInput">
                    <input type="text" name="niche" class="mainInput" placeholder="Enter your niche (e.g., fitness, travel, cooking)" value="{{ old('niche') }}">
                    @if ($errors->has('niche')) {{-- Checks if there is at least one validation error for the input field named niche. --}}
                        <div class="error">{{ $errors->first('niche') }}</div> {{-- first method Returns the first error message for the niche field as a string. --}}
                    @endif
                    <button type="submit" class="generateContent_button">Generate Ideas</button>
                </div>
            </form>                   
            <div class="generatedContent">
                @isset($niche) 	{{--  Checks if a variable is defined and not null --}}
                {{-- a variable like $niche is only defined and available in the view if: It has been passed from the controller to the view which I did. --}}
                <p>You entered: {{ $niche }}</p><br>
                @endisset

                {{-- <ul>
                    @foreach ($output as $idea)
                        <li>{{ $idea }}</li>
                    @endforeach
                </ul> --}}

                @isset($output)
                    <p>Content Ideas for <strong>{{ $niche }}</strong> niche:</p><br>  
                    <div class="gen">{!! $output !!}</div> {{--!! makes it display as HTML !! --}}
                @endisset
            </div>
        </div>
    </div>
</body>
</html>
{{--  --}}