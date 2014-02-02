<?php
include "stemming.php";
include "koneksi.php";

function insert_dokumen($judul,$isi)
{
$judull = $judul;
$isii = $isi ; 
$insert="INSERT INTO buku(Judul,Isi)
          VALUES('$judull','$isii')";
  mysql_query($insert);
  echo '<b>dokumen telah masuk</b>';
}


function preproses($t,$i) {
				
	$t = strtolower($t);
	
	$t = str_replace("'", "", $t);
	$t = str_replace("-", "", $t);
	$t = str_replace(")", "", $t);
	$t = str_replace("(", "", $t);
	$t = str_replace("\"", "", $t);
	$t = str_replace("/", "", $t);
	$t = str_replace("=", "", $t);
	$t = str_replace(".", "", $t);
	$t = str_replace(",", "", $t);
	$t = str_replace(":", "", $t);
	$t = str_replace(";", "", $t);
	$t = str_replace("!", "", $t);
	$t = str_replace("?", "", $t);
	
	$string = $t;
	
	foreach(explode(" ", $string) as $arr) {
		
	if((preg_match('/\bdi\b/i', $arr)) || (preg_match('/\byang\b/i', $arr)) || (preg_match('/\bdepan\b/i', $arr))|| (preg_match('/\bpunya\b/i', $arr)) || (preg_match('/\bdan\b/i', $arr)) || (preg_match('/\bitu\b/i', $arr)) || (preg_match('/\bdengan\b/i', $arr)) || (preg_match('/\bdengan\b/i', $arr)) || (preg_match('/\buntuk\b/i', $arr)) || (preg_match('/\btidak\b/i', $arr)) 	|| (preg_match('/\bini\b/i', $arr)) || (preg_match('/\bdari\b/i', $arr)) || (preg_match('/\bdalam\b/i', $arr)) || (preg_match('/\bakan\b/i', $arr)) || (preg_match('/\bpada\b/i', $arr)) || (preg_match('/\bjuga\b/i', $arr)) || (preg_match('/\bsaya\b/i', $arr)) || (preg_match('/\bke\b/i', $arr)) || (preg_match('/\bkarena\b/i', $arr))|| (preg_match('/\btersebut\b/i', $arr)) || (preg_match('/\bbisa\b/i', $arr)) || (preg_match('/\bada\b/i', $arr)) || (preg_match('/\bmereka\b/i', $arr))	|| (preg_match('/\blebih\b/i', $arr)) || (preg_match('/\bkata\b/i', $arr)) || (preg_match('/\btahun\b/i', $arr)) || (preg_match('/\bsudah\b/i', $arr)) || (preg_match('/\batau\b/i', $arr)) || (preg_match('/\bsaat\b/i', $arr))	|| (preg_match('/\boleh\b/i', $arr)) || (preg_match('/\bmenjadi\b/i', $arr)) || (preg_match('/\borang\b/i', $arr)) || (preg_match('/\bia\b/i', $arr)) || (preg_match('/\btelah\b/i', $arr)) || (preg_match('/\badalah\b/i', $arr)) || (preg_match('/\bseperti\b/i', $arr)) || (preg_match('/\bsebagai\b/i', $arr)) || (preg_match('/\bbahwa\b/i', $arr)) || (preg_match('/\bdapat\b/i', $arr)) || (preg_match('/\bpara\b/i', $arr)) || (preg_match('/\bharus\b/i', $arr))
	|| (preg_match('/\bnamun\b/i', $arr)) || (preg_match('/\bkita\b/i', $arr)) || (preg_match('/\bdua\b/i', $arr)) || (preg_match('/\bsatu\b/i', $arr)) || (preg_match('/\bmasih\b/i', $arr)) || (preg_match('/\bhari\b/i', $arr))	|| (preg_match('/\bhanya\b/i', $arr)) || (preg_match('/\bmengatakan\b/i', $arr)) || (preg_match('/\bkepada\b/i', $arr)) || (preg_match('/\bkami\b/i', $arr)) || (preg_match('/\bsetelah\b/i', $arr)) || (preg_match('/\bmelakukan\b/i', $arr))	|| (preg_match('/\blalu\b/i', $arr)) || (preg_match('/\bbelum\b/i', $arr)) || (preg_match('/\blain\b/i', $arr)) || (preg_match('/\bdia\b/i', $arr)) || (preg_match('/\bkalau\b/i', $arr)) || (preg_match('/\bterjadi\b/i', $arr)) 	|| (preg_match('/\bbanyak\b/i', $arr)) || (preg_match('/\bmenurut\b/i', $arr)) || (preg_match('/\banda\b/i', $arr)) || (preg_match('/\bhingga\b/i', $arr))	|| (preg_match('/\btak\b/i', $arr)) || (preg_match('/\bbaru\b/i', $arr)) || (preg_match('/\bbeberapa\b/i', $arr)) || (preg_match('/\bketika\b/i', $arr)) || (preg_match('/\bsaja\b/i', $arr)) || (preg_match('/\bjalan\b/i', $arr)) || (preg_match('/\bsekitar\b/i', $arr)) || (preg_match('/\bsecara\b/i', $arr))	|| (preg_match('/\bdilakukan\b/i', $arr)) || (preg_match('/\bsementara\b/i', $arr)) || (preg_match('/\btapi\b/i', $arr)) || (preg_match('/\bsangat\b/i', $arr))	|| (preg_match('/\bhal\b/i', $arr)) || (preg_match('/\bsehingga\b/i', $arr)) || (preg_match('/\bseorang\b/i', $arr)) || (preg_match('/\bbagi\b/i', $arr))	|| (preg_match('/\bbesar\b/i', $arr)) || (preg_match('/\blagi\b/i', $arr)) || (preg_match('/\bselama\b/i', $arr)) || (preg_match('/\bantara\b/i', $arr))	|| (preg_match('/\bwaktu\b/i', $arr)) || (preg_match('/\bsebuah\b/i', $arr)) || (preg_match('/\bjika\b/i', $arr)) || (preg_match('/\bsampai\b/i', $arr))	|| (preg_match('/\bjadi\b/i', $arr)) || (preg_match('/\bterhadap\b/i', $arr)) || (preg_match('/\btiga\b/i', $arr)) || (preg_match('/\bserta\b/i', $arr)) || (preg_match('/\bpun\b/i', $arr)) || (preg_match('/\bsalah\b/i', $arr)) || (preg_match('/\bmerupakan\b/i', $arr)) || (preg_match('/\batas\b/i', $arr))
	|| (preg_match('/\bsejak\b/i', $arr)) || (preg_match('/\bmembuat\b/i', $arr)) || (preg_match('/\bbaik\b/i', $arr)) || (preg_match('/\bmemiliki\b/i', $arr))	|| (preg_match('/\bkembali\b/i', $arr)) || (preg_match('/\bselain\b/i', $arr)) || (preg_match('/\btetapi\b/i', $arr)) || (preg_match('/\bpertama\b/i', $arr))	|| (preg_match('/\bkedua\b/i', $arr)) || (preg_match('/\bmemang\b/i', $arr)) || (preg_match('/\bpernah\b/i', $arr)) || (preg_match('/\bapa\b/i', $arr))	|| (preg_match('/\bmulai\b/i', $arr)) || (preg_match('/\bsama\b/i', $arr)) || (preg_match('/\btentang\b/i', $arr)) || (preg_match('/\bbukan\b/i', $arr))	|| (preg_match('/\bagar\b/i', $arr)) || (preg_match('/\bsemua\b/i', $arr)) || (preg_match('/\bsedang\b/i', $arr)) || (preg_match('/\bkali\b/i', $arr))	|| (preg_match('/\bkemudian\b/i', $arr)) || (preg_match('/\bhasil\b/i', $arr)) || (preg_match('/\bsejumlah\b/i', $arr)) || (preg_match('/\bjuta\b/i', $arr))	|| (preg_match('/\bjuta\b/i', $arr)) || (preg_match('/\bpersen\b/i', $arr)) || (preg_match('/\bsendiri\b/i', $arr)) || (preg_match('/\bkatanya\b/i', $arr))	|| (preg_match('/\bdemikian\b/i', $arr)) || (preg_match('/\bmasalah\b/i', $arr)) || (preg_match('/\bmungkin\b/i', $arr)) || (preg_match('/\bumum\b/i', $arr))	|| (preg_match('/\bsetiap\b/i', $arr)) || (preg_match('/\bbulan\b/i', $arr)) || (preg_match('/\bbagian\b/i', $arr)) || (preg_match('/\bbila\b/i', $arr))
	|| (preg_match('/\blainnya\b/i', $arr)) || (preg_match('/\bterus\b/i', $arr)) || (preg_match('/\bterus\b/i', $arr)) || (preg_match('/\bluar\b/i', $arr))	|| (preg_match('/\bcukup\b/i', $arr)) || (preg_match('/\btermasuk\b/i', $arr)) || (preg_match('/\bsebelumnya\b/i', $arr)) || (preg_match('/\bbahkan\b/i', $arr))	|| (preg_match('/\bwib\b/i', $arr)) || (preg_match('/\btempat\b/i', $arr)) || (preg_match('/\bperlu\b/i', $arr)) || (preg_match('/\bmenggunakan\b/i', $arr)) || (preg_match('/\bmemberikan\b/i', $arr)) || (preg_match('/\brabu\b/i', $arr)) || (preg_match('/\bsedangkan\b/i', $arr)) || (preg_match('/\bkamis\b/i', $arr))	|| (preg_match('/\blangsung\b/i', $arr)) || (preg_match('/\bapakah\b/i', $arr)) || (preg_match('/\bpihak\b/i', $arr)) || (preg_match('/\bmelalui\b/i', $arr))	|| (preg_match('/\bdiri\b/i', $arr)) || (preg_match('/\bmencapai\b/i', $arr)) || (preg_match('/\bminggu\b/i', $arr)) || (preg_match('/\baku\b/i', $arr))	|| (preg_match('/\bberada\b/i', $arr)) || (preg_match('/\btinggi\b/i', $arr))|| (preg_match('/\bingin\b/i', $arr)) || (preg_match('/\bsebelum\b/i', $arr))	|| (preg_match('/\btengah\b/i', $arr)) || (preg_match('/\bkini\b/i', $arr)) || (preg_match('/\bthe\b/i', $arr)) || (preg_match('/\btahu\b/i', $arr))	|| (preg_match('/\bbersama\b/i', $arr)) || (preg_match('/\bselasa\b/i', $arr)) || (preg_match('/\bbegitu\b/i', $arr)) || (preg_match('/\bmerasa\b/i', $arr)) 	|| (preg_match('/\bberbagai\b/i', $arr)) || (preg_match('/\bmengenai\b/i', $arr)) || (preg_match('/\bmaka\b/i', $arr)) || (preg_match('/\bjumlah\b/i', $arr))	|| (preg_match('/\bmasuk\b/i', $arr)) || (preg_match('/\bkatanya\b/i', $arr)) || (preg_match('/\bmengalami\b/i', $arr)) || (preg_match('/\bsering\b/i', $arr))	|| (preg_match('/\bujar\b/i', $arr)) || (preg_match('/\bkondisi\b/i', $arr)) || (preg_match('/\bakibat\b/i', $arr)) || (preg_match('/\bhubungan\b/i', $arr))
	|| (preg_match('/\bempat\b/i', $arr)) || (preg_match('/\bpaling\b/i', $arr)) || (preg_match('/\bmendapatkan\b/i', $arr)) || (preg_match('/\bselalu\b/i', $arr)) || (preg_match('/\blima\b/i', $arr)) || (preg_match('/\bmeminta\b/i', $arr)) || (preg_match('/\bmelihat\b/i', $arr)) || (preg_match('/\bsekarang\b/i', $arr))	|| (preg_match('/\bmengaku\b/i', $arr)) || (preg_match('/\bmau\b/i', $arr)) || (preg_match('/\bkerja\b/i', $arr)) || (preg_match('/\bacara\b/i', $arr)) || (preg_match('/\bmenyatakan\b/i', $arr))	|| (preg_match('/\bmasa\b/i', $arr)) || (preg_match('/\bproses\b/i', $arr)) || (preg_match('/\btanpa\b/i', $arr)) || (preg_match('/\bselatan\b/i', $arr)) || (preg_match('/\bsempat\b/i', $arr))	|| (preg_match('/\badanya\b/i', $arr)) || (preg_match('/\bhidup\b/i', $arr)) || (preg_match('/\bdatang\b/i', $arr)) || (preg_match('/\bsenin\b/i', $arr)) || (preg_match('/\brasa\b/i', $arr))	|| (preg_match('/\bmaupun\b/i', $arr)) || (preg_match('/\bseluruh\b/i', $arr)) || (preg_match('/\bmantan\b/i', $arr)) || (preg_match('/\blama\b/i', $arr)) || (preg_match('/\bjenis\b/i', $arr))	|| (preg_match('/\bsegera\b/i', $arr)) || (preg_match('/\bmisalnya\b/i', $arr)) || (preg_match('/\bmendapat\b/i', $arr)) || (preg_match('/\bbawah\b/i', $arr)) || (preg_match('/\bjangan\b/i', $arr))	|| (preg_match('/\bmeski\b/i', $arr)) || (preg_match('/\bterlihat\b/i', $arr)) || (preg_match('/\bakhirnya\b/i', $arr)) || (preg_match('/\bjumat\b/i', $arr)) || (preg_match('/\bpunya\b/i', $arr))	|| (preg_match('/\bpunya\b/i', $arr)) || (preg_match('/\byakni\b/i', $arr)) || (preg_match('/\bterakhir\b/i', $arr)) || (preg_match('/\bkecil\b/i', $arr)) || (preg_match('/\bpanjang\b/i', $arr))	|| (preg_match('/\bbadan\b/i', $arr)) || (preg_match('/\bjuni\b/i', $arr)) || (preg_match('/\bof\b/i', $arr)) || (preg_match('/\bjelas\b/i', $arr)) || (preg_match('/\bjauh\b/i', $arr)) || (preg_match('/\btentu\b/i', $arr))	|| (preg_match('/\bsemakin\b/i', $arr)) || (preg_match('/\btinggal\b/i', $arr)) || (preg_match('/\bkurang\b/i', $arr)) || (preg_match('/\bmampu\b/i', $arr)) || (preg_match('/\bposisi\b/i', $arr))	|| (preg_match('/\basal\b/i', $arr)) || (preg_match('/\bsekali\b/i', $arr)) || (preg_match('/\bsesuai\b/i', $arr)) || (preg_match('/\bsebesar\b/i', $arr)) || (preg_match('/\bberat\b/i', $arr))	|| (preg_match('/\bdirinya\b/i', $arr)) || (preg_match('/\bmemberi\b/i', $arr)) || (preg_match('/\bpagi\b/i', $arr)) || (preg_match('/\bsabtu\b/i', $arr)) || (preg_match('/\bternyata\b/i', $arr))	|| (preg_match('/\bmencari\b/i', $arr)) || (preg_match('/\bsumber\b/i', $arr)) || (preg_match('/\bruang\b/i', $arr)) || (preg_match('/\bmenunjukan\b/i', $arr)) || (preg_match('/\bbiasanya\b/i', $arr))	|| (preg_match('/\bnama\b/i', $arr)) || (preg_match('/\bsebanyak\b/i', $arr)) || (preg_match('/\butara\b/i', $arr)) || (preg_match('/\bberlangsung\b/i', $arr)) || (preg_match('/\bbarat\b/i', $arr))	|| (preg_match('/\bkemungkinan\b/i', $arr)) || (preg_match('/\byaitu\b/i', $arr)) || (preg_match('/\bberdasarkan\b/i', $arr)) || (preg_match('/\bsebenarnya\b/i', $arr)) || (preg_match('/\bcara\b/i', $arr))
	|| (preg_match('/\butama\b/i', $arr)) || (preg_match('/\bpekan\b/i', $arr)) || (preg_match('/\bterlalu\b/i', $arr)) || (preg_match('/\bmembawa\b/i', $arr)) || (preg_match('/\bkebutuhan\b/i', $arr))	|| (preg_match('/\bsuatu\b/i', $arr)) || (preg_match('/\bmenerima\b/i', $arr)) || (preg_match('/\bpenting\b/i', $arr)) || (preg_match('/\btanggal\b/i', $arr)) || (preg_match('/\bbagaimana\b/i', $arr))	|| (preg_match('/\bterutama\b/i', $arr)) || (preg_match('/\btingkat\b/i', $arr)) || (preg_match('/\bawal\b/i', $arr)) || (preg_match('/\bsedikit\b/i', $arr)) || (preg_match('/\bnanti\b/i', $arr))	|| (preg_match('/\bpasti\b/i', $arr)) || (preg_match('/\bmuncul\b/i', $arr)) || (preg_match('/\bdekat\b/i', $arr)) || (preg_match('/\blanjut\b/i', $arr)) || (preg_match('/\bketiga\b/i', $arr))	|| (preg_match('/\bbiasa\b/i', $arr)) || (preg_match('/\bdulu\b/i', $arr)) || (preg_match('/\bkesempatan\b/i', $arr)) || (preg_match('/\bribu\b/i', $arr)) || (preg_match('/\bakhir\b/i', $arr))	|| (preg_match('/\bmembantu\b/i', $arr)) || (preg_match('/\bterkait\b/i', $arr)) || (preg_match('/\bsebab\b/i', $arr)) || (preg_match('/\bmenyebabkan\b/i', $arr)) || (preg_match('/\bkhusus\b/i', $arr))	|| (preg_match('/\bbentuk\b/i', $arr)) || (preg_match('/\bditemukan\b/i', $arr)) || (preg_match('/\bdiduga\b/i', $arr)) || (preg_match('/\bmana\b/i', $arr)) || (preg_match('/\bya\b/i', $arr))	|| (preg_match('/\bkegiatan\b/i', $arr)) || (preg_match('/\bsebagian\b/i', $arr)) || (preg_match('/\btampil\b/i', $arr)) || (preg_match('/\bhampir\b/i', $arr))|| (preg_match('/\bbertemu\b/i', $arr))
	|| (preg_match('/\busai\b/i', $arr)) || (preg_match('/\bberarti\b/i', $arr)) || (preg_match('/\bkeluar\b/i', $arr)) || (preg_match('/\bpula\b/i', $arr)) || (preg_match('/\bdigunakan\b/i', $arr))	|| (preg_match('/\bjustru\b/i', $arr)) || (preg_match('/\bpadahal\b/i', $arr)) || (preg_match('/\bmenyebutkan\b/i', $arr)) || (preg_match('/\bgedung\b/i', $arr)) || (preg_match('/\bapalagi\b/i', $arr))	|| (preg_match('/\bprogram\b/i', $arr)) || (preg_match('/\bmilik\b/i', $arr)) || (preg_match('/\bteman\b/i', $arr)) || (preg_match('/\bmenjalani\b/i', $arr)) || (preg_match('/\bkeputusan\b/i', $arr))	|| (preg_match('/\bsumber\b/i', $arr)) || (preg_match('/\bupaya\b/i', $arr)) || (preg_match('/\bmengetahui\b/i', $arr)) || (preg_match('/\bmempunyai\b/i', $arr)) || (preg_match('/\bberjalan\b/i', $arr))	|| (preg_match('/\bmenjelaskan\b/i', $arr)) || (preg_match('/\bmengambil\b/i', $arr)) || (preg_match('/\bbenar\b/i', $arr)) || (preg_match('/\blewat\b/i', $arr)) || (preg_match('/\bbelakang\b/i', $arr))	|| (preg_match('/\bikut\b/i', $arr)) || (preg_match('/\bbarang\b/i', $arr)) || (preg_match('/\bmeningkatkan\b/i', $arr)) || (preg_match('/\bkejadian\b/i', $arr))	|| (preg_match('/\bkehidupan\b/i', $arr)) || (preg_match('/\bketerangan\b/i', $arr)) || (preg_match('/\bpenggunaan\b/i', $arr)) || (preg_match('/\bmasing-masing\b/i', $arr))	|| (preg_match('/\bmenghadapi\b/i', $arr))
	)
		{
		}
	else {
		$arrtemp = hapusakhiran(hapusawalan2(hapusawalan1(hapuspp(hapuspartikel($arr)))));
		
		if (cari($arrtemp)!=1) {
			$arr = $arr;
			}
		else {
			$arr = $arrtemp;
			}
			
		$id = $id++;
		
		if ($arr != "") {						//jika $aisi ga kosong maka.. hitung rescount.
															//rescount adalah 
					$rescount = mysql_query("SELECT Count FROM indeks WHERE Term = '$arr' AND DocId = $i");			
					$num_rows = mysql_num_rows($rescount);	//jumlah baris dri rescount
						
					if ($num_rows > 0) {					//jika num_rows lebih dari 0 maka lakukan perhitungan di bawah. num_rows lebih dari 0 menunjukan kemunculan term dlm 1 dokumen lebih dr 1 kali
						$rowcount = mysql_fetch_array($rescount);							
						$count = $rowcount['Count'];		//$rowcount['Count'] artinya apa
						$count++;
  										
						mysql_query("UPDATE indeks SET Count = $count WHERE Term = '$arr' AND DocId = $i");
					} 		
					else {				
						mysql_query("INSERT INTO indeks (Term, DocId, Count) VALUES ('$arr', $i, 1)");
					}
				}
		}
			
	}
		echo "<br /><b>Hasil stemming</b> = "; 
		$result = mysql_query("SELECT * FROM indeks where DocId= $i");
		while($row = mysql_fetch_array($result)) {
		echo $row['Term'] ." ";
		}
		echo "<hr />";	
	
	return $t;
} 


