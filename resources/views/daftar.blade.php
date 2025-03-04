<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Cek Kesehatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h3 class="text-center text-primary">Formulir Pendaftaran Cek Kesehatan</h3>
            <form action="{{route('store')}}" method="POST">
                @csrf
                <!-- Nama Lengkap -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap" required
                        name="nama">
                </div>

                <!-- NIK -->
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK" required name="nik">
                </div>

                <!-- Tanggal Lahir -->
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" required name="tglLahir">
                </div>

                <!-- Jenis Kelamin -->
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenis_kelamin" name="jk">
                        <option>Jenis Kelamin</option>
                        <option>Perempuan</option>
                        <option>Laki-laki</option>
                    </select>
                </div>

                <!-- Alamat -->
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan alamat" required
                        name="alamat"></textarea>
                </div>

                <!-- Nomor HP -->
                <div class="mb-3">
                    <label for="nomor_hp" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" id="nomor_hp" placeholder="Masukkan nomor HP" required
                        name="noHp">
                </div>

                <!-- Tombol Submit -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>