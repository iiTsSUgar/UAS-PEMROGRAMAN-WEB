<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>..:: - Penerapan CRUD pada Laravel ::..</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif

        <div class="w-screen h-screen flex justify-center font-mono ">
            <div class="max-w-7xl my-auto mx-auto ">
                <h2 class="text-center text-4xl ">Perubahan Produk</h2><br />
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif
                <form class="" method="post"
                    action="{{ action('App\Http\Controllers\ProductController@update', $id) }}">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="md:flex md:items-center mb-6 justify-center">
                        <div class="md:w-1/5">
                            <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0"
                                for="inline-full-name">
                                Nama
                            </label>
                        </div>
                        <div class="md:w-1/2">
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 mr-4"
                                name="name" id="inline-full-name" type="text" value="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6 justify-center">
                        <div class="md:w-1/5">
                            <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0"
                                for="inline-full-name">
                                Harga
                            </label>
                        </div>
                        <div class="md:w-1/2">
                            <input
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 mr-4"
                                name="price" id="inline-full-name" type="text" value="{{ $product->price }}">
                        </div>
                    </div>
                    <div class="md:flex md:items-center justify-center">
                        <div class="md:w-1/2">
                            <button
                                class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                type="submit">
                                Ubah Produk
                            </button>
                        </div>
                    </div>
                </form>


            </div>

        </div>
</body>

</html>
