@extends('admin.template.layouts')

@section('title', 'Admin Create Product')

@section('content')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Welcome Lord🔥🔥🔥
        </h2>
        <!-- CTA -->
        <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
            href="https://github.com/Palguna1121" target="_blank">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                </svg>
                <span>Check on my GitHub</span>
            </div>
            <span>View more &RightArrow;</span>
        </a>

        <!-- section form -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Create Product
        </h4>

        <form action="{{ route('product.store') }}" method="POST" class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            @csrf
            @method('POST')
            <label class="block text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">Product Name</span>
                <input type="text" required name="name"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Product Name" />
            </label>
            <label class="block text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">Description</span>
                <input type="text" required name="description"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Description" />
            </label>
            <label class="block text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">Price</span>
                <input type="number" required name="price"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Price" />
            </label>
            <label class="block text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">URL Image</span>
                <input type="text" required name="url_image"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="URL Image" />
            </label>
            <label class="block text-sm mb-4">
                <span class="text-gray-700 dark:text-gray-400">Quantity</span>
                <input type="number" required name="qty"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Quantity" />
            </label>
            <button type="submit"
                class="mt-2 px-4 py-2 text-sm font-semibold text-white bg-purple-600 hover:bg-purple-700 rounded-lg focus:outline-none focus:shadow-outline-purple">
                Save
            </button>
        </form>


    </div>
@endsection
