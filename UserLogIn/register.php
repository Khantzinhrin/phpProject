<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="tinywow_png-transparent-japan-poster-travel-in-japan-text-logo-national-day-thumbnail_68285120.png">
</head>
<body class="bg-white min-h-screen flex flex-col">

  <!-- Header -->
  <header class="bg-red-600 h-16 w-full flex justify-between items-center px-6">
    <img src="tinywow_png-transparent-japan-poster-travel-in-japan-text-logo-national-day-thumbnail_68285120.png" alt="Logo" class="w-6 h-6">
    <img src="tinywow_png-transparent-japan-poster-travel-in-japan-text-logo-national-day-thumbnail_68285120.png" alt="Logo" class="w-6 h-6">
  </header>

  <!-- Registration Form -->
  <main class="flex-grow flex justify-center items-center px-4">
    <div class="shadow-lg rounded-xl p-8 w-full max-w-md border">
      <div class="flex flex-col items-center mb-4">
        <img src="tinywow_png-transparent-japan-poster-travel-in-japan-text-logo-national-day-thumbnail_68285120.png" alt="Logo" class="w-8 h-8 mb-2">
        <h2 class="text-2xl font-bold">Create Account</h2>
      </div>

      <form action="register_process.php" method="POST" class="space-y-4">
        <div>
          <label for="name" class="block text-sm font-medium">Full Name</label>
          <input type="text" id="name" name="name" required
            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500">
        </div>

        <div>
          <label for="email" class="block text-sm font-medium">Email Address</label>
          <input type="email" id="email" name="email" required
            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500">
        </div>

        <div>
          <label for="password" class="block text-sm font-medium">Password</label>
          <input type="password" id="password" name="password" required
            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500">
        </div>

        <div>
          <label for="confirm_password" class="block text-sm font-medium">Confirm Password</label>
          <input type="password" id="confirm_password" name="confirm_password" required
            class="mt-1 w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500">
        </div>

        <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700">Sign Up</button>
      </form>

      <div class="mt-4 text-sm text-center">
        Already have an account? <a href="login.php" class="text-red-500 hover:underline">Login</a>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-red-600 h-16 w-full flex justify-between items-center px-6">
    <img src="tinywow_png-transparent-japan-poster-travel-in-japan-text-logo-national-day-thumbnail_68285120.png" alt="Logo" class="w-6 h-6">
    <img src="tinywow_png-transparent-japan-poster-travel-in-japan-text-logo-national-day-thumbnail_68285120.png" alt="Logo" class="w-6 h-6">
  </footer>

</body>
</html>
