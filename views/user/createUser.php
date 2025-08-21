<?php
@include '../include/include.php';
?>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<div class="container mx-auto mt-4">
    <?php if (isset($_SESSION['error'])): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline"><?php echo $_SESSION['error']; ?></span>
            <?php unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>
</div>

<div class="p-8">
    <h1 class="text-sm text-black text-xl mb-6">Create User</h1>

    <div class="bg-gray-50 border rounded-lg p-8">
        <h2 class="text-lg font-semibold mb-2">Create User</h2>

        <form action="../../controller/userController/createUserController.php" method="post">
            <div class="space-y-6 mt-6">
                <!-- Username -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                    <input
                        type="text"
                        placeholder="Enter username"
                        required
                        name="username"
                        class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" />
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input
                        type="email"
                        placeholder="Enter email"
                        required
                        name="email"
                        class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" />
                </div>

                <!-- Password -->
                <div class="relative">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input
                        type="password"
                        placeholder="Enter password"
                        required
                        name="password"
                        class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" />
                    <button type="button" class="absolute right-3 mt-7 top-2.5 text-gray-400 hover:text-gray-600">
                        <i class="far fa-eye"></i>
                    </button>
                </div>

                <!-- Status -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select name="status"
                        class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        <option value="" disabled selected>Select status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <!-- Role -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                    <select name="role"
                        class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        <option value="" disabled selected>Select role</option>
                        <option value="SuperAdmin">Super Admin</option>
                        <option value="GeneralUser">General User</option>
                    </select>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end space-x-4 mt-8">
                <button class="px-5 py-2 border rounded-md"><a href="../dashboard/dashboard.php">Cancel</a></button>
                <button class="px-5 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Create User
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Toggle password visibility
    document.querySelectorAll('.fa-eye').forEach(icon => {
        icon.addEventListener('click', function() {
            const input = this.closest('.relative').querySelector('input');
            if (input.type === 'password') {
                input.type = 'text';
                this.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                input.type = 'password';
                this.classList.replace('fa-eye-slash', 'fa-eye');
            }
        });
    });
</script>



<?php @include '../layout/footer.php'; ?>