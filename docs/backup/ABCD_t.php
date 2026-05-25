<?php

	
	$kotisivunOsoite = "www.tervo.fi/tervo-seura"; 
	$kotisivunJuuri = $kotisivunOsoite."/";
		
	$haettuURL = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	while (eregi("//", $haettuURL)) {
		$haettuURL = str_replace("//", "/", $haettuURL);
	}


		$osoiteSuhteessaJuureen = str_replace($kotisivunJuuri, "", $haettuURL);
	$kauttaviivat = substr_count($osoiteSuhteessaJuureen, "/");
	$suhteellinenOsoite = str_repeat("../", $kauttaviivat);
	$kavijatURL = $suhteellinenOsoite."kavijat/";

	include($kavijatURL."laskuri.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="Tervo-seura, tervo seura, paikat nimet tarinat salattu tieto">
<title>Tervo-seura ry</title>

<link href="defaultti.css" rel="stylesheet" type="text/css" />
<link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>

<!--[if lt IE 7]>
<script type="text/javascript" src="javascript/sfhover.js"></script>
<![endif]-->

<!-- HAKUPALVELUN ESIIN TUONTI -->
<script language="JavaScript">

//here you place the ids of every element you want.
var ids=new Array('a1','a2', 'a3','a4', 'a5', 'a6', 'a7', 'a8', 'a9','a10','a11','a12','a13','a14','a15','a16','a17','a18','a19','a20','a21','a22','a23','a24','a25','a26','a27','a28','a29','a30','a31', 'b1','b2','b3','b4','b5','b6','b7','b7a','b8','b9','b10','b11','b12','b13','b14','b15','b16','b17','b18','b19','b20','b21','b22','b23','b24','b25','b26','b27','b28','b29','b30','b31','b32',
'b33','b34','b35','b36','b37','b38','b39','b40','b41','b42','b43','b44','b45','b46','b47','b48','b49','b50','b51','b52','b53','b54','b56','b57','b58','b59','b60','b61','b62','b63','b64','b65','b66','b67','b68','b69','b70','b71','b72','b73','b74','b75','b75b','b76','b77','b78','b79','b80','b81','b82','b83','b84','b85','b86','b87','b89','b90','b91','b92','b93','b94','b95','b96','b97','b98','b99','b100','b101', 'c1','c2','c3','c4','c5','c6','c7','c8','c9','c10','c11','c12','c13','c14','c15','c16','c17','c18','c19','c19a','c20','d1','d2','d3','d4','d5','d6','d7','d8','d9','d10','d11','d12','d13','d14','d15','d16','d17','d18','d19','d20','d21','d22','d23','d24','d25','d26','d27','d28','d29','d30','d31','d32','d33','d34','d35','d36','d37','d38','d39','d40','d41','d41b','d42','d43','d44','d45','d46','d47','d48','d49','d50','d51','d52','d53','d54','d55','d56','d57','d58','d59','d60','d61','d62','d63','d64','d65','d67','d68','d69','d70','d71','d72','d73','d74','d75','d76','d78','d79','d80','d81','d82','d83','d84','d85','d86','d87','d88','d89','d90','d91','d92','d93' );

function switchid(id){	
	hideallids();
	showdiv(id);
}

function hideallids(){
	//loop through the array and hide each element by id
	for (var i=0;i<ids.length;i++){
		hidediv(ids[i]);
//alert(ids[i]);
	}		  
}

function hidediv(id) {
	//safe function to hide an element with a specified id
	if (document.getElementById) { // DOM3 = IE5, NS6
		document.getElementById(id).style.display = 'none';
	}
	else {
		if (document.layers) { // Netscape 4
			document.id.display = 'none';
		}
		else { // IE 4
			document.all.id.style.display = 'none';
		}
	}
}

function showdiv(id) {
	//safe function to show an element with a specified id
		  
	if (document.getElementById) { // DOM3 = IE5, NS6
		document.getElementById(id).style.display = 'block';
	}
	else {
		if (document.layers) { // Netscape 4
			document.id.display = 'block';
		}
		else { // IE 4
			document.all.id.style.display = 'block';
		}
	}
}
//alert(ids.length)


</script>


</head>
<body>

<div id="container">
<div id="content">
  <br>
     <table class="tab" width="100%"  border="0">
        <tr>
          <td width="31%" height="26"><h2><img src="kuva/salattutieto.jpg" width="339" height="64" /></h2></td>
          <td>  <!-- HELP -->
		  <div align="right"><b>Haapamäki, &copy; Maanmittauslaitos, lupa nro PSAVO/018/2007</b> </div>	  </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
    </table>
   <!-- VIDEO OBJEKTI -->
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 

codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="700" height="400">
   <param name="movie" value="ADi.swf" />
   <param name="WMODE" value="opaque" />
   <param name="swliveconnect" value="true">
   <param name="quality" value="high" />
   <embed src="ADi.swf" quality="high" width="700" height="400" WMODE="opaque" 

pluginspage="http://www.macromedia.com/go/getflashplayer" 
 type="application/x-shockwave-flash"  swliveconnect="true"></embed> 
      </object>
      <!-- VIDEO OBJEKTI -->
 <div id='a1' style="display:none;">
<p><b>Paikka: </b>Jerula (kartassa Selk&auml;m&auml; ) <br />
<b>Rinnakkaisnimi: </b>P&auml;&auml;selk&auml;m&auml; <br />
<b>Kuvaus: </b> Entinen Eljakselan torppa <br />
<b>Perim&auml;tietoa: </b> Talo on nimetty entisen is&auml;nn&auml;n Jeremias Aatun pojan mukaan. Jeremiaan em&auml;nn&auml;n 

tappoi salama hein&auml;pellolle, kun h&auml;n oli ottamassa heini&auml; seip&auml;&auml;lt&auml; lehmille. Jeremiaan 

mini&auml;&auml;, Lyyli&auml;, ahdisteli salama vuosikymmeni&auml; my&ouml;hemmin samassa talossa. Lyyli oli ollut navetassa 

vasikoita hoitamassa. Pallosalama oli tullut samaan karsinaan. Lyylill&auml; oli puutalikko k&auml;dess&auml;&auml;n. 

Sill&auml; h&auml;n oli tyrkkinyt salamapalloa pois l&auml;helt&auml;&auml;n. Pallo oli viimein mennyt s&auml;hk&ouml;verkon 

kautta ulos. </p>
</div>

 <div id='a2' style="display:none;">
<p><b>Paikka: </b> Rajaharju (kartassa Selk&auml;m&auml; ) <br />
<b>Rinnakkaisnimi: </b> Iivari, Hermanni, Koivisto <br />
<b>Kuvaus: </b> Entinen Aron torppa. Tilaa on kutsuttu my&ouml;s asukkaiden nimell&auml;: Iivari (Hyt&ouml;nen), Hermanni 

(Puranen), Koivisto <br />
<b>Perim&auml;tietoa: </b> Vanha em&auml;nt&auml; Edla Koivisto hukkui omaan rantaan Suostussa kes&auml;ll&auml; 1956. Edlan 

pojan, Kaukon, ampui naapuri Aaro Kekkonen Rajalan pihassa kes&auml;kuussa 1971. Tapon taustalla oli pitk&auml;llinen riita 

tieasioista. </p>
</div>
 <div id='a3' style="display:none;">
<p><b>Paikka: </b> Rajala <br />
<b>Rinnakkaisnimi: </b> Aaro <br />
<b>Kuvaus: </b> Entinen Eljakselan torppa Eljakselan ja Aron maiden rajalla, autiotunut 1970-luvulla.<br />
<b>Perim&auml;tietoa: </b> Koiviston (Rajaharju) l&auml;hinaapuri. Talossa on asunut Kekkosia, viimeksi Aaro Kekkosen perhe. 

Talo autioitui 1970-luvun alussa, kun Aaro Kekkonen ampui naapurinsa Koivistoon ja joutui vankilaan. Tuolloin my&ouml;s 

Kekkosen perhe muutti pois. </p>
</div>
 <div id='a4' style="display:none;">
<p><b>Paikka: </b> Porola <br />
<b>Kuvaus: </b> 1920-luvun alussa h&auml;vinnyt m&ouml;kki, Eljakselan ty&ouml;miesten asunto. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Porolan raunioiden etel&auml;puolella on pelto, jota kutsutaan 

Porolanpelloksi . Porolanpellosta lounaaseen, Niiniveden rannalla, on Porolanranta ja apajapaikka. <br />
<b>Perim&auml;tietoa: </b> M&ouml;kki paloi aikoinaan kahdesti, nyt siit&auml; on j&auml;ljell&auml; vain raunioita. </p>
</div>
 <div id='a5' style="display:none;">
<p><b>Paikka: </b> Mets&auml;pirtti <br />
<b>Rinnakkaisnimi: </b>Hallaselk&auml;m&auml; <br />
<b>Kuvaus: </b> Vuonna 1923 perustettu tila <br />
<b>Perim&auml;tietoa: </b> ”Se ku ol iha met&auml;ss&auml; ja siihen tul pikkunen tupa niin ne [kertojan vanhemmat] sen 

ristiv&auml;t meht&auml;pirtiks .” (Veikko Kekkonen, s. 1912, 1981.) </p>
</div>
 <div id='a6' style="display:none;">
<p><b>Paikka: </b> Rajakallio <br />
<b>Kuvaus </b>: Vesannon ja Tervon rajalla Niiniveden rannassa oleva kallio. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Rajakangas, noin kilometrin Rajakalliosta it&auml;&auml;n. </p>
</div> <div id='a7' style="display:none;">
<p><b>Paikka: </b> Lehmikallio <br />
<b>Rinnakkaisnimi: </b> Aronkallio <br />
<b>Kuvaus: </b> Kallio Suostun etel&auml;p&auml;&auml;ss&auml; <br />
<b>Perim&auml;tietoa: </b> ”Siin&auml; on semmosta matalata rantoo likell&auml;, ja Arol lehm&auml;t Huapam&auml;elt&auml; 

kulukivat aena kes&auml;ll&auml; siell&auml; j&auml;rver rannalla niityll&auml;”, kertoi Armas Kekkonen (s. 1905) vuonna 

1981. </p>
</div> <div id='a8' style="display:none;">
<p><b>Paikka: </b> J&auml;rvenp&auml;&auml; <br />
<b>Kuvaus: </b> Aron torppa Suostunj&auml;rven etel&auml;rannalla <br />
<b>Perim&auml;tietoa: </b> J&auml;rvenp&auml;&auml;ss&auml; on ollut iso torppa ja seitsem&auml;n lehm&auml;&auml;. Torpan 

viimeiset asukkaat olivat Matilaisia </p>
</div> <div id='a9' style="display:none;">
<p><b>Paikka: </b>Kolisenvanpuro <br />
<b>Rinnakkaisnimi: </b> Puro <br />
<b>Kuvaus: </b>Tannerinniitylt&auml; Niiniveteen laskevan puron vanha, k&auml;yt&ouml;st&auml; poistunut nimi. 

Kolisevanpuroksi nimitet&auml;&auml;n nykyisin puron suulla sijaitsevaa kes&auml;m&ouml;kki&auml;. </p>
</div> <div id='a10' style="display:none;">
<p><b>Paikka: </b> Korventupa <br />
<b>Kuvaus: </b> Autio tila, entinen Eljakselan torppa. <br />
<b>Perim&auml;tietoa: </b> Aiemmin Korventuvalla on asunut itseoppinut k&auml;til&ouml;, Korven Riikka, 

Aini-tytt&auml;rens&auml; kanssa. 1940-luvulla Korventuvalle asettuivat Karjalasta siirtolaisina tulleet sisarukset Nasti , 

Vilho ja Kosti M&ouml;s&ouml; perheineen. Korventuvan maat kuuluvat nykyisin Tienp&auml;&auml;n tilalle, ja pelloista 

k&auml;ytet&auml;&auml;n nimityst&auml; Korvenniitty. </p>
</div> <div id='a11' style="display:none;">
<p><b>Paikka: </b> Koivuniemi <br />
<b>Rinnakkaisnimi: </b> Jumpponen <br />
<b>Kuvaus: </b> Autio tila, joka on perustettu 1940-luvulla. Virallista Koivuniemi-nime&auml; ei ole puheessa k&auml;ytetty. 

</p>
</div> <div id='a12' style="display:none;">
<p><b>Paikka: </b>Antinaho <br />
<b>Kuvaus: </b> Soinen mets&auml;alue Aron tilan mailla. <br />
<b>Perim&auml;tietoa: </b> Entist&auml; kaskimaata. L&auml;hist&ouml;ll&auml; on asunut Antti Kiviaho, joka piti Antinaholla 

naurishalmetta. Antti hukkui Kuorilahteen 1940-luvun alussa. H&auml;n l&auml;hti Rantalasta py&ouml;r&auml;ll&auml; Tervoon 

hakemaan Tehopakkauksia ja putosi paluumatkalla railoon. </p>
</div> <div id='a13' style="display:none;">
<p><b>Paikka: </b>Rasinkivi <br />
<b>Kuvaus: </b> Kivi Suostunj&auml;rvess&auml; Sepp&auml;l&auml;n rannassa. <br />
<b>Perim&auml;tietoa: </b>Rasi tarkoittaa kaadettua kaskea. </p>
<p><b>Paikka: </b>Rajakivi <br />
<b>Kuvaus: </b> Kivi Suostunj&auml;rvess&auml; Sepp&auml;l&auml;n ja Suppuniemen talojen rajalla. </p>
</div> <div id='a14' style="display:none;">
<p><b>Paikka: </b> Sepp&auml;l&auml; <br />
<b>Kuvaus: </b> Vanha tila Suostunj&auml;rven it&auml;rannalla. <br />
<b>Perim&auml;tietoa: </b> Talossa on ollut kievari, jonka pit&auml;j&auml;n&auml; on ollut em&auml;nt&auml; Simonen. Talon 

viinakannu on ollut koiran muotoinen. Kun vieras tuli em&auml;nt&auml; sanoi ”Anna koirasta viinaa vieraalle”. </p>
</div> <div id='a15' style="display:none;">
<p><b>Paikka: </b> Koskisen m&ouml;kki <br />
<b>Kuvaus: </b> Perttulan ja Marttilan rajalla ollut m&ouml;kki. <br />
<b>Perim&auml;tietoa: </b> M&ouml;kiss&auml; on asunut Mari Koskinen poikansa kanssa. </p>
</div> <div id='a16' style="display:none;">
<p><b>Paikka: </b> Suppuniemi <br />
<b>Kuvaus: </b> Vanha tila. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Etel&auml;mp&auml;n&auml; on Jokiniemi-niminen autiotila, jonka aiempi nimi 

on ollut Pieni Suppuniemi. Nyky&auml;&auml;n Pieneksi Suppuniemeksi kutsutaan Suostunpuron rajoittamaa 

mets&auml;niemekett&auml; Jokiniemen kaakkoispuolella. Suostunlahden pohjukassa on Suppuniemenlahti. </p>
<p><b>Perim&auml;tietoa: </b> Nimen alkuper&auml;&auml; ei tarkasti tiedet&auml;. Seutu on soista, joten nimi on ehk&auml; 

tullut suppupaarmoista tai lakan supuista. Suppu tarkoittaa punertavaa suomuuraimen raakiletta. Suostunj&auml;rvest&auml; 

Haapalahteen laskevassa Suostunjoessa on ollut aikaisemmin mutka talon kohdalla, joten talon kohdalle on muodostunut 

ik&auml;&auml;n kuin niemi. Mutka on my&ouml;hemmin oikaistu. </p>
<p><b>Paikka: </b> Alapellot<br />
<b>Kuvaus: </b> Suppuniemen tilan etel&auml;puolella oleva peltoaukea. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Alapeltojen etel&auml;osassa on Romu ja L&auml;hdepelto -nimiset pellot. 

<br />
<b><br />
Paikka: </b> Romu: <br />
<b>Kuvaus: </b> Pelto Suostunpuron etel&auml;puolella Alapeltojen etel&auml;nurkassa. <br />
<b>Perim&auml;tietoa: </b> Pellon nimi viitannee maaston suo- ja r&auml;meper&auml;isyyteen. <br />
<br />
<b>Paikka: </b> Myllypelto <br />
<b>Kuvaus: </b> Pelto, jolla on ollut tuulimylly. </p>
<p><b>Paikka: </b> L&auml;hdepelto <br />
<b>Kuvaus: </b> Alapeltojen etel&auml;nurkassa oleva peltoalue, jonka l&auml;hell&auml; on l&auml;hde. </p>
<p><b>Paikka: </b> Riihipelto <br />
<b>Kuvaus: </b> Pelto Suppuniemen etel&auml;puolella. Pellon laidassa on riihi. </p>
</div> <div id='a17' style="display:none;">
<p><b>Paikka: </b> Katiska <br />
<b>Kuvaus: </b>Suostunlahden pohjukka. <br />
<b>Perim&auml;tietoa: </b> Pohjukassa on ollut aikoinaan hevoshaka. </p>
</div> <div id='a18' style="display:none;">
<p><b>Paikka: </b> M&auml;ntyl&auml; <br />
<b>Kuvaus: </b> H&auml;vinnyt m&ouml;kki mets&auml;n laidassa. M&ouml;kiss&auml; on asunut ennen Suppuniemen 

ty&ouml;miehi&auml;. <br />
<b>Perim&auml;tietoa: </b> Viimeiset asukkaat ovat olleet 1950-luvulla Aino T&ouml;rr&ouml;nen ja h&auml;nen poikansa Urpo. 

Aino ei huolinut autokyyti&auml; vaan k&auml;veli aina yhdeks&auml;n kilometrin matkan kirkolle. Keng&auml;t h&auml;n kantoi 

sulan maan aikaan k&auml;dess&auml;&auml;n ja pani ne jalkaan vasta kun tuli kyl&auml;n keskustaan. M&auml;ntyl&auml;n 

rakennukset on purettu 1970-luvulla. </p>
</div> <div id='a19' style="display:none;">
<p><b>Paikka: </b> Etel&auml;m&auml;ki <br />
<b>Kuvaus: </b> M&auml;ki Suostunj&auml;rven kaakkoisp&auml;&auml;n it&auml;rannalla. Nimi on tarkoittanut my&ouml;s 

m&auml;en p&auml;&auml;ll&auml; ollutta Suppuniemen torppaa, nykyisin sit&auml; k&auml;ytet&auml;&auml;n koko tilan ja 

Tiiliniemess&auml; olevan m&ouml;kin nimen&auml;. <br />
<b>Perim&auml;tietoa: </b> M&auml;en rinteell&auml; on ennen ollut peltoja ja Suppuniemen torppa . Torpan viimeiset asukkaat 

ovat muuttaneet Iisvedelle ja m&ouml;kki on h&auml;vinnyt 1900-luvun alussa. </p>
<p><b>Paikka: </b> Kalliolohko <br />
<b>Kuvaus: </b> Etel&auml;m&auml;en etel&auml;rinteess&auml; sijaitseva entinen lampaiden laidun. </p>
</div> <div id='a20' style="display:none;">
<p><b>Paikka: </b> Tiilikaarre <br />
<b>Kuvaus: </b> Pieni lahti Suostunj&auml;rven kaakkoiskulmassa <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Lahden l&auml;nsipuolelle on Tiiliniemi. <br />
<b>Perim&auml;tietoa: </b> ” Oesko siin&auml; poltettu tiili&auml; kun se ranta on semmosta alavata muata ja siin&auml; on 

heleposti savvee suatavana ” (Armas Kekkonen s.1905, 1981). ”Siin&auml; [Tiilikaarteessa] oli Suppuniemen tiilruukki , mut se 

on kaava ollu jo h&auml;vinneen&auml;” ( Ania J&auml;&auml;skel&auml;inen s.1881, 1970). Tiiliruukissa on tehty tiilet 

Suppuniemen navettaan, joka on rakennettu 1901-1906. </p>
</div> <div id='a21' style="display:none;">
<p><b>Paikka: </b> Marttila <br />
<b>Kuvaus: </b> Lohkotila, joka on alkujaan ollut Puustellin talon torppa. <br />
<b>Perim&auml;tietoa: </b> Torpan arvioidaan syntyneen jo 1800-luvun puoliv&auml;liss&auml;. </p>
<p><b>Paikka: </b> Tienvarsiaho <br />
<b>Kuvaus: </b> Kapea pelto Marttilan asuinrakennuksen etel&auml;puolella kyl&auml;tien varrella. </p>
<p><b>Paikka: </b> Ladonalus <br />
<b>Kuvaus: </b> Pelto ja viljelyssuo Marttilan asuinrakennuksesta koilliseen. <br />
<b>Perim&auml;tietoa: </b> Pellon ja asuinrakennuksen v&auml;lill&auml; on lato, joten pelto on ik&auml;&auml;n kuin ladon 

alapuolella. </p>
<p><b>Paikka: </b> Isokuusi <br />
<b>Kuvaus: </b> Hyvin vanha ja suurikokoinen kuusi Marttilan talosta hieman it&auml;&auml;n. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Kuusi kasvaa Kuusenaluspellon reunalla. </p>
</div> <div id='a22' style="display:none;">
<p><b>Paikka: </b>Salmola <br />
<b>Kuvaus: </b> Lohkotila, joka on alkujaan ollut Salakan talon torppa. <br />
<b>Perim&auml;tietoa: </b> Torppa on perustettu 1800-luvun lopulla. Salmola sijaitsee Suostunvuoren it&auml;puolella. </p>
</div> <div id='a23' style="display:none;">
<p><b>Paikka: </b>Jaakkola <br />
<b>Kuvaus: </b> Lohkotila, joka on alkujaan ollut Puustellin talon torppa<br />
<b>Perim&auml;tietoa: </b> Torppa on perustettu 1910-luvulla. Torpan on perustanut August Tuovainen, jolla on ollut 

Jaakko-niminen poika. </p>
</div> <div id='a24' style="display:none;">
<p><b>Paikka: </b>Vunnikkala <br />
<b>Kuvaus: </b> M&ouml;kki Hyv&ouml;l&auml;n talon maalla. <br />
<b>Perim&auml;tietoa: </b> M&ouml;kki on ollut itsen&auml;istym&auml;t&ouml;n ja h&auml;vinnyt 1920-luvun loppupuolella. ”Se 

m&ouml;kki ol hyvin pien ja siin&auml; asu semmone omituinen mies. Se kaehto immeisij&auml; ja ol semmone suomatoj ja laeska 

vunnikka ” (Laina Lyytinen s.1898, 1968). </p>
</div> <div id='a25' style="display:none;">
<p><b>Paikka: </b> Suostu <br />
<b>Kuvaus: </b> J&auml;rvi <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> J&auml;rven pohjoisrannalla on Suostunvuori ja Suostunm&auml;ki . M&auml;en 

pohjoispuolella on laaja mets&auml;suo, Suostunsuo . J&auml;rven l&auml;hist&ouml;ll&auml; olevan kulmakunnan nimi on 

Suostunkyl&auml; , kyl&auml; ei tosin ole selv&auml;rajainen. Suostunj&auml;rvest&auml; Iisveteen laskevan ojan nimi on 

Suostunjoki . </p>
</div> <div id='a26' style="display:none;">
<p><b>Paikka: </b> Kalakukko <br />
<b>Rinnakkaisnimi: </b> Kukkokallio <br />
<b>Kuvaus: </b> Kallio Suostunm&auml;en etel&auml;liepeill&auml; <br />
<b>Perim&auml;tietoa: </b>”Se on sen muotonen kuk kalakukko, semmonen sillee ja py&ouml;ree ” (Sisko Huuskonen s.1915, 1968). 

</p>
</div> <div id='a27' style="display:none;">
<p><b>Paikka: </b> Perttula <br />
<b>Kuvaus: </b> Lohkotila, joka on alkujaan ollut Puustellin torppa. <br />
<b>Perim&auml;tietoa: </b> Perttula on perustettu 1800-luvun loppupuolella. </p>
</div> <div id='a28' style="display:none;">
<p><b>Paikka: </b> Mutahaudat <br />
<b>Kuvaus: </b> Useita kaivettuja suohautoja. <br />
<b>Perim&auml;tietoa: </b> Haudoista on otettu mutaa viljelysmaille. </p>
</div> <div id='a29' style="display:none;">
<p><b>Paikka: </b> Viitala <br />
<b>Kuvaus: </b>Hyv&ouml;l&auml;n talosta erotettu tila. <br />
<b>Perim&auml;tietoa: </b> Tila on erotettu jo 1800-luvun alkupuolella. Talon l&auml;hettyvill&auml; on useita suoalueita. 

</p>
<p><b>Paikka: </b> Yl&auml;pelto <br />
<b>Kuvaus: </b> Pelto Viitalan asuinrakennuksesta luoteeseen. <br />
<b>Perim&auml;tietoa: </b> Pelto sijaitsee kumpareella. </p>
<p>  <b>Paikka: </b>Ala-aitta <br />
  <b>Kuvaus: </b> Viitalan kaksikerroksisen aittarakennuksen alaosa <br />
  <b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Ala-aitan yl&auml;puolella yl&auml;aitta </p>
<p><b>Paikka: </b> Isokuoppa <br />
<b>Kuvaus: </b> Viitalan talon suuri perunakuoppa. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Isokuoppa sijaitsee Pienenkuopan pohjoispuolella Kuoppamets&auml;ss&auml;. 

Isonkuopan pohjoispuolella on Per&auml;kuoppa. </p>
<p><b>Paikka: </b> Navettapelto <br />
<b>Kuvaus: </b> Pelto Viitalan talon l&auml;nsipuolella. <br />
<b>Perim&auml;tietoa: </b> Pellon laidassa sijaitsee talon navetta. </p>
<p><b>Paikka: </b> Talontauspelto <br />
<b>Kuvaus: </b> Pelto Viitalan asuinrakennuksen it&auml;puolella<br />
<br />
<b>Paikka: </b> Niittytie <br />
<b>Kuvaus: </b> Viitalasta Per&auml;niitylle johtava polku </p>
</div> <div id='a30' style="display:none;">
<p><b>Paikka: </b> Vesala <br />
<b>Kuvaus: </b> M&ouml;kki, jonka tontti on lohkaistu Puustellin tilasta. <br />
<b>Perim&auml;tietoa: </b> M&ouml;kki on rakennettu 1920-luvulla. M&ouml;kin ymp&auml;rill&auml; kasvaa runsaasti lehtipuita. 

M&ouml;kin nimi johtunee asukkaiden sukunimest&auml; Vesander / Vesala. </p>
</div> <div id='a31' style="display:none;">
<p><b>Paikka: </b>Kipola <br />
<b>Kuvaus: </b> Tila, joka on ollut olemassa 1800-luvun lopulta saakka. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Asuinrakennuksen l&auml;nsipuolella on Riihikallio. Kallion kupeella on 

aikaisemmin ollut riihi. <br />
<b>Perim&auml;tietoa: </b>Kipolassa on asunut Eelis Hyt&ouml;nen ja Hentusia. </p>
<p><b>Paikka: </b> Pajatie <br />
<b>Kuvaus: </b> Polku, joka kulkee Viitalan pajan ohi Kipolaan . </p>
<p><b>Paikka: </b> Niemeke <br />
<b>Kuvaus </b>: Haapaj&auml;rveen pist&auml;v&auml; niemi Kipolan l&auml;nsipuolella. </p>
<p><b>Paikka: </b> Etel&auml;puolenpellot <br />
<b>Kuvaus: </b>Kipolan asuinrakennuksen etel&auml;puolella olevat pellot </p></div>

<div id='b1' style="display:none;">
<p><b>Paikka: </b>Tuliniemi <br />
<b>Kuvaus: </b> Peltoon pist&auml;v&auml; mets&auml;niemeke. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Tuliniemen p&auml;&auml;ss&auml; on Einokinkallio. </p>
</div> <div id='b2' style="display:none;">
<p><b>Paikka: </b> Pennasensel&auml;nne <br />
<b>Kuvaus: </b> Mets&auml;inen harjanne Myllypuron muodostamassa mutkassa Haapam&auml;en koillispuolella. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Pennasensel&auml;nteen etel&auml;reunalla on niitty, Pennasenniitty, jonka 

rinnakkaisnimi on Isoniitty. </p>
</div> <div id='b3' style="display:none;">
<p><b>Paikka: </b> Raitala <br />
<b>Kuvaus: </b> Autio tila, joka on ollut ennen Aron torppa. Tilan pihassa on kasvanut raitapajuja. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Tervoon viev&auml;ll&auml; maantiell&auml; Raitalan kohdalla jyrkk&auml; 

mutka, jota kutsutaan Raitalanmutkaksi. <br />
<b>Perim&auml;tietoa: </b> Raitalan is&auml;nt&auml; August-Kerma-Kekkonen ajoi Haapam&auml;elt&auml; kermaa Tervon 

meijeriin. H&auml;n my&ouml;s toimitteli asioita kyl&auml;l&auml;isille. Kun h&auml;nt&auml; pyysi tuomaan karkkeja, h&auml;n 

toi kovia, vihreit&auml; menthol-karamellej&auml;. Karamellit saivat nimen ”kekkoset”. </p>
<p><b>Paikka: </b> Hermannilanpelto <br />
<b>Kuvaus: </b> Pelto Raitalan etel&auml;puolella. ”Siel o ollu ennen torppa ja siin&auml; asu Purase Hermanni” (Irma 

Leskinen, s.1926, 1981) </p>
</div> <div id='b4' style="display:none;">
<p><b>Paikka: </b> Pellonp&auml;&auml;nniitty <br />
<b>Kuvaus: </b> Niitty, joka on Pulkkilansaaressa sijaitsevan Pellonp&auml;&auml;n tilan omistuksessa<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Himohaara-niminen (Esan p&ouml;mpeli) m&ouml;kki on ollut 

Pellonp&auml;&auml;nniityn reunassa. M&ouml;kiss&auml; on ollut useita asukkaita mm. Emma Kervinen ja Esa Pulkkinen. 

M&ouml;kin l&auml;helle, polun varteen on kuollut Mikko-Mooses eli Mikko J&auml;ntti. </p>
</div> <div id='b5' style="display:none;">
<p><b>Paikka: </b> Tiilitehdas <br />
<b>Rinnakkaisnimi: </b> Mikon m&ouml;kki, Mulukkula <br />
<b>Kuvaus: </b> Entinen tiilitehdas, jonka rakennuksia on viel&auml; j&auml;ljell&auml;. <br />
<b>Perim&auml;tietoa: </b> Tehdas on toiminut Suppuniemen Ruokosuon reunassa 1940-luvulla. Ruokosuon turvekerroksen alla on 

eritt&auml;in puhdasta savea. Tiilitehtaan on omistanut Paavo Sivonen ja tiili&auml; on valmistanut Mikko Hentunen. Mikko on 

asunut perheineen lautam&ouml;kiss&auml; tehtaan l&auml;hell&auml;. Tehtaan tuottamista tiilist&auml; tehdyt tulisijat (uuni 

ja savupiippu) ovat k&auml;yt&ouml;ss&auml; Leskisill&auml; Orihongalla. Tiilet ovat hyvi&auml; viel&auml; yli puolen 

vuosisadan k&auml;yt&ouml;n j&auml;lkeen. </p>
<p><b>Paikka: </b> Mutatie <br />
<b>Kuvaus: </b> Suppuniemen tilalta Ruokosuolle viev&auml; tie, jonka varrella on mutahautoja. Ruokosuo on merkitty kartassa 

virheellisesti Alasuon paikalle. <br />
<b>Perim&auml;tietoa: </b> Tiet&auml; pitkin on kuljetettu my&ouml;s tiilitehtaan tiilet. Mutatien mutkasta on l&auml;htenyt 

koululaisten koulupolku ja latu-ura Verkkokyl&auml;n tielle Bruuniin ja jatkunut siit&auml; Puustellin kautta 

Hyv&ouml;l&auml;n koululle. </p>
<p><b>Paikka: </b> Kannas <br />
<b>Kuvaus: </b> Pelto, joka sijaitsee kumpareella kahden alavan paikan v&auml;lill&auml; Ruokosuon it&auml;puolella.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Kannaksen l&auml;nsipuolella on R&auml;&auml;t&auml;linniitty. </p>
</div> <div id='b6' style="display:none;">
<p><b>Paikka: </b> Etel&auml;viita <br />
<b>Kuvaus: </b> Suppuniemen tilan etel&auml;puolella sijaitseva kuusimets&auml;. </p>
<p><b>Paikka: </b> Alatie<br />
<b>Kuvaus: </b> Etel&auml;viidan it&auml;laidassa kulkeva tie, joka vie Suppuniemelt&auml; Orihongalle. </p>
</div> <div id='b7' style="display:none;">
<p><b>Paikka: </b> Tervahautasuo <br />
<b>Rinnakkaisnimi: </b> Oinaanpuron l&auml;nsipuolella oleva pelto. Karttaan Tervahautasuo on merkitty virheellisesti Oinaanpuron it&auml;puolelle Ruokosuon paikalle. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Pellon l&auml;nsipuolella Etel&auml;viidassa on ennen poltettu tervaa.<br />
<b>Perim&auml;tietoa: </b> Suon reunassa on viel&auml;kin n&auml;ht&auml;viss&auml; vanhoja tervahautoja. </p>
</div> <div id='b7a' style="display:none;">
<p><b>Paikka: </b> Murronkorpi <br />
<b>Kuvaus: </b> R&auml;meikk&ouml;inen, soistunut mets&auml; Suppuniemen tilan ja Haapajoen v&auml;lill&auml;, Perttulasta katsottuna kaakkoon p&auml;in. <br />
<b>Perim&auml;tietoa: </b> Suo on kivist&auml; ja ep&auml;tasaista maata. ”Se on semmosta rommeikkomuata, huonoo ja kivist&auml;” (Antti Haapalainen s.1897, 1968). </p>
</div> <div id='b8' style="display:none;">
<p><b>Paikka: </b> Jokiniemi<br />
<b>Rinnakkaisnimi: </b> Pieni Suppuniemi, Kievari, Galilea, Antero.<br />
<b>Kuvaus: </b> Suppuniemest&auml; 1920-luvulla lohkaistu tila. <br />
<b>Perim&auml;tietoa: </b> Kansanomaisena nimen&auml; on k&auml;ytetty Kievaria ja pilkkanimen&auml; Galileaa. ”Sen takia 

kaet se [pilkkanimi] oli lie syntynn&auml; kun se entine asuinkartano ol niin pien.” ”Se on siin&auml; tien 

riste&ouml;ksess&auml; ku oes kievar.” (Ania J&auml;&auml;skel&auml;inen s.1891, 1969). Tilaa on kutsuttu my&ouml;s 

Antero-is&auml;nn&auml;n (Antero Huuskonen) etunimell&auml;. Nimitys Pieni Suppuniemi on ollut k&auml;yt&ouml;ss&auml; 

aiemmin, ja se tarkoittaa my&ouml;s Jokiniemen tilan kaakkoispuolella olevaa Suostunpuron rajoittamaa 

mets&auml;niemekett&auml;. </p>
</div> <div id='b9' style="display:none;">
<p><b>Paikka: </b> Taavetinsalmi <br />
<b>Rinnakkaisnimi: </b> Taavetti, Taavetinsalmenniitty <br />
<b>Kuvaus: </b> Pitk&auml; ja kapea niittyalue kahden kangasmaan v&auml;liss&auml;. K&auml;ytet&auml;&auml;n my&ouml;s 

lyhemp&auml;&auml; nimityst&auml; Taavetti.<br />
<b>Perim&auml;tietoa: </b> ”Sit&auml; oj joku taavetti-niminen viljelly” (Onni Korhonen s.1920, 1970). Salmi tarkoittaa 

paitsi vesist&ouml;iss&auml; my&ouml;s kahden kangasmaan v&auml;liss&auml; olevaa suoper&auml;ist&auml; tai muuten alavaa 

maata. </p>
</div> <div id='b10' style="display:none;">
<p><b>Paikka: </b> Suostunpuro <br />
<b>Rinnakkaisnimi: </b> Suostunjoki <br />
<b>Kuvaus: </b> Suostunj&auml;rven etel&auml;p&auml;&auml;st&auml; alkava ja Iisveteen laskeva, l&auml;hes h&auml;vinnyt 

puro.<br />
<b>Perim&auml;tietoa: </b> Ennen Turulan Myllyojan kaivamista oli puro oli Suostun luontainen lasku-uoma, ja se n&auml;kyy 

viel&auml; paikoitellen selv&auml;sti maastossa. Puro on yhtynyt Orihongassa Oinaanpuron kanssa Myllyjoeksi. </p>
</div> <div id='b11' style="display:none;">
<p><b>Paikka: </b> Oinaanpuro <br />
<b>Kuvaus: </b> Suostun- (Kymin-) suolta alkava puro, joka Orihongan Tuliniemess&auml; yhtyy Suostunpuroon. <br />
<b>Perim&auml;tietoa: </b> Oinaan- ja Suostunpuro yhtyv&auml;t Myllyjoeksi ja laskevat Jokilahteen Iisvedess&auml;. Purojen 

yhtym&auml;kohdassa Eenokinkallion luona on ollut mylly. Purosta on pumpattu ennen vett&auml; Suppuniemen karjalle 

Oinas-merkkisell&auml; pumpulla. Puron nimi on annettu pumpun nimen mukaan (Onni Korhonen s.1920, 1981). </p>
</div> <div id='b12' style="display:none;">
<p><b>Paikka: </b> Myllyjoki <br />
<b>Kuvaus: </b> Tervahautasuolta Iisveteen Jokilahteen laskeva puro, jonka varrella on aiemmin ollut vesimylly. Myllyjoki 

muodostuu Oinaanpurosta ja Suostunpurosta, jotka yhdistyv&auml;t Orihongassa. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Myllyjoen varrella on kaksi Myllyniitty&auml;, jotka ovat jo metsittyneet. 

</p>
</div> <div id='b13' style="display:none;">
<p><b>Paikka: </b> Haapapuro <br />
<b>Rinnakkaisnimi: </b> Haapajoki <br />
<b>Kuvaus: </b> Haapaj&auml;rvest&auml; Haapalahteen laskeva luonnonoja. Ojasta k&auml;ytet&auml;&auml;n my&ouml;s nime&auml; 

Haapajoki. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Puron varrella on Haapapuronniitty, jota kutsutaan my&ouml;s 

Haapajoenniityksi. Niityn it&auml;laidalla on ollut Haapajoenportti, joka on jo purettu. </p>
<p>&nbsp; </p>
</div> <div id='b14' style="display:none;">
<p><b>Paikka: </b> V&auml;lipuro <br />
<b>Kuvaus: </b> Suostunkyl&auml;lt&auml; Murronkorven, Ruokosuon ja Vipuniityn halki Iisveteen Hakokaarteessa laskeva puro, 

joka sijaitsee Myllyjoen ja Haapajoen v&auml;lill&auml;. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Murronkorvessa on my&ouml;s metsittynyt luonnonniitty, jota kutsutaan 

V&auml;lipuronniityksi. Niitylt&auml; on koottu ennen suohein&auml;&auml;. </p>
</div> <div id='b15' style="display:none;">
<p><b>Paikka: </b> Pulkkilan Vipuniitty <br />
<b>Kuvaus: </b> Niitty, jonka omistavat pulkkilansaarelaiset. Pohjoisempana on toinen Vipuniitty. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> V&auml;lipuron ja Haapajoen v&auml;liss&auml; on matalahkoVipum&auml;ki. 

<br />
<b>Perim&auml;tietoa: </b> Niittyjen nimet ovat tulleet Vipum&auml;ell&auml; pidetyist&auml; lintujen vipuloukuista. </p>
<p><b>Paikka: </b> Vipum&auml;ki <br />
<b>Kuvaus: </b> V&auml;lipuron ja Haapajoen v&auml;liss&auml; oleva matalahko m&auml;ki. Vipum&auml;eksi on kutsuttu 

my&ouml;s Suppuniemen talon ty&ouml;miehen asuntoa. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> L&auml;hist&ouml;ll&auml; sijaistevat my&ouml;s Pulkkilan Vipuniitty ja 

Vipuniitty. Orihongasta Vipum&auml;en yli Vehkarantaan menev&auml;n tien nimi on Vipum&auml;entie. <br />
<b>Perim&auml;tietoa: </b> M&auml;en nimi on tullut lintujen vipuloukuista, joita on pidetty alueella. Ty&ouml;miehen tila 

oli itsen&auml;istym&auml;t&ouml;n ja se h&auml;visi 1800- ja 1900-lukujen vaihteessa. Asunnosta on j&auml;ljell&auml; 

raunioita. </p>
</div> <div id='b16' style="display:none;">
<p><b>Paikka: </b> Voittomaa <br />
<b>Kuvaus: </b> Pelto Orihongan it&auml;puolella.<br />
<b>Perim&auml;tietoa: </b> Paikalla oli ennen hyvin kivikkoinen mets&auml;. Kun mets&auml; lopulta saatiin raivattua 

pelloksi, tuntui kuin olisi saatu voitto kivist&auml; (Irma Leskinen s.1926. 1981) </p>
</div> <div id='b17' style="display:none;">
<p><b>Paikka: </b> Paarmala <br />
<b>Kuvaus: </b> Suppuniemen talon ty&ouml;miehen asunto <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Paarmalanhaka oli lehm&auml;laidun talon l&auml;hist&ouml;ll&auml;. <br />
<b>Perim&auml;tietoa: </b> Tila on ollut itsen&auml;istym&auml;t&ouml;n ja h&auml;vinnyt 1800-luvun lopulla. 

L&auml;hist&ouml;ll&auml; on ollut Suppuniemen lehm&auml;laidun. ”Lehmiss&auml; ol puarmoja” (Ania 

J&auml;&auml;skel&auml;inen s.1891, 1969). </p>
</div> <div id='b18' style="display:none;">
<p><b>Paikka: </b> Paala <br />
<b>Kuvaus: </b> Kangasmaa Vipuniityn ja Taavetinsalmen v&auml;liss&auml;. Nimen alkuper&auml;&auml; ei en&auml;&auml; 

muisteta. </p>
</div> <div id='b19' style="display:none;">
<p><b>Paikka: </b> Vehkaniitty <br />
<b>Kuvaus: </b> Niittyalue Haapaj&auml;rvest&auml; Iisveteen laskevan Haapapuron varrella.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Niityst&auml; jonkin matkaa it&auml;&auml;n on Vehkaranta-niminen 

lohkotila. </p>
<p><b>Paikka: </b> Suopalsta <br />
<b>Kuvaus: </b> Mets&auml;palsta Vehkaniityn vieress&auml; </p>
</div> <div id='b20' style="display:none;">
<p><b>Paikka: </b> Niittytie<br />
<b>Kuvaus: </b> Vehkarannasta Vehkaniitylle viev&auml; tie. </p>
</div> <div id='b21' style="display:none;">
<p><b>Paikka: </b> Raivio<br />
<b>Rinnakkaisnimi: </b> Raivionniitty <br />
<b>Kuvaus: </b> Uudispelto Haapajoen alajuoksun varrella. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Haapajoesta k&auml;ytet&auml;&auml;n my&ouml;s nime&auml; Raivionpuro. </p>
<p>&nbsp; </p>
</div> <div id='b22' style="display:none;">
<p><b>Paikka: </b> Tyynel&auml; <br />
<b>Rinnakkaisnimi: </b> Karhu, Karhunnasti <br />
<b>Kuvaus: </b> Tila, joka on ollut ennen Suppuniemen torppa. Puheessa k&auml;ytet&auml;&auml;n asukkaiden sukunime&auml; 

Karhu. <br />
<b>Perim&auml;tietoa: </b> Talo on rakennettu 1800-luvun loppupuolella. Talo sijaitsee mets&auml;n keskell&auml;. ”Siin&auml; 

on tyynt&auml;, kun se on niin met&auml;n peitossa” (Aija J&auml;&auml;skel&auml;inen s.1891, 1970). </p>
</div> <div id='b23' style="display:none;">
<p><b>Paikka: </b> Orihonka <br />
<b>Rinnakkaisnimi: </b> Leskinen <br />
<b>Kuvaus: </b> Suppuniemen talosta lohkaistu tila. Tilaa kutsutaan my&ouml;s asukkaiden sukunimell&auml;. Orihongaksi 

kutsutaan my&ouml;s suurta viljelyssuoaluetta. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Orihongan ohi Tervoon viev&auml;lt&auml; maantielt&auml; Vehkarantaan 

kulkee Orihongantie. <br />
<b>Perim&auml;tietoa: </b> Tila on erotettu Suppuniemen talon maista 1940-luvulla. Tilan l&auml;hell&auml; on ennen ollut 

mylly ja sen l&auml;hell&auml; iso pet&auml;j&auml;, johon hevoset on jauhatuksen ajaksi sidottu kiinni. Kerran 

er&auml;&auml;n miehen ori oli p&auml;&auml;ssyt irti ja karannut (Irma Leskinen s.1926, 1981). </p>
</div> <div id='b24' style="display:none;">
<p><b>Paikka: </b> Pieni Saunakaarre <br />
<b>Kuvaus: </b> Iisvedess&auml; Haapalahden it&auml;rannalla Surmakallion pohjoispuolella oleva pieni lahti. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Etel&auml;m&auml;n&auml; on Iso Saunakaarre. <br />
<b>Perim&auml;tietoa: </b> Ison Saunakaarteen rannalla on ollut kalasauna. </p>
<p><b>Paikka: </b> Iso Saunakaarre<br />
<b>Rinnakkaisnimi: </b> Saunakaarre <br />
<b>Kuvaus: </b> Iisvedess&auml; oleva lahti. Isosta Saunakaarteesta k&auml;ytet&auml;&auml;n my&ouml;s pelkk&auml;&auml; 

Saunakaarre-nimityst&auml;. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Pieni Saunakaarre sijaitsee Ison Saunakaarteen pohjoispuolella. Ison 

Saunakaarteen etel&auml;puolella on Saunaniemi ja pohjoispuolella Saunakallio, jonka aiempi nimi on ollut Surmakallio. <br />
<b>Perim&auml;tietoa: </b> Ison Saunakaarteen rannalla on ollut kalasauna, rannassa on viel&auml; katiskojen 

j&auml;&auml;nteit&auml;. </p>
</div> <div id='b25' style="display:none;">
<p><b>Paikka: </b> Vehkaranta <br />
<b>Kuvaus: </b> Tila Iisveden Taivallahden rannassa. Vehkaranta tarkoittaa my&ouml;s kyl&auml;kuntaa Verkkokyl&auml;n ja 

Hyv&ouml;l&auml;n v&auml;lill&auml;.<br />
Muita paikkaan liittyvi&auml; nimi&auml;: Haapajoen varrella on Vehkaniitty. <br />
<b>Perim&auml;tietoa: </b> Tila on ollut Pulkkilansaaressa sijaitsevan Pellonp&auml;&auml;n talon torppa. Tila on perustettu 

jo 1800-luvun puolella. Rannassa kasvaa vehkoja. </p>
<p><b>Paikka: </b> Rantakappale <br />
  <b>Kuvaus:</b> Pelto rannan ja asuinrakennuksen v&auml;lill&auml;. </p>
<p><b>Paikka: </b> Kohmelopolku <br />
  <b>Kuvaus: </b>Suppuniemen tilalta Vehkarantaan viev&auml; tie. </p>
<p><b>Paikka: </b> Leinosenm&ouml;kki <br />
  <b>Kuvaus: </b>H&auml;vinnyt m&ouml;kki Verkkokyl&auml;ntien varrella.<br />
<b>Perim&auml;tietoa:</b> Kohmelopolun varrella sijainnut m&ouml;kki on ollut Suppuniemen ty&ouml;miesten asunto ja 

siin&auml; on asunut Leinosia. </p>
</div> <div id='b26' style="display:none;">
<p><b>Paikka: </b> Juhola <br />
  <b>Kuvaus: </b>Tila, joka on ollut ennen Suppunimen talon torppa. Alunperin Pulkkilan torppa. <br />
  <b>Perim&auml;tietoa:</b> Nimi on annettu silloisen is&auml;nn&auml;n, h&auml;nen is&auml;ns&auml; ja 

is&auml;nis&auml;ns&auml; Juho Korhosen mukaan. </p>
</div> <div id='b27' style="display:none;">
<p><b>Paikka: </b> Heikkil&auml;<br />
<b>Rinnakkaisnimi: </b> Heikkil&auml;naho<br />
<b>Kuvaus: </b> Tila Haapaojan it&auml;puolella.<br />
<b>Perim&auml;tietoa: </b> Tila on entinen Suppuniemen torppa. Tila on alunperin ollut Sepp&auml;l&auml;n torppa. Torpan 

asumus on h&auml;vinnyt jo 1800- ja 1900-lukujen vaihteessa. Nykyisin paikkaa kutsutaan Heikkil&auml;nahoksi. </p>
<p><b>Paikka: </b> Pienisuo <br />
<b>Kuvaus: </b> Heikkil&auml;n tilan pieni viljelyssuo. Pienisuoksi kutsutaan my&ouml;s tilaa, joka on erotettu 

Heikkil&auml;n tilan alueesta.<br />
<b>Perim&auml;tietoa: </b> Tila on erotettu Heikkil&auml;st&auml; 1940-luvun loppupuolella perint&ouml;osuutena. Tila 

sijaitsee viljelyssuon luoteisp&auml;&auml;ss&auml;. </p>
<p><b>Paikka: </b> Pohjoismets&auml; <br />
<b>Kuvaus: </b> Mets&auml;palsta asumisrakennuksen luoteispuolella.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Pohjoismets&auml; sijaitsee Riihentausmets&auml;n pohjoispuolella. </p>
<p><b>Paikka: </b> Uudispellot<br />
<b>Kuvaus: </b> Kaksi peltoa kyl&auml;tien ja asuinrakennusten v&auml;lill&auml;. <br />
<b>Perim&auml;tietoa: </b> Pellot on raivattu viljelysille my&ouml;hemmin kuin muut tilan viljelysmaat. </p>
<p><b>Paikka: </b> Rantapuoli<br />
<b>Kuvaus: </b> Mets&auml;alue tilan ja Rasvangin rannan v&auml;lill&auml;.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Tilalta rantaan johtava polku on nimelt&auml;&auml;n Rantatie. Polun yli on 

Rantaver&auml;j&auml;. </p>
<p><b>Paikka: </b> Riihentausmets&auml; <br />
<b>Kuvaus: </b> Mets&auml;palsta asuinrakennuksesta lounaaseen. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Riihen vierustalla on suuri Riihikoivu. <br />
<b>Perim&auml;tietoa: </b> Palsta on p&auml;&auml;rakennukselta katsottaessa riihen takana. Mets&auml;alue on ollut lampaiden 

laidunta. </p>
<p><b>Paikka: </b> V&auml;liniitty <br />
<b>Kuvaus: </b> Pelto Heikkil&auml;n ja Lev&auml;senrannan maiden rajalla.<br />
<b>Perim&auml;tietoa: </b> V&auml;liniitty on ollut Pienensuon kaakkoisjatke. Niityn laitamalla on ollut 

V&auml;liniitynportti, joka on purettu. ”Se ol rannan ja pihan keskiv&auml;liss&auml;” (Marja Kukkonen s.1918, 1970). </p>
</div> <div id='b28' style="display:none;">
<p><b>Paikka: </b> Pienisuo <br />
<b>Rinnakkaisnimi: </b> Vellamon m&ouml;kki<br />
<b>Kuvaus: </b> Heikkil&auml;n tilasta erotettu tila, jota on kutsuttu my&ouml;s omistajan, Vellamo Kukkosen mukaan. <br />
<b>Perim&auml;tietoa: </b> Tila on nykyisin autioitunut. Tila on sijainnut soisella maalla. </p>
</div> <div id='b29' style="display:none;">
<p><b>Paikka: </b> Lev&auml;senranta<br />
<b>Rinnakkaisnimi: </b> Vesterinen, Pentti <br />
<b>Kuvaus: </b> Tila Lev&auml;senlahden rannalla. Puheessa tilaa on kutsuttu asukkaiden sukunimell&auml; Vesterinen tai 

is&auml;nn&auml;n etunimell&auml; Pentti. <br />
<b>Perim&auml;tietoa: </b> Lev&auml;senranta on entinen Sepp&auml;l&auml;n torppa. </p>
<p><b>Paikka: </b> Pieniniitty <br />
<b>Kuvaus: </b> Pienikokoinen pelto Lev&auml;senrannan luoteispuolella. </p>
</div> <div id='b30' style="display:none;">
<p><b>Paikka: </b> Verkkokyl&auml;<br />
<b>Kuvaus: </b> Kyl&auml;kunta Joutsensalmen kyl&auml;ss&auml; Verkkolahden rannalla. K&auml;sitt&auml;&auml; Pulkkilansalmen 

ja Haapalahden v&auml;liss&auml; olevan suuren niemen. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Verkkokyl&auml;n it&auml;osassa sijaitsevia Uudisharju- ja 

Kes&auml;harju-nimisi&auml; tiloja kutsuttiin aiemmin nimell&auml; V&auml;kk&auml;r&auml;kyl&auml;. <br />
<b>Perim&auml;tietoa: </b> Kyl&auml;n vanhin tila on Verkkolahti, josta muut tilat on erotettu. Aiemmin kyl&auml;&auml; 

kutsuttiin nimell&auml; Verkkolahti, mutta 1940-luvulla seudulle saapuneet siirtolaiset ottivat k&auml;ytt&ouml;&ouml;n 

Verkkokyl&auml;-nimen. </p>
</div> <div id='b31' style="display:none;">
<p><b>Paikka: </b> Surmakallio<br />
<b>Rinnakkaisnimi: </b> Saunakallio<br />
<b>Kuvaus: </b>Haapalahteen pist&auml;v&auml; niemi, jossa on korkea kallio<br />
<b>Perim&auml;tietoa: </b>”Siin&auml; kallion kohalla on mies puonna kev&auml;tj&auml;ehi ja hukkunna” (Aune Kukkonen s.1918, 

1970). ”Joku ol kuulemma puonna siit&auml; kalliolta j&auml;rvee ja hukkunna. Siit&auml; se on se kallio suanna nimes&auml;” 

(Ilmari Puranen s.1917, 1981). Nykyisin kalliosta k&auml;ytet&auml;&auml;n my&ouml;s nime&auml; Saunakallio, koska paikalla 

on kes&auml;m&ouml;kki, jonka omistajat pitiv&auml;t Surmakallio-nime&auml; sopimattomana. </p>
</div> <div id='b32' style="display:none;">
<p><b>Paikka: </b> Jokiniemi <br />
<b>Kuvaus: </b> Verkkolahden talon maista erotettu tila.<br />
<b>Perim&auml;tietoa: </b> Tila on erotettu Verkkolahdesta perint&ouml;osuutena vuonna 1922. Suostunj&auml;rvest&auml; 

laskeva joki tekee mutkan tilan luoteispuolella, joten paikalle muodostuu ik&auml;&auml;n kuin niemi. Ylemp&auml;n&auml; 

saman joen varrella on toinen Jokiniemi-niminen tila. <br />
<br />
<b>Paikka: </b> V&auml;liniitty <br />
<b>Kuvaus: </b> Pieni niittyalue, joka on metsittynyt. Sijaitsee Jokiniemen ja Haapalahden v&auml;lill&auml;. </p>
</div> <div id='b33' style="display:none;">
<p><b>Paikka: </b> Iso Hakokaarre <br />
<b>Rinnakkaisnimi: </b> Hakokaarre<br />
<b>Kuvaus: </b> Lahti Iisvedess&auml; Haapalahden l&auml;nsirannalla. Hakokaarteeksi kutsutaan my&ouml;s Lahdenpohjan tilan 

mets&auml;palstaa, joka sijaitsee Ison ja Pienen Hakokaarteen l&auml;nsipuolella lahden rannalla. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Ison Hakokaarteen etel&auml;puolella on pienempi lahti, jonka nimi on Pieni 

Hakokaarre. Ison Hakokaarteen pohjoispuolella on Hakoniemi. <br />
<b>Perim&auml;tietoa:” </b>Se [Hakokaarre-nimitys] johtuu semmosista hakopuista” (Emilia J&auml;&auml;skel&auml;inen s.1889, 

1969). </p>
<p><b>Paikka: </b> Hakoniemi <br />
<b>Kuvaus: </b> Iisveteen pist&auml;v&auml; niemi Haapalahden l&auml;nsirannalla Ison Hakokaarteen pohjoispuolella </p>
<p><b>Paikka: </b> Pieni Hakokaarre<br />
<b>Kuvaus: </b> Pieni lahti Iisvedess&auml; Haapalahden l&auml;nsirannalla<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Pohjoisempana Haapalahdessa on Iso Hakokaarre. </p>
</div> <div id='b34' style="display:none;">
<p><b>Paikka: </b> Koivuranta<br />
<b>Rinnakkaisnimi: </b> Hakokarin m&ouml;kki<br />
<b>Kuvaus: </b> Haapalahden l&auml;nsirannalla oleva autio tila, jota pidet&auml;&auml;n nyky&auml;&auml;n 

kes&auml;m&ouml;kkin&auml;. Puheessa tilaa kutsutaan omistajien sukunimell&auml; Hakokari. <br />
<b>Perim&auml;tietoa: </b> Tila on lohkaistu Jokiniemen tilan maista noin vuonna 1930. Rannalla huvilan 

l&auml;hist&ouml;ll&auml; kasvaa koivuja. </p>
<p>&nbsp; </p>
</div> <div id='b35' style="display:none;">
<p><b>Paikka: </b> Tikkala <br />
<b>Kuvaus: </b> Tila Haapalahden it&auml;rannalla, entinen Verkkolahden talon torppa.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Tiala-niminen tila on erotettu Tikkalan tilasta. <br />
<b>Perim&auml;tietoa: </b> Talo oli alunperin Verkkolahden ty&ouml;miesten asunto, johon on liitetty lis&auml;maata. Tila on 

erotettu Verkkolahden tilasta 1900-luvun alussa perint&ouml;n&auml;. </p>
</div> <div id='b36' style="display:none;">
<p><b>Paikka: </b> Tiala<br />
<b>Kuvaus: </b> Haapalahden rannalla oleva tila.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Tiala on erotettu Tikkalan tilasta. Tiala sijaitsee Tialankorven 

liepeill&auml;.<br />
<b>Perim&auml;tietoa: </b> Tiala on erotettu Tikkalasta vuonna 1950 perint&ouml;osuutena. Nimi on annettu osaksi puolisen 

kilometri&auml; pohjoisempana sijaitsevan Tialanviidan, osaksi asukkaiden sukunimen; Tiaisen, perusteella (Ilmari Puranen 

s.1917, 1981). </p>
<p><b>Paikka: </b> Tialanviita <br />
<b>Kuvaus: </b> Verkkokyl&auml;ntien l&auml;nsipuolella oleva sankka kuusikko.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Haapalahden rannalla on my&ouml;s Tiala-niminen tila. <br />
<b>Perim&auml;tietoa: </b> Nimi on vanha, eik&auml; sen alkuper&auml;&auml; tiedet&auml;. Alue on suoper&auml;ist&auml; 

mets&auml;maata. </p>
<p><b>Paikka: </b> Pajuharju <br />
<b>Kuvaus: </b> Hietikkoharju Haapalahden l&auml;nsirannalla, asuinrakennuksesta luoteeseen. <br />
<b>Perim&auml;tietoa: </b> ”Latoja siin ol enne ollunna ja kae siin&auml; on pajuki kasvanna” (Ilmari Puranen s.1917, 1981). 

Harjanne on ollu lammashakana ja sen l&auml;nsipuolella on ollut lehm&auml;haka, Pajuharjunpalsta. </p>
</div> <div id='b37' style="display:none;">
<p><b>Paikka: </b> Haapalahti <br />
<b>Rinnakkaisnimi: </b> Ania <br />
<b>Kuvaus: </b> Iisvedess&auml; oleva lahti, jonka rannoilla lienee kasvanut haapoja. Haapalahti on my&ouml;s Haapalahden 

pohjukassa olevan aution tilan nimi. Puheessa tilaa on kutsuttu my&ouml;s siin&auml; asuneen miehen, Anian (Ananias 

J&auml;&auml;skel&auml;inen) nimell&auml;. Kartassa on virheellinen Haapalehto-nimi. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Haapaj&auml;rvest&auml; Haapalahteen laskee Haapajoki, josta usein 

k&auml;ytet&auml;&auml;n pelkk&auml;&auml; joki-nime&auml;. Haapajoen keskijuoksulla on Murronkorven it&auml;laidalla 

niittyj&auml;, joita yleens&auml; kutsutaan Haapaniityiksi. Joen varrella on my&ouml;s Haapajoki-niminen kes&auml;m&ouml;kki. 

<br />
<b>Perim&auml;tietoa: </b> ”Aekonaan ku Ania asu siin&auml; niin sit&auml; Aniassa k&auml;&ouml;tii” (Eino Huuskonen s.1937, 

1981). Haapalahti on ollut lohkotila, joka on perustettu 1932. </p>
<p><b>Paikka: </b> Alamets&auml;<br />
<b>Kuvaus: </b> Mets&auml;palsta asuinrakennuksen koillispuolella kyl&auml;tien takana <br />
<b>Perim&auml;tietoa: </b> ”Se on semmosta alavampoo muata” (Ania J&auml;&auml;skel&auml;inen s.1891, 1969). </p>
</div> <div id='b38' style="display:none;">
<p><b>Paikka: </b> Taivallahti <br />
<b>Rinnakkaisnimi: </b> Rutjanmeri, Iso Taivallahti <br />
<b>Kuvaus: </b> Lahti Iisvedess&auml;. Nimen alkuper&auml;&auml; ei tiedet&auml;. Iso Taivallahti -nimell&auml; erotetaan 

suurempi lahti Pienest&auml; Taivallahdesta. Rutjanmeri on Taivallahden kansanomainen nimitys. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Ison Taivallahden it&auml;puolella on Taivalniemi, joka j&auml;&auml; ison 

ja pienen lahden v&auml;liin. </p>
<p><b>Paikka: </b> Pieni Taivallahti <br />
<b>Kuvaus: </b> Lahti Iisvedess&auml;. Lahden lounaispuolella on Iso Taivallahti.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Pienen Taivallahden lounaispuolella on Taivalniemi, joka j&auml;&auml; 

Pienen ja Ison Taivallahden v&auml;liin. </p>
<p><b>Paikka: </b> Taivalniemi <br />
<b>Rinnakkaisnimi: </b> Kustunniemi, Antinniemi <br />
<b>Kuvaus: </b> Pitk&auml; ja kapea niemi, joka pist&auml;&auml; Ison ja Pienen Taivallahden v&auml;liin. Taivalniemi on 

my&ouml;s niemess&auml; olevan torpan nimi. Torppaa on kutsuttu my&ouml;s omistajien etunimell&auml;. <br />
<b>Perim&auml;tietoa: </b> Kustu Pulkkinen osti torpan Verkkolahden August Kukkoselta. Hintana oli hevosenvaljaat. </p>
<p><b>Paikka: </b> Kustunniemi <br />
<b>Rinnakkaisnimi: </b> Taivalniemi, Antinniemi <br />
<b>Kuvaus: </b> Taivalniemess&auml; olevan tilan nimi. Tilaa kutsutaan my&ouml;s Taivalniemeksi ja Antinniemeksi. <br />
<b>Perim&auml;tietoa: </b> ”Enne asu siin&auml; Kustu Hentunen ja sanovat sit&auml; sillon Kustunniemeks. Sitte tul Antti 

Hentunen ja nim muuttu Antinniemeks. Vanhat miehet sannoo sit&auml; viel&auml;kin Kustunniemeks” (Ilmari Puranen s.1917, 

1981). </p>
<p><b>Paikka: </b> Rantal&auml;hde <br />
<b>Kuvaus: </b>L&auml;hde Taivallahden rannalla. </p>
</div> <div id='b39' style="display:none;">
<p><b>Paikka: </b> Lahtela<br />
<b>Rinnakkaisnimi: </b> N&auml;rhi <br />
<b>Kuvaus: </b> Tila Taivallahden ja Haapalahden v&auml;lisell&auml; kannaksella. Tilan nimi on aikaisemmin ollut entisten 

omistajien sukunimen mukaan N&auml;rhi.<br />
<b>Perim&auml;tietoa: </b> Tila on ollut Pulkkilansaaressa sijaitsevan J&auml;&auml;skel&auml;n talon torppa. Tila on yli 100 

vuotta vanha. </p>
</div> <div id='b40' style="display:none;">
<p><b>Paikka: </b> Rovastinkangas <br />
<b>Kuvaus: </b> Kangas Verkkovuoren pohjoispuolella. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Haapalahden pohjukassa on Rovastinranta, jossa on my&ouml;s samanniminen 

kes&auml;m&ouml;kki. Iisvedess&auml; on Rovastinlahti. <br />
<b>Perim&auml;tietoa: </b> Kerrotaan, ett&auml; isonvihan aikana kankaalla piileskeli pappi sotaa paossa (Esko Puranen 

s.1905, 1981). </p>
<p><b>Paikka: </b> Rovioranta<br />
<b>Kuvaus: </b>Suora ranta Rovastinlahden luoteispuolella (l&auml;nsipuolella).<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Roviorannan l&auml;hell&auml; on Roviorannanniitty, joka kuuluu 

Verkkolahden talolle. <br />
<b>Perim&auml;tietoa: </b> Arvelujen mukaan alueella on ollut tulipalo. </p>
</div> <div id='b41' style="display:none;">
<p><b>Paikka: </b> K&auml;&auml;rmeniemi <br />
<b>Kuvaus: </b> Iisveteen Pulkkilansalmen pohjoisp&auml;&auml;h&auml;n pist&auml;v&auml; kallioinen ja louhikkoinen niemi. 

<br />
<b>Perim&auml;tietoa: </b> Niemess&auml; on n&auml;hty k&auml;&auml;rmeit&auml; (Ilmari Puranen s.1917, 1981). </p>
</div> <div id='b42' style="display:none;">
<p><b>Paikka: </b> Puukkosaari <br />
<b>Kuvaus: </b> Pieni saari Iisvedess&auml; Kivisaaren pohjoispuolella. <br />
<b>Perim&auml;tietoa: </b> ”Se on sen muotonen kun puukko” (Ania J&auml;&auml;skel&auml;inen s.1891, 1969). </p>
</div> <div id='b43' style="display:none;">
<p><b>Paikka: </b> Niittysaari <br />
<b>Kuvaus: </b> Iisvedess&auml; Kivisaaren pohjoispuolella oleva saari. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Niittysaaren ja Kivisaaren v&auml;lill&auml; on Niittysalmi. <br />
<b>Perim&auml;tietoa: </b> Saaren rannat ovat hyvin kaislaiset ja hein&auml;iset. Arvellaan, ett&auml; saaren rannoilta on 

ker&auml;tty ennen kaisloja karjan rehuksi (Tapani Kukkonen s.1941, 1981). </p>
</div> <div id='b44' style="display:none;">
<p><b>Paikka: </b> Haasiasaari <br />
<b>Rinnakkaisnimi: </b> Impinsaari, Koivusaari<br />
<b>Kuvaus: </b> Iisvedess&auml; Taivalniemen k&auml;rjen l&auml;hell&auml; Ryt&ouml;sel&auml;ss&auml; oleva saari. <br />
<b>Perim&auml;tietoa: </b> ”Suppuniemel&auml;iset tek siit&auml; j&auml;rviheini&auml; ja kuivas huasijalla ne hein&auml;t” 

(Ania J&auml;&auml;skel&auml;inen s.1891, 1969). Saaressa on ennen kuivattu hein&auml;&auml; haasioilla (Tapani Kukkonen 

s.1941, 1981) </p>
<p><b>Paikka: </b> Impinsaari <br />
<b>Rinnakkaisnimi: </b> Haasiasaari <br />
<b>Kuvaus: </b> Iisvedess&auml; olevan Haasisaaren rinnakkaisnimi.<br />
<b>Perim&auml;tietoa: </b> Nimi on annettu saaren omistajan Suppuniemen Impin (Jalasto) mukaan. </p>
</div> <div id='b45' style="display:none;">
<p><b>Paikka: </b> Lehtosuo <br />
<b>Rinnakkaisnimi: </b> M&ouml;s&ouml; <br />
<b>Kuvaus: </b> Autioitunut tila. Puheessa tilaa kutsutaan asukkaiden sukunimell&auml; M&ouml;s&ouml;. </p>
</div> <div id='b46' style="display:none;">
<p><b>Paikka: </b> T&ouml;kr&ouml; (86:75)<br />
<b>Kuvaus: </b> Niitty Pennasensel&auml;nteen pohjoispuolella, Suostunj&auml;rvest&auml; Haapalahteen laskevan joen 

varrella.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> T&ouml;kr&ouml;n pohjoispuolella on T&ouml;kr&ouml;nkallio. <br />
<b>Perim&auml;tietoa: </b> Nimen alkuper&auml;st&auml; ei ole varmaa tietoa. Paikalla muistellaan aikaisemmin olleen 

samanniminen sotilastorppa (Onni Korhonen s.1920, 1981). </p>
</div> <div id='b47' style="display:none;">
<p><b>Paikka: </b> Uudisharju <br />
<b>Rinnakkaisnimi: </b> Tippaharju<br />
<b>Kuvaus: </b> Tila Pulkkilansalmen rannalla olevalla harjanteella. Kansanomainen nimitys on Tippaharju. Karttaan Uudisharju 

on merkitty hieman liian etel&auml;&auml;n. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Uudisharjun l&auml;hell&auml; ovat my&ouml;s Kes&auml;harju- ja 

Pohjoisharju-nimiset asuintontit. <br />
<b>Perim&auml;tietoa: </b> Tila on entinen Verkkolahden talon torppa, joka on erotettu talon maista 1920-luvulla. Tippaharju 

nimen on annettu siit&auml; syyst&auml;, ett&auml; tilalla arvellaan keitetyn pontikkaa. Uudisharjun ja Kes&auml;harjun 

yhteinen nimitys on ennen ollut V&auml;kkyr&auml;kyl&auml;. V&auml;kkyr&auml;kyl&auml;ss&auml; joka talon katolla on ollut 

v&auml;kkyr&auml;, joka jauhoi s&auml;hk&ouml;&auml;. </p>
<p><b>Paikka: </b> Kes&auml;harju<br />
<b>Kuvaus: </b> Lohkotila, joka on ollut Verkkolahden talon torppa<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Tilasta on erotettu Kaukola-niminen tila. <br />
<b>Perim&auml;tietoa: </b> Torppa on per&auml;isin 1800-luvulta. Tila sijaitsee aurinkoisella rinteell&auml;. </p>
<p><b>Paikka: </b> Kaukola <br />
<b>Kuvaus: </b> M&ouml;kki, joka on erotettu Kes&auml;harjun tilasta<br />
<b>Perim&auml;tietoa: </b> M&ouml;kki on erotettu Kauko-nimiselle veljelle ja rakennettu 1950-luvulla. </p>
<p><b>Paikka: </b> Pohjoisharju<br />
<b>Rinnakkaisnimi: </b> H&auml;rm&auml;<br />
<b>Kuvaus: </b> Kes&auml;harju-nimisest&auml; tilata erotettu asuintontti. Puheessa tilaa kutsutaan asukkaiden nimell&auml; 

H&auml;rm&auml;.<br />
<b>Perim&auml;tietoa: </b> Erotettu Kes&auml;harjun tilasta perint&ouml;osuutena 1950-luvun loppupuolella. Pohjoisharju 

sijaitsee Pulkkilansalmen rannan mutaisella, pitk&auml;ll&auml; ja kapealla harjanteella Kes&auml;harjun pohjoispuolella. 

</p>
</div> <div id='b48' style="display:none;">
<p><b>Paikka: </b> Vuorenpankko <br />
<b>Rinnakkaisnimi: </b> Taivaanpankko<br />
<b>Kuvaus: </b> Tasainen rinne Verkkovuoren lounaisrinteess&auml;.<br />
<b>Perim&auml;tietoa: </b> ”Siin on yl&auml;puolella jyrkk&auml; ja alapuolella jyrkk&auml; ja v&auml;lill&auml; tasanen. 

Sit&auml; tasasta sanotaa Vuorempankoks” (Eero Kukkonen s.1919, 1981). </p>
<p><b>Paikka: </b> Piiluvuori <br />
<b>Rinnakkaisnimi: </b> Pilluvuori, Verkkovuori <br />
<b>Kuvaus: </b> Verkkovuoren vanhentunut rinnakkaisnimi.<br />
<b>Perim&auml;tietoa: </b> Piilu tarkoittaa kirvest&auml;, jolla veistell&auml;&auml;n eli ”piilutaan” sein&auml;hirsi&auml;. 

</p>
<p><b>Paikka: </b> Vuorenalusniitty<br />
<b>Rinnakkaisnimi: </b> Mets&auml;pelto<br />
<b>Kuvaus: </b> Verkkovuoren l&auml;nsirinteess&auml; oleva pelto, johon on istutettu puuntaimia. </p>
</div> <div id='b49' style="display:none;">
<p><b>Paikka: </b> Mikkola <br />
<b>Kuvaus: </b> M&ouml;kki, joka on alupenrin ollut Verkkolahden talon ty&ouml;miehen asunto.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> L&auml;hell&auml; on Mikkolankallio. Mikkolan kaakkoispuolella on 

Verkkolahden talon pelto, Mikkolanpelto. <br />
<b>Perim&auml;tietoa: </b> M&ouml;kki on rakennettu 1800-luvun loppupuolella. M&ouml;kiss&auml; on asunut Verkkolahden 

Mikko-niminen ty&ouml;mies. M&ouml;kiss&auml; ovat asuneet my&ouml;s Tuutit ja Mankut. </p>
<p><b>Paikka: </b> Mikkolankallio <br />
<b>Kuvaus: </b> Kallio Mikkola-nimisen asumuksen l&auml;hell&auml;. Mikkolan kaakkoispuolella on Verkkolahden talon pelto, 

Mikkolanpelto </p>
</div> <div id='b50' style="display:none;">
<p><b>Paikka: </b> Haikonen<br />
<b>Kuvaus: </b> Verkkovuoren pohjoispuolella sijaitsevan Iisveden ranta, jossa Pulkkilansalmi on kapeimmillaan. Haikosessa on 

ennen ollut puutavaralaani. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Rannan l&auml;hell&auml; on metsittynyt Haikosenaho. <br />
<b>Perim&auml;tietoa: </b> Puutarvaralaani on ollut aukko mets&auml;n keskell&auml; rinteess&auml;, jota pitkin on vieritetty 

tukit j&auml;rveen. ”Siit&auml; kohin huuvettii enne venett&auml; salame yl ja samateh huuvettii hevoset yl” (Ania 

J&auml;&auml;skel&auml;inen s.1891, 1969). Haikosessa on ollut aiemmin my&ouml;s lossi, jolla kuljetettiin hevosia salmen 

yli. </p>
</div> <div id='b51' style="display:none;">
<p><b>Paikka: </b> Sikronkaarre<br />
<b>Kuvaus: </b> Iisvedess&auml; Pulkkilansalmen l&auml;nsirannalla oleva loiva lahti. Nimi ei ole kansanomaisessa 

k&auml;yt&ouml;ss&auml;.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Lahden pohjoispuolella on niemi, jonka nimi on Sikronharju<br />
<b>Perim&auml;tietoa: </b> Lahdesta on kuljetettu koululaisia kouluun. </p>
</div> <div id='b52' style="display:none;">
<p><b>Paikka: </b> Pellonp&auml;&auml; <br />
<b>Kuvaus: </b> Vanha kantatalo<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Pellonp&auml;&auml;n l&auml;hettyvill&auml; on rauhoitettu 

karsikkopet&auml;j&auml;<br />
<b>Perim&auml;tietoa: </b> Talo on erotettu Pulkkilasta veljesosuutena. Pulkkilan pellon p&auml;&auml; on ulottunut 

Pellonp&auml;&auml;n asuinrakennuksen kohdalle. </p>
<p><b>Paikka: </b> Alaniitty <br />
<b>Rinnakkaisnimi: </b> Rutkaniitty <br />
<b>Kuvaus: </b> Niitty asuinrakennuksesta v&auml;h&auml;n matkaa it&auml;&auml;n p&auml;in <br />
<b>Perim&auml;tietoa: </b> Niitty on ymp&auml;rist&ouml;&auml;&auml;n alavampaa maata. ”Se mua on semmosta kivikkoesta ja 

huonoo” (Esa Pulkkinen s.1906, 1969). </p>
<p><b>Paikka: </b> Etel&auml;lohko<br />
<b>Kuvaus: </b> Rantapeltojen etel&auml;isempi osa<br />
<br />
<b>Paikka: </b> Pohjoislohko<br />
<b>Kuvaus: </b> Rantapeltojen pohjoisempi osa </p>
<p><b>Paikka: </b> Rantapellot <br />
<b>Kuvaus: </b> Peltoalue asuinrakennuksen ja Pulkkilansalmen it&auml;rannan v&auml;lill&auml;. </p>
<p><b>Paikka: </b> Taavettila <br />
<b>Kuvaus: </b> H&auml;vinnyt m&ouml;kki Pellonp&auml;&auml;n talon maalla. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> M&ouml;kin ymp&auml;rill&auml; on Taavettilanpelto. <br />
<b>Perim&auml;tietoa: </b> M&ouml;kki on ollut itsen&auml;istym&auml;t&ouml;n ja h&auml;vinnyt jo 1930-luvulla. 

M&ouml;kiss&auml; on asunut Taavetti Pulkkinen, jonka etunimen mukaan asumusta on nimitetty. </p>
</div> <div id='b53' style="display:none;">
<p><b>Paikka: </b> Joutsensalmi<br />
<b>Rinnakkaisnimi: </b> Pulkkilansalmi <br />
<b>Kuvaus: </b> Virallinen nimi kyl&auml;lle, johon kuuluvat Vehkaranta- ja Verkkokyl&auml;-nimiset kyl&auml;kunnat. 

Joutsensalmi tarkoittaa my&ouml;s Pulkkilansaaren ja mantereen v&auml;list&auml; salmea, jonka rinnakkaisnimi on 

Pulkkilansalmi. <br />
<b>Perim&auml;tietoa: </b> Joutsensalmen kyl&auml; sijaitsee Tervon pit&auml;j&auml;n etel&auml;osasssa. Kyl&auml; rajautuu 

Juurikkaniemen, Nuutilan, K&auml;pysalmen ja Haapam&auml;en kyliin sek&auml; Vesannon pit&auml;j&auml;&auml;n. </p>
</div> <div id='b54' style="display:none;">
<p><b>Paikka: </b> Honkakangas<br />
<b>Kuvaus: </b> Kangassel&auml;nne Salakan l&auml;nsi- ja lounaispuolella.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Kankaan etel&auml;puolella on Honkaselk&auml;-niminen tila. Kankaan 

etel&auml;puolella on my&ouml;s Honkaniitty. <br />
<b>Perim&auml;tietoa: </b> Kangas on ollut alunperin Salakan maata, my&ouml;hemmin kangas on ollut Kymi-yhti&ouml;n 

mets&auml;palsta. ”Siin&auml; [kankaalla] kasvaa vanahoja ja suurija honkija” (Uuno Liimatainen s.1907, 1968). </p>
</div> <div id='b55' style="display:none;">
<p><b>Paikka: </b> Maantienvarsiniitty <br />
<b>Rinnakkaisnimi: </b> Salakan niitty, Liminganniitty<br />
<b>Kuvaus: </b> Niittyalue maantien it&auml;puolella. <br />
<b>Perim&auml;tietoa: </b> ”Se on niin pitk&auml; ku limingan niityt” (Yrj&ouml; Saastamoinen s.1889, 1968). </p>
</div> <div id='b56' style="display:none;">
<p><b>Paikka: </b> Honkapelto<br />
<b>Kuvaus: </b> Eerolan tilan pelto <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Pellon luoteispuolella on Honkaniitty. L&auml;hell&auml; virtaa Honkapuro. 

</p>
<p><b>Paikka: </b> Honkapuro <br />
<b>Rinnakkaisnimi: </b> Eerolanpuro, Huldanpuro<br />
<b>Kuvaus: </b> Maantien l&auml;nsipuolelta alkava ja Rasvankiin laskeva luonnonoja.<br />
<b>Perim&auml;tietoa: </b> Eerolan em&auml;nn&auml;n nimi on ollut Hulda. </p>
</div> <div id='b57' style="display:none;">
<p><b>Paikka: </b> Kumpulahti<br />
<b>Rinnakkaisnimi: </b>Kumpulahen ri&auml;t&auml;l, ri&auml;t&auml;lin m&ouml;kki <br />
<b>Kuvaus: </b> Lahti Rasvangin l&auml;nsiosassa. Kumpurannaksi kutsutaan my&ouml;s lahden rannalla sijaitsevaa 

m&ouml;kki&auml;<br />
<b>Perim&auml;tietoa: </b> ”Se ranta on siin&auml; semmosta kumparetta” (Uuno Liimatainen s.1907, 1968). M&ouml;kki on ollut 

alkujaan Salakan m&auml;kitupa. M&ouml;kki on perustettu kertoman mukaan 1800-luvun puoliv&auml;liss&auml; ja siin&auml; on 

asunut kyl&auml;n r&auml;&auml;t&auml;li. </p>
</div> <div id='b58' style="display:none;">
<p><b>Paikka: </b> Punikinhaka <br />
<b>Kuvaus: </b> H&auml;vinnyt aidattu laidunmaa.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Laidunmaan it&auml;puolella on Punikinniitty.<br />
<b>Perim&auml;tietoa: </b> Nimen alkuper&auml;st&auml; ei ole varmaa tietoa. ”Ehken siin&auml; [haassa] on pietty sen 

nimist&auml; lehm&auml;&auml; ”Uuno Liimatainen s.1907, 1968). Punikki on paikkakunnalla yleinen lehm&auml;nnimi. </p>
<p><b>Paikka: </b> Pitk&auml;tsarat <br />
<b>Kuvaus: </b> Pitk&auml; ja kapea niittyalue Puustellin luoteispuolella.<br />
<b>Perim&auml;tietoa: </b> ”Siin&auml; om puol kilometri&auml; pitki&auml; sarkoja” (Laina Lyytinen s.1898, 1968). </p>
</div> <div id='b59' style="display:none;">
<p><b>Paikka: </b> Selk&auml;m&auml;<br />
<b>Kuvaus: </b> Pitkulainen kangassel&auml;nne Viitalan talon kaakkoispuolella<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Sel&auml;nteell&auml; kulkee Joutsensalmen kyl&auml;n Verkkolahteen johtava 

