<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    @auth
        
    <header>
        <x-header/>
    </header>   
    <main>
        @if (route('personne'))
        <x-personne/>
        @endif
        @if (route('etablissement'))
        <x-etablissement/>
        @endif
        @if (route('budjet'))
        <x-budjet/>
        @endif
    </main>
        <x-footer/>
    @endauth
</body>
</html>
