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
<body class="bg-gray-100 p-6">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-3 gap-6">
      
    <!-- code for credit card -->
      <div class="bg-gradient-to-r from-orange-500 to-pink-400 text-white rounded-2xl p-6 shadow-lg">
        <h2 class="text-xl font-semibold mb-4">Current Balance</h2>
        <div>
          <p class="text-sm">Total Balance</p>
          <p class="text-4xl font-bold">&#8369;10,254.<span class="text-2xl">50</span></p>
          <div class="mt-4 text-sm">
            <p>**** 123-456-7890</p>
            <p class="mt-1">May 2028</p>
          </div>
        </div>
      </div>

<?php 
include_once('components/footer.php');
?>