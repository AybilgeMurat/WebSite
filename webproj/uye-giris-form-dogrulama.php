<?php

$data=array();

$_POST=json_decode(file_get_contents('php://input'),true);

if(empty($_POST['kullaniciAdi'])){

$data['kullaniciAdi']='Kullanıcı adı gerekli';

}

if(empty($_POST['kullaniciSifre'])){

$data['kullaniciSifre']='Şifre gerekli';

}

if(!empty($data)){
$data['mesaj']='';

}
else{

$data['mesaj']='Giriş yapıldı...';

$data['kullaniciAdi']='';

$data['kullaniciSifre']='';

}
echo json_encode($data);

?>