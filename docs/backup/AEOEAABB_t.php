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
var ids=new Array('tallus','ä1','ä2','ä3','ä4','ä5','ä6','ä7','ä8','ä9','ä10','ä11','ä12','ä13','ä14','ä15','ä16','ä17','ä18','ä19','ö1','ö2','ö3','ö4','ö6','ö7','ö8','ö9','ö10','ö11','ö12','ö13','ö15','ö16','ö17','ö18','ö19','ö20','ö21','ö22','ö23','ö24','ö25','ö26','ö27','ö28','ö29','ö30','ö31','ö32','ö33','ö34','ö35','ö36','ö37','ö38','aa1','aa2','aa3','aa4','aa5','aa6','aa7','aa8','aa9','aa10','aa11','aa12','aa13','aa14','aa15','aa16','aa17','aa18','aa19','aa20','aa21','aa22','aa23','aa24','aa25','aa26','aa27','aa28','aa29','aa30','aa31','aa32','aa33','aa34','aa35','aa36','aa37','aa38','aa39','aa40','aa41','aa42','aa43','aa44','aa45','aa46','aa47','aa48','aa49','aa50','aa51','aa52','aa53','aa54','aa55','aa56','aa57','aa58','aa59','aa60','aa61','aa62','aa63','aa64','aa65','aa66','aa67','aa69','aa70','aa71','aa72','aa73','aa74','aa75','aa76','bb1','bb2','bb3','bb4','bb5','bb6','bb7','bb8','bb9','bb10','bb11','bb12','bb13','bb14','bb15','bb16','bb17','bb18','bb19','bb20','bb21','bb22','bb23','bb24','bb25','bb26','bb27','bb28','bb29','bb30','bb31','bb32','bb33','bb34','bb35','bb36','bb37','bb38','bb39','bb40','bb41','bb42','bb43','bb44','bb45','bb46','bb47','bb48','bb49','bb50','bb51','bb52','bb53','bb54','bb55','bb56','bb57','bb58','bb59','bb60','bb61','bb62','bb63','bb64','bb65','bb66','bb67','bb68','bb69','bb70','bb71','bb72','bb73','bb74','bb75','bb76','bb77','bb78');


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
<!-- DOKUALUE (CONTENT) alkaa -->
<div id="content">
<br>
    <table class="tab" width="100%"  border="0">
        <tr>
          <td width="31%" height="26"><h2><img src="kuva/salattutieto.jpg" width="339" height="64" /></h2></td>
          <td>  <!-- HELP -->
		  <div align="right"><b>Talluskyl&auml;, &copy; Maanmittauslaitos, lupa nro PSAVO/018/2007</b> </div>	  </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
    </table>
   <!-- VIDEO OBJEKTI -->
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 

codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="700" height="400">
   <param name="movie" value="AEOEAABB.swf" />
   <param name="WMODE" value="opaque" />
   <param name="swliveconnect" value="true">
   <param name="quality" value="high" />
   <embed src="AEOEAABB.swf" quality="high" width="700" height="400" WMODE="opaque" 

pluginspage="http://www.macromedia.com/go/getflashplayer" 
 type="application/x-shockwave-flash"  swliveconnect="true"></embed> 
      </object>
      <!-- VIDEO OBJEKTI -->
  <div id='tallus' style="display:none;">

<b>Nimi: </b>Tallus
  <br><b>Rinnakkaisnimi:</b> Talluskylä, Töppöskylä, Loppukylä
  <br><b>Paikan kuvaus: </b>Hyvin laaja-alainen kylä Tervon pitäjän koilliskulmassa. Kylän väitetään olevan  kolmasosa koko pitäjän alueesta. 
  <br><b>Muita paikkaan liittyviä nimiä:</b> Kylän eteläosassa on suuri Tallusjärvi, joka ulottuu Karttulan pitäjän puolelle. Kylän länsiosassa on Talluslampi, jonka lähistöllä on Tallusmäki ja samanniminen kantatalo.  
  <br><b>Perimätietoa: </b>Nimen arvellaan johtuvan siitä, että kulkuyhteydet ovat olleet aikaisemmin kylässä hyvin huonot, sillä koko kylän alueella on 1940-luvulle saakka ollut yksi ainoa maantie. ”Jalakapatikassa sitä sittä vuam pit kulukee, ku ei ollunna kuk kinttupolokuja ja pahasija kärriteitä. Tallukat sitä ol jalassa ku kulettii” (Edla Ovaskainen, s.1885, 1968).  
  <br>  <br>
<b>Nimi:</b> Eteläkylä
  <br><b>Paikan kuvaus:</b> Liesjärveltä Tallusjärveen laskevan Liesjoen eteläpuolella oleva osa Talluskylää. 
  <br>  <br>
<b>Nimi:</b> Länsikylä 
  <br><b>Paikan kuvaus:</b> Talluskylän länsiosan nimitys. Kylä rajoittuu pohjoisessa Pielaveden pitäjään, idässä Vääränlampiin ja Vääränpuroon, etelässä Tallusjärveen ja Karttulan kylään sekä lännessä Koivulahden kylään. 
  <br>  <br>
<b>Nimi:</b> Pohjoiskylä
  <br><b>Paikan kuvaus:</b> Liesjärvestä Tallusjärveen laskevan Liesjoen pohjoispuolella oleva osa Talluskylää. Pohjois- ja Länsikylän rajana on Vääränlammista Tallusjärveen laskeva Vääränpuro ja pohjoisessa Pohjoiskylän raja kulkee suunnilleen Isolaiha-nimisen lammin tienoilla, jonka pohjoispuolella on Kiukooaho-niminen kulmakunta.
  <br>  <br>
<b>Nimi:</b> Loppukylä
  <br><b>Rinnakkaisnimi:</b> Talluskylä 
  <br><b>Paikan kuvaus:</b> Talluskylästä käytetty köllinimi. 
  <br><b>Perimätietoa:</b> Kylä sijaitsee Tervon pitäjän koilliskulmassa, josta nimi johtuu. 
  <br>  <br>
<b>Nimi:</b> Töppöskylä
  <br><b>Rinnakkaisnimi:</b> Talluskylä
  <br><b>Paikan kuvaus:</b> Talluskylän kansanomainen ja leikillinen nimitys.
  <br><b>Perimätietoa</b>: Köllinimi johtuu siitä, että kylässä ovat aikaisemmin olleet huonot tieyhteydet ja maasto on soista ja vaikeakulkuista. Siksi aikaisemmin on asukkaiden hyvin paljon täytynyt kulkea jalkaisin pitkiäkin matkoja. 
  </div>
<div id='ä1' style="display:none;">
<b>Nimi:</b> Lummesuo
<br><b>Rinnakkaisnimi:</b> Lummeneva
<br><b>Paikan kuvaus:</b> Suuri metsäsuo, joka ulottuu lähelle Pielaveden pitäjän rajaa. Alueen rinnakkaisnimi on Lummeneva. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Suon keskellä olevalla suosaarekkeella on Lummeniemi-niminen tila ja suon kaakkoispuolella on Lummekangas, jossa on samanniminen tila. Suon länsipuolella on Kurkimäki-niminen kantatalo. 
<br><b>Perimätietoa:</b> Suo on paikoitellen niin vetistä, että siinä kasvaa lumpeita. Lähes koko suo on hyvin upottava ja vetinen. Kesäisin suolla asustaa kurkia, joita muualla lähiseudulla ei tiedetä asustavan. 

</div><div id='ä2' style="display:none;">
<b>Nimi:</b> Vehkalampi
<br><b>Paikan kuvaus:</b> Pitkulainen lampi, jossa kasvaa runsaasti vehkoja. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lammin ympärillä on vetinen metsäsuo nimeltä Vehkasuo.

</div><div id='ä3' style="display:none;">
<b>Nimi:</b> Notkola
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin Kurkimäen talon maata. 
<br><b>Perimätietoa:</b> Tila on perustettu 1940-luvulla. Tila sijaitsee notkelmassa alavalla niityllä. 

</div><div id='ä4' style="display:none;">
<b>Nimi:</b> Ristinen
<br><b>Paikan kuvaus:</b> Kulmakunta, johon kuuluu kaksi tilaa; Iso-Ristinen, joka on Pielaveden kunnan puolella, ja Pieni-Ristinen. Kulmakuntaan kuuluu myös tilojen lähiympäristössä olevat asumukset. 
<br><b>Perimätietoa:</b> Suurin osa Ristisen kulmakuntaa on Pielaveden pitäjän puolella. Alue ei ole selvärajainen. 
<br><br>
<b>Nimi:</b> Pieni-Ristinen
<br><b>Paikan kuvaus:</b> Lampi, josta osa ulottuu Pielaveden Talluksen kylän puolelle. Pieni-Ristinen on myös lohkotilan nimi. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Pielaveden puolella on tila nimeltä Iso-Ristinen. 
<br><b>Perimätietoa:</b> Tila on alunperin ollut Mamahon talon torppa. Tila on kertoman mukaan perustettu 1800-luvun alussa. Mamahon talo sijaitsee Tervon Nuutilassa, mutta siihen kuuluu maapalsta Talluksessa. Molemmat tilat sijaitsevat kyläteiden risteyksessä, mistä niiden nimi johtuu. Tilat kuuluvat Ristinen-nimiseen kulmakuntaan. 

</div><div id='ä5' style="display:none;">
<b>Nimi:</b> Kurkimäki
<br><b>Rinnakkaisnimi:</b> Härkämäki
<br><b>Paikan kuvaus:</b> Kantatalo, joka on olettamusten mukaan ainakin 300 vuotta vanha (vuosi 1968). Talo sijaitsee korkealla mäellä.
<br><b>Perimätietoa:</b> Lähistöllä sijaitsee suuri Lummesuo, jossa asustaa kurkia. Kymi-yhtiö on ostanut talon 1920-luvun loppupuolella. Nykyisin talossa asuu siirtolaisia mutta Kymi-yhtiö omistaa edelleen suuren osan talon vanhoista metsämaista. 
<br><br>
<b>Nimi:</b> Tallin taustapelto
<br><b>Paikan kuvaus:</b> Pelto talon kaakkoispuolella.
<br><b>Perimätietoa:</b> Pellon luoteispäässä on ollut talon talli, joten pelto on talosta katsoen tallin takana. Talli on myöhemmin purettu 
<br><br>
<b>Nimi:</b> Lahola
<br><b>Paikan kuvaus:</b> Kurkimäen talon hävinnyt torppa.
<br><b>Perimätietoa:</b> Torppa on ollut itsenäistymätön ja hävinnyt kertoman mukaan 1800-luvun viimeisinä vuosina. Nykyisin torpan paikalla on Laholanautio. ”Se möki on kuulemma olluh hyvin piej ja laho ja ihan piällekuatuva, kun siinä ov vielä asunna immeisijä” (Lauri Lintunen s. 1898, 1968).

</div><div id='ä6' style="display:none;">
<b>Nimi:</b> Kurkipuro
<br><b>Paikan kuvaus:</b> Luonnonoja, joka alkaa Lummesuolta Kurkimäen talon lähettyviltä ja laskee Pielaveden ja Tervon pitäjien rajana olevan Pitkäänjokeen. Kurkipuro tarkoittaa myös puron loppupään varrella sijaitsevaa lohkotilaa.
<br><b>Perimätietoa:</b> Lohkotila on alunperin ollut Kurkimäen talon torppa. Olettamusten mukaan torppaon lähes 100 vuotta vanha (vuosi 1968). 

</div><div id='ä7' style="display:none;">
<b>Nimi:</b> Rajala
<br><b>Rinnakkaisnimi:</b> Kurkipuro
<br><b>Paikan kuvaus:</b> Kurkipuron tilan virallinen nimi, jota ei kansanomaisesti käytetä.
<br><b>Perimätietoa:</b> Tila sijaitsee lähellä Pielaveden ja Tervon pitäjien rajaa. 

</div><div id='ä8' style="display:none;">
<b>Nimi:</b> Joenvarsiniitty
<br><b>Paikan kuvaus:</b> Vähäinen niitty Tervon ja Pielaveden pitäjien rajana olevan Pitkäjoen varrella. 

</div><div id='ä9' style="display:none;">
<b>Nimi:</b> Likanen
<br><b>Paikan kuvaus:</b> Kantatalo, jonka iäksi on arveltu ainakin 200 vuotta (vuosi 1968). 
<br><b>Muita paikkaan liittyviä nimiä:</b> Talosta hieman länteen on Likaslampi ja talon ympärillä on Likaskangas-niminen kangasselänne. 
<br><b>Perimätietoa:</b> Likaslampi on hyvin mutainen ja sameavetinen. Kymi-yhtiö on ostanut talon 1920-luvulla. Nykyisin talo on siirtolaisten omistuksessa, mutta suurin osa metsämaata kuuluu edelleen Kymi-yhtiölle (vuosi 1968). 
<br><br>
<b>Nimi:</b> Likaslampi
<br><b>Paikan kuvaus:</b> Hyvin mutainen ja sameavetinen lampi. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lammen itäpuolella on Likaskangas, jossa on Likanen-niminen kantatalo. 

</div><div id='ä10' style="display:none;">
<b>Nimi:</b> Papinrapakko
<br><b>Paikan kuvaus:</b> Mutainen vesilammikko Likasen talosta jonkin matkaa kaakkoon kylätien molemmilla puolilla. 
<br><b>Perimätietoa:</b> ”Pappija on kuletettu kärrillä Likaselle ja se kaet o ollur rospuuttoaekoo ja se tie ollunna hyvih huonossa kunnossa ja ne kärrit on kuatunna justiin ser rapakon kohalla ja se pappikiin kuul kuatuneen suoraan sinne vettee” (Matti Tossavainen, s.1908, 1968). Rapakko tarkoittaa vetistä maa-aluetta, joka on savi- tai mutamaata. 

</div><div id='ä11' style="display:none;">
<b>Nimi:</b> Soidinkangas
<br><b>Paikan kuvaus:</b> Korkea kangasmaasto, jossa oleskelee paljon metsoja soidinaikana. Soidinkangas on myös kankaalla sijaitsevan lohkotilan nimi.
<br><b>Perimätietoa:</b> Kankaalla on yleensä runsaasti muitakin metsälintuja, joten se on suosittu metsästyspaikka. Tila on arvelujen mukaan 100-150 vuotta vanha (vuosi 1968).  

</div><div id='ä12' style="display:none;">
<b>Nimi:</b> Ruunasuo
<br><b>Paikan kuvaus:</b> Laaja viljelyssuo Soidinkankaan tilan eteläpuolella. 
<br><b>Perimätietoa:</b> Nimen alkuperää ei enää muisteta. 

</div><div id='ä13' style="display:none;">
<b>Nimi:</b> Rakola
<br><b>Rinnakkaisnimi:</b> Rakokivi
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Kurkimäen talon torppa. Tilan virallinen nimi on Rakokivi, joka ei ole kansanomaisessa käytössä. 
<br><b>Perimätietoa:</b> Torppa on kertoman mukaan ainakin 90 vuotta vanha (vuosi 1968). ”Siin ol lähellä kiv, joka oh halaki” (Matti Tossavainen, s.1908, 1968).
<br><br>
<b>Nimi:</b> Navetantauspelto
<br><b>Paikan kuvaus:</b> Pieni pelto tilan pohjoispuolella. 
<br><b>Perimätietoa:</b> Pellon etelälaidassa on navetta, joten pelto on tilan asuinrakennuksesta katsoen navetan takana. 

</div><div id='ä14' style="display:none;">
<b>Nimi:</b> Ukkokangas
<br><b>Paikan kuvaus:</b> Kurkimäen talon hävinnyt torppa. Suunnilleen samalla paikalla kuin hävinnyt torppa, sijaitsee nykyisin mökki.
<br><b>Perimätietoa:</b> Torppa on ollut itsenäistymätön ja hävinnyt 1800-luvun lopulla. ”Siinä kuulu melekeim myötääsä ollee ukkoja pontikkoo keittämässä” (Matti Tossavainen, s.1908, 1968). Paikalle on rakennettu mökki noin vuonna 1950.


</div><div id='ä15' style="display:none;">
<b>Nimi:</b> Röntynen
<br><b>Paikan kuvaus:</b> Hävinnyt mökki Kurkimäen talon maalla.
<br><b>Perimätietoa:</b> Mökki on hävinnyt 1800-luvun lopulla. Kertoman mukaan mökissä on asunut Röntysiä. Röntysessä on poltettu miilua.

</div><div id='ä16' style="display:none;">
<b>Nimi:</b> Karhulähde
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Kurkimäen talon torppa. 
<br><b>Perimätietoa:</b> Torppa on olettamusten mukaan yli 100 vuotta vanha (vuosi 1968). Tilan lähistöllä on suuri lähde. ”Ne seovut on semmosta syvänmuata ja niillä paekon ol vielä tässä monjaeta kymmenijä vuosija takaperin susija ja aekasemmi ol karhujae [lähistöllä on Susitulli-niminen kangasselänne]” (Lauri Lintunen, s.1898, 1968). Tila on ollut vuodesta 1964 lähtien asumattomana. 

</div><div id='ä17' style="display:none;">
<b>Nimi:</b> Lummeniemi
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Kurkimäen talon torppa. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lähistöllä on Lummekangas-niminen tila. 
<br><b>Perimätietoa:</b> Torppa on arvelujen mukaan 120 vuotta vanha (vuosi 1968). Tila sijaitsee Lummesuon eteläosassa olevalla suosaarekkeella. Lummesuon vetisin kohta on suosaarekkeen pohjoispuolella, joten saareke muodostaa ikään kuin niemen, joka pistää suolle. 

