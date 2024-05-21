<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#edccce] flex flex-col h-screen">
  
<nav class="flex items-center justify-between flex-wrap bg-gray-400 p-6 w-full">
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
<!------------------------------------------------------ Menu Icon ---------------------------------------------------------------->
    </button>
  </div>
  <div class="h-full flex text-l lg:flex-grow items-center justify-center">
    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-1000 hover:text-white mr-4">
      HOGWARTS UNIVERSITY
    </a>
  </div>
  <div>
    <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">LOGIN</a>
  </div>
</nav>

<!--------------------------------------------------- Centered content and button ------------------------------------------------>
<div class="flex flex-col items-center justify-center flex-grow">
  <h1 class="text-3xl mb-6">Dear Learners summer courses registration are open now. Please enroll if not already</h1>
  <a href="#" class="inline-block text-sm px-6 py-3 leading-none border rounded text-white bg-yellow-600 hover:bg-green-700">REGISTER NOW</a>
</div>

<!-- -----------------------------------------------------footer--------------------------------------------------------------------------------- -->
<footer class="bg-gray-800 rounded-lg shadow m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-white sm:text-center dark:text-gray-400">get summer courses@learners.</span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-white dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">About</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
</footer>

</body>
</html>

