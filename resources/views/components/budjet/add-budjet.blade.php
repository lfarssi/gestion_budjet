<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Budjet</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white">
    <x-header/>
    @if($errors->any())
    <div class="bg-red-400 border border-red-600 text-red-700" >
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
        <form action="{{route('store-budjet')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="idB" class="block mb-2">idB:</label>
                <input type="number" id="idB" value="{{old('idB')}}" name="idB" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter idB" >
                @error('idB')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="typeBudjet" class="block mb-2">typeBudjet:</label>
                <input type="text" id="typeBudjet" value="{{old('typeBudjet')}}" name="typeBudjet" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter typeBudjet" >
                @error('typeBudjet')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="montant" class="block mb-2">montant:</label>
                <input type="number" id="montant" value="{{old('montant')}}" name="montant" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter Nom En Français" >
                @error('montant')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="dateBudjet" class="block mb-2">dateBudjet:</label>
                <input type="date" id="dateBudjet" value="{{old('dateBudjet')}}" name="dateBudjet" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter nom en arab" >
                @error('dateBudjet')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="année" class="block mb-2">année:</label>
                <input type="text" pattern="[0-9]{4}" id="année" value="{{old('année')}}" name="année" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter année" >
                @error('année')
                {{$message}}
                @enderror
            </div>
            <div class="flex justify-center">
                <button type="submit" class="px-6 py-3 bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Add Budjet</button>
                <button type="reset"  class="px-6 py-3 bg-gray-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-gray-600"><a href="{{route('budjet')}}">cancel   </a> </button>
            </div>

        </form>
    </div>
    <p class="mb-24"></p>

    <x-footer/>
</body>

</html>
