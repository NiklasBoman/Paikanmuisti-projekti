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

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
var ids=new Array('j1','j2','j3','j4','j5','j6','j7','j8','j9','j10','j11','j12','j13','j14','j15','j16','j17','j18','j19','j20','j21');


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

<!-- CONTAINER alkaa-->
<div id="container">
<!-- DOKUALUE (CONTENT) alkaa -->
<div id="content">
 <br>
    <table class="tab" width="100%"  border="0">
        <tr>
          <td width="31%" height="26"><h2><img src="kuva/salattutieto.jpg" width="339" height="64" /></h2></td>
          <td>  <!-- HELP -->
		  <div align="right"> <b>Nilakanranta, &copy; Maanmittauslaitos, lupa nro PSAVO/018/2007</b></div>	  </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
    </table>
   <!-- VIDEO OBJEKTI -->
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 

codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="700" height="400">
   <param name="movie" value="J.swf" />
   <param name="WMODE" value="opaque" />
   <param name="swliveconnect" value="true">
   <param name="quality" value="high" />
   <embed src="J.swf" quality="high" width="700" height="400" WMODE="opaque" 

pluginspage="http://www.macromedia.com/go/getflashplayer" 
 type="application/x-shockwave-flash"  swliveconnect="true"></embed> 
      </object>
      <!-- VIDEO OBJEKTI -->
  
<div id='j1' style="display:none;">
<b>Nimi:</b> Pönkä<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on aikaisemmin ollut Huttulan talon torppa.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Lähistöllä on myös Pönkäsuo<br>
<b>Perimätietoa:</b> Talo on arvelujen mukaan rakennettu 1800-luvun alussa. Talo on viimeinen Huttulan torpista. Aluksi asuntona on ollut vain pieni savutupa. ”Sitä tuppoo kae ne on pönnäks sanonna kun se on kuulemma ollup pien. Sittä se ov vielä ollu riihenä ja saanana se sama tupa” (Artturi Pääkkönen s.1894, 1968). Pönkä tarkoittaa pientä asumusta tai jotain muuta pienikokoista rakennusta.
<br><br>
<b>Nimi:</b> Pönkäsuo<br>
<b>Paikan kuvaus:</b> Vähäinen metsäsuo<br>
<b>Muita paikkaan liittyviä nimiä:</b> Suon pohjoispuolela on Pöngän tila.
<br><br>
<b>Nimi:</b> Hakapelto<br>
<b>Paikan kuvaus:</b> Pelto Pöngän asuinrakennuksen pohjoispuolella.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Pellon laidalla on vähäinen mäennyppylä nimeltään Hakakenkämä.<br>
<b>Perimätietoa:</b> Pellon vierustalla on haka.
<br><br>
<b>Nimi:</b> Puronvarsipelto<br>
<b>Paikan kuvaus:</b> Pelto Pöngän talon ja Vehkapuron välissä. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Puron itäpuolella on toinen pelto nimeltään Purontauspelto.

</div><div id='j2' style="display:none;">
<b>Nimi:</b> Tantere<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on aikaisemmin ollut Huttulan talon torppa.<br>
<b>Perimätietoa:</b> Tila on jaettu perintöosuutena Rantalasta. Tila on kertoman mukaan perustettu 1800-luvun puolivälissä. Talo on rakennettu tasaiselle maaperälle eli tantereelle.
<br><br>
<b>Nimi:</b> Lähdesuo<br>
<b>Paikan kuvaus:</b> Suo ja viljelyssuo. <br>
<b>Perimätietoa:</b> Alueella on useita lähteitä.

</div><div id='j3' style="display:none;">
<b>Nimi:</b> Kangas<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on aikaisemmin ollut Tiitilän talon mäkitupa.<br>
<b>Perimätietoa:</b> Tila on kertoman mukaan perustettu 1800-luvun puolivälissä. Tilaan on myöhemmin liitetty lisämaata. Tila sijaitsee kankaalla.

</div><div id='j4' style="display:none;">
<b>Nimi:</b> Koivula<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Tiitilän talon torppa.<br>
<b>Perimätietoa:</b> Torppa on arvelujen mukaan perustettu 1800-luvun puolivälissä. Tila sijaitsee metsittyneellä alueella, jossa kasvaa runsaasti koivuja.

