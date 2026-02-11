<?php

$jadwal = [
    1 => ["POR", "INF", "BNG", "PGD", "BIN"],
    2 => ["POR", "INF", "BNG", "PGD", "BIN"],
    3 => ["POR", "KKA", "SNM", "PGD", "SJR"],
    4 => ["BNG", "KKA", "SNM", "PGD", "SJR"],
    5 => ["BNG", "PGD", "MTK", "GIM", "MTK"],
    6 => ["BJW", "PGD", "MTK", "GIM", "MTK"],
    7 => ["BJW", "PGD", "PPS", "GIM", "IPAS"],
    8 => ["PABP", "IPAS", "PPS", "GIM", "IPAS"],
    9 => ["PABP", "IPAS", "BIN", "IPAS", "-"],
    10 => ["PABP", "IPAS", "BIN", "IPAS", "-"]
];

$piket = [
    "Senin" => "Ahmad, Zaidan, Chayu, Alif, Ulhaq, Vania, Kynan, Dova",
    "Selasa" => "Anandira, Rania, Chessa, Vanessa, Finza, Erel, Tegar",
    "Rabu" => "Anggita, Silvia, Dimas, Tiara, Furan, Athala, Maharani",
    "Kamis" => "Aurelia, Aisyah, Darus, M. Zidan, Galuh, Dzaky, Aini",
    "Jumat" => "Zahran, Keisha, Azzahro, Archuleta, Nnyko, Khayra, Destia"
];

?>

<!DOCTYPE html>
<html>
<head>
<title>Jadwal Pelajaran</title>

<style>

body{
font-family:Arial;
background:linear-gradient(to right,#fbc2eb,#a6c1ee);
margin:0;
}

.box{
width:85%;
margin:30px auto;
background:white;
padding:25px;
border-radius:15px;
box-shadow:0 0 10px rgba(0,0,0,0.2);
}

h1{
text-align:center;
color:#7a1fa2;
}

.card{
background:#f2f2f2;
padding:15px;
margin-top:25px;
border-radius:10px;
}

table{
width:100%;
border-collapse:collapse;
margin-top:10px;
}

th,td{
border:1px solid #999;
padding:10px;
text-align:center;
}

th{
background:#e1bee7;
color:#4a148c;
}

.btn{
display:inline-block;
margin-top:25px;
background:#7a1fa2;
color:white;
padding:12px 25px;
border-radius:12px;
text-decoration:none;
font-weight:bold;
}

.btn:hover{
background:#5c1580;
}

footer{
text-align:center;
margin-top:20px;
color:#555;
font-size:14px;
}

</style>
</head>

<body>

<div class="box">

<h1>📚 JADWAL X PPLG 3</h1>


<!-- JADWAL PELAJARAN -->
<div class="card">

<h3>📝 Jadwal Pelajaran</h3>

<table>

<tr>
<th>Jam</th>
<th>Senin</th>
<th>Selasa</th>
<th>Rabu</th>
<th>Kamis</th>
<th>Jumat</th>
</tr>

<?php foreach($jadwal as $jam => $mapel){ ?>

<tr>
<td><?= $jam ?></td>
<td><?= $mapel[0] ?></td>
<td><?= $mapel[1] ?></td>
<td><?= $mapel[2] ?></td>
<td><?= $mapel[3] ?></td>
<td><?= $mapel[4] ?></td>
</tr>

<?php } ?>

</table>

</div>


<!-- JADWAL PIKET -->
<div class="card">

<h3>🧹 Jadwal Piket</h3>

<table>

<tr>
<th>Hari</th>
<th>Petugas</th>
</tr>

<?php foreach($piket as $hari => $nama){ ?>

<tr>
<td><?= $hari ?></td>
<td><?= $nama ?></td>
</tr>

<?php } ?>

</table>

</div>

<br><br>
<a href="biodata.php">
    <button>⬅ Kembali ke Biodata</button>
</a>

</html>