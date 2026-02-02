<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Document</title>
</head>
<body class="bg-[#30343E]  flex flex-col justify-center items-center gap-2.5">
    
    <nav class="bg-black w-full flex flex-col justify-center items-center h-30 mb-7">
        <h1 class="text-white text-6xl">TIFAWIN</h1>
    </nav>
                <div class="flex  gap-30 mt-7">
            <a class="bg-[#808DA1] p-4 rounded-2xl" href="{{url('/categories')}}">CATEGORIES</a>
            <a class="bg-[#808DA1] p-4 rounded-2xl" href="{{url('/products')}}">PRODUCTS</a>
            </div>
        


</body>
</html>