</div><div id='j5' style="display:none;">
<b>Nimi:</b> Aatula<br>
<b>Rinnakkaisnimi:</b> Ottola, Rantaharju, Mattila<br>
<b>Paikan kuvaus:</b> Mattilan tilan aikaisempi nimi. Tila sijaitsee Nilakan rannalla.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Lähistöllä on Rantala-niminen tila.<br>
<b>Perimätietoa:</b> Tilan vanhin muistissa oleva nimi on Ottola. Tällöin talon omisti Otto Huuskonen. Sitten tila siirtyi hänen veljelleen Adam Huuskoselle, jota kutsuttiin Aatuksi. Tällöin talo sai uuden nimen Aatula. Myöhemmin tilan omisti Adan (Aatu) Ylönen, jolta talo siirtyi Matti Puttoselle, jolloin talo sai nimen Mattila.
<br><br>
<b>Nimi:</b> Rantaharju<br>
<b>Rinnakkaisnimi:</b> Mattila, Ottola, Aatula<br>
<b>Paikan kuvaus:</b> Mattilan tilan virallinen nimi, ei kansanomaisessa käytössä. Tila sijaitsee Nilakan rannalla.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Lähistöllä on Rantala-niminen tila.

</div><div id='j6' style="display:none;">
<b>Nimi:</b> Vehkapuro<br>
<b>Rinnakkaisnimi:</b> Ritvanen<br>
<b>Paikan kuvaus:</b> Luonnonoja, joka saa alkunsa Hautasuolta ja laskee Nilakkaan. Vehkapuro on myös lohkotilan nimi.<br>
<b>Perimätietoa:</b> Hautosuolla kasvaa vehkoja puron varrella. Vehkapuron tila on ollut alunperin Tiitilän talon torppa, joka on arvelujen mukaan rakennettu 1800-luvun alkupuolella. Talo sijaitsee Vehkapuron varrella. Vehkapuro saa alkunsa Hautasuolta ja laskee Nilakkaan.

</div><div id='j7' style="display:none;">
<b>Nimi:</b> Kyminkorpi<br>
<b>Paikan kuvaus:</b> Suuri metsäsuoalue, jonka Kymi-yhtiö osti vuonna 1918 Tiitilän talosta.

</div><div id='j8' style="display:none;">
<b>Nimi:</b> Elosaari<br>
<b>Paikan kuvaus:</b> Suuri, pitkulainen saari Nilakassa. Suurin osa saarta on Keiteleen pitäjän puolella, mutta eteläkärki pistää Tervon kunnan puolelle.<br>
<b>Perimätietoa:</b> Saarella on vanhoja asuinpaikkoja.

</div><div id='j9' style="display:none;">
<b>Nimi:</b> Lampila<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Tiitilän talon torppa.<br>
<b>Perimätietoa:</b> Olettamusten mukaan torppa on rakennettu 1800-luvun alkupuolella. Tila sijaitsee Hanhilammen kaakkoispuolella. 

</div><div id='j10' style="display:none;">
<b>Nimi:</b> Hanhilampi<br>
<b>Paikan kuvaus:</b> Lampi Vesannon ja Tervon pitäjien rajalla. Suurin osa lammesta on Vesannon puolella. Maanmittaushallituksen vuonna 1944 laatimassa kartassa lammen nimeksi on merkitty Hanhijärvi, joka on kansanomaisessa käytössä tuntematon.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Lammen kaakkoispuolella on pitkä kangasselänne nimeltään Hanhiselkämä ja sen kaakkoispäässä on saman niminen lohkotila. <br>
<b>Perimätietoa:</b> ”Niillä seovuilla ol hanahija aekasempina aekoina mut nyt niitä ei ennee ou ollu” (Artturi Pääkkönen s.1894, 1966).

