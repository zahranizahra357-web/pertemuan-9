<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kategori</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/kategori">Kategori</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Detail Kategori
                </li>
            </ol>
        </nav>

        <div class="card mb-4">

            <div class="card-header bg-primary text-white">
                Informasi Kategori
            </div>

            <div class="card-body">

                <h4>{{ $kategori['nama'] }}</h4>

                <p>{{ $kategori['deskripsi'] }}</p>

                <p>
                    <strong>Jumlah Buku:</strong>
                    {{ $kategori['jumlah_buku'] }}
                </p>

            </div>

        </div>

        <h4 class="mb-3">Daftar Buku</h4>

        <table class="table table-bordered table-striped">

            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($buku_list as $no => $buku)

                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $buku['judul'] }}</td>
                    <td>{{ $buku['pengarang'] }}</td>
                    <td>{{ $buku['tahun'] }}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

        <a href="/kategori" class="btn btn-secondary">
            Kembali
        </a>

    </div>

</body>
</html>