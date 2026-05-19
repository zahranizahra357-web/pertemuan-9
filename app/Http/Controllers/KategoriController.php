<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // Menampilkan daftar semua kategori
    public function index()
    {
        $kategori_list = [
            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],
            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku tentang database dan SQL',
                'jumlah_buku' => 18
            ],
            [
                'id' => 3,
                'nama' => 'Web Design',
                'deskripsi' => 'Buku desain website dan UI/UX',
                'jumlah_buku' => 12
            ],
            [
                'id' => 4,
                'nama' => 'Networking',
                'deskripsi' => 'Buku jaringan komputer',
                'jumlah_buku' => 20
            ],
            [
                'id' => 5,
                'nama' => 'Artificial Intelligence',
                'deskripsi' => 'Buku AI dan machine learning',
                'jumlah_buku' => 15
            ]
        ];

        return view('kategori.index', compact('kategori_list'));
    }

    // Menampilkan detail kategori berdasarkan ID
    public function show($id)
    {
        $kategori_list = [
            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],
            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku tentang database dan SQL',
                'jumlah_buku' => 18
            ],
            [
                'id' => 3,
                'nama' => 'Web Design',
                'deskripsi' => 'Buku desain website dan UI/UX',
                'jumlah_buku' => 12
            ],
            [
                'id' => 4,
                'nama' => 'Networking',
                'deskripsi' => 'Buku jaringan komputer',
                'jumlah_buku' => 20
            ],
            [
                'id' => 5,
                'nama' => 'Artificial Intelligence',
                'deskripsi' => 'Buku AI dan machine learning',
                'jumlah_buku' => 15
            ]
        ];

        // Mencari kategori sesuai ID
        $kategori = null;

        foreach ($kategori_list as $item) {
            if ($item['id'] == $id) {
                $kategori = $item;
                break;
            }
        }

        // Jika kategori tidak ditemukan
        if (!$kategori) {
            abort(404, 'Kategori tidak ditemukan');
        }

        // Daftar buku dalam kategori
        $buku_list = [
            [
                'judul' => 'Belajar PHP',
                'pengarang' => 'Budi Raharjo',
                'tahun' => 2023
            ],
            [
                'judul' => 'Laravel Dasar',
                'pengarang' => 'Andi Nugroho',
                'tahun' => 2024
            ],
            [
                'judul' => 'JavaScript Modern',
                'pengarang' => 'Rina Wijaya',
                'tahun' => 2022
            ]
        ];

        return view('kategori.show', compact('kategori', 'buku_list'));
    }

    // Mencari kategori berdasarkan keyword
    public function search($keyword)
    {
        $kategori_list = [
            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],
            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku tentang database dan SQL',
                'jumlah_buku' => 18
            ],
            [
                'id' => 3,
                'nama' => 'Web Design',
                'deskripsi' => 'Buku desain website dan UI/UX',
                'jumlah_buku' => 12
            ],
            [
                'id' => 4,
                'nama' => 'Networking',
                'deskripsi' => 'Buku jaringan komputer',
                'jumlah_buku' => 20
            ],
            [
                'id' => 5,
                'nama' => 'Artificial Intelligence',
                'deskripsi' => 'Buku AI dan machine learning',
                'jumlah_buku' => 15
            ]
        ];

        // Menyimpan hasil pencarian
        $hasil = [];

        foreach ($kategori_list as $kategori) {
            if (
                stripos($kategori['nama'], $keyword) !== false ||
                stripos($kategori['deskripsi'], $keyword) !== false
            ) {
                $hasil[] = $kategori;
            }
        }

        return view('kategori.search', compact('keyword', 'hasil'));
    }
}