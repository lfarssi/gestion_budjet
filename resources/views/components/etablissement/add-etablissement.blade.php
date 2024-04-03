<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Etablissement</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white">
    @auth

    <x-header/>
    @if($errors->any())
    <div class="bg-red-400 border border-red-600 text-red-700">
        <h5>Errors : </h5>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="max-w-md mx-auto mt-10 p-6 rounded-md shadow-md bg-gray-800">
        <h1 class="text-xl font-bold mb-6 text-center">Add New Person</h1>
        <form action="{{route('store-etablissement')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="code" class="block mb-2">code:</label>
                <input type="text" value="{{old('Code')}}" id="code" name="Code" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter code" >
                @error('Code')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="nomFr" class="block mb-2">nomFr:</label>
                <input type="text" value="{{old('NomFr')}}" id="nomFr" name="NomFr" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter Nom En Français" >
                @error('NomFr')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="nomAr" class="block mb-2">nomAr:</label>
                <input type="text" id="nomAr" value="{{old('NomAr')}}" name="NomAr" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter nom en arab" >
                @error('NomAr')
                {{$message}}
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="person" class="block mb-2">person:</label>
                <input type="number" id="person" value="{{old('person')}}" name="person" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter person" >
                @error('person')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="commune" class="block mb-2">commune:</label>
                <input type="number" id="commune" value="{{old('commune')}}" name="commune" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter commune" >
                @error('commune')
                {{$message}}
                @enderror
            </div>
            <div class="flex justify-center">
                <button type="submit" class="px-6 py-3 bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Add Person</button>
                <button type="reset"  class="px-6 py-3 bg-gray-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-gray-600"><a href="{{route('etablissement')}}">cancel   </a> </button>
            </div>
        </form>
    </div>
    <p class="mb-24"></p>
    <x-footer/>
            
    @endauth
</body>

</html>
