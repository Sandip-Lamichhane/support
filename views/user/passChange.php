<?php include '../include/include.php'; ?>

<!-- Main Content -->
<div class="max-w-6xl mx-auto px-6 py-8">

    <div class="flex items-center text-sm text-black text-xl mb-6">
        <span>Change Password</span>
    </div>

    <!-- Password Reset Card -->
    <div class="bg-white rounded-lg shadow overflow-hidden border">
        <!-- Card Header -->
        <div class="px-6 py-4 border-b bg-gray-50">
            <h2 class="text-lg font-semibold text-gray-800">Change Password</h2>
            <p class="text-sm text-gray-500 mt-1">For user: <span class="font-medium">Admin</span></p>
        </div>

        <!-- Form Section -->
        <div class="p-6">
            <form>
                <!-- Current Password-->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                    <div class="relative">
                        <input type="password" name="current_password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your admin password">
                        <button type="button" class="absolute right-3 top-2.5 text-gray-400 hover:text-gray-600">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Required to authorize password reset</p>
                </div>

                <!-- New Password -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                    <div class="relative">
                        <input type="password" name="new_password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter new password">
                        <button type="button" class="absolute right-3 top-2.5 text-gray-400 hover:text-gray-600">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="mb-8">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                    <div class="relative">
                        <input type="password" name="confirm_password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Confirm new password">
                        <button type="button" class="absolute right-3 top-2.5 text-gray-400 hover:text-gray-600">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex justify-end space-x-3">
                    <a href="user.php">
                        <button type="button" class="px-4 py-2 border rounded-md text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500">
                            Cancel
                        </button>
                    </a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Reset Password
                    </button>
                </div>
            </form>
        </div>
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

<?php include '../layout/footer.php';