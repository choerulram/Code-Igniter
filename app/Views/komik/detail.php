<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
        Detail Komik
    </h3>
</div>

<div class="container mx-auto mt-5 mb-5 pt-50">
    <div class="relative overflow-x-auto max-w-screen-md mx-auto shadow-md sm:rounded-lg container">
        <div class="flex justify-center items-center space-x-4 p-4 mx-auto shadow-md">
            <img class="object-cover w-full max-w-none h-100 rounded-t-lg md:rounded-none md:rounded-l-lg shadow-lg" src="/img/<?= $komik['sampul']; ?>" alt="<?= $komik['judul']; ?>">
            <div class="flex flex-col justify-between p-4 leading-normal max-w-full">
                <h1 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $komik['judul']; ?></h1>
                <p class="mb-0 font-normal text-gray-700 dark:text-gray-400">Penulis : <?= $komik['penulis']; ?></p>
                <p class="mb-5 font-normal text-gray-700 dark:text-gray-400">Penerbit : <?= $komik['penerbit']; ?></p>
                <div class="flex justify-start items-center space-x-4">
                    <button type="button" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2">
                        <a href="/komik/edit/<?= $komik['slug']; ?>">Edit</a>
                    </button>
                    <form action="/komik/index/<?= $komik['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2" onclick="return confirm('Apakah Anda yakin?')">Delete</button>
                    </form>
                    <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2"><a href="/komik/index">Kembali</a></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>