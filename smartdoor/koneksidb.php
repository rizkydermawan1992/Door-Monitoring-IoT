<?php

$server       = "localhost";
$user         = "root";
$password     = "";
$database     = "sensor"; //Silakan ganti dengan nama database anda

$koneksi      = mysqli_connect($server, $user, $password, $database);

//Token Bot Telegram
$Token_bot = "Pl4c3 y0u12 T0k3n h3rE";
//Zona Waktu
date_default_timezone_set("Asia/Jakarta");



function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query );
    $box = [];
    while( $fetch = mysqli_fetch_assoc($result) ){
             $box[] = $fetch;
    }
    return $box;
}

function updateDoor($door, $msg_state){
  global $koneksi;
  $sql = "INSERT INTO tabel_door(door_state) VALUES ('$door')";
  mysqli_query($koneksi, $sql);
  $query = "UPDATE tabel_setting SET msg_state = '$msg_state'";
  mysqli_query($koneksi, $query);
  return;
}

function tambahPenerima ($post) {
    global $koneksi;
    $id_chat  = htmlspecialchars($post ["id_chat"]);
    $nama   = htmlspecialchars($post ["nama"]);

    $query  = "INSERT INTO penerima_notif (id_chat, nama) VALUES ('$id_chat', '$nama')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);       
}

function ubahPenerima ($post) {
    global $koneksi;
    $id       =  htmlspecialchars($post ["id"]);
    $id_chat  =  htmlspecialchars($post ["id_chat"]);
    $nama     =  htmlspecialchars($post ["nama"]);
                
    $query = "UPDATE penerima_notif SET id_chat = '$id_chat', nama = '$nama' WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);                
}

function hapusPenerima ($id) {
  global $koneksi;
  mysqli_query($koneksi, "DELETE FROM penerima_notif WHERE id = '$id'");
  return mysqli_affected_rows($koneksi);
} 

function kirimPesan($id_chat, $pesan, $Token_bot) {
      $url = "https://api.telegram.org/bot" . $Token_bot . "/sendMessage?parse_mode=markdown&chat_id=" . $id_chat;
      $url = $url . "&text=" . urlencode($pesan);
      $ch = curl_init();
      $optArray = array(
                         CURLOPT_URL => $url,
                         CURLOPT_RETURNTRANSFER => true
                  );
      curl_setopt_array($ch, $optArray);
      $result = curl_exec($ch);
      curl_close($ch);
}


?>          

 