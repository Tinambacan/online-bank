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
  <link href="css/paybills.css" rel="stylesheet">
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
        <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Send Money</a>
      </div>
    </li>
  </ol>
</nav>
<br>

<div class="">
<div class="grid grid-cols-3 gap-6">

  <!-- Credit Card -->
    <div class="text-white rounded-2xl p-6 shadow-lg max-w-sm w-full" style="background:linear-gradient(to right, #FF3B30, #FF9500); height: 200px;">
      <h2 class="text-xl font-semibold mb-4">Current Balance</h2>
      <div>
        <p class="text-sm">As of <?= date('M d, Y ') ?></p>
        <p class="text-4xl font-bold">&#8369;20,254.<span class="text-2xl">50</span></p>
        <div class="mt-4 text-sm">
          <p>**** 123-456-7890</p>
          <p class="mt-1">May 2028</p>
        </div>
      </div>
    </div>

<!-- Center: Merchants Grid -->
      <div style="height: 580px; overflow-y: scroll; border: 0px solid #ccc;">
        <h2 class="text-xl font-semibold mb-4">Partner Banks</h2>
        <div class="mb-4">
          <input type="text" placeholder="Search merchants..." class="w-full px-4 py-2 border rounded-full shadow-sm">
        </div>
        <div id="merchantGrid" class="grid grid-cols-4 gap-4">
        <!-- JavaScript will insert cards here -->
        </div>
      </div>
    </div>
  </div>

  <div id= "merchant-modal" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-xl p-6 w-full max-w-md relative">
      <h2 id="paymentTitle" class="text-xl font-semibold mb-4">Payment Details</h2>

      <!-- Input fields -->
      <div class="space-y-4">
        <div>
          <label class="block text-sm font-medium text-gray-700">Amount</label>
          <input type="text" class="w-full px-3 py-2 border rounded-lg" placeholder="Enter amount">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Account Number</label>
          <input type="text" class="w-full px-3 py-2 border rounded-lg" placeholder="Enter account number">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" class="w-full px-3 py-2 border rounded-lg" placeholder="Enter email">
        </div>
      </div>

       <button class="open-modal px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-center mt-5">
        Confirm
      </button>

      <!-- Close button -->
      <button class="close-modal absolute top-2 right-2 text-gray-500 hover:text-black text-xl">&times;</button>
    </div>
  </div>

  <script src="js/sendmoney.js"> </script>

<?php 
include_once('components/footer.php');
?>