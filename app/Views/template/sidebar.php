<section class="lg:">
    <span class="mobile-button absolute text-white text-xl top-28 left-8 cursor-pointer md:left-16">
        <i class="bi bi-list bg-gray-900 px-2 py-1 rounded"></i>
    </span>

    <section class="sidebar top-24 absolute h-[503px] w-60 p-5 bg-gray-900 text-center rounded-br-lg overflow-y-auto -translate-x-80 transition-all lg:h-screen lg:rounded-none lg:translate-x-0 lg:top-0 lg:static ">
        <span class="mobile-button-cls text-xl absolute right-6 px-1 bg-white rounded cursor-pointer lg:hidden">
            <i class=" bi bi-x-lg"></i>
        </span>
        <h1 class="text-white mt-5 text-3xl font-semibold">Life<span class="text-orange-400">Cod</span>.</h1>
        <h1 class="text-white mb-5 text-3xl font-semibold text">Store</h1>

        <?= $this->renderSection('sidebar', true) ?>
        
        <a href="login" class=" absolute text-sm bg-red-500 bottom-8 px-3 py-1 rounded-md text-white -translate-x-1/2 lg:text-base"><i class="bi bi-box-arrow-left mr-2"></i>Log Out</a>
    </section>
</section>