</div><div id='j11' style="display:none;">
<b>Nimi:</b> Virsutie<br>
<b>Paikan kuvaus:</b> Hanhiselkämän tilalta Niiniveden rantaan johtava polku. <br>
<b>Perimätietoa:</b> ”Se ol semmonen kappee kinttupoloku, ettei sitä muulla pelillä piäse, kuj jalakapatikassa. Virsut jalasa sitä semmosija teitä on kulettunna, kun se on niih huono” (Kerttu Jäntti, s.1918, 1966). Nykyisin polkua ei enää juuri käytetä. Virsutiehiihtoa hiihdettiin 1970- ja 1980-luvuilla Virsutietä mukaellen Tervosta Vesannolle. Petteri Heikkinen on tehnyt Virsutiestä laulun. 
<br><br>
<b>Nimi:</b> Simola<br>
<b>Rinnakkaisnimi:</b> Hanhiselkämä<br>
<b>Paikan kuvaus:</b> Hanhiselkämän tilan kansanomaisempi nimi. <br>
<b>Perimätietoa:</b> Tilan aikaisempi omistaja on ollut Simo Jäntti. 
<br><br>
<b>Nimi:</b> Korpiniitty<br>
<b>Paikan kuvaus:</b> Niitty, jonka ympärillä on aikaisemmin ollut synkkä metsä. 
<br><br>
<b>Nimi:</b> Otsonniitty<br>
<b>Paikan kuvaus:</b> Niitty Korpiniityn pohjoispuolella. <br>
<b>Perimätietoa:</b> Niitty on myöhemmin raivattu ja sen on ensimmäisen kerran kyntänyt Otso Askola.
<br><br>
<b>Nimi:</b> Kaivoniitty<br>
<b>Paikan kuvaus:</b> Niitty<br>
<b>Perimätietoa:</b> ”Siihe kaevettii oja. Kaet se siitä lienöön suanna semmosen nime” (Kerttu Jäntti, s1918, 1968).
<br><br>
<b>Nimi:</b> Hanhiselkämä<br>
<b>Rinnakkaisnimi:</b> Sivula<br>
<b>Paikan kuvaus:</b> Pitkä ja korkea kangasselänne. Hanhiselkämä on myös selänteen kaakkoispäässä sijaitsevan lohkotilan nimi, jonka kansanomainen rinnakkaisnimi on Sivula.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Selänteen luoteispuolella on Hanhilampi. Selänteellä on korkea Hanhikallio.<br>
<b>Perimätietoa:</b> Lohkotila on alunperin ollut Lassilan talon torppa. Torppa on arvelujen mukaan rakennettu 1800-luvun alussa. 

</div><div id='j12' style="display:none;">
<b>Nimi:</b> Rahkasuo <br>
<b>Paikan kuvaus:</b> Upottava ja vetinen metsäsuo, jossa kasvaa rahkasammalta.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Suon länsipuolella on pitkä ja kapea kangasselänne nimeltään Rahkataival. Taival tarkoittaa pitkää ja kapeahkoa kangasmaata.<br>
<b>Perimätietoa:</b> ”Siitä [Rahkasuosta] nostettiin sammalta ja sitä piettiin kuivikkeena lehmii alla navetassa” (Elsa Pääkkönen s.1899, 1968).

</div><div id='j13' style="display:none;">
<b>Nimi:</b> Rantala<br>
<b>Rinnakkaisnimi:</b> Juuel<br>
<b>Paikan kuvaus:</b> Nilakan rannalla sijaitseva lohkotila, joka on alunperin ollut Huttulantalon torppa. Torpan aikaisempi kansanomainen nimi on ollut Juuel.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Lähellä on ollut myös Huttulan mökki nimeltään Pelkola.<br>
<b>Perimätietoa:</b> Torppa on kertoman mukaan perustettu 1800-luvun alussa.

</div><div id='j14' style="display:none;">
<b>Nimi:</b> Rajala<br>
<b>Paikan kuvaus:</b> Hävinnyt mökki, jonka tontti on lohkaistu Penkereen tilan maasta.<br>
<b>Perimätietoa:</b> Mökki sijaitsee Tervon ja Vesannon pitäjien rajan lähistöllä. Tontti on erotettu Penkereestä 1920-luvulla.
<br><br>
<b>Nimi:</b> Penkere<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Tiitilän talon torppa.<br>
<b>Perimätietoa:</b> Torppa on arvioiden mukaan perustettu 1800-luvun puolivälin paikkeilla. Tila sijaitsee Hanhiselkämään kuuluvan mäen rinteellä.
<br><br><br>
<b>Nimi:</b> Rinne
<b>Rinnakkaisnimi:</b> Turpeinen<br>
<b>Paikan kuvaus:</b> Mökki, jonka tontti on lohkaistu Penkereen tilan maasta. <br>
<b>Perimätietoa:</b> Mökki on rakennettu 1940-luvun loppupuolella. Mökki sijaitsee Hanhiselkämän rinteessä.

