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
var ids=new Array('e1','e2','e3','e4','e5','e6','e7','e8','e9','e10','e11','e12','e13','e14','e15','e16','e17','e18','e19','e20','e21','e22','e23','e24','e25','e26','e27');


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
		  <div align="right"><b>Saikari,&copy; Maanmittauslaitos, lupa nro PSAVO/018/2007</b> </div>	  </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
    </table>
   <!-- VIDEO OBJEKTI -->
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 

codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="700" height="400">
   <param name="movie" value="E.swf" />
   <param name="WMODE" value="opaque" />
   <param name="swliveconnect" value="true">
   <param name="quality" value="high" />
   <embed src="E.swf" quality="high" width="700" height="400" WMODE="opaque" 

pluginspage="http://www.macromedia.com/go/getflashplayer" 
 type="application/x-shockwave-flash"  swliveconnect="true"></embed> 
      </object>
      <!-- VIDEO OBJEKTI -->
  
<div id='e1' style="display:none;">
<b>Nimi:</b> Lassinsaari <br>
<b>Rinnakkaisnimi:</b> Lassinluoto<br>
<b>Paikan kuvaus:</b> Iisvedessä Vekaroniemen kaakkoispuolella oleva pieni saari. Nimen alkuperää ei tiedetä. Kartassa virheellinen nimi Lassinluoto.

</div><div id='e2' style="display:none;">
<b>Nimi:</b> Kampinkaarre<br>
<b>Rinnakkaisnimi:</b> Kamppikaarre<br>
<b>Paikan kuvaus:</b> Vekaroniemen lounaispuolella olevan lahden nimi. Kartassa virheellinen nimi Kamppikaarre. <br>
<b>Muita paikkaan liittyviä nimiä: </b> Kampinniemi sijaitsee lahden eteläpuolella.

</div><div id='e3' style="display:none;">
<b>Nimi:</b> Kampinniemi<br>
<b>Rinnakkaisnimi:</b> Kamppiniemi, Kampinharju, Kaapinniemi<br>
<b>Paikan kuvaus:</b> Vekaroniemen lounaiskulmassa oleva niemi.<br>
<b>Perimätietoa:</b> Niemeä kutsutaan myös Kampinharjuksi, koska muuten melko soinnen Vekaroniemen kärki on Kampinniemen kohdalla kovaa maata. Haapamäen kalavesilohkokunnan kartassa vuodelta 1914 niemen nimenä on Kaapinniemi. Lisäksi joissakin kartoissa virheellinen nimi Kamppiniemi.

</div><div id='e4' style="display:none;">
<b>Nimi:</b> Koriniemi <br>
<b>Paikan kuvaus:</b> Vekaroniemen kaakkoiskulmassa oleva Iisveteen pistävä niemi, joka on entistä Heikkilän peltoa.<br>
<b>Muita paikkaan liittyviä nimiä: </b> Koriniemessä oleva pelto on Koripelto. Koripellon edustalla on Iisvedessä apaja, Koripellon apaja. <br>
<b>Perimätietoa:</b> Nimen kerrotaan tulleen siitä, että pellolla työskentelevälle väelle kannettiin Heikkilästä korilla ruokaa (Ukko Hentunen, s. 1922. 1981)

</div><div id='e5' style="display:none;">
<b>Nimi:</b> Kumpuniemi<br>
<b>Rinnakkaisnimi:</b> Nuottaniemi, Pöysti<br>
<b>Paikan kuvaus:</b> Pieni kumpareinen niemi Vekaroniemen itärannalla. Haapamäen kalavesilohkokunnan kartassa vuodelta 1914 niemen nimenä on Nuottaniemi.<br>
<b>Muita paikkaan liittyviä nimiä: </b> Kumpuniemen pohjoispuolella on Kumpulahti. Lahden rannalla on myös samanniminen, siirtolaisten 1950-luvulla rakentama tila. Tilalla on asunut Pöystejä.

</div><div id='e6' style="display:none;">
<b>Nimi:</b> Heikkilä<br>
<b>Rinnakkaisnimi:</b> Vekaron Heikkilä<br>
<b>Paikan kuvaus:</b> Vekaroniemessä oleva vanha talo, josta on erotettu Vekaroniemen muut tilat<br>
<b>Perimätietoa:</b> Heikkilää kutsutaan myös nimellä Vekaron Heikkilä, koska Joutsensalmen kylässä on toinen Heikkilä-niminen tila.
<br><br>
<b>Nimi:</b> Kyllikinpelto<br>
<b>Paikan kuvaus:</b> Vekaroniemessä Heikkilän talon eteläpuolella oleva pelto.<br> 
<b>Perimätietoa:</b> Tilan emännän, Kyllikki Pöystin, mielipelto.

