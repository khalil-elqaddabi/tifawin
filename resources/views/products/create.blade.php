<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-3xl font-bold mb-6">Add New Product</h1>

      

        <form action="{{ route('products.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block font-semibold mb-1">Name</label>
                <input type="text" name="name" class="border p-2 w-full rounded" required>
               
            </div>

            <div>
                <label class="block font-semibold mb-1">Category</label>
                <select name="category_id" class="border p-2 w-full rounded" required>
                    <option value="">-- Select Category --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            
            </div>

            <div>
                <label class="block font-semibold mb-1">Price</label>
                <input type="number" step="0.01" name="price" class="border p-2 w-full rounded" required>
                
            </div>

            <div>
                <label class="block font-semibold mb-1">Stock</label>
                <input type="number" name="stock" class="border p-2 w-full rounded" required>
                
            </div>

            <div>
                <label class="block font-semibold mb-1">Description</label>
                <textarea name="description" class="border p-2 w-full rounded"></textarea>
               
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Save Product
            </button>
        </form>
    </div>

</body>
</html>
