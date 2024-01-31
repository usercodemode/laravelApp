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
    <div class="font-sans bg-gray-100">
        <div class="flex flex-col min-h-screen">
            <header class="flex items-center justify-between px-4 py-6 bg-white shadow-md">
                <div class="text-xl font-bold">My Dashboard</div>
                <div class="flex items-center space-x-4">
                    <button
                        class="px-4 py-2 text-gray-600 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-700">Settings</button>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 hover:text-white">Logout</button>
                    </form>
                </div>
            </header>
            <main class="flex flex-grow px-4 py-8">
                <aside class="flex flex-col justify-between w-56 mr-4 bg-white rounded-md shadow-md">
                    <nav class="px-4 py-4 space-y-2">
                        <a href="#" class="text-base font-medium text-gray-600 hover:text-gray-700">Overview</a>
                        <a href="#" class="text-base font-medium text-gray-600 hover:text-gray-700">Users</a>
                        <a href="#" class="text-base font-medium text-gray-600 hover:text-gray-700">Posts</a>
                        <a href="#" class="text-base font-medium text-gray-600 hover:text-gray-700">Analytics</a>
                    </nav>
                    <footer class="px-4 py-4 text-sm text-center text-gray-500">
                        © 2024 My Company
                    </footer>
                </aside>
                <div class="flex-grow p-4 bg-white rounded-md shadow-md">
                  @php
                  // dd($posts->title);
                  echo $posts->title;
                  @endphp
                    <h2 class="mb-4 text-lg font-bold">Welcome {{ auth()->user()->name }}!</h2>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div class="px-4 py-4 bg-gray-100 rounded-md">
                            <h3 class="mb-2 text-base font-semibold">Users</h3>
                            <span class="text-lg font-bold">1,234</span>
                        </div>
                        <div class="px-4 py-4 bg-gray-100 rounded-md">
                            <h3 class="mb-2 text-base font-semibold">Posts</h3>
                            <span class="text-lg font-bold">567</span>
                        </div>
                    </div>
                    <div class="px-4 py-4 bg-gray-100 rounded-md">
                        <h3 class="mb-2 text-base font-semibold">Recent Users</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <img src="https://picsum.photos/50/50" alt="User Avatar"
                                    class="w-8 h-8 mr-2 rounded-full">
                                <span class="text-gray-600">John Doe</span>
                            </li>
                            <li class="flex items-center">
                                <img src="https://picsum.photos/50/50" alt="User Avatar"
                                    class="w-8 h-8 mr-2 rounded-full">
                                <span class="text-gray-600">Jane Doe</span>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>


          <div class="container px-4 mx-auto">
            <table class="w-full text-left rounded-lg shadow-md table-auto whitespace-nowrap">
                <thead>
                  <tr>
                    <th class="px-4 py-3 text-gray-500 border-b-2 border-gray-200 title-case">Name</th>
                    <th class="px-4 py-3 text-gray-500 border-b-2 border-gray-200 title-case">Age</th>
                    <th class="px-4 py-3 text-gray-500 border-b-2 border-gray-200 title-case">City</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="odd:bg-gray-100">
                    <td class="px-4 py-3 border-b border-gray-200">John Doe</td>
                    <td class="px-4 py-3 border-b border-gray-200">30</td>
                    <td class="px-4 py-3 border-b border-gray-200">New York</td>
                  </tr>
                  <tr>
                    <td class="px-4 py-3 border-b border-gray-200">Jane Doe</td>
                    <td class="px-4 py-3 border-b border-gray-200">25</td>
                    <td class="px-4 py-3 border-b border-gray-200">London</td>
                  </tr>
                  <tr class="odd:bg-gray-100">
                    <td class="px-4 py-3 border-b border-gray-200">Alice Smith</td>
                    <td class="px-4 py-3 border-b border-gray-200">40</td>
                    <td class="px-4 py-3 border-b border-gray-200">Paris</td>
                  </tr>
                </tbody>
              </table>
              

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