</div><div id='e7' style="display:none;">
<b>Nimi:</b> Maalahti <br>
<b>Paikan kuvaus:</b> Lahti Iisvedessä Vekaroniemen itälaidalla. Nimen alkuperästä ole ei tietoa.

</div><div id='e8' style="display:none;">
<b>Nimi:</b> Kissaluoto<br>
<b>Paikan kuvaus:</b> Luoto Iisvedessä Vekaroniemen itäpuolella. Nimen alkuperästä ole ei tietoa.

</div><div id='e9' style="display:none;">
<b>Nimi:</b> Siverinsaari<br>
<b>Paikan kuvaus:</b> Iisvedessä Vekaroniemen päässä oleva saari. <br>
<b>Perimätietoa:</b> Saaren nimen kerrotaan tulleen saaren ensimmäisen asukkaan, 1700-luvulla eläneen Severin mukaan. Kerrotaan myös tarinaa miehestä, joka ”Tuomioniemessä tuomittiin, Siverissä siunattii ja Haovanniemelle haovattii” (Ukko Hentunen, s. 1922, 1981). Toisen perimätiedon mukaan Siverinsaaressa olisi ollut koko seudun vanhin asumus, kalastajamökki Pohjois-Hämeen eräasutuksen ajoilta.

</div><div id='e10' style="display:none;">
<b>Nimi:</b> Niittylahti<br>
<b>Paikan kuvaus:</b> Lahti Vekaroniemen päässä Iisvedessä.<br> 
<b>Perimätietoa:</b> Lahden rannalla on ollut ennen Heikkilän talon viljelyksiä. Nykyisin pellot ovat metsittyneet.

</div><div id='e11' style="display:none;">
<b>Nimi:</b> Huutsaari <br>
<b>Rinnakkaisnimi:</b> Huhtsaari<br>
<b>Paikan kuvaus:</b> Saari Iisvedessä Vekaroniemen päässä. Huhtsaari-nimi esiintyy Haapamäen kalavesilohkokunnan kartassa vuodelta 1914.<br>
<b>Muita paikkaan liittyviä nimiä: </b> Huutsaaren kaakkoispuolella on Huuhinkulma eli Kulma-apaja -niminen apajapaikka.<br>
<b>Perimätietoa:</b> Kerrotaan, että aikoinaan eli kaksi veljestä, joista toinen asui Saikarilla Tervolan talossa ja toinen Huutsaaressa. Veljet pitivät toisiinsa yhteyttä huutamalla ja siitä saari sai nimensä (Ukko Hentunen s. 1922, 1981). Toisen kertomuksen mukaan asukkaita oli Tervolassa ja Siverinsaaressa. Pian tuli välillä olevaan saareen myös asukas, mutta hänestä ei pidetty. Niinpä Siverin asukas aina huusi: ”Hut poes suaresta” ja siitä saari sai nimensä Huutsaari (Niilo Hentunen, s.1931, 1981). 
<br><br>
<b>Nimi:</b> Huuhinkulma<br>
<b>Rinnakkaisnimi:</b> Kulma-apaja<br>
<b>Paikan kuvaus:</b> Huutsaaren kaakkoispuolella Iisvedessä oleva apajapaikka, josta käytetään myös rinnakkaisnimeä Kulma-apaja.

