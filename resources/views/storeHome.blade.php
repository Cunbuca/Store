<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c87bff8445.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Store</title>
</head>

<body class="body bg-gray-200">
    <x-header></x-header>
    <div class="Products m-5">
        <h1 class="Title text-3xl mb-3">Products:</h1>
        <div>
            <ul class="grid grid-cols-[repeat(auto-fill,minmax(20rem,1fr))] gap-4">
                @php
                $productList = [
                    ["name" => "productName",
                    "id" => 1,
                    "price" => 999.99,
                    "description" => "productDescription: Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nam, illum reprehenderit voluptatibus corporis nemo sapiente pariatur tempora est minus sed aliquid porro ad repellendus ipsam, maiores iste quae atque."]
                ];
                for ($i=1; $i<10; $i++){ 
                    array_push($productList, $productList[0]); 
                } 
                @endphp 
                @foreach ($productList as $product) 
                <li>
                    <div class="product border-2 border-gray-700 rounded-xl max-w-80 mx-auto">
                        <img src="{{ asset('img/productImage.png') }}" alt="productImageAlt" class="rounded-lg size-80">
                        <div class="m-2">
                            <p class="title font-bold">
                                {{ $product["name"] }}
                            </p>
                            <button id="addToCart-btn" data-url="{{ route('addToCart', $product["id"]) }}">
                                <i class="fa-solid fa-cart-shopping" style="color: rgb(0, 0, 0);"></i>
                            </button>
                            <p class="title font-bold">
                                {{ $product["price"] }}
                            </p>
                            <p class="description font-light">
                                {{ $product["description"] }}
                            </p>
                        </div>
                    </div>
                    </li>
                @endforeach
                <script>
                    document.getElementById('addToCart-btn').addEventListener('click', async (e) => {
                        const res = await fetch(e.target.dataset.url, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json',
                            },
                        });
                            const data = await res.json();
                            console.log(data);
                    });
                </script>
            </ul>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>