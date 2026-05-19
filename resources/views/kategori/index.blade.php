<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4">

        <h2 class="mb-4">Daftar Kategori Buku</h2>

        <div class="row">

            @foreach ($kategori_list as $kategori)

            <div class="col-md-4 mb-4">

                <div class="card h-100">

                    <div class="card-body">

                        <h5 class="card-title">
                            {{ $kategori['nama'] }}
                        </h5>

                        <p class="card-text">
                            {{ $kategori['deskripsi'] }}
                        </p>

                        <p>
                            <strong>Jumlah Buku:</strong>
                            {{ $kategori['jumlah_buku'] }}
                        </p>

                        <a href="/kategori/{{ $kategori['id'] }}"
                           class="btn btn-primary btn-sm">

                            Lihat Detail
                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</body>
</html>