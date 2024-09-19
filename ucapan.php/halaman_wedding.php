<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>doa dan kata kata</h3>
    <p>
        tes
    </p>

<div>
      <form action="" method="post">
        <input type="text" name="nama" placeholder="nama"> <br>
        <textarea  name="ucapan" cols="30" rows="4" placeholder="ucapan"></textarea><br>
        <select name="keterangan">
            <option value="1">ya</option>
            <option value="2">tidak hadir</option>
            <option value="3">tidak yakin</option>
        </select>
        <button type="submit">submit</button>
      </form>  
    </div>

    <?php 

$host = "localhost";
$username = "root";
$password = "";
$database = "undangan";

$connection = new mysqli($host,$username, $password, $database);
    
if ($connection->connect_error){
    echo "koneksi gagal";

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST ['nama'];
    $ucapan = $_POST ['ucapan'];
    $keterangan = $_POST ['keterangan'];

    $sql = "INSERT INTO bukutamu (nama, ucapan, keterangan) VALUES ('$nama',  '$ucapan',  '$keterangan')";

    $connection->query($sql);
}

$SQL2 = "select * from bukutamu order by id desc";
$hasil = $connection->query($SQL2);
?>
<div style="height: 100px; width: 200px; overflow:auto;"> 

<?php

while  ($baris = $hasil ->fetch_row()){
    
?>
  <div style="border-style: solid; border-color:blueviolet; margin: 10px;">
    <p style="font-weight:bold;"><?= $baris[1]?></p>
    <p><?= $baris[2] ?></p>
    
</div>
<?php
}

$hasil->free_result()

?>
<form action="insert.php" method="post"></form>
</body>
</html>