kyl&auml;tie. Tien nimi on Selk&auml;m&auml;ntie tai Selk&auml;m&auml;npolku. </p>
</div> <div id='b60' style="display:none;">
<p><b>Paikka: </b> Puustelli <br />
<b>Kuvaus: </b> Vanha sotilasvirkatalo.<br />
<b>Perim&auml;tietoa: </b> Talo on kertoman mukaan satoja vuosia vanha. </p>
<p><b> </b><b>Paikka: </b> Hakakuoppa<br />
<b>Kuvaus: </b> Perunakuoppa Puustellista kaakkoon.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Kuoppa sijaitsee Rantahaan l&auml;nsilaidalla. </p>
<p><b>Paikka: </b> Rantahaka<br />
<b>Kuvaus: </b> Aidattu haka talosta jonkin matkaa kaakkoon Rasvangin rannalla. </p>
<p><b>Paikka: </b> Puustellinalusniitty<br />
<b>Kuvaus: </b> Niitty Puustellin talon lounaispuolella.<br />
<b>Perim&auml;tietoa: </b> ”Se om puustellin maehi keskell&auml;” (Uuno Liimatainen s.1907, 1968). </p>
<p><b>Paikka: </b>Rajakuoppa <br />
<b>Kuvaus: </b> Perunakuoppa Puustellin ja Hyv&ouml;l&auml;n viljelysten rajalla, Puustellista v&auml;h&auml;n pohjoiseen<br 

