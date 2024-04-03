<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Personnage</title>
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
        <form action="{{route('store-personne')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="DDRP" class="block mb-2">DDRP:</label>
                <input type="text" id="DDRP" value="{{old('DDRP')}}" name="DDRP" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter DDRP" >
                @error('DDRP')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="CIN" class="block mb-2">CIN:</label>
                <input type="text" id="CIN" value="{{old('CIN')}}" name="CIN" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter CIN" >
                @error('CIN')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="nomFr" class="block mb-2">nomFr:</label>
                <input type="text" id="nomFr" value="{{old('nomFr')}}" name="nomFr" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter Nom En Français" >
                @error('nomFr')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="nomAr" class="block mb-2">nomAr:</label>
                <input type="text" id="nomAr" value="{{old('nomAr')}}" name="nomAr" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter nom en arab" >
                @error('nomAr')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="etabs" class="block mb-2">Etablissement:</label>
                <select id="etabs" name="etabs" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500">
                    <option value="">Select Etablissement</option>
                    @foreach($etablissements as $etablissement)
                        <option value="{{ $etablissement->id }}">{{ $etablissement->NomAr }}</option>
                    @endforeach
                </select>
                @error('etabs')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="grade" class="block mb-2">Grade:</label>
                <select id="grade" name="grade" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500">
                    <option value="">Select Grade</option>
                    @foreach($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                    @endforeach
                </select>
                @error('grade')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="fonction" class="block mb-2">Fonction:</label>
                <select id="fonction" name="fonction" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500">
                    <option value="">Select Fonction</option>
                    @foreach($fonctions as $fonction)
                        <option value="{{ $fonction->id }}">{{ $fonction->name }}</option>
                    @endforeach
                </select>
                @error('fonction')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="matiere" class="block mb-2">Matiere:</label>
                <select id="matiere" name="matiere" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500">
                    <option value="">Select Matiere</option>
                    @foreach($matieres as $matiere)
                        <option value="{{ $matiere->id }}">{{ $matiere->name }}</option>
                    @endforeach
                </select>
                @error('matiere')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="RIB" class="block mb-2">RIB:</label>
                <input type="text" id="RIB" value="{{old('RIB')}}" name="RIB" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter RIB" >
                @error('RIB')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="fichier" class="block mb-2">fichier:</label>
                <input type="file" value="{{old('fichier')}}" id="fichier" name="fichier" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter fichier" >
                @error('fichier')
                {{$message}}
                @enderror
            </div>
            <div class="mb-4">
                <label for="taux" class="block mb-2">taux:</label>
                <input type="number" value="{{old('taux')}}" id="taux" name="taux" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter taux" >
                @error('taux')
                {{$message}}
                @enderror
            </div>
            <div class="flex justify-center">
                <button type="submit" class="px-6 py-3 bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Add Person</button>
                <button type="reset"  class="px-6 py-3 bg-gray-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-gray-600"><a href="{{route('personne')}}">cancel   </a> </button>

            </div>

        </form>
    </div>
    <p class="mb-24"></p>

    <x-footer/>
</body>

</html>
