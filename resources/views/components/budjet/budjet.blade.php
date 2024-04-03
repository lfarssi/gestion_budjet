<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget</title>

    <!-- Include TailwindCSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Include Core UI Data Table CSS -->
    <link href="{{ asset('css/coreui.min.css') }}" rel="stylesheet">
    <style>
        .sidbar{
        position:fixed;
        left: -250px;
        width: 250px;
        height:100%;
        transition: all .5s ease;
    }
    .sidbar header{
        font-size:22px;
        color: white;
        text-align: center;
        line-height: 50px;
        user-select: none;
    }
    .sidbar ul a{
        display: block;
        height: 100%;
        width: 100%;
        line-height: 65px;
        font-size: 20px;
        color: white;
        padding-left: 40px;
        box-sizing: border-box;
        border-top: 1px solid rgba(255,255,255,0.1);
        border-bottom: 1px solid black;
        transition: 0.4s;
    }
    .sidbar li:hover a{
        padding-left: 50px;
    }
    .sidbar ul a i{
        margin-right: 16px;
    }
    
    #check{
        display: none;
    }
    label #btn,label #cancel{
        position: absolute;
        cursor: pointer;
        border-radius: 3px;
    }
    label #btn{
        left: 40px;
        top: 25px;
        font-size:35px;
        color: white;
        padding: 6px 12px;
        transition: all .5s;
    }
    label #cancel{
        z-index:1111;
        left: -195px;
        top: 17px;
        font-size: 30px;
        color: white;
        padding: 4px 9px;
    }
        #check:checked ~ .sidbar{
            left: 0px;
        }
        #check:checked ~ label #btn{
            left: 250px;
            opacity: 0;
            pointer-events: none;
        }
        #check:checked ~ label #cancel{
            left:195px;
        }
        .section{
            transition: all .5s;
        }
        #check:checked ~ .section{
            margin-left: 250px;
        }
        </style>
</head>

<body class="bg-gray-100">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <input type="checkbox" id="check">
            <label for="check" class="bg-gray-800"> 
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
            </label>
            <div class="sidbar">
                <header class="bg-gray-900">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-19 m-auto w-14" src="../../../maroc.png" alt="الوزارة">
                    </div>
                </header>
                <ul class="bg-gray-900">
                    <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
                    <li><a href="{{route('etablissement')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"><i class="fas fa-link"></i> Etablissements</a></li>
                    <li><a href="{{route('personne')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"><i class="fas fa-link"></i> Personnes</a></li>
                    <li><a href="{{route('budjet')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"><i class="fas fa-link"></i> Budjets</a></li>
                    <li><a href="{{route('jurie')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"><i class="fas fa-link"></i> Jurie</a></li>
                    <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
                    <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
                    <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
                    <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
                </ul>
            </div>
            <x-header/>
    <div class="section max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="overflow-x-auto">
            <table id="budjetTable" class="table-auto min-w-full divide-y divide-gray-200 bg-white shadow overflow-hidden rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">idB</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">typeBudjet</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">montant </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">dateBudjet</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Année</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">created at</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($budjets as $budjet)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{$budjet->idB}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$budjet->typeBudjet}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$budjet->montant}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$budjet->dateBudjet}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$budjet->année}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$budjet->created_at}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button onclick="toggleButtons('actions-{{$budjet->idB}}')" class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Show</button>
                            <div id="actions-{{$budjet->idB}}" class="hidden mt-2 flex space-x-2">
                                <form action="{{route('edite-budjet',$budjet->idB)}}" method="get">
                                    @csrf
                                    <button class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</button>
                                </form>
                                <form action="{{route('delete-budjet',$budjet->idB)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
                                </form>
                                <button class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600"><a href="{{route('show-budjet',$budjet->idB)}}">Display</a></button>
                                <button class="px-3 py-1 bg-gray-100 text-black rounded hover:bg-gray-300"><a href="{{route('budjet-pdf')}}">export</a></button>
                                
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$budjets->links()}}
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Include Core UI Data Table JS -->
    <script src="{{ asset('js/coreui-tables.min.js') }}"></script>

    <script>
        function toggleButtons(id) {
            const actions = document.getElementById(id);
            actions.classList.toggle('hidden');
        }

        // Initialize Core UI Data Table
        $(document).ready(function() {
            new CoreUI.Table(document.getElementById('budjetTable'), {
                searchable: true, // Enable search functionality
                sortable: true, // Enable sorting functionality
                filterable: true // Enable filtering functionality
            });
        });
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        document.getElementById('toggle-sidebar').addEventListener('click', function() {
            sidebar.classList.toggle('closed');
            mainContent.classList.toggle('main-content-closed');
        });
    </script>
    <x-footer/>
</body>

</html>