/>
<b><br />
Paikka: </b> Riihipelto <br />
<b>Kuvaus: </b> Pelto asuinrakennuksen etel&auml;puolella. Pellon laidassa on riihi. </p>
<p><b>Paikka: </b> Solansuum&ouml;kki<br />
<b>Kuvaus: </b> M&ouml;kki Puustellin talon maalla. <br />
<b>Perim&auml;tietoa: </b> M&ouml;kki on ollut itsen&auml;istym&auml;t&ouml;n ja h&auml;vinnyt vuoden 1910 paikkeilla. 

M&ouml;kki on sijainnut Puustellin talosta alkavan karjasolan l&auml;hist&ouml;ll&auml;. My&ouml;s sola on sittemmin 

h&auml;vinnyt. M&ouml;kki sijaitsee Paavolan tilalta hieman pohjoiseen. </p>
<p><b>Paikka: </b> Likokuja<br />
<b>Kuvaus: </b> Niitty Lev&auml;senniityn luoteispuolella.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Niityll&auml; on Likokujanlato. <br />
<b>Perim&auml;tietoa: </b> Niitty on hyvin vetinen. ”Se on entist&auml; j&auml;rven pohjoo.” J&auml;rvess&auml; on ollut 

lahti ja se on ”ylettynn&auml; pitk&auml;lti n&auml;ehin niittyin paekalle” (Laina Lyytinen s.1898, 1968). </p>
<p><b>Paikka: </b> Keskusniitty <br />
<b>Kuvaus: </b> Niitty, joka sijaitsee Pitkiensarkojen ja Likoniityn v&auml;liss&auml;. </p>
</div> <div id='b61' style="display:none;">
<p><b>Paikka: </b> Hyv&ouml;l&auml; <br />
<b>Rinnakkaisnimi: </b> Mattila<br />
<b>Kuvaus: </b> Kantatalo, joka on useita satoja vuosia vanha. Hyv&ouml;l&auml;ksi kutsutaan my&ouml;s kulmakuntaa, joka 

