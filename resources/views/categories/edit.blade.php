<!-- <h1>Edit Category</h1>

<form method="POST" action="{{ route('categories.update', $category->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $category->name }}"><br><br>
    <textarea name="description">{{ $category->description }}</textarea><br><br>

    <button type="submit">Update</button>
</form> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>edit Category</title>

</head>

<body class="bg-[#30343E]  flex flex-col justify-center items-center gap-2.5">
    <nav class="bg-black w-full flex flex-col justify-center items-center h-30 mb-7">
        <h1 class="text-white text-6xl">Edit Category</h1>
    </nav>
    <form class="flex flex-col gap-1 border-2 w-100 p-4 rounded-lg bg-[#808DA1]" action="{{route('categories.update', $category->id)}}" method="POST">
        @csrf
        @method('PUT')
        <a href="{{route('categories.index')}}" class="mb-3"><b><u><-- Return Home</u></b></a>
        <input class="border text-black p-2 rounded-md" type="text" name="name" value="{{ $category->name }}"><br><br>
        <textarea class="text-black border p-2 rounded-md" name="description">{{ $category->description }}</textarea><br><br>

        <button class="" type="submit">Update</button>


    </form>
</body>

</html>