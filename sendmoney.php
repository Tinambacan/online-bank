<?php 
include_once('components/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<!-- Breadcrumbs -->
<nav class="flex" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
    <li class="inline-flex items-center">
      <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Home</a>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Pay Bills</a>
      </div>
    </li>
  </ol>
</nav>
<br>

  <!--Credit Card -->
    <div class="text-white rounded-2xl p-6 shadow-lg max-w-sm w-full" style="background:linear-gradient(to right, #FF3B30, #FF9500);">
      <h2 class="text-xl font-semibold mb-4">Current Balance</h2>
      <div>
        <p class="text-sm">As of <?= date('M d, Y ') ?></p>
        <p class="text-4xl font-bold">&#8369;80,254.<span class="text-2xl">50</span></p>
        <div class="mt-4 text-sm">
          <p>**** 123-456-7890</p>
          <p class="mt-1">May 2028</p>
        </div>
      </div>
    </div>
    
  
<?php 
include_once('components/footer.php');
?>