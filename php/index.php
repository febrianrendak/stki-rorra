<?php error_reporting(0); 

include 'koneksi.php';
include 'perhitungan.php';
?>
<head>
<title>Index Librorum Prohibitum</title>
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
print('<form action="index.php" method="post"><input type="text" name="keyword" /> <input name = "Search" type="submit" /></form><hr />');
			
$keyword = $_POST["keyword"];
		
	if ($keyword)  {
		$keyword = preproses($keyword);		
		
		print('Hasil pencarian pustaka untuk <b>' . $_POST["keyword"]  . '</b>(' . $keyword . '</b></font>) adalah <hr />'); 
		ambilcache($keyword);
		//hitungsim($keyword);
	} 
	
?>

</div>

</body>
