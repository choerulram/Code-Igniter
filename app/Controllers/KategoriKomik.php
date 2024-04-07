<?php

// mendefinisikan class
namespace App\Controllers;

// import kelas
use App\Controllers\BaseController;
use App\Models\KategoriKomikModel;
// use CodeIgniter\HTTP\ResponseInterface;

class KategoriKomik extends BaseController
{
    protected $kategoriKomikModel;
    public function __construct()
    {
        $this->kategoriKomikModel = new KategoriKomikModel(); // inisiasi
    }

    public function index()
    {
        // $kategorikomik = $this->kategoriKomikModel->findAll();

        $data = [
            'title' => 'Code Igniter | Kategori Komik',
            'komik' => $this->kategoriKomikModel->getKomik()
        ];

        // $kategoriKomikModel = new kategoriKomikModel();

        return view('kategorikomik/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Code Igniter | Tambah Data Kategori Komik'
        ];
        return view('kategorikomik/create', $data);
    }

    public function save()
    {
        $this->kategoriKomikModel->save([
            'nama_kategori' => $this->request->getVar('nama_kategori'), // getVar = input handling
            'deskripsi' => $this->request->getVar('deskripsi'),
            'tanggal_pembuatan' => $this->request->getVar('tanggal_pembuatan'),
            'tanggal_pembaruan' => $this->request->getVar('tanggal_pembaruan')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/kategorikomik/index');
    }

    public function delete($id)
    {
        $this->kategoriKomikModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/kategorikomik/index');
    }

    public function edit($id) 
    {
        $data = [
            'title' => 'Code Igniter | Edit Data Kategori Komik',
            'validation' => \Config\Services::validation(),
            'komik' => $this->kategoriKomikModel->getKomik($id)
        ];
        return view('kategorikomik/edit', $data);
    }

    public function update($id)
    {
        // if (!$this->validate([
        //     'judul' => [
        //         'rules' => 'required|is_unique[komik.judul]',
        //         'errors' => [
        //             'required' => '{field} komik harus diisi.',
        //             'is_unique' => '{field} komik sudah terdaftar'
        //         ]
        //     ]
        // ])) {
        //     $validation = \Config\Services::validation();
        //     return redirect()->to('/komik/edit/' . $this->request->getVar())->withInput()->with('validation', $validation);
        // }

        $this->kategoriKomikModel->save([
            'id' => $id,
            'nama_kategori' => $this->request->getVar('nama_kategori'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'tanggal_pembuatan' => $this->request->getVar('tanggal_pembuatan'),
            'tanggal_pebaruan' => $this->request->getVar('tanggal_pebaruan')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/kategorikomik/index');;
    }
}
