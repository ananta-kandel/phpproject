<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./index.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cyan-500">
<div class="min-h-screen h-9 bg-cyan-300 text-gray-800 antialiased px-4 py-6 flex flex-col justify-center sm:py-12">
  <div class="relative py-3 sm:max-w-xl mx-auto text-center">
    <span class="text-2xl font-light">Register your account </span>
    <div class="relative mt-4 bg-white shadow-md sm:rounded-lg text-left">
      <div class="h-8 bg-red-500 rounded-t-md"></div>
      <div class="py-6 px-8">
       <label class="block mt-3 font-semibold">Voter IDcard Number<label>
        <input type="Number" placeholder="ID Card Number" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-red rounded-md">
        <label class="block font-semibold">Username or Email<label>
        <input type="text" placeholder="Email Or Username" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-red rounded-md">
        <label class="block mt-3 font-semibold">Password<label>
        <input type="password" placeholder="Password" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-red rounded-md">
        <label class="block mt-2 font-semibold">File<label>
        <input type="file" placeholder="file" class=" border w-full h-5 px-3 py-5  hover:outline-none focus:outline-none focus:ring-1 focus:ring-red rounded-md">

        <label for="group">Are you?</label><br>
       <select class="border w-full h-5 px-3 py-5  hover:outline-none focus:outline-none focus:ring-1 focus:ring-red rounded-md">
        <option value="volvo">Voter</option>
        <option value="saab">Group</option>
        </select>

        <div class="flex justify-between items-baseline">
          <button class="mt-4 bg-red-500 text-white py-2 px-6 rounded-lg">Login</button>
          <a href="index.php" class="text-sm hover:underline">Already Registered?</a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
