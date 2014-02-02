<?php error_reporting(0); 

include 'koneksi.php';
include 'perhitungan.php';
?><head>
<title>Index Librorum Prohibitum | Pustaka</title>
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
	//createindex();
	//countbobot();
	//countpanjangvektor(); 
	echo"<br />";
	
	$result = mysql_query("SELECT * FROM buku ORDER BY Id");

	while($row = mysql_fetch_array($result)) {
		echo $row['Id'] . ". " . $row['Judul'] . "<br />" . $row['Isi'];
		echo "<hr />";
	}  
	
?>

</div>

</body>
