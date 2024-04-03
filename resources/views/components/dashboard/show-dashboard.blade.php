<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher Budjet</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white">
    <x-header/>

    <div class="max-w-xl mx-auto mt-10 bg-white shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2 text-gray-900">{{$budjet->typeBudjet}}     &    {{$budjet->montant}}</div>
            <p class="text-gray-700 text-base">
                dateBudjt: {{$budjet->dateBudjet}}<br>
                année: {{$budjet->année}}<br>
                
            </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{$budjet->idB}}</span>
        </div>
    </div>
    <a href="{{route('budjet')}}" class="flex justify-center items-center  border-blue-300">back to home</a>
    <p class="mb-24"></p>

    <x-footer/>
</body>

</html>
