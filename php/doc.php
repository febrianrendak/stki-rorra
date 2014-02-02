<?php error_reporting(0); 

include 'koneksi.php';
include 'perhitungan.php';
?><head>
<title>Index Librorum Prohibitum | Insert Document</title>
</head>


<link rel="stylesheet" href="style/style.css" type="text/css" />

</head>

<body>

<div class="kepala">

<div class="kepaladalam">


<a href="index.php" > <div class="logo"> </div> </a>

<a href="index.php" > <div class="judul"></div> </a>


<div class="menu"> 
<ul class="navigation">
<li><a href="index.php">Home</a></li>
<li><a href="doc.php">Insert Dokument</a></li>
<li><a href="pustaka.php">Pustaka</a></li>
<li><a href="indexing.php">Index & Vektor</a></li>
<li><a href="stem.php">Stemming</a></li>
</ul>
<p>
<br />
<hr />

</div>

</div>
</div>

<div class="badan"> 

<?php
print("<table>");	
	print("
	<form enctype='multipart/form-data' method='post' action='doc.php'>
	Insert Dokument  : <input type='file' name='fupload'><br>
	<br /><input type=submit value=Insert>
	</form>
	<br><br>
	");
	$nama_file = $_FILES['fupload']['name'];
    $tipe_file   = $_FILES['fupload']['type'];
    $isinya = file($nama_file);
    $jumlah_baris = sizeof($isinya);
	if ($tipe_file != 'text/plain'){
					echo '  ';
				}
    else if ($jumlah_baris > 2){
			echo "text terlalu banyak atau tidak sesuai format";
	}
	else {
				
			$judul = $isinya[0];
			$isi = $isinya[1];
				echo "<b>judul</b>: ";
				 echo $judul."<br>";
				 echo "<b>isi</b> : <br>";
				 echo $isi."<br>";		 	
				 insert_dokumen($judul,$isi) ;
			}
	print("</table><hr />");
	
	createindex();
	countbobot();
	countpanjangvektor(); 

	
?>

</div>

</body>
