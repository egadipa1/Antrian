<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <h2>Login</h2>
        <form class="container" id="nikForm">
            <div class="form-box">
                <label for="nik">NIK:</label>
                <input type="text" id="nik" name="nik" placeholder="Masukkan NIK" required />
                <button type="button" id="btn">Dapatkan No Antrian</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Get the form and button elements
        const form = document.getElementById("nikForm");
        const btn = document.getElementById("btn");
        const nikInput = document.getElementById("nik");

        // Function to handle form submission
        btn.addEventListener("click", function () {
            const nik = nikInput.value.trim(); // Get the NIK input value

            // Check if the NIK input is empty
            if (nik === "") {
                Swal.fire({
                    title: "Peringatan!",
                    text: "NIK harus diisi!",
                    icon: "warning",
                    confirmButtonText: "OK",
                });
            } else {
                // Mengecek apakah nik sudah terdaftar atau belum
                const Pendaftaran = ["1234567890", "9876543210"]; // mengambil dari database agar bisa login
                if (Pendaftaran.includes(nik)) {
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Anda Mendapatkan No Antrian",
                        icon: "success",
                        footer: '<a href="#">Cetak No Antrian</a>',
                    });
                } else {
                    alert('Anda Belum Mendaftar');
                    var tes = confirm("Apakah Anda Ingin Mendaftar??");
                    if (tes == true){
                      // kalau ingin daftar akan dialihkan ke halaman pendaftaran
                      window.location.href = "https://example.com/registration";
                    } else {
                      alert('Anda Tidak Menjadi Mendaftar');
                    }
                    window.location.href = "https://example.com/registration"; /// indah ke halamanan pendaftaran
                }
            }
        });
    </script>
</body>

</html>