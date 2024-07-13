<section>
            <nav class="flex w-full h-24 bg-white items-center justify-between px-8 shadow-xl md:px-16 lg:pl-8 lg:pr-24">
                <h1 class="text-xl font-semibold md:text-2xl lg:text-3xl">
                    <?= $this->renderSection('judul', true) ?>
                </h1>
                <div class="flex items-center gap-3 lg:gap-5">
                    <div class="h-7 w-7 bg-slate-700 rounded-full lg:h-10 lg:w-10">
                    </div>
                    <div class="text-xs lg:text-sm">
                        <h4 class="font-medium">Iqbal</h4>
                        <h4>Admin 1</h4>
                    </div>
                    <span class="relative" onclick="dropdown()">
                        <i id="arrow" class="bi bi-caret-down text-xl bg-slate-100 px-1 rounded shadow-md cursor-pointer lg:text-2xl lg:px-2 lg:pt-1"></i>

                        <!-- Dropdown Profile Start -->
                        <div id="subprofile" class="absolute bg-white border right-0 translate-y-3 w-32 rounded-md shadow-md overflow-hidden">
                            <ul class="text-sm divide-y">
                                <li class="p-2"><a href="" class="block w-full  p-1 px-2 rounded-md border hover:bg-slate-100 transition">Profile</a></li>
                                <li class="p-2 text-white"><a href="login" class="block w-full bg-red-500 p-1 px-2 rounded-md hover:bg-red-600 transition"><i class="bi bi-box-arrow-left mr-2"></i>Log Out</a></li>
                            </ul>
                        </div>
                        <!-- Dropdown Profile End -->

                    </span>
                </div>
            </nav>
        </section>