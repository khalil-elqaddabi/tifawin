<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Edit Product</title>
</head>
<body class="bg-[#30343E]  flex flex-col justify-center items-center gap-2.5">
        <nav class="bg-black w-full flex flex-col justify-center items-center h-30 mb-7">

  <h1 class="text-white text-6xl">Edit Product</h1>
        </nav>

<form action="{{ route('products.update', $product->id) }}" method="POST" class="flex flex-col gap-1 border-2 w-100 p-4 rounded-lg bg-[#808DA1]">
    @csrf
    @method('PUT')
          <a href="{{ route('products.index') }}" class="mb-3 text-2xl inline-block">
    <u><-- return home</u>
</a>
      

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

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
        Update
    </button>
</form>
</html>
