<?php
include "vt_class.php";
$vt = new vt("berkaysite");


//Veri Ekleme
$tabloVeri = $vt->listele("SELECT * FROM ürünler");
if(isset($_POST["ekle"])){
    
    $ürünKodu = $_POST["ürünKodu"];
    $ürünAdi = $_POST["ürünAdi"];
    $ürünÖzellikleri = $_POST["ürünÖzellikleri"];
    $ürünAçiklamasi = $_POST["ürünAçiklamasi"];
    $ürünFiyat = $_POST["ürünFiyat"];
    $ürünAdet = $_POST["ürünAdet"];
    $ürünİmage = $_POST["ürünImage"];



    $vt->ekle("INSERT INTO ürünler(ürünKodu,ürünAdi,ürünÖzellikleri,ürünAciklamasi,ürünFiyat,ürünAdet,ürünİmage) VALUES ('$ürünKodu','$ürünAdi','$ürünÖzellikleri','$ürünAçiklamasi','$ürünFiyat','$ürünAdet','$ürünİmage')");
    header("Location: admin.php");

}
//Veri Silme
if(isset($_POST["sil"])){
   
    $id=$_POST["id"];

    $vt->sil($id,"ürünler");

   
    header("Location: admin.php");
}
//Veri güncelleme
if(isset($_POST["güncelle"])){

    $id=$_POST["id"];
    $fullName = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $vt->güncelle("UPDATE ürünler SET fullName='$fullName',email='$email',password='$password' WHERE id='$id'");
    header("Location: admin.php");


}
if(isset($_POST["iptal"])){

    
    header("Location: admin.php");
}



?>