</div><div id='e12' style="display:none;">
<b>Nimi:</b> Syväsalmi <br>
<b>Rinnakkaisnimi:</b> Isosalmi<br>
<b>Paikan kuvaus:</b> Salmi Iisvedessä Vekaroniemen ja Huutsaaren välillä. <br>
<b>Muita paikkaan liittyviä nimiä: </b> Huutsaaren eteläpuolella on kapeampi ja matalampi Pienisalmi
<br><br>
<b>Nimi:</b> Majosaaret<br>
<b>Rinnakkaisnimi:</b> Kumpusaari, Heinäsaari, Marjasaari<br>
<b>Paikan kuvaus:</b> Kolme pientä saarta Iisvedessä Huutsaaren eteläpuolella. Nimi esiintyy Haapamäen kalavesilohkokunnan kartassa vuodelta 1914. Nykyään saarista käytetään nimiä Kumpusaari, Heinäsaari ja Marjasaari. Kartoissa saattaa esiintyä virheellistä nimeä Heinäsaaret.
<br><br>
<b>Nimi:</b> Marjasaari <br>
<b>Paikan kuvaus:</b> Pohjoisin kolmesta Iisvedessä Huutsaaren eteläpuolella sijaitsevista Majosaarista.<br> 
<b>Muita paikkaan liittyviä nimiä: </b> Kahden muun saaren nimet ovat Heinäsaari ja Kumpusaari.
<br><br>
<b>Nimi:</b> Heinäsaari <br>
<b>Paikan kuvaus:</b> Keskimmäinen kolmesta Iisvedellä Huutsaaren eteläpuolella sijaitsevista Majosaarista. Kartassa saattaa esiintyä virheellinen nimi Heinäsaaret.<br>
<b>Muita paikkaan liittyviä nimiä: </b> Kahden muun saaren nimet ovat Marjasaari ja Kumpusaari.

</div><div id='e13' style="display:none;">
<b>Nimi:</b> Pienisalmi<br>
<b>Paikan kuvaus:</b> Kapea salmi mantereen ja Huutsaaren välillä. <br>
<b>Muita paikkaan liittyviä nimiä: </b> Huutsaaren pohjoispuolella on syvempi ja leveämpi Syväsalmi.

</div><div id='e14' style="display:none;">
<b>Nimi:</b> Peurasaari<br>
<b>Rinnakkaisnimi:</b> Peura<br>
<b>Paikan kuvaus:</b> Pieni saari Vekaroniemen ja Siverinsaaren välillä Iisvedessä. Kartassa on virheellinen nimi Peura.<br>
<b>Perimätietoa:</b> Saaren kautta arvellaan peurojen uineen suurempiin saariin. 

</div><div id='e15' style="display:none;">
<b>Nimi:</b> Pyllyntaus<br>
<b>Paikan kuvaus:</b> Apajapaikka Iisvedessä Honkasaaren ja mantereen välisessä salmessa.

</div><div id='e16' style="display:none;">
<b>Nimi:</b> Toivakanlahti<br>
<b>Paikan kuvaus:</b> Lahti Iisvedessä Honkasaaren länsipuolella. Nimi esiintyy Haapamäen kalavesilohkokunnan kartassa vuodelta 1914. Nykyään nimeä ei tunneta.

</div><div id='e17' style="display:none;">
<b>Nimi:</b> Uittosaari<br>
<b>Paikan kuvaus:</b> Pieni saari Iisvedessä Honkasaaren ja mantereen välisessä salmessa. <br>
<b>Perimätietoa:</b> Aikoinaan saikarilaisilla oli viljelyksiä Iisveden Kuningassaaressa. Uittosaaren kautta uitettiin hevoset salmen yli Honkasaareen ja siitä edelleen Kuningassaareen (Ukko Hentunen s.1922, 1981).

</div><div id='e18' style="display:none;">
<b>Nimi:</b> Hirsisaari<br>
<b>Rinnakkaisnimi:</b> Hirssaari<br>
<b>Paikan kuvaus:</b> Iisvedessä oleva saari. Kartassa virheellinen nimi Hirssaari.<br>
<b>Perimätietoa:</b> Saaresta on aikoinaan kaadettu puita rakennushirsiksi. Nykyisin saaressa kasvaa männyntaimia, koska metsä hakattiin kerran niin harvaksi, että syysmyrsky kaatoi kaikki isot puut (Ukko Hentunen s.1922, 1981).

</div><div id='e19' style="display:none;">
<b>Nimi:</b> Savisaari<br>
<b>Rinnakkaisnimi:</b> Vornusa<br>
<b>Paikan kuvaus:</b> Iisvedessä Hirsisaaren ja Vuorisaaren välissä oleva pieni saari. Nimi esiintyy Haapamäen kalavesilohkokunnan kartassa vuodelta 1914. Nykyään nimeä ei tunneta.

