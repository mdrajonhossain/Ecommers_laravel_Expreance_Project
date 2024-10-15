<div class="bg-sky-900 text-white sidebar md:w-[250px] p-4 hidden md:block">
    <ul>
        <li class="cursor-pointer" style="font-size:14px;">
            <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-home"></i>
                    <a href="{{ url('/') }}" class="text-white"> {{ $message }}</a>
                </div>
            </div>
        </li>

        <li class="cursor-pointer" style="font-size:14px;">
            <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-list-alt"></i>
                    <a class="text-white">Category</a>
                </div>
                <span class="arrow text-white">&#10148;</span>
            </div>
            <ul class="submenu hidden pl-6 mt-2 space-y-2">
                <li>
                    <a href="{{ url('/dashboard') }}" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-th-list"></i>
                        <span>Category List</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-plus-circle"></i>
                        <span>Add Category</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="cursor-pointer" style="font-size:14px;">
            <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-layer-group"></i>
                    <a href="#" class="text-white">Sub-category</a>
                </div>
                <span class="arrow text-white">&#10148;</span>
            </div>
            <ul class="submenu hidden pl-6 mt-2 space-y-2">
                <li>
                    <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-plus-square"></i>
                        <span>Add Sub-category</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-list"></i>
                        <span>Sub-category List</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="cursor-pointer" style="font-size:14px;">
            <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-box"></i>
                    <a href="#" class="text-white">Products</a>
                </div>
                <span class="arrow text-white">&#10148;</span>
            </div>
            <ul class="submenu hidden pl-6 mt-2 space-y-2">
                <li>
                    <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-box-open"></i>
                        <span>Product List</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-plus"></i>
                        <span>Add Product</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="cursor-pointer" style="font-size:14px;">
            <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-credit-card"></i>
                    <a href="#" class="text-white">Card</a>
                </div>
                <span class="arrow text-white">&#10148;</span>
            </div>
            <ul class="submenu hidden pl-6 mt-2 space-y-2">
                <li>
                    <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-ban"></i>
                        <span>Reject Card</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-cog"></i>
                        <span>Manage Card</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="cursor-pointer" style="font-size:14px;">
            <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-credit-card"></i>
                    <a href="#" class="text-white">Card Item</a>
                </div>
                <span class="arrow text-white">&#10148;</span>
            </div>
            <ul class="submenu hidden pl-6 mt-2 space-y-2">
                <li>
                    <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-ban"></i>
                        <span>Reject Card Item</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-cog"></i>
                        <span>Manage Card Item</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="cursor-pointer" style="font-size:14px;">
            <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-money-bill-wave"></i>
                    <a href="#" class="text-white">Payment Details</a>
                </div>
                <span class="arrow text-white">&#10148;</span>
            </div>
            <ul class="submenu hidden pl-6 mt-2 space-y-2">
                <li>
                    <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-list"></i>
                        <span>Manage Payment Details</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="cursor-pointer" style="font-size:14px;">
            <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-shopping-cart"></i>
                    <a href="#" class="text-white">Order Items</a>
                </div>
                <span class="arrow text-white">&#10148;</span>
            </div>
            <ul class="submenu hidden pl-6 mt-2 space-y-2">
                <li>
                    <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-list"></i>
                        <span>Manage Order Items</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="cursor-pointer" style="font-size:14px;">
            <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-heart"></i>
                    <a href="#" class="text-white">Wishlist</a>
                </div>
                <span class="arrow text-white">&#10148;</span>
            </div>
            <ul class="submenu hidden pl-6 mt-2 space-y-2">
                <li>
                    <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-list"></i>
                        <span>Manage Wishlist</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="cursor-pointer" style="font-size:14px;">
            <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-user"></i>
                    <a href="#" class="text-white">User</a>
                </div>
                <span class="arrow text-white">&#10148;</span>
            </div>
            <ul class="submenu hidden pl-6 mt-2 space-y-2">
                <li>
                    <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-user-plus"></i>
                        <span>Add User</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                        <i class="fas fa-user-friends"></i>
                        <span>User List</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>




        <script>
    $(document).ready(function() {
        $('.submenu-toggle').on('click', function() {
            $('.submenu').not($(this).next('.submenu')).slideUp();
            $('.arrow').not($(this).find('.arrow')).html('&#10148;');
            $(this).next('.submenu').slideToggle();
            let arrow = $(this).find('.arrow');
            if (arrow.html() === '➤') {
                arrow.html('&#9660;');
            } else {
                arrow.html('&#10148;');
            }
        });
    });
    </script>