</div><div id='j15' style="display:none;">
<b>Nimi:</b> Raitala<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Korholan talon torppa. Maanmittaushallituksen kartassa vuodelta 1944 tilan nimeksi on virheellisesti merkitty Kaitala.<br>
<b>Perimätietoa:</b> Tila on kertoman mukaan perustettu 1800-luvun puolivälissä. Asuinrakennuksen lähistöllä kasvaa raitoja.
<br><br>
<b>Nimi:</b> Tientauspellot<br>
<b>Paikan kuvaus:</b> Maantien eteläpuolella olevat pellot. Raitalan asuinrakennus on tien pohjoispuolella.
<br><br>
<b>Nimi:</b> Räätäli<br>
<b>Paikan kuvaus:</b> Hävinnyt mökki Raitalan tilan maalla.<br>
<b>Perimätietoa:</b> Mökki on hävinnyt 1930-luvun keskivaiheilla. Mökissä on asunut Eenok Snugg-niminen mies, joka on ollut ammatiltaan räätäli.

</div><div id='j16' style="display:none;">
<b>Nimi:</b> Kytösuo<br>
<b>Paikan kuvaus:</b> Suo Hanhilammen itäpuolella.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Suon eteläpuolella on Lampilan tilan Kytöniitty. Suolla on aidattu laidunmaa, jonka nimi on kytöhaka.<br>
<b>Perimätietoa:</b> ”Sitä suota on poltettu” (Artturi Pääkkönen s.1894, 1968). 

</div><div id='j17' style="display:none;">
<b>Nimi:</b> Haapa-aho<br>
<b>Paikan kuvaus:</b> Tila Nilakan rannalla
<br><br>
<b>Nimi:</b> Kusikallio<br>
<b>Paikan kuvaus:</b> Korkea ja sileä kallio<br>
<b>Perimätietoa:</b> ”Liekkö tuo siitä nimesä suanna, kun se on niin sillee ja jyrkkä, että sitä myöte juoksoo vaekka kus hyvästi” (Artturi Pääkkönen s.1894, 1968). 

</div><div id='j18' style="display:none;">
<b>Nimi:</b> Tupsula<br>
<b>Rinnakkaisnimi:</b> Rajala, Unhola, Kivelä<br>
<b>Paikan kuvaus:</b> Kivelän tilan vanhin muistissa oleva nimi. <br>
<b>Perimätietoa:</b> Tupsulan jälkeen tilan nimeksi tuli Rajala, joka puolestaan muuttui Kiveläksi nykyisten asukkaisen ostettua tilan. Nimen alkuperää ei tiedetä. 
<br><br>
<b>Nimi:</b> Rajala<br>
<b>Rinnakkaisnimi:</b> Tupsula, Unhola, Kivelä<br>
<b>Paikan kuvaus:</b> Kivelän tilan aikaisempi nimi.<br> 
<b>Perimätietoa:</b> Tila sijaitsee Tervon ja Vesannon pitäjien rajalla. Tilan alkuperäinen nimi on Tupsula. Tupsulan jälkeen tilan nimeksi tuli Rajala, joka puolestaan muuttui Kiveläksi nykyisten asukkaisen ostettua tilan.
<br><br>
<b>Nimi:</b> Unhola<br>
<b>Rinnakkaisnimi:</b> Tupsula, Rajala, Kivelä<br>
<b>Paikan kuvaus:</b> Kivelän tilan virallinen nimi, joka ei ole kansanomaisessa käytössä. <br>
<b>Perimätietoa:</b> Tila sijaitsee syrjässä monen kilometrin päässä maantiestä. Se on ikään kuin unohduksissa syrjäisen sijaintinsa vuoksi. Tilan alkuperäinen nimi on Tupsula. Tupsulan jälkeen tilan nimeksi tuli Rajala, joka puolestaan muuttui Kiveläksi nykyisten asukkaisen ostettua tilan.
<br><br>
<b>Nimi:</b> Kivelä<br>
<b>Rinnakkaisnimi:</b> Tupsula, Rajala, Unhola<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on ollut alunperin Sorsan talon torppa.<br> 
<b>Perimätietoa:</b> Arvelujen mukaan tila on perustettu 1800-luvun alkupuolella. Tilan alkuperäinen nimi on Tupsula. Tupsulan jälkeen tilan nimeksi tuli Rajala, joka puolestaan muuttui Kiveläksi nykyisten asukkaisen ostettua tilan. Kivelä-nimi on tullut asukkaiden sukunimen mukaan. Tilalla ovat asuneet Urho Kivelä ja Saima Kivelä. Urho Kivelä on ollut Iisalmen Sanomien päätoimittaja. 

