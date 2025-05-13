<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="tinywow_png-transparent-japan-poster-travel-in-japan-text-logo-national-day-thumbnail_68285120.png">
</head>
<body class="bg-white min-h-screen flex flex-col">
  <header class="bg-red-600 h-16 w-full flex justify-between items-center px-6">
    <img src="tinywow_png-transparent-japan-poster-travel-in-japan-text-logo-national-day-thumbnail_68285120.png" alt="Logo" class="w-6 h-6">
    <img src="tinywow_png-transparent-japan-poster-travel-in-japan-text-logo-national-day-thumbnail_68285120.png" alt="Logo" class="w-6 h-6">
  </header>

  <main class="flex-grow flex justify-center items-center px-4">
    <div class="shadow-lg rounded-xl p-8 w-full max-w-md border">
      <div class="flex flex-col items-center mb-4">
        <img src="tinywow_png-transparent-japan-poster-travel-in-japan-text-logo-national-day-thumbnail_68285120.png" alt="Logo" class="w-8 h-8 mb-2">
        <h2 class="text-2xl font-bold">Login</h2>
      </div>
      <form action="login_process.php" method="POST" class="space-y-4">
        <div>
          <label for="email" class="block text-sm font-medium">Email Address</label>
          <input type="email" id="email" name="email" placeholder="your@email.com"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" required>
        </div>

        <div>
          <div class="flex justify-between items-center">
            <label for="password" class="block text-sm font-medium">Password</label>
            <a href="#" class="text-xs text-red-500 hover:underline">Forgot Password?</a>
          </div>
          <input type="password" id="password" name="password"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500" required>
        </div>

        <div class="flex items-center">
          <input type="checkbox" id="remember" name="remember" class="mr-2">
          <label for="remember" class="text-sm">Remember me</label>
        </div>

        <button type="submit" class="w-full bg-red-600 text-white py-2 rounded-md hover:bg-red-700">Login</button>
      </form>

      <div class="mt-4 text-sm text-center">
        Don't have an account? <a href="register.php" class="text-red-500 hover:underline">Sign Up</a>
      </div>

      <div class="my-4 border-t text-center text-sm text-gray-500">or</div>

      <div class="flex justify-center">
        <button class="flex items-center justify-center w-full border border-gray-300 py-2 rounded-md hover:bg-gray-100">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m4 4h1a1 1 0 001-1v-3a1 1 0 00-1-1h-1m-6 4H7a1 1 0 01-1-1v-3a1 1 0 011-1h1" />
          </svg>
          Continue as Guest
        </button>
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