function countbobot() {	
	
	$resn = mysql_query("SELECT DISTINCT DocId FROM indeks");
	$n = mysql_num_rows($resn);
	
	$resBobot = mysql_query("SELECT * FROM indeks ORDER BY Id");
	$num_rows = mysql_num_rows($resBobot);

	while($rowbobot = mysql_fetch_array($resBobot)) {
		//$w = tf * log (n/N)
		$w = 0;
		$term = $rowbobot['Term'];		
		$tf = $rowbobot['Count'];
		$id = $rowbobot['Id'];
		
		$resNTerm = mysql_query("SELECT Count(*) as N FROM indeks WHERE Term = '$term'");
		$rowNTerm = mysql_fetch_array($resNTerm);
		$NTerm = $rowNTerm['N'];
		
		$w = $tf * log(($n/$NTerm), 10);
		
		$resUpdateBobot = mysql_query("UPDATE indeks SET Bobot = $w WHERE Id = $id");		
  	} 
} 

function countpanjangunit() {
	$resBobot = mysql_query("SELECT * FROM indeks ORDER BY Id");
	$num_rows = mysql_num_rows($resBobot);
	
	while($rowbobot = mysql_fetch_array($resBobot)) {
	$id = $rowbobot['Id'];
	$iddoc = $rowbobot['DocId'];
	$bobot = $rowbobot['Bobot'];
	$panjVektor = mysql_query("SELECT Panjang FROM vektor WHERE DocId = $iddoc");
	
		while($panjVekto2 = mysql_fetch_array($panjVektor)){
			$p = $bobot/$panjVekto2['Panjang'];
			mysql_query("UPDATE indeks SET panjangUnit = $p WHERE Id = $id");
		}
	}
}

