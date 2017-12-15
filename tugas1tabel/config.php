<?php

//open koneksi to mysql db
$koneksi = mysqli_connect("localhost","root","","db_kuliahweb") or die("Error " . mysqli_error($koneksi));

//fetch table rows from mysql db
$sql = "select * from tb_data";
$result = mysqli_query($koneksi, $sql) or die("Error in Selecting " . mysqli_error($koneksi));

//membuat array output berupa json
$data = array();
while($row =mysqli_fetch_assoc($result))
{
    $data[] = $row;
}
echo json_encode($data);

//close the db koneksi
mysqli_close($koneksi);

?>