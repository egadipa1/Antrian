<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Antrian</title>
    <style>
        .box {
            width: 20%;
            height: 325px;
            border: 1px solid;
            margin: auto;
            border: 2px solid;
            text-align: center;
            /* margin-top: auto;*/
            /* display: flex;
            justify-content: center;
            align-items: center; */
        }

        p b {
            padding: 0%;
            font-size: 25px;
            margin: auto;
        }

        hr {
            border: none;
            border-top: 2px dashed #000;
            margin: 10px 0;

        }

        .antri {
            font-size: 50px;
            margin: auto;
        }

        /* line {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: antiquewhite;
            transform: translateY()
        } */
    </style>
</head>

<body>
    <div class="box">
        <p>Selamat Datang</p>
        <p><b>Nomor Antrian</b></p>
        <hr>
        <h4>Pendaftaran</h4>
        <p class="antri">001</p> <!--<a href="">No Antrian</a>-->
        <p>Terima Kasih Sudah Mengantri</p>
        <?php echo date("l, d-M-y,") ?>
        <?php echo date("h:i a") ?>
    </div>
</body>

</html>