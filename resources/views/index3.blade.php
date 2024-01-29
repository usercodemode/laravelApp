<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="w-full">



  <nav class="fixed top-0 left-0 right-0 z-50 bg-gray-800">
    <div class="container flex items-center justify-between h-16 px-4 mx-auto">
      <a class="flex items-center text-xl font-bold text-white" href="#">
        My Brand
      </a>
      <button id="menu-toggle" class="md:hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
  
      <div id="menu-links" class="items-center hidden space-x-4 text-white md:flex">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
      </div>
    </div>
  </nav>
  


    <main>

      <div class="container w-full">
        <div class="p-2 m-2 bg-gray-300 rounded">
          ...
      </div>

      <div class="p-2 m-2 border-2 rounded bg-yellow-50 min-h-32">
          ...
      </div>

      <div class="container p-2 m-2 bg-gray-300 rounded">
          <div class="grid grid-flow-col grid-cols-3 gap-4 menu">
              <div class="inline p-2 bg-white rounded h-30 item">...</div>
              <div class="inline p-2 bg-white rounded h-30 item">...</div>
              <div class="inline p-2 bg-white rounded h-30 item">...</div>
              <div class="inline p-2 bg-white rounded h-30 item">...</div>
              <div class="inline p-2 bg-white rounded h-30 item">...</div>
          </div>
      </div>

      </div>
        

    </main>

    <script src="script.js"></script>

</body>

</html>
