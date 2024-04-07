<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
        Edit Data Kategori Komik
    </h3>
</div>
<div class="p-4 md:p-5">
    <form class="space-y-4" action="/kategorikomik/update/<?= $komik['id']; ?>" method="post">
        <?= csrf_field(); ?>
        <div class="mb-4">
            <label for="nama_kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kategori Komik</label>
            <input type="text" name="nama_kategori" id="nama_kategori" value="<?= $komik['nama_kategori']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
        </div>
        <div class="mb-4">
            <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" value="<?= $komik['deskripsi']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder=""  required>
        </div>
        <div class="mb-4">
            <label for="tanggal_pembuatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pembuatan</label>
            <input type="date" name="tanggal_pembuatan" id="tanggal_pembuatan" value="<?= $komik['tanggal_pembuatan']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-50 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
        </div>
        <div class="mb-4">
            <label for="tanggal_pembaruan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pembaruan</label>
            <input type="date" name="tanggal_pembaruan" id="tanggal_pembaruan" value="<?= $komik['tanggal_pembaruan']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-50 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
        </div>
        <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2"><a href="/kategorikomik/index">Kembali</a></button>
        <button type="submit" class="text-white bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2">Update</button>
    </form>
</div>

<?= $this->endSection(); ?>