<!-- <!DOCTYPE html>
<html>

<head>
    <title>Categories</title>
</head>

<body>

    <h1>Categories</h1>

    <a href="{{ route('categories.create') }}">+ Add Category</a>

    @if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($categories as $category)
        <li>
            {{ $category->name }}

            <a href="{{ route('categories.edit', $category->id) }}">Edit</a>

            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>

</body>

</html> -->



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Categories</title>

</head>

<body class="bg-[#30343E]  flex flex-col justify-center items-center gap-2.5">
    <nav class="bg-black w-full flex flex-col justify-center items-center h-30 mb-7">
        <h1 class="text-white text-6xl">Categories</h1>
    </nav>
    <action class="flex flex-col gap-1 border-2 w-300 h-100  p-4 rounded-lg bg-[#808DA1]" method="POST">
        @csrf
        <a href="{{ route('categories.create') }}" class="mb-3 text-2xl"><u>+ Add Category</u></a>
        @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
        @endif
        <ul>
            @foreach($categories as $category)
            <li class="flex  gap-3  w-[90%]">
                <div class="flex justify-between w-full ">
                    <div class="text-3xl">{{ $category->name }}</div>
                    <div class="flex w-25 gap-2">
                        <a class="text-blue-700" href="{{ route('categories.edit', $category->id) }}">Edit</a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-700" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </li>
            <hr class="border">

            @endforeach
        </ul>


    </action>
</body>

</html>