k&auml;sitt&auml;&auml; l&auml;hiymp&auml;rist&ouml;n asumukset. Asukkaita kutsutaan hyv&ouml;l&auml;nkyl&auml;l&auml;isiksi. 

<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Talon it&auml;puolella on Hyv&ouml;l&auml;nsalmi. Salmen suora 

l&auml;nsiranta on nimelt&auml;&auml;n Hyv&ouml;l&auml;nsalmenranta. <br />
<b>Perim&auml;tietoa: </b> Vuonna 1577 Paavo Hyv&ouml;nen on ostanut maata nykyisest&auml; Juurikkaniemest&auml; (Saloheimo: 

Rautalammin historia s.30). Hyv&ouml;l&auml;n talo on ollut kauan Hyv&ouml;sen suvun hallussa. V&auml;lill&auml; talon 

nimen&auml; oli Mattila. </p>
<p><b>Paikka: </b> P&ouml;mpeli <br />
<b>Kuvaus: </b> Aikaisemman Hyv&ouml;l&auml;n asuinrakennuksen eteinen, jossa nukutaan kes&auml;isin. <br />
<b>Perim&auml;tietoa: </b> Vanha asuinrakennus on eteist&auml; lukuun ottamatta h&auml;vinnyt. </p>
</div> <div id='b62' style="display:none;">
<p><b>Paikka: </b> Honkaselk&auml;<br />
<b>Kuvaus: </b> Lohkotila, joka on ollut alkujaan Salakan talon torppa<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Tilan luoteispuolella sijaitsee Salakan talon Honkaniitty eli 

Honkasel&auml;nniitty.<br />
<b>Perim&auml;tietoa: </b> Torppa on rakennettu kertoman mukaan 1800-luvun puoliv&auml;liss&auml;. Tila sijaitsee 

Honkakankaan etel&auml;liepeill&auml;. </p>
</div> <div id='b63' style="display:none;">
<p><b>Paikka: </b> Kotiranta<br />
<b>Rinnakkaisnimi: </b> Raitakivi<br />
<b>Kuvaus: </b> Kotiranta on asukkaiden mukaan kutsutun Raitakiven m&ouml;kin virallinen nimi. M&ouml;kki sijaitsee 

Hyv&ouml;l&auml;nsalmen rannalla. </p>
</div> <div id='b64' style="display:none;">
<p><b>Paikka: </b> T&ouml;llinm&auml;ki<br />
<b>Kuvaus: </b> M&ouml;kki Hyv&ouml;l&auml;n talon maalla<br />
<b>Perim&auml;tietoa: </b> M&ouml;kki on rakennettu 1944 ja se on itsen&auml;istym&auml;t&ouml;n. ” Ei sill&auml; oum 

mitt&auml;&auml; virallista nimmee, kun sit&auml; ei ou erotettu t&auml;st&auml; pi&auml;tilasta. Sit&auml; o ruvettu 

kuhtumaan sill&auml; nimell&auml;, kun se on semmone pien tuanu ja siin&auml; ov v&auml;h&auml; tuommosta 

m&auml;enkumparetta” (Uuno Liimatainen s.1907, 1968). </p>
</div> <div id='b65' style="display:none;">
<p><b>Paikka: </b> Eerola<br />
<b>Kuvaus: </b> Lohkotila, joka on erotettu Kymi-yhti&ouml;n maasta 1920-luvulla<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Tilan ohitse kulkee maantien l&auml;nsipuolelta mets&auml;suolta alkava ja 

Rasvankiin laskeva Eerolanpuro, jota kutsutaan my&ouml;s Honkapuroksi. <br />
<b>Perim&auml;tietoa: </b> Kymi-yhti&ouml;n maat ovat olleet alunperin Salakan talon maita. Tilan perustaja on 

Hyv&ouml;l&auml;n kansakoulun opettajana 1905-1928 toiminut Eero Kauppila. </p>
<p><b>Paikka: </b> Leporanta <br />
<b>Rinnakkaisnimi: </b> Hulkko <br />
<b>Kuvaus: </b> M&ouml;kki, joka sijaitsee Hyv&ouml;l&auml;nsalmen rannalla Eerolan tilan it&auml;puolella. Puhekieless&auml; 

paikkaa on kutsuttu asukkaiden mukaan Hulkoksi. <br />
<b>Perim&auml;tietoa: </b> M&ouml;kki on erotettu Eerolan tilan maista vuonna 1958. </p>
</div> <div id='b66' style="display:none;">
<p><b>Paikka: </b> Siekkisensaaret<br />
<b>Rinnakkaisnimi: </b> Iso Siekkinen, Pieni Siekkinen<br />
<b>Kuvaus: </b> Kaksi saarta Rasvangissa Pulkkilansaaren l&auml;nsipuolella<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Saarten l&auml;nsipuolella on Siekkisensalmi<br />
<b>Perim&auml;tietoa: </b> Riitlammin kyl&auml;ss&auml; on asunut Siekkisi&auml;, jotka ovat kalastelleen Rasvangin 

vesill&auml;. </p>
</div> <div id='b67' style="display:none;">
<p><b>Paikka: </b> Kumpusaari<br />
<b>Kuvaus: </b> Suurehko saari Rasvangissa<br />
<b>Perim&auml;tietoa: </b> ”Siin&auml; on semmosta kumparetta siin&auml; keskell&auml;” (Yrj&ouml; Saastamoinen s.1889, 

1968). </p>
</div> <div id='b68' style="display:none;">
<p><b>Paikka: </b> Kansakoulu <br />
<b>Kuvaus: </b> Hyv&ouml;l&auml;n kansakoulu, my&ouml;hemmin peruskoulun ala-aste, jonka yli sata vuotta jatkunut toiminta 

lakkautui 2000-luvun alussa. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Koulunpelto on koulun l&auml;nsipuolella sijainnut pieni pelto, jolle 

opettaja S&auml;lekivi perusti koulun puutarhan. S&auml;lekivi kaatui my&ouml;hemmin sodassa. </p>
</div> <div id='b69' style="display:none;">
<p><b>Paikka: </b> Salakka <br />
<b>Kuvaus: </b> Vanha kantatalo, joka sijaitsee Salakkaharju-nimisess&auml; niemess&auml;.<br />
<br />
<b>Paikka: </b> Salakkaharju <br />
<b>Rinnakkaisnimi: </b> Salakkaniemi <br />
<b>Kuvaus: </b> Rasvankiin pist&auml;v&auml; niemi, joka on yl&auml;v&auml;&auml; maata<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Niemess&auml; sijaitsee Salakka-niminen talo. Niemess&auml; on 

Salakkaharjunpelto<br />
<b>Perim&auml;tietoa: </b> ”Siin&auml; [niemen edustalla] on salakoehij kutupaekkoja” (Yrj&ouml; Saastamoinen s.1889, 1968). 

</p>
<p><b>Paikka: </b> Salmela<br />
<b>Kuvaus: </b> Talo rannalla Salakan etel&auml;puolella. </p>
</div> <div id='b70' style="display:none;">
<p><b>Paikka: </b> Lev&auml;nen<br />
<b>Rinnakkaisnimi: </b> Halola, Huuskola<br />
<b>Kuvaus: </b> Tila Lev&auml;senlahden rannalla. Puheessa tilaa kutsutaan nimell&auml; Huuskola<br />
<b>Perim&auml;tietoa: </b> Tila on alkujaan Puustellin talon torppa. Torppa on arvelujen mukaan perustettu 1800-luvun 

puoliv&auml;liss&auml;. Tilan vanhin nimi, joka muistetaan, on Lev&auml;nen. My&ouml;hemmin tilaa alettiin kutsua 

Huuskolaksi, koska sen omistajat olivat Huuskosia. Sen j&auml;lkeen tila siirtyi Halosille, jolloin nimeksi tuli Halola. 

My&ouml;hemmin talon viralliseksi nimeksi tuli Huuskola. Talon omisti pitk&auml;&auml;n kyl&auml;n taksiautoilija Toivo 

Kilpel&auml;inen, jota kutsuttiin Huuskolan Topiksi. Topi oli my&ouml;s pelimannina, kun talkoissa tanssittiin esimerkiksi 

Hyv&ouml;l&auml;n malississa. Topi ajoi autoaan hiljaa ja aina keskell&auml; tiet&auml;. Siit&auml; tuli sanonta ”topittaa”, 

kun ajaa keskell&auml; tiet&auml;. </p>
<p>Etel&auml;suomalainen opettaja tuli 1970-luvulla t&ouml;ihin Tervon keskikouluun. Syyslomalla opettaja l&auml;hti 

k&auml;ym&auml;&auml;n kotiseudullaan ja tilasi taksikyydin Suonenjoen asemalla. Topi tuli hakemaan opettajaa. Topilla oli 

tapana ajaessaan kertoilla tien varren talot ja tapahtumat, ja silloin auto melkein pys&auml;htyi, joten matka taittui 

hitaasti. Opettaja katsoi kelloaan tihe&auml;&auml;n tahtiin ja kysyi viimein: ”Ehdit&auml;&auml;nk&ouml;h&auml;n me 

junalle?” ”Kyll&auml; my&ouml; osittain jouvutaan”, vastasi kuski. </p>
<p><b>Paikka: </b> Riiheneduskappale <br />
<b>Kuvaus: </b> Pelto Huuskolan talon luoteispuolella. <br />
<b>Perim&auml;tietoa: </b> Pellon luoteisp&auml;&auml;ss&auml; on riihi. </p>
<p><b>Paikka: </b> Pajakuopat <br />
<b>Kuvaus: </b> Kaksi perunakuoppaa asuinrakennuksesta hieman kaakkoon. </p>
<p><b>Paikka: </b> Lahtiniitty <br />
<b>Rinnakkaisnimi: </b> Lev&auml;nen <br />
<b>Kuvaus: </b> Lev&auml;senlahden rannalla oleva niitty. Kutsutaan my&ouml;s nimell&auml; Lev&auml;nen. </p>
<p><b>Paikka: </b> Viem&auml;rintakalato <br />
<b>Kuvaus: </b> Lato Lev&auml;senniitylt&auml; Rasvankiin johtavan viem&auml;riojan koillispuolella. Huuskolasta katsottuna 

lato on viem&auml;riojan takana. </p>
</div> <div id='b71' style="display:none;">
<p><b>Paikka: </b> Paavola<br />
<b>Kuvaus: </b> Lohkotila, joka on alkujaan ollut Puustellin talon torppa. <br />
<b>Perim&auml;tietoa: </b> Torppa on perustettu 1800-luvun loppupuolella. Tilan on omistanut aikaisemmin Paavo Karttunen. 

Sittemmin tilan ovat omistaneet Bruunit. </p>
</div> <div id='b72' style="display:none;">
<p><b>Paikka: </b> Lev&auml;senlahti <br />
<b>Kuvaus: </b> Rasvangin lahti <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Lahden pohjoispuolella on Joutsensalmen kyl&auml;n Heikkil&auml;n tilalle 

kuuluva Lev&auml;senniemi. Niemest&auml; v&auml;h&auml;n kaakkoon on Lev&auml;sensaari. Niemen ja saaren v&auml;liss&auml; on 

Lev&auml;sensalmi. Lev&auml;senlahden luoteispuolella on pitkulainen ja kapea niittyalue, jonka nimi on Lev&auml;senniityt. 

Niittyalue kuuluu Hyv&ouml;l&auml;n, Puustellin ja Huuskolan tiloille. Niityll&auml; on Lev&auml;senlato eli 

Lev&auml;senniitynlato. Niitylt&auml; Lev&auml;senlahteen laskevan ojan yli on Lev&auml;senniitynsilta. <br />
<b>Perim&auml;tietoa: </b> Huuskolan talon vanhin nimi on Lev&auml;nen. ”Siin&auml; [Lev&auml;senlahdessa] on hyvin paljo 

semmosta levvee, kun se on niin matala” (Uuno Liimatainen, s.1898, 1968). </p>
</div> <div id='b73' style="display:none;">
<p><b>Paikka: </b> J&auml;&auml;skel&auml;<br />
<b>Kuvaus: </b> Kantatalo <br />
<b>Perim&auml;tietoa: </b> Rautalammin historiassa mainitaan ett&auml; Joutsensalmella on ollut vuonna 1722 kaksi sukua, 

Pulkkinen ja J&auml;&auml;skel&auml;inen (Saloheimo: Rautalammin historia s. 86). 1700-luvun lopulla Pulkkilasta erotettiin 

Verkkolahden ja J&auml;&auml;skel&auml;n talot. </p>
<p><b>Paikka: </b> Aittolahti <br />
<b>Kuvaus: </b> Suurehko lahti Iisveden pohjoisp&auml;&auml;ss&auml;.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Juurikkaniemen kyl&auml;n alueella on my&ouml;s Aittolahti, joka on 

sek&auml; lahden ett&auml; tilan nimitys. <br />
<b>Perim&auml;tietoa: </b> Lahden l&auml;nsirannalla on J&auml;&auml;skel&auml;n talon peltoalue; Aittolahenpellot. Kertoman 

mukaan h&auml;m&auml;l&auml;isten er&auml;nk&auml;vij&ouml;iden rakentama aitta on ollut lahden rannalla (Emil 

J&auml;&auml;skel&auml;inen s.1894, 1969). Joutsensalmen seudut ovat keskiajalla olleet Kanta-H&auml;meen 

er&auml;maa-alueita. </p>
<p><b>Paikka: </b> It&auml;pellot <br />
<b>Rinnakkaisnimi: </b> It&auml;puolenpellot<br />
<b>Kuvaus: </b> Pitk&auml;, kapea peltoalue J&auml;&auml;skel&auml;n ja Pellonp&auml;&auml;n kautta kulkevan kyl&auml;tien 

it&auml;puolella. </p>
<p><b>Paikka: </b> Solansuuaho<br />
<b>Kuvaus: </b> Metsittynyt aho, joka on ollut J&auml;&auml;skel&auml;n talon kaskimaata<br />
<b>Perim&auml;tietoa: </b> J&auml;&auml;skel&auml;n talosta koilliseen p&auml;in on kulkenut aikaisemmin karjasola, joka on 

p&auml;&auml;ttynyt ahon luona. </p>
<p><b>Paikka: </b> Lanninaho<br />
<b>Kuvaus: </b> Metsittynyt aho Pulkkilansaaren kaakkoisp&auml;&auml;ss&auml;.<br />
<b>Perim&auml;tietoa: </b> Aho on ollut jonkin Lanni-nimisen miehen kaskimaana. Kertoman mukaan mies on ollut hyvin 

omalaatuinen ja muita ihmisi&auml; kartteleva (Emil J&auml;&auml;skel&auml;inen s.1894, 1969). </p>
</div> <div id='b74' style="display:none;">
<p><b>Paikka: </b> Matinniemi<br />
<b>Kuvaus: </b> Iisveden pohjoisp&auml;&auml;h&auml;n pist&auml;v&auml; pitkulainen niemi.<br />
<b>Perim&auml;tietoa: </b> J&auml;&auml;skel&auml;n talon on aiemmin omistanut Matti J&auml;&auml;skel&auml;inen, jonka 

etunimen mukaan nieme&auml; on ruvettu nimitt&auml;m&auml;&auml;n. Matinniemi oli kauan Emppo J&auml;&auml;skel&auml;isen 

kes&auml;paikkana. Emppo oli sanomalehtimies, kirjoittaja ja kotiseutumies, sukuaan oli Lahdenpohjan 

J&auml;&auml;skel&auml;isi&auml;. Matinniemi on ollut J&auml;&auml;skel&auml;n talon maata. Emppo oli antanut 

J&auml;&auml;skel&auml;n em&auml;nn&auml;lle Helmi Maukonen-Raatikaiselle gramofonin ja saanut siit&auml; hyv&auml;st&auml; 