</div><div id='j19' style="display:none;">
<b>Nimi:</b> Hoikansuo<br>
<b>Paikan kuvaus:</b> Hyvin kapea ja pitkä viljelyssuo.<br>
<b>Perimätietoa:</b> Nimi johtuu todennäköisesti suon muodosta.

</div><div id='j20' style="display:none;">
<b>Nimi:</b> Sorsa<br>
<b>Paikan kuvaus:</b> Talo, joka on alunperin ollut Hautolahden Huttulan talon sydänmaapalsta.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Talon itäpuolella on Sorsaharju-niminen kangasselänne, josta osa pistää niemenä Nilakkaan. Niemen liepeillä pesii kesäisin sorsia. <br>
<b>Perimätietoa:</b> Sorsa on lohkaistu itsenäiseksi tilaksi. Kertoman mukaan talo on perustettu 1700-luvulla. 
<br><br>
<b>Nimi:</b> Sorsaharju<br>
<b>Paikan kuvaus:</b> Kangasharjanne Nilakan rannalla.<br> 
<b>Muita paikkaan liittyviä nimiä:</b> Harjun länsiliepeillä on Sorsan talo.<br>
<b>Perimätietoa:</b> Osa harjua muodostaa järveen pistävän nimekkeen. Niemen kupeella asustaa kesäisin sorsia.
<br><br>
<b>Nimi:</b> Rantakallio<br>
<b>Paikan kuvaus:</b> Sileä ja laakea kallio Nilakan rannalla
<br><br>
<b>Nimi:</b> Jääskelä<br>
<b>Paikan kuvaus:</b> Mökki Sorsan talon sydänmaalla.<br>
<b>Perimätietoa:</b> Mökki on ollut itsenäistymätön ja hävinnyt 1800-luvun jälkipuoliskolla. Mökissä on asunut Jääskeläisiä. Mökissä on asunut kylän räätäli.
<br><br>
<b>Nimi:</b> Pitkäniitty<br>
<b>Paikan kuvaus:</b> Pitkä ja kapea niitty Sorsan talon länsipuolella. 

</div><div id='j21' style="display:none;">
<b>Nimi:</b> Pellonpää<br>
<b>Rinnakkaisnimi:</b> Suutarinmökki<br>
<b>Paikan kuvaus:</b> Suutarinmökin virallinen nimi, joka ei ole kansanomaisessa käytössä. <br>
<b>Perimätietoa:</b> Tila sijaitsee Sorsan talon eteläpellon eteläpäässä. 
<br><br>
<b>Nimi:</b> Suutarinmökki<br>
<b>Rinnakkaisnimi:</b> Pellonpää<br>
<b>Paikan kuvaus:</b> Pikkutila, joka on alunperin ollut Sorsan talon torppa.<br> 
<b>Perimätietoa:</b> Tila on perustettu 1900-luvun alussa. Tilan on omistanut aikaisemmin Otto Huuskonen, joka on ollut ammatiltaan suutari. 
</div>
</div><!-- DOKUALUE (CONTENT) loppuu -->
 
<!-- FOOTER alkaa -->
<div id="footer"> 
	<? include "footer.htm" ?>
</div><!--FOOTER loppuu --> 

</div> <!-- CONTAINER loppuu -->
</body>
</html>
