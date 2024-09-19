<?Php
$host = "localhost";
$username = "root";
$password = "";
$database = "undangan";

$connection = new mysqli($host,$username, $password, $database);
    
if ($connection->connect_error){
    echo "koneksi gagal";

}

if (isset($_POST)){
    $nama = $_POST ['nama'];
    $ucapan = $_POST ['ucapan'];
    $keterangan = $_POST ['keterangan'];

}
 if ($nama != ""and $keterangan != ""){
    var_dump($_POST);
    $sql = "INSERT INTO bukutamu (nama, ucapan, keterangan) VALUES ('$nama',  '$ucapan',  '$keterangan')";
    $connection->query($sql);

    header("location: http://localhost/tugas-form-input-Packnovel/buku_tamu/halaman_wedding.php");
 }
    
 
 include 'koneksi.php';
 ?>
