<?= $this->extend('template/layout') ?>

<!-- Judul Start -->
<?= $this->section('judul') ?>
Postingan
<?= $this->endSection() ?>
<!-- Judul End -->

<!-- Sidebar Start -->
<?= $this->section('sidebar') ?>
<div class="text-sm font-medium lg:text-base">
    <a href="/posting" class="p-3 mt-3 flex items-center rounded-md px-4 bg-white">
        <h1 class=" text-stone-900 tracking-wide">Dashboard</h1>
    </a>
    <a href="#" class="p-3 mt-3 flex items-center rounded-md px-4 bg-purple-600">
        <h1 class="font-semibold text-white tracking-wide ">Post</h1>
    </a>
    <a href="#" class="p-3 mt-3 flex items-center rounded-md px-4 bg-white">
        <h1 class=" text-stone-900 tracking-wide">Report</h1>
    </a>
    <a href="#" class="p-3 mt-3 flex items-center rounded-md px-4 bg-white">
        <h1 class=" text-stone-900 tracking-wide">Setting</h1>
    </a>
</div>
<?= $this->endSection() ?>
<!-- Sidebar End -->

<!-- Konten Start -->
<?= $this->section('konten') ?>
<!-- PreView Start -->
<section class="mx-8 mt-16 mb-10 md:flex md:justify-between md:mx-16 lg:mt-8 lg:ml-8 lg:mr-24">
    <div class="flex items-center">
        <h1 class="mr-4 text-xl font-medium">Filter :</h1>
        <form action="/posting/postingan" method="post" name="cari">
            <div class="flex gap-4">
                <input type="text" placeholder="Masukan Status" class="border p-2 rounded-md shadow">
                <button class="p-2 px-5 bg-purple-600 rounded-md text-white font-medium"><i class="bi bi-search mr-4"></i>Search</button>
            </div>
        </form>
    </div>

    <!-- Tambah Post Start -->
    <div class="md:flex md:items-end">
        <a href="form" class="flex bg-purple-600 text-white gap-2 justify-center py-2 rounded-lg mt-4 items-center md:mt-0 md:px-3 md:h-10 md:text-sm">
            <i class="bi bi-plus-circle"></i>
            <p>Posting produk</p>
        </a>
    </div>
    <!-- Tambah Post End -->
</section>
<!-- PreView End -->

<!-- Table Start -->
<section class="mx-8 md:mx-16 lg:ml-8 lg:mr-24">
    <h1 class="font-bold text-xl mb-5">List of your posts</h1>
    <div class=" overflow-auto rounded-md shadow-xl hidden md:block">
        <table class="text-sm w-full">
            <thead class="bg-stone-900 text-white text-left px-2 rounded">
                <tr>
                    <th class="p-3 font font-medium ">No.</th>
                    <th class="p-3 font font-medium">Kode Post</th>
                    <th class="p-3 font font-medium">Admin</th>
                    <th class="p-3 font font-medium">Produk</th>
                    <th class="p-3 font font-medium">Deskripsi</th>
                    <th class="p-3 font font-medium">Tanggal</th>
                    <th class="p-3 font font-medium">Jam</th>
                    <th class="w-32 p-3 font font-medium text-center">Status</th>
                    <th class="p-3 font font-medium text-center">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php foreach ($data as $index => $row) : ?>
                    <tr class="odd:bg-white even:bg-slate-50">
                        <td class="p-3"><?= $index + 1; ?>.</td>
                        <td class="p-3"><?= $row['kode_posting']; ?></td>
                        <td class="p-3">A_00<?= $row['id_admin']; ?></td>
                        <td class="p-3">Pr_00<?= $row['id_produk']; ?></td>
                        <td class="p-3"><?= $row['desk_produk']; ?></td>
                        <td class="p-3"><?= $row['tanggal']; ?></td>
                        <!-- <input type="date" class="p-1 outline-none border border-slate-300 rounded"> -->
                        <td class="p-3"><?= $row['jam']; ?></td>
                        <td class="p-3">
                            <div class="flex justify-center">
                                <span class="p-1 px-2 bg-slate-50 border border-slate-400 rounded-md text-center font-medium">Waiting</span>

                            </div>
                        </td>
                        <td class="p-3">
                            <div class="flex justify-center gap-1">
                                <a href="<?= base_url('posting/update?aksi=add&id_posting=' . $row['id_posting']); ?>"><i class="bi bi-pencil-square p-2 px-3 bg-blue-400 text-white rounded-lg mr-4"></i></a>
                                <a href="<?= base_url('posting/del?aksi=add&id_posting=' . $row['id_posting']); ?>"><i class="bi bi-trash3 p-2 px-3 bg-red-500 text-white rounded-lg"></i></a>

                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Card View Table Start -->
    <section class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:hidden">
        <?php foreach ($data as $index => $row) : ?>
            <div class="bg-white p-4 shadow-xl rounded-lg border space-y-3">
                <div class="flex items-center space-x-3 text-sm font-bold justify-between">
                    <div>P_<?= $row['id_posting']; ?></div>
                    <div class="flex items-center space-x-3">
                        <div>A_<?= $row['id_admin']; ?></div>
                        <div>Pr_<?= $row['id_produk']; ?></div>
                    </div>
                </div>
                <div class="flex items-center space-x-3 justify-between text-sm">
                    <div><?= $row['desk_produk']; ?></div>
                    <div class="flex items-center space-x-3">
                        <div><?= $row['jam']; ?></div>
                        <div><?= $row['tanggal']; ?></div>
                    </div>
                </div>
                <hr>
                <div class="flex">
                    <span class="w-full p-1 px-2 bg-slate-50 border border-slate-400 rounded-md text-center font-medium ">Waiting</span>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
    <!-- Card View Table End -->
</section>
<!-- Table End -->
<?= $this->endSection() ?>
<!-- Konten End -->