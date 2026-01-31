<!-- <h1>Add Category</h1>

<form method="POST" action="{{ route('categories.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Name"><br><br>
    <textarea name="description" placeholder="Description"></textarea><br><br>

    <button type="submit">Save</button>
</form>

<!DOCTYPE html>
<html lang="en"> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Create Category</title>

</head>

<body class="bg-[#30343E]  flex flex-col justify-center items-center gap-2.5">
    <nav class="bg-black w-full flex flex-col justify-center items-center h-30 mb-7">
        <h1 class="text-white text-6xl">Create  Category</h1>
    </nav>
    <form class="flex flex-col gap-1 border-2 w-100 p-4 rounded-lg bg-[#808DA1]" action="{{ route('categories.store') }}" method="POST">
        @csrf
        <a href="{{route('categories.index')}}" class="mb-3"><b><u><-- Return Home</u></b></a>
        <input class="border text-black p-2 rounded-md" type="text" name="name" placeholder="Name"><br><br>
        <textarea class="text-black border p-2 rounded-md" name="description" placeholder=" Desscription"></textarea><br><br>

        <button class="" type="submit">Save</button>


    </form>
</body>

</html>