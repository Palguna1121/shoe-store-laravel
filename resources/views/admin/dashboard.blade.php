@extends('admin.template.layouts')

@section('title', 'Admin Dashboard')

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

        <!-- section cards -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            About me
        </h4>
        <a class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" href="{{ route('admin.index') }}">
            <div class="flex items-center">
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Nama : I Made Palguna Widiarsana
                </p>
            </div>
            <div class="flex items-center">
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    NIM : 2301010364
                </p>
            </div>
            <div class="flex items-center justify-between">
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Prodi/Kelas : IF-MTI / O
                </p>
                <span class="text-sm text-gray-600 dark:text-gray-400">View more &RightArrow;</span>
            </div>

        </a>


    </div>
@endsection
