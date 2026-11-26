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
    <div class="Products border-2 border-gray-700 m-5 rounded-lg p-2">
        <h3 class="">Products:</h3>
        <div>
            <ul>
                <li>
                    <div class="product border-3 border-gray-700 rounded-xl max-w-80">
                        <img src="{{ asset('img/productImage.png') }}" alt="" class="rounded-lg size-80">
                        <div class="m-2">
                            <p class="title font-bold">Title</p>
                            <p class="title font-bold">U$999.99</p>
                            <p class="description font-light">Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nam, illum reprehenderit voluptatibus corporis nemo sapiente pariatur tempora est minus sed aliquid porro ad repellendus ipsam, maiores iste quae atque.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
<x-footer></x-footer>
</body>
</html>