</div><div id='ä18' style="display:none;">
<b>Nimi:</b> Lummekangas 
<br><b>Paikan kuvaus:</b> Lummekankaalla sijainnut Kurkelan talon torppa sekä samalla paikalla sijaitseva lohkotila.
<br><b>Perimätietoa:</b> Torppa on ollut itsenäistymätön ja hävinnyt 1890-luvun loppupuolella.  Lohkotilan alue on alunperin ollut Kurkimäen talon maata ja erotettu omaksi tilakseen Kymi-yhtiön maasta. Tila on perustettu vuonna 1952. 

</div><div id='ä19' style="display:none;">
<b>Nimi:</b> Soidinkangas
<br><b>Paikan kuvaus:</b> Korkea kangasselänne Lahelan länsipuolella. 
<br><b>Perimätietoa:</b> Kangas on metsojen suosima soidinpaikka. 

</div><div id='ö1' style="display:none;">
<b>Nimi:</b> Lehtolahti
<br><b>Paikan kuvaus:</b> Suurehko lahti Suuressa Korosjärvessä. Lehtolahti on myös mökki lahden etelärannalla. 
<br><b>Perimätietoa:</b> Lahden rannalla kasvaa lehtimetsää. 

</div><div id='ö2' style="display:none;">
<b>Nimi:</b> Korospää
<br><b>Paikan kuvaus:</b> Kantatalo, joka on kertoman mukaan satoja vuosia vanha. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Pienen Korosjärven lähettyvillä on kaksi taloa, Korosmäki ja Korosranta. Korosjoen rannalla on Koroskoski-niminen tila. 
<br><b>Perimätietoa:</b> Talo sijaitsee Suuren Korosjärven pohjoispäässä olevan Pohjoislahden rannalla. Koro tarkoittaa palokärkeä. Sanotaan, että kun koro huutaa, pohjoisesta tuulee kolme päivää. 
<br><br>
<b>Nimi:</b> Riihentakapelto
<br><b>Paikan kuvaus:</b> Pelto Korospään talon pohjoispuolella. Pellon etelälaidassa on riihi. 
<br><br>
<b>Nimi:</b> Riihentauskallio
<br><b>Paikan kuvaus:</b> Sileä kallio Korospään asuinrakennuksesta vähän pohjoiseen riihen takana metsässä.
<br><br>
<b>Nimi:</b> Malisniitty
<br><b>Paikan kuvaus:</b> Pienehkö niitty Korospään talosta vähän pohjoiseen, Riihentakapellon pohjoispuolella.  
<br><b>Perimätietoa:</b> ”Sahilla asu malisija, ja niihin pit joka kesä niittee se niitty” (Edla Ovaskainen, s.1885, 1968). [Sahi niminen tila on ollut Korospään talon torppa, jonka asukkaat ovat joutuneet torpan vuokrasta niittämään päivätöinä Malisniityn.] 
<br><br>
<b>Nimi:</b> Paunula
<br><b>Paikan kuvaus:</b> Hävinnyt mökki Korospään talon maalla. Nykyisin paikalla on samanniminen pienehkö niitty, josta käytetään myös nimeä Paunulanautio. 
<br><b>Perimätietoa:</b> Mökki on ollut itsenäistymätön ja hävinnyt  1980-luvun loppupuolella. ”Siinä mökissä asu viimesenä Paonu [Alban] Karhune” (Edla Ovaskainen, s.1885, 1968). 

</div><div id='ö3' style="display:none;">
<b>Nimi:</b> Levälahti
<br><b>Paikan kuvaus:</b> Lahti Suuressa Korosjärvessä. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lahden pohjoispuolelle pistää Levänniemi. 
<br><b>Perimätietoa:</b> Lahdessa kasvaa runsaasti leviä.

</div><div id='ö4' style="display:none;">
<b>Nimi:</b> Pekkala
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin Kiukooahon talon maata. 
<br><b>Perimätietoa:</b> Tila on perustettu vuonna 1952. Tilan isäntä on Pekka Tamio (vuosi 1968). 

</div><div id='ö6' style="display:none;">
<b>Nimi:</b> Suursuo
<br><b>Paikan kuvaus:</b> Hyvin laaja metsäsuoalue, joka on suureksi osaksi otettu viljelykseen.
<br><b>Perimätietoa:</b> Alueella on nykyisin (vuosi 1968) runsaasti uudisasutusta, joka on suureksi osaksi peräisin 1950-luvun puolivälistä.  

</div><div id='ö7' style="display:none;">
<b>Nimi:</b> Laihanpuro
<br><b>Paikan kuvaus:</b> Isolaihasta Pieneen-Ristiseen laskeva luonnonpuro.

</div><div id='ö8' style="display:none;">
<b>Nimi:</b> Isolaiha
<br><b>Paikan kuvaus:</b> Pitkulainen lampi Talluksen pohjoisosassa. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lammesta jonkin matkaa etelään on pienempi lampi nimeltään Pienilaiha. Lammesta Pieneen-Ristiseen laskee luonnonoja nimeltän Laihanpuro. Lammin pohjoispuolella on vetinen metsäsuo nimeltään Laihansuo ja sen lähistöllä on kaksi niittyä nimeltään Laihanniityt. 
<br><b>Perimätietoa:</b> Nimen alkuperää ei enää tarkkaan tiedetä, mutta sen arvellaan johtuvan siitä, että maa on niillä paikoin suoperäistä ja karua eli ”laihaa”.

</div><div id='ö9' style="display:none;">9
<b>Nimi:</b> Pienilaiha
<br><b>Paikan kuvaus:</b> Isolaihasta jonkin matkaa etelään on pienempi lampi nimeltään Pienilaiha.

</div><div id='ö10' style="display:none;">
<b>Nimi:</b> Pirttipuro
<br><b>Paikan kuvaus:</b> Metsäsuolta Laihanpuroon laskeva luonnonoja. Pirttipuro on myös tila puron varrella.
<br><b>Perimätietoa:</b> Tila on lohkaistu Kiukooahon ja Huosiaiskankaan talojen mailta. Tila on perustettu 1950-luvun puolivälissä. 

</div><div id='ö11' style="display:none;">
<b>Nimi:</b> Kyminmetsä
<br><b>Paikan kuvaus:</b> Suuri metsäalue
<br><b>Perimätietoa:</b> Metsäalueen on Halla-yhtiö ostanut ensin Korospään talolta 1920-luvulla. Pian sen jälkeen yhtiö teki konkurssin, jolloin Kymi-yhtiö osti metsämaan. 

</div><div id='ö12' style="display:none;">
<b>Nimi:</b> Huosiaiskangas
<br><b>Paikan kuvaus:</b> Kapeahko kangasselänne Huosiaislammin länsipuolella. Huosiaiskangas tarkoitta myös kankaan etelälaidassa olevaa taloa. 
<br><b>Perimätietoa:</b> Talo on kertoman mukaan lähses 150 vuotta vanha  (vuosi 1968). Talo on ollut Kymi-yhtiön omistuksessa 1920-luvun loppupuoliskolta lähtien. ”Niinä aekona mon talo joutu semmoseer rahapullaa että sittä ne joutu virmalle” (Lauri Koskinen, s.1901, 1968).

</div><div id='ö13' style="display:none;">
<b>Nimi:</b> Kaijanlampi
<br><b>Paikan kuvaus:</b> Kapea ja pitkulainen lampi Huosianlammista jonkin matkaa etelään. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lammista Mustinlampiin laskee luonnonoja Kaijanpuro. Lammin ja puron ympärillä on laaja metsäsuo nimeltään Kaijansuo, joka ulottuu Maaningan pitäjän puolelle. Maaningan pitäjän puolella on Kaidanmäki-niminen tila, jossa on ollut Kaija-niminen emäntä. 
<br><b>Perimätietoa:</b> Kaijanlampi ulottuu Maaningan pitäjän Kurolanlahden kylän puolelle. 

</div><div id='ö15' style="display:none;">
<b>Nimi:</b> Päivärinne
<br><b>Rinnakkaisnimi:</b> Kilstupa
<br><b>Paikan kuvaus:</b> Hävinnyt lohkotila, joka on alunperin ollut Korospään torppa. 
<br><b>Perimätietoa:</b> Torppa on kertoman mukaan ainakin 80 vuotta vanha (vuosi 1968). Talo on hävinnyt noin vuonna 1950. Tila sijaitsee korkeahkon mäen eteläpuoleisella rinteellä. Kilstupa on paikka, joka joutui yhtiölle. 

</div><div id='ö16' style="display:none;">
<b>Nimi:</b> Sahi
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Korospään talon torppa. 
<br><b>Perimätietoa:</b> Tila on perustettu arvelujen mukaan 1800-luvun puolivälin jälkeen. Tilan lähettyvillä on luonnonoja, joka on nyt kuivunut. Sittemmin tila on liitetty Rappumäen tilaan. Sahi tarkoittaa luonnonojaa. 

</div><div id='ö17' style="display:none;">
<b>Nimi:</b> Rappuvuori
<br><b>Paikan kuvaus:</b> Hyvin korkea ja jyrkkä mäki. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Mäen länsipuolella on Rappumäki-niminen lohkotila.
<br><b>Perimätietoa:</b> ”Se muasto on siinä semmosta, että siinä [vuoren] rinteessä o ihan kur rappuset, että niitä myötev voe kiivetä pitkän matkoo sev vuorer rinnettä” (Lauri Koskinen, s.1901, 1968). 
<br><br>
<b>Nimi:</b> Rappumäki
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Korospään talon torppa. 
<br><b>Perimätietoa:</b> Torppa on arvelujen mukaan yli 100 vuotta vanha (vuosi 1968). Tila sijaitsee mäellä Rappuvuoresta vähän itään. 

</div><div id='ö18' style="display:none;">
<b>Nimi:</b> Kolunvuori
<br><b>Paikan kuvaus:</b> Hyvin korkea mäki Asumaisenlammin itäpuolella. 
<br><b>Perimätietoa:</b> Nimen arvellaan johtuvan siitä, että mäki on hyvin kivinen ja epätasainen. 

</div><div id='ö19' style="display:none;">
<b>Nimi:</b> Välisuo
<br><b>Paikan kuvaus:</b> Viljelyssuo Asumaisenpuron yläjuoksun varrella. 
<br><b>Perimätietoa:</b> Suo sijaitsee Asumaisenlammin ja Kempin välissä.

</div><div id='ö20' style="display:none;">
<b>Nimi:</b> Kaura-aho
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Syrjälän talon torppa. 
<br><b>Perimätietoa:</b> Torppa on perustettu 1900-luvun alussa. Torppa sijaitsee aholla, joka on ollut Syrjälän talon kaskimaana joskus 1800- ja 1900-lukujen vaihteessa. ”Kasvo siinä kaaroo, koskapa minä muistan ku siinä yhtenä kesänä ol niih hyvä kaara, että sitä piettii ihmeenä sinä aekana koko seovulla” (Edla Ovaskainen s. 1885, 1968).  


</div><div id='ö21' style="display:none;">
<b>Nimi:</b> Kommio
<br><b>Paikan kuvaus: </b>Lohkotila, joka on alunperin ollut Harjun talon torppa. 
<br><b>Muita paikkaan liittyviä nimiä: </b>Tilan ympärillä on laaja asumaton metsäsuoalue nimeltään Kommionsydänmaa, joka on virheellisesti nimetty Kankaaksi Maanmittaushallituksen taloudellisessa kartassa vuonna 1944. 
<br><b>Perimätietoa:</b> Harjun talo sijaitsee Tervon Nuutilassa, mutta se on omistanut sydänmaapalstan Talluksessa, kuten useat muutkin Nuutilan kantatalot. Tila on kertoman mukaan yli 100 vuotta vanha ja on ollut nyt useita vuosia asumattomana (vuosi 1968). 
<br>Kommin korpitilalla eli toisen maailmansodan jälkeen Miina miehensä ja lastensa kanssa. Miina oli yritteliäs ja mahdottoman siisti ihminen. Hän elätti perhettään mm. marjoja poimimalla ja pontikkaa keittämällä. Taloon oli kyläläisten kertoman mukaan ”kahakätinen liikenne”: tisleiden raaka-aineet tuotiin ympäristöstä ja vietiin jalostettuina pois pienemmissä astioissa.

</div><div id='ö22' style="display:none;">
<b>Nimi:</b> Asumainen
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Tervon Nuutilassa sijaitsevan Honkamäen talon torppa.
<br><b>Perimätietoa:</b> Honkamäellä kuten useilla muillakin Nuutilan taloilla on ollut sydänmaapalsta Talluksessa. Olettamusten mukaan tila on ainakin 130 vuotta vanha (vuosi 1968). Tila sijaitsee Asumaisenlammin pohjoisrannalla.

<b>Nimi:</b> Lamminrantapellot
<br><b>Paikan kuvaus:</b> Pellot, jotka sijaitsevat Asumaisenlammmin pohjoispään rannalla.

</div><div id='ö23' style="display:none;">
<b>Nimi:</b> Kontiolampi
<br><b>Paikan kuvaus:</b> Pienehkö lampi Asumaisenlammin länsipuolella. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lammin ympärillä on suuri metsäsuo nimeltään Kontiosuo. Lähistöllä sijaitsee Susitulli-niminen kangasselänne ja Karhulähde-niminen tila. 
<br><b>Perimätietoa:</b> Niillä seuduin on aiemmin oleskellut susia ja karhuja. ”Kuulemma sel lammil lähellä on tapettu karhu, vuan siitä on kaavan koskapa aenakaan minä en muista sitä” (Lauri Lintunen, s.1898, 1968). 

</div><div id='ö24' style="display:none;">
<b>Nimi:</b> Heikkilä
<br><b>Paikan kuvaus:</b> Mökki Lahdentauksen talon maalla. 
<br><b>Perimätietoa:</b> Lahdentauksen talo sijaitsee Tervon Nuutilassa, mutta omistaa sydänmaapalstan Talluksessa. Mökki on rakennettu kertoman mukaan 1800-luvun puolivälin tienoilla. Se on ollut itsenäistymätön ja hävinnyt joskus 1920-luvulla. Mökissä on asunut Heikkisiä. Nyt paikalla on Heikkilänautio.

</div><div id='ö25' style="display:none;">
<b>Nimi:</b> Susitulli
<br><b>Paikan kuvaus:</b> Kapea kangasselänne Asumaisenlammin luoteispuolella. 
<br><b>Muita paikkaan liittyviä nimiä:</b> <br><b>Perimätietoa:</b> Seudulla on ollut aikaisemmin susia ja karhuja. Lähistöllä on Kontiolampi ja Karhulähde-niminen tila. Kangasselänteen toisella puolella on Kontiolammista Asumaisenlampiin laskeva luonnonoja ja toisella puolella upottava metsäsuo. Kangas muodostaa puron ja suon väliin kapean suppilon, jonka kapeampi pää on Asumaisenlammin lähellä. Susien on pohjoisesta päin tullessaan ollut pakko juosta tätä kapeaa kangasmaata pitkin. Metsästäjät ovat asettuneet väijyksiin suppilon kapeimpaan kohtaan, jossa heidän on ollut helppo surmata eläin. 

</div><div id='ö26' style="display:none;">
<b>Nimi:</b> Mustinlampi
<br><b>Paikan kuvaus:</b> Pieni, pitkulainen lampi Suuren-Koroksen pohjoispuolella. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lammista Suuren-Koroksen Pohjoislahteen laskee mutkikas luonnonoja, Mustinpuro. Lammin länsi- ja luoteispuolella on pitkä kangasselänne, Mustinkangas. Lammista vähän matkaa itään on korkea mäki, Mustinmäki. 
<br><b>Perimätietoa:</b> ”Siinä [lammissa] oh hyvin musta mutapohja, nii että se vessiin näättää mustalle” (Lauri Koskinen, s.1901, 1968). 

</div><div id='ö27' style="display:none;">
<b>Nimi:</b> Pohjoislahti
<br><b>Paikan kuvaus:</b> Suuri lahti Suuren-Korosjärven pohjoispäässä. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lahden länsirannalla on Pohjoislahdenniitty.

</div><div id='ö28' style="display:none;">
<b>Nimi:</b> Talvitiensuu
<br><b>Paikan kuvaus:</b> Suuren Korosjärven lahti Lasinlahden eteläpuolella. 
<br><b>Perimätietoa:</b> Talvisin on järven jäälle tehty talvitie, joka on alkanut lahdesta. Tie alkoi Sakin mökiltä (Koroskoskelle). Talvitie on talvella käytössä oleva tie, joka tehdään usein jäälle tai maastoon, joka kesällä on vaikeakulkuista ja siten tien paikaksi kelpaamatonta, esimerkiksi suota. Talvitien tarkoituksena on yleensä toimia oikotienä. 

<b>Nimi:</b> Ukonvalkamo
<br><b>Paikan kuvaus:</b> Suuren Korosjärven lahti Talvitiensuun kaakkoispuolella. 
<br><b>Perimätietoa:</b> Lahdessa on venevalkama. 