function countPQ() {
	$resPQ = mysql_query("SELECT DISTINCT DocId FROM indeks"); 
	
	$num_rows = mysql_num_rows($resPQ);
	
	while($rowPQ = mysql_fetch_array($resPQ))  {
		$docId = $rowPQ['DocId'];  //inisialisasi id dokumen yg dihitung
	
		$resVektor = mysql_query("SELECT panjangUnit FROM indeks WHERE DocId = $docId");
		
		$panjangPQ = 0;		
		while($rowPQ = mysql_fetch_array($resVektor)) {
			$panjangPQ = $panjangPQ + ($rowPQ['panjangUnit']*$rowPQ['panjangUnit']);
		}	
		mysql_query("UPDATE vektor SET PQ = '$panjangPQ' WHERE DocId = $docId ");
	}
}


function cosine () {
	mysql_query("TRUNCATE TABLE jarakdoc");
	$jumDoc = mysql_query("SELECT DISTINCT DocId FROM indeks");
	
	while($currDoc = mysql_fetch_array($jumDoc))  {
		$currDocId = $currDoc['DocId'];
		
		$jumDoc2 = mysql_query("SELECT DISTINCT DocId FROM indeks"); 
		while($nextDoc = mysql_fetch_array($jumDoc2))  {
		$nextDocId = $nextDoc['DocId'];
			
			$resultA = mysql_query("SELECT * FROM jarakdoc where IdDoc1=$currDocId and IdDoc2=$nextDocId");
			$resultB = mysql_query("SELECT * FROM jarakdoc where IdDoc1=$nextDocId and IdDoc2=$currDocId");
			
			$resA = mysql_num_rows($resultA);
			$resB = mysql_num_rows($resultB);
			
			if($resA==1 || $resB==1 || $nextDocId==$currDocId) {
			// do nothing
			}
			else {
				$sameTerm1 = 
				mysql_query("SELECT A.Id, A.panjangUnit, A.term
				FROM indeks AS A 
				INNER JOIN indeks AS B 
				WHERE A.term = B.term AND A.DocId = $currDocId AND B.DocId = $nextDocId");
				
				$dp = 0;
				while($sTerm1 = mysql_fetch_array($sameTerm1))  {
				echo $currDocId . " " . $nextDocId . " "; 
				$pt1 = $sTerm1['panjangUnit'];
				$st1 = $sTerm1['term'];	
					
					$sameTerm2 =
					mysql_query("SELECT B.Id, B.panjangUnit, B.term
					FROM indeks AS A 
					INNER JOIN indeks AS B 
					WHERE A.term = B.term AND A.DocId = $currDocId AND B.DocId = $nextDocId");
					
					while($sTerm2 = mysql_fetch_array($sameTerm2))  {
						$pt2 = $sTerm2['panjangUnit'];
						$st2 = $sTerm2['term'];
						
						if($st1==$st2) {
							$dp = $dp + ($pt1 * $pt2);
						}
						else {
							$dp = $dp + 0;
						}
					}
				}	
				
				$pqCurr = mysql_query("SELECT PQ FROM vektor where DocId=$currDocId");
				$pqNext = mysql_query("SELECT PQ FROM vektor where DocId=$nextDocId");
					
				$pqCurr2 = mysql_fetch_array($pqCurr);
				$pqNext2 = mysql_fetch_array($pqNext);
					
				//echo "<br> ini dia : " . $pqCurr2['PQ'] . " " . $pqNext2['PQ'] . "<br>";
				$cs = $pqCurr2['PQ']  * $pqNext2['PQ'];
				$penyebut = sqrt($cs);
									
				if ($dp > 0) {
					//mulai di sini hitung cosine ny ! hasil cosine ny (x) ,yg masuk tabel itu 1-x
					$jar = abs(1 - ($dp/$penyebut));
				}
				else {
					$jar = 1;
				}
					
				echo " dp : " . $dp . "<br>";
				echo " cs : " . $cs . "<br>";
				echo " penyebut : " . $penyebut . "<br>";
				echo " jarak : " . $jar . "<br>";
				mysql_query("INSERT INTO jarakdoc (IdDoc1, IdDoc2, jarak) VALUES ('$currDocId', '$nextDocId', '$jar')");
			}
		}
	}
}

function countpanjangvektor() {	//untuk apa?
	
	mysql_query("TRUNCATE TABLE vektor");
	$resDocId = mysql_query("SELECT DISTINCT DocId FROM indeks"); //untuk apa? jumlah dokumen koleksi
	
	$num_rows = mysql_num_rows($resDocId); //select semua row , sama dengan mysql_fetch_array($resDocId) , array nama num_rows. trnyata ga dipakai
	
	while($rowDocId = mysql_fetch_array($resDocId))  {
		$docId = $rowDocId['DocId'];  //inisialisasi id dokumen yg dihitung
	
		$resVektor = mysql_query("SELECT Bobot FROM indeks WHERE DocId = $docId");
		
		$panjangVektor = 0;		
		while($rowVektor = mysql_fetch_array($resVektor)) {
			$panjangVektor = $panjangVektor + $rowVektor['Bobot']  *  $rowVektor['Bobot']; //$rowVektor['Bobot'] = array yg berisi nilai bobot
		}
				
		$panjangVektor = sqrt($panjangVektor);
			
		$resInsertVektor = mysql_query("INSERT INTO vektor (DocId, Panjang) VALUES ($docId, $panjangVektor)");	
	} 
}

function kmedoid() {
	mysql_query("TRUNCATE TABLE kmedoid");
	$k = 3;
	$i=1;
	$mulai=0;
	$sCurr=0;
	$syarat = 1;
	$terpilih = mysql_query("SELECT Id FROM BUKU WHERE Judul!='query' ORDER BY rand() LIMIT $k");
	
	while ($syarat!=0) {
		if ($mulai==0){ //jika pertama kali menentukan kepala suku
			while($pilih = mysql_fetch_array($terpilih)) {
				$medoid[$i] = $pilih['Id']; 
				echo "ini dia : " . $medoid[$i] . " I = " .  $i . "<br>"; 
				$i++;
				
			}
			for($i=1;$i<($k+1);$i++) { 
				mysql_query("INSERT INTO kmedoid (kelompok, cost) VALUES ('$i','10000')");
			}
			
		}
		else { //jika bukan pertama kali menentukan kepala suku
			for($i=1;$i<($k+1);$i++) {
				$medo = mysql_query ("SELECT docId FROM kmedoid WHERE kelompok=$i");
				$medo2 = mysql_fetch_array ($medo);
				$medo3 = $medo2['docId'];
				$medoid[$i] = $medo3; //memasukan nilai kepala suku baru ke array $medoid
			}
		}
		
		cariKelompok ($medoid, $k, $i);
		
		hitungCost ($k, $i);
		
		cariKetua ($k, $i);
		
		$hitS = 0;
		$hc = mysql_query("SELECT cost FROM kmedoid");
		while ($hc2 = mysql_fetch_array ($hc)) {
			$hc3 = $hc2['cost'];
			$hitS = $hitS + $hc3;
		}
		$hS = $sCurr - $hitS;
		echo "<br> haloo .. ini hS nya : " . $hS . "<br> ini hitS nya :" . $hitS . "<br>";
		if ($hS<0) {
			
			echo " <br> do or do not , there is no try <br>";
			$sCurr=$hitS;
			$hS = 0;
			
		}
		else {
			//stop while
			
			$syarat = 0;
			$sCurr=$hitS;
			$hS = 0;
			echo " join me to the darkside" . $hitS . "<br>";
		}
		$mulai++; //supaya ga nentuin kepala suku secara random nanti
		
	}
	echo "bangke <br>";
	$a = mysql_query ("SELECT docId FROM kmedoid");
	while ($a2 = mysql_fetch_array($a)) {
	echo "bangke dua <br>";
	$a3 = $a2['docId'];
		$f = mysql_query("SELECT jarak FROM jarakdoc WHERE (idDoc1=4 AND idDoc2=$a3) OR  (idDoc1=$a3 AND idDoc2=4)");
		while ($f2 = mysql_fetch_array ($f)) {
			echo "bangke tiga <br>";
			$f3 = $f2['jarak'];
			echo "JARAK FINAAALLLL !!! ". $f3 . "<br>";
			mysql_query("UPDATE kmedoid SET jarakQuery = $f3 WHERE docId = $a3");
		}
	}
}

function cariKetua($k, $i) {
	//cari kepala suku baru
		for($i=1;$i<($k+1);$i++) { //$i ini kelompok ny ya..
		$ks=mysql_query("SELECT Id FROM buku WHERE kelompok=$i AND Judul!='query'");
			while ($s = mysql_fetch_array($ks)) { //$doc ini Id salah satu kelompok $i ya..
				$doc = $s['Id'];
				//echo "<br>lewat sini ga? <br>";
				if ($doc!=4) {
				$jar=0;
				$ks2=mysql_query("SELECT Id FROM buku WHERE kelompok=$i AND Id!=$doc AND Judul!='query'"); //hitungin cost dari $doc ke doc yg temen sekelompok ny
				while ($s2=mysql_fetch_array($ks2)){
					$doc2 = $s2['Id'];
					if ($doc2!=4){
					$jrk = mysql_query("SELECT jarak FROM jarakdoc WHERE (idDoc1=$doc AND idDoc2=$doc2) OR (idDoc1=$doc2 AND idDoc2=$doc)");
					$jrk2 = mysql_fetch_array($jrk);
					$jarakT = $jrk2['jarak'];
					
					$jar= $jar + $jarakT;
					echo  "<br>" . $doc . " " . $doc2 . " " . $jarakT . "<br>";
					}
				}
				echo "<br> jarak coba2 : " . $jar . "<br>"; //cost yg baru
				$costT = mysql_query("SELECT cost FROM kmedoid WHERE kelompok=$i"); 
				$costT2 = mysql_fetch_array($costT);
				$costT3 = $costT2['cost']; //cost yg lama
				if($costT3 > $jar) { //klo cost yg baru lbh kecil, update cost n kepala suku (docId) di tabel
					mysql_query("UPDATE kmedoid SET cost=$jar, docId=$doc WHERE kelompok=$i");
					echo "Master Yoda was here" . " " . $costT3 . "<br>";
				}
				}
			}
		
		}
}

function hitungCost($k, $i) {
	for($i=1;$i<($k+1);$i++) { //setelah tau siapa belong to kelompok berapa, saatny hitung cost 
			$km = mysql_query("SELECT A.idMedoid, A.kelompok, A.docId AS upline, B.id AS downline, 
				(
				SELECT jarak
				FROM jarakdoc
				WHERE ( (idDoc1 = $medoid[$i]  && idDoc2 = B.id) || ( idDoc1 = B.id && idDoc2 = $medoid[$i] ))
				) AS jarak
				FROM kmedoid AS A
				JOIN buku AS B ON A.kelompok = B.kelompok
				WHERE A.docId = $medoid[$i] AND B.id != $medoid[$i] AND Judul!='query'");
			$cost = 0;
			while ($m = mysql_fetch_array($km)) {
			$cost = $cost + $m['jarak'];
			//echo "<br> jarakny : " . $m['jarak'] . "<br>"; 
			}
			
			$cek = mysql_query ("SELECT kelompok, docId, cost FROM kmedoid"); //cek apa cost lama lebih besar dari cost yg baru
			while ($cek2 = mysql_fetch_array($cek)) {						  //jika lebih besar, ganti cost yg lama dengan yg baru
			
				if ($cek2['cost'] > $cost) {
				//echo "<br> cost ny adalah :" . $cost . "<br>";
				mysql_query("UPDATE kmedoid SET cost = $cost WHERE docId = $medoid[$i] AND kelompok = $i");
				echo "hoi <br>";
				}
				else {
					//echo "ga berubah broo ";
				}
			}
		}
}

function cariKelompok ($medoid, $k, $i) {
	$resDoc = mysql_query("SELECT Id FROM buku WHERE Judul!='query'");	
		while($rowDoc = mysql_fetch_array($resDoc))  { //nentuin siapa ke kelompok mana
			$docTemp = $rowDoc['Id'];
			$sama = 0;
			
			for ($i=1;$i<($k+1);$i++) { //cek, apakah id dokumen termasuk dari salah satu medoid2 terpilih. work fine
				if($docTemp == $medoid[$i]) { //jika iya, nilai variabel sama = 1
					$sama=1;
					$kel=$i;
					//echo "samaaa " . $docTemp . " " . $medoid[$i] . "<br>"; //jika iya, id dokumen tsb akan di"mark" sama
				}
				else {
					//echo "ga sama " . $docTemp . " " . $medoid[$i] . "<br>";
				}
			}
			if ($sama!=1) { //di sini mulai itung2in jarak dokumen $docTemp ke medoid terdekat. work fine 
				$jarak = 100000;
				for($i=1;$i<($k+1);$i++) {
					$pqCurr = mysql_query("SELECT jarak FROM jarakdoc WHERE (IdDoc1=$docTemp AND IdDoc2=$medoid[$i]) OR (IdDoc1=$medoid[$i] AND IdDoc2=$docTemp)");					
					$pqCurr2 = mysql_fetch_array($pqCurr);
					$banding = $pqCurr2['jarak'];
					if ($banding!=4) {
					
					if($jarak>$banding) {
						$jarak=$banding;
						$klp = $i;
						//echo "aurora was here" . $medoid[$i] . " " . $docTemp . "<br>" ;
					}
					}
				}
			
			//echo "jarak terdekat : " . $jarak . "<br>";
			mysql_query("UPDATE buku SET kelompok = $klp WHERE Id = $docTemp AND Judul!='query'");
			}
			
			else { //buat docId yg sama. artinya dia ketua kelompok. nilai $kel ud diset.
				mysql_query("UPDATE buku SET kelompok = $kel WHERE Id = $docTemp AND Judul!='query'");
				mysql_query("UPDATE kmedoid SET docId=$docTemp WHERE kelompok=$kel");
				//mysql_query("INSERT INTO kmedoidtemp (klp, docId, cost) VALUES ('$kel', '$docTemp', '10000')");
			}
		}
}

?>