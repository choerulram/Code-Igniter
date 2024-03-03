<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl gap-16 px-4 py-8 mx-auto lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full h-full rounded-t-lg md:rounded-none md:rounded-s-lg" src="/img/<?= $komik['sampul']; ?>" alt="<?= $komik['judul']; ?>">
            <div class="flex flex-col justify-between p-4 leading-normal max-w-full">
                <h1 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $komik['judul']; ?></h1>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Penulis : <?= $komik['penulis']; ?></h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Penerbit : <?= $komik['penerbit']; ?></p>
                <a href="#" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-2 py-2 text-center me-2 mb-2">Edit</a>
                <a href="#" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-2 py-2 text-center me-2 mb-2">Delete</a>
                <a href="/komik/index">Kembali</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>