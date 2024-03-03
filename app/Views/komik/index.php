<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="bg-white dark:bg-gray-900">
    <div class="items-center max-w-screen-xl gap-16 px-4 py-8 mx-auto lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-full">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Daftar Komik
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <a href="/komik/create" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-2 py-2 text-center me-2 mb-2">Tambah Data Komik</a>
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sampul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $k) : ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $i++; ?>
                        </th>
                        <td class="px-6 py-4">
                            <img src="/img/<?= $k['sampul']; ?>" alt="">
                        </td>
                        <td class="px-6 py-4">
                            <?= $k['judul']; ?>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="/komik/<?= $k['slug']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>