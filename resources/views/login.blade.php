<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{csrf_token()}}" />

    <title>Login</title>
    <style>
        /* Menyiapkan body untuk mengisi seluruh halaman */
        h2 {
            padding-top: 10%;
            text-align: center;
        }

        /* Container untuk form */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            /* padding: 15; */
            height: 100%;
        }

        /* Kotak form */
        .form-box {
            background-color: rgb(64, 241, 241);
            border-radius: 10px;
            padding: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Bayangan lembut */
            width: 320px;
            height: 130px;
        }

        /* Styling untuk label dan input */
        label {
            padding: 2%;
            margin-bottom: 10px;
            font-size: 16px;
        }

        input {
            padding: 10px;
            font-size: 16px;
            width: 93%;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Styling untuk tombol */
        button {
            width: 100%;
            text-align: center;
            padding: 10px 60px;
            font-size: 16px;
            cursor: pointer;
            background-color: #0b0e0b;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        /* Efek hover pada tombol */
        button:hover {
            background-color: rgb(187, 245, 245);
            color: #0b0e0b;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Antrian {{$data->Nama_Poli}}</h2>
        <form class="container" id="nikForm">
            {{-- @csrf --}}
            <div class="form-box">
                <label for="nik">NIK:</label>
                <input type="text" id="nik" name="nik" placeholder="Masukkan NIK" />
                <button type="submit" id="btn">Dapatkan No Antrian</button>
            </div>
        </form>
    </div>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const form = document.getElementById("nikForm");
        const nikInput = document.getElementById("nik");
        const Id_poli = {{ $data->ID_Poli }};

        // Tangani submit form
        form.addEventListener("submit", function (e) {
            // Mencegah reload halaman
            e.preventDefault();

            // Ambil nilai NIK dari input
            let nik = nikInput.value.trim();

            // Cek jika NIK kosong
            if (!nik) {
                Swal.fire({
                    title: "Peringatan!",
                    text: "NIK harus diisi!",
                    icon: "warning",
                    confirmButtonText: "OK",
                });
                return; // hentikan di sini
            }

            // Lakukan fetch POST ke route 'verified'
            fetch('{{ route('verified') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    // Token CSRF dari meta
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ NIK: nik })
            })
                .then(response => response.json())
                .then(data => {
                    // Jika data.found = true => NIK terdaftar
                    if (data.found) {
                        fetch('{{ route('getAntrian') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                // Token CSRF dari meta
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({
                                Nik: nik,
                                idPoli: Id_poli
                            })
                        }).then(response => {
                            Swal.fire({
                                title: "Berhasil!",
                                text: "Anda Mendapatkan No Antrian",
                                icon: "success",
                                confirmButtonText: "Cetak Antrian"
                            }).then((result) => {
                                window.location.href = "{{ route('cetak', $antrian) }}";

                            });
                        });
                    } else {
                        // Jika NIK tidak ditemukan => tawarkan pendaftaran
                        Swal.fire({
                            title: "Anda Belum Mendaftar",
                            icon: "error",
                            showCancelButton: true,
                            confirmButtonText: "Daftar",
                            cancelButtonText: "Batal"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Arahkan ke halaman pendaftaran
                                window.location.href = "{{ route('create', $data->ID_Poli) }}";
                            }
                        });
                    }
                })
                .catch(error => {
                    console.error(error);
                    Swal.fire({
                        title: "Error",
                        text: "Terjadi kesalahan. Silakan coba lagi.",
                        icon: "error"
                    });
                });
        });
    </script>

</body>

</html>