</div><div id='ö29' style="display:none;">
<b>Nimi:</b> Morsianniemi
<br><b>Paikan kuvaus:</b> Suureen-Korokseen pistävä niemi Ukonvalkamon kaakkoispuolella. 
<br><b>Perimätietoa:</b> ”Korospiän poeka, hanno [Hannes] huttunen nimestään, sano, että hän tekköö siihen niemeeh haaj ja tuop siihem morsijammijaaj ja pittää niitä siinä haassa, kun siihe on niil lyhyt matka niihil luokse” (Edla Ovaskainen, s.1885, 1968). Tätä on kutsuttu Talluskylälläiseksi haaremiksi. 

</div><div id='ö30' style="display:none;">
<b>Nimi:</b> Tuppilahti
<br><b>Paikan kuvaus:</b> Kapea lahti Suuressa Korosjärvessä. Tuppilahti on myös lahden rannalla sijaitsevan kantatalon nimi.
<br><b>Muita paikkaan liittyviä nimiä:</b> Lähistöllä on järvi nimeltä Tuppi-Valkeinen.
<br><b>Perimätietoa:</b> ”Se on kappee kun tuppi” (Edla Ovaskainen, s.1885, 1968). Lahdesta on löydetty ruuhi ja rannalta kivikirves ja alkeellinen tulisija. Kaikkiaan näiltä tienoin on löydetty kolme vanhaa ruuhta, joten seudulla on jo hyvin varhain liikkunut ihmisiä. Lahteen liittyy tarina, jonka mukaan pieni lapsi on leikkinyt kalliolla lahden rannassa. Kalliolla on perattu kaloja, joista suomut ovat jääneet kalliolle tehden sen liukkaaksi. Lapsi on leikkiessään liukastunut ja pudonnut veteen ja hukkunut. Lapsen isä on ollut noita ja taikonut järven siten, ettei siitä ole sen jälkeen saatu lohia eikä siikoja, joita siihen saakka on ollut järvessä runsaasti (Edla Ovaskainen, s.1885, 1968).
<br><br>
<b>Nimi:</b> Majaniemi
<br><b>Paikan kuvaus:</b> Suureen Korosjärveen Tuppilahden länsipuolelle pistävä niemi, jossa on Majaniemenpelto. 
<br><b>Perimätietoa:</b> ”Siinä on tehty vanahoja löytyöjä, aenakii vanaha ruuhi siitä rannasta ja tulsija, että kaet siinä o immeiset majjoosa pitännä jo hyvin kaava aekoo taakseppäe. Ser ruuhen näem minnäe ja se ol poltamalla tehty (Edla Ovaskainen, s.1885, 1968). 
<br><br>
<b>Nimi:</b> Kokkoniemi
<br><b>Paikan kuvaus:</b> Suureen Korosjärveen pistävä niemi Majaniemen pohjoispuolella. 
<br><b>Perimätietoa:</b> Niemessä on Kokkoniemenpelto. ”Siinä on kokko pitännä pesseesä” (Edla Ovaskainen, s.1885, 1968

</div><div id='ö31' style="display:none;">
<b>Nimi:</b> Tuppilahti
<br><b>Paikan kuvaus:</b> Tuppilahden rannalla sijaitseva kantatalo.
<br><b>Perimätietoa:</b> Talo on kertoman mukaan yli 300 vuotta vanha (vuosi 1968). 
<br><br>
<b>Nimi:</b> Hakkioniitty
<br><b>Paikan kuvaus:</b> Niitty Tuppilahden rannalla. 
<br><b>Perimätietoa:</b> ”Siit oh hakattu rakennushirret ja sittä tehty siitä hakkijosta niitty” (Edla Ovaskainen, s.1885, 1968). 
<br><br>
<b>Nimi:</b> Mäkisuo
<br><b>Paikan kuvaus:</b> Metsittynyt viljelyssuo Haavikkomäen eteläpuolella. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Mäen päällä on laakea lehtimetsää kasvava alue nimeltään Mäklehto. 

</div><div id='ö32' style="display:none;">
<b>Nimi:</b> Syrjälä
<br><b>Paikan kuvaus:</b> Suuren Korosjärven länsirannalla sijaitseva kantatalo.
<br><b>Perimätietoa:</b> Talon iäksi on oletettu ainakain 200 vuotta (vuosi 1968). Aikaisemmin talon sijainti oli hyvin syrjäinen, sillä maantielle oli matkaa useita kilometrejä. 1950-luvun puolivälissä on rakennettu maantie Kiukooahoon. Maantie kulkee aivan Syrjälän talon sivuitse. 
<br><br>
<b>Nimi:</b> Riihenperusniity
<br><b>Paikan kuvaus:</b> Metsittynyt niitty talon pohjoispuolella.
<br><b>Perimätietoa:</b> Niityn laidassa on riihi, jonka takana metsässä on pieni Riihemperuskallio.
<br><br>
<b>Nimi:</b> Niittylato
<br><b>Paikan kuvaus:</b> Riihenperusniityn laitamalla oleva suurehko lato
<br><br>
<b>Nimi:</b> Maantientakapelto
<br><b>Paikan kuvaus:</b> Pelto talon länsipuolella maantien varressa.
<br><b>Perimätietoa:</b> 1950-luvulla rakennettu maantie kulkee aivan Syrjälän talon länsipuolitse. Tie alkaa Liesjärven Meijerinlahden lähettyviltä maantieltä ja kulkee Kiukooahon kulmakunnan läpi Pielaveden pitäjän puolelle. Pelto sijaitsee tien länsipuolella, siis maantien takana Syrjälän talosta katsottuna. 
<br><br>
<b>Nimi:</b> Saunaranta
<br><b>Paikan kuvaus:</b> Vähäinen lahti Suuressa Korosjärvessä.
<br><b>Perimätietoa:</b> Lahden rannalla on Syrjälän talon sauna.
<br><br>
<b>Nimi:</b> Pajaranta
<br><b>Paikan kuvaus:</b> Suuren Korosjärven lahdeke, jonka rannalla on Syrjälän talon paja. Lahti sijaitsee Saunarannasta hieman kaakkoon. 

</div><div id='ö33' style="display:none;">
<b>Nimi:</b> Löytömäki
<br><b>Paikan kuvaus:</b> Hyvin korkea mäki Löytölammin pohjois- ja itäpuolella. Löytömäki tarkoittaa myös mäen itäliepeillä sijaitsevaa pikkutilaa. 
<br><b>Perimätietoa:</b> Mäki muodostuu korkeasta kangasselänteestä, jossa on useita korkeita harjanteita. Tila on alunperin ollut Syrjälän talon torppa. Tila on ainakin 80 vuotta vanha (vuosi 1968). Tilalla, veljensä luona asui Pilven Veikko. Veikko oli aina pilvessä. Veikko valitti päänsärkyä, pojat panivat apulantaa ja hotapulveria – päänsärky parani. 

</div><div id='ö34' style="display:none;">
<b>Nimi:</b> Löytölampi
<br><b>Paikan kuvaus:</b> Pieni lampi.
<br><b>Muita paikkaan liittyviä nimiä:</b> Lammen pohjois- ja itäpuolella on korkea mäkiselänne, Löytömäki, jonka liepeillä on samanniminen pikkutila. Lammen eteläpuolella on suurehko Löytöniitty.
<br><b>Perimätietoa:</b> ”Se [lampi] on niim pikkine, että sitäpä melekeem pittä ehtijä, ennen ku sel löytää” (Lauri Lintunen, s.1898, 1968). 

</div><div id='ö35' style="display:none;">
<b>Nimi:</b> Palokangas
<br><b>Paikan kuvaus:</b> Lohkotila, joka on erotettu Savikon talon maasta. 
<br><b>Perimätietoa:</b> Tila on perustettu vuonna 1947. Tila sijaitsee kangasmaastossa, jossa joskus vuosisadan alkupuolella on raivonnut tuhoisa tulipalo, joka kertoman mukaan on tuhonnut metsää laajalta alueelta. 

</div><div id='ö36' style="display:none;">
<b>Nimi:</b> Raivionniitty
<br><b>Paikan kuvaus:</b> Niittyalue Asumaisenpurosta vähän itään. 
<br><b>Perimätietoa:</b> Niitty on raivattu synkästä metsästä. 

</div><div id='ö37' style="display:none;">
<b>Nimi:</b> Juhola
<br><b>Paikan kuvaus:</b> Lohkotila, joka on erotettu Syrjälän talon maasta 1940-luvun loppupuolella. 

</div><div id='ö38' style="display:none;">
<b>Nimi:</b> Lummekangas
<br><b>Paikan kuvaus:</b> Korkea kangas Lummesuon kaakkoispuolella. Lummekangas on myös kankaalla sijainneen Kurkelan talon torpan nimi sekä samalla paikalla sijaitseva lohkotila.

</div><div id='aa1' style="display:none;">
<b>Nimi:</b> Saarisenranta
<br><b>Rinnakkaisnimi:</b> Vesterinen
<br><b>Paikan kuvaus:</b> Pikkutila Saarisen luoteispään rannalla. 
<br><b>Perimätietoa:</b> Tila on lohkaistu Koskelan maasta 1800-luvun puolivälin tienoilla. Tila ei ole ollut torppana. 

</div><div id='aa2' style="display:none;">
<b>Nimi:</b> Louhuviita
<br><b>Paikan kuvaus:</b> Kivinen metsäsuo Hannulan tilan eteläpuolella. 
<br><b>Perimätietoa:</b> ”Se on semmosta kivistä ja louhukkoesta, hyvih huono muapohja siinä on” (Seeda Mähönen, s.1904, 1966). Louhu tarkoittaa hyvin kivistä aluetta.

</div><div id='aa3' style="display:none;">
<b>Nimi:</b> Välipuro
<br><b>Paikan kuvaus:</b> Paloslampien välinen luonnonoja, jonka varrella on Välipuronniitty.

</div><div id='aa4' style="display:none;">
<b>Nimi:</b> Hamula
<br><b>Rinnakkaisnimi:</b> Turunen
<br><b>Paikan kuvaus:</b> Tila, joka on lohkaistu Koskelan talon maasta noin vuonna 1930.
<br><b>Perimätietoa:</b> Tila sijaitsee Hamusenselkämällä, josta nimi johtuu. 

</div><div id='aa5' style="display:none;">
<b>Nimi:</b> Hamusenniitty
<br><b>Paikan kuvaus:</b> Niittyalue Hukkaviidan tilalta hieman itään. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Niityn itäpuolella on kangasselänne nimeltään Hamusenselkämä, jolla on Hamula-niminen tila. 
<br><b>Perimätietoa:</b> Kertoman mukaan niityllä on ollut kauan sitten töissä Hamunen-niminen mies. 

</div><div id='aa6' style="display:none;">
<b>Nimi:</b> Paloslammit
<br><b>Paikan kuvaus:</b> Kaksi vähäistä lampia, joista pohjoisempi on Ylälampi ja eteläisempi Alalampi. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lampien länsipuolella on Palonen-niminen tila. 
<br><b>Perimätietoa:</b> Mikäli tarkoitetaan molempia lampia yhdessä, käytetään yhteistä nimitystä Paloslammit, muuten puhutaan joko Ylä- tai Alalammista. 
<br><br>
<b>Nimi:</b> Ylälampi
<br><b>Paikan kuvaus:</b> Paloslammista pohjoisempi, joka on myös lammista suurempi.
<br><b>Muita paikkaan liittyviä nimiä:</b> Lammesta vähän matkaa etelään on Alalampi. 
<br><br>
<b>Nimi:</b> Alalampi
<br><b>Paikan kuvaus:</b> Paloslammista eteläisempi ja pienempi.
<br><b>Muita paikkaan liittyviä nimiä:</b> Lammen pohjoispuolella on Ylälampi. 


</div><div id='aa7' style="display:none;">
<b>Nimi:</b> Otrasuo
<br><b>Paikan kuvaus:</b> Suuri, metsittynyt viljelyssuo, joka ulottuu Koivulahdesta Koivujärven kylän puolelle. 

</div><div id='aa8' style="display:none;">
<b>Nimi:</b> Äijänkivi
<br><b>Paikan kuvaus:</b> Suuri kivi, joka on vinossa asennossa.
<br><b>Muita paikkaan liittyviä nimiä:</b> Kivi on metsäsuolla, jonka nimi on Äijänsuo. 
<br><b>Perimätietoa:</b> ”Se näättää ihan ku oes kumaraselekäne ukko” (Viljam Huuskonen, s.1896, 1966). 


</div><div id='aa9' style="display:none;">
<b>Nimi:</b> Pikkupeltola
<br><b>Rinnakkaisnimi:</b> Pikkutila, joka on lohkaistu Linstilän tilan maasta.
<br><b>Muita paikkaan liittyviä nimiä:</b> Vähän pohjoisempana on suurempi tila nimeltään Peltola.
<br><b>Perimätietoa:</b> Tila on perustettu vuonna 1940. 


</div><div id='aa10' style="display:none;">
<b>Nimi:</b> Linstilä
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Koskelan torppa.
<br><b>Perimätietoa:</b> Tila on siirretty Kaura-aholta nykyiselle paikalleen 1800-luvun alussa. Tilalla ovat asuneet kauan aikaa Lidströmit eli kansanomaisesti Linstit. 

</div><div id='aa11' style="display:none;">
<b>Nimi:</b> Lamminpäänniitty
<br><b>Paikan kuvaus:</b> Niitty Ylälammin pohjoispuolella. 

</div><div id='aa12' style="display:none;">
<b>Nimi:</b> Saarinen
<br><b>Paikan kuvaus:</b> Järvi, jonka eteläpäässä on runsaasti saaria. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Syvänniemen kärjestä järven yli Saarisniemen rantaan saakka ulottuva syvänne on nimeltään Saarissyvä. Järven itärannassa on Saarisniemi ja samanniminen tila. Järven länsipuolella on kangasselänne nimeltään Saariskangas, joka ulottuu aivan rantaan saakka. Sen pohjoispuolella rannalla tila nimeltään Saarisenranta.

</div><div id='aa13' style="display:none;">
<b>Nimi:</b> Kotipelto
<br><b>Rinnakkaisnimi:</b> Tiihola
<br><b>Paikan kuvaus:</b> Pikkutila, joka on lohkaistu Markkalan tilasta. Tilan virallinen nimi on Tiihola.
<br><b>Perimätietoa:</b> Tila on perustettu vuonna 1946. Tilan omistaja on ollut Karjalasta siirtolaisena tullut Heikki Kotipelto. 
<br><br>
<b>Nimi:</b> Tiihola
<br><b>Rinnakkaisnimi:</b> Kotipelto
<br><b>Paikan kuvaus:</b> Kotipellon virallinen nimi, jota ei kansanomaisesti käytetä.

</div><div id='aa14' style="display:none;">
<b>Nimi:</b> Lintukallio
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Raiskion torppa.
<br><b>Perimätietoa:</b> Arvelujen mukaan torppa on rakennettu 1800-luvun alussa. Tila sijaitsee kalliolla, joka on metsojen suosima soidinpaikka. 

</div><div id='aa15' style="display:none;">
<b>Nimi:</b> Sivula
<br><b>Paikan kuvaus:</b> Tila, joka on lohkaistu Raiskion talon maasta.
<br><b>Perimätietoa:</b> Talo on rakennettu vuonna 1935. ”Se on tehty siihen pellon sivustalle” (Seeda Mähönen, s.1904, 1966). 

</div><div id='aa16' style="display:none;">
<b>Nimi:</b> Viitaniemi
<br><b>Paikan kuvaus:</b> Suurehko niemi, joka pistää Viitajärven Pohjois- ja Itälahden välissä. Viitaniemi on myös niemen syrjässä olevan lohkotilan nimi.
<br><b>Muita paikkaan liittyviä nimiä:</b> Järven eteläpuolella on Viitajärven tila. 
<br><b>Perimätietoa:</b> Lohkotila on ollut Koskelan talon torppa. Torppa on arvelujen mukaan rakennettu 1700-luvun puolivälin tienoilla. 

</div><div id='aa17' style="display:none;">
<b>Nimi:</b> Tanssisaari
<br><b>Paikan kuvaus:</b> Vähäinen saari Saarisessa Rokkasaaren itäpuolella, Kanasaaresta kaakkoon.
<br><b>Perimätietoa:</b> ”Siinä [saaressa] o iso sillee kallijo ja sen kallijon piällä piettiin tanssija ennej ja poltettiij juhannuksena kokkoo” (Seeda Mähönen s.1904, 1966). 

</div><div id='aa18' style="display:none;">
<b>Nimi:</b> Kanasaari
<br><b>Paikan kuvaus:</b> Pieni saari Tanssisaaresta vähän itään. 
<br><b>Perimätietoa:</b> ”Nenolan kanat ol siellä aena kesä aejan kun ne sae olla siellä vappaasti eivätkä piässeet sieltä minnekkää” (Seeda Mähönen s.1904, 1966). 

</div><div id='aa19' style="display:none;">
<b>Nimi:</b> Käkkäräsaari
<br><b>Paikan kuvaus:</b> Hyvin pieni saari Saarisessa Tervasaaren pohjoispuolella.
<br><b>Perimätietoa:</b> Saari on hyvin kallioinen ja siellä kasvaa vain muutamia kitukasvuisia mäntyjä.

</div><div id='aa20' style="display:none;">
<b>Nimi:</b> Tammalahti
<br><b>Paikan kuvaus:</b> Lahti Rokkaniemen luoteispuolella. 
<br><b>Perimätietoa:</b> Lahteen on kertoman mukaan hukkunut Nenolan hevonen 1800-luvulla. 

</div><div id='aa21' style="display:none;">
<b>Nimi:</b> Välipuro
<br><b>Paikan kuvaus:</b> Luonnonoja, jonka kautta Viitajärvi laskee Saariseen. 

</div><div id='aa22' style="display:none;">
<b>Nimi:</b> Nälkäniemi 
<br><b>Paikan kuvaus:</b> Vähäinen niemi Syvänniemen itäkupeessa. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Niemessä on pitkulainen Nälkäliitty, joka ulottuu Syvänniemen länsirantaan saakka. 
<br><b>Perimätietoa:</b> ”Siitä [niemestä] on näläkävuosina kiskottu petäjistä kuorija ja pantu niitä sittä jaahoen sekkaal leiväj jatkoks, kuj jaahot ei riittännä” (Seeda Mähönen, s.1904, 1966). 

</div><div id='aa23' style="display:none;">
<b>Nimi:</b> Mätäsniemi
<br><b>Paikan kuvaus:</b> Vähäinen suoniemeke Tervalan luoteissivulla. 
<br><b>Perimätietoa:</b> Niemessä on paljon sammalmättäitä. 

</div><div id='aa24' style="display:none;">
<b>Nimi:</b> Saarisniemi
<br><b>Rinnakkaisnimi:</b> Saarisenniemi
<br><b>Paikan kuvaus:</b> Saariseen pistävä suurehko niemi. Saarisniemi on myös lohkotilan nimi. Tilan virallinen nimi on Saarisenniemi, jota ei kuitenkaan juuri käytetä. 
<br><b>Perimätietoa:</b> Lohkotila on alunperin ollut Koskelan talon torppa. Saarisniemi on kertoman mukaan Koivulahden vanhimpia torppia. 

</div><div id='aa25' style="display:none;">
<b>Nimi:</b> Ruunasuo
<br><b>Paikan kuvaus:</b> Upottava suo Puronsuulahden länsirannalla.
<br><b>Perimätietoa:</b> Perimätiedon mukaan suohon on uponnut Vesterilän hevonen 1800-luvun alussa. 

</div><div id='aa26' style="display:none;">
<b>Nimi:</b> Ahoniemi
<br><b>Paikan kuvaus:</b> Saariseen pistävä suurehko niemi. Ahoniemi on myös niemessä olevan lohkotilan nimi. 
<br><b>Perimätietoa:</b> ”Koskelaeset kaet siinä lie kaskee pitäneet, vuan nythän siinä o olluj jo asukkaat kaet melekeen parsattoo vuotta” (Seeda Mähönen, s. 1904, 1966). Lohkotila on alunperin ollut Koskelan talon torppa, joka on arvelujen mukaan perustettu 1700-luvun puolivälissä.
<br><br>
<b>Nimi:</b> Kallionpääniitty
<br><b>Paikan kuvaus:</b> Niitty Ahoniemen tilasta vähän matkaa luoteeseen.
<br><b>Perimätietoa:</b> Niityn kaakkoispäässä on sileä ja korkea kallio.

</div><div id='aa27' style="display:none;">
<b>Nimi:</b> Nenola
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Koskelan talon torppa.
<br><b>Perimätietoa:</b> Kertoman mukaan tila on perustettu 1800-luvun alussa. Tila on ollut kauan Nenosen suvun omistuksessa.

</div><div id='aa28' style="display:none;">
<b>Nimi:</b> Hukkaviita
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Koskelan talon torppa.
<br><b>Perimätietoa:</b> Tila on kertoman mukaan perustettu 1700-luvun puolella. Tila sijaitsee Hukkasuon sivustalla. 

</div><div id='aa29' style="display:none;">
<b>Nimi:</b> Hukkasuo
<br><b>Paikan kuvaus:</b> Metsäsuo.
<br><b>Muita paikkaan liittyviä nimiä:</b> Suon sivustalla pienellä harjanteella on Hukkaviidan tila. 
<br><b>Perimätietoa:</b> ”Kuulu siinä ennen susiakkiin majjaelleen vuan nyt ne on kaekonna poes ku asukkaeta on tullu lähelle” (Eelis Koskinen s.1906, 1966). 

</div><div id='aa30' style="display:none;">
<b>Nimi:</b> Puronsuunlahti
<br><b>Paikan kuvaus:</b> Pitkä ja kapeahko lahti Saarisen eteläpäässä. 
<br><b>Perimätietoa:</b> Viitajärvestä tuleva luonnonoja laskee lahteen. 

</div><div id='aa31' style="display:none;">
<b>Nimi:</b> Rokkaniemi
<br><b>Paikan kuvaus:</b> Niemi, joka pistää Saarisen eteläpäähän.
<br><b>Muita paikkaan liittyviä nimiä:</b> Niemestä vähän pohjoiseen on pieni Rokkasaari.
<br><b>Perimätietoa:</b> Niemessä on ollut Nenolan hernehalme kesäisin. 

</div><div id='aa32' style="display:none;">
<b>Nimi:</b> Syvänniemi
<br><b>Paikan kuvaus:</b> Saariseen pistävä niemi Tervalahden ja Tammalahden välissä.
<br><b>Muita paikkaan liittyviä nimiä:</b> Niemen kärjen lähettyviltä alkaa Saarisyvä, joka ulottuu toiselle rannalle Saariniemen kärkeen saakka. 


</div><div id='aa33' style="display:none;">
<b>Nimi:</b> Tervalahti
<br><b>Paikan kuvaus:</b> Saarisen lahti Syvänniemen länsipuolella. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Niemen kärjen luoteispuolella on Tervalahden suulla Tervasaari. Lahden eteläpuolella on Tervalahdenpelto.
<br><b>Perimätietoa:</b> ”Siinä lahen syrjässä [länsirannalla] ol enne usseita tervahaatoja ja paljo siinä tervoo poltettii” (Seeda Mähönen, s.1904, 1966). 

</div><div id='aa34' style="display:none;">
<b>Nimi:</b> Takala
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Koskelan talon torppa.
<br><b>Perimätietoa:</b> Torppa on rakennettu 1800-luvun puolivälissä. Tilan sijainti on syrjäinen. 

</div><div id='aa35' style="display:none;">
<b>Nimi:</b> Suopelto
<br><b>Paikan kuvaus:</b> Lohkotila, joka on rakennettu vuonna 1920.
<br><b>Perimätietoa:</b> Lohkotila on lohkaistu Hendolinen maalpalstasta, joka on alunperin ollut Koskelan talon maata.

</div><div id='aa36' style="display:none;">
<b>Nimi:</b> Karhulanmäki
<br><b>Paikan kuvaus:</b> Lohkotila, joka on erotettu Koskelan maasta.
<br><b>Perimätietoa:</b> Tila on erotettu Koskelasta 1800-luvun alussa, eikä se ei ole ollut torppana. Tila sijaitsee korkean ja jyrkän mäen päällä. Tila on ollut kauan Karhusten suvun hallussa.

</div><div id='aa37' style="display:none;">
<b>Nimi:</b> Röhönranta
<br><b>Paikan kuvaus:</b> Mökki Saarisen rannalla. 
<br><b>Perimätietoa:</b> Tontti on lohkaistu Ahoniemen maasta. Mökki on rakennettu noin vuonna 1925. Mökki sijaitsee vähäisessä niemessä, jonka nimi on Röhönrannanniemi.

</div><div id='aa38' style="display:none;">
<b>Nimi:</b> Palonen
<br><b>Paikan kuvaus:</b> Lohkotila Paloslampien länsipuolella.
<br><b>Perimätietoa:</b> Tila on ollut alunperin Uudistalon torppa. Torppa on rakennettu arvioiden mukaan 1800-luvun alussa. 
<br><br>
<b>Nimi:</b> Alapelto
<br><b>Paikan kuvaus:</b> Pelto Palosen tilan luoteispuolella vähäisessä notkelmassa.
<br><br>
<b>Nimi:</b> Mäenalusniitty
<br><b>Paikan kuvaus:</b> Niitty Repovuoren juurella, vuoren itäpuolella. 

</div><div id='aa39' style="display:none;">
<b>Nimi:</b> Louhupelto
<br><b>Paikan kuvaus:</b> Viitajärven tilan länsipuolella oleva pelto, joka on hyvin kivinen.
<br><br>
<b>Nimi:</b> Kivikkopelto
<br><b>Paikan kuvaus:</b> Vähäinen pelto Viitajärven tilan itäpuolella. Pellolla on hyvin paljon kiviä. 

</div><div id='aa40' style="display:none;">
<b>Nimi:</b> Limakivi
<br><b>Paikan kuvaus:</b> Suuri kivi Viitajärvessä lähellä länsirantaa. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Pohjoislahden suuhun, aivan kiven lähelle pistää Limakivenniemi. Niemestä luoteeseen on hyvin kapea niitty nimeltään Limakivenniitty, joka pistää nimen kärkeen saakka. Pohjoislahden rannalla niemen kärjestä luoteeseen on vähäinen Limakivenkangas. 

</div><div id='aa41' style="display:none;">
<b>Nimi:</b> Raiskio
<br><b>Paikan kuvaus:</b> Kantatalo, joka on arvelujen mukaan perustettu 1600-luvulla.  Raiskio on myös kulmakunta talon lähiympäristössä.
<br><b>Perimätietoa:</b> ”Se muapohja on siinä huonoo” (Jukka Huuskonen, s.1911, 1966). Talon vanha nimi on ollut Karttula. Karhu on tappanut talon lehmän aholla ja taloa on ruvettu sanomaan Raiska-ahoksi. Nimi on lyhentynyt Raiskioksi. Talo on ollut kestikievari, koulu, verotoimisto, henkikirjoituspaikka ja kauppa. 
<br><br>
<b>Nimi:</b> Koivula
<br><b>Paikan kuvaus:</b> Mökki, jonka tontti on lohkaistu Raiskion maasta.:
<br><b>Perimätietoa:</b> Mökki on rakennettu vuonna 1925 ja se on hävinnyt vuonna 1950. Mökin ympäristössä on ollut runsaasti koivuja. 

</div><div id='aa42' style="display:none;">
<b>Nimi:</b> Itälahti
<br><b>Paikan kuvaus:</b> Suurehko lahti Viitajärven itäpäässä. Itälahti on myös lahden lähellä olevan lohkotilan nimi. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lahden itäpuolella rantaan saakka ulottuu Itälahdenniitty.
<br><b>Perimätietoa:</b> Tila on lohkaistu Hukkaviidan maasta vuonna 1940. Tila on sijainnut aluksi Hukkasuon pohjoispäässä, jolloin tilan nimi on ollut Metsäpelto. Tila on siirretty vuonna 1955 nykyiselle paikalleen, jolloin nimi muutettiin Itälahdeksi
<br><br>
<b>Nimi:</b> Metsäpelto
<br><b>Rinnakkaisnimi:</b> Itälahti
<br><b>Paikan kuvaus:</b> Itälahden tilan aikaisempi nimi, joka muutettiin nykyiseksi vuonna 1955.
<br><b>Perimätietoa:</b> Vuonna 1955 tila siirrettiin Hukkasuon pohjoispäästä nykyiselle paikalleen Viitajärven Itälahden lähistölle.

</div><div id='aa43' style="display:none;">
<b>Nimi:</b> Kerosenautio
<br><b>Paikan kuvaus:</b> Vähäinen aukio Palosten tilasta vähän itään. 
<br><b>Perimätietoa:</b> Paikalla on ollut mökki, joka on hävinnyt 1900-luvun alussa. Mökissä on asunut mies nimeltä Siion Keronen. 

</div><div id='aa44' style="display:none;">
<b>Nimi:</b> Pellavasniemi
<br><b>Paikan kuvaus:</b> Viitajärveen pistävä niemi Etelälahden koillispuolella. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Niemen lähistöllä Etelälahdessa on syvä paikka nimeltään Pellavassyvä. 

</div><div id='aa45' style="display:none;">
<b>Nimi:</b> Ano Jäntin petäjä
<br><b>Paikan kuvaus:</b> Korkea mänty Repovuoren huipulla. 
<br><b>Perimätietoa:</b> Kauppaneuvos Oskari Huttusen kerrotaan pyytäneen Ananias Jäntti-nimistä miestä pitämään silmällä männystä käsin, onko hänen maallaan metsäpaloja ja ilmoittamaan palokunnalle, mikäli niitä ilmenisi. 
<br><br>
<b>Nimi:</b> Repovuori
<br><b>Paikan kuvaus:</b> Korkea vuori maantien varrella.
<br><b>Perimätietoa:</b> Vuori on kettujen suosima pesimispaikka. 

</div><div id='aa46' style="display:none;">
<b>Nimi:</b> Tuomaala
<br><b>Paikan kuvaus:</b> Mökki, jonka tontti on lohkaistu Poikalan talon maasta.
<br><b>Perimätietoa:</b> Mökki on rakennettu vuonna 1951. Mökin omistaa Tuomas Huuskonen. 

</div><div id='aa47' style="display:none;">
<b>Nimi:</b> Kurkiensuo
<br><b>Paikan kuvaus:</b> Pitkä suoalue, jossa on oleskellut kurkia.
<br><b>Muita paikkaan liittyviä nimiä:</b> Suon ja Viitajärvenvälillä on kangasselänne nimeltään Kurkienkangas. 
<br><b>Perimätietoa:</b> ”Nyt ne kuret oh hävinnä sieltä [Kurkiensuolta] poes kus sinnekkii on tullu taloja lähelle, nii ei ne kuret ennee näätä siellä asustava” (Seeda Mähönen s.1904, 1966).

</div><div id='aa48' style="display:none;">
<b>Nimi:</b> Riistakorpi
<br><b>Paikan kuvaus:</b> Metsäsuo Tervajärven ympärillä.
<br><b>Perimätietoa:</b> Suolla on runsaasti riistaeläimiä. 
<br><br>
<b>Nimi:</b> Tervajärvi
<br><b>Paikan kuvaus:</b> Pienehkö lampi Koivulahden ja Talluskylän rajalla. 
<br><b>Perimätietoa:</b> Lammen rannalla on ollut tervahautoja. 

</div><div id='aa49' style="display:none;"> 
<b>Nimi:</b> Hendoliininmaa
<br><b>Paikan kuvaus:</b> Suurehko metsäpalsta Puronsuulahdesta vähän itään.
<br><b>Perimätietoa:</b> Palsta ulottuu Talluskylän rajaan saakka. Alue on alunperin ollut Koskelan talon maata, jonka Hendolin-niminen mies on ostanut noin vuonna 1920. 


</div><div id='aa50' style="display:none;">
<b>Nimi:</b> Vapila
<br><b>Paikan kuvaus:</b> Mökki Saarisessa olevassa pienessä saaressa, jonka nimi on Vapilanluoto. 
<br><b>Perimätietoa:</b> Mökki on hävinnyt 1800-luvun lopulla. Mökissä kerrotaan asuneen jonkun Fabian- eli kansanomaisesti Vapi-nimisen miehen. 

</div><div id='aa51' style="display:none;">
<b>Nimi:</b> Haaparanta
<br><b>Paikan kuvaus:</b> Saarisen pohjoisrantaa
<br><b>Perimätietoa:</b> ”Siinä kasvaa hyvin paljo huapoja siinä koko pitkällä rannalla” (Matti Tossavainen, s.1908, 1968). 

</div><div id='aa52' style="display:none;">
<b>Nimi:</b> Kärnäpuro 
<br><b>Paikan kuvaus:</b> Luonnonoja, joka alkaa Tallussuolta ja laskee Pieneen Tervajärveen. 

</div><div id='aa53' style="display:none;">
<b>Nimi:</b> Pekkala
<br><b>Rinnakkaisnimi:</b> Jussila
<br><b>Paikan kuvaus:</b> Talo, joka on lohkaistu Kosken talosta perintöosuutena. 
<br><b>Perimätietoa:</b> Talon omistavat Pekka Tolosen perilliset (vuosi 1968). 
<br><br>
<b>Nimi:</b> Jussila
<br><b>Rinnakkaisnimi:</b> Pekkala
<br><b>Paikan kuvaus:</b> Pekkalan tilan virallinen nimi, jota ei kansanomaisesti käytetä. Tilan aikaisempi isäntä on ollut Jussi-niminen.
<br><br>
<b>Nimi:</b> Ravinpelto
<br><b>Paikan kuvaus:</b> Pelto Pekkalan tilan pohjoispuolella. 
<br><b>Perimätietoa:</b> Pellon pohjoispuolella on aiemmin ollut hevosten laidunmaa, jossa hevoset ovat ”ravanneet”. 


</div><div id='aa54' style="display:none;">
<b>Nimi:</b> Rajala
<br><b>Paikan kuvaus:</b> Pikkutila, joka on alunperin ollut Tallusmäen talon torppa. 
<br><b>Muita paikkaan liittyviä nimiä:</b>
<br><b>Perimätietoa:</b> Torppa on perustettu 1800-luvun puolivälin tienoilla. Torppa sijaitsee Kiviahosta hieman pohjoiseen Kymi-yhtiön ja Tallusmäen talon maiden rajalla. 

</div><div id='aa55' style="display:none;">
<b>Nimi:</b> Suonlaita
<br><b>Paikan kuvaus:</b> Pikkutila, joka on alunperin ollut Tallusniemen talon torppa. 
<br><b>Perimätietoa:</b> Torppa on arvelujen mukaan perustettu 1800-luvun puolivälin tienoilla. Tila sijaitsee Tallussuon länsilaidalla. 

</div><div id='aa56' style="display:none;">
<b>Nimi:</b> Hiekkala
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Saarismäen talon torppa.
<br><b>Perimätietoa:</b> Tila on perustettu arviolta 100-120 vuotta sitten (vuosi 1968). Tila sijaitsee hiekkaisella kankaalla. 

</div><div id='aa57' style="display:none;">
<b>Nimi:</b> Kusetin
<br><b>Paikan kuvaus:</b> Hävinnyt mökki Saarismäen talon maalla.
<br><b>Muita paikkaan liittyviä nimiä:</b> Mökin pohjoispuolella on Kusettimenlampi ja Kusettimenmäki.
<br><b>Perimätietoa:</b> Mökki on ollut itsenäistymätön ja hävinnyt 1920 luvulla.
<br><br>
<b>Nimi:</b> Kusettimenlampi
<br><b>Paikan kuvaus:</b> Hyvin pieni lampi Saarismäen talosta hieman etelään. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lammin eteläpuolella on ollut Kusetin-niminen mökki. Lammin ympärillä on vähäinen metsäsuo nimeltään Kusettimensuo, jonka itäpuolella on korkea Kusettimenmäki. 
<br><b>Perimätietoa:</b> Olettamusten mukaan nimi johtuu lammin pienuudesta, mutta tarkkaan ei nimen alkuperää tiedetä. ”Se nim on niiv vanaha, että ku isojjao aekana on siitä linjoo ajettu niin siinä yks niistä miehistä on sanonna, kun se on tullu siihel lammin kohalle, että nyt se linja männöö kusettimeh halaki. Sillon mestar on suuttunna ja ajanna sem miehem poes töestä, kun se ol luullu, että se mies pilikkoo hänen työtään, ku eihän se out tiennä, että sel lammi oekee nim on semmone ennen kut toeset miehet ol sille jälestä päen sanonna” (Matti Tossavainen, s.1908, 1968). Lammista käytetään joskus myös nimeä Kusetin. 

</div><div id='aa58' style="display:none;">
<b>Nimi:</b> Mäntyharju
<br><b>Rinnakkaisnimi:</b> Piilola
<br><b>Paikan kuvaus:</b> Piilolan virallinen nimi, jota ei kansanomaisesti käytetä.
<br><b>Perimätietoa:</b> Mökki sijaitsee metsän keskellä kangasharjanteella. 
<br><br>
<b>Nimi:</b> Piilola
<br><b>Rinnakkaisnimi:</b>Mäntyharju
<br><b>Paikan kuvaus:</b> Mökki, joka on alunperin ollut Tallusmäen talon mäkitupa. Tilan virallinen nimi on Mäntyharju.
<br><b>Muita paikkaan liittyviä nimiä:</b>
<br><b>Perimätietoa:</b> Mökki on ainakin 100 vuotta vanha (vuosi 1968). ”Se ku on kup piilossa siinä isom metän keskellä ja se mökki ov vielä sittä niih hirveem pikkine että tos muossa sitä melekein suap ehtijä” (Matti Tossavainen, s.1908, 1968

</div><div id='aa59' style="display:none;">
<b>Nimi:</b> Lehtoharju
<br><b>Paikan kuvaus:</b> Mökki, joka on rakennettu 1940-luvulla. 
<br><b>Perimätietoa:</b> Mökin ympäristössä kasvaa lehtimetsää. Mökki sijaitsee vähäisellä mäenkumpareella. 
Mökissä on asunut Otto Karhunen, Ottoa on kutsuttu myös Pankapää-Otoksi. 
<br><br>
<b>Nimi:</b> Riikanniitty
<br><b>Paikan kuvaus:</b> Niitty Lehtoharjun tilasta jonkin matkaa pohjoiseen. 
<br><b>Perimätietoa:</b> Kertoman mukaan, joku Riikka-niminen nainen on asunut niityn lähettyvillä mökissä joskus 1800-luvun puolella. Mökin nimeä ei enää muisteta, sillä se on hävinnyt joskus 1800-luvulla. 
<br><br>
<b>Nimi:</b> Rinnemaja
<br><b>Paikan kuvaus:</b> Tila, joka on lohkaistu Tallusmäen talon alueesta vuonna 1947. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lähistöllä oleva Lehtoharjun tila sijaitsee samalla metsäharjanteella. 
<br><b>Perimätietoa:</b> Tila sijiatsee metsäharjanteella. 
<br><br>
<b>Nimi:</b> Romunniitty
<br><b>Paikan kuvaus:</b> Pienehkö niittyalue Lehtoharjun tilasta jonkin matkaa luoteeseen.
<br><b>Muita paikkaan liittyviä nimiä:</b> Niityn laidalla on Romunlato tai Romunniitynlato. 
<br><b>Perimätietoa:</b> ”Se on semmonen märkä ja kiviner rommeikko ja oekeen mitätöntä viljeltäväks vuan on siitä vähä heinee suanna” (Reino Harimo s.1916, 1968). Yleisesti romu tarkoittaa epätasaista, kivistä ja upottavaa suomaata. 
<br><br>
<b>Nimi:</b> Viitaharju
<br><b>Paikan kuvaus:</b> Mökki Lehtoharjusta hieman itään. 
<br><b>Perimätietoa:</b> Mökki on rakennettu 1940-luvulla. Mökki sijaitsee metsäsuon laidalla. 

</div><div id='aa60' style="display:none;">
<b>Nimi:</b> Saarismäki
<br><b>Paikan kuvaus:</b> Korkea mäki Talluksen länsiosassa. Saarismäki on myös mäen päällä sijiatsevan kantatalon nimi sekä nimitys kulmakunnalle, joka käsittää talon lähiympäristöineen. Alue ei ole selvärajainen. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Mäen lähistöllä on järvi nimeltä Saarinen, josta suurin osa kuuluu Koivulahden kylään. Järven itärannalla, Koivulahden kylän puolella on Saarisenniemi-niminen talo. Mäen ja järven välissä on Saarisenkangas. 
<br><b>Perimätietoa:</b> Saarismäen talo on seudun vanhimpia taloja. Talon iäksi on arveltu ainakin 300 vuotta (vuosi 1968). 
<br><br>
<b>Nimi:</b> Liha-aitta
<br><b>Paikan kuvaus:</b> Aitta Saarismäen talon asuinrakennuksen eteläpuolella.
<br><b>Muita paikkaan liittyviä nimiä:</b>
<br><b>Perimätietoa:</b> Aitassa säilytetään suolattua lihaa.
<br><br>
<b>Nimi:</b> Honkapelto
<br><b>Paikan kuvaus:</b> Pelto talon itäpuolella.
<br><b>Perimätietoa:</b> ”Siinä ol iso honkamehtä kun se pelloks raevattii. Yks honka siinä pellolla ov vieläej jälellä” (Matti Tossavainen, s.1908, 1968). 
<br><br>
<b>Nimi:</b> Heimonen
<br><b>Paikan kuvaus:</b> Vähäinen niitty talon pohjoispuolellla. 
<br><b>Perimätietoa:</b> Niitty on ollut Heimonen-nimisellä miehellä työurakkana joka vuosi. Nykyisin niittyä ei enää viljellä (vuosi 1968). 
<br><br>
<b>Nimi:</b> Isoniitty
<br><b>Paikan kuvaus:</b> Laaja niittyalue talosta vähän luoteeseen. 
<br><br>
<b>Nimi:</b> Kirppuniitty
<br><b>Paikan kuvaus:</b> Hyvin pieni niitty talosta vähän lounaaseen. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Niitystä hieman lounaaseen on Laakkosniitty. Niittyjen välillä on hyvin kapea metsäsuikale nimeltään Kirpunkaala.
<br><b>Perimätietoa:</b> ”Se [niitty] om melekein niim pien kuk kirppu ja se mehtäpala siinä on kuk kirpun kaala” (Matti Tossavainen, s.1908, 1968).
<br><br>
<b>Nimi:</b> Kiviaho
<br><b>Paikan kuvaus:</b> Pikkutila, joka on alunperin ollut Saarismäen talon torppa. 
<br><b>Perimätietoa:</b> Torppa on kertoman mukaan perustettu 1800- ja 1900-lukujen vaihteessa. Tila sijaitsee Hiekkalasta vähän luoteeseen kivisellä ja metsittyneellä aholla. 

</div><div id='aa61' style="display:none;">
<b>Nimi:</b> Kävynkärki
<br><b>Paikan kuvaus:</b> Kova kangasmaa, joka työntää kiilan Tallussuon länsilaitaan. 

</div><div id='aa62' style="display:none;">
<b>Nimi:</b> Ahlströminmaa
<br><b>Paikan kuvaus:</b> Suuri metsämaa, joka ulottuu Venälän talosta Isoon Tervajärveen saakka.
<br><b>Perimätietoa:</b> Alue on entistä Venälän talon maata, jonka Ahlström-osakeyhtiö on ostanut 1800-luvun loppupuolella. 

</div><div id='aa63' style="display:none;">
<b>Nimi:</b> Laakkosniitty
<br><b>Paikan kuvaus:</b> Pienekö niitty Kirpunniityn lounaispuolella.
<br><b>Muita paikkaan liittyviä nimiä:</b> Niityn laidalla on vähäinen Laakkoslampi. 
<br><b>Perimätietoa:</b> Niitty on ollut Laakkonen-nimisellä miehellä jokavuotisena työurakkana. 

</div><div id='aa64' style="display:none;">
<b>Nimi:</b> Tervajärvi 
<br><b>Paikan kuvaus:</b> Kaksi lampi, Iso Tervajärvi ja Pieni Tervajärvi. Ellei sekaantumisen vaaraa ole käytetään Isosta Tervajärvestä yleensä nimeä Tervajärvi.
<br><b>Muita paikkaan liittyviä nimiä:</b> Lampien ympärillä on metsäsuo nimeltään Tervasuo. Suon pohjois- ja koillispuolella on Tervakangas. 
<br><b>Perimätietoa:</b> ”Siellä on poltettuna tervoo. Siin ison Tervajärvel luona ov vieläen näkyvissä usseita vanahoja tervahaatoja” (Reino Harimo, s.1916, 1968). 

</div><div id='aa65' style="display:none;">
<b>Nimi:</b> Nikinpuro
<br><b>Paikan kuvaus:</b> Pienestä Tervajärvestä Hirvijärveen laskeva luonnonoja. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lahti, johon puro laskee on Nikinlahti. Puron varrella on Nikinsuo-niminen metsäsuo. Kangaslammin ja Nikinpuron välillä on kangasmaa nimeltää Nikinkankaat. Kangaslammin eteläpään länsirannalla on pienehkö Nikinniitty. Nikinlahden kaakkoispuolella on Suokkuanlahteen pistävä Nikinniemi.
<br><b>Perimätietoa:</b> ”Näellä seovun on kuulemma asunna joku Pekka Nikki taep paremminniin Nikkinne kat se o ollu, jotkut väettää, että sem miehen nimestä muka johtuu ne nimet” (Elli Markkanen, s.1899, 1968). 

</div><div id='aa66' style="display:none;">
<b>Nimi:</b> Venälä
<br><b>Paikan kuvaus:</b> Kantatalo, joka on arvoiden mukaan noin 200 vuotta vanha (vuosi 1968). 
<br><b>Perimätietoa:</b> 1800-luvun loppupuolella talon on myyty Ahlström-osakeyhtiölle, mutta myöhemmin osa maasta on ostettu takaisin. Talossa on asunut aikaisemmin Venäläisiä. 
<br><br>
<b>Nimi:</b> Kivelä
<br><b>Paikan kuvaus:</b> Lohkotila, joka on ollut alunperin Venälän talon torppa.
<br><b>Perimätietoa:</b> Torppa on olettamusten mukaan rakennettu 1800-luvun lopulla. Tilan pellot ovat hyvin kiviset. 

</div><div id='aa67' style="display:none;">
<b>Nimi:</b> Takala
<br><b>Paikan kuvaus:</b> Talo, joka on erotettu perintönä Lepikon talon alueesta. 
<br><b>Perimätietoa:</b> Talo on lähes 70 vuotta vanha (vuosi 1968). ”Se on semmonen takapalsta tämäl lepikom muasta” (Reino Harimo s. 1916, 1968). 
<br><br>
<b>Nimi:</b> Selkämälinja
<br><b>Paikan kuvaus:</b> Metsäsoiden välissä oleva kangas, joka ulottuu Pienestä Tervajärvestä Kangaslampiin. 
<br><br>
<b>Nimi:</b> Lähdesuo
<br><b>Paikan kuvaus:</b> Metsäsuo Lintukankaan länsipuolella. 
<br><b>Perimätietoa:</b> Suolla on useita lähteitä. 

</div><div id='aa69' style="display:none;">
<b>Nimi:</b> Tallusmäki
<br><b>Paikan kuvaus:</b> Korkea mäki Talluslammista vähän etelään. Tallusmäki on myös mäellä sijaitseva kantatalo, jonka iäksi on arveltu ainakin 300 vuotta (vuosi 1968). 
<br><b>Muita paikkaan liittyviä nimiä:</b> Tallusjärveen pistävässä Tallusniemessä on samanniminen kantatalo.
<br><b>Perimätietoa:</b> Talo on seudun vanhimpia kantataloja. 

</div><div id='aa70' style="display:none;">
<b>Nimi:</b> Alalato
<br><b>Paikan kuvaus:</b> Lato Tallusmäen talon eteläpuolella Tallusmäen alla.

</div><div id='aa71' style="display:none;">
<b>Nimi:</b> Talluslampi
<br><b>Paikan kuvaus:</b> Lampi Talluksen länsiosassa. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lammista vähän etelään on korkea Tallusmäki. Lammin länsi- ja pohjoispuolella on suuri metsäsuo nimeltään Tallussuo. Lammin etelärannalla on korkea mäenharjanne nimeltään Tallusvuori. 

</div><div id='aa72' style="display:none;">
<b>Nimi:</b> Itäaho
<br><b>Paikan kuvaus:</b> Pikkutila, joka on alunperin ollut Tallusmäen talon torppa.
<br><b>Perimätietoa:</b> Tila perustettu 1900-luvun alussa. Tila sijaitsee metsittyneellä aholla, joka on ollut Tallusmäen talon kaskimaana. Aho sijaitsee Tallusmäen talosta katsottuna itään päin. 

</div><div id='aa73' style="display:none;">
<b>Nimi:</b> Lepikko
<br><b>Paikan kuvaus:</b> Talo, joka on erotettu Kallion talon maasta perintöosuutena. 
<br><b>Perimätietoa:</b> Tila on arvelujen mukaan lähes 100 vuotta vanha (vuosi 1968). Talon ympärillä kasvaa paljon lehtipuita, etenkin leppiä. 
<br><br>
<b>Nimi:</b> Leppäselkämä
<br><b>Paikan kuvaus:</b> Selänne, jolla Lepikon talo sijaitsee. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lepikon talon länsipuolella on Leppäniitty. 
<br><b>Perimätietoa:</b> Selkämällä kasvaa runsaasti lehtipuita, varsinkin leppiä.
<br><br>
<b>Nimi:</b> Lintukangas
<br><b>Paikan kuvaus:</b> Kangasselänne Lepikon talosta vähän matkaa länteen. Lintukangas on myös ollut kangasselänteen keskivaiheilla sijainnut mökki, joka on ollut Lepikon talon maalla.
<br><b>Perimätietoa:</b> ”Siitä om pyyvystetty mehtälintuja. Kus siinä on niitä niim paljo, varsinniin mehtoja soejinaekana” (Reino Harimo, s.1916, 1968). Mökki on ollut itsenäistymätön ja hävinnyt noin vuonna 1915. 
<br><br>
<b>Nimi:</b> Luodeniitty
<br><b>Paikan kuvaus:</b> Pitkä ja kapea niitty Lepikon talosta luoteeseen. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Niityn vieressä kylätien vastakkaisella puolella on Luodepelto, joka on metsittynyt. 
<br><br>
<b>Nimi:</b> Kärriliiteripelto
<br><b>Paikan kuvaus:</b> Pelto Lepikon talon eteläpuolella.
<br><b>Perimätietoa:</b> ”Siinä ol ennen kärriliiteri siinä pellolla” (Reimo Harimo, s.1916, 1968). 

</div><div id='aa74' style="display:none;">
<b>Nimi:</b> Mäensyrjä
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Tallusniemen talon torppa. 
<br><b>Perimätietoa:</b> Tila on ainakin 70 vuotta vanha (vuosi 1968). Tila sijaitsee korkean mäen liepeellä. 

</div><div id='aa75' style="display:none;">
<b>Nimi:</b> Kangaslampi
<br><b>Paikan kuvaus:</b> Pitkä ja kapea lampi, jota lähes joka puolelta ympäröivät korkeat kankaat. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lammin eteläpään itärannalla on pienehkö metsäsuo nimeltään Kangaslamminsuo.

</div><div id='aa76' style="display:none;">
<b>Nimi:</b> Siekkissuo
<br><b>Paikan kuvaus:</b> Metsäsuo Kangaslammin eteläpuolella. Suo on paikoitellen hyvin vetinen ja upottava. 
<br><b>Perimätietoa:</b> Lähistöllä Päivärannan tilalla on asunut Kajan-niminen pariskunta, joka kertoman mukaan on ollut velkaa Siekkinen nimiselle miehelle. Eräänä aamuna Siekkinen on lähtenyt Kurkimäeltä tarkoituksenaan mennä Päivärantaan. Kajanit olivat suolla hyökäneet miehen kimppuun, tappaneet tämän ja haudanneet ruumiin murhapaikan lähistölle. Kajanin vaimo on myöhemmin menettänyt järkensä ja kertonut, mihin ruumis on haudattu sekä hokenut jatkuvasti: ”siekkisev ver om punasta”. 

</div><div id='bb1' style="display:none;">
<b>Nimi:</b> Lökänniitty
<br><b>Paikan kuvaus:</b> Lökänlahden rannalla oleva pitkä ja kapea niitty.
<br><b>Muita paikkaan liittyviä nimiä:</b> Niityn pohjoisosassa on Lökänlato tai Lökänniitynlato. 

</div><div id='bb2' style="display:none;">
<b>Nimi:</b> Jäniskanto 
<br><b>Paikan kuvaus:</b> Pikkutila Lökänniityn pohjoispäässä. Tila on alunperin ollut Anttilan talon torppa. 
<br><b>Perimätietoa:</b> Tila on oletusten mukaan ainakin 90 vuotta vanha (vuosi 1968). ”Ihal [asuinrakennuksen] lähellä oh hirvee iso kanto. Siinä on kuulemma ollu iso kuus sillä paekalla” (Niilo Markkanen, s.1928, 1968). Tilan ympäristössä asustaa runsaasti jäniksiä

</div><div id='bb3' style="display:none;">
<b>Nimi:</b> Teerelä
<br><b>Rinnakkaisnimi:</b> Teerioja, ”Töyrylä”
<br><b>Paikan kuvaus:</b> Hävinnyt mökki Kalliomäen talon maalla. Mökin virallinen nimi on ollut Teerioja.
<br><b>Perimätietoa:</b> Mökki on ollut itsenäistymätön ja hävinnyt noin vuonna 1920. Mökki on sijainnut Lökänniityn pohjoispäässä Jäniskannosta hieman etelään. Mökissä on asunut Teeriojia. 

</div><div id='bb4' style="display:none;">
<b>Nimi:</b> Pieni Tuliniemi
<br><b>Paikan kuvaus:</b> Toinen Talluksen Tuliniemistä.
<br><b>Perimätietoa:</b> Kummassakin niemessä kerrotaan olleen useita tulipaloja viime vuosisadan vaihteen tienoilla ja sen jälkeen (vuosi 1968). 

</div><div id='bb5' style="display:none;">
<b>Nimi:</b> Honkasuo

</div><div id='bb6' style="display:none;">
<b>Paikka:</b>Vaittinen
<br><b>Paikan kuvaus:</b> Pieni saari Tallusjärvessä Honkasaaresta vähän etelään. 
<br><b>Perimätietoa:</b> Saaren pinta-ala on noin viisi aaria. Seudulla kerrotaan asustaneen jonkun Vaittinen-nimisen miehen, joka on oleskellut paljon saaressa kalamatkoillaan. Mies on paleltunut kalareissullaan 1800-luvun lopulla.  

</div><div id='bb7' style="display:none;">
<b>Nimi:</b> Lehtolahti (talo)
<br><b>Paikan kuvaus:</b> Korosjärven Lehtolahden etelärannalla sijaitseva asuinpaikka.
<br><b>Perimätietoa:</b> Mökki on erotettu Savikon talon maasta rintamamiespalstaksi. Talo on rakennettu vuonna 1949. 

</div><div id='bb8' style="display:none;">
<b>Nimi:</b> Koroskoski
<br><b>Paikan kuvaus:</b> Suuresta Korosjärvestä Liesjärven Meijerinlahteen laskevassa Korosjoessa oleva koski. Korkoskoski on myös tila kosken rannalla Ojalasta vähän pohjoiseen. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Pienen Korosjärven rannalla on kaksi taloa, Korosmäki ja Korosranta sekä Suuren Korosjärven rannalla Korospää-niminen talo. 
<br><b>Perimätietoa:</b> Tila on alunperin ollut Syrjälän talon torppa. Torpan iäksi on arveltu lähes 200 vuotta (vuosi 1968). 

</div><div id='bb9' style="display:none;">
<b>Nimi:</b> Savikko
<br><b>Paikan kuvaus:</b> Kantatalo, joka on arveltu satoja vuosia vanhaksi (vuosi 1968). 
<br><b>Muita paikkaan liittyviä nimiä:</b>
<br><b>Perimätietoa:</b> ”Pellot on semmosta savikkomuata” (Lauri Lintunen, s.1898, 1968). 
<br><br>
<b>Nimi:</b> Komppi
<br><b>Paikan kuvaus:</b> Suurehko niittyalue, jonka läpi virtaa Asumaisenpuro. 
<br><b>Perimätietoa:</b> Nimen alkuperästä ei ole varmuutta, mutta sen arvellaan johtuvan siitä, että niitty on hyvin vetinen.  
<br><br>
<b>Nimi:</b> Keskilato
<br><b>Paikan kuvaus:</b> Keskimmäinen Kompin niittyalueella olevista kolmesta ladosta. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Ladon pohjoispuolella on Ylälato ja eteläpuolella Isonkivenlato. 
<br><br>
<b>Nimi:</b> Ylälato
<br><b>Paikan kuvaus:</b> Pohjoisin Kompin niittyalueen kolmesta ladosta. 
<br><br>
<b>Nimi:</b> Isonkivenlato
<br><b>Paikan kuvaus:</b> Eteläisin Kompin niittyalueella olevasta kolmesta ladosta.
<br><b>Perimätietoa:</b> Ladon vieressä on hyvin iso kivi. 

</div><div id='bb10' style="display:none;">
<b>Nimi:</b> Kallio
<br><b>Paikan kuvaus:</b> Kantatalo, joka sijaitsee kallion päällä
<br><b>Perimätietoa:</b> ”Kaet tämä lienöö usseita satoja vuosija vanaha, eihän sitä tarkkoo ikkee kukkaan tiijä” (Saimi Myllynen, s.1896, 1968). 
<br><br>
<b>Nimi:</b> Pyykkikota
<br><b>Paikan kuvaus:</b> Pieni hirsistä tehty vaja Kallion talosta vähän itään Liesjärven rannalla. 
<br><b>Perimätietoa:</b> Kodassa on keittosija, jossa on lämmitetty pesuvettä. Kota on purettu 1950-luvun alkuvuosina. 
<br><br>
<b>Nimi:</b> Laukkassuo
<br><b>Paikan kuvaus:</b> Viljelyssuo talon kaakkoispuolella. 
<br><b>Perimätietoa:</b> Suo on ollut Laukkanen-nimisellä miehellä jokakesäisenä työurakkana. 
<br><br>
<b>Nimi:</b> Itikkalampi
<br><b>Paikan kuvaus:</b> Pieni lampi talosta jonkin matkaa etelään. 
<br><b>Perimätietoa:</b> Lammin eteläpuolella on synkkä metsä, jossa on runsaasti itikoita. 
<br><br>
<b>Nimi:</b> Koskenvälipelto
<br><b>Paikan kuvaus:</b> Pitkulainen pelto Kallion ja Kosken talojen välillä. 
<br><br>
<b>Nimi:</b> Törmä
<br><b>Paikan kuvaus:</b> Korkeahko harjanne talon länsipuolella, Itikkalammen vieressä.
<br><b>Muita paikkaan liittyviä nimiä:</b> Harjanteen juurella on Törmäpelto

</div><div id='bb11' style="display:none;">
<b>Nimi:</b> Lintulanmäki
<br><b>Paikan kuvaus:</b> Korkea mäki sekä pikkutila mäen liepeellä. 
<br><b>Perimätietoa:</b> ”Siinä on kevväällä aena paljon mehtoja soejiaekana ja kyllä siinä muinakii aekona o ylleesäp paljo kaekkija mehtälintuja” (Pentti Karhunen, s.1933, 1968). Tila on alkuaan Vitkon talon torppa, joka on kertoman mukaan perustettu joskus 1800-luvun jälkipuoliskolla. 
<br><br>
<b>Nimi:</b> Mäenalussuo
<br><b>Paikan kuvaus:</b> Pitkulainen ja kapea metsäsuo Lintulanmäen alla, mäen etelä- ja länsipuolella. 
<br><br>
</div><div id='bb12' style="display:none;">
<b>Nimi:</b> Loju
<br><b>Paikan kuvaus:</b> Mökki Liesjärven pohjoispäässä olevan Meijerinlahden rannalla, maantien länsipuolella. 
<br><b>Muita paikkaan liittyviä nimiä:</b>
<br><b>Perimätietoa:</b> Mökki on erotettu Vipuharjun talosa perintöosuutena. Mökki on olettamusten mukaan rakennettu 1800-luvun viimeisinä vuosikymmeninä. Maasto, jossa mökki sijaitsee, on hyvin alavaa ja vetistä. Loju tarkoittaa alavaa ja vetistä maata sekä märkää ja huonoa maapohjaa. 

</div><div id='bb13' style="display:none;">
<b>Nimi:</b> Koivurinne
<br><b>Paikan kuvaus:</b> Mökki, joka on erotettu Vipuharjun talosta perintöosuutena 1940-luvun alkupuolella. 
<br><b>Perimätietoa:</b> Mökki sijaitsee Liesjärvessä olevan Meijerinlahden pohjoisrannalla, maantien pohjoispuolella ja Asumaisenpuron itäpuolella. Asumaisenpuro kulkee laaksossa, jonka molemmin puolin kohoaa korkea ja jyrkkä rinne. Mökki sijaitsee idän puoleisella rinteellä, jossa kasvaa runsaasti koivuja. 

</div><div id='bb14' style="display:none;">
<b>Nimi:</b> Nurmela
<br><b>Paikan kuvaus:</b> Mökki Korosjoean varrella maantien eteläpuolella. 
<br><b>Perimätietoa:</b> Mökki on rakennettu vuonna 1952. Mökki on rakennettu niityn laitamalle. 

</div><div id='bb15' style="display:none;">
<b>Nimi:</b> Ojala
<br><b>Paikan kuvaus:</b> Mökki Korosjoen länsirannalla maantien pohjoispuolella. 
<br><b>Perimätietoa:</b> Mökki on rakennettu vuonna 1951. 

</div><div id='bb16' style="display:none;">
<b>Nimi:</b> Jokiharju
<br><b>Paikan kuvaus:</b> Talo, joka on erotettu Vitkon talosta perintöosuutena. 
<br><b>Perimätietoa:</b> Talo sijaitsee Liesjoen varrella matalahkolla harjanteella. Tila on lähes 100 vuotta vanha (vuosi 1968). 

</div><div id='bb17' style="display:none;">
<b>Nimi:</b> Vääränlampi
<br><b>Paikan kuvaus:</b> Suurehko lampi Talluksen keskiosassa. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lammin rannalla on Väärä-niminen talo. Vääränlammin ja Vääränjärven välillä on Vääränpuro-niminen puro, jota kutsutaan myös Porttipuroksi. Lampien yhteinen nimitys on Vääränlammit. 
<br><b>Perimätietoa:</b> ”Tämä lammin koellispiä tekköö hyvij jyrkäm mutkaj ja kiäntyy toeseen suuntaa” (Lauri Lintunen, s.1898, 1968). 
<br><br>
<b>Nimi:</b> Kokkorinne
<br><b>Paikan kuvaus:</b> Sileä ja laakea kallio Väärän päärakennuksesta vähän etelään Vääränlammin rannalla. 
<br><b>Perimätietoa:</b> Kalliolla poltetaan juhannuskokkoa ja aikaisemmin siellä on tanssittukin kesälauantaisin. 

</div><div id='bb18' style="display:none;">
<b>Nimi:</b> Väärä
<br><b>Rinnakkaisnimi:</b> Peltola
<br><b>Paikan kuvaus:</b> Kantatalo, joka on satoja vuosia vanha. Talon virallinen nimi on Peltola.
<br><b>Muita paikkaan liittyviä nimiä:</b> Läheisen Suutarilan tilan aikaisempi nimi on Pieniväärä. 
<br><b>Perimätietoa:</b> Talo sijaitsee Vääränlammin luoteisrannalla. 

<br><br>
<b>Nimi:</b> Kokkorinne
<br><b>Paikan kuvaus:</b> Sileä ja laakea kallio Väärän päärakennuksesta vähän etelään Vääränlammin rannalla. 
<br><b>Perimätietoa:</b> Kalliolla poltetaan juhannuskokkoa ja aikaisemmin siellä on tanssittukin kesälauantaisin. 
<br><br>
<b>Nimi:</b> Ruunaniitty
<br><b>Paikan kuvaus:</b> Niitty Väärän asuinrakennuksesta vähän matkaa lounaaseen. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Niityllä on Ruunaniitynlato, jota kutsutaan myös Ruunaladoksi. 
<br><b>Perimätietoa:</b> ”Siinä niityllaejassa oh hyviv vetinen kohta ja siihe or ruuna uponna ja kuollu [tapaus on sattunut joskus vuosisadan vaihteen tienoilla] ” Lauri Lintunen, s.1898, 1968). 

</div><div id='bb19' style="display:none;">
<b>Nimi:</b> Vääränpuro
<br><b>Rinnakkaisnimi:</b> Porttipuro
<br><b>Paikan kuvaus:</b> Vääränlammin ja Vääränjärven välinen puro.

</div><div id='bb20' style="display:none;">
<b>Nimi:</b> Puukkosuo
<br><b>Rinnakkaisnimi:</b> Puukkoneva
<br><b>Paikan kuvaus:</b> Hyvin vetinen metsäsuo Mäkäräkorven itäpuolella. Suon rinnakkaisnimi on Puukkoneva.
<br><b>Perimätietoa:</b> Suo on niin märkä, että siinä kasvaa vain vähän puita, jotka ovat hyvin kitukasvuisia ja pieniä. ”Ei siin kasva kuj joetaev vaevaiskoevuja ja monjaeta suopetäjän käkkyröetä” (Lauri Lintunen, s.1898, 1968). Nimen alkuperää ei tiedetä. 


</div><div id='bb21' style="display:none;">
<b>Nimi:</b> Suutarila
<br><b>Rinnakkaisnimi:</b> Pieniväärä
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Kallion talon torppa. Tilan aikaisempi nimi on Pieniväärä ja se sijaitsee Vääränlammen rannalla. 
<br><b>Perimätietoa:</b> Torpan iäksi arvellaan ainakin 150 vuotta (vuosi 1968). ”Tässä o asunna suutarisija ennen kun myö tähän muutettii” (Lauri Lintunen, s.1898, 1968). 
<br><br>
<b>Nimi:</b> Pönkäsuo
<br><b>Paikan kuvaus:</b> Pieni viljelyssuo Suutarilan asuinrakennuksen pohjoispuolella. 
<br><b>Perimätietoa:</b> ”Se on semmonen pikkunen pönkä koko suo” (Lauri Lintunen, s.1898, 1968). 

</div><div id='bb22' style="display:none;">
<b>Nimi:</b> Mäkäräiskorpi
<br><b>Paikan kuvaus:</b> Suuri metsäsuo Kalliomäen tilan pohjois- ja koillispuolella. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Suon kaakkoispuolella on Korpela-niminen lohkotila, jonka aikaisempi nimi oli Mäkäräinen. 
<br><b>Perimätietoa:</b> ”Liekkö siellä vinooo keitetty, vae mistä tuo nimi lie tullu” (Lauri Lintunen s. 1898, 1968). Mäkäkäinen-substantiivia käytetään paikkakunnalla yleisesti merkityksessä ryyppy. Esimerkiksi yleisesti sanotaan: ”Myö otettiin pienet mäkäräeset” 

</div><div id='bb23' style="display:none;">
<b>Nimi:</b> Korpela
<br><b>Rinnakkaisnimi:</b> Mäkäräinen
<br><b>Paikan kuvaus:</b> Lohkotila, joka on ollut alunperin Anttilan torppa. Tilan aikaisempi nimi on ollut Mäkäräinen. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Tilan luoteispuolella on Mäkäräiskorpi-niminen metsäsuo.
<br><b>Perimätietoa:</b> Torppa on kertoman mukaan 80 vuotta vanha (vuosi 1968). Tilan länsipuolella on metsäsuo. 

</div><div id='bb24' style="display:none;">
<b>Nimi:</b> Kalliomäki
<br><b>Paikan kuvaus:</b> Hävinnyt kantatalo, joka on arvelujen mukaan ollut yli 100 vuotta vanha.
<br><b>Perimätietoa:</b> Talo on hävinnyt vuonna 1965. Talon luoteispuolella on korka kallio. 

<b>Nimi:</b> Mäkipelto 
<br><b>Paikan kuvaus:</b> Pienehkö pelto Kalliomäen tilasta vähän luoteeseen. 
<br><b>Perimätietoa:</b> Pelto sijaistee korkean mäen alarinteessä. 

</div><div id='bb25' style="display:none;">
<b>Nimi:</b> Karila
<br><b>Rinnakkaisnimi:</b> Arpiala
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Tallusmäen talon torppa. Kansanomainen rinnakkaisnimi on Arpiala.
<br><b>Perimätietoa:</b> Torpan iäksi on arveltu ainakin 100 vuotta (vuosi 1968). Nimen alkuperää ei osata selittää. 
<br><br>
<b>Nimi:</b> Arpiala
<br><b>Rinnakkaisnimi:</b> Karila
<br><b>Paikan kuvaus:</b> Karilan tilan kansanomainen nimitys, joka aikaisemmin on ollut kansanomaisessa käytössä yksinomainen ja vielä nytkin yleisempi kuin Karila (vuosi 1968). 
<br><b>Perimätietoa:</b> Tila on ollut Arpiaisten suvun hallussa kauan aikaa. 
<br><br>
<b>Nimi:</b> Aitantauspelto
<br><b>Paikan kuvaus:</b> Pelto Karilan tilan luoteispuolella.
<br><b>Perimätietoa:</b> Pellon kaakkoispäässä on aitta, joten pelto on sen takana asuinrakennuksesta katsoen. 
<br><br>
<b>Nimi:</b> Metsäniitty
<br><b>Paikan kuvaus:</b> Niitty Karilan talosta vähän luoteeseen metsän keskellä. 

</div><div id='bb26' style="display:none;">
<b>Nimi:</b> Kustola
<br><b>Rinnakkaisnimi:</b> Kallioharju
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin Tallusmäen talon torppa. Tilan virallinen nimi on Kallioharju. Tila sijaitsee vähäisellä harjanteella ja sen lähellä on laakea kallio.
<br><b>Perimätietoa:</b> Torppa on arvelujen mukaan noin 100 vuotta vanha (vuosi 1968). Tilan aikaisempi omistaja oli Kusto Ovaskainen. 


</div><div id='bb27' style="display:none;">
<b>Nimi:</b> Lassila
<br><b>Rinnakkaisnimi:</b>Lahdentaus
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Tallusmäen talon torppa. Tilan virallinen nimi on Lahdentaus. Talo sijaitsee Tallusjärven luoteispäässä olevan Luodelahden lähistöllä.
<br><b>Perimätietoa:</b> Tila on arveltu yli 100 vuotta vanhaksi (vuosi 1968). Tilan vanhaisäntä on ollut Lassi-niminen. 
<br><br>
<b>Nimi:</b> Kivikkopelto
<br><b>Paikan kuvaus:</b> Hyvin kivinen pelto Lassilan asuinrakennuksen eteläpuolella. 


</div><div id='bb28' style="display:none;">
<b>Nimi:</b> Löytökorpi
<br><b>Paikan kuvaus:</b> Suuri viljelyssuo Juurikkapuron alajuoksun varrella. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Asumaisenlammin lähettyvillä on Löytölampi ja Löytömäki. 
<br><b>Perimätietoa:</b> Suolla on suuri Löytökorvenlato. ”Melekein sitä ehtijäp pittää, ennen kun sel löytää, kun se on niin korven sisässä” (Niilo Huttunen, s.1918, 1968). 
<br><br>
<b>Nimi:</b> Roviokorpi
<br><b>Paikan kuvaus:</b> Metsäsuo Löytökorvesta hieman länteen sekä suurehko viljelyssuo metsäsuon kaakkoispuolella. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Suon laitamalla on Roviokorvenlato. 
<br><b>Perimätietoa:</b> ”Sitä suota poltetiij ja sittä se jäe kytemääj ja kyti pitkä aekoo ennen ku se huomattiij ja suatiin sammumaa” (Niilo Huttunen, s.1918, 1968). 

</div><div id='bb29' style="display:none;">
<b>Nimi:</b> Roviokorvenlato
<br><b>Paikan kuvaus:</b> Suolato

</div><div id='bb30' style="display:none;">
<b>Nimi:</b> Kiviharju 
<br><b>Rinnakkaisnimi:</b> Pietilä
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Tallusniemen talon torppa. Tilan aikaisempi nimi on ollut Pietilä.. 
<br><b>Perimätietoa:</b> Tila on olettamusten mukaan ainakin 120 vuotta vanha (vuosi 1968). Tila sijaitsee korkealla harjanteella, joka ulottuu Tallusjärven rannan suuntaisena pitkälle tilan kaakkoispuolelle. Harju on hyvin kivinen. 
<br><br>
<b>Nimi:</b> Pietilä
<br><b>Rinnakkaisnimi:</b> Kiviharju
<br><b>Paikan kuvaus:</b> Kiviharjun tilan aikaisempi nimi, jota ei enää käytetä.
<br><b>Perimätietoa:</b> Tilalla on ollut Pietari-niminen isäntä, jota on kansanomaisesti kutsuttu Pietiksi. 
<br><br>
<b>Nimi:</b> Koivikkolatoala 
<br><b>Paikan kuvaus:</b> Niitty Kiviharjun tilan asuinrakennuksen länsipuolella. 
<br><b>Perimätietoa:</b> Koivikkolatoalan ja Kenkkilatoalan välissä on pieni koivuja kasvava metsäalue. Niityn laitamalla on Koivikkolato.
<br><br>
<b>Nimi:</b> Kenkkilato
<br><b>Paikan kuvaus:</b> Lato Koivikkolatoalasta vähän länteen. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Ladon eteläpuolella on Kenkkilatoala-niminen niitty. 
<br><b>Perimätietoa:</b> ”Sillor rajankäännissä se Suastamoene [maanmittari] anto muata, mutt sittä se laan kohta jäe ylmiäräseks sittä siinä jakosaouvissa, ihan kuk kenkiks” (Elli Markkanen, s.1899, 1968). 
<br><br>
<b>Nimi:</b> Niittypelto
<br><b>Paikan kuvaus:</b> Pelto Kiviharjun tilan asuinrakennuksen luoteispuolella. 
<br><b>Perimätietoa:</b> Pellon länsipuolella on niitty. 
<br><br>
<b>Nimi:</b> Pitkätsarat
<br><b>Paikan kuvaus:</b> Pitkä ja kapea niittyalue Kiviharjun asuinrakennuksen lounaispuolella.
<br><b>Perimätietoa:</b> Niitty muodostuu pitkistä saroista, jotka ulottuvat niittyalueen päästä päähän pituussuunnassa. 
<br><br>
<b>Nimi:</b> Pasinniitty:
<br><b>Paikan kuvaus:</b> Niitty pitkien sarkojen eteläpuolella. 
<br><b>Perimätietoa:</b> Niitty on hyvin vetinen. Nykyään (vuosi 1968) niittyä käytetään laitumena ”Sn niitym piässä [eteläpäässä] ol lähe ja se vallaa vettä siihen niitylle, että ei siitä ou viljeltäväks, kun se on niim märkee” (Niilo Markkanen, s.1928, 1968). 
<br><br>
<b>Nimi:</b> Umpisuoli
<br><b>Paikan kuvaus:</b> Lähde Pasinniityn eteläpäässä. 
<br><b>Perimätietoa:</b> ”Se niityn piä on niin kappee, että se lähe on siinä ku umpisuolessa” (Niilo Markkanen, s.1927, 1968). 
<br><br>
<b>Nimi:</b> Pärttykannokko
<br><b>Paikan kuvaus:</b> Kaskeksi hakattu alue Kiviharjun tilan asuinrakennuksesta jonkin matkaa etelään. 
<br><b>Perimätietoa:</b> Kaski on jäänyt polttamatta. ”Pärtty Mähönen sen kasken hakkas ja kannot se jätti hirveem pitkiks. Sittä se kaski jäe polttamatta ja siellä ne kannot vieläki törröttää” (Elli Markkanen, s.1899, 1968). 
<br><br>
<b>Nimi:</b> Pikkuniitty
<br><b>Paikan kuvaus:</b> Pieni niitty Kiviharjun tilasta vähän kaakkoon. 

</div><div id='bb31' style="display:none;">
<b>Nimi:</b> Luodelahdenmökki
<br><b>Paikan kuvaus:</b>  Hävinnyt mökki Tallusmäen talon maalla.
<br><b>Perimätietoa:</b> Mökki on ollut itsenäistymätön ja hävinnyt joskus 1910-luvulla. Mökki on sijainnut Tallusjärven luoteispäässä olevan Luodelahden rannalla, maantien ja lahden välissä. 

</div><div id='bb32' style="display:none;">
<b>Nimi:</b> Juurikkapuro
<br><b>Paikan kuvaus:</b> Luonnonoja, joka laskee Talluslammista Tallusjärven pohjoispäässä olevaan Purnunlahteen. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Puron varrella on Puro-niminen lohkotila. 

</div><div id='bb33' style="display:none;">
<b>Nimi:</b> Peltoharju
<br><b>Paikan kuvaus:</b> Mökki, joka on erotettu Tallusniemen talosta perintöosuutena. 
<br><b>Perimätietoa:</b> Mökki on rakennettu vuonna 1947. Mökki sijaitsee Venälänpellon laitamalla pienellä harjanteella. 

</div><div id='bb34' style="display:none;">
<b>Nimi:</b> Puronvarsipelto
<br><b>Paikan kuvaus:</b> Pelto Puron tilan asuinrakennuksen itäpuolella. 
<br><b>Perimätietoa:</b> Pellon vieritse virtaa Talluslammista Tallusjärveen laskeva Juurikkapuro. 
<br><br>
<b>Nimi:</b> Puro
<br><b>Rinnakkaisnimi:</b> Juurikkapuro
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Tallusmäen talon torppa. Talon virallinen nimi on Juurikkapuro.
<br><b>Perimätietoa:</b> Tilan iäksi on arveltu ainakin 150 vuotta (vuosi 1968). Tila sijaitsee Talluslammista Purnunlahteen laskevan Juurikkapuron varrella. Purolla piti kauppaa Taavetti Malinen. Häntä kutsuttiin ”Puron juutalaiseksi”. 

</div><div id='bb35' style="display:none;">
<b>Nimi:</b> Kiviniemi
<br><b>Paikan kuvaus:</b> Kiviniemi on hyvin suuri niemi, joka pistää Tallusjärven pohjoispäähän. Kiviniemi on myös niemen eteläpäässä sijaitsevan talon nimi. Kotirannan taloa on myös aikaisemmin kutsuttu Kiviniemeksi, sillä se on aikaisemmin sijainnut Kiviniemessä. Kiviniemi on myös kulmakunta, joka käsittää Kiviniemessä olevat talot, tilat ja muut asumukset. 
<br><b>Perimätietoa:</b> Niemi on hyvin kivistä ja epätasaista maastoa. Kiviniemen tila on halkaistu Anttilan talon maasta perintöosuutena 1920-luvun loppupuolella. Maanmittaushallituksen vuonna 1944 laatimassa taloudellisessa kartassa on Kiviniemen talon nimeksi merkitty Anttila, joka on todellisuudessa Kiviniemen talon luoteispuolella oleva talo. 
<br><br>
<b>Nimi:</b> Kotiranta
<br><b>Rinnakkaisnimi:</b> Kiviniemi, Purnunlahti.
<br><b>Paikan kuvaus:</b> Kantatalo, jonka iäksi on arveltu yli 200 vuotta (vuosi 1968). Tilan aikaisempi nimitys on Kiviniemi, jota ei enää käytetä. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Toisella puolella on mökki nimeltä ”Tupsun syrjä”
<br><b>Perimätietoa:</b> Talo on sijainnut aikaisemmin Kiviniemessä, josta se on siirretty nykyiselle paikalleen joskus 1920-luvulla. Muuton yhteydessä talon nimi on muutettu. Talo sijaitsee Tallusjärven rannalla. 
<br><br>
<b>Nimi:</b> Kusiaisenniitty
<br><b>Paikan kuvaus:</b> Niitty Kotirannan talosta vähän matkaa pohjoiseen, maantien pohjoispuolella. 
<br><b>Perimätietoa:</b> Niityn laitamalla on useita muurahaispesiä. 
<br><br>
<b>Nimi:</b> Tönölä
<br><b>Rinnakkaisnimi:</b> Tupsunsyrjä
<br><b>Paikan kuvaus:</b> Hävinnyt mökki Kotirannan talon maalla, talon kohdalla, maantien pohjoispuolella.
<br><b>Perimätietoa:</b> Mökki on rakennettu 1890-luvun loppupuolella. Mökki on ollut itsenäistymätön ja hävinnyt vuonna 1952. ”Se ol semmoneh hyvin pien tönö se mökki. Yks huone siinä vua ol” (Topi Tolonen, s.1889, 1968). 
<br><br>
<b>Nimi:</b> Mäntylä 
<br><b>Paikan kuvaus:</b> Kotirannan talon hävinnyt torppa Variksenniityn itäsyrjässä.
<br><b>Perimätietoa:</b> Torppa on hävinnyt 1910-luvun loppupuolella. Ympäristössä on mäntymetsää. 
<br><br>
<b>Nimi:</b> Varis
<br><b>Paikan kuvaus:</b> Niitty Kusiaisenniityn luoteispuolella. Niitystä käytetään myös nimeä Varislatoala. 
<br><b>Perimätietoa:</b> Niitty on ollut jollakin Varis-nimisellä miehellä jokakesäisenä työurakkana. 

</div><div id='bb36' style="display:none;">
<b>Nimi:</b> Purnulahti
<br><b>Paikan kuvaus:</b> Tallusjärven pohjoispäässä oleva suuri lahti, joka pistää Tallusniemen ja Kiviniemen väliin. 
<br><b>Perimätietoa:</b> ”Se on siinä semmosessa purnukassa kahe ison niemev välissä” (Topi Tolonen, s.1889, 1968). 

</div><div id='bb37' style="display:none;">
<b>Nimi:</b> Onnela
<br><b>Paikan kuvaus:</b> Pikkutila, joka on erotettu Muhon talosta perintömaana noin vuonna 1935.
<br><b>Perimätietoa:</b> ”Se perijä ol nii onnellinen ku sae oman paeka itellee” (Onni Tiirikainen, s.1923, 1968). 
<br><br>
<b>Nimi:</b> Piilopelto
<br><b>Paikan kuvaus:</b> Pelto Onnelan tilan itäpuolella.
<br><b>Perimätietoa:</b> Pelto on kolmelta suunnalta, pohjoisesta, idästä ja etelästä metsän ympäröimä, joten se on ikään kuin piilossa metsän sisässä. Pellolla kuokki mies koko kesän piilossa, kun pelkäsi sotaan joutumista. 

</div><div id='bb38' style="display:none;">
<b>Nimi:</b> Tiensyrjä
<br><b>Paikan kuvaus:</b> Mökki, joka on lohkaistu Ruosuon talon maasta.
<br><b>Perimätietoa:</b> Mökki on rakennettu 1930-luvun alkupuolella. Mökki sijaitsee maantien varrella Onnelan tilasta hieman länteen. 

</div><div id='bb39' style="display:none;">
<b>Nimi:</b> Tallusniemi
<br><b>Rinnakkaisnimi:</b> Heimola
<br><b>Paikan kuvaus:</b> Suuri niemi, joka pistää Tallusjärven pohjoispäähän. Tallusniemi on myös niemessä sijaitsevan kantatalon nimi. Talon virallinen nimi on Heimola.
<br><b>Muita paikkaan liittyviä nimiä:</b> Talosta joitakin kilometrejä luoteeseen on Tallusmäki ja samanniminen kantatalo. 
<br><b>Perimätietoa:</b> ”On tämä satoja vuosija vanaha, varmasti lähemmäks kolomesattoo, jos ei ylikii” (Niilo Huttunen, s.1918, 1968). 


</div><div id='bb40' style="display:none;">
<b>Nimi:</b> Luodelahti
<br><b>Paikan kuvaus:</b> Suuri lahti Tallusjärven luoteispäässä. Lahti pistää lähelle maantietä. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lahden luoteisrannalla on pienehkö Luvelahdenniitty. 

</div><div id='bb41' style="display:none;">
<b>Nimi:</b> Anttila
<br><b>Rinnakkaisnimi:</b> Mähölä
<br><b>Paikan kuvaus:</b> Kantatalo, joka on olettamusten mukaan satoja vuosia vanha.
<br><b>Perimätietoa:</b> Talon edellinen isäntä on ollut Antti-niminen. Maanmittaushallituksen taloudellisessa kartassa vuodelta 1944 on läheisen Kiviniemen talon nimeksi virheellisesti merkitty Anttila. 
<br><br>
<b>Nimi:</b> Mähölä 
<br><b>Rinnakkaisnimi:</b> Anttila
<br><b>Paikan kuvaus:</b> Anttilan talon aikaisempi nimi, jota ei enää paljon käytetä.
<br><b>Perimätietoa:</b> Talossa on aikaisemmin asunut Mähösiä. 
<br><br>
<b>Nimi:</b> Kivipelto
<br><b>Paikan kuvaus:</b> Hyvin kivinen pelto, joka sijaitsee Anttilan tilan pohjoispuolella. 
<br><br>
<b>Nimi:</b> Metsäpelto
<br><b>Paikan kuvaus:</b> Vähäinen pelto Anttilan talosta vähän pohjoiseen metsän sisällä. 
<br><br>
<b>Nimi:</b> Kilkkala
<br><b>Paikan kuvaus:</b> Hävinnyt lohkotila, joka on alunperin ollut Anttilan talon torppa. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Tilan pohjoispuolitse kulkee metsäsuolta Tallusjärveen laskeva luonnonoja nimeltään Kilkkalanpuro. 
<br><b>Perimätietoa:</b> Tila on hävinnyt noin vuonna 1930. 

</div><div id='bb42' style="display:none;">
<b>Nimi:</b> Koirasaari
<br><b>Paikan kuvaus:</b> Pienehkö saari Tallusjärven Tallusniemen edustalla. 
<br><b>Perimätietoa:</b> ”Meillä ol semmonen koera, että se aena kesällä ui rannasta siihen suareen ku ol kuuma ilima” (Niilo Huttunen, s.1918, 1968). 

</div><div id='bb43' style="display:none;">
<b>Nimi:</b> Mustaniemi
<br><b>Paikan kuvaus:</b> Tallusjärveen pistävä suuri niemi. Mustaniemi on myös niemen kollisrannalla oleva lohkotila.
<br><b>Perimätietoa:</b> ”Se ku on niin korkeeta harjuva koko se niem, niin tähän pohjoisrantaa ei aarinko piäse paestamaan sen takkoo [ja siksi niemen pohjoisranta on ”musta”]” (Niilo Markkanen, s.1928, 1968). Tila on ollut alunperin Tallusniemen talon torppa, joka on arvelujen mukaan lähes 100 vuotta vanha (vuosi 1968). Tila on yhdistetty Kiviharjun tilaan 1940-luvulla. 

</div><div id='bb44' style="display:none;">
<b>Nimi:</b> Mustinsaari
<br><b>Paikan kuvaus:</b> Saari Tallusjärvessä lähellä Viitasaarta. 
<br><b>Perimätietoa:</b> Nimen alkuperä on tuntematon. 

</div><div id='bb45' style="display:none;">
<b>Nimi:</b> Vasikkasaari
<br><b>Rinnakkaisnimi:</b> Lammassaari
<br><b>Paikan kuvaus:</b> Saari Tallusjärvessä Kiviniemen lähistöllä.
<br><b>Perimätietoa:</b> Saaressa on pidetty kesäisin vuorotellen talon lampaita ja vasikoita, mistä saaren molemmat nimet selittyvät.
<br><br>
<b>Nimi:</b> Saarenpelto
<br><b>Paikan kuvaus:</b> Vähäinen pelto läheisessä Vasikkasaaressa. 

</div><div id='bb46' style="display:none;">
<b>Nimi:</b> Häpsänkaarre
<br><b>Paikan kuvaus:</b> Kiviniemen eteläpäähän pistävä Tallusjärven lahti. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lahden pohjoisrannalla on pieni Häpsänpelto.

</div><div id='bb47' style="display:none;">
<b>Nimi:</b> Topila
<br><b>Paikan kuvaus:</b> Kiviniemen talon kansanomainen nimi. 
<br><b>Perimätietoa:</b> Talon omistaa Topi Tolonen (vuosi 1968). 

</div><div id='bb48' style="display:none;">
<b>Nimi:</b> Särkiluoto
<br><b>Paikan kuvaus:</b> Useita lähekkäisiä luotoja Tallusjärven Luodelahdessa. 
<br><b>Perimätietoa:</b> Luotojen ympäristössä on runsaasti särkiä. ”Piettiin siinä aekasemmin särentokkeitae, mutt nyt ei ennee monneev vuotee ou pietty ku ei niitä särkijä oekeen kukkaan syö” (Elli Markkanen, s.1899, 1968). Tove tarkoittaa kalojen johteeksi tehtyä patoa, jota käytetään särkien pyydystämisessä. 

</div><div id='bb49' style="display:none;">
<b>Nimi:</b> Porttila
<br><b>Paikan kuvaus:</b> Lohkotila, joka alunperin on ollut Kosken talon torppa. 
<br><b>Perimätietoa:</b> Torppa on kertoman mukaan perustettu 1800-luvun puolivälin tienoilla. Tila sijaitsee maantien varressa. Tien yli on ollut portti juuri tilan kohdalla. 

</div><div id='bb50' style="display:none;">
<b>Nimi:</b> Porttiniitty
<br><b>Paikan kuvaus:</b> Muhon talon koillispuolella oleva pitkulainen niitty, joka ulottuu maantiehen saakka. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Maantien pohjoispuolella on Porttila-niminen tila. 
<br><b>Perimätietoa:</b> Maantien yli on ollut aikaisemmin portti juuri niityn kohdalla. 
<br><br>
<b>Nimi:</b> Muho
<br><b>Rinnakkaisnimi:</b> Muhonaho
<br><b>Paikan kuvaus:</b> Talo, joka on halkaistu Anttilan talosta 1920-luvun puolivälin tienoilla. Muhonaho on tilan virallinen nimi.
<br><b>Perimätietoa:</b> Talossa on asunut aikaisemmin Muhosia. Tila sijaitsee aholla, joka on ollut Anttilan talon kaskimaana joskus 1900-luvun alussa.


</div><div id='bb51' style="display:none;">
<b>Nimi:</b> Lintupuro
<br><b>Paikan kuvaus:</b> Mökki Lintuslammista Tallusjärveen laskevan Lintuspuron varrella. 
<br><b>Perimätietoa:</b> Mökki on alunperin ollut Kosken talon mäkitupa. Mökki on lähes 70 vuotta vanha (vuosi 1968). 

</div><div id='bb52' style="display:none;">
<b>Nimi:</b> Nättilä
<br><b>Paikan kuvaus:</b> Mökki, joka on rakennettu noin vuonna 1930. Mökin tontti on lohkaistu Muhon talon maasta. 
<br><b>Perimätietoa:</b> Aikaisemmin mökki on sijainnut Porttilan tilan kohdalla maantien eteläpuolella, mutta vuonna 1949 se on siirretty Ruosuolle. Nättilässä on asunut ompelija Edla Kekkonen miehensä Taavetti Kekkosen kanssa. 

</div><div id='bb53' style="display:none;">
<b>Nimi:</b> Nurkkala
<br><b>Rinnakkaisnimi:</b> Vierunmökki
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Väärän talon mäkitupa. Tilan aikaisempi nimi on ollut Vierunmökki. 
<br><b>Perimätietoa:</b> Tila on ainakin 80 vuotta vanha (vuosi 1968). Tila sijaitsee Väärän ja Kosken maiden nurkkauksessa. 

</div><div id='bb54' style="display:none;">
<b>Nimi:</b> Lammaslahti
<br><b>Paikan kuvaus:</b> Suuri lahti Tallusjärven koillispäässä sekä niitty lahden luoteispuolella.  
<br><b>Perimätietoa:</b> ”Siinä laher rennalla ol lammashaka, vuan nyt se oh hävitettynä olluj jo yl kymmenev vuotta” (Onni Tiirikainen, s.1923, 1968). Niityltä jonkin matkaa etelään on lahden rannalla pitkä ja kapea Lammaslahdenniitty.

</div><div id='bb55' style="display:none;">
<b>Nimi:</b> Petronlahti
<br><b>Paikan kuvaus:</b> Suuri, lähellä maantietä pistävä lahti Tallusjärven koillispäässä. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Lahden länsipuolella pistää suuri Petronniemi. 
<br><b>Perimätietoa:</b> Nimen alkuperää ei enää muisteta. 


</div><div id='bb56' style="display:none;">
<b>Nimi:</b> Huttula
<br><b>Paikan kuvaus:</b> Lohkotila, joka sijaitsee Anttilan talon luoteispuolella.
<br><b>Perimätietoa:</b> Tila on alunperin Kotirannan talon torppa. Tila on kertoman mukaan lähes 200 vuotta vanha (vuosi 1968). Aikaisemmin tilalla on asunut Huttusia. 

</div><div id='bb57' style="display:none;">
<b>Nimi:</b> Ruokoniemi
<br><b>Paikan kuvaus:</b> Tallusjärven kollispäähän pistävä suurehko niemi. Ruokoniemi on myös niemessä oleva samanniminen pelto, josta käytetään myös nimeä Ruokoniemenpelto.
<br><b>Perimätietoa:</b> ”Siinä järvessä kasvaa justiinsa sen niemen kohalla hirveemp paljo semmosta järviruokoo” (Saimi Myllynen, s.1896, 1968). 

</div><div id='bb58' style="display:none;">
<b>Nimi:</b> Kalliokaarre
<br><b>Paikan kuvaus:</b> Lahti Tallusjärven koillispäässä. 
<br><b>Perimätietoa:</b> Lahden rannalla on pieni ja laakea kallio sekä venevalkama.

</div><div id='bb59' style="display:none;">
<b>Nimi:</b> Lintuslampi
<br><b>Paikan kuvaus:</b> Pienehkö pitkulainen lampi.
<br><b>Muita paikkaan liittyviä nimiä:</b> Lammista vähän matkaa kaakkoon on pitkä ja kapea kangasselänne nimeltään Lintuskangas. Kankaan itäpuolella on Lintusniitty. 
<br><b>Perimätietoa:</b> Lammista Tallusjärveen laskee luonnonoja nimeltään Lintuspuro. ”Siinä [lammissa] ol enneh aena hirveem paljo vesilintuja ja paljo siitä niitä pyyvystettiinnii” (Taavetti Nuutinen, s.1892, 1968). 

</div><div id='bb60' style="display:none;">
<b>Nimi:</b> Honkamäki
<br><b>Paikan kuvaus:</b> Kangasselänne Lintuslammista vähän itään. 
<br><b>Perimätietoa:</b> Kankaalla kasvaa hyvin vanhoja ja suuria honkia. 


</div><div id='bb61' style="display:none;">
<b>Nimi:</b> Yökorpi
<br><b>Paikan kuvaus:</b> Metsäsuo Savikon päärakennuksesta jonkin matkaa luoteeseen, maantien toisella puolella. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Suon ja maantien välissä on Yökorvenniitty, jonka laitamalla on Yökorvenlato. 
<br><b>Perimätietoa:</b> ”Siitä korvesta tulloo heleposti yöllä halla siihen niitylle ja se niitty on nii alavata muata” (Lauri Lintunen, s.1898, 1968). 

</div><div id='bb62' style="display:none;">
<b>Nimi:</b> Varsahaka
<br><b>Paikan kuvaus:</b> Lintuslammin pohjoispuolella oleva haka, jossa on pidetty talon varsoja aitauksessa. 

</div><div id='bb63' style="display:none;">
<b>Nimi:</b> Syväharju
<br><b>Rinnakkaisnimi:</b> Syvä
<br><b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Ovaskalanharjun torppa. Tilan aikaisempi nimi on Syvä. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Tilasta jonkin matkaa pohjoiseen on Syvä-niminen pikkutila. 
<br><b>Perimätietoa:</b> Tila on arvioiden mukaan 100-150 vuotta vanha (vuosi 1968). Tila sijaitsee Tallusjärven rannalla vähäisellä harjanteella. Järvi on tilan kohdalla hyvin syvä. 
<br><br>
<b>Nimi:</b> Syvä
<br><b>Paikan kuvaus:</b> Pikkutila, joka on alunperin ollut Ovaskalanharjun maata. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Tilasta hieman etelään on Syväharju-niminen lohkotila, jonka aikaisempi nimitys on Syvä. 
<br><b>Perimätietoa:</b> Tila on lohkaistu Ovaskalanharjusta vuonna 1950. 

</div><div id='bb64' style="display:none;">
<b>Nimi:</b> Ovaskalanharju
<br><b>Paikan kuvaus:</b> Kantatalo, jonka on arveltu olevan ainakin 200 vuotta vanha. 
<br><b>Perimätietoa:</b> Talo sijaitsee matalahkolla harjanteella. Talossa on asunut Ovaskaisia. 
<br><br>
<b>Nimi:</b> Rinnelato
<br><b>Paikan kuvaus:</b> Lato Ovaskalanharjun talon itäpuolella mäen rinteellä. 

</div><div id='bb65' style="display:none;">
<b>Nimi:</b> Rapaluoto 
<br><b>Paikan kuvaus:</b> Kalliluoto Tallusjärvessä Olkiniemen edustalla. Luodolla on runsaasti pieniä kiviä. 

</div><div id='bb66' style="display:none;">
<b>Nimi:</b> Paloranta
<br><b>Paikan kuvaus:</b> Talo, joka on halkaistu Anttilan talon maasta noin vuonna 1905 perintöosuutena. 
<br><b>Perimätietoa:</b> ”Siinä palo mehtä isolta alalta [joskus vuosisadan vaihteen tienoilla] ” (Topi Tolonen, s.1889, 1968). 

</div><div id='bb67' style="display:none;">
<b>Nimi:</b> Honkasaari
<br><b>Paikan kuvaus:</b> Suurehko saari Tallusjärvessä lähellä Kiviniemen kärkeä. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Saaren eteläpuolella on Honkaluoto.
<br><b>Perimätietoa:</b> Saaressa kasvaa hyvin vanhoja ja suuria honkia. 

</div><div id='bb68' style="display:none;">
<b>Nimi:</b> Sammakkoniemi
<br><b>Paikan kuvaus:</b> Tallusjärveen pistävän Kiviniemen eteläkärjessä oleva niemi. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Niemen itäpuolella on loivasti kaartuva Sammakkolahti. Niemestä hieman etellään on Tallusjärvessä kaksi lähekkäistä saarta nimeltään Sammakkosaaret, joista käytetään myös nimeä Sammakkolansaaret. Pohjoisemman saaren ja Sammakkoniemen välinen salmi on Sammakkosalmi. 
<br><b>Perimätietoa:</b> ”Siinä [Sammakkoniemessä] o usseita suohaatoja ja niissä om paljo sammakoeta” (Topi Tolonen, s.1889, 1968). 

</div><div id='bb69' style="display:none;">
<b>Nimi:</b> Ruosuo
<br><b>Paikan kuvaus:</b> Suuri viljelyssuo Kiviniemen itäosassa Tallusjärven rannalla. Ruosuo on myös niemenssä sijaitseva talo.
<br><b>Muita paikkaan liittyviä nimiä:</b> Niitty ulottuu Tallusjärveen pistävään niemeen, jonka nimi on Ruosuonniemi. Viljelyssuon lounaispuolella on Ruosuoniitty.
<br><b>Perimätietoa:</b> Ruosuon talo on erotettu Kiviniemen talon maasta perintöosuutena noin vuonna 1925. 

</div><div id='bb70' style="display:none;">
<b>Nimi:</b> Heikkilänsaari
<br><b>Rinnakkaisnimi:</b> Suurehko saari Tallusjärven koillispäässä. Heikkilänsaari on myös saaressa sijaitseva samanniminen talo, joka on erotettu Salmen kantatalosta perintöosuutena vuonna 1956. 
<br><b>Perimätietoa:</b> Erään olettamuksen mukaan saaressa on asunut Heikkisiä joskus kauan sitten, mutta asiaa ei voida varmuudella sanoa. Maanmittaushallituksen taloudellisessa kartassa vuodelta 1944 on saaren nimeksi merkitty Tallussaari, joka ei esiinny kansanomaisessa käytössä. 

</div><div id='bb71' style="display:none;">
<b>Nimi:</b> Salmi
<br><b>Paikan kuvaus:</b> Kantatalo, joka on kertoman mukaan satoja vuosia vanha. 
<br><b>Perimätietoa:</b> Talo sijaitsee Heikkilänsaaren ja Olkiniemen välisen salmen rannalla. 

</div><div id='bb72' style="display:none;">
<b>Nimi:</b> Olkiniemi
<br><b>Paikan kuvaus:</b> Tallusjärveen pistävä suuri niemi Savilahden länsipuolella.
<br><b>Perimätietoa:</b> Nimen alkuperää ei enää varmasti tiedetä, mutta nimen on oletettu johtuvan siitä, että niemessä on kaksi kantataloa, joiden laajoilla peltoalueilla kasvatetaan runsaasti viljaa. Aikaisemmin vilja on leikattu sirpillä ja tehty lyhteiksi, joten oljet ovat jääneet kokonaisiksi.  

</div><div id='bb73' style="display:none;">
<b>Nimi:</b> Lintukaarre
<br><b>Paikan kuvaus:</b> Tallusjärven lahti, joka pistää Olkiniemen eteläpuolelle. 
<br><b>Perimätietoa:</b> Lahti on vesilintujen suosima oleskelupaikka. 

</div><div id='bb74' style="display:none;">
<b>Nimi:</b> Hynnylä
<br><b>Paikan kuvaus:</b> Luoto Lintukaarteessa.
<br><b>Perimätietoa:</b> Nimen alkuperää ei enää tiedetä. 

</div><div id='bb75' style="display:none;">
<b>Nimi:</b> Kuolio 
<br><b>Paikan kuvaus:</b> Pieni saari Tallusjärvessä
<br><b>Perimätietoa:</b> ”Siitä ol löyvetty piäkalloja. Lievätkö heimoriitoe aejalta, kun ne on tiälläep päen sillon tapelleet” (Topi Tolonen, s.1889, 1968). 

</div><div id='bb76' style="display:none;">
<b>Nimi:</b> Leppänen
<br><b>Paikan kuvaus:</b> Pieni saari Tallusjärvessä Honkasaaresta vähän kaakkoon. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Saaren itäpuolelle lähellä saarta pistää Leppäsenniemi. 
<br><b>Perimätietoa:</b> Saaressa ja niemessä kasvaa runsaasti leppiä.

</div><div id='bb77' style="display:none;">
<b>Nimi:</b> Matilanlahti
<br><b>Paikan kuvaus:</b> Tallusjärven lahti Leppäsenniemen koillispuolella. 

</div><div id='bb78' style="display:none;">
<b>Nimi:</b> Savilahti
<br><b>Paikan kuvaus:</b> Suuri lahti Tallusjärvessä Ruokoniemen eteläpuolella. 
<br><b>Perimätietoa:</b> Liesjärvestä laskeva Liesjoki päättyy tähän lahteen. Joki virtaa savimaiden halki ja tuo lahteen mukanaan savilietettä. 
</div>


</div><!-- DOKUALUE (CONTENT) loppuu -->
 
<!-- FOOTER alkaa -->
<div id="footer"> 
	<? include "footer.htm" ?>
</div><!--FOOTER loppuu --> 

</div> <!-- CONTAINER loppuu -->
</body>
</html>
