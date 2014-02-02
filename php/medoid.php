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

	kmedoid();
	
	$x=1;
	$tampil = mysql_query ("SELECT kelompok FROM kmedoid WHERE jarakQuery!=1 ORDER BY jarakQuery ASC");
	while ($tampil2 = mysql_fetch_array($tampil)) {
	$tampil3 = $tampil2['kelompok'];
		echo "<br>PAGE : " . $x . "<br>";
		$view = mysql_query("SELECT Judul, Isi FROM buku WHERE kelompok=$tampil3");
		while ($view2 = mysql_fetch_array ($view)) {
			$view3 = $view2['Judul'];
			$view4 = $view2['Isi'];
			echo "<br>". $view3 . "<br>";
			echo $view4 . "<br>";
		}
		$x++;
	}
	
?>

</div>

</body>
