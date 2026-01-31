<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products List</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        th { background-color: #eee; }
        a { margin-right: 5px; }
    </style>
</head>
<body>
  <h1>Products List</h1>

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
                    <a href="{{ route('products.show', $product->id) }}" class="text-blue-500">View</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-500">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Delete?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
