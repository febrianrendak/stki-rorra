<?php error_reporting(0); 

include 'koneksi.php';
include 'perhitungan.php';
?>
<head>
<title>Index Librorum Prohibitum | Stemming</title>
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
mysql_query("TRUNCATE TABLE stemm");
mysql_query("TRUNCATE TABLE indeks");

$result = mysql_query("SELECT * FROM buku ORDER BY Id");

	while($row = mysql_fetch_array($result)) {
		echo $row['Id'].". " . $row['Judul'] . "<br />" . $row['Isi'] ."<br>";
		$proses1 = $row['Isi'];
		$proses0 = $row['Id'];
		$proses3 = 0;
	$proses2=preproses($proses1,$proses0);
	} 
	
	countbobot();
	countpanjangvektor(); 
	countpanjangunit();
	countPQ();
	cosine ();
	
?>

</div>

</body>