Matinniemen. </p>
</div> <div id='b75' style="display:none;">
<b>Nimi:</b> Pulkkilansaari<br />
<b>Rinnakkaisnimi:</b> Pulkkilansalo<br />
<b>Paikan kuvaus:</b> Suuri saari, joka erottaa Rasvangin ja Iisveden toisistaan. Aikaisempi nimitys on ollut Pulkkilansalo.
<br /><b>Muita paikkaan liittyviä nimiä: </b>Saaren pohjoispäässä on Salo-niminen lohkotila. Saaren eteläosan ja mantereen välissä on Pulkkilansalmi, jonka aikaisempi nimitys on ollut Joutsensalmi.
<br /><b>Perimätietoa:</b> Pulkkilansalo-nimeä käytettiin ennen isojakoa. Tämä nimitys on Pulkkilan talon mantereen puoleisella maalla. Seudun ensimmäinen asukas on ollut Matti Pulkkinen (Veijo A. Saloheimo: Rautalammin historia s. 29). Saaren ensimmäinen talo on ollut Pulkkila.
</div> <div id='b75b' style="display:none;">
<b>Nimi:</b> Pulkkila
<br /><b>Paikan kuvaus:</b> Talo Pulkkilansaaressa 
<br /><b>Perimätietoa:</b> Pulkkila on pitäjän vanhimpia taloja. Vuonna 1552 tuli Olli Pulkkinen Haapamäellä, josta hänen poikansa Matti Pulkkinen muutti seuraavana vuonna Joutsensalmelle (Veijo A. Saloheimo: Rautalammin historia s. 29). Talo on äskettäin liitetty Jääskelään. Kylällä elää sanonta: ”On illoo ja valloo ku Kuplan Miinan häessä”. Miinan häitä on tanssittu Pulkkilan tuvassa ja valona on ollut yksi kynttilä.
<br /><br />
<b>Nimi: </b>Autioranta
<br /><b>Paikan kuvaus:</b> Pulkkilansalmen itärantaa
<br /><b>Perimätietoa:</b> Pulkkilan talo on ollut aikaisemmin rannalla, josta se on siirretty kauemmaksi.
<br /><br />
<b>Nimi: </b>Pajaranta
<br /><b>Paikan kuvaus:</b> Pulkkilansalmen itärantaa.
<br /><b>Perimätietoa:</b> Pulkkilan talon paja on ollut rannassa.

</div> <div id='b76' style="display:none;">
<p><b>Paikka: </b> Kivim&auml;ki<br />
<b>Kuvaus: </b> M&auml;ki Pulkkilansaaren kaakkoisp&auml;&auml;ss&auml;. Kivim&auml;ki on my&ouml;s m&auml;ell&auml; 

sijaitsevan pienen tilan nimi<br />
<b>Perim&auml;tietoa: </b> M&auml;ki on hyvin kivist&auml; maastoa. Tila on ollut Pulkkilan talon vanha m&auml;kitupa. Tila 

on ollut asumaton jo vuodesta 1967. Kivim&auml;ki on ollut Posti-V&auml;in&ouml;n m&ouml;kki. Kivim&auml;ki on lehtomaata, 

jossa kasvaa valkovuokkoja ja muita erityisi&auml; kasveja. Siell&auml; on my&ouml;s l&auml;hde. </p>
</div> <div id='b77' style="display:none;">
<p><b>Paikka: </b> Kannas<br />
<b>Rinnakkaisnimi: </b> Kannasharju <br />
<b>Kuvaus: </b> Pulkkilansalmeen pist&auml;v&auml; niemi. Joskus k&auml;ytet&auml;&auml;n my&ouml;s nime&auml; 

Kannasharju.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Niemen etel&auml;puolelle pist&auml;&auml; lahti, Kannaskaarre. Niemen 

tyvess&auml; on Kannaksenniitty<br />
<b>Perim&auml;tietoa: </b> Salmen etel&auml;osa on t&auml;ss&auml; kohden kapeimmillaan. Niemess&auml; ei ole harjua. Harju 

tarkoittaa paitsi harjannetta, my&ouml;s nieme&auml;, joka voi olla alavaakin maata. </p>
</div> <div id='b78' style="display:none;">
<p><b>Paikka: </b> Kalakukko<br />
<b>Kuvaus: </b> Lohkotila, entinen Pellonp&auml;&auml;n tilan torppa.<br />
<b>Perim&auml;tietoa: </b> Tila on perustettu 1800- ja 1900-lukujen vaihteen tienoilla. Asuinrakennuksen 

l&auml;hist&ouml;ll&auml; on kukkokallio, joka muodoltaan muistuttaa kalakukkoa. Kertoman mukaan tilan is&auml;nt&auml; Pekka 

Pulkkinen haki Vaajavuoresta taiotun aarteen ja toi sen kotiinsa. Pian t&auml;m&auml;n j&auml;lkeen is&auml;nn&auml;n toiseen 

jalkaan ilmestyi valkoisia matoja ja koko jalka alkoi m&auml;d&auml;nty&auml;. Is&auml;nn&auml;n oli pakko vied&auml; aarre 

takaisin vuoreen (Emil J&auml;&auml;skel&auml;inen 1894, 1969). </p>
<p><b>Paikka: </b> Suursuo <br />
<b>Kuvaus: </b> Suuri suoalue, josta osa on viljelyksen&auml;. </p>
</div> <div id='b79' style="display:none;">
<p><b>Paikka: </b> Kuikkaluoto <br />
<b>Kuvaus: </b> Pieni saari Rasvangissa Pulkkilansaaren it&auml;rannan l&auml;hell&auml;. <br />
<b>Perim&auml;tietoa: </b> Saari on kuikkien suosima pesimispaikka. </p>
</div> <div id='b80' style="display:none;">
<p><b>Paikka: </b> Kettuvuori<br />
<b>Kuvaus: </b> Korkea vuori Pulkkilansaaren keskivaiheilla.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Vuoren lounaispuolella on pitk&auml; ja kapea notkelma, kettunotko, joka 

ulottuu Kalakukon tilan l&auml;hist&ouml;lt&auml; Tuikonlahteen. <br />
<b>Perim&auml;tietoa: </b> Vuorelta on l&ouml;ydetty ketun pes&auml;. </p>
</div> <div id='b81' style="display:none;">
<p><b>Paikka: </b> Uiperonlahti <br />
<b>Kuvaus: </b> Pulkkilansaaren l&auml;nsisyrj&auml;&auml;n pist&auml;v&auml; pitk&auml; ja hyvin kapea lahti. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Lahden lounaispuolella on pitk&auml; ja kapea Uiperonniemi. <br />
<b>Perim&auml;tietoa: </b> ”Se lahti kun on semmonen kappee uipero ettei se ou ku jonku kymmenen metrij&auml; levvee” (Esa 

Pulkkinen s.1900, 1970). </p>
</div> <div id='b82' style="display:none;">
<p><b>Paikka: </b>H&auml;rk&auml;salmi <br />
<b>Kuvaus: </b> Niittysaaren ja Uiperonniemen v&auml;linen kapeahko salmi.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Salmen luoteisp&auml;&auml;ss&auml; on syv&auml; paikka nimelt&auml;&auml;n 

H&auml;rk&auml;syv&auml;. Uiperonniemess&auml; on korkea, sile&auml; H&auml;rk&auml;kallio. <br />
<b>Perim&auml;tietoa: </b> Kertoman mukaan h&auml;rk&auml;kalliolla on tapellut kaksi h&auml;rk&auml;&auml;, josta toinen on 

pudonnut alapuolella olevaan syv&auml;nteeseen ja hukkunut (Emil J&auml;&auml;skel&auml;inen s.1894, 1969). </p>
</div> <div id='b83' style="display:none;">
<p><b>Paikka: </b> Vaajalahti <br />
<b>Kuvaus: </b> Pulkkilansaaren l&auml;nsisyrj&auml;&auml;n pist&auml;v&auml; lahti.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Lahden etel&auml;puolella on Vaajaniemi. Lahdesta jonkin matkaa pohjoiseen 

on pitk&auml; ja kapea vuorijono,Vaajavuori. <br />
<b>Perim&auml;tietoa: </b> ”Siin&auml; [Vaajalahdessa] on pietty vuoajoja” (Esa Pulkkinen s.1906, 1970). Vaaja tarkoittaa 

seiv&auml;st&auml;, jossa on pidetty verkkoja. </p>
</div> <div id='b84' style="display:none;">
<p><b>Paikka: </b> Rovastinlahti <br />
<b>Kuvaus: </b> K&auml;&auml;rmeniemen l&auml;nsipuolelle pist&auml;v&auml; lahti Ryt&ouml;sel&auml;n 

kaakkoisp&auml;&auml;ss&auml;. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Lahdelta jonkin matkaa lounaaseen on korkea kangassel&auml;nne 

nimelt&auml;&auml;n Rovastinkangas. Lahden etel&auml;rannalla Verkkolahden talon metsittynyt niitty, jonka nimi on 

Rovastinniitty. <br />
<b>Perim&auml;tietoa: </b> Pielaveden rovastin kerrotaan l&auml;hteneen sotaa pakoon. T&auml;ll&auml; pakomatkallaan h&auml;n 

on viimein p&auml;&auml;tynyt Rovastinlahteen (Emil J&auml;&auml;skel&auml;inen s.1894, 1969). </p>
<p>&nbsp; </p>
</div> <div id='b85' style="display:none;">
<p><b>Paikka: </b> Naularanta<br />
<b>Kuvaus: </b> Lohkotila, joka sijaitsee Pulkkilansaaren it&auml;rannan l&auml;hell&auml;.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Tilan etel&auml;puolella on Naulavuori ja Naulakangas sek&auml; 

pohjoispuolella Naulalahti ja Naulanniemi. Tilasta l&auml;nteen on Naulanniitty, niityn luoteispuolella on pitk&auml; ja 

kapea Naulannotko. <br />
<b>Perim&auml;tietoa: </b> Tila on ollut alunperin Pulkkilan talon torppa. Talo on kertoman mukaan rakennettu 1800-luvun 

alussa. Tilalla on asunut J&auml;nttej&auml;, vanhimpia heist&auml; ovat olleet Eenokki ja Amalia J&auml;ntti, Eino ja Katri 

J&auml;ntti sek&auml; Huugo J&auml;ntti. J&auml;nttien suvussa on ollut paljon Vapaakirkon pappeja. Olettamuksen mukaan 

alueella on kenties valmistettu puisia nauloja, jollaisia aikaisemmin on k&auml;ytetty (Emil J&auml;&auml;skel&auml;inen 

s.1894, 1969). </p>
<p><b>Paikka: </b> Mustiaisenkangas <br />
<b>Kuvaus: </b> Kangasmaa Naulakankaan pohjoisosassa. </p>
</div> <div id='b86' style="display:none;">
<p><b>Paikka: </b> Heposuo<br />
<b>Rinnakkaisnimi: </b> Heposuonl&auml;hde <br />
<b>Kuvaus: </b> Pitk&auml; ja kapea suoalue Pulkkilansaaren etel&auml;osassa. Suolla on Heposuonl&auml;hde.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Suon koillispuolella on mets&auml;maata, jota kutsutaan Heposuonviidaksi<br 

/>
<b>Perim&auml;tietoa: </b> Kertoman mukaan hevonen on uponnut suohon. </p>
</div> <div id='b87' style="display:none;">
<p><b>Paikka: </b> Kumpuvuori <br />
<b>Kuvaus: </b> Vuori Pulkkilansaaren etel&auml;osassa </p>
<p><b>Paikka: </b> Vuorentaus <br />
<b>Rinnakkaisnimi: </b> Turpeinen <br />
<b>Kuvaus: </b> Pellonp&auml;&auml;n h&auml;vinnyt m&auml;kitupa. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;:</b> L&auml;hell&auml; on ollut Kivil&auml;hde. <br />
<b>Perim&auml;tietoa: </b> Talo on rakennettu 1870-luvun puoliv&auml;liss&auml;. M&auml;kitupa on ollut 

itsen&auml;istym&auml;t&ouml;n ja h&auml;vinnyt 1930-luvulla. M&ouml;kki on sijainnut Kumpuvuoren 

pohjoisp&auml;&auml;ss&auml;, paikka on Pellonp&auml;&auml;n talosta katsottuna vuoren takana. Saunan rauniot ovat viel&auml; 

kuusen juurella. M&ouml;kin em&auml;nt&auml; Hilma on ollut nen&auml;t&ouml;n. H&auml;n on ollut Hyv&ouml;l&auml;n koululla 

keitt&auml;j&auml;n&auml;. Hilma on tehnyt py&ouml;riytyshilloa (puolukkahillo). </p>
<p><b>Paikka: </b> Kivil&auml;hde <br />
<b>Kuvaus: </b> L&auml;hde Kumpuvuoren pohjoisp&auml;&auml;ss&auml;.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> L&auml;hteen l&auml;hell&auml; on sijainnut Vuorentaus-niminen 

m&auml;kitupa. <br />
<b>Perim&auml;tietoa: </b> L&auml;hteen vieress&auml; on suuri kivi. </p>
<p><b>Paikka: </b> Suuriaho <br />
<b>Kuvaus: </b> Suuri, metsittynyt aho Kumpuvuoren it&auml;rinteell&auml;. </p>
</div> <div id='b88' style="display:none;">
<p><b>Paikka: </b> Ukonkallio<br />
<b>Rinnakkaisnimi: </b> Tupakkakallio <br />
<b>Kuvaus: </b> Korkea kallio Pulkkilansaaren etel&auml;osassa. Aikaisempi nimitys on ollut Ukonkallio, my&ouml;hemmin 

k&auml;ytetty nime&auml; Tupakkakallio. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Kallion l&auml;nsipuolella on mets&auml;suo, jonka nimi on Ukonsuo. <br />
<b>Perim&auml;tietoa: </b> Olettamuksen mukaan kalliolla on ollut Ukko-jumalan palveluspaikka. Tupakkakallio-nimi on 

kertomuksen mukaan saanut alkunsa siit&auml;, ett&auml; kaskenkaatajat ovat k&auml;yneet kalliolla tupakkatauolla. 

L&auml;hist&ouml;ll&auml; olevat Lanninaho ja Nuoriaho ovat olleet kaskimaita (Emil J&auml;&auml;skel&auml;inen s.1894, 

1969). </p>
</div> <div id='b89' style="display:none;">
<p><b>Paikka: </b> Pahasilta <br />
<b>Rinnakkaisnimi: </b> Pahasillannotko <br />
<b>Kuvaus: </b> Pitkospuista tehty silta, joka on kulkenut upottavan suon yli. Suota on kutsuttu Pahansillannotkoksi. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Sillan koillispuolella on metsittynyt aho, nimelt&auml;&auml;n 

Pahansillanaho. <br />
<b>Perim&auml;tietoa: </b> Pahansillanaho on ollut J&auml;&auml;skel&auml;n kaskihalmeena. Silta on ollut hyvin 

huonokuntoinen. </p>
</div> <div id='b90' style="display:none;">
<p><b>Paikka: </b> Huuhkovuori <br />
<b>Kuvaus: </b> Vuori Pulkkilansaaressa Vaajalahden it&auml;puolella. Maanmittaushallituksen vuodelta 1967 laatimassa 

kartassa nimi on virheellisesti Huuhkavuori. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;:</b> Vuoren juurella on Huuhkopelto, joka on jo metsittynyt. <br />
<b>Perim&auml;tietoa: </b> ”Siin&auml; [Huuhkovuorella] oli huuhkajia el&auml;nn&auml; ja siin&auml; niit&auml; on 

pesinn&auml;” (Esa Pulkkinen s.1906, 1969). </p>
</div> <div id='b91' style="display:none;">
<p><b>Paikka: </b> Tahkosaari <br />
<b>Kuvaus: </b> Saari Ryt&ouml;sel&auml;ss&auml; Siekkisensaaren pohjoispuolella </p>
</div> <div id='b92' style="display:none;">
<p><b>Paikka: </b> Aittom&auml;ki<br />
<b>Kuvaus: </b> M&auml;ki Pulkkilansaaren pohjoisosassa. Aittom&auml;ki on my&ouml;s m&auml;ell&auml; sijaitsevan tilan nimi. 

<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;:</b> L&auml;hist&ouml;ll&auml; on Aittolahti-niminen lahti ja lohkotila sek&auml; 

Aittoranta-niminen tila.<br />
<b>Perim&auml;tietoa: </b> Aittom&auml;en tila on alunperin ollut Hyv&ouml;l&auml;n talon torppa. Torppa on perustettu 

1880-luvulla. </p>
<p><b>Paikka: </b> Aittolahti <br />
<b>Rinnakkaisnimi: </b> Rossinm&ouml;kki <br />
<b>Kuvaus: </b> Pulkkilansaaren l&auml;nsisyrj&auml;&auml;n pist&auml;v&auml;n lahden nimi. Aittolahti on my&ouml;s lahden 

pohjoispuolella sijaitsevan lohkotilan nimi. Tilan nimi on ollut aiemmin Rossinm&ouml;kki. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Lahden luoteispuolelle pist&auml;&auml; Aittoharjun niemeke. Niemen 

l&auml;nsipuolella on Aittoluoto. Lahden kaakkoispuolella on korkea Aittovuori. <br />
<b>Perim&auml;tietoa: </b> Lahden rannalla on ollut er&auml;nk&auml;vij&ouml;iden rakentama aitta. Aittolahden tila on ollut 

alunperin Viitalan talon torppa. Torppa on rakennettu 1880-luvulla. </p>
<p><b>Paikka: </b> Aittoranta <br />
<b>Kuvaus: </b> Pikkutila, joka on lohkaistu Hyv&ouml;l&auml;n talon maasta 1930-luvulla. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> L&auml;hist&ouml;ll&auml; on Aittolahti sek&auml; samanniminen tila. 

L&auml;hist&ouml;ll&auml; on my&ouml;s Aittom&auml;ki sek&auml; samanniminen lohkotila. <br />
<b>Perim&auml;tietoa: </b> Tila sijaitsee Hyv&ouml;l&auml;nsalmen rannalla. </p>
</div> <div id='b93' style="display:none;">
<p><b>Paikka: </b> Tervonsaari <br />
<b>Kuvaus: </b> Saari Rasvangissa Pulkkilansaaren pohjoisp&auml;&auml;n koillispuolella. Maanmittaushallituksen vuonna 1967 

laatimassa kartassa Tervonsaaren virheellinen nimitys on Tervassaari. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Pulkkilansaaren pohjoisimman niemen k&auml;rjess&auml; on Tervonkallio. 

Niemen edustalla on Tervonkallionapaja. </p>
</div> <div id='b94' style="display:none;">
<p><b>Paikka: </b> Pienihiekka <br />
<b>Kuvaus: </b> Apajapaikka Pulkkilansaaren pohjoisp&auml;&auml;h&auml;n pist&auml;v&auml;ss&auml; v&auml;h&auml;isess&auml; 

lahdessa. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Pienihiekalta hieman l&auml;nteen on suurempi lahti nimelt&auml;&auml;n 

Hiekkakaarre, jossa Isohiekka-niminen apajapaikka. </p>
<p><b>Paikka: </b> Hiekkakaarre<br />
<b>Rinnakkaisnimi: </b> Pieni-Kukkola, Kukkola <br />
<b>Kuvaus: </b> Rasvangin lahti, joka pist&auml;&auml; Pulkkilansaaren luoteisp&auml;&auml;h&auml;n. Hiekkakaarre on 

my&ouml;s lohkotilan nimi<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Lahdessa on Isohiekka-niminen apaja ja siit&auml; hieman it&auml;&auml;n on 

pienempi lahti, jossa on my&ouml;s apajapaikka nimelt&auml;&auml;n Pienihiekka. <br />
<b>Perim&auml;tietoa: </b> Lahdessa on hiekkaranta. Lohkotila on ollut Vesteril&auml;n talon torppa. Tila sijatsee 

Hiekkakaarteen lahden rannalla. Tilan aikaisempi nimitys on ollut Pieni-Kukkola tai pelkk&auml; Kukkola. </p>
<p><b>Paikka: </b> R&auml;yst&auml;tkivi <br />
<b>Kuvaus: </b> Suuri kivi Pulkkilansaaren pohjoisp&auml;&auml;ss&auml; l&auml;hell&auml; saaren it&auml;rantaa. 

Maanmittaushallituksen vuonna 1967 laatimassa kartassa kiven nimi on virheellisesti R&auml;yst&auml;skivi. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Kivi sijaitsee R&auml;yst&auml;tkivenniityn l&auml;hell&auml;. <br />
<b>Perim&auml;tietoa: </b> Kivess&auml; on ulkoreuna, joka muistuttaa katon r&auml;yst&auml;st&auml;. </p>
</div> <div id='b95' style="display:none;">
<p><b>Paikka: </b> Salonp&auml;&auml; <br />
<b>Kuvaus: </b> Pulkkilansaaren pohjoisosa<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Saaren luoteiskolkassa on Salo-niminen lohkotila. Saaren pohjoisrannan 

l&auml;hist&ouml;ll&auml; on korkea Salonvuori. Saaren luoteiskulman l&auml;nsipuolella on Hyv&ouml;l&auml;nsalmessa 

Salonnurkka-apaja. Saaren keskivaiheilla on mets&auml;inen Salonsuo, joka ulottuu Joutsensalmen kyl&auml;n puolelle. <br />
<b>Perim&auml;tietoa: </b> Salonvuoressa Hyv&ouml;l&auml;n koululaiset k&auml;viv&auml;t m&auml;enlaskussa jopa 

v&auml;litunnilla. Pulkkilansaaren aikaisempi nimitys on ollut Pulkkilansalo. </p>
<p><b>Paikka: </b> Likoharju <br />
<b>Rinnakkaisnimi: </b> Salo <br />
<b>Kuvaus: </b> Kangassel&auml;nne Rulkkilansaaren luoteiskulmassa. Sel&auml;nteen kaakkoisp&auml;&auml;ss&auml; sijaitsevan 

Salon tilan aikaisempi nimitys on my&ouml;s ollut Likoharju. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Sel&auml;nteen l&auml;nsipuolella on Likokaarre-niminen lahti. </p>
<p><b>Paikka: </b> Salo <br />
<b>Rinnakkaisnimi: </b> Likoharju <br />
<b>Kuvaus: </b> Lohkotila, joka on aluperin ollut Salakan talon torppa. Tilan aikasIempi nimitys on ollut Likoharju.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Tila sijaitsee Pukkilansaaressa, jonka aikaisempi nimi on ollut 

Pulkkilansalo. Pulkkilansaaren pohjoisosan nimi on Salonp&auml;&auml;. <br />
<b>Perim&auml;tietoa: </b> Kertoman mukaan Salon torppa on rakennettu 1800-luvun puoliv&auml;liss&auml;. </p>
<p><b>Paikka: </b> Likokaarre <br />
<b>Kuvaus: </b> Rasvangin lahti, joka pist&auml;&auml; Pulkkilansaaren luoteisp&auml;&auml;h&auml;n. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Lahden edustalla on muikkuapaja nimelt&auml;&auml;n Likokaarteen apaja. 

Lahden it&auml;puolella on Likoharju-niminen harjanne, jonka kaakkoisp&auml;&auml;ss&auml; on Salon tila. </p>
</div> <div id='b96' style="display:none;">
<p><b>Paikka: </b> Mukonkaarre <br />
<b>Kuvaus: </b> Rasvangin lahti, joka pist&auml;&auml; Pulkkilansaaren it&auml;syrj&auml;&auml;n. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Lahden kaakkoispuolella on Mukoharju-niminen niemi. <br />
<b>Perim&auml;tietoa: </b> Nimen alkuper&auml;&auml; ei en&auml;&auml; muisteta. </p>
</div> <div id='b97' style="display:none;">
<p><b>Paikka: </b> Talassaari <br />
<b>Kuvaus: </b> Saari Pulkkilansaaren it&auml;rannan l&auml;hist&ouml;ll&auml;. <br />
<b>Perim&auml;tietoa: </b> Talas tarkoittaa telinett&auml;, jossa kuivataan verkkoja, tai venesuojaa. </p>
</div> <div id='b98' style="display:none;">
<p><b>Paikka: </b> Kannassaari <br />
<b>Rinnakkaisnimi: </b> Peuransaaret <br />
<b>Kuvaus: </b> Pitk&auml; ja kapea saari Rasvangissa Ryt&ouml;sel&auml;n keskiosassa. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b>Kannassaaren ja Lev&auml;sensaaren v&auml;linen salmi on nimelt&auml;&auml;n 

Kannassalmi.<br />
<b>Perim&auml;tietoa: </b> Saaren keskiosa on hyvin kapea ja se on kev&auml;isin veden alla. Maanmittaushallituksen vuonna 

1967 laatimassa kartassa on Kannassalmen paikalla virheellisesti nimi Ryt&ouml;salmi. Ryt&ouml;salmi on todellisuudessa 

Ryt&ouml;saaren ja Kannassaaren v&auml;liss&auml;. </p>
</div> <div id='b99' style="display:none;">
<p><b>Paikka: </b> Konttisaari <br />
<b>Kuvaus: </b> V&auml;h&auml;inen saari Ryt&ouml;sel&auml;ss&auml;. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Saaren luoteispuolella on hieman suurempi Laukkusaari. </p>
<p><b>Paikka: </b> Laukkusaari <br />
<b>Kuvaus: </b> Pienehk&ouml; saari Ryt&ouml;sel&auml;ss&auml;. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Saaren kaakkoispuolella on pienempi Konttisaari. <br />
<b>Perim&auml;tietoa: </b> Nimen arvellaan johtuvan saaren muodosta. </p>
</div> <div id='b99a' style="display:none;">
<p><b>Paikka: </b> Turkonsaari <br />
<b>Kuvaus: </b> Aittolahden etel&auml;puolelle pist&auml;v&auml; lahti. <br />
<b>Perim&auml;tietoa: </b> Nimen alkuper&auml;&auml; ei en&auml;&auml; muisteta. </p>
<p><b>Paikka: </b> Ryt&ouml;saari <br />
<b>Kuvaus: </b> Suuri saari Pulkkilansaaren l&auml;nsipuolella.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Ryt&ouml;saaren ja l&auml;heisen Kannassaaren v&auml;linen salmi on 

Ryt&ouml;salmi. Maanmittaushallituksen vuonna 1967 laatimassa kartassa Ryt&ouml;salmi on virheellisesti merkitty 

Kannassalmeksi. Hyv&ouml;l&auml;nsalmen ja Pulkkilansalmen v&auml;linen Rasvangin osa on nimelt&auml;&auml;n 

