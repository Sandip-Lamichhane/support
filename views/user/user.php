<?php
include '../include/include.php';
?>
<!-- Title and Create Button -->
<div class="flex items-center justify-between mb-6">
  <div>
    <h1 class="text-2xl font-bold text-gray-900">User Management</h1>
    <p class="text-gray-500 text-sm">Manage system users, roles, and permissions</p>
  </div>
  <button class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700">
    + Create User
  </button>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

  <!-- Total Users -->
  <div class="bg-white border rounded-lg p-4 shadow-sm">
    <p class="text-black text-sm flex items-center gap-1">
      Total Users
      <i class="fa-solid fa-shield"></i>
    </p>
    <h2 class="text-2xl font-bold mt-1">5</h2>
  </div>

  <!-- Active Users -->
  <div class="bg-white border rounded-lg p-4 shadow-sm">
    <p class="text-black text-sm flex items-center gap-1">
      Active Users
      <i class="fa-solid fa-user"></i>
    </p>
    <h2 class="text-2xl font-bold mt-1">4</h2>
  </div>

  <!-- Super Admins -->
  <div class="bg-white border rounded-lg p-4 shadow-sm">
    <p class="text-black text-sm flex items-center gap-1">
      Super Admins
      <i class="fa-solid fa-shield-halved"></i>
    </p>
    <h2 class="text-2xl font-bold mt-1">2</h2>
  </div>

  <!-- Inactive Users -->
  <div class="bg-white border rounded-lg p-4 shadow-sm">
    <p class="text-black text-sm flex items-center gap-1">
      Inactive Users
      <i class="fa-solid fa-user-xmark"></i>
    </p>
    <h2 class="text-2xl font-bold mt-1">1</h2>
  </div>


  <?php include '../layout/footer.php'; ?>