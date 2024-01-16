<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <h1>Edit</h1>
    <form action="{{route('etudiant.update',$etudiant)}}" method="POST">
        @method("PUT")
        @csrf
        <input value="{{$etudiant->nom}}" name="nom" type="text">
        <br>
        <input value="{{$etudiant->filier}}" name="filier" type="text">
        <br>
        <input type="submit" class="bg-orange-500  text-white font-bold py-2 px-4 rounded-full" value="modifier">
    </form>

</body>
</html>