Ryt&ouml;selk&auml;. <br />
<b>Perim&auml;tietoa: </b> ”Se on semmosta rytteikk&ouml;&ouml;” (Anja J&auml;&auml;skel&auml;inen s.1891, 1969). </p>
</div> <div id='b100' style="display:none;">
<p><b>Paikka: </b> V&auml;tkyl&auml;nkallio <br />
<b>Kuvaus: </b> Korkea kallio Pulkkilansaaressa. <br />
<b>Perim&auml;tietoa: </b> V&auml;tkyl&auml; tarkoittaa pukkis&auml;nky&auml;. </p>
</div> <div id='b101' style="display:none;">
<p><b>Paikka: </b> Kaislalahti <br />
<b>Kuvaus: </b> Pulkkilansaaren it&auml;syrj&auml;n keskipaikkeille pist&auml;v&auml; Rasvangin lahti.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Lahden it&auml;puolelle pist&auml;&auml; Kaislaniemi. Niemen 

etel&auml;puolella on pienehk&ouml; Kaislakaarre-niminen lahti. </p>
</div> <div id='c1' style="display:none;">
<p><b>Paikka: </b> Kettuselk&auml;m&auml; <br />
<b>Rinnakkaisnimi: </b> Kettukangas <br />
<b>Kuvaus: </b> M&auml;ntyj&auml; kasvava Niiniveden harjanneranta, jossa on varhemmin ollut ketun pesi&auml;. 

Kettuselk&auml;m&auml;n koillispuolella on samanniminen tila, josta k&auml;ytet&auml;&auml;n puheessa nime&auml; Huttula. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Kettuselk&auml;m&auml;lt&auml; pohjoiseen p&auml;in on kettuniitty. </p>
</div> <div id='c2' style="display:none;">
<p><b>Paikka: </b> Huttula (kartassa Kettuselk&auml;m&auml;)<br />
<b>Rinnakkaisnimi: </b> Kettuselk&auml;m&auml; <br />
<b>Kuvaus: </b> Kettuselk&auml;m&auml;-nimisen tilan kansanomainen rinnakkaisnimi. Nimi on annettu asukkaiden sukunimen 

mukaan. <br />
<b>Perim&auml;tietoa: </b> Alkujaan paikan nimi oli Kettukangas, selk&auml;m&auml;-nimen on antanut kartantekij&auml;. </p>
</div> <div id='c3' style="display:none;">
<p><b>Paikka: </b> Rantala <br />
<b>Kuvaus: </b> Vanha tila Niiniveden rannassa. </p>
</div> <div id='c4' style="display:none;">
<p><b>Paikka: </b> Kaivanto <br />
<b>Kuvaus: </b> Kuoriniemess&auml; oleva kapea kohta, jonka yli vedet&auml;&auml;n veneet. Samanlainen ylityspaikka on 

my&ouml;s Haudanniemess&auml;.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Kaivannon l&auml;hell&auml; on Kaivannonkallio sek&auml; 

Kaivannonharju-niminen huvila. </p>
</div> <div id='c5' style="display:none;">
<p><b>Paikka: </b> Rantakyl&auml; <br />
<b>Kuvaus: </b> Kyl&auml;kunta, johon kuuluvat Kuorilahden rannalla olevat Vehmaan, Maunolan, Kuorilahden, Tasangon ja 

Rantalan tilat. (Huom! Karttoihin Rantakyl&auml; on merkitty virheellisesti liian l&auml;nteen paikalle, jossa sijaitsee 

Hiidenmaa.) </p>
</div> <div id='c6' style="display:none;">
<p><b>Paikka: </b> Vehmaa<br />
<b>Kuvaus: </b> Kuorilahdesta lohkaistu tila. Samalla nimell&auml; tunnetaan my&ouml;s M&auml;ntyl&auml;n tilan 

pohjoispuolella ollut Eljakselan torppa. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Entisen Vehmaan torpan pohjoispuolella on jyrkk&auml; Vehmaankallio, samoin 

Vehmaansuo ja Vehmaanniitty. </p>
</div> <div id='c7' style="display:none;">
<p><b>Paikka: </b> Isoniitty <br />
<b>Kuvaus: </b> Isokokoinen niitty Vehmaan tilan etel&auml;puolella. <br />
</p>
</div> <div id='c8' style="display:none;">
<p><b>Paikka: </b> Tasanko <br />
<b>Kuvaus: </b> Tila Kuorilahden rannalla<br />
<b>Perim&auml;tietoa: </b> Tilalla ovat asuneet ainakin Ville Puranen, Stihl, Tukiaiset ja J&auml;&auml;skel&auml;iset. 

Tukiainen ajoi hevosella postia Tervosta Haapam&auml;elle. Tukiaisen em&auml;nt&auml; hukkui kaivoon. </p>
</div> <div id='c9' style="display:none;">
<p><b>Paikka: </b> Laamanen <br />
<b>Kuvaus: </b> Metsittynyt niitty Kuorilahden rannalla. </p>
</div> <div id='c10' style="display:none;">
<p><b>Paikka: </b> Tyhj&auml;nkasvaja<br />
<b>Perim&auml;tietoa: </b> Mets&auml;, josta aikoinaan yritettiin raivata peltoa. Pelto kasvoi kuitenkin niin huonosti, ettei 

sit&auml; kannattanut viljell&auml;, ja sen annettiin metsitty&auml;. (Lauri Puranen, s. 1926, 1981) </p>
</div> <div id='c11' style="display:none;">
<p><b>Paikka: </b> Maunola<br />
<b>Kuvaus: </b> Kuorilahdesta vuoden 1950 tienoilla lohkaistu tila. <br />
<b>Perim&auml;tietoa:</b> Nimi on annettu is&auml;nn&auml;n etunimen mukaan. </p>
</div> <div id='c12' style="display:none;">
<p><b>Paikka: </b> Notkola <br />
<b>Kuvaus: </b> Tila, jonka l&auml;hell&auml; on notkelma ja siin&auml; pieni puro. Entinen M&auml;enp&auml;&auml;n torppa. 

</p>
</div> <div id='c13' style="display:none;">
<p><b>Paikka: </b> Tanneri <br />
<b>Kuvaus: </b> Niitty Haapam&auml;en luoteispuolella.<br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Niityn it&auml;puolella on Tannerinkallio. <br />
<b>Perim&auml;tietoa: </b> Tannerista vedet virtaavat Niiniveteen, Tannerista l&auml;htien taas pohjoiseen Suostuun 

p&auml;in. </p>
</div> <div id='c14' style="display:none;">
<p><b>Paikka: </b> Santtiapaja<br />
<b>Kuvaus: </b> Apajapaikka Niiniveden Kuorilahdessa. Santtiapaja-nimell&auml; voidaan tarkoittaa my&ouml;s mit&auml; tahansa 

hyv&auml;&auml; apajapaikkaa. (Ukko Hentunen, s. 1922, 1981.)<br />
<b>Perim&auml;tietoa: </b> ”Siit&auml; syven ja siit&auml; kokkeiltiin, onko kala maessa”. (Lauri Puranen, s.1926, 1981.) 

</p>
<p><b>Paikka: </b> Haanalusapaja <br />
<b>Kuvaus: </b> Niiniveden Kuorilahdessa oleva apajapaikka, jonka l&auml;hell&auml; rannassa on ollut lehm&auml;haka. </p>
<p><b>Paikka: </b> Talvitienapaja <br />
<b>Kuvaus: </b> Apajapaikka Niiniveden Kuoriniemen l&auml;nsipuolella paikassa, jonka l&auml;hell&auml; on ennen kulkenut 

talvitie. </p>
<p><b>Paikka: </b> Laulaisranta<br />
<b>Kuvaus: </b> Niiniveden Kuorilahdessa oleva apajapaikka, jonka l&auml;hell&auml; rannalla on joskus asunut Laulaisia 

M&auml;enp&auml;&auml;n torpassa. </p>
</div> <div id='c15' style="display:none;">
<p><b>Paikka: </b> Lehtosaari <br />
<b>Kuvaus: </b> Lehtipuita kasvava saari Niinivedess&auml;. </p>
</div> <div id='c16' style="display:none;">
<p><b>Paikka: </b> Tarvaisensuo <br />
<b>Kuvaus: </b> Suo, joka on entist&auml; peltoa. <br />
<b>Perim&auml;tietoa: </b> Pellon laidassa on ollut m&ouml;kki, jossa on asunut Tarvaisia. M&ouml;kiss&auml; on asunut 

r&auml;&auml;t&auml;li Tarvainen. </p>
</div> <div id='c17' style="display:none;">
<p><b>Paikka: </b> Hiidenmaa (puheessa Hiienmaa) <br />
<b>Rinnakkaisnimi: </b> Tiitil&auml; <br />
<b>Kuvaus: </b> Laajanlahden, Hiidenlammen ja Hiidenlahden lounaispuolelle j&auml;&auml;v&auml; alue. Nimen 

alkuper&auml;st&auml; ei ole tietoa. Karttaan on merkitty Hiidenmaan paikalle virheellisesti Rantakyl&auml;. Hiidenmaa on 

my&ouml;s kankaalla sijaitsevan talon nimi, jonka vanhentunut rinnakkaisnimi on Tiitil&auml;. Kartassa on nimen puhekielinen 

muoto Hiienmaa. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Hiidenmaalla on Vehmaan tilan niitty nimelt&auml;&auml;n Hiidenniitty. 

Hiidenlahdessa l&auml;hell&auml; Hiidenmaan taloa on Ollikaisen talo. </p>
<p><b>Paikka: </b> Tiitil&auml; <br />
<b>Rinnakkaisnimi: </b> Hiidenmaa <br />
<b>Kuvaus: </b> Hiidenmaa-nimisen tilan vanhentunut rinnakkaisnimi, joka on annettu asukkaiden sukunimen (Tiitinen) mukaan. 

</p>
<p><b>Paikka: </b> Hiidenlampi (puheessa Hiienlampi, Hiijenlampi) <br />
<b>Kuvaus: </b> Lampi Laajankankaalla. <br />
<b>Muita paikkaan liittyvi&auml; nimi&auml;: </b> Hiidenlammen luoteispuolella on Hiidenlahti ja lahden rannalla on pelto 

nimelt&auml;&auml;n Hiidenlahdensuo. Suo on ollut viljelyksess&auml; viel&auml; 1970-luvulla. Hiidenlahden etel&auml;puolella 

on Hiidenniemi ja niemess&auml; on jyrkk&auml; ja kallioinen m&auml;ki, jonka nimi on Hiidenvuori. </p>
<p><b>Paikka: </b>Pellonp&auml;&auml;naho<br />
<b>Kuvaus: </b> Metsittynyt aho Hiidenlahden rannalla olevan pellon etel&auml;p&auml;&auml;ss&auml;. </p>
<p><b>Paikka: </b> Y&ouml;haka<br />
<b>Kuvaus: </b> Entinen karjahaka, jossa on pidetty lehm&auml;t ja hevonen y&ouml;t&auml;. </p>
<p><b>Paikka: </b> Vuorenkangas <br />
<b>Kuvaus: </b> Kangas Hiidenvuoren etel&auml;rinteess&auml; </p>
<</div> <div id='c18' style="display:none;">
<p><b>Paikka: </b> Pieniniemi <br />
<b>Kuvaus: </b> Pieni niemi Rantakankaan etel&auml;p&auml;&auml;ss&auml;. </p>
</div> <div id='c19' style="display:none;">
<b>Nimi: </b>Kuorlahti
<br /><b>Rinnakkaisnimi:</b> Kuorelahti, Kuorilahti
<br /><b>Paikan kuvaus: </b>Niiniveden lahti ja tila Kuorlahden rannalla. 
<br /><b>Muita paikkaan liittyviä nimiä:</b> Kuorlahden eteläpuolella on Kuorniemi ja niemessä on samanniminen tila, joka on entinen Laajan torppa. Kuorlahden itäpuolella on Haapamäen rinteessä Kuorvuori-niminen mäki. Kartassa nimien kirjoistusasu noudattaa puhekielen muotoa.
<b>Perimätietoa: </b>Kuorlahden tilan asukkaat ovat tulleet Haapamäeltä Puralan talosta.
<br /><br />
<b>Nimi: Surmanlaani</b>
<br /><b>Paikan kuvaus:</b> Kuoriniemen ranta.
<b>Perimätietoa:</b> Rantaan on aikoinaan paleltunut Tilda Jääskeläinen kuoliaaksi. Tilda oli lähtenyt kauppa- ja apteekkiasioille hiihtäen Niiniveden jäätä pitkin. Talvituisku peitti kuitenkin jäljet ja paaluumatka oli raskas. Voimat uupuivat Tildan päästyä lähelle rantaa. Hänet löydettiin kuoliaaksi paleltuneena.

</div> <div id='c19a' style="display:none;">
<b>Nimi:</b> Pönkäsaari
<br><b>Paikan kuvaus:</b> Saari Niinivedessä Kuoriniemen länsipuolella.
<b>Perimätietoa:</b> Nimen alkuperää ei tiedetä.

</div> <div id='c20' style="display:none;">
<p><b>Paikka: </b> Salmela <br />
<b>Kuvaus: </b> Kuoriniemess&auml; oleva tila, jota pidet&auml;&auml;n kes&auml;m&ouml;kkin&auml;. <br />
<b>Perim&auml;tietoa: </b> Varhemmin Salmela on ollut Laajan talon m&ouml;kki ja siin&auml; on asunut kyl&auml;n suutari. 

Suutarin nimi oli Mikko Huuskonen. Mikon vaimo Emma oli sanottiin olevan ”unohtunut Luojalta” yhdeks&auml;ksi vuodeksi. 

H&auml;n makasi tuon ajan halvaantuneena. </p>
</div>
<div id='d1' style="display:none;">
<b>Paikka:</b> Tyvilehto<br /><br />
<b>Kuvaus:</b> Hävinnyt Eljakselan torppa Lehdonpellon (puheessa Lehonpellon) laidassa
<b>Muita paikkaan liittyviä nimiä: </b>Latvalehto, Lehdonpelto<br />
<b>Perimätietoa:</b> Lehdon rannassa on ollut laivalaituri, johon on tuotu myös kauppaan tulevat tavarat.
<br /><br />
<b>Paikka:</b> Lehonranta<br />
<b>Rinnakkaisnimi:</b> Tyvilehto<br />
<b>Kuvaus: </b>Laivalaituri <br />
<b>Perimätietoa:</b> Kerran Viitasaari-laiva toi tavaraa Haapamäen kaupalle. Kauppaan oli tulossa toppasokeria. Yksi toppa putosi veteen ja ehti upota. Laivan jatkettua matkaa pojat sukelsivat topan ylös. Pojilla oli ”makkeet päevät”.

</div><div id='d2' style="display:none;"><br />
<b>Paikka:</b> Eljaksela<br />
<b>Kuvaus:</b> Haapamäen etelärinteellä sijaitseva suuri maatila. Eljakselan kantatalo oli Pekkala. Ensimmäisen Eljakselan isännän nimi oli Eljas. Muita paikkaan liittyviä nimiä: Haapamäen luoteispuolella olevan metsän nimi on Eljakselankorpi. Eljakselan tilalla käytössä ollutta nimistöä ovat mm.  Raivioniitty,Isonmäenniitty, Savihautalato, Nurkkalato, Heinäkorpi, Porttilato, Kenkämänlato<br />
Perimätietoa: Isojen talojen tapaan Eljakselastakin lainattiin rahaa tarvitseville. Gabriel-isännällä 1800-luvulla oli luottorenkinä Hämäläinen, Verkkolahden Hämäläisiä. Hämäläinen kertoi Gabrielille tarvitsevansa rahaa talon ostoon. Gabriel antoi rahakirstun avaimen luottorengilleen ja sanoi: ”Ota niin paljon kuin tarviit, mutta elä anna avainta akoille”. Renki osti Niiniveden takaa Lamminpään. Näin Hämäläiset tulivat Niiniveden taakse. (Esa Huttunen, 2006.)
<br />
<b>Perimätietoa: </b>Eljakselan Gabriel ja Aron Hermanni olivat molemmat nuotalla Iisvedellä. Jostakin syystä Gabrielin lähtiessä vetämään nuottaa renkinsä kanssa nuotat meni ristiin Hermannin nuotan kanssa. Gabriel sanoi rengilleen: ”Oot sinä riski, mutta nyt souva”. Gabriel pelkäsi kotiin tultuaan, että nyt tuli vihat naapurin kanssa. Asia kuitenkin sovittiin. (Osmo Puranen, s. 1935, 2006.)
<br /><br />

<b>Paikka:</b> Pätkälä<br />   
<b>Kuvaus: </b>Eljakselan työväen asunto.<br />
<b>Muita paikkaan liittyviä nimiä: </b>Pätkälän ympärillä oleva pelto on Pätkänpelto ja koillispuolella oleva kallio Pätkänkallio.<br />
<b>Perimätietoa:</b> Aluksi rakennus oli pieni, koska työmiehiä oli vain yksi. Mutta kun työväkeä tuli enemmän, piti rakennusta laajentaa; siihen tehtiin lisää ”pätkiä” ja samalla uudeksi nimeksi tuli Pätkälä (Ukko Hentunen, s.1922. 1981)
Pätkälän lähellä on ollut Jalmari ja Helmi Jäntin yhden huoneen mökki. Jalmari ja Helmi oli sovittu vihittäväksi Keurulaisen kinkerissä. Rovasti Elovaara kysyi toimituksen edetessä, tahtooko Jalmari Helmin. Jalmari kääntyi ja kysyi: ”Tahtooko joku muu?” Elovaara kysyi uudestaan, ja Jalmari vastasi: ”En sitten millään.” Toimitus loppui siihen, mutta Helmi sanoi lopuksi: ”Tykkee se kuitenniin.” Tämän jälkeen Elovaaran piti mennä pitkälleen, sillä häntä otti sydämestä. Eikä hän jaksanut enää virkaansa hoitaakaan. Vt. pappi sai asian käsiteltäväkseen. Nyt Jalmaria kuitenkin papin taholta vannotettiin, että on etukäteen tehtävä selväksi, tahtooko vai ei. Helluntaina Jalmari ja Helmi vihittiin kristilliseen avioliittoon. Jalmari tunnettiin show-miehenä. Jalmarin kuoltua Helmillä oli ”leipäsutena” Aatto Vikman.
<br /><br />
<b>Paikka:</b> Heinäkorpi<br />
<b>Kuvaus:</b> Pelto metsän keskellä Eljakselan talosta kaakkoon.<br />
<br /><br />
<b>Paikka:</b> Hiililato <br />
<b>Kuvaus:</b> Eljakselan itäpuolella Myllypellon lähellä oleva lato, jota on aiemmin käytetty hiilivarastona.

</div><div id='d3' style="display:none;"><br /><br />
<b>Paikka:</b> Aro   <br />
<b>Kuvaus:</b> Vanha tila Haapamäellä, lohkaistu Puralasta 1800-luvulla.<br />
<b>Muita paikkaan liittyviä nimiä:</b> Solansuunmutka<br />
<b>Perimätietoa: </b>Aron pihapiirissä on Luikka-niminen asuintalo, jossa on asunut ja asuu sekä talon omaa väkeä että työntekijöitä. Arosta Aholaan menevän tien varressa on Louhu, jossa asui ennen Aron työnjohtajia, mm. Säilä ja Lemmetty. Jatkosodan aikana Louhulla asui inkeriläinen Huopalaisen perhe.
<br />
<b>Perimätietoa:</b> Eljakselan Gabriel ja Aron Hermanni olivat molemmat nuotalla Iisvedellä. Jostakin syystä Gabrielin lähtiessä vetämään nuottaa renkinsä kanssa nuotat meni ristiin Hermannin nuotan kanssa. Gabriel sanoi rengilleen: ”Oot sinä riski, mutta nyt souva”. Gabriel pelkäsi kotiin tultuaan, että nyt tulivihat naapurin kanssa. Asia kuitenkin sovittiin. (Osmo Puranen, s. 1935, 2006.)
<br /><br />
<b>Paikka:</b> Saunahaka  <br /> 
<b>Kuvaus:</b> Entinen karjahaka, jonka lähellä on ollut sauna.<br />
<b>Perimätietoa:</b> Haka ulottui Aron koivukujan päähän saakka. Eljakselasta kaupalle päin oli iso saunarakennus, ja kaivo oli saunan sisäpuolella. Lähellä oli myös paja. Haapamäen kylän urheilukenttä sijaitsi Saunahaassa. Kentällä pelattiin paljon pesäpalloa. Aitaus oli myös sikojen laitumena, eikä ollutkaan harvinaista, että kenttä oli sikojen tonkima.
<br /><br />
<b>Paikka:</b> Vasikanhäntä   <br />
<b>Kuvaus:</b> Notkelma, jossa on lähde. Vasikanhännän alapuolella on nyttemmin melkein kuivunut Luikkalampi 

</div><div id='d4' style="display:none;"><br /><br />
<b>Paikka:</b> Niittylä<br />
<b>Kuvaus:</b> Hävinyt mökki Laajan itäpuolella, tien alkupuolella.<br />

</div><div id='d5' style="display:none;"><br /><br />
<b>Paikka:</b> Ahola<br />
<b>Kuvaus:</b> Vanha tila Haapamäellä, syntynyt Mäenpään kanssa Mattilan jaossa 1826.<br />
<b>Muita paikkaan liittyviä nimiä:</b> Itäpelto on pelto Aholan itäpuolella. Eteläpelto on pelto Aholan eteläpuolella. Pohjoisrinne on rinnepelto Aholan tilan pohjoispuolella.<br />
<b>Perimätietoa:</b> Aholan talon pihanpääkamarissa sijaitsi Haapamäen ensimmäinen kauppa ja myöhemmin Karttulan Osuusliikkeen Haapamäen myymälä. Myymälänhoitajana oli Numminen. Myymälä muutti myöhemmin omaan kiinteistöön Arontien ja maantien risteykseen. Nummiskammari ja Nummistupa jäivät Aholan pihalle. Nummistupa on myöhemmin siirretty Vesannon Tiitilänkylälle.

</div><div id='d6' style="display:none;"><br /><br />
<b>Paikka:</b> Mäenpää<br />
<b>Kuvaus:</b> Tila maantieltä Haapamäelle nousevan tien päässä.  <br />
<b>Perimätietoa: </b>Tila on perustettu 1826, jolloin Mattilan tila jaettiin Aholaksi ja Mäenpääksi. Mäenpäässä on asunut Purasia. Toisen maailmansodan aikana Mäenpäässä asuivat Karjalasta siirtolaisena tullut Esteri Fali poikansa Ilmarin kanssa, sodan jälkeen tila siirtyi samoin siirtolaisina tulleille Lujasille.

</div><div id='d7' style="display:none;"><br /><br />
<b>Paikka:</b> Tuomioniemi<br />
<b>Kuvaus:</b> Vekaraniemi, Tuomioniemi ja Hauanniemi sijaitsevat peräkkäin Haapamäellä Iisveden luoteisrannalla. <br />
<b>Perimätietoa:</b> August Kannisen (Kannisen suvun vaiheista, 1992) mukaan Vekaraniemellä asui joku vekara, joka oli tieltä pois raivattava. Hänet tuomittiin Tuomioniemellä ja päiviltä pois päästettynä haudattiin Hauanniemeen.
<br /><br />
<b>Paikka: </b>Tuomioniemi<br />
<b>Kuvaus:</b> Iisveteen pistävä pitkä ja kapea niemi.<br />
<b>Muita paikkaan liittyviä nimiä:</b> Tuomioniemen länsipuolella on Tuomiolahti.<br />
<b>Perimätietoa:</b> Niemessä kerrotaan olleen vanha käräjäpaikka, mistä ovat merkkeinä rinkiin asetetut kivet ja rannassa kasvava iso petäjä, johon raipparangaistukseen tuomitut sidottiin (Martti Pöysti s.1937, 1981). ”Tuomioniemessä tuomittiin, Siverissä siunattiij ja Haovanniemessä haovattii” (Niilo Hentunen s.1931, 1981)
<br /><br />
<b>Paikka: </b>Margareta<br />
<b>Kuvaus: </b>Apajapaikka Iisvedessä Tuomiolahdella. <br />
<b>Perimätietoa:</b> Nimi on annettu Heikkilän Margareta-nimisen tamman mukaan, joka hukkui lahteen joskus 1930-luvulla (Ukko Hentunen s.1922, 1981).
<br /><br />
<b>Paikka:</b> Harju<br />
<b>Kuvaus:</b> Apajapaikka Iisvedessä Tuomioniemen lounaisrannalla. <br />
<b>Muita paikkaan liittyviä nimiä:</b> Vekaroniemen rannalla, vastapäätä Harjua on Kuusikkoharju-niminen apajapaikka. 

</div><div id='d8' style="display:none;"><br /><br />
<b>Paikka:</b> Vekaroniemi<br />
<b>Rinnakkaisnimi:</b> Wekaraniemi<br />
<b>Kuvaus: </b>Iisveteen pistävä niemi, jonka nimi ollut Haapamäen kalavesilohkokunnan vuoden 1914 kartan mukaan ollut Wekaraniemi. Vekaroniemi, Tuomioniemi ja Hauanniemi sijaitsevat peräkkäin Haapamäellä Iisveden luoteisrannalla. <br />
<b>Muita paikkaan liittyviä nimiä:</b> Vekaroniemen länsipuolella on Vekarolahti, jota kutsutaan myös Heikkilänlahdeksi. Vekaroniemen pohjoispäässä on mäki, jonka nimi on Vekarovuori. Vuoren itäpuolella on Vekaropuro, joka laskee Karhukankaalta Tuomiolahteen. Vekaropuroon laskee myös Kettulanlammesta alkava Pöksypuro. Vekaronimellä on Heikkilä-niminen tila, josta käytetään myös nimeä Vekaroheikkilä.<br />
<b>Perimätietoa:</b> Nimen alkuosa palautuu vanhaan vekara-sanaan, joka tarkoittaa varsijousen viritysratasta (Saloheimo: Rautalammin historia s. 21). August Kannisen (Kannisen suvun vaiheista, 1992) mukaan Vekaraniemellä asui joku vekara, joka oli tieltä pois raivattava. Hänet tuomittiin Tuomioniemellä ja päiviltä pois päästettynä haudattiin Hauanniemeen.
<br /><br />
<b>Paikka:</b> Paskaluoto<br />
<b>Kuvaus: </b>Pieni, useimmiten veden alla oleva luoto Vekarolahdessa.<br />

