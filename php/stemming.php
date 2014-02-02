<?php
function cari($t){
	include "koneksi.php";
	$hasil = mysql_num_rows(mysql_query("SELECT * FROM tb_katadasar WHERE katadasar='$t'"));
	return $hasil;
}

//langkah 1 - hapus partikel
function hapuspartikel($t){
if(cari($t)!=1){
	if((substr($t, -3) == 'kah' )||( substr($t, -3) == 'lah' )||( substr($t, -3) == 'pun' )){
		$t = substr($t, 0, -3);			
		}
	}
	return $t;
}

//langkah 2 - hapus possesive pronoun
function hapuspp($t){
if(cari($t)!=1){
	if(strlen($t) > 4){
	if((substr($t, -2)== 'ku')||(substr($t, -2)== 'mu')){
		$t = substr($t, 0, -2);
	}else if((substr($t, -3)== 'nya')){
		$t = substr($t,0, -3);
	}
  }
}
	return $t;
}

//langkah 3 hapus first order prefiks (awalan pertama)
function hapusawalan1($t){
if(cari($t)!=1){

	if(substr($t,0,4)=="meng"){
		if(substr($t,4,1)=="e"||substr($t,4,1)=="u"){
		$t = "k".substr($t,4);
		}else{
		$t = substr($t,4);
		}
	}else if(substr($t,0,4)=="meny"){
		$t = "s".substr($t,4);
	}else if(substr($t,0,3)=="men"){
		$t = substr($t,3);
	}else if(substr($t,0,3)=="mem"){
		if(substr($t,3,1)=="a" || substr($t,3,1)=="i" || substr($t,3,1)=="e" || substr($t,3,1)=="u" || substr($t,3,1)=="o"){
			$t = "p".substr($t,3);
		}else{
			$t = substr($t,3);
		}
	}else if(substr($t,0,2)=="me"){
		$t = substr($t,2);
	}else if(substr($t,0,4)=="peng"){
		if(substr($t,4,1)=="e" || substr($t,4,1)=="a"){
		$t = "k".substr($t,4);
		}else{
		$t = substr($t,4);
		}
	}else if(substr($t,0,4)=="peny"){
		$t = "s".substr($t,4);
	}else if(substr($t,0,3)=="pen"){
		if(substr($t,3,1)=="a" || substr($t,3,1)=="i" || substr($t,3,1)=="e" || substr($t,3,1)=="u" || substr($t,3,1)=="o"){
			$t = "t".substr($t,3);
		}else{
			$t = substr($t,3);
		}
	}else if(substr($t,0,3)=="pem"){
		if(substr($t,3,1)=="a" || substr($t,3,1)=="i" || substr($t,3,1)=="e" || substr($t,3,1)=="u" || substr($t,3,1)=="o"){
			$t = "p".substr($t,3);
		}else{
			$t = substr($t,3);
		}
	}else if(substr($t,0,2)=="di"){
		$t = substr($t,2);
	}else if(substr($t,0,3)=="ter"){
		$t = substr($t,3);
	}else if(substr($t,0,2)=="ke"){
		$t = substr($t,2);
	}
}
	return $t;
}
//langkah 4 hapus second order prefiks (awalan kedua)
function hapusawalan2($t){
if(cari($t)!=1){
  
	if(substr($t,0,3)=="ber"){
		$t = substr($t,3);
	}else if(substr($t,0,3)=="bel"){
		$t = substr($t,3);
	}else if(substr($t,0,2)=="be"){
		$t = substr($t,2);
	}else if(substr($t,0,3)=="per" && strlen($t) > 5){
		$t = substr($t,3);
	}else if(substr($t,0,2)=="pe"  && strlen($t) > 5){
		$t = substr($t,2);
	}else if(substr($t,0,3)=="pel"  && strlen($t) > 5){
		$t = substr($t,3);
	}else if(substr($t,0,2)=="se"  && strlen($t) > 5){
		$t = substr($t,2);
	}
}
	return $t;
}
////langkah 5 hapus suffiks
function hapusakhiran($t){
if(cari($t)!=1){

	if (substr($t, -3)== "kan" ){
		$t = substr($t, 0, -3);
	}
	else if(substr($t, -1)== "i" ){
	    $t = substr($t, 0, -1);
	}else if(substr($t, -2)== "an"){
		$t = substr($t, 0, -2);
	}
}	

	return $t;
}
?>