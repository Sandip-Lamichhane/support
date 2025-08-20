<?php include '../include/include.php'; ?>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<div class="container mx-auto mt-4">
  <?php if (isset($_SESSION['success'])): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
      <strong class="font-bold">Success!</strong>
      <span class="block sm:inline"><?php echo $_SESSION['success']; ?></span>
      <?php unset($_SESSION['success']); ?>
    </div>
  <?php endif; ?>
</div>

<!-- Title and Create Button -->
<div class="flex items-center justify-between mb-6">
  <div>
    <h1 class="text-2xl font-bold text-gray-900">User Management</h1>
    <p class="text-gray-500 text-sm">Manage system users, roles, and permissions</p>
  </div>
  <button class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700">
    <a href="createUser.php">+ Create User</a>
  </button>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

  <!-- Total Users -->
  <div class="bg-white border rounded-lg p-4 shadow-sm">
    <p class="text-black text-sm flex items-center gap-1">
      Total Users
      <i class="fa-solid fa-shield text-slate-500"></i>
    </p>
    <h2 class="text-2xl font-bold mt-1">#</h2>
  </div>

  <!-- Active Users -->
  <div class="bg-white border rounded-lg p-4 shadow-sm">
    <p class="text-black text-sm flex items-center gap-1">
      Active Users
      <i class="fa-solid fa-user-check text-green-600"></i>
    </p>
    <h2 class="text-2xl font-bold mt-1">#</h2>
  </div>

  <!-- Super Admins -->
  <div class="bg-white border rounded-lg p-4 shadow-sm">
    <p class="text-black text-sm flex items-center gap-1">
      Super Admin
      <i class="fa-solid fa-shield-halved text-blue-500"></i>
    </p>
    <h2 class="text-2xl font-bold mt-1">1</h2>
  </div>

  <!-- Inactive Users -->
  <div class="bg-white border rounded-lg p-4 shadow-sm">
    <p class="text-black text-sm flex items-center gap-1">
      Inactive Users
      <i class="fa-solid fa-user-xmark text-gray-600"></i>
    </p>
    <h2 class="text-2xl font-bold mt-1">#</h2>
  </div>
</div>

<!-- Users Table -->
<div class="py-4">
  <!-- Table Header -->
  <div class="grid grid-cols-12 gap-4 py-3 px-4 bg-gray-200 rounded-t-lg text-black font-medium">
    <div class="col-span-5">User</div>
    <div class="col-span-3">Role</div>
    <div class="col-span-3">Status</div>
    <div class="col-span-1"></div>
  </div>

  <!-- User Rows -->
  <div class="divide-y border-x border-b rounded-b-lg">
    <!-- John Doe -->
    <div class="grid grid-cols-12 gap-4 p-4 hover:bg-gray-50 items-center">
      <div class="col-span-5">
        <div class="font-semibold">Admin</div>
      </div>
      <div class="col-span-3">
        <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Super Admin</span>
      </div>
      <div class="col-span-3">
        <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Active</span>
      </div>
      <div class="col-span-1 flex justify-end">
        <button class="text-gray-400 hover:text-gray-600 focus:outline-none dots-btn">
          <i class="fas fa-ellipsis-v"></i>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Dropdown Menu Template -->
<div class="hidden fixed inset-0 z-40" id="dropdown-overlay"></div>
<div class="hidden absolute z-50 w-56 bg-white rounded-md shadow-lg py-1" id="dropdown-menu">
  <div class="px-4 py-2 text-xs font-medium text-black border-b">ACTIONS</div>
  <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-100"><i class="fa-solid fa-user mr-2"></i>Profile</a>
  <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-100"><i class="fa-solid fa-key mr-2"></i>Reset Password</a>
  <!-- <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-100"><i class="fa-solid fa-user-slash mr-2"></i>Deactivate User</a> -->
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const dotsButtons = document.querySelectorAll('.dots-btn');
    const dropdownMenu = document.getElementById('dropdown-menu');
    const dropdownOverlay = document.getElementById('dropdown-overlay');

    dotsButtons.forEach(button => {
      button.addEventListener('click', function(e) {
        // Position the dropdown near the clicked button
        const rect = this.getBoundingClientRect();
        dropdownMenu.style.top = `${rect.bottom + window.scrollY}px`;
        dropdownMenu.style.right = `${window.innerWidth - rect.right + window.scrollX}px`;

        // Show dropdown and overlay
        dropdownMenu.classList.remove('hidden');
        dropdownOverlay.classList.remove('hidden');

        // Prevent the click from propagating
        e.stopPropagation();
      });
    });

    // Close dropdown when clicking anywhere
    document.addEventListener('click', function() {
      dropdownMenu.classList.add('hidden');
      dropdownOverlay.classList.add('hidden');
    });

    // Prevent dropdown from closing when clicking inside it
    dropdownMenu.addEventListener('click', function(e) {
      e.stopPropagation();
    });
  });
</script>

<?php include '../layout/footer.php'; ?>