</div><div id='d9' style="display:none;"><br /><br />
<b>Paikka: </b> Haudanniemi (puheessa Hauanniemi)<br />
<b>Rinnakkaisnimi: </b>Hautaniemi (Haapamäen kalavesilohkokunnan kartassa vuodelta 1914).<br />
<b>Kuvaus:</b> Vekaraniemi, Tuomioniemi ja Hauanniemi sijaitsevat peräkkäin Haapamäellä Iisveden luoteisrannalla. <br />
<b>Muita paikkaan liittyviä nimiä:</b> Haudanniemen länsipuolella on Haudanlahti ja lahden rannassa Haudanlahdenniitty.<br />
<b>Perimätietoa: </b>August Kannisen (Kannisen suvun vaiheista, 1992) mukaan Vekaraniemellä asui joku vekara, joka oli tieltä pois raivattava. Hänet tuomittiin Tuomioniemellä ja päiviltä pois päästettynä haudattiin Hauanniemeen. Niilo Hentusen (s.1931, 1981) mukaan niemeen on haudattu mies, joka on Tuomioniemessä tuomittu ja Siverissä siunattu.

</div><div id='d10' style="display:none;"><br /><br />
<b>Paikka: </b>Haapamäki<br />
<b>Kuvaus: </b>Mäki ja kylän nimi.<br />
<b>Muita paikkaan liittyviä nimiä: </b>Seudulla on myös muita haapa-alkuisia nimiä kuten Haapalahti ja Haapaniemi. <br />
<b>Perimätietoa:</b> Kylältä on löydetty jäänteitä kivikauden asutuksesta. Pysyvästi Haapamäellä on asuttu viimeistään eräasutuksen ajoilta lähtien, vanhimmat kirjalliset tiedot kylältä ulottuvat 1500-luvun puoliväliin.

</div><div id='d11' style="display:none;"><br /><br />
<b>Paikka: </b>Hiekkakangas   <br />
<b>Kuvaus: </b>Hiekkapohjainen mäntymetsä Nääliönkallion pohjoispuolella. Kartoissa virheellinen nimi Hiekkapelto.

</div><div id='d12' style="display:none;"><br /><br />
<b>Paikka: </b>Aittokallio    <br />
<b>Kuvaus:</b> Kallio Haapamäellä. <br />
<b>Muita paikkaan liittyviä nimiä:</b> Aittokallion ja Nääliönkallion välissä sijaitsee Aittosuo.<br />
<br />
<b>Paikka:</b> Hirvikivi   <br />
<b>Kuvaus:</b> Aittokalliolla oleva iso kivi.<br />
<b>Perimätietoa:</b> Arvellaan, että kiveltä on joskus vahdittu hirviä.<br />


</div><div id='d13' style="display:none;"><br /><br />
<b>Paikka:</b> Villenniitty   <br /> 
<b>Rinnakkaisnimi:</b> Eeron niitty<br />
<b>Kuvaus:</b> Varhemmin niityn on omistanut Ville-niminen mies, nykyisin niitty tunnetaan Eeron niittynä.

</div><div id='d14' style="display:none;"><br /><br />
<b>Paikka: </b>Turvesuon kangas   <br />
<b>Kuvaus:</b> Kangas, jonka länsipuolella olevalta suosta on nostettu turvetta.<br />
<b>Perimätietoa: </b>Turvetta on säilytetty kankaan laidassa olleessa turveladossa. (Niilo Hentunen, s. 1932, 1981)

</div><div id='d15' style="display:none;"><br /><br />
<b>Paikka:</b>  Antinniitty    <br />
<b>Kuvaus:</b> Metsittynyt niitty, jonka on raivannut Antti-niminen mies.<br />

</div><div id='d16' style="display:none;"><br /><br />
<b>Paikka:</b> Lamminmäki   <br />
<b>Kuvaus:</b> Mäki Karhukankaan pohjoispäässä Likolammen lähellä sekä Lamminmäellä sijaitsevan tilan nimi.

</div><div id='d17' style="display:none;"><br /><br />
<b>Paikka: </b>Kettula (kartassa Mäkelä)<br />
<b>Rinnakkaisnimi:</b> Mäkelä<br />
<b>Kuvaus:</b> Mäkelän tilan kansanomainen nimitys, virallista nimeä ei puhekielessä käytetä.<br />
<b>Perimätietoa:</b> 1930-luvulla Mäkelässä sijaitsi yksi Suomen tuon ajan suurimmista kettutarhoista, ja enimmillään tilalla oli useita satoja sinikettuja. Tarhan omisti Aholan tilan poika Aapeli Korhonen (1879-1938) ja tilaa hoiti hänen veljensä Kalle. Aapeli Korhonen oli lähtenyt nuorena siirtolaiseksi Amerikkaan ja muutti Yhdysvalloissa nimensä Abel Adamsiksi. Palattuaan Suomeen vuonna 1912 hän perusti elokuvayhtiö Adams Filmi Oy:n ja avasi ensimmäisen elokuvateatterinsa Helsingissä. Parissa vuosikymmenessä yhtiö kasvoi yhdeksi Suomen suurimmista elokuvien levittäjä- ja tuottajayhtiöistä. 
 
</div><div id='d18' style="display:none;"><br /><br />
<b>Paikka: </b>Kummunpelto   <br />
<b>Kuvaus:</b> Pelto, jonka keskellä on kumpare.<br />

</div><div id='d19' style="display:none;"><br /><br />
<b>Paikka:</b> Hiilirinne   <br />
<b>Rinnakkaisnimi:</b> Hiilimökinrinne<br />
<b>Kuvaus: </b>Rinteessä on ennen poltettu hiiliä. Rinteen päällä on ollut hirsimökki, jossa hiiliä on säilytetty.

</div><div id='d20' style="display:none;"><br /><br />
<b>Paikka:</b> Nääliönniitty   <br />
<b>Rinnakkaisnimi:</b> Puronniitty<br />
<b>Kuvaus:</b> Niitty, jonka halki kulkee Puikkosoja. Oja on Puikkosen aikanaan kaivama, lähtee Nääliönkalliolta ja laskee Suostuun.<br />
<b>Muita paikkaan liittyviä nimiä:</b> Nääliönkallio sijaitsee Nääliönniityn kaakkoispuolella.<br />

</div><div id='d21' style="display:none;"><br /><br />
<b>Paikka:</b> Ruutanalampi  <br />
<b>Kuvaus:</b> Lampi on syntynyt, kun paikalta on nostettu mutaa. Myöhemmin lampeen on istutettu ruutanoita.<br />

</div><div id='d22' style="display:none;"><br /><br />
<b>Paikka:</b> Kauramäki   <br />
<b>Kuvaus:</b> Mäki Ruutanalammen eteläpuolella ja tila Haapamäen etelärinteellä.<br />

</div><div id='d23' style="display:none;"><br />
<b>Paikka:</b> Suoaho   <br />
<b>Kuvaus:</b> Suoperäinen pelto.<br />
<b>Perimätietoa:</b> Suoaholla, maantien itäpuolella, oli punainen mökki. Siinä Oskari Simonen surmasi vaimonsa ja itsensä. Heiltä jäi poika, Olavi. Olavin otti huostaansa Oskarin sisar, Selina, joka oli Jokiniemessä Kukkosessa emäntänä ja eli leskenä viiden poikansa kanssa. Suoaholla on asunut myös Pirskasia.Maantien toisella puolella asui mökissään Oravainen, joka oli metsäyhtiöiden kymppinä. Oravainen hirttäytyi Aron pellolla olleeseen latoon. Tämän jälkeen Oravaisen mökissä asui toisen maailmansodan aikaan inkeriläinen Hyytiäisen perhe.<br />

</div><div id='d24' style="display:none;">
<b>Paikka: </b>Tienpää  <br />
<b>Rinnakkaisnimi:</b> Lemmetty<br />
<b>Kuvaus:</b> Vuonna 1951 perustettu tila, jolle vie vain yksi tie. Tilaa kutsutaan myös asukkaiden nimellä Lemmetty.
<br />
<b>Perimätietoa:</b> Tienpään tila on erotettu Mäenpäästä.<br /><br />

<b>Paikka:</b> Pohjoisenkorpi   <br />
<b>Rinnakkaisnimi:</b> Jakoperä<br />
<b>Kuvaus: </b>Metsäinen alue Tienpään ja Notkolan välillä, Mäenpään entisiä maita.<br />

</div><div id='d25' style="display:none;"><br /><br />
<b>Paikka:</b> Hiekkaniitty   <br />
<b>Rinnakkaisnimi: </b>Hiekkapelto<br />
<b>Kuvaus:</b> Hiekkaniityn nimi on merkitty karttoihin virheellisesti muotoon Hiekkapelto.<br />

</div><div id='d26' style="display:none;"><br /><br />
<b>Paikka:</b> Solansuunmutka   <br />
<b>Rinnakkaisnimi:</b> Aronmutka<br />
<b>Kuvaus:</b> Jyrkkä mutka maantiessä Aholan ja Aron maiden rajalla. Ennen pellot oli aidattu, ja silloin aitojen välissä oli kapea sola. (Irma Leskinen, s. 1926, 1981).

</div><div id='d27' style="display:none;"><br /><br />
<b>Paikka: </b>Purala   <br />
<b>Kuvaus: </b>Vanha asuinpaikka Haapamäen koulusta etelään<br />
<b>Perimätietoa: </b>Tiettävästi 1800-luvun lopulla hävinnyt talo, jossa on asunut Purasia. Puralan eteläpuolella on ollut toinen vanha kantatalo, Pekkala.
<br /><br />
<b>Paikka: </b>Pekkala  <br /> 
<b>Kuvaus:</b> 1900-luvun alussa kadonnut vanha asuinpaikka Haapamäellä.<br />
<b>Perimätietoa:</b> Pekkala on Haapamäen vanhimpia taloja, aikoinaan siinä on asunut Pekka Raatikainen. Eljaksela on lohkaistu Pekkalasta. Ennen kuin Haapamäen koulu rakennettiin, kansakoulu toimi mm. Pekkalan tuvassa. Nykyisin Pekkalasta on jäljellä enää iso pihlajapuska entisen kellarin paikalla.

</div><div id='d28' style="display:none;"><br /><br />
<b>Paikka:</b> Kinttukäänne  <br /> 
<b>Kuvaus:</b> Haapamäen koululle ja Mäenpään tilalle vievän tien risteys, jossa on ennen ollut Eljakselan samanniminen mäkitupa.

</div><div id='d29' style="display:none;"><br /><br />
<b>Paikka:</b> Sikokumpu   <br />
<b>Kuvaus:</b> Vuonna 1970 lakkautetun Haapamäen koulun paikan kansanomainen nimi.<br />

</div><div id='d30' style="display:none;"><br /><br />
<b>Paikka:</b> Rasi   <br />
<b>Kuvaus: </b> Pelto Haapamäen koillispuolella, entistä kaskimaata. Rasin laidasta kohoaa Haapamäen rinne, jota kutsutaan Rasinrinteeksi.
<br /><br />
<b>Paikka:</b> Raivioniitty <br />
<b>Kuvaus: </b>Metsittynyt niitty Rasinrinteen kaakkoispuolella.<br />
<br /><br />
<b>Paikka:</b> Isonmäenniitty <br />
<b>Kuvaus:</b> Niitty Rasinrinteen itälaidalla.<br />
<br /><br />
<b>Paikka:</b> Savihautalato <br />
<b>Kuvaus:</b> Lato, jonka lähellä on savihauta.<br />
<br /><br />
<b>Paikka:</b> Nurkkalato <br />
<b>Kuvaus:</b> Hävinnyt lato, joka on sijainnut pellon nurkkauksessa.<br />
<br /><br />
<b>Paikka:</b> Porttilato <br />
<b>Kuvaus:</b> Hävinnyt lato, jonka lähellä on ollut karjaportti.<br />
<br /><br />
<b>Paikka:</b> Kenkämänlato <br />
<b>Kuvaus: </b>Hävinnyt lato, joka on sijainnut loivahkolla kumpareella<br />
<br /><br />
<b>Paikka:</b> Isolato <br />
<b>Kuvaus: </b>Iso lato Rasinniityllä.<br />

</div><div id='d31' style="display:none;"><br /><br />
<b>Paikka:</b> Korsunniitty    <br />
<b>Kuvaus:</b> Aholan tilan muista maista erillään oleva niitty.<br />

</div><div id='d32' style="display:none;"><br /><br />
<b>Paikka:</b> Pöksykoski (kartassa Hietikko)<br />
<b>Rinnakkaisnimi: </b>Pöksypuro, Hietikko, Pietun mökki, Pieksumökki, Remes<br />
<b>Kuvaus:</b> Haapamäellä oleva pieni puro ja asuinpaikka puron varrella. Hietikko on asuinpaikan virallinen nimi.
<br />
<b>Perimätietoa:</b> Pöksypuro lähtee Kettulan lammesta Kettulan luota ja laskee Vekarolahteen. Ukko Hentusen (s.1922, 1981) mukaan Eljakselan työmiehet liottivat ennen purossa pihkaisia housujaan. Asuinpaikalla on aiemmin ollut Eljakselan torppa. Pöksykoski on asuinpaikan vanhentunut nimi, nykyisin käytetään nimitystä Pietun mökki.

</div><div id='d33' style="display:none;"><br /><br />

<b>Paikka:</b> Harjula  <br /> 
<b>Kuvaus:</b> Asuintontti Haapamäellä. <br />
<b>Perimätietoa:</b> Harjulassa asui kyläseppä, viitakeseppä, vielä 1960-luvulla.<br />

</div><div id='d34' style="display:none;"><br /><br />
<b>Paikka: </b>Kokkomäki<br />
<b>Kuvaus:</b> Haapamäen korkein kohta 180,2 m meren pinnasta.<br />
<b>Perimätietoa:</b> Kokkomäki on hyvä näköalapaikka. Ennen Kokkomäellä poltettiin juhannuksina kokkoa ja tanssittiin piirileikkejä. Kerma-Kekkonen myi kerran juhannuskokolle lippuja turkki päällä, niin kylmä oli ilma. Tapio Nousiainen Katajamäeltä näytti eräänä juhannuksena kokkoväelle ihmeen ja käänsi letun ilmassa. Kiinan-Kalle eli lähetyssaarnaaja Kalle Korhonen tuli juhannuksena Vesannolta, myöhemmin Helsingistä, Haapamäelle sukulaisvierailulle, jotta sai pitää pitkät puheet kokolla. Kauppias Ferdinand Kontio jatkoi kokkoperinnettä 1970- ja 1980-lukujen vaihteeseen saakka. 1980-luvulla kyläläiset rakensivat mäelle näkötornin entisen kolmiomittaustornin tilalle. Kolmiomittaustornissa lotat olivat hoitaneet ilmavalvontaa toisen maailmansodan aikaan. Koska tornissa oli pakkasöinä kylmä, lotat saivat Ruotsista lahjoituksena susiturkin. Turkkia kutsuttiin ilmavalvontaturkiksi ja sodan jälkeen lotat lahjoittivat sen Tervon seurakunnan kirkkoherralle kinkeriturkiksi.

</div><div id='d35' style="display:none;"><br /><br />
<b>Paikka: </b>Karhukangas<br />
<b>Kuvaus: </b>Vekarovuoren pohjoispuolella oleva mäkinen kangas sekä Lamminmäellä sijaitsevan tilan nimi.
<br />
<b>Perimätietoa:</b> Kerrotaan, että Karhukankalla on aikoinaan tapettu karhu.<br /><br />

</div><div id='d36' style="display:none;"><br /><br />
<b>Paikka:</b> Vuorela <br />
<b>Kuvaus: </b>Tila Vekarovuoren rinteessä, entinen Heikkilän työmiesten asunto.<br />
<b>Muita paikkaan liittyviä nimiä:</b> Alamutka ja Ylämutka<br />

</div><div id='d37' style="display:none;"><br /><br />
<b>Paikka:</b> Alamutka <br />
<b>Kuvaus:</b> Vuorelasta maantielle vievässä tiessä oleva jyrkkä mutka. <br />
<br />
<b>Paikka:</b> Ylämutka<br />
<b>Kuvaus:</b> Vuorelasta maantielle vievässä tiessä jyrkän kumpareen päällä oleva mutka.<br />

</div><div id='d38' style="display:none;"><br /><br />
<b>Paikka: </b>Metsärinne<br />
<b>Rinnakkaisnimi:</b> Vehovuori<br />
<b>Kuvaus:</b> Vekarovuoren rinteellä sijaitseva, siirtolaisten 1940-luvulla perustama tila. Virallinen nimi, ei kansanomaisessa käytössä. Puheessa tilaa kutsutaan asukkaiden sukunimellä ”Vehovuor”.
<br />
<b>Muita paikkaan liittyviä nimiä:</b> Metsärinteestä kaakkoon on Rinne-niminen tila.

</div><div id='d39' style="display:none;"><br /><br />
<b>Paikka:</b> Metsäpelto<br />
<b>Rinnakkaisnimi: </b>Suvinen<br />
<br />
<b>Kuvaus: </b>Vuorelan tilasta erotettu asuintontti. Virallinen nimi, ei kansanomaisessa käytössä. Puheessa tilaa kutsutaan asukkaiden sukunimellä Suvinen tai käytetään nimeä Lautimmökki.

</div><div id='d40' style="display:none;">
<b>Paikka:</b> Ukkola<br />
<b>Kuvaus: </b>Mäntylän tilasta erotettu asuintontti. Nimi on annettu isännän Ukko Hentusen etunimen mukaan.

</div><div id='d41' style="display:none;">
<b>Nimi:</b> Mäntylä
<br><b>Rinnakkaisnimi: </b>Hentunen
<br><b>Paikan kuvaus:</b> Tila on erotettu Heikkilästä itsenäiseksi 1910-luvulla. Tilaa voidaan kutsua myös asukkaiden sukunimellä Hentunen. 

</div><div id='d41b' style="display:none;">
<b>Nimi: </b>Nurkkala
<br><b>Paikan kuvaus: </b>Tila entisen Heikkilän maan pohjoisnurkassa, samalla Peltoaukealla kuin Mäntylä. 

</div><div id='d42' style="display:none;"><br /><br />
<b>Paikka:</b> Korpela<br />
<b>Rinnakkaisnimi:</b> Vatanen<br />
<b>Kuvaus: </b>Autio tila Karhukankaan laidassa. Korpela on virallinen nimi, puheessa tilaa kutsutaan entisten asukkaiden sukunimellä.

</div><div id='d43' style="display:none;"><br /><br />
<b>Paikka: </b>Likolampi<br />
<b>Kuvaus:</b> Soistunut lampi. Kartassa on virheellinen nimi Likosuo.<br />
<b>Perimätietoa: </b>Lammesta on aikoinaan viety mutaa Eljakselan pelloille ja siinä on myös liotettu pellavia.

</div><div id='d44' style="display:none;"><br /><br />
<b>Paikka: </b>Pienilahti<br />
<b>Rinnakkaisnimi:</b> Pankolainen<br />
<br />
<b>Kuvaus:</b> Lahti Iisvedessä Vekarolahden pohjukassa ja tila Pienenlahden rannalla. Puheessa tilaa kutsutaan asukkaiden sukunimellä Pankolainen.
<b>Muita paikkaan liittyviä nimiä: </b>Pienilahden länsipuolella on suurempi Isolahti.
<br />
<b>Perimätietoa:</b> Pienilahden tila on Heikkilästä lohkaistu ja siirtolaisten 1940-luvulla perustama.
<br /><br />
<b>Paikka:</b> Isolahti<br /> 
<b>Kuvaus: </b>Soistuva lahti Vekarolahden pohjukassa.<br />
<b>Muita paikkaan liittyviä nimiä:</b> Isolahden itäpuolella on pienempi Pienilahti.<br />

</div><div id='d45' style="display:none;"><br /><br />
<b>Paikka: </b>Harju <br />
<b>Rinnakkaisnimi:</b> Parviainen<br />
<b>Kuvaus: </b>1950-luvulla Heikkilän talosta lohkaistu tila. Virallinen nimi, ei kansanomaisessa käytössä. Puheessa tilaa kutsutaan asukkaiden sukunimellä.

</div><div id='d46' style="display:none;"><br /><br />
<b>Paikka: </b>Rinne<br />
<b>Rinnakkaisnimi: </b>Savinohvi (Savinoff)<br />
<b>Kuvaus:</b> 1940-luvulla siirtolaisten perustama tila Vekarovuoren rinteessä. Virallinen nimi, ei kansanomaisessa käytössä. Puheessa tilaa kutsutaan asukkaiden nimellä.


</div><div id='d47' style="display:none;"><br /><br />
<b>Paikka:</b> Akanlampi <br />
<b>Kuvaus: </b>Soistunut lampi Vekaroniemessä.<br />
<b>Perimätietoa: </b>Kerran yritettiin Akanlammesta johtaa vettä Heikkilän taloon; rakennettiin puuputket ja hankittiin tuulimoottori. Kun kaikki oli valmiina ja vettä alettiin laskea, ensin särkyi Heikkilän navetassa ollut suuri vesisäiliö ja sen jälkeen loppui Akanlammesta vesi (Arvi Pöysti, s. 1912. 1981). 


</div><div id='d48' style="display:none;"><br /><br />
<b>Paikka: </b>Kuusela  <br />
<b>Kuvaus:</b> 1910-luvulla rakennettu tila Vekarovuoren pohjoispuolella. <br />
<b>Perimätietoa:</b> Lähellä on ollut tiheä kuusikko. Tilan läheisyydessä on Lotmannin pelto. Rautalammin nimismies Erik Slottman omisti 1700-luvun puolivälissä tilan Haapamäellä, ja pelto on kuulunut hänen maihinsa.
<br /><br />
<b>Paikka:</b> Porttila<br /> 
<b>Rinnakkaisnimi:</b> Hyvärinen<br />
<b>Kuvaus: </b>Hävinnyt mökki, jonka tontti on erotettu Kuuselan tilasta. <br />
<b>Perimätietoa:</b> Nimi on annettu kahden lähellä olleen portin perusteella. Paikkaa on kutsuttu myös asukkaiden sukunimellä.
<br /><br />
<b>Paikka:</b> Näremäki <br />
<b>Rinnakkaisnimi:</b> Hävinnyt mökki, jonka tontti on erotettu Kuuselan tilasta.<br /> 

</div><div id='d49' style="display:none;"><br />
<b>Paikka:</b> Lassinsuo <br />
<b>Kuvaus:</b> Suo Akanlammen pohjoispuolella, niemen alkuperästä ei ole tietoa.<br />
<b>Muita paikkaan liittyviä nimiä:</b> Iisvedessä Vekaroniemen kaakkoispuolella on Lassinsaari-niminen pieni saari.

</div><div id='d50' style="display:none;"><br />
<b>Paikka:</b> Manu <br />
<b>Rinnakkaisnimi:</b> Manunen<br />
<b>Kuvaus:</b> Kuuselan tilasta 1950-luvulla erotettu asuintontti. Puheessa paikkaa kutsutaan asukkaiden sukunimellä. 

</div><div id='d51' style="display:none;"><br />
<b>Paikka:</b> Kapeasuo <br />
<b>Kuvaus:</b> Kapea suokaista Vekaroniemessä Tuomiolahden rannalla.<br />

</div><div id='d52' style="display:none;"><br />
<b>Paikka: </b>Tyvelä<br />
<b>Kuvaus: </b>Tila Haudanlahden pohjukassa<br />
<br />
</div><div id='d53' style="display:none;"><br />
<b>Paikka:</b> Kohtiranta <br />
<b>Rinnakkaisnimi:</b> Kohtranta<br />
<b>Kuvaus:</b> Venevalkama Iisveden rannassa. Kartoissa saattaa esiintyä virheellinen nimi Kohtranta.<br />
<b>Muita paikkaan liittyviä nimiä:</b> Kohtirannan pohjoispuolella mantereen ja Syvänniemen välissä on salmi, Kohtirannansalmi. 
<br />
<b>Perimätietoa:</b> Ennen olivat vedet näillä tienoin kalaisat. Niinpä nuottakuntien välillä vallitsi kiihkeä kilpailu santtiapajista (parhaista kalapaikoista) ja kukin nuottakunta laittautui hyvissä ajoin aamulla liikkeelle ehtiäkseen ensiksi apajalle. Venevalkamaan vei vain kapea polku, jolla hämärinä syysaamuina kompastui helposi. Siksi joukon edellä kulki tavallisesti mies näyttäen lydyllä valoa ja huudellen vähän väliä ”Tulukee tätä kohti”. Siitä ranta sai nimen Kohtiranta (Ukko Hentunen, s. 1922, 1981).
<br /><br />
<b>Paikka: </b>Kotirannansalmi<br />
<b>Rinnakkaisnimi: </b>Kohtirannansalmi<br />
<b>Kuvaus:</b> Mantereen ja Syvänniemen välissä Iisvedessa oleva salmi. Nimi esiintyy Haapamäen kalavesilohkokunnan kartassa, joka on vuodelta 1914. Nykyisin käytetään nimeä Kohtirannasalmi. 
<br /><br />
<b>Paikka:</b> Sirrinpuro<br />
<b>Kuvaus:</b> Haapamäeltä Iisveteen Kohtirantaan laskeva pieni puro. <br />
<b>Perimätietoa:</b> Puron nimi johtunee siitä että puro lirisee, ”sirrittää”, ei kohise (Eero Raatikainen, s. 1922, 1981). Puro lähtee Haapamäen entisen kaupan kohdalta.

