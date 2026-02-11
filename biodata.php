<?php
// ================== DATA DIRI ==================
$nama_lengkap = "Kynanti Rizky Syafitri";
$nama_panggilan = "Kynan";
$agama = "Islam";
$tempat_lahir = "Kab.Semarang";
$tanggal_lahir = 30;
$bulan_lahir = "September";
$tahun_lahir = 2009;
$alamat = "Jl. Sendangguwo Selatan Rt.5 Rw.10";
$gender = "Perempuan";
$kewarganegaraan = "Indonesia";
$no_wa = "088215103085";
$email = "kynantisari2009@gmail.com";
$hobi = ["Membaca", "Mendengarkan musik", "Bercerita"];
$makanan_favorit = ["Cookies", "Mie Ayam", "Dimsum mentai"];
$minuman_favorit = ["Es teh", "Matcha late", "Jus mangga"];
$skills = [
    "HTML" => 75,
    "CSS" => 5,
    "PHP" => 50,
    "JavaScript" => 5
];
$motto = "Selalu cobalah hal baru, jangan pedulikan opini orang lain!!";

$tahun_sekarang = date("Y");
$umur = $tahun_sekarang - $tahun_lahir;
$tahun_10_lagi = $tahun_sekarang + 10;
$umur_10_lagi = $umur + 10;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata <?= $nama_panggilan; ?></title>

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: auto;
            background: white;
            padding: 20px;
        }
        h1, h2 {
            color: #2c3e50;
        }
        .profile {
            display: flex;
            gap: 20px;
        }
        .profile img {
            width: 180px;
            border-radius: 10px;
        }
        .skills input[type=range] {
            width: 100%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        ul.square {
            list-style-type: square;
        }
        ol.abc {
            list-style-type: upper-alpha;
        }

        /* MOTTO BERJALAN */
        .motto {
            background: #e8a0d0;
            color: white;
            padding: 10px;
            overflow: hidden;
            white-space: nowrap;
        }
        .motto span {
            display: inline-block;
            padding-left: 100%;
            animation: jalan 15s linear infinite;
        }
        @keyframes jalan {
            from { transform: translateX(0); }
            to { transform: translateX(-100%); }
        }
    </style>
</head>

<body>

<div class="motto">
    <span><i class="fa-solid fa-quote-left"></i> <?= $motto; ?> <i class="fa-solid fa-quote-right"></i></span>
</div>

<div class="container">
    <h1><i class="fa-solid fa-user"></i> Biodata Diri</h1>

    <div class="profile">
        <img src="foto kyn.jpeg" width="200" height="300" alt="Foto">
        <div>
            <p><b>Nama Lengkap:</b> <?= $nama_lengkap; ?></p>
            <p><b>Nama Panggilan:</b> <?= $nama_panggilan; ?></p>
            <p><b>Tempat, Tanggal Lahir:</b> <?= "$tempat_lahir, $tanggal_lahir-$bulan_lahir-$tahun_lahir"; ?></p>
            <p><b>Umur:</b> <?= $umur; ?> tahun</p>
            <p><b>Gender:</b> <?= $gender; ?></p>
            <p><b>Agama:</b> <?= $agama; ?></p>
            <p><b>Alamat:</b> <?= $alamat; ?></p>
            <p><b>Kewarganegaraan:</b> <?= $kewarganegaraan; ?></p>
            <p><b>No WA:</b> <?= $no_wa; ?></p>
            <p><b>Email:</b> <?= $email; ?></p>
        </div>
    </div>

    <h2><i class="fa-solid fa-heart"></i> Hobi</h2>
    <ol>
        <?php foreach ($hobi as $h) echo "<li>$h</li>"; ?>
    </ol>

    <h2><i class="fa-solid fa-utensils"></i> Makanan Favorit</h2>
    <ul class="square">
        <?php foreach ($makanan_favorit as $m) echo "<li>$m</li>"; ?>
    </ul>

    <h2><i class="fa-solid fa-mug-hot"></i> Minuman Favorit</h2>
    <ol class="abc">
        <?php foreach ($minuman_favorit as $d) echo "<li>$d</li>"; ?>
    </ol>

    <h2><i class="fa-solid fa-laptop-code"></i> Skills</h2>
    <div class="skills">
        <?php foreach ($skills as $skill => $nilai): ?>
            <label><?= $skill; ?> (<?= $nilai; ?>%)</label>
            <input type="range" value="<?= $nilai; ?>" disabled>
        <?php endforeach; ?>
    </div>

    <h2><i class="fa-solid fa-school"></i> Riwayat Pendidikan</h2>
    <table>
        <tr>
            <th>Tingkat</th>
            <th>Nama Sekolah</th>
        </tr>
        <tr>
            <td>SD</td>
            <td>SDN Gemah</td>
        </tr>
        <tr>
            <td>SMP</td>
            <td>SMPN 29 Semarang</td>
        </tr>
        <tr>
            <td>SMK</td>
            <td>SMKN 8 Semarang</td>
        </tr>
    </table>

    <h2><i class="fa-solid fa-star"></i> Keinginan 10 Tahun Lagi</h2>
    <p>
        Hai, namaku Kynan, saat ini tahun 2026, aku adalah seorang gadis manis yang berumur 17 tahun. Sepuluh tahun lagi di tahun 2036, di umur 27 tahun aku adalah seorang perempuan yang sudah lebih dewasa dan mandiri. Aku ingin menjadi salah satu siswi lulusan Sarjana Arsitektur (S.Ars) dan bekerja sesuai dengan bidang yang aku tekuni, serta memiliki pekerjaan sampingan sebagai UI/UX Designer. Rencana yang akan aku tempuh adalah belajar dengan giat, menekuni apa yang sedang aku jalani, serta membangun pengalaman dan portofolio sejak dini.
    </p>
    
<br><br>
<a href="jadwal.php">
    <button>📚 Melihat Jadwal</button>
</a>

<html>