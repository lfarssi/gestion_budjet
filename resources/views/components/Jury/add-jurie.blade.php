<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Budjet</title>
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
        <h1 class="text-xl font-bold mb-6 text-center">Add New Jury</h1>
        <form action="{{route('store-jurie')}}" method="POST" id="jurieForm">
            @csrf
            <div id="tableContainer">
                <div class="table-row">
                    <input type="text" name="id[]" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter id" oninput="checkRow(this)">
                    <input type="text" name="numJury[]" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter numJury">
                    <input type="number" name="matiere[]" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter matiere">
                    <input type="number" name="nbrCopies[]" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter nbrCopies">
                </div>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="px-6 py-3 bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Add Jury</button>
                <button type="reset"  class="px-6 py-3 bg-gray-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-gray-600"><a href="{{route('jurie')}}">cancel   </a> </button>
            </div>
        </form>
    </div>
    <p class="mb-24"></p>
    <x-footer/>

    <script>
        function checkRow(input) {
            // Get the parent row of the input
            const row = input.parentElement;
            const isEmpty = Array.from(row.querySelectorAll('input')).every(field => field.value.trim() === '');

            // If all fields in the row are empty, remove the row
            if (isEmpty) {
                row.parentElement.removeChild(row);
            } else {
                // If not all fields are empty and there's no next row, add a new row
                const nextRow = row.nextElementSibling;
                if (!nextRow) {
                    addRow();
                }
            }
        }

        function addRow() {
            const tableContainer = document.getElementById('tableContainer');
            const newRow = document.createElement('div');
            newRow.classList.add('table-row');
            newRow.innerHTML = `
                <input type="text" name="id[]" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter id" oninput="checkRow(this)">
                <input type="text" name="numJury[]" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter numJury">
                <input type="number" name="matiere[]" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter matiere">
                <input type="number" name="nbrCopies[]" class="w-full px-3 py-2 rounded-md bg-gray-700 focus:outline-none focus:border-blue-500" placeholder="Enter nbrCopies">
            `;
            tableContainer.appendChild(newRow);
        }
    </script>
</body>
</html>