</div><div id='e20' style="display:none;">
<b>Nimi:</b> Riukusaaret<br>
<b>Rinnakkaisnimi:</b> Ruipelonsaaret, Roipelonsaaret, Roipalonsaaret<br>
<b>Paikan kuvaus:</b> Kolme pientä saarta Iisvedessä Honkasaaren lounaispuolella. Kartassa on virheellinen nimi Roipelonsaaret. Haapamäen kalavesilohkokunnan kartassa vuodelta 1914 esiintyy nimi Roipalonsaaret. <br>
<b>Muita paikkaan liittyviä nimiä: </b> Eteläisin saarista on nimeltään Keräsaari. Toisilla saarilla ei ole nimeä.<br>
<b>Perimätietoa:</b> Tulva-aikana saaret ovat erossa toisistaan, mutta kuin vettä on vähän, ne ovat yhtä saarta. 

</div><div id='e21' style="display:none;">
<b>Nimi:</b> Vuorisaari<br>
<b>Paikan kuvaus:</b> Kumpareinen, korkea saari Iisvedessä Honkasaaren eteläpuolella.

</div><div id='e22' style="display:none;">
<b>Nimi:</b> Kumpusaari<br>
<b>Rinnakkaisnimi:</b> Kuukka<br>
<b>Paikan kuvaus:</b> Pieni kumpareinen saari Iisvedessä. Haapamäen kalavesilohkokunnan kartassa vuodelta 1914 saaren nimenä on ollut Kuukka.


</div><div id='e23' style="display:none;">
<b>Nimi:</b> Sumppu<br>
<b>Paikan kuvaus:</b> Pieni saari Iisvedessä Honkasaaren ja mantereen välisessä kapeassa salmessa. Nimi on nuori, se on annettu vasta kun saareen rakennettiin huvila.

</div><div id='e24' style="display:none;">
<b>Nimi:</b> Helkalahti<br>
<b>Rinnakkaisnimi:</b> Heplanlahti<br>
<b>Paikan kuvaus:</b> Lahti Iisvedessä Honkasaaren länsilaidalla. Nimi esiintyy Haapamäen kalavesilohkokunnan kartassa, joka on vuodelta 1914. Nykyään lahdesta käytetään nimeä Heplanlahti.<br>
<b>Muita paikkaan liittyviä nimiä: </b> Heplanniemi

</div><div id='e25' style="display:none;">
<b>Nimi:</b> Heplanniemi<br>
<b>Paikan kuvaus:</b> Niemi Iisvedessä Honkasaaren länsilaidalla. <br>
<b>Muita paikkaan liittyviä nimiä: </b> Heplanlahti, Helkalahti

</div><div id='e26' style="display:none;">
<b>Nimi:</b> Honkasaari<br>
<b>Paikan kuvaus:</b> Saari Iisvedessä<br>
<b>Perimätietoa:</b> Nimen kerrotaan juontuvan hankain-sanasta. Aikanaan käytiin saaren länsipuolen mantereelta kalassa kaukana Iisvedellä. Pitkältä kalaretkeltä palattaessa olivat veneiden hankaimet usein niin kuluneet että Honkasaaresta piti hakea uudet hankainpuut (Ukko Hentunen s.1922, 1981). 
<br><br>
<b>Nimi:</b> Kuninkaanmökki<br>
<b>Paikan kuvaus:</b> Honkasaaren luoteiskulmassa ollut kalavahdin mökki<br>
<b>Perimätietoa:</b> Saikarilaiset kalastelivat Vekaroniemen päässä olevien saarten kalaisisssa lahdissa. Kilpailu kala-apajista haapamäkeläisten kanssa oli kiihkeä ja siksi Saikarin isännät valitsivat kalavahdin, jonka piti heti ilmoittaa isännille, jos alueelle tuli vieraita kalamiehiä. Vahdiksi valittiin Jussi Korhonen, joka oli ollut Turkin sodassa ja siellä hupsistunut niin, että kuvitteli olevansa kuningas. Siksi mökkiä kutsuttiin Kuninkaanmökiksi ja Jussi Korhosta kuninkaaksi (Ukko Hentunen s.1922, 1981). 

</div><div id='e27' style="display:none;">
<b>Nimi:</b> Suusaari<br>
<b>Paikan kuvaus:</b> Saari Iisvedessä Honkasaaren ja mantereen välisen salmen suussa.
</div>
</div><!-- DOKUALUE (CONTENT) loppuu -->
 
<!-- FOOTER alkaa -->
<div id="footer"> 
	<? include "footer.htm" ?>
</div><!--FOOTER loppuu --> 

</div> <!-- CONTAINER loppuu -->
</body>
</html>
