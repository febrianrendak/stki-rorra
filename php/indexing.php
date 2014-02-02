<?php error_reporting(0); 

include 'koneksi.php';
include 'perhitungan.php';
?>
<head>
<title>Index Librorum Prohibitum | Index & Vector</title>
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
?><div style="padding:0px; width :300px; float:left; height :auto;"> <?
	print("Tabel Vektor <hr />");
	?></div>
    
    <div style="padding-left:10px;width :350px; float:left; height :auto;"> <?
	print("Tabel Index <hr />");
	?></div>
    
    <br />  <br /> 
    <div style="padding:10px;width :300px; float:left; 	height :auto;	margin-right: auto;	background-color:#ffffff;">
    <?

	print("<table>");	
	print("<tr><td>DocID</td><td>Panjang Vektor</td></tr>");
	$result = mysql_query("SELECT * FROM vektor");

	while($row = mysql_fetch_array($result)) {
		
		print("<tr>");
		print("<td><center>" . $row['DocId'] . "</center></td><td><center>" . $row['Panjang'] . "</center></td>");
		print("</tr>");

	}  		
	print("</table><hr />");	
	?> </div> 
	
    <div style="padding:10px;width :auto; height :auto; margin-right: auto;	background-color:#ffffff;">
    <?
	
	print("<table>");	
	print("<tr><td>No</td><td>Term</td><td>DocID</td><td>Count</td><td><center>Bobot</center></td></tr>");
	$result = mysql_query("SELECT * FROM indeks ORDER BY Id");

	while($row = mysql_fetch_array($result)) {
		
		print("<tr>");
		print("<td>" . $row['Id'] . "</td><td>" . $row['Term'] . "</td><td><center>" . $row['DocId'] . 
			    "</center></td><td><center>" . $row['Count'] . "</center></td><td><center>" . $row['Bobot'] . "</center></td>");
		print("</tr>");

	}  		
	print("</table><hr />");
	
	?> </div> 

	<?	
	
?>

</div>

</body>
