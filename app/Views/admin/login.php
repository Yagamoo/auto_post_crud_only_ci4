<?= $this->extend('template/layout_login') ?>

<?= $this->section('judul') ?>
Login
<?= $this->endSection() ?>

<?= $this->section('konten') ?>
<div class="flex h-screen bg-gradient-to-b from-purple-600 to-slate-900">
  <div class="bg-slate-50/10 w-96 h-96 m-auto p-10 rounded-xl shadow-2xl">
    <h1 class="text-white text-xl font-bold w-24">Sign In</h1>
    <form action="login/proses_login" enctype="multipart/formdata" method="POST" class="mt-10 flex flex-col gap-4 ">
      <p style="color: red">
        <?= $error_msg ?>
      </p>
      <input type="text" name="username" placeholder="Username" class="p-2 rounded outline-none bg-transparent text-white border-2 border-slate-500 focus:border-blue-400 focus:border" />
      <input type="password" name="password" placeholder="Password" class="p-2 rounded outline-none bg-transparent text-white border-2 border-slate-500 focus:border-blue-400 focus:border" />
      <button class="inline-block mt-6 bg-purple-500 px-5 py-2 rounded-lg text-white hover:bg-purple-600 hover:transition">Sign In</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>