</div><div id='d54' style="display:none;"><br /><br />
<b>Paikka:</b> Lousti <br />
<b>Kuvaus: </b>Kohtirannansalmen länsiranta. Nimen alkuperästä ei ole tietoa.<br />
<b>Muita paikkaan liittyviä nimiä: </b>Loustinrannan lähellä Iisvedessä on apajapaikka; Loustinsyvä. ”Se on aenut syvä kohta siinä salamessa. Pahalla ilimalla kalat männöö siihen syvennyksee” (Lauri Puranen, s.1926, 1981). Rannassa ollut ennen myös Loustinniitty. 

</div><div id='d55' style="display:none;"><br /><br />
<b>Paikka:</b> Koirakallio <br />
<b>Kuvaus:</b> Syvänniemen päässä oleva kallio. Nimen alkuperästä ei ole tietoa.<br />
<b>Perimätietoa: </b>Kalliolla poltettu juhannuksena kokkoa.<br />

</div><div id='d56' style="display:none;"><br />
<b>Paikka: </b>Pitkäniitty<br />
<b>Rinnakkaisnimi:</b> Siltaniitty<br />
<b>Kuvaus:</b> Entinen Jokelan tilan niitty. Nykyään käytetään uudempaa nimeä Siltaniitty.<br />
<b>Perimätietoa: </b>Nimi on annettu pellon pitkulaisen muodon mukaan. 
<br /><br />
<b>Paikka:</b> Siltaniitty<br />
<b>Rinnakkaisnimi:</b> Pitkäniitty<br />
<b>Kuvaus: </b>Kostea niitty, jossa paljon ojia ja siltoja niiden yli. Niittyä on kutsuttu ennen Pitkäniityksi.
<br /><br />
<b>Paikka: </b>Väliniitty<br />
<b>Rinnakkaisnimi:</b> Pieniniitty<br />
<b>Kuvaus:</b> Siltaniityn ja Isonniityn välissä oleva peltoalue. <br />
<b>Perimätietoa:</b> Niitty kuului aiemmin Jokelan tilaan ja silloin sitä kutsuttiin nimellä Pieninniitty.

</div><div id='d57' style="display:none;"><br />
<b>Paikka:</b> Jokilahti <br />
<b>Kuvaus:</b> Iisvedessä Kohtirannansalmen pohjoispuolella oleva lahti, johon laskee Myllyjoki. <br />
<b>Muita paikkaan liittyviä nimiä:</b> Jokilahden pohjoisrannassa on Jokiniemi. Jokilahden lähellä on myös Jokiharju, Jokela ja Jokiniemi-nimiset tilat.

</div><div id='d58' style="display:none;"><br />
<b>Paikka:</b> Jokiharju<br />
<b>Rinnakkaisnimi:</b> Tähtivaara<br />
<b>Kuvaus:</b> Myllyjoen suussa pienellä kumpareella oleva tila, joka on perustettu 1940-luvulla. Puheessa tilaa kutsutaan asukkaiden sukunimellä.
<br /><br />
<b>Paikka:</b> Hiekkalahti<br />
<b>Kuvaus:</b> Iisvedessä oleva loiva hietikkoinen lahti.<br />
<b>Perimätietoa: </b>Lahden rannalla on myös samanniminen huvila, joka on erotettu Jokiharjun tilasta. Huvilan omistaja on Leo Tähtivaara.

</div><div id='d59' style="display:none;"><br />
<b>Paikka:</b> Jokela<br />
<b>Kuvaus:</b> Vuonna 1928 perustettu tila Jokiniemessä Myllyjoen suussa. <br />

</div><div id='d60' style="display:none;"><br />
<b>Paikka: </b>Pajuluoto<br />
<b>Rinnakkaisnimi:</b> Rajaluoto<br />
<b>Kuvaus:</b> Pajuja kasvava luoto Iisvedessä. <br />

<b>Paikka:</b> Hakala <br />
<b>Rinnakkaisnimi:</b> Hanhinen<br />
<b>Kuvaus: </b>Asuintontti Tuomiolahden rannalla, entinen Heikkilän talon vuokratorppa. Hakala-nimen ohella käytetään asukkaiden sukunimeä.
<br />
<b>Perimätietoa:</b> Tontin paikka on entistä Heikkilän lehmähakaa. <br />

</div><div id='d61' style="display:none;">
<b>Paikka:</b> Suvipelto<br />
<b>Rinnakkaisnimi:</b> Suvinen<br />
<b>Kuvaus: </b>Heikkilän talosta lohkaistu tila. Suvipelto on virallinen nimi. Puheessa tilaa kutsutaan asukkaiden sukunimellä. 

</div><div id='d62' style="display:none;"><br />
<b>Paikka:</b> Korppisaari<br />
<b>Rinnakkaisnimi:</b> Korpinsaari, Korpisaari<br />
<br />
<b>Kuvaus: </b>Syvänniemen eteläpuolella Iisvedessä oleva synkkä autio saari. Kartassa on virheellinen nimi Korpsaari. 
<br />
<b>Muita paikkaan liittyviä nimiä:</b> Korppisaaren lounaispuolella on Korpinluoto, pohjoispuolella on Korpinsalmi ja koillispuolella Korpinniemi. Korpinniemen nimi ollut ennen Korppisenniemi. Korppisaaren luoteispuolella on Korpinsyvä eli Korpinnurkka-niminen apaja. 
<br />
<b>Perimätietoa: </b>Saaressa lienee muinoin asunut Korppinen-niminen mies (Juha Keurulainen s.1957, 1981). Toisaalta saaren arvellaan olleen ennen korppien pesäpaikka (Ukko Hentunen s.1922, 1981).

</div><div id='d63' style="display:none;"><br />
<b>Paikka: </b>Korpinnurkka<br />
<b>Rinnakkaisnimi:</b> Korpinsyvä<br />
<b>Kuvaus: </b>Iisvedessä Korppisaaren luoteispuolella oleva apajapaikka.<br />

</div><div id='d64' style="display:none;"><br />
<b>Paikka: </b>Vesanteri<br />
<b>Kuvaus: </b>Syvänniemen tilan koillispuolella ollut entinen Eljakselan torppa, jossa on asunut Vesandereja (Eero Raatikainen s.1922, 1981).

</div><div id='d65' style="display:none;">
<b>Paikka: </b>Pässinpää<br />
<b>Kuvaus:</b>Iisvedessä Mustanlahden itäpuolella oleva niemi. Nimi esiintyy vuodelta 1914 olevassa Haapamäen kalavesilohkokunnan kartassa, nykyään nimeä ei käytetä.

</div><div id='d66' style="display:none;"><br />
<b>Paikka: </b>Mustalahti<br />
<b>Kuvaus: </b>Tiheän metsän varjostama pohjoisenpuoleinen lahti Syvänniemen päässä Iisvedessä.<br />
<b>Muita paikkaan liittyviä nimiä:</b> Mustasaari on Mustalahden edustalla oleva synkkä saari.

</div><div id='d67' style="display:none;"><br />
<b>Paikka:</b> Arvonsaari<br />
<b>Kuvaus: </b>Saari Syvänniemen lounaispuolella Iisvedessä. Nimen alkuperästä ei ole tietoa. <br />
<b>Muita paikkaan liittyviä nimiä:</b> Arvonsaaren ja Syvänniemen välissä on Arvonsalmi.<br />

</div><div id='d68' style="display:none;"><br />
<b>Paikka: </b>Mursunsuo<br />
<b>Kuvaus: </b>Suoniitty Syvänniemellä. Nimen alkuperästä ei ole tietoa.<br />
<b>Muita paikkaan liittyviä nimiä: </b>Iisvedessä Syvänniemen eteläpuolella on pieni saari, jonka nimi on Mursunsaari.

</div><div id='d69' style="display:none;"><br />
<b>Paikka:</b> Äkäpetäjänapaja<br />
<b>Kuvaus:</b> Apajapaikka Iisvedessä Tuominiemen itärannalla. <br />
<b>Perimätietoa: </b>Rannassa on pari veden päälle kallistunutta mäntyä.<br />

</div><div id='d70' style="display:none;"><br />
<b>Paikka:</b> Korvenalusapaja<br />
<b>Kuvaus: </b>Apajapaikka Iisvedessä. <br />
<b>Perimätietoa: </b>Rannassa kasvaa sankka kuusikko.<br />
<br />
</div><div id='d71' style="display:none;"><br />
<b>Paikka:</b> Latvalehto<br />
<b>Kuvaus:</b> Hävinnyt Eljakselan torppa Lehdonpellon laidassa.<br />
<br />
<b>Paikka:</b> Lehdonpelto<br />
<b>Kuvaus: </b>Pelto Iisveden rannassa lehtimetsän keskellä.<br />

</div><div id='d72' style="display:none;">
<b>Paikka: </b>Kaivanto<br />
<b>Kuvaus: </b>Haudanniemessä oleva kapea kohta.<br />
<b>Perimätietoa: </b>Kaivannosta on vedetty veneitä niemen yli. Kuoriniemen yli on samanlainen ylityspaikka.
<br />
</div><div id='d73' style="display:none;"><br />
<b>Paikka: </b>Sakarinkainalo<br />
<b>Kuvaus:</b> Apajapaikka Iisvedessä Haudanniemen itäpuolella.<br /> 
<b>Perimätietoa: </b>Suppuniemen isäntä Sakari kävi nuotalla Iisvedellä ja hänellä oli tapana pitää kahvitauko Haudanniemessä. Kerran oli mukana palvelustyttöjä soutajina. Oli syksy ja tyttöjä alkoi paleltaa. Sakarilla oli päällä iso lammasnahkaturkki ja niinpä hän kahvitulilla pyysi tyttöjä turkin sisälle Sakarin kainaloon lämmittelemään. Siitä apaja sai nimensä (Ukko Hentunen s.1922, 1981).

</div><div id='d74' style="display:none;"><br />
<b>Paikka: </b>Syväapaja<br />
<b>Kuvaus:</b> Apajapaikka Iisvedessä Haudanniemen kärjen lähellä.

</div><div id='d75' style="display:none;"><br />
<b>Paikka:</b> Rapoluoto<br />
<b>Kuvaus:</b> Pieni kivikkoinen luoto Iisvedessä.<br />

</div><div id='d76' style="display:none;"><br />
<b>Paikka:</b> Munasaari<br />
<b>Kuvaus: </b>Pieni kananmunan muotoinen saari Iisvedessä Majalahden edustalla.<br />

</div><div id='d77' style="display:none;"><br />
<b>Paikka: </b>Majalahti<br />
<b>Kuvaus: </b>Iisvedessä Syvänniemen itäosassa oleva lahti.<br />
<b>Muita paikkaan liittyviä nimiä: </b>Majalahden lounaispuolella on Majaniemi.<br />
<b>Perimätietoa: </b>Lahden haapoja kasvavilla rannoilla on elänyt ennen majavia (Ukko Hentunen s.1922, 1981).

</div><div id='d78' style="display:none;"><br />
<b>Paikka: </b>Kumpulahti<br />
<b>Rinnakkaisnimi:</b> Pöystin Arvi<br />
<b>Kuvaus:</b> Vekaron Heikkilästä erotettu tila, joka on saanut kutsumanimensä asukkaan mukaan.<br />

</div><div id='d79' style="display:none;"><br />
<b>Paikka: </b>Lahdenpohja<br />
<b>Kuvaus: </b>Vanha tila Verkkolahden pohjukassa<br />
<b>Perimätietoa:</b> Lahdenpohja on alkujaan Verkkolahden talon torppa.<br />
<br />
<b>Paikka: </b>Riiheneduspelto<br />
<b>Kuvaus: </b>Pelto asuinrakennuksen pohjoispuolella.<br />
<b>Muita paikkaan liittyviä nimiä:</b> Riihen pohjoispuolella, riihen takana on Riihentauspelto.<br />
<b>Perimätietoa: </b>Pellon koillislaidalla on riihi, joten pelto on riihen ja asuinrakennuksen välissä.
<br /><br />
<b>Paikka:</b> Sotamiespelto<br />
<b>Kuvaus: </b>Pelto asuinrakennuksen länsipuolella.<br />
<b>Perimätietoa:</b> Kertoman mukaan pellolla on ollut ennen sotamiehen asumus.<br />

</div><div id='d80' style="display:none;">
<b>Paikka:</b> Syvänniemi<br />
<b>Rinnakkaisnimi: </b>Keurulainen<br />
<b>Kuvaus: </b>Iisveteen pistävä niemi, jonka kärjessä on erityisen syvä kohta. Syvänniemi on myös Verkkolahden eteläpuolella oleva iso niemi, joka on ennen ollut Eljakselan maata. Lisäksi Syvänniemi on tila, jota kutsutaan useimmiten asukkaiden sukunimellä Keurulainen.
<br />
<b>Perimätietoa: </b>Verkkolahden eteläpuolella oleva niemi on saanut nimensä Sydänmaa-nimen mukaan. Syvänniemi on yhtä kaukana Eljakselasta kuin Eljakselan pohjoispuolella sijaitseva Sydänmaa. Nimen pitäisi siis arvelun mukaan olla sydän-alkuinen (Ukko Hentunen, s.1922, 1981). 

</div><div id='d81' style="display:none;"><br />
<b>Paikka: </b>Verkkolahti<br />
<b>Kuvaus: </b>Pitkä ja kapea lahti Iisveden pohjoispäässä. Verkkolahdeksi kutsutaan myös lahden pohjoisrannalla sijaitsevaa taloa.
<br />
<b>Muita paikkaan liittyviä nimiä:</b> Lahdesta jonkin matkaa pohjoiseen on korkea Verkkovuori. 
<br />
<b>Perimätietoa:</b> ”Siinä [Verkkolahessa] pyyvetään verkolla kalloo” (Emilia Jääskeläinen s.1889, 1970). Verkkolahden talo on erotettu Pulkkilan talosta 1700-luvun loppupuolella (Veijo A. Salonheimo: Rautalammin historia, s.132). Verkkovuoren aikaisempi nimi on ollut Piiluvuori ja siitä on myös käytetty ruokotonta nimitystä Pilluvuori.
<br /><br />
<b>Paikka:</b> Pouhulato<br />
<b>Kuvaus: </b>Lato, jonka lähellä on ollut kohiseva oja<br />
<b>Perimätietoa: </b>Pouhu tarkoittaa ojan, puron, kosken tms. kohinaa tai pauhua.<br />
<br /><br />
<b>Paikka: </b>Kalliolato<br />
<b>Kuvaus:</b> Lato, joka on rakennettu pellon keskellä olevalle kalliolle<br />

</div><div id='d82' style="display:none;">
<b>Paikka:</b> Peltoniemi<br />
<b>Kuvaus: </b>Verkkolahteen pistävä vähäinen niemi. Peltoniemeksi kutsutaan Verkkolahden talosta lohkaistua tilaa, joka sijaitsee Verkkolahden rannalla pellon reunassa. 
<br />
<b>Perimätietoa: </b>Peltoniemen tila on erotettu Verkkolahden tilasta perintönä vuonna 1952.
<br /><br />
<b>Paikka: </b>Särkelä<br />
<b>Kuvaus: </b>Pelto, jonka nimen alkuperästä ei ole tietoa.<br />

</div><div id='d83' style="display:none;"><br />
<b>Paikka:</b> Ruohosaari<br />
<b>Kuvaus:</b> Pieni saari Iisvedessä Verkkolahden edustalla<br />
<b>Perimätietoa:</b> ”Siin ol ennen niin kova ruohikkoo että ol vaekee venneellä soutoo ohi” (Eero Kukkonen s.1919, 1981).

</div><div id='d84' style="display:none;"><br />
<b>Paikka:</b> Rajakallio<br />
<b>Kuvaus:</b> Kallioranta Verkkolahden pohjukassa.<br />
<b>Muita paikkaan liittyviä nimiä: </b>Iisvedessä Verkkolahden edustalla on Rajaluoto, joka on myös kylien ja kalastuskuntien rajan merkkinä.
<br />
<b>Perimätietoa:</b> Paikalla kulkee Haapamäen ja Joutsensalmen kylän ja kalastuskunnan raja. Paikalla kulkee myös Lahdenpohjan ja Haapaniemen tilojen raja. ”Siinä on kaksinkertane raja” (Emilia Jääskeläinen s.1889, 1969).

</div><div id='d85' style="display:none;"><br />
<b>Paikka: </b>Muikkuranta<br />
<b>Kuvaus:</b> Iisveden ranta, jossa muikut on päästelty verkoista irti.<br />
<br />
<b>Paikka:</b> Rajaranta<br />
<b>Kuvaus:</b> Iisveden ranta Peltoniemen ja Lahdenpohjan maiden rajalla Muikkurannan pohjoispuolella.<br />

</div><div id='d86' style="display:none;">
<b>Paikka: </b>Haapaniemi
<b>Rinnakkaisnimi: </b>Miettisiivo, Iivonmökki
<b>Kuvaus: </b>Iisveteen pistävä niemi Syvänniemen itälaidalla. Haapaniemi tarkoittaa myös Haapaniemessä olevaa asuintonttia, jonka rinnakkaisnimet on annettu asukkaiden mukaan.
<b>Muita paikkaan liittyviä nimiä:</b> Seudulla on myös Haapalahti-niminen lahti ja Haapamäki.
<b>Perimätietoa: </b>Haapaniemen tila on erotettu Lahdenpohjan tilasta 1920-luvulla.

</div><div id='d87' style="display:none;">
<b>Paikka:</b> Pirinsaari<br />
<b>Kuvaus:</b> Pieni saari Iisveden pohjoispäässä.<br />
<b>Perimätietoa:</b> Tarinan mukaan saaren on kätketty aarre, jonka saa, kun ajaa saareen yksiöisellä varsalla yksiöistä jäätä myöten tai kun heittää saaren ja Haapaniemen välisen salmen yli neljän naulan painoisen kiven (Emil Jääskeläinen s.1894, 1969).

</div><div id='d88' style="display:none;"><br />
<b>Paikka: </b>Tinatuoppi<br />
<b>Kuvaus: </b>Apaja Iisveden pohjoispäässä Matinniemen kärjen länsipuolella.<br />

</div><div id='d89' style="display:none;"><br />
<b>Paikka:</b> Tynnyrilahti<br />
<b>Kuvaus: </b>Pitkä ja kapeahko lahti Iisvedessä Haapaniemen ja Tynnyrinniemen välissä.<br />
<b>Muita paikkaan liittyviä nimiä:</b> Tynnyrinlahden eteläpuolella on Tynnyrinniemi<br />
<b>Perimätietoa: </b>”Se on syvä niin ku tynnyr se lahti” (Ukko Hentunen s.1922, 1981). Lahti muistuttaa muodoltaa tynnyriä.

</div><div id='d90' style="display:none;">
<b>Paikka:</b> Rantometsä<br />
<b>Kuvaus:</b> Metsä Niiniveden reunassa.<br />
<b>Muita paikkaan liittyviä nimiä: </b>Rantometsän laidassa järven puolella on loiva harjanne nimeltään Rantoharju. Rantoharju on myös rannassa olevan huvilan nimi. Laajasta Rantometsän poikki Rantoharjulle vie Rantotie. Rantometsän eteläpuolella on Rantopelto. Niinivedessä on myös Rantosaari-niminen saari.
<br />
<b>Perimätietoa:</b> Ranto-muoto on murteessa harvinainen; sitä käytetään lähinnä Laajan ympäristössä.

</div><div id='d91' style="display:none;"><br />
<b>Paikka:</b> Laaja<br />
<b>Kuvaus:</b> 1760-luvulla perustettu talo<br />
<b>Muita paikkaan liittyviä nimiä: </b>Laajan luoteispuolella on Niinivedessä Laajanlahti, jonka rinnakkaisnimi on Kempinlahti. Lahden rannalla on ollut Laajanlahti-niminen pelto. Laajanlahden itärannalla on Laajanniemi. Niemen rinnakkaisnimi on Kempinniemi. Laajasta Hiidenlammen ohi Hiidenmaalle ulottuu männikkökangas nimeltään Laajankangas. Maantien takana Laajan itäpuolella on Mäntylän pelto nimeltään Laajanlaheke.
<br />
<b>Perimätietoa: </b>Laajan laiturissa kävivät Niinivedellä kulkeneet laivat. Se oli kyläkunnan laivaranta Niiniveden puolella.
<br /><br />
<b>Paikka:</b> Kuoppakangas<br />
<b>Kuvaus:</b> Kuusimetsä Laajan rakennusten ja maantien välillä.<br />
<b>Perimätietoa:</b> Kankaalla on aiemmin ollut peruna- ja juureskuoppia.<br />
<br /><br />
<b>Paikka: </b>Kempinranta<br />
<b>Kuvaus: </b>Niiniveden ranta Laajan luoteispuolella. <br />
<b>Muita paikkaan liittyviä nimiä:</b> Kempinrannan länsipuolella on Kempinlahti. Lahden länsipuolella on Kempinniemi. 
<br />
<b>Perimätietoa: </b>Rannassa on aikoinaan ollut mökki, jossa on aikoinaan asunut Kemppi- tai Kemppainen-niminen Laajan sotamies.
<br /><br />
<b>Paikka: </b>Kokkokallio<br />
<b>Kuvaus: </b>Kallio maantien ja Myllypellon välisellä metsäkaistalla. Kartassa Kokkokallio on sijoitettu hieman liian pohjoiseen.
<br />
<b>Muita paikkaan liittyviä nimiä:</b> Kokkokallion lähellä on ollut Kokkoaho.<br />
<b>Perimätietoa: </b>Nykyään kallion ympärillä on tiheä metsä, mutta kun puut olivat pieniä, poltettiin kalliolla juhannuskokkoja (Elli Tiitinen, s.1898, 1981).
<br /><br />
<b>Paikka: </b>Pajalampi<br />
<b>Kuvaus: </b>Soistunut lampi, jonka lähellä on ennen ollut paja.<br />
<b>Muita paikkaan liittyviä nimiä:</b> Pajalammen lähellä on ollut Pajalammenaho.<br />
<br />
<b>Paikka:</b> Pohjoispelto<br />
<b>Kuvaus: </b>Pelto Laajan luoteispuolella.<br />
<br />
<b>Paikka: </b>Hakatöyry<br />
<b>Kuvaus:</b> Entinen lehmähaka matalalla kumpareella Pohjoispellon lounaispuolella.<br />
<br /><br />
<b>Paikka: </b>Alapelto<br />
<b>Kuvaus:</b> Pelto Pohjoispellon eteläpuolella. <br />
<b>Muita paikkaan liittyviä nimiä:</b> Alapellon yläpuolella on Yläpelto. Alapellolla on ollut kolme latoa: Pohjois-, Keski- ja Etelälato.
<br /><br />
<b>Paikka:</b> Myllypelto<br />
<b>Rinnakkaisnimi: </b>Yläpelto<br />
<b>Kuvaus:</b> Laajan pelto, jonka lähellä ollut tuulimylly nosti vettä.
<br /><br />
<b>Paikka: </b>Etelälato<br />
<b>Kuvaus: </b>Hävinnyt lato, joka on sijainnut Alapellon eteläosassa.<br />
<b>Muita paikkaan liittyviä nimiä: </b>Pellolla on ollut myös Pohjois- ja Keskilato. Alapellon yläpuolella on ollut Yläpelto.
<br /><br />
<b>Paikka:</b> Riihilato<br />
<b>Kuvaus:</b> Laajan lato, jonka lähellä on riihi.<br />
<br />
<b>Paikka: </b>Rantakangas<br />
<b>Kuvaus: </b>Kangas Niiniveden rannassa.<br />
<br /><br />
<b>Paikka: </b>Lähdeaho <br />
<b>Kuvaus:</b> Entinen aho, jonka lähellä on ollut lähde.<br />
<b>Perimätietoa: </b>Paikka oli tasainen, ja siksi kylän nuoret pitivät sitä urheilukenttänä.
<br /><br />
<b>Paikka:</b> Kaskiaho<br />
<b>Kuvaus:</b> Metsittynyt aho, entistä kaskimaata.
<br /><br />
<b>Paikka:</b> Kunniaportti<br />
<b>Kuvaus: </b>Laajan talosta maantielle päin ollut komea ja korkea karjaveräjä.
<br /><br />
<b>Paikka: </b>Kangastie<br />
<b>Kuvaus: </b>Laajankankaan poikki maantieltä Hiidenmaalle vievä tie.

</div><div id='d92' style="display:none;">
<b>Paikka: </b>Rajala<br />
<b>Rinnakkaisnimi:</b> Toikkanen<br />
<b>Kuvaus: </b>Asuintontti Tervon ja Rautalammin rajalla. Kansanomaisesti paikkaa on kutsuttu asukkaiden nimellä Toikkanen.
<br /><b>Perimätietoa:</b> Ennen Toikkasia paikalla on asunut Saloja.

</div><div id='d93' style="display:none;">
<b>Paikka:</b> Vehmassuo <br />
<b>Rinnakkaisnimi:</b> Impin mökki<br />
<b>Kuvaus: </b>Toisen maailmansodan jälkeen rakennettu talo<br />
</div>

</div><!-- DOKUALUE (CONTENT) loppuu -->
 
<!-- FOOTER alkaa -->
<div id="footer"> 
	<? include "footer.htm" ?>
</div><!--FOOTER loppuu --> 

</div> <!-- CONTAINER loppuu -->
</body>
</html>
