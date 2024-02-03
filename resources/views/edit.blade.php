<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="">

    <nav class="bg-white border-gray-200 shadow-md full dark:bg-gray-900 dark:border-gray-700 ">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
            <a href="#" class="flex items-center">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Logo</span>
            </a>
            <button id="navbar-toggle" data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Product
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="absolute z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Python</a>
                                </li>
                                <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">JavaScript<svg
                                            class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <div id="doubleDropdown"
                                        class="absolute z-10 hidden transform bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 translate-x-44">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="doubleDropdownButton">
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">React</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Angular</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Node.js</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Vue.js</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">C#</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign
                                    out</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/dashboard"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="h-full">

        <div class="container px-4 mx-auto">

            <div class="p-2 my-4 bg-gray-300 rounded">
                ...
            </div>

            <div class="grid grid-cols-1 gap-2 p-2 my-4 rounded md:grid-cols-2">

                <div class="p-5 bg-white shadow-md login rounded-2xl">
                    <form method="POST" action="/update/{{ $posts->id }}">
                        @csrf
                        @method("PUT")
                        <label class="block">

                            <span class="block text-sm font-medium text-slate-700">Title</span>
                            <!-- Using form state modifiers, the classes can be identical for every input -->
                            <input type="text" name="title" placeholder="..." value="{{ $posts->title }}"
                                class="block w-1/2 px-3 py-2 mt-1 text-sm bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 " />

                                @error('title')
                                <div class="mt-2 text-sm italic text-red-500 invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror


                            <span class="block text-sm font-medium text-slate-700">Enter Post</span>
                            <!-- Using form state modifiers, the classes can be identical for every input -->
                            <textarea type="text" name="body" rows="6" placeholder="..."
                                class="block w-3/4 px-3 py-2 mt-1 text-sm bg-white border-2 rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 ">{{ $posts->body }}</textarea>

                    @error('body')
                    <div class="mt-2 text-sm italic text-red-500 invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror


                            <button
                                class="bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 text-white fw-bold rounded-xl mt-5 p-2 font-['Outfit']">
                                POST
                            </button>

                        </label>
                        <!-- ... -->
                    </form>
                    <p class="my-2 font-bold text-gray-400">- Create a new <a href="/register"
                            class="p-1 text-gray-500 border-2 rounded">account</a></p>
                </div>
                
                <div class="my-5 intro">
                    <h1 class="font-['Outfit'] text-3xl lg:text-2xl text-gray-600 fw-bolder">
                        ONLINE SHOPPING
                    </h1>
                    <p class="font-serif text-sm italic text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur.
                    </p>
                </div>
                


            </div>




            <div class="grid grid-cols-1 gap-4 mt-14 sm:grid-cols-2 md:grid-cols-3">
                <div class="p-4 bg-white border-2 rounded-lg shadow-md">
                    <h3 class="mb-4 text-lg font-semibold">Div 1</h3>
                    <p>Content for the first div.</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg">
                    <h3 class="mb-4 text-lg font-semibold">Div 2</h3>
                    <p>Content for the second div.</p>
                </div>
                <div class="p-4 bg-gray-200 rounded-lg">
                    <h3 class="mb-4 text-lg font-semibold">Div 3</h3>
                    <p>Content for the third div. This div will only appear on medium screens and above.</p>
                </div>
            </div>
        </div>



        <div class="grid grid-cols-2 gap-4 p-4 sm:grid-cols-3 md:grid-cols-4">
            <div class="p-4 bg-gray-200 rounded-lg">
                ...
            </div>
            <div class="p-4 bg-gray-100 rounded-lg">
                ...
            </div>
            <div class="p-4 bg-gray-200 rounded-lg">
                ...
            </div>
            <div class="p-4 bg-gray-100 rounded-lg">
                ...
            </div>
        </div>

        </div>



    </main>


    <footer class="bottom-0 py-10 mt-4 bg-gray-800 rounded-t-lg">
        <div class="text-2xl text-center">...</div>
    </footer>





    <script src="script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const button = document.getElementById('navbar-toggle');
            const menu = document.getElementById('navbar-dropdown');

            const dropdownButton = document.getElementById('dropdownNavbarLink');
            const dropdownMenu = document.getElementById('dropdownNavbar');

            const doubleDropdownButton = document.getElementById('doubleDropdownButton');
            const doubleDropdown = document.getElementById('doubleDropdown');

            dropdownButton.addEventListener('click', () => {
                dropdownMenu.classList.toggle('hidden');
            });

            doubleDropdownButton.addEventListener('click', () => {
                doubleDropdown.classList.toggle('hidden');
            });

            button.addEventListener('click', function() {
                menu.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>
