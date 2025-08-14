<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<style>
.main {
  display: flex;
}
</style>

<div class="main">
  <!-- Sidebar -->
  <aside class="w-64 bg-white border-r flex flex-col">
    <nav class="flex-1 p-4 space-y-1">

      <!-- Dashboard -->
      <div>
        <a href="../dashboard/dashboard.php"
          class="flex items-center gap-x-3 p-2 rounded-lg 
            <?= ($current_page == 'dashboard.php') ? 'bg-blue-100 text-blue-700 font-medium' : 'hover:bg-gray-100' ?>">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <span>Dashboard</span>
        </a>
      </div>

      <!-- Customer -->
      <div>
        <a href="../customer/customer.php"
          class="flex items-center gap-x-3 p-2 rounded-lg 
            <?= ($current_page == 'customer.php') ? 'bg-blue-100 text-blue-700 font-medium' : 'hover:bg-gray-100' ?>">
          <i class="fa-solid fa-users"></i>
          <span>Customer</span>
        </a>
      </div>

      <!-- Ticket System -->
      <div>
        <a href="../ticket/ticket.php"
          class="flex items-center gap-x-3 p-2 rounded-lg 
            <?= ($current_page == 'ticket.php') ? 'bg-blue-100 text-blue-700 font-medium' : 'hover:bg-gray-100' ?>">
          <i class="fa-solid fa-ticket"></i>
          <span>Ticket System</span>
        </a>
      </div>

      <!-- Users -->
      <div>
        <a href="../user/user.php"
          class="flex items-center gap-x-3 p-2 rounded-lg 
            <?= ($current_page == 'user.php') ? 'bg-blue-100 text-blue-700 font-medium' : 'hover:bg-gray-100' ?>">
          <i class="fas fa-user-plus"></i>
          <span>Users</span>
        </a>
      </div>

    </nav>
  </aside>

  <!-- Main Content -->
  <div class="content flex-1 p-4">

    