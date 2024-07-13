<!DOCTYPE html>
<html lang="en">
<?= $this->include('template/call_head'); ?>

<body class="font-poppins flex flex-row">
    <?= $this->include('template/sidebar') ?>

    <!-- Main Start -->
    <section class="w-full">
        <!-- NavBar Start -->
        <?= $this->include('template/navbar'); ?>
        <!-- NavBar End -->

        <!-- Main Content Start -->
        <?= $this->renderSection('konten', true) ?>
        <!-- Main Content End -->
    </section>
    <!-- Main End -->

    <script type="text/javascript" src="/js/script.js"></script>
</body>

</html>