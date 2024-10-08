<div class="bg-sky-900 text-white sidebar md:w-[250px] p-4 hidden md:block">
            <ul>
                <li class="cursor-pointer" style="font-size:14px;">
                    <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-home"></i>
                            <a href="#" class="text-white"> {{ $message }}</a>
                        </div>
                    </div>
                </li>


                <li class="cursor-pointer" style="font-size:14px;">
                    <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-layer-group"></i>
                            <a href="#" class="text-white">Catagory</a>
                        </div>
                        <span class="arrow text-white">&#10148;</span>
                    </div>
                    <ul class="submenu hidden pl-6 mt-2 space-y-2">
                        <li>
                            <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                                <i class="fas fa-list"></i>
                                <span>Catagory List</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                                <i class="fas fa-list"></i> <!-- Icon for "Catagory List" -->
                                <span>Catagory List</span>
                            </a>
                        </li>
                    </ul>
                </li>


                
                <li class="cursor-pointer" style="font-size:14px;">
                    <div class="flex justify-between items-center hover:bg-[#0369a1] p-2 submenu-toggle">
                        <div class="flex items-center space-x-2">
                            <i class="fa-solid fa-sitemap"></i>
                            <a href="#" class="text-white">Products</a>
                        </div>
                        <span class="arrow text-white">&#10148;</span>
                    </div>
                    <ul class="submenu hidden pl-6 mt-2 space-y-2">
                        <li>
                            <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                                <i class="fas fa-list"></i>
                                <span>Catagory List</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block hover:bg-[#0369a1] p-2 flex items-center space-x-2">
                                <i class="fas fa-list"></i> <!-- Icon for "Catagory List" -->
                                <span>Catagory List</span>
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