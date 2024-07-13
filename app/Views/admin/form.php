<?= $this->extend('template/layout') ?>

<!-- Judul Start -->
<?= $this->section('judul') ?>
Form
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

<!-- Form Start -->
<section class="mx-8 mt-16 md:mx-16 lg:mt-8 lg:ml-16 lg:mr-24">
    <h1 class="font-bold text-xl mb-2">Add Post</h1>
    <hr class="border-slate-400">
    <div class="mt-2 grid md:grid-cols-12 gap-3 ">
        <form action="form_proses" method="POST" name="formAdmin" class="grid gap-3 col-span-10">
            
            <div class="grid grid-cols-3 gap-6 gap-y-1 items-center lg:colspan10">
                <label for="" class="mb-1 font-semibold">Id Post</label>
                <input type="text" name="kode_posting" value="" placeholder="Masukan Kode Postingan" class="outline-none border border-slate-900 rounded p-[6px] pl-3 text-sm col-span-2 md:p-[10px] md:rounded-md" autofocus>
            </div>
            <div class="grid grid-cols-3 gap-6 gap-y-1 items-center lg:grid-cols-">
                <label for="" class="mb-1 font-semibold">Id Admin</label>
                <select name="id_admin" class="outline-none border border-slate-900 rounded p-[6px] pl-3 text-sm col-span-2 focus:ring-2 focus:ring-purple-500 md:p-[10px] md:rounded-md">
                    <option>Pilih Admin</option>
                    <?php foreach ($admin as $index => $row) : ?>
                        <option value="<?= $row['id_admin']; ?>"><?= $row['kode_admin']; ?> - <?= $row['nama_admin']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="grid grid-cols-3 gap-6 gap-y-1 items-center lg:grid-cols-">
                <label for="" class="mb-1 font-semibold">Id Produk</label>
                <select name="id_produk" class="outline-none border border-slate-900 rounded p-[6px] pl-3 text-sm col-span-2 focus:ring-2 focus:ring-purple-500 md:p-[10px] md:rounded-md">
                    <option>Pilih Produk</option>
                    <?php foreach ($produk as $index => $row) : ?>
                        <option value="<?= $row['id_produk']; ?>"><?= $row['kode_produk']; ?> - <?= $row['nama_produk']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="grid grid-cols-3 gap-6 gap-y-1 items-center lg:grid-cols-">
                <label for="" class="mb-1 font-semibold">Cover Latter</label>
                <input type="text" name="cover_latter" placeholder="Masukan Cover Latter" class="outline-none border border-slate-900 rounded p-[6px] pl-3 text-sm col-span-2 focus:ring-2 focus:ring-purple-500 md:p-[10px] md:rounded-md">
            </div>
            <div class="grid grid-cols-3 gap-6 gap-y-1 items-center lg:grid-cols-">
                <label for="" class="mb-1 font-semibold">Deskripsi</label>
                <input type="text" name="desk_produk" placeholder="Masukan Deskripsi" class="outline-none border border-slate-900 rounded p-[6px] pl-3 text-sm col-span-2 focus:ring-2 focus:ring-purple-500 md:p-[10px] md:rounded-md">
            </div>
            <div class="grid grid-cols-3 gap-6 gap-y-1 items-center lg:grid-cols-">
                <label for="" class="mb-1 font-semibold">Gambar</label>
                <input type="file" name="visual_produk" placeholder="Masukan Gambar" class="outline-none border border-slate-900 rounded p-[6px] pl-3 text-sm col-span-2 focus:ring-2 focus:ring-purple-500 md:p-[10px] md:rounded-md">
            </div>
            <div class="grid grid-cols-3 gap-6 gap-y-1 items-center lg:grid-cols-">
                <label for="" class="mb-1 font-semibold">Tanggal</label>
                <input type="date" name="tanggal" placeholder="Masukan Tanggal" class="outline-none border border-slate-900 rounded p-[6px] pl-3 text-sm col-span-2 focus:ring-2 focus:ring-purple-500 md:p-[10px] md:rounded-md">
            </div>
            <div class="grid grid-cols-3 gap-6 gap-y-1 items-center lg:grid-cols-">
                <label for="" class="mb-1 font-semibold">Jam</label>
                <input type="time" name="jam" placeholder="Masukan Jam" class="outline-none border border-slate-900 rounded p-[6px] pl-3 text-sm col-span-2 focus:ring-2 focus:ring-purple-500 md:p-[10px] md:rounded-md">
            </div>
            <!-- <div class="grid grid-cols-3 gap-6 gap-y-1 items-center lg:grid-cols-">
                <label for="" class="mb-1 font-semibold">Status</label>
                <input type="text" name="status" placeholder="Status" class="outline-none border border-slate-900 rounded p-[6px] pl-3 text-sm col-span-2 focus:ring-2 focus:ring-purple-500 md:p-[10px] md:rounded-md">
            </div> -->
            <div class="grid gap-6 gap-y-1 items-center lg:grid-cols- ">
                <button type="submit" name="submit" class="w-full my-6 mb-8 py-2 bg-purple-700 rounded-lg text-white font-semibold lg:col-span-3">Add Post</button>
            </div>
        </form>
        <!-- Info Data Posting Start -->
        <div class="col-span-2 col-start-5 text-center font-medium text-sm border w-fit h-fit p-3 border-stone-500 rounded-lg md:col-span-2">

            <h3 class="bg-stone-900 text-white p-2 px-3 rounded-lg">Kode Posting Sebelumnya</h3>
            <?php foreach ($data_terbaru as $index => $row) : ?>
                <p class="bg-purple-400 shadow-lg mt-2 rounded-lg p-2"><?= $row['kode_posting']; ?></p>
            <?php endforeach; ?>
        </div>
        <!-- Info Data Posting End -->


    </div>
</section>

<section>
</section>
<!-- Form End -->

<?= $this->endSection() ?>
<!-- Konten End -->