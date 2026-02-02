<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
</head>
<body>
  <h1 class="text-white text-6xl">Edit Product</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="block">Name</label>
        <input type="text" name="name" class="border p-2 w-full" value="{{ $product->name }}" required>
    </div>

    <div>
        <label class="block">Category</label>
        <select name="category_id" class="border p-2 w-full" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="block">Price</label>
        <input type="number" step="0.01" name="price" class="border p-2 w-full" value="{{ $product->price }}" required>
    </div>

    <div>
        <label class="block">Stock</label>
        <input type="number" name="stock" class="border p-2 w-full" value="{{ $product->stock }}" required>
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
        Update
    </button>
</form>
</html>
