<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<div class="">
    <h1 class="font-mono text-center text-2xl">Tous les etudiants</h1>

    <br>
    <a href="{{route('etudiant.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Ajoute</a>
    <hr class="mt-8">
    <table class="w-full text-sm text-left  rtl:text-right text-gray-500 dark:text-gray-400  ">
        <thead class="text-xs text-gray-700 uppercase bg-green-50 dark:bg-gray-700 dark:text-gray-400">
            <th pe="col" class="px-6 py-3">Id</th>
            <th pe="col" class="px-6 py-3">Nom</th>
            <th pe="col" class="px-6 py-3">Fillier</th>
            <th pe="col" class="px-6 py-3">Action</th>
        </thead>
        <tbody>
            @foreach ($allEtudiant as $item)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-6 py-4">{{$item->id}}</td>
                    <td class="px-6 py-4">{{$item->nom}}</td>
                    <td class="px-6 py-4">{{$item->filier}}</td>
                    <td class="px-6 py-4 flex flex-row space-x-2">

                        <form action="{{route('etudiant.show',$item)}}" method="get">
                            <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-full">Modifier</button>
                        </form>
                        <form action="{{route("etudiant.destroy",$item)}}" method="post">
                            @method("DELETE")
                            @csrf
                            <button class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div><br><br>
    <div>
    <h1 class="font-mono text-center text-2xl">Tous les Formateurs</h1>

<br>
<a href="{{route('formateur.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Ajoute</a>
<hr class="mt-8">
<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400  ">
    <thead class="text-xs text-gray-700 uppercase bg-green-50 dark:bg-gray-700 dark:text-gray-400">
        <th pe="col" class="px-6 py-3">Id</th>
        <th pe="col" class="px-6 py-3">Nom</th>
        <th pe="col" class="px-6 py-3">Prenom</th>
        <th pe="col" class="px-6 py-3">Action</th>
    </thead>
    <tbody>
        @foreach ($allFormateur as $item)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-6 py-4">{{$item->id}}</td>
                <td class="px-6 py-4">{{$item->nom}}</td>
                <td class="px-6 py-4">{{$item->prenom}}</td>

                <td class="px-6 py-4 flex flex-row space-x-2">

                    <form action="{{route('formateur.show',$item)}}" method="get">
                        <button class="bg-orange-500 hover:bg-orange-700  text-white font-bold py-2 px-4 rounded-full">Modifier</button>
                    </form>
                    <form action="{{route("formateur.destroy",$item)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="bg-red-400 hover:bg-red-700  text-white font-bold py-2 px-4 rounded-full">Supprimer</button>
                    </form>
                </td>


            </tr>
        @endforeach
    </tbody>
</table>

    </div>

</body>
</html>
