<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier jurie</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Add some custom styling for the table */
        .table-row {
            display: flex;
            margin-bottom: 10px;
        }

        .table-row input {
            flex: 1;
            margin-right: 5px;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
    <x-header />
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
        <h1 class="text-xl font-bold mb-6 text-center">Update Jury</h1>
        <form action="{{ route('update-jurie', $id->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div id="tableContainer">
                <div class="table-row">
                    <input type="number" value="{{ $id->id }}" name="id" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter id">
                    <input type="text" value="{{ $id->numJury }}" name="numJury" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter numJury">
                    <input type="text" value="{{ $id->matiere }}" name="matiere" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter matiere">
                    <input type="number" value="{{ $id->nbrCopies }}" name="nbrCopies" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter nbrCopies">
                </div>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="px-6 py-3 bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Update jurie</button>
            </div>
        </form>
    </div>
    <p class="mb-24"></p>
    <x-footer />

    <script>
        // Function to dynamically add rows to the table
        function addRow() {
            const tableContainer = document.getElementById('tableContainer');
            const newRow = document.createElement('div');
            newRow.classList.add('table-row');
            newRow.innerHTML += `
                <input type="number" value="" name="id[]" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter id">
                <input type="text" value="" name="numJury[]" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter numJury">
                <input type="text" value="" name="matiere[]" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter matiere">
                <input type="number" value="" name="nbrCopies[]" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter nbrCopies">
            `;
            tableContainer.appendChild(newRow);
        }

        // Function to check if a row is empty and remove it
        function checkRow(input) {
            const row = input.parentElement;
            const isEmpty = Array.from(row.querySelectorAll('input')).every(field => field.value.trim() === '');

            if (isEmpty) {
                row.parentElement.removeChild(row);
            }
        }
    </script>
</body>

</html>
