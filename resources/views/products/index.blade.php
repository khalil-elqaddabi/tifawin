<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products List</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-[#30343E]  flex flex-col justify-center items-center gap-2.5">
                <nav class="bg-black w-full flex flex-col justify-center items-center h-30 mb-7">

  <h1 class="text-white text-6xl">Products List</h1>
                </nav>

                <div class="flex flex-col gap-1 border-2 w-[90%] p-4 rounded-lg bg-[#808DA1]">
<a href="{{ route('products.create') }}" class="mb-3 text-2xl inline-block">
    <u>+ Add product</u>
</a>

<table class="w-full border-collapse border">
    <thead>
        <tr class="bg-gray-200">
            <th class="border p-2">ID</th>
            <th class="border p-2">Name</th>
            <th class="border p-2">Category</th>
            <th class="border p-2">Price</th>
            <th class="border p-2">Stock</th>
            <th class="border p-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr class="border-b">
                <td class="border p-2">{{ $product->id }}</td>
                <td class="border p-2">{{ $product->name }}</td>
                <td class="border p-2">{{ $product->category->name ?? 'N/A' }}</td>
                <td class="border p-2">{{ number_format($product->price, 2) }} MAD</td>
                <td class="border p-2">{{ $product->stock }}</td>
                <td class="border p-2 flex gap-2">
                    <a href="{{ route('products.edit', $product->id) }}" class="text-blue-900">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Delete?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-900">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</body>
</html>
