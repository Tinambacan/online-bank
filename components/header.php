<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SunnySideUP Bank</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet"/>
</head>
<body class="min-h-screen flex flex-col bg-gray-100">

  <!-- Header -->
  <header class="py-2 px-6 shadow-md" style="background:linear-gradient(to right, #FF3B30, #FF9500);">
  <div class="flex items-center justify-between">
    <!-- Logo | Navigation Links -->
    <div class="flex items-center">
      <div class="flex flex-col items-center">
        <img src="assets/logo.png" alt="Logo" class="h-14 w-14 rounded-full bg-white p-1"/>
        <span class="text-white font-bold text-sm mt-1">SunnySideUP</span>
      </div>
      <nav class="hidden md:block ml-8">
        <ul class="flex space-x-6">
          <li><a href="#" class="text-white font-semibold hover:text-gray">Home</a></li>
          <li><a href="paybills.php" class="text-white font-semibold hover:text-gray">Pay Bills</a></li>
          <li><a href="sendmoney.php" class="text-white font-semibold hover:text-gray">Send Money</a></li>
          <li><a href="#" class="text-white font-semibold hover:text-gray">Transaction History</a></li>
        </ul>
      </nav>
    </div>

    <!-- User Profile & Logout -->
    <div class="flex justify-end space-x-4 text-white">
      <div class="text-right">
        <div class="font-bold">Member's Name</div>
        <div class="text-sm">New User</div>
      </div>
      <img src="assets/defaultprofile.svg" alt="User Avatar" class="w-10 h-10 rounded-full border-2 border-white" />
      <a href="logout.php" title="Logout" class="text-white text-2xl hover:text-gray-200">⟲</a>
    </div>

    <!-- Mobile Hamburger -->
    <div class="md:hidden">
      <button id="mobileMenuToggle" class="focus:outline-none">
        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu (Initially Hidden) -->
<nav id="mobileMenu" class="md:hidden hidden absolute top-24 left-0 w-full z-50 px-6 py-4 rounded-b-xl shadow-lg"
 style="background:linear-gradient(to right, rgba(255, 59, 48, 0.90), rgba(255, 149, 0, 0.75)); ;">
  <ul class="flex flex-col space-y-3">
    <li><a href="#" class="text-white font-semibold hover:text-gray-200">Home</a></li>
    <li><a href="paybills.php" class="text-white font-semibold hover:text-gray-200">Pay Bills</a></li>
    <li><a href="sendmoney.php" class="text-white font-semibold hover:text-gray-200">Send Money</a></li>
    <li><a href="#" class="text-white font-semibold hover:text-gray-200">Transaction History</a></li>
  </ul>
</nav>


</header>




  <!-- Main content -->
  <main class="flex-grow py-12 px-12">
  <script>
  document.getElementById("mobileMenuToggle").addEventListener("click", function () {
    const menu = document.getElementById("mobileMenu");
    menu.classList.toggle("hidden");
  });
</script>
