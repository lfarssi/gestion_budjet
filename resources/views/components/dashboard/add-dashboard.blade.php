<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Details</title>
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
        <h1 class="text-xl font-bold mb-6 text-center">Add New Details</h1>
        <form action="{{route('store-dashboard')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="id" class="block mb-2">id:</label>
                <input type="number" id="id" value="{{old('id')}}" name="id" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter id" >
                @error('id')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="person" class="block mb-2">person:</label>
                <select id="person" name="person" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500">
                    <option value="">Select person</option>
                    @foreach($persons as $person)
                    <option value="{{$person->id}}" {{ old('person') == $person->id ? 'selected' : '' }}>{{$person->nomAr}}</option>
                    @endforeach
                </select>
                @error('person')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="jury" class="block mb-2">jury:</label>
                <select id="jury" name="jury" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500">
                    <option value="">Select jury</option>
                    @foreach($juries as $jury)
                    <option value="{{$jury->id}}" {{ old('jury') == $jury->id ? 'selected' : '' }}>{{$jury->numJury}}</option>
                    @endforeach
                </select>
                @error('jury')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="taux" class="block mb-2">taux:</label>
                <input type="date" id="taux" value="{{old('taux')}}" name="taux" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter le taux" >
                @error('taux')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="nbrCopies" class="block mb-2">nbrCopies:</label>
                <input type="number"  id="nbrCopies" value="{{old('nbrCopies')}}" name="nbrCopies" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter nbrCopies" >
                @error('nbrCopies')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="prixCopie" class="block mb-2">prixCopie:</label>
                <input type="number"  id="prixCopie" value="{{old('prixCopie')}}" name="prixCopie" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter prixCopie" >
                @error('prixCopie')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="dateCorrection" class="block mb-2">dateCorrection:</label>
                <input type="date"  id="dateCorrection" value="{{old('dateCorrection')}}" name="dateCorrection" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter dateCorrection" >
                @error('dateCorrection')
                {{$message}}
                @enderror
            </div>
            <div class="flex justify-center">
                <button type="submit" class="px-6 py-3 bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Add Details</button>
            </div>

        </form>
    </div>
    <p class="mb-24"></p>

    <x-footer/>
</body>

</html>
