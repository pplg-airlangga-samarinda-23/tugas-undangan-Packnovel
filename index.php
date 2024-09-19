<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1.0">
    <title>Invitation Template</title>
    <link rel="stylesheet" href="style.css">
</head>
<body 
background="https://i5.walmartimages.com/asr/02499a2a-43f2-4ecc-9e47-fe61b9f09a6b_1.d6622542191df22236b900126bbbddc9.jpeg">
    <audio controls autoplay loop src="zombies-harp.mp3.mp3"></audio>
    <header>
        <h1>undangan pernikahan digital</h1>
    </header>
    <main>
        <section>
            <h2>Event Details</h2>
            <p>undangan: [adam & astolfo]</p>
            <p>tangal: [9/11/2048]</p>
            <p>resepsi: [jam 11-3]</p>

            <div class="slider">
                <div class="slides">
                    <img class="slide" src="image1.jpg" alt="Image #1">
                    <img class="slide" src="image2.jpg" alt="Image #2">
                    <img class="slide" src="image3.jpg" alt="Image #3">
                </div>
                <button class="prev" onclick="prevSlide()">&#10094</button>
                <button class="next" onclick="nextSlide()">&#10095</button>
            </div>
        
            <script src="index.js"></script>


            
        
        

            
            
            
            
    
        </section>
        
        <div style="text-decoration:none; overflow:hidden;max-width:100%;width:500px;height:500px;"><div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=ambatukam&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="the-googlemap-enabler" href="https://www.bootstrapskins.com/themes" id="get-map-data">premium bootstrap themes</a><style>#embed-map-canvas img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style></div>


</body>
<section>
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
</section>


</html>