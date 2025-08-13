<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SupportDesk</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-gray-50 font-sans">

  <div class="flex h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r flex flex-col">
      <nav class="flex-1 p-4 space-y-1">

        <!-- Dashboard -->
        <div>
          <a href="#" class="flex items-center gap-x-3 p-2 rounded-lg bg-blue-100 text-blue-700 font-medium">
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
          <a href="#" class="flex items-center gap-x-3 p-2 rounded-lg hover:bg-gray-100">
            <i class="fa-solid fa-users"></i>
            <span>Customer</span>
          </a>
        </div>

        <!-- Ticket System -->
        <div>
          <a href="#" class="flex items-center gap-x-3 p-2 rounded-lg hover:bg-gray-100">
            <i class="fa-solid fa-ticket"></i>
            <span>Ticket System</span>
          </a>
        </div>

        <!-- Users -->
        <div>
          <a href="#" class="flex items-center gap-x-3 p-2 rounded-lg hover:bg-gray-100">
            <i class="fas fa-user-plus"></i>
            <span>Users</span>
          </a>
        </div>

      </nav>
    </aside>

  </div>


</body>

</html>