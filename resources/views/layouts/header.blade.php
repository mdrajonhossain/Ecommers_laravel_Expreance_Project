<div class="bg-sky-700 w-screen text-white">
    <div class="p-2 flex justify-between h-16 items-center gap-10">

        <div class="flex items-center">
            <img class="rounded" src="{{ asset('images.png') }}" width="50px" alt="Logo">
            <div class="text-xl font-bold ml-3">BDShop</div>
        </div>

        <div class="flex-grow mx-4"></div>

        <div class="flex-grow mx-4">
            <div class="flex items-center bg-green-800 rounded-lg overflow-hidden">
                <input type="text" placeholder="Search..."
                    class="flex-grow p-2 outline-none text-gray-700 placeholder-gray-400">
                <button class="pr-5 pl-5 pt-2 pb-2 bg-green-700 hover:bg-green-600 text-white rounded-r-lg">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <div class="flex items-center relative">
            <div class="ml-4 flex items-center gap-2">

                <!-- heart Icon -->
                <button class="p-2 text-white relative">
                    <i class="fas fa-heart"></i>
                    <span class="absolute -top-1 -right-1 text-xs bg-red-600 text-white rounded-full px-1">3</span>
                    <!-- Badge for item count -->
                </button>

                <!-- Card Icon -->
                <button class="p-2 text-white relative">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="absolute -top-1 -right-1 text-xs bg-red-600 text-white rounded-full px-1">3</span>
                    <!-- Badge for item count -->
                </button>



                <!-- Logout Button -->
                <button id="logout-button" class="p-2 text-white relative">
                    <i class="fas fa-sign-out-alt"></i>
                </button>

                <!-- Logout Popup -->
                <div id="logout-popup"
                    class="hidden absolute right-0 mt-40 w-40 rounded-md shadow-lg bg-white text-gray-800">
                    <div class="py-1" role="none">
                        <div class="p-4">
                            <ul class="space-y-1">
                                <li class="flex items-center block px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer">
                                    <i class="fas fa-user-circle mr-2"></i> Profile
                                </li>
                                <li class="flex items-center block px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer">
                                    <i class="fas fa-cog mr-2"></i> Setting
                                </li>
                                <li class="flex items-center block px-4 py-2 text-sm hover:bg-gray-100 cursor-pointer">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
const logoutButton = document.getElementById('logout-button');
const logoutPopup = document.getElementById('logout-popup');

logoutButton.addEventListener('click', (event) => {
    // Prevent closing when clicking inside the popup
    event.stopPropagation();
    logoutPopup.classList.toggle('hidden');
});

// Close the popup when clicking outside of it
window.addEventListener('click', (event) => {
    if (!logoutButton.contains(event.target) && !logoutPopup.contains(event.target)) {
        logoutPopup.classList.add('hidden');
    }
});
</script>