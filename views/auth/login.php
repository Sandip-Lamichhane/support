<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#CEE1FF] flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-2xl shadow-lg">
    <h2 class="text-xl font-bold text-center text-gray-800">Login to Your Account</h2>

    <!-- Display error message-->
     <?php if (isset($_SESSION['error'])): ?>
      <div class="p-3 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">
          <?php
              echo $_SESSION['error'];  //displaying error message.
              unset ($_SESSION['error']); //clears the error immediately after showing.
          ?>
      </div>
      <?php endif; ?>

    <form action="../../controller/authController.php" method="POST" class="space-y-5">
      <!-- Username -->
      <div>
        <label for="username" class="block mb-1 text-sm font-medium text-gray-700">Username</label>
        <input type="" id="username" name="username" required
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <!-- Remember Me + Forgot -->
      <div class="flex items-center justify-between text-sm">
        <label class="flex items-center gap-2">
          <input type="checkbox" name="remember" class="accent-blue-500">
          Remember me
        </label>
        <a href="#" class="text-blue-600 hover:underline">Forgot password?</a>
      </div>

      <!-- Submit -->
      <button type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
        Login
      </button>
    </form>
  </div>

</body>

</html>