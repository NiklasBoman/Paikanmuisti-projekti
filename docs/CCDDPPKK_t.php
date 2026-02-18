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
var ids=new Array('kk1','kk2','kk3','kk4','kk5','kk6','kk7','kk8','kk9','kk10','kk11','kk12','kk13','kk14','kk15','dd1','dd2','dd3','dd4','dd5','dd6','dd7','dd8','dd9','dd10','dd11','dd12','dd13','dd14','dd15','dd16','dd17','dd18','dd19','dd20','dd21','dd22','dd23','dd24','pp1','pp2','pp3','pp4','pp5','pp6','pp7','pp8','pp9','pp10','pp11','pp12','pp13','pp14','pp15','pp16','pp17','pp18','pp19','pp20','pp21','pp22','pp23','pp24','pp25','pp26','pp27','pp28','pp29','pp30','pp31','pp32','pp33','pp34','pp35','pp36','pp37','pp38','pp39','pp40','pp41','pp42','pp43','pp45','pp46','pp47','pp48','pp49','pp50','pp51','pp52','pp53','pp54','pp55','pp56','pp57','pp58','pp59','pp60','pp61','pp62','pp63','pp64','pp65','pp66','pp67','pp68','pp69','pp70','pp71','pp72','pp73','cc21','cc22','cc23','cc24','cc25','cc26','cc27','cc28','cc29','cc30','cc31','cc32','cc33','cc34','cc35','cc36','cc37','cc38','cc39','cc40','cc41','cc42','cc43','cc44','cc45','cc46','cc47','cc48','cc49','cc50','cc51','cc52','cc53','cc54','cc55','cc56','cc57','cc58','cc59','cc60','cc61','cc62','cc63','cc64','cc65','cc66','cc67','cc68','cc69','cc70','cc71','cc72','cc73','cc74','cc75','cc76','cc77','cc78','cc79','cc80','cc81','cc82','cc83','cc84','cc85','cc86','cc87','cc88','cc89','cc90','cc91','cc92','cc93','cc94','cc95','cc96','cc97','cc98','cc99','cc100','cc101','cc102','cc103','cc104','cc105','cc106','cc107','cc108','cc109','cc110','cc111','cc112','cc113','cc114','cc115','cc115b','cc116','cc117','cc118','cc119','cc120','cc121','cc122','cc123','cc124','cc125','cc126','cc127','cc128','cc129','cc130','cc131','cc132','cc133','cc134','cc135');



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
		  <div align="right"> <b>Ahveninen,&copy; Maanmittauslaitos, lupa nro PSAVO/018/2007</b></div>	  </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
    </table>
   <!-- VIDEO OBJEKTI -->
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 

codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="700" height="400">
   <param name="movie" value="CCDDPPKK.swf" />
   <param name="WMODE" value="opaque" />
   <param name="swliveconnect" value="true">
   <param name="quality" value="high" />
   <embed src="CCDDPPKK.swf" quality="high" width="700" height="400" WMODE="opaque" 

pluginspage="http://www.macromedia.com/go/getflashplayer" 
 type="application/x-shockwave-flash"  swliveconnect="true"></embed> 
      </object>
      <!-- VIDEO OBJEKTI -->
  
<div id='cc21' style="display:none;">
<b>Nimi:</b>Peuranmaa<br>
<b><b>Paikan kuvaus:</b></b> Laaja metsäalue, jonka H Peura Oy on ostanut Vanhanpaikan talosta 1920-luvun alkupuolella.<br>
<b><b>Perimätietoa:</b></b> Alue on laaja ulottuen lännessä Kallioselän rantaan ja idässä lähelle Hirvijärveä. Alueen pohjoispuolella on Säätiönmetsä.
</div>

<div id='cc22' style="display:none;">
<b>Nimi:</b>  Hiekkapelto<br>
<b><b>Paikan kuvaus:</b></b> Kuiva ja hiekkainen pelto Pohjoispellon pohjoispuolella. <br>
<b>Perimätietoa:</b> Pellolla on Koivujärven kansakoulu. Oskari Huttunen on käynyt joka kevät koululla jakamassa lapsille karamellejä. 
</div>

<div id='cc23' style="display:none;">
<b>Nimi:</b>  Uudistalo<br>
<b>Rinnakkaisnimi: </b>  Uusitalo<br>
<b>Paikan kuvaus:</b> Talo, joka on vanhoja kantataloja. Talon virallinen nimi on Uusitalo, joka ei ole kansanomaisessa käytössä.<br>
<b>Perimätietoa:</b> Talo on kertoman mukaan perustettu 1700-luvulla. Nykyinen asuinrakennus on yli 100 vuotta vanha (vuosi 1966). Kauppaneuvos Oskari Huttunen on ostanut tilan vuonna 1924. Talon metsät kuuluvat vieläkin hänen perustamalleen säätiölle, mutta pellot ja vähäisen osan metsää omistaa Karjalasta siirtolaisena muuttanut Aleksi Rinnevuori. 
<br><br>
<b>Nimi:</b>  Myllypelto<br>
<b>Paikan kuvaus:</b> Pelto Uudistalon asuinrakennuksen itäpuolella. Myllypelto on myös pellolla olevan mökin nimi.<br>
<b>Perimätietoa:</b> Pellolla on ollut tuulimylly. Mökki on ollut olemassa vuodesta 1945 lähtien ja sen omistaa Vilho Huuskosen perikunta. 
<br><br>
<b>Nimi:</b>  Tervapelto<br>
<b>Paikan kuvaus:</b> Pieni pelto Kellarikankaan itäpuolella.<br>
<b>Perimätietoa:</b> ”Siin ol ennen tervahaatoja, mutta nyt om pelto” (Seeda Mähönen s.1904, 1966). 
<br><br>
<b>Nimi:</b>  Pohjoispelto<br>
<b>Paikan kuvaus:</b> Pelto Uudistalon asuinrakennuksen pohjoispuolella. 
<br><br>
<b>Nimi:</b>  Kellarikangas<br>
<b>Paikan kuvaus:</b> Vähäinen metsäselänne Uudistalon talosta koilliseen päin.<br>
<b>Perimätietoa:</b> Selänteella ovat talon peruna- ja juureskuopat ja kellarit.
<br><br>
<b>Nimi:</b>  Ikävänpelto<br>
<b>Paikan kuvaus:</b> Suurehko pelto Tervapellon itäpuolella. <br>
<b>Perimätietoa:</b> ”Ikävänpelto on kaavempana pihasta [kuin muut pellot] ja se on semmonen kivikkoenej ja ikävä viljellä”  (Eemil Mähönen s.1894, 1966). 
<br><br>
<b>Nimi:</b>  Paskomäki<br>
<b>Paikan kuvaus:</b> Mäki Koivujärven pohjoispäästä vähän itään.<br>
<b>Perimätietoa:</b> Paskamäen sanotaan ”tupakoivan” kuin jokiuomasta nousee höyryä rankkasateen jälkeen. 

</div>

<div id='cc24' style="display:none;">
<b>Nimi:</b>  Koivujärvi<br>
<b>Rinnakkaisnimi: </b>  Lokkola<br>
<b>Paikan kuvaus:</b> Pienen järven ja kylän nimi.<br>
<b><b>Muita paikkaan liittyviä nimiä:</b></b> Läheisessä Kallioselässä on pitkä ja kapea Koivulahti. Lahden suuhun pistää vähäinen Koivulahdenniemi.<br>
<b>Perimätietoa:</b> Kylä sijaitsee Soinlahdenkylän pohjoispuolella. Kylän vanha pilkkanimi on Lokkola. Koivulahden ja Koivujärven kylien yhteinen pilkkanimi on Kenola.
<br><br>

<b>Nimi:</b>  Katiskaranta<br>
<b>Paikan kuvaus:</b> Koivujärven kaakkoispään ranta<br>
<b>Muita paikkaan liittyviä nimiä:</b> Rannasta luoteeseen on vähäinen niemi nimeltään Katiskaniemi. Rannasta vähän matkaa lounaaseen on vetinen Katiskaviita. Suon kaakkoispuolella on pitkä ja kapea selänne nimeltään Katiskakangas.<br>
<b>Perimätietoa:</b> ” Ennen piettiin Katiskarannassa semmosia listakatiskoeta” (Eemil Mähönen s.1894, 1966).
</p></div>

<div id='cc25' style="display:none;"><p>
<b>Nimi:</b>  Vanhapaikka<br>
<b>Paikan kuvaus:</b> Kantatalo, joka on arvioiden mukaan perustettu 1700-luvulla.<br> 
<b>Perimätietoa:</b> H. Peura Oy on ostanut talon 1920-luvun alkupuoliskolla. Lauri Heikkinen, joka on ollut kotoisin Tervon Talluskylästä, on ostanut talon viljelykset ja vähän metsämaata vuonna 1925. Lauri on ostanut viljelykset H. Peura Oy:ltä, jolle suurin osa talon metsämaasta edelleen kuuluu (vuosi 1966). 
</p></div>

<div id='cc26' style="display:none;"><p>
<b>Nimi:</b>  Säätiönmetsä<br>
<b>Paikan kuvaus:</b> Metsäalue, jonka kauppaneuvos Oskari Huttunen on ostanut Uudistalon maasta vuonna 1924. <br>
<b>Perimätietoa:</b> Kauppaneuvoksen kuoltua alue on kuulunut hänen perustamalleen Osk. Huttusen kulttuurisäätiölle. 
</p></div>


<div id='cc27' style="display:none;"><p>
<b>Nimi:</b>  Kilkalanmäki<br>
<b>Paikan kuvaus:</b> Mäennyppylä Uudisharjun ja Okkolan tilojen välillä pellolla. <br>
<b>Perimätietoa:</b> Alue on laitumena ja käsittää myös pienen kaistaleen metsänreunaa.
</p></div>

<div id='cc28' style="display:none;"><p>
<b>Nimi:</b>  Kaljus<br>
<b>Rinnakkaisnimi: </b>  Tuovila<br>
<b>Paikan kuvaus:</b> Talo, joka on vanhoja kantataloja. Tilan virallinen nimi on Tuovila.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Kaljuksen ja sen lähitalot käsittävä kulmakunta on Kaljuskylä. Maantieltä Kaljukseen vievän polun nimi on Kaljustie. <br>
<b>Perimätietoa:</b> Talo on arvelujen mukaan perustettu 1700-luvun puolessavälissä. Alunperin Kaljus on ollut läheisen Uudisharjun tilan virallinen nimi, mutta kansanomaisessa käytössä siirtynyt tarkoittamaan yksinomaan Tuovilaa.
<br><br>
<b>Nimi:</b>  Tuovila<br>
<b>Rinnakkaisnimi: </b>  Kaljus<br>
<b>Paikan kuvaus:</b> Kaljuksen talon virallinen nimi, jota ei käytetä kansanomaisesti. 
<br><br>
<b>Nimi:</b>  Uudisharju<br>
<b>Paikan kuvaus:</b> Talo, joka on vanhoja kantataloja.<br>
<b>Perimätietoa:</b> Talo on kertoman mukaan perustettu 1800-luvun alussa. Talon virallinen nimi on Kaljus, joka on kansanomaisessa käytössä siirtynyt tarkoittamaan läheistä taloa, jonka virallinen nimi on Tuovila. 
</p></div>

<div id='cc29' style="display:none;"><p>
<b>Nimi:</b>  Ristola<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on ollut alunperin Kaljuksen talon torppa. Ristolaksi kutsutaan myös niittyaluetta tilan itäpuolella.  <br>
<b>Perimätietoa:</b> Tila on perustettu 1800-luvun lopulla. Niittyalue on jaettu Ristolan ja Uittimen tilojen kesken. Alue on kolmiosainen, pienet metsäkappaleet erottavat osat toisistaan. Uittimien tila omistaa kaksi osaa; Isoristolan ja Pienristolan.
<br><br>
<b>Nimi:</b>  Iso-Ristola<br>
<b>Paikan kuvaus:</b> Ristolan niittyalueen Uittimen-tilaan kuuluva suurempi osa. <br>
<b>Perimätietoa:</b> Niitty on alueen luoteispäässä.
<br><br>
<b>Nimi:</b>  Pieni-Ristola<br>
<b>Paikan kuvaus:</b> Ristolan niittyalueen Uittimen tilaan kuuluva pienempi osa. <br>
<b>Perimätietoa:</b> Niitty on Ison-Ristolan kaakkoispuolella.
</p></div>

<div id='cc30' style="display:none;"><p>
<b>Nimi:</b>  Hamustenlähde<br>
<b>Paikan kuvaus:</b> Suuri lähde Okkolan tilan eteläpuolella. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lähteen lähettyvillä on niittyalue nimeltään Hamustenniityt.<br> 
<b>Perimätietoa:</b> ”Siinä [lähteessä] jiähyttää kolome talloo [Kaljus, Uudisharju ja Okkola] maetoja” (Matti Karttunen, s. 1905, 1966). Lähteestä tulee vesi Okkolaan.
</p></div>

<div id='cc31' style="display:none;"><p>
<b>Nimi:</b>  Puronsuuluoto<br>
<b>Paikan kuvaus:</b> Luoto Koiraharjunluodosta vähän matkaa luoteeseen. <br>
<b>Perimätietoa:</b> Vehkalammista laskee luonnonoja Kallioselkään lähelle luotoa. Luoto on siis luonnonojan suun luona. 
</p></div>

<div id='cc31' style="display:none;"><p>
<b>Nimi:</b>  Juhunkallio<br>
<b>Paikan kuvaus:</b> Vähäinen kallio metsässä Okkolan tilasta vähän lounaaseen.
</p></div>

<div id='cc32' style="display:none;"><p>
<b>Nimi:</b>  Ukonkallio<br>
<b>Paikan kuvaus:</b> Pieni kallio Turulan ja Anttilan välillä. 
</p></div>
<div id='cc33' style="display:none;"><p>
<b>Nimi: </b>Ukonkallio<br>
<b>Paikan kuvaus: </b>Pieni kallio Turulan ja Anttilan välillä. 
</p></div>
<div id='cc34' style="display:none;"><p>
<b>Nimi:</b>  Konihauta<br>
<b>Paikan kuvaus:</b> Pieni painanne Soidinkankaan itäosassa.<br>
<b>Perimätietoa:</b> Painanteeseen kerrotaan haudatun kuolleita hevosia.
</p></div>

<div id='cc35' style="display:none;"><p>
<b>Nimi:</b>  Vehkalampi<br>
<b>Paikan kuvaus:</b> Pieni lampi, josta hieman kaakkoon on Vehkamäen tila. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lammesta Kallioselkään laskee luonnonoja nimeltään Vehkapuro. Lammesta vähän etelään on Vehkasuo. Suon koillispuolella on korkeahko harjanne nimeltään Vehkakangas. Kallioselässä on Vehkasaari.
</p></div>

<div id='cc36' style="display:none;"><p>
<b>Nimi:</b>  Okkola<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Vanhanpaikan talon torppa.<br> 
<b>Muita paikkaan liittyviä nimiä:</b> Tilan kohdalla on Kallioselässä Okkolankaarre-niminen lahti. <br>
<b>Perimätietoa:</b> Tila on kertoman mukaan perustettu 1800-luvun lopulla. Perustaja ja ensimmäinen omistaja on ollut Kustaa Okkonen, jonka mukaan tila on saanut nimensä. Okkolan Hilja teki Kekkolan lavalle munkit ja piti puffettia, limsat tuli Siposelta. August Jäntti eli Okkolan August soitti viulua, Hilja-vaimo oli omaa sukuaan Gråsten ja ammatiltaan karjakko.
</p></div>

<div id='cc37' style="display:none;"><p>
<b>Nimi:</b>  Anttila<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on aluperin ollut Uudistalon torppa.<br>
<b>Perimätietoa:</b> Torppa on perustettu 1800-luvun puolivälissä. Perustaja ja ensimmäinen omistaja on ollut Antti Jäntti, jonka etunimen mukaan tilan kerrotaan saaneen nimensä. Tilalla on ollut Siposen limonaditehdas Jänttien jälkeen. 
</p></div>

<div id='cc38' style="display:none;"><p>
<b>Nimi:</b>  Soidinkangas<br>
<b>Paikan kuvaus:</b> Korkea ja kallioinen harjanne Sikaslammista vähän länteen.<br>
<b>Perimätietoa:</b> ”Sinne tulloo paljom mehtoja soejiaekana” (Eemil Mähönen, s.1894, 1966).
</p></div>

<div id='cc39' style="display:none;"><p>
<b>Nimi:</b>  Raatolähde<br>
<b>Rinnakkaisnimi: </b>  Kylmämäenlähde<br>
<b>Paikan kuvaus:</b> Suuri lähde Jukulan ja Nahkanurmen tilojen välillä.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Lähteen ympärillä on vetinen suo nimeltään Raatolähteenviita. <br>
<b>Perimätietoa:</b> Lähteeseen kerrotaan kauan sitten pudonneen hevosen ja kuolleen. Lähde on kunnostettu Kylmämäenlähteenä. 
</p></div>

<div id='cc40' style="display:none;"><p>
<b>Nimi:</b>  Markkala<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Uudistalon torppa.<br>
<b>Perimätietoa:</b> Torppa on kertoman mukaan perustettu 1800-luvun alussa. Tilan omistajat ovat August Markkasen perillisiä, jotka kuuluvat vanhaan koivujärveläiseen sukuun. 
</p></div>

<div id='cc41' style="display:none;"><p>
<b>Nimi:</b>  Pienimäki <br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Uudistalon torppa<br> 
<b>Perimätietoa:</b> Torppa on suunnilleen 90 vuotta vanha (vuonna 1966). Tilan asuinrakennus on pienellä mäennyppylällä. 
<br><br>
<b>Nimi:</b>  Metsäniitty<br>
<b>Paikan kuvaus:</b> Suurehko niittyalue Julkulan ja Pienenmäen tilojen lähellä.<br>
<b>Perimätietoa:</b> Niityn eteläosa on metsittynyt. Metsittynyt osa on nimeltään Metsänoro. Noro tarkoittaa vetistä suota.
</p></div>

<div id='cc42' style="display:none;"><p>
<b>Nimi:</b>  Suontaus<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on ollut alunperin Uudistalon torppa.<br> 
<b>Perimätietoa:</b> Torppa on noin 80-90 vuotta vanha (vuonna 1966). Tilan lähellä on laaja metsäsuo. 
</p></div>

<div id='cc43' style="display:none;"><p>
<b>Nimi:</b>  Pesäkivi<br>
<b>Paikan kuvaus:</b> Suuri kivi maantien lähellä. Pesäkivi on myös kiven lähistöllä olevan pikkutilan nimi.<br>
<b>Perimätietoa:</b> Kerrotaan, että kiven alla on Isonvihan aikaan ollut piilopirtti. Pihakivi-niminen tila on rakennettu vuonna 1945. Tila on lohkaistu siirtolaisille Oskari Huttusen maasta. 
<br><br>
<b>Nimi:</b>  Nahkanurmi<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Uudistalon torppa.<br> 
<b>Perimätietoa:</b> Tila on perustettu 1800-luvun lopussa. Nurmi tarkoittaa nurmikkoa. 
</p></div>

<div id='cc44' style="display:none;"><p>
<b>Nimi:</b>  Huivimetsä<br>
<b>Paikan kuvaus:</b> Metsäalue Kylmänmäen koillisliepeellä. <br>
<b>Perimätietoa:</b> ”Siitä palo mehtä ja Huttune otti sitte naesia istuttammaan siihen puuntaemia ja anto niillen naesille huivij jokkaeselle palakaks” (Seeda Mähönen, s.1904, 1966). 
</p></div>

<div id='cc45' style="display:none;"><p>
<b>Nimi:</b>  Kylmämäki<br>
<b>Paikan kuvaus:</b> Hyvin korkea mäki aivan kylän pohjoisrajalla. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Mäen itäliepeellä on syvä painanne nimeltään Kylmänloelo, jota ympäröivät korkeat mäet.<br>
<b>Perimätietoa:</b> Loelo tarkoittaa syvää ja jyrkkäseinäistä painannetta, jota ympäröivät korkeat mäet. 
</p></div>

<div id='cc46' style="display:none;"><p>
<b>Nimi:</b>  Kekkola<br>
<b>Paikan kuvaus:</b> Mökki Sikaslammista jonkin matkaa pohjoiseen.<br>
<b>Perimätietoa:</b> Mökki on hävinnyt 1800- ja 1900-lukujen vaihteessa. Mökin paikalla on nyt Kekkolanautio. Mökissä on asunut Eenok Kekkonen. Mökissä kerrotaan asuneen myös ”Silimu” Kekkonen, jonka toinen silmä on ollut sokea. Hän on ollut teurastaja. 
</p></div>

<div id='cc47' style="display:none;"><p>
<b>Nimi:</b>  Hyvärilä<br>
<b>Paikan kuvaus:</b> Mökki Sikaslammin pohjoisrannalla Kekkolan eteläpuolella. <br>
<b>Perimätietoa:</b> Mökki on hävinnyt 1920-luvulla. Nyt paikalla on Hyvärilänautio. Tämä paikka on ollut Eenok Kekkosen isän kotipaikka. Paikalla on vielä mökin rauniot jäljellä. 
</p></div>

<div id='cc48' style="display:none;"><p>
<b>Nimi:</b>  Niskala<br>
<b>Paikan kuvaus:</b> Talo, joka on halkaistu Sikaspään talosta 1880-luvulla.<br> 
<b>Perimätietoa:</b> Talon ensimmäinen omistaja on ollut Eljas Niskanen. 
<br><br>
<b>Nimi:</b>  Lahdenpohjaniitty<br>
<b>Paikan kuvaus:</b> Suurehko niittyalue Pirttilahden pohjukan pohjoispuolella. 
</p></div>

<div id='cc49' style="display:none;"><p>
<b>Nimi:</b>  Marinranta<br>
<b>Paikan kuvaus:</b> Kaistale Pirttilahden itärantaa, Niskalan talon kohdalla.<br>
<b>Perimätietoa:</b> Rannassa kerrotaan jonkun Mari-nimisen naisen säilyttäneen venettään. 
</p></div>

<div id='cc50' style="display:none;"><p>
<b>Nimi:</b>  Purola<br>
<b>Paikan kuvaus:</b> Pikkutila, joka on lohkaistu Pirttilahden talosta.<br>
<b>Perimätietoa:</b> Tila on perustettu vuonna 1928. Tila sijaitsee Pirttilammista laskevan Pirttipuron lähettyvillä. 
</p></div>

<div id='cc51' style="display:none;"><p>
<b>Nimi:</b>  Jurvonsaari<br>
<b>Paikan kuvaus:</b> Vähäinen saari Pirttilahden luoteispohjukassa. Saarella on myös samanniminen mökki.<br>
<b>Perimätietoa:</b> Mökki on rakennettu 1900-luvun alussa. Ensimmäinen omistaja on ollut Riikka Jurvo. 
</p></div>

<div id='cc52' style="display:none;"><p>
<b>Nimi:</b>  Pirttilahti<br>
<b>Paikan kuvaus:</b> Suurehko lahti Hirvijärven pohjoisosassa. Pirttilahti on myös lahden rannalla olevan kantatalon nimi. <br>
<b>Perimätietoa:</b> Tila on arvioiden mukaan ainakin 150 vuotta vanha (vuosi 1966). 
<br><br>
<b>Nimi:</b>  Pieniniitty<br>
<b>Paikan kuvaus:</b> Pieni niitty Pirttilammin luoteispään lähettyvillä, Kolmioniityn itäpuolella. 
<br><br>
<b>Nimi:</b>  Kolmioniitty<br>
<b>Paikan kuvaus:</b> Niitty Porttilammin luoteispään pohjoispuolella.<br>
<b>Perimätietoa:</b> Niitty on kolmikulmainen. 
</p></div>

<div id='cc53' style="display:none;"><p>
<b>Nimi:</b>  Vasikkaportti<br>
<b>Paikan kuvaus:</b> Vanha portti Sikaslammin pohjoispään itäpuolella.<br>
<b>Perimätietoa:</b> Portti on kuulunut aikaisemmin Vasikkahaan aitaan. Myöhemmin haka on liitetty suurempaan laidunalueseen. 
</p></div>

<div id='cc54' style="display:none;"><p>
<b>Nimi:</b>  Maijansuo<br>
<b>Rinnakkaisnimi: </b>  Maijanviita<br>
<b>Paikan kuvaus:</b> Suo Pirttilammen luoteispään pohjoispuolella. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Suolla on vähäinen lampi, josta on johtanut Pirttilampiin luonnonoja nimeltään Maijanpuro. Puro on kuivunut.<br>
<b>Perimätietoa:</b> Suo on nimetty Korvella asuneen Maija Iskaniuksen mukaan. Korven asumus on hävinnyt. 
</p></div>

<div id='cc55' style="display:none;"><p>
<b>Nimi:</b>  Lamminranta<br>
<b>Paikan kuvaus:</b> Mökki Sikaslammin etelärannassa. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Sikaslammin pohjoispäästä Koivujärveen ulottuva laaja niittyalue on nimeltään Lamminpäänniityt.<br>
<b>Perimätietoa:</b> Mökki on hävinnyt vuonna 1945. Paikalla on nyt Lamminrantaniitty. 
</p></div>

<div id='cc56' style="display:none;"><p>
<b>Nimi:</b>  Sikaslampi<br>
<b>Paikan kuvaus:</b> Pieni lampi.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Lammen itärannalla on Sikaspään talo ja Sikasen tila.<br>
<b>Perimätietoa:</b> ”Se lampi haes ennen pahalle, vuan nytten on kaevettu oja Koevujärveen nii se haju oh haehtunna” (Ida Huuskonen s.1900, 1966).  
</p></div>

<div id='cc57' style="display:none;"><p>
<b>Nimi:</b>  Sikaspää<br>
<b>Paikan kuvaus:</b> Kantatalo Sikaslammin kaakkoispään lähettyvillä. <br>
<b>Perimätietoa:</b> Kertoman mukaan talo on perustettu 1700-luvulla. Maanmittaushallituksen toimittamassa taloudellisessa kartassa talo on virheellisesti nimetty Sikaseksi, joka on Sikaspäästä vähän matkaa luoteeseen sijaitsevan tilan nimi. 
</p></div>

<div id='cc58' style="display:none;"><p>
<b>Nimi:</b>  Sikanen<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on ollut alunperin Vanhanpaikan torppa.<br>
<b>Perimätietoa:</b> Torppa on perustettu 1800-luvun alussa. Tila sijaitsee Sikaslammin rannalla. <br>
</p></div>

<div id='cc59' style="display:none;"><p>
<b>Nimi:</b>  Hämälä<br>
<b>Paikan kuvaus:</b> Tila, joka on lohkaistu Sikasen tilasta. <br>
<b>Perimätietoa:</b> Tila on noin 40 vuotta vanha (vuosi 1966). Tilan omistaja on Juho Hämäläinen.
<br><br>
<b>Nimi:</b>  Lähdeniitty<br>
<b>Paikan kuvaus:</b> Niitty Hämälän tilan pohjoispuolella. <br>
<b>Perimätietoa:</b> Niity vierustalla kallionkielekkeen alla on lähde, josta vesi juoksee alas pienenä purona. Tien alapuolella olevan lähteen nimi on Jussin lähde.
</p></div>

<div id='cc60' style="display:none;"><p>
<b>Nimi:</b>  Korhola<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on ollut alunperin Sikaspään talon torppa.<br>
<b>Perimätietoa:</b> Tila on hävinnyt vuonna 1960. Tilan ensimmäinen omistaja on ollut Pekka Korhonen. Pekka on ollut köllinimeltään ”Pyöveli Pekka”. Tilalla ovat asuneet myös Napsut. 
</p></div>

<div id='cc61' style="display:none;"><p>
<br><b>Nimi:</b>  Juhula<br>
<b>Rinnakkaisnimi: </b>  Männistö<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Sikaspään talon torppa. Tilan virallinen nimi on Männistö, jota ei kansanomaisesti käytetä.<br> 
<b>Perimätietoa:</b> Torppa on perustettu 1800-luvun lopulla. Tilan ensimmäinen omistaja on ollut Juho Turunen. 
<br><br>
<b>Nimi:</b>  Männistö <br>
<b>Rinnakkaisnimi: </b>  Juhula<br>
<b>Paikan kuvaus:</b> Juhulan tilan virallinen nimi. 
<br><br>
<b>Nimi:</b>  Pienilosu<br>
<b>Paikan kuvaus:</b> Vetinen ja upottava suo Isonlosun länsipuolella.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Suon ympärillä on metsämaata, jota kutsutaan Pienenlosunviidaksi. 
</p></div>

<div id='cc62' style="display:none;"><p>
<b>Nimi:</b>  Romunviita<br>
<b>Paikan kuvaus:</b> Suo Pirttilahdesta koilliseen.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Viidassa on suuri Romunlähde. <br>
<b>Perimätietoa:</b> ”Hyvih huono muaperä siinä on [viidassa], kivikkolouhua ja upottavvoo hetettä” (Paavo Tolonen, s. 1902, 1966). 
</p></div>

<div id='cc63' style="display:none;"><p>
<b>Nimi:</b>  Kaaponahot<br>
<b>Paikan kuvaus:</b> Kaksi metsittynyttä ahoa Isonahon ja Pienenahon välissä. <br>
<b>Perimätietoa:</b> Ahot ovat olleet kaskihalmeena. <br>
</p></div>

<div id='cc64' style="display:none;"><p>
<b>Nimi:</b>  Lajunlahti<br>
<b>Paikan kuvaus:</b> Lahti Hirvijärvessä Pajulahden pohjoispuolella. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lahdessa on vähäinen Lajunniemi.
<br><br>
<b>Nimi:</b>  Koskisaaret<br>
<b>Paikan kuvaus:</b> Saarisyhmä Lajunlahden suulla. Ryhmässä on useita pieniä saaria.
</p></div>

<div id='cc65' style="display:none;"><p>
<b>Nimi:</b>  Turula<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Vanhanpaikan talon torppa.<br>
<b>Perimätietoa:</b> Torppa on kertoman mukaan perustettu 1800-luvun alkupuolella. Tila on hävinnyt vuonna 1961. Tilan ensimmäinen omistaja on ollut Juho Turunen ja myöhemmin tilan ovat omistaneet hänen perillisensä. 
<br><br>
<b>Nimi:</b>  Kylmäkaarre<br>
<b>Paikan kuvaus:</b> Pieni lahti Suokkuanlahdessa Päiväniemen länsipuolella. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lahdesta vähän matkaa länteen on niittyalue nimeltään Kylmänkaarteenniityt. 
</p></div>

<div id='cc66' style="display:none;"><p>
<b>Nimi:</b>  Suokkuanlahti<br>
<b>Paikan kuvaus:</b> Pitkä lahti Hirvijärven pohjoispäässä. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lahden ja Hirvijärven selkäosan yhdistää pitkä ja kapea salmi nimeltään Suakkuansalmi, jonka rinnakkaisnimi on Rakkineensalmi. Salmen länsirannalla on suuri Suokkuanniemi. Lahden ympärillä oleva kulmakunta on Suokkuankylä. 
<br><br>
<b>Nimi:</b>  Julkula<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Uudistalon torppa.<br>
<b>Perimätietoa:</b> Tila on perustettu 1800-luvun lopulla. 
<br><br>
<b>Nimi:</b>  Junnula<br>
<b>Paikan kuvaus:</b> Mökki, joka on hävinnyt 1920-luvulla. <br>
<b>Perimätietoa:</b> Mökissä on asunut Jussi Talonen, jota on kutsuttu Junnu Taloseksi. Paikalla on nyt vähäinen Junnulanpelto. 
</p></div>

<div id='cc67' style="display:none;"><p>
<b>Nimi:</b>  Ruostelähde<br>
<b>Paikan kuvaus:</b> Lähde korkealla kummulla Pajulahden niityllä.<br>
<b>Perimätietoa:</b> Maa on hyvin rautaperäistä, joten lähde on ruskea ruosteesta. Lähellä on Malvirutnikanviita.
</p></div>

<div id='cc68' style="display:none;"><p>
<b>Nimi:</b>  Päiväniemi<br>
<b>Paikan kuvaus:</b> Niemi, joka pistää Suokkuan lahteen. Päiväniemi on myös lohkotilan nimi.<br>
<b>Perimätietoa:</b> Tila on ollut alunperin Uudistalon torppa, joka on perustettu 1800-luvun puolivälissä. 
</p></div>

<div id='cc69' style="display:none;"><p>
<b>Nimi:</b>  Kuivaniemi<br>
<b>Rinnakkaisnimi: </b>  Niskala<br>
<b>Paikan kuvaus:</b> Suurehko niemi, joka pistää Hirvijärveen. Kuivaniemi on myös niemessä olevan talon nimi.<br>
<b>Perimätietoa:</b> Niemessä on enimmäkseen kuivaa hiekkakangasta. Tila on halkaistu Sikaspään talosta 1880-luvulla. Tilan rinnakkaisnimi on Niskala. 
</p></div>

<div id='cc70' style="display:none;"><p>
<b>Nimi:</b>  Kivikaarre<br>
<b>Paikan kuvaus:</b> Lahti Hirvijärvessä Kuivaniemen pohjoispuolella. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lahden pohjukasta länteen on Kivikaarteenniitty.
<b>Perimätietoa:</b> ”Se ranta o iha avosilimee kivilouhua” (Martti Tolonen, s.1901, 1966). 
</p></div>

<div id='cc71' style="display:none;"><p>
<b>Nimi:</b>  Pajulahti<br>
<b>Paikan kuvaus:</b> Lahti Hirvijärven pohjoisosassa. Pajulahti tarkoittaa myös lahden rannalla olevaa kahta niittyä.<br>
<b>Perimätietoa:</b> Niityt ovat Uusi Pajulahti ja Vanha Pajulahti. 
<br><br>
<b>Nimi:</b>  Uusi Pajulahti<br>
<b>Paikan kuvaus:</b> Niitty Pajulahden niittyalueen luoteispäässä.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Niityn kaakkoispuolella on Vanha Pajulahti-niminen niitty. 
</p></div>

<div id='cc72' style="display:none;"><p>
<b>Nimi:</b>  Malvirutnikanviita<br>
<b>Paikan kuvaus:</b> Vetinen suo Kivikaarteen länsipuolella.<br>
<b>Perimätietoa:</b> Paikalta on nostettu aikaisemmin rautamalmia. Rutnikka tarkoittaa lavaa, jolle rautamalmi on nostettu.
</p></div>

<div id='cc73' style="display:none;"><p>
<b>Nimi:</b>  Niinsyvä<br>
<b>Paikan kuvaus:</b> Syvänne Hirvijärvessä Kuivanniemen kärjestä jonkin matkaa kaakkoon keskellä selkää.<br>
<b>Perimätietoa:</b> Kun paikan syvyyttä ei ole tiedetty, on alettu sanoa että se on niin syvä. Syvä ulottuu Karttulan pitäjän puolelle. 
</p></div>

<div id='cc74' style="display:none;"><p>
<b>Nimi:</b>  Kenola<br>
<b>Paikan kuvaus:</b> Koivujärven ja Koivulahden kylien yhteinen köllinimi, joka on ollut paljon yleisemmin käytetty kuin kylien viralliset nimet.<br>
<b>Perimätietoa:</b> Äskettäin (vuosi 1966) nimi hyväksyttiin Koivulahdessa olevan postitoimipaikan jakelualueen viralliseksi nimeksi, mutta kansanomainen käyttö on paljon laajempi. 
</p></div>

<div id='cc75' style="display:none;"><p>
<b>Nimi:</b>  Soinlahti <br>
<b>Paikan kuvaus:</b> Kylä, joka rajoittuu idässä Karttulan pitäjään
</p></div>

<div id='cc76' style="display:none;"><p>
<b>Nimi:</b>  Minkkisenkangas<br>
<b>Rinnakkaisnimi: </b>  Kukkosen kangas<br>
<b>Paikan kuvaus:</b> Suuri metsäalue, joka ulottuu idässä Kallioselkään ja lähelle Pirttilampea, koillisessa Kaljuksen taloon, pohjoisessa Korvenniittyihin ja Vehkamäen tilaan ja etelässä Kangaslahden peltoihin ja kapea kaistale aina maantielle saakka. <br>
<b>Perimätietoa:</b> Konneveteläinen Oiva Minkkinen on ostanut alueen Ahvensalmen talosta vuonna 1925.
</p></div>

<div id='cc77' style="display:none;"><p>
<b>Nimi:</b>  Rasiaho <br>
<b>Paikan kuvaus:</b> Metsittynyt aho Mustikka-ahon lähellä, hieman sen pohjoispuolella.<br>
<b>Perimätietoa:</b> ”Ne hakkas siinä puut rassiiv, vua jättivät ne siihen polttamatta” (Matti Karttunen, s.1905, 1966).  Rasi tarkoittaa kaskimaata, jossa puut on kaadettu, mutta ei vielä karsittu eikä poltettu. Käsite on laajentunut tarkoittamaan yleensä kaadettua, mutta karsimatonta metsää. Sanotaan, että puut on kaadettu rasiin. 
<br><br>
<b>Nimi:</b>  Mustikka-aho<br>
<b>Rinnakkaisnimi: </b>  Selänrantakangas<br>
<b>Paikan kuvaus:</b> Metsittynyt aho Vehkasuon länsipuolella.<br>
<b>Perimätietoa:</b> Aho on ollut kaskimaana. Sen ympäristössä on hyvät mustikkamaat. 
<br><br>
<b>Nimi:</b>  Selänrantakangas<br>
<b>Paikan kuvaus:</b> Kangasselänne Pitkänkaarteen itäpuolella. Selänne ulotuu Kallioselän rannasta Kaljustiehen saakka. 
</p></div>

<div id='cc78' style="display:none;"><p>
<b>Nimi:</b>  Pitkäkaarre<br>
<b>Paikan kuvaus:</b> Loivasti kaartuva lahti Kallioselässä Vehkasaaren ja Limperinniemen välissä. 
</p></div>

<div id='cc79' style="display:none;"><p>
<b>Nimi:</b>  Paloniemi<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Ahvensalmen talon torppa.<br> 
<b>Perimätietoa:</b> Tila on arvioiden mukaan ainakin 100 vuotta vanha (vuosi 1966). Kertoman mukaan tilan alueella on ollut usein tulipaloja. Tilan isäntä on ollut ”Palotuakko”, oikealta nimeltään Taavi Paananen. 
<br><br>
<b>Nimi:</b>  Niemipelto <br>
<b>Paikan kuvaus:</b> Vähäinen pelto Paloniemen tilan asuinrakennuksen eteläpuolella pienessä niemessä.
<br><br>
<b>Nimi:</b>  Pajaniemi<br>
<b>Paikan kuvaus:</b> Kallioselkään pistävä kapea niemi, jossa on ollut paja.:<br>
<b>Perimätietoa:</b> Paja on purettu useita kymmeniä vuosia sitten (vuosi 1966). 
</p></div>

<div id='cc80' style="display:none;"><p>
<b>Nimi:</b>  Limperinlahti<br>
<b>Paikan kuvaus:</b> Lahti Kallioselässä Pajaniemen pohjoispuolella. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lahden pohjoispuolelle pistää vähäinen Limperinniemi. Lahden ja niemen itäpuolella on rantaviivan suunnassa kulkeva metsäharjanne nimeltään Limperinkangas. Liisasaaresta hieman pohjoiseen on Limperinluoto.
</p></div>

<div id='cc81' style="display:none;"><p>
<b>Nimi:</b>  Lähdeviita<br>
<b>Paikan kuvaus:</b> Vetinen suo Rakokivestä vähän itään.<br>
<b>Perimätietoa:</b> ”Se on semmosta vetistä, mitätöntä rommeikkoo. Siinä on suur lähe keskellä” (Taavi Paananen, s.1899, 1966). 
</p></div>

<div id='cc82' style="display:none;"><p>
<b>Nimi:</b>  Liisasaari<br>
<b>Paikan kuvaus:</b> Kaksi saarta Kallioselän kaakoispäässä. Saarten yhteinen nimi on Liisasaari. Liisasaari on myös Ahvensalmen talon torpan nimi.<br>
<b>Perimätietoa:</b> Torppa on hävinnyt 1910-luvulla. Torppa on ollut isommassa saaressa. ”Se on suana nimesäs sem möki emännästä, Liisasta” (Taavi Paananen s.1899, 1966). 
</p></div>

<div id='cc83' style="display:none;"><p>
<b>Nimi:</b>  Kangaslahti<br>
<b>Paikan kuvaus:</b> Lahti Kallioselän kaakkoispäässä Pajaniemen eteläpuolella. Kangaslahti on myös mökki lahdesta jonkin matkaa koilliseen. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lahdessa on hiekkaranta nimeltään Kangaslahdenpohja.<br>
<b>Perimätietoa:</b> Mökki on hävinnyt 1890-luvulla. Nyt paikalla on peltoaukea nimeltään Kangaslahden pellot. Peltojen pohjoispuolella on kuiva Kangaslahdentauskangas.
</p></div>

<div id='cc84' style="display:none;"><p>
<b>Nimi:</b>  Rakokivi<br>
<b>Paikan kuvaus:</b> Ahvensalmen talon torppa.<br>
<b>Perimätietoa:</b> Torppa on hävinnyt noin vuonna 1940. ”Siin ol savutupa ja lähellä semmone iso halakinaenen kiv” (Jaakko Tolonen, s.1906, 1966). 
</p></div>

<div id='cc85' style="display:none;"><p>
<b>Nimi:</b>  Vehkamäki<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Ahvensalmen talon torppa. <br>
<b>Perimätietoa:</b> Torppa on rakennettu 1800-luvun puolivälissä. Asumus on korkealla mäellä, joka on Vehkakankaan jatketta. Tilan isäntä on ollut ”Vehkatatu”, oikealta nimeltään Taavetti Kajan
</p></div>

<div id='cc86' style="display:none;"><p>
<b>Nimi:</b>  Pukkiaho<br>
<b>Paikan kuvaus:</b> Metsittynyt aho, joka on ennen ollut Ahvensalmen talon kaskimaana.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Ahon kohdalla Kangaslahden peltojen luona on Pukkiveräjä. 
</p></div>

<div id='cc87' style="display:none;"><p>
<b>Nimi:</b>  Vehkasaari<br>
<b>Paikan kuvaus:</b> Pieni saari Kallioselässä aivan lähellä rantaa. Vehkasaari on myös saaressa olevan mökin nimi.<br>
<b>Perimätietoa:</b> Saaren ja mantereen välinen kapea salmi on usein kesällä kuiva. Mökki on perustettu 1910-luvulla. Mökissä on asunut leskivaimo, jota on kutsuttu ”Suare elina”. Oikealta nimeltään nainen on ollut Elina Jäntti. 
</p></div>

<div id='cc88' style="display:none;"><p>
<b>Nimi:</b>  Koiranharju<br>
<b>Paikan kuvaus:</b> Vähäinen harjanne Kaljuksen talon eteläpuolella. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Harjanne ja sen ympäristö ovat Koiranharjunkangasta. Kankaan länsipuolella on Kallioselkään pistävä Koiranharjunniemi. Niemen eteläpuolella on vähäinen lahdeke nimeltään Koiranharjunkaarre. Koiranharjunniemestä luoteeseen on Koiranharjunluoto. ”Sel luo ympärillä oh hyvät kala-appaat” (Matti Karttunen, s.1905, 1966). 
</p></div>

<div id='cc89' style="display:none;"><p>
<b>Nimi:</b>  Majaharju<br>
<b>Paikan kuvaus:</b> Metsäharjanne Kyntökorvenniitystä vähän kaakkoon. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Harjanteen pohjoispuolella on metsäalue nimeltään Majaharjunkangas.
</p></div>

<div id='cc90' style="display:none;"><p>
<b>Nimi:</b>  Harakkaluoto<br>
<b>Paikan kuvaus:</b> Luoto Ahvenisenjärven kaakkoispäässä lähellä Ahvensalmea.<br>
<b>Perimätietoa:</b> Luodosta on näkyvissä vain yksi suuri kivi, muuten se on veden alla. 
</p></div>

<div id='cc91' style="display:none;"><p>
<b>Nimi:</b>  Kangastie<br>
<b>Paikan kuvaus:</b> Metsätie, joka alkaa maantiestä ja kulkee Uittimen tilan itäpuolitse ja yhtyy vähän ennen Kangaslahdenpeltoja Kaljuksentiehen.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Maantien varrella on aita, jossa metsätien kohdalla on Kangasveräjä.
</p></div>

<div id='cc92' style="display:none;"><p>
<b>Nimi:</b>  Kunnankangas<br>
<b>Paikan kuvaus:</b> Vähäinen metsäpalsta Ahvensalmen rannalla Uittimen tilan länsipuolella.<br>
<b>Perimätietoa:</b> Tervon kunta on ostanut alueen Niemelän tilasta 1920-luvun alkupuolella. 
</p></div>

<div id='cc93' style="display:none;"><p>
<b>Nimi:</b>  Uitin<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on ollut alunperin  Ahvensalmen talon torppa.<br>
<b>Perimätietoa:</b> Tila on ainakin 100 vuotta vanha (vuosi 1966). ”Ennen ku ei ollus siltoo salame [Ahvensalmen] yl, nii pit hevoset uittoos salamen poekki” (Jaakko Tolonen, 1906, 1966). 
<br><br>
<b>Nimi:</b>  Niityntauspelto<br>
<b>Paikan kuvaus:</b> Pelto Uittimen tilan pohjoispuolella. <br>
<b>Perimätietoa:</b> Pellon ja tilan välissä on vähäinen niittyalue. 
<br><br>
<b>Nimi:</b>  Riihentauskangas<br>
<b>Paikan kuvaus:</b> Kangas Uittimen tilan pohjoispuolella.<br>
<b>Perimätietoa:</b> Kankaan laitamella on riihi. ”Siitä [kankaasta] otettiih hiekkoo tuoho Ahvensalamen siltaan kun sitä rakennettii” (Jaakko Tolonen, s.1906, 1966). 
</p></div>

<div id='cc94' style="display:none;"><p>
<b>Nimi:</b>  Kierinsaari<br>
<b>Paikan kuvaus:</b> Saari Kallioselän kaakkoispäässä lähellä Ahvensalmen siltaa. <br>
<b>Perimätietoa:</b> Saari on keskellä salmea, joten se on kierrettävä soudettaessa. 
</p></div>

<div id='cc95' style="display:none;">
<b>Nimi: </b>Ahvensalmi
<br><b>Paikan kuvaus:</b> Kapea salmi, joka erottaa kaksi järveä, Ahvenisen ja Kallioselän, toisistaan. Ahvensalmi on myös salmen itärannalla olevan talon nimi ja kulmakunta, joka käsittää Ahvensalmen talon lähiympäristön ja vähäisen alueen salmen toisella rannalla, Nuutilankylän puolella. 
<br><b>Muita paikkaan liittyviä nimiä:</b> Salmen yli johtava maantiesilta on nimeltään Ahvensalmensilta.
<b>Perimätietoa: </b>Ahvensalmen kulmakunta ei ole selvärajainen.

</div>

<div id='cc96' style="display:none;">
<b>Nimi:</b> Mattila<br>
<b>Rinnakkaisnimi:</b> Ahvensalmi<br>
<b>Paikan kuvaus:</b> Ahvensalmen vanhan kantatalon virallinen nimi. <br>
<b>Perimätietoa: </b>Ahvensalmen talolla on ikää useita satoja vuosia (vuosi 1966). </div>

<div id='cc97' style="display:none;"><p>
<b>Nimi:</b>  Hiilihautamäki<br>
<b>Paikan kuvaus:</b> Mäki Ahvensalmen talosta vähän koilliseen, lähellä maantietä. <br>
<b>Perimätietoa:</b> Mäellä on vanhoja hiilihautoja. ”Siinä poltettiin paljoh hiilijä” (Jaakko Tolonen, s.1906, 1966). 
</p></div>

<div id='cc98' style="display:none;"><p>
<b>Nimi:</b>  Piikakivi<br>
<b>Paikan kuvaus:</b> Suuri kivi Ahvensalmessa Kierinsaaren eteläpuolella. 
</p></div>

<div id='cc99' style="display:none;"><p>
<b>Nimi:</b>  Nurkkala<br>
<b>Paikan kuvaus:</b> Mökki, jonka tontti on lohkaistu Uittimen tilasta.<br>
<b>Perimätietoa:</b> Mökki on rakennettu vuonna 1924. 
</p></div>

<div id='cc100' style="display:none;"><p>
<b>Nimi:</b>  Kauniskangas<br>
<b>Paikan kuvaus:</b> Mökki, jonka tontti on lohkaistu Uittimen tilasta.<br>
<b>Perimätietoa:</b> Mökki on rakennettu vuonna 1930.
</p></div>

<div id='cc101' style="display:none;"><p>
<b>Nimi:</b>  Hännilä<br>
<b>Rinnakkaisnimi: </b>  Kivikko<br>
<b>Paikan kuvaus:</b> Pikkutila, joka on lohkaistu Ahvensalmen talon maasta. Tilan virallinen nimi on Kivikko.  <br>
<b>Perimätietoa:</b> Tila on perustettu vuonna 1925. Tilan omistavat August Hännisen perilliset. 
</p></div>

<div id='cc102' style="display:none;"><p>
<b>Nimi:</b>  Tuhkala<br>
<b>Rinnakkaisnimi: </b>  Niemelä<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Ahvensalmen talon torppa. Talon vanha ja virallinen nimi on Niemelä. <br>
<b>Perimätietoa:</b> Tila on rakennettu 1800-luvun lopulla. Tilan omistavat Viljam Tuhkasen perilliset. 
</p></div>

<div id='cc103' style="display:none;"><p>
<b>Nimi:</b>  Pohjoislahti<br>
<b>Paikan kuvaus:</b> Pitkä ja kapea lahti Ahvenisen järven pohjoispäässä.<br> 
<b>Muita paikkaan liittyviä nimiä:</b> Lahden itäpuolella on metsäalue nimeltään Pohjoiskangas, jota kutsutaan myös Pohjoislahdentauskankaaksi. 
<br><br>
<b>Nimi:</b>  Heinäsalmi<br>
<b>Paikan kuvaus:</b> Kapea salmi Pohjoislahden suulla. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Salmessa on vähäinen Heinäsaari. <br>
<b>Perimätietoa:</b> Saaren ja Salmenniemen välinen kapea salmi on melkein kuivanut. 
</p></div>

<div id='cc104' style="display:none;"><p>
<b>Nimi:</b>  Tervakorpi<br>
<b>Paikan kuvaus:</b> Suo Pohjoislahden suusta vähän itään.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Suon itäpuolella on metsäkangas nimeltään Tervakorvenkangas. Pohjoislahden rannalla on myös Tervakorvenniitty.<br>
<b>Perimätietoa:</b> Korvessa on ollut tervahauta.
</p></div>

<div id='cc105' style="display:none;"><p>
<b>Nimi:</b>  Pirttilampi<br>
<b>Paikan kuvaus:</b> Lampi, jonka rannassa on Pirttilahden talo.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Lammen itäpäässä on Pirttimäki ja Pirttimäen talo. Hirvijärvessä on pitkä lahti nimeltään Pirttilahti. Lammesta laskee Pirttilahteen luonnonoja nimeltään Pirttipuro. <br>
<b>Perimätietoa:</b> Maanmittaushallituksen vuonna 1944 toimittamassa kartassa lammen nimeksi on virheellisesti merkitty Pirttijärvi. 
</p></div>

<div id='cc106' style="display:none;"><p>
<b>Nimi:</b>  Selkäluoto<br>
<b>Paikan kuvaus:</b> Luoto keskellä Pirttilampea.<br>
</p></div>

<div id='cc107' style="display:none;"><p>
<b>Nimi:</b>  Malvipohjukka<br>
<b>Rinnakkaisnimi: </b>  Malavipohjukka<br>
<b>Paikan kuvaus:</b> Viljelyssuo Pirttilammen länsipuolella.<br>
<b>Perimätietoa:</b> ”Siitä nostettiin enner raatamalavia siitä suolta” (Jaakko Tolonen, s.1906, 1966). Malavi tarkoittaa malmia. 
</p></div>

<div id='cc108' style="display:none;"><p>
<b>Nimi:</b>  Hirvijärvi<br>
<b>Paikan kuvaus:</b> Suurehko järvi, jonka keskellä kulkee Tervon ja Karttulan pitäjien raja. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Hirvijärven länsirannalla on Hirviniemen talo. Ahvenisenjärven ja Hirvijärven välillä on Hirvisalmi, jonka lähellä on Hirvisalmen talo. 
</p></div>

<div id='cc109' style="display:none;"><p>
<b>Nimi:</b>  Rajala<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Pirttimäen talon torppa. <br>
<b>Perimätietoa:</b> Tila on perustettu 1800-luvun puolivälissä. 
<br><br>
<b>Nimi:</b>  Pyöreäsuo
<b>Paikan kuvaus:</b> Pieni ja pyöreä suo Pienen Siltosuon lounaispuolella. 
</p></div>

<div id='cc110' style="display:none;"><p>
<b>Nimi:</b>  Iso Siltosuo<br> 
<b>Paikan kuvaus:</b> Viljelyssuo aivan maantien varrella. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Suon eteläpuolella on toinen viljelyssuo, Pieni Siltosuo. <br>
<b>Perimätietoa:</b> Suota voidaan nimittää myös pelkästään Siltosuoksi. 
<br><br>
<b>Nimi:</b>  Pieni Siltosuo<br>
Kuvaus:Viljelyssuo Ison Siltosuon eteläpuolella.<br>
<b>Perimätietoa:</b> Suota voidaan nimittää myös pelkästään Siltosuoksi. 
</p></div>

<div id='cc111' style="display:none;"><p>
<b>Nimi:</b>  Haapanotko<br>
<b>Paikan kuvaus:</b> Notkelma, joka alkaa Utrianlahden rannasta ja jatkuu maantien toiselle puolelle. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Maantien itäpuolella on Haapanotkonniitty. Maantien länsipuolella on Haapanotkonlähde. 
</p></div>

<div id='cc112' style="display:none;"><p>
<b>Nimi:</b>  Haukilahti<br>
<b>Rinnakkaisnimi: </b>  Keuhkola<br>
<b>Paikan kuvaus:</b> Vähäinen lahti Pirttilammen kaakkoispäässä. Haukilahti on myös lohkotila.<br>
<b>Muita paikkaan liittyviä nimiä:</b><br>
<b>Perimätietoa:</b> Kertoman mukaan lahdessa on haukien kutupaikka. Haukilahden tila on ollut alunperin Pirttimäen talon torppa. Tila on ainakin 110 vuotta vanha (vuosi 1966). Tilan vanhempi nimi on ollut Keuhkola.
<br><br>
<b>Nimi:</b>  Keuhkokallio<br>
<b>Paikan kuvaus:</b> Kallio Pirttilammin kaakkoisrannalla. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Rannalla olevan Haukilahden tilan vanhempi nimi on Keuhkola. <br>
<b>Perimätietoa:</b> Kallio muistuttaa muodoltaan keuhkoja. 
<br><br>
<b>Nimi:</b>  Kesäaho<br>
<b>Paikan kuvaus:</b> Metsittynyt aho Pirttilammesta vähän etelään.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Ahon liepeillä on Kesäahonniitty. Niityn kohdalla Pirttilammessa lähellä rantaa on Kesäahonluoto.
<br><br>
<b>Nimi:</b>  Pääkalloniitty<br>
<b>Paikan kuvaus:</b> Pieni ja pyöreä niitty Haapanotkossa, Siltasuon itäpuolella.
</p></div>

<div id='cc113' style="display:none;"><p>
<b>Nimi:</b>  Vesa-aho<br>
<b>Paikan kuvaus:</b> Mökki, jonka tontti on lohkaistu Pirttimäen talon maasta.<br>
<b>Perimätietoa:</b> Mökki on rakennettu vuonna 1929. Mökin ympäristössä on vesakkometsää. <br>
<br><br>
<b>Nimi:</b>  Paskalähde<br>
<b>Paikan kuvaus:</b> Pieni lähde Sikolammen eteläpuolella lähellä maantietä. <br>
<b>Perimätietoa:</b> ”Siellä käv kirkkomiehiä ennej juomassa ja tekivät joskus tarpeesa sel luona” (Ida Huuskonen, s.1900, 1966). 
<br><br>
<b>Nimi:</b>  Tarvaisenniitty<br>
<b>Paikan kuvaus:</b> Niitty Pohjoiskankaan pohjoispuolella maantien varressa. 
</p></div>

<div id='cc114' style="display:none;"><p>
<b>Nimi:</b>  Notkola<br>
<b>Paikan kuvaus:</b> Pikkutila, joka on lohkaistu Pirttimäen talon maasta.<br>
<b>Perimätietoa:</b> Tila on perustettu vuonna 1925. ”Tämä on tässä tämmösessä notkelmassa” (Eenok Hämäläinen, s.1889, 1966). 
<br><br>
<b>Nimi:</b>  Lokonkivi<br>
<b>Paikan kuvaus:</b> Suuri kivi keskellä peltoa Pirttilammen ja Pirttimäen talon välillä.<br> 
<b>Muita paikkaan liittyviä nimiä:</b> Pellon nimi on Lokonpelto. Koivujärven kylästä on aikaisemmin käytetty pilkkanimeä Lokkola. 
</p></div>

<div id='cc115' style="display:none;">
<b>Nimi: </b>Pirttimäki
<br><b>Paikan kuvaus:</b> Jyrkkä ja korkea kallio Pirttilammin itäpuolella. Pirttimäki on myös mäellä olevan talon nimi ja kulmakunta, johon kuuluu Pirttimäen talon ympäristö.
<br><b>Perimätietoa:</b> Pirttimäen talon on vanhoja kantataloja ja kertoman mukaan se on yli 200 vuotta vanha (vuosi 1966). Kulmakunta ei ole selvärajainen. 
</div>
<div id='cc115b' style="display:none;">
<b>Nimi:</b> Tienhaara
<b>Paikan kuvaus:</b> Pikkutila, joka on lohkaistu Pirttimäen tilasta. <br>
<b>Perimätietoa:</b> Tila on perustettu vuonna 1925. Tila on lähellä maanteiden risteystä. 

</div>
<div id='cc116' style="display:none;"><p>
<b>Nimi:</b>  Utrianlahti<br>
<b>Paikan kuvaus:</b> Suurehko lahti Hirvijärven länsirannalla. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lahden pohjoispäässä on Utrianniemi. Niemen itäpuolella Pirttilahden suulla on Utriansalmi. Utrianniemestä lähtien kauas selälle ulottuu Utrianluoto. 
</p></div>

<div id='cc117' style="display:none;"><p>
<b>Nimi:</b>  Kalliomökki<br>
<b>Rinnakkaisnimi: </b>  Vuorela<br>
<b>Paikan kuvaus:</b> Mökki, jonka tontti on lohkaistu Ahvensalmen maasta. Mökin virallinen nimi on Vuorela. <br>
<b>Perimätietoa:</b> Mökki on rakennettu vuonna 1935. Mökki sijaitsee jyrkän kallion juurella. 
<br><br>
<b>Nimi:</b>  Vuorela<br>
<b>Rinnakkaisnimi: </b>  Kalliomökki<br>
<b>Paikan kuvaus:</b> Kalliomökin virallinen nimi, jota ei käytetä kansanomaisesti.
</p></div>

<div id='cc118' style="display:none;"><p>
<b>Nimi:</b>  Sikolampi<br>
<b>Paikan kuvaus:</b> Umpeutunut lampi Ärsöstä vähän itään päin. Nyt lammen paikalla on upottava suo. <br>
</p></div>

<div id='cc119' style="display:none;"><p>
<b>Nimi:</b>  Ärsö<br>
<b>Paikan kuvaus:</b> Mökki, joka on hävinnyt 1930-luvulla.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Mökin pellot ovat nimeltään Ärsönpellot. Pellolla on suuri Ärsönkivi. Lähellä on vähäinen Ärsönlampi, joka on kuivunut. Hirvijärvessä lähellä rantaa Ärsönpeltojen kohdalla on vähäinen Ärsönsaari. <br>
<b>Perimätietoa:</b> Mökissä asunut Liisa Vetelin on ollut tietäjä. Yleisenä on säilynyt sanonta ”Lippool Liisa vetelin mökillej ja kää ärsössä männessäs” 
</p></div>

<div id='cc120' style="display:none;"><p>
<b>Nimi:</b>  Korpi<br>
<b>Paikan kuvaus:</b> Hävinnyt mökki.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Mökin alueeseen on kuulunut vähäinen Korvenpelto. Pellon itäpuolella on viljelyssuo nimeltään Korvensuo. Suolta vähän etelään on aukoksi hakattu metsäalue niemeltään Korveaakku. <br>
<b>Perimätietoa:</b> Mökki on hävinnyt 1890-luvulla. 
</p></div>

<div id='cc121' style="display:none;"><p>
<b>Nimi:</b>  Uittoharju<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Pellonpään talon torppa. Tila sijaitsee Ahvensalmen rannalla.  <br>
<b>Muita paikkaan liittyviä nimiä:</b> Toisella rannalla, Soinlahden kylän puolella, on tila nimeltä Uitin. <br>
<b>Perimätietoa:</b> Tila on yli 100 vuotta vanha (vuosi 1966). Kun Ahvensalmen yli ei vielä ollut siltaa, oli hevoset uitettava rannalta toiselle. Talo sijaitsee vähäisellä harjanteella. Talon aitassa on vuosiluku 1798. 
<br><br>
<b>Nimi:</b>  Riihenvieruspelto<br>
<b>Paikan kuvaus:</b> Vähäinen pelto talon länsipuolella. <br>
<b>Perimätietoa:</b> Pellon etelälaidassa on talon riihi.
</p></div>

<div id='cc122' style="display:none;"><p>
<b>Nimi:</b>  Peltola<br>
<b>Paikan kuvaus:</b> Mökki, jonka tontti on lohkaistu Uittoharjun talon maasta.<br> 
<b>Perimätietoa:</b> Mökki on rakennettu vuonna 1955. Mökki sijaitsee pellon keskellä, Uittoharjusta vähän pohjoiseen. 
</p></div>

<div id='cc123' style="display:none;"><p>
<b>Nimi:</b>  Matoniemi<br>
<b>Paikan kuvaus:</b> Ahvenisenjärveen pistävä vähäinen niemi Juurikkaniemen eteläpuolella. <br>
<b>Perimätietoa:</b> ”Siin on kiärmeitä hyvin paljo” (Pekka Nuutinen, s.1890, 1966). 
</p></div>

<div id='cc124' style="display:none;"><p>
<b>Nimi:</b>  Juurikanniemi<br>
<b>Paikan kuvaus:</b> Ahvensalmeen pistävä niemi Uittoharjun talosta jonkin matkaa kaakkoon. <br>
<b>Perimätietoa:</b> Niemessä on Juurikanniitty, joka on metsittynyt. 
</p></div>

<div id='cc125' style="display:none;"><p>
<b>Nimi:</b>  Lehtola<br>
<b>Paikan kuvaus:</b> Mökki, joka on rakennettu 1931.<br>
<b>Perimätietoa:</b> Mökin tontti on lohkaistu Uittoharjun maasta. Mökin ympäristössä kasvaa lehtipuita. 
</p></div>

<div id='cc126' style="display:none;"><p>
<b>Nimi:</b>  Poikkioja<br>
<b>Paikan kuvaus:</b> Luonnonoja, joka alkaa Honkalammista ja laskee Ahvenisenjärveen Sivuksenlahteen. 
</p></div>

<div id='cc127' style="display:none;"><p>
<b>Nimi:</b>  Hakkari<br>
<b>Paikan kuvaus:</b> Mökki Hakkarinkankaan eteläpäässä. <br>
<b>Perimätietoa:</b> Mökin tontti on lohkaistu Honkakankaan tilan maasta. Mökki on rakennettu vuonna 1923. 
</p></div>

<div id='cc128' style="display:none;"><p>
<b>Nimi:</b>  Ukonmäki<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Mamahon talon torppa.<br>
<b>Perimätietoa:</b> Kertoman mukaan torppa on yli 200 vuotta vanha (vuosi 1966). Tila sijaitsee korkealla mäellä. ”Vanahat huasto enne että siin oes palavettu ukko ylijumalata siinä mäen piällä, vual liekkö tuo totta” (Ida Koskinen, s.1892, 1966). 
</p></div>

<div id='cc129' style="display:none;"><p>
<b>Nimi:</b>  Männistö<br>
<b>Paikan kuvaus:</b> Mökki, jonka tontti on lohkaistu Uittoharjun maasta noin vuonna 1920.<br>
<b>Perimätietoa:</b> Mökin ympärillä on männikkömetsää. 
</p></div>

<div id='cc130' style="display:none;"><p>
<b>Nimi:</b>  Hakkarinniemi<br>
<b>Paikan kuvaus:</b> Vähäinen niemi Kallioselän kaakkoispäässä, Ahvensalmensillasta vähän luoteeseen. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Niemen länsipuolella on pitkänomainen kangasselänne nimeltään Hakkarinkangas. Maantien eteläpuolella on Hakkari-niminen mökki.
</p></div>

<div id='cc131' style="display:none;"><p>
<b>Nimi:</b>  Teutorinaho<br>
<b>Paikan kuvaus:</b> Metsittynyt aho.<br>
<b>Perimätietoa:</b> Aho on ollut Teutor Talosen kaskihalmeena joskus 1900-luvun alussa. 
</p></div>

<div id='cc132' style="display:none;"><p>
<b>Nimi:</b>  Paalimäki<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Poikalan talon torppa.<br>
<b>Perimätietoa:</b> Torppa on kertoman mukaan perustettu 1800-luvun puolivälissä. Tila sijaitsee vähäisellä mäennyppylällä.
</p></div>

<div id='cc133' style="display:none;"><p>
<b>Nimi:</b>  Hautuumaa<br>
<b>Paikan kuvaus:</b> Pieni kumpare Nikinkankaan eteläosassa. <br>
<b>Perimätietoa:</b> ”Siihe oh haavattu neljä vaenajata. Ne on kuulemma olleet tervankeittäjiä ja ne on kuollu siinä, vua en tiijä liekkö niillet tullu joku onnettommuus vae mikä. Ne on kuulemma kaekki olleet raatalampilaesija” (Niilo Markkanen, s.1928, 1968). 
</p></div>

<div id='cc134' style="display:none;"><p>
<b>Nimi:</b>  Päiväranta<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollu Ahvenisenpään talon torppa. <br>
<b>Perimätietoa:</b> Torpan iäksi on arveltu 100-150 vuotta (vuosi 1968). Tila sijaitsee Suokkuanlahden rannalla aurinkoisella rinteellä. Lahden vastakkaisella rannalla, Koivujärven kylän puolella, on Päiväniemi-niminen lohkotila. Maanmittaushallituksen taloudellisessa kartassa vuodelta 1944 on tila merkitty väärään paikkaan. Todellisuudessa tila sijaitsee noin kilometri kaakkoon siitä paikasta, johon se on merkitty, jossa ei ole minkäänlaista taloa tai tilaa. 
</p></div>

<div id='cc135' style="display:none;"><p>
<b>Nimi:</b>  Käärmeaho<br>
<b>Paikan kuvaus:</b> Hävinnyt mökki Ahvenisenpään talon maalla. <br>
<b>Perimätietoa:</b> Mökki on ollut itsenäistymätön ja hävinnyt 1800-luvun loppupuolella. Mökki on sijainnut Päivärannan tilasta hieman pohjoiseen korkealla mäellä. ”Siinä on kiärmeitä sillä seovulla paljon, ku se on semmosella paekalla, että siihem piäsöö aarinko niih hyvästi paestamaan” (Niilo Markkanen, s.1928, 1968). 
</p></div>

<div id='dd1' style="display:none;"><p>
<b>Nimi:</b>  Rakkineensalmi<br>
<b>Rinnakkaisnimi: </b>  Suokkuansalmi. <br>
<b>Paikan kuvaus:</b> Pitkä, kapea ja mutkikas salmi Suokkuanlahden ja Hirvijärven selkäosan välillä. Salmen rinnakkaisnimi on Suokkuansalmi.
</p></div>


<div id='dd2' style="display:none;"><p>
<b>Nimi:</b>  Vanha Talluskanava<br>
<b>Paikan kuvaus:</b> Tallusjärvestä Hirvijärveen johtava kanava, joka on alun perin ollut luonnonpuro.<br>
<b>Perimätietoa:</b> Kanavan varrella on merkkejä hyvin vanhasta asutuksesta. Nykyisin Vanhaa Talluskanavaa ei enää paljoa käytetä.
</p></div>

<div id='dd3' style="display:none;"><p>
<b>Nimi:</b>  Talluskanava<br>
<b>Rinnakkaisnimi: </b>  Uusi Talluskanava<br>
<b>Paikan kuvaus:</b> Uusi Talluskanava on perustettu 1920-luvun alkupuolella. Sitä ennen oli käytössä yksinomaan Vanha Talluskanava. Uudesta Talluskanavasta voidaan käyttää pelkkää Talluskanava-nimeä.<br>
<b>Perimätietoa:</b> Uusi Talluskanava on kaivettu puun uiton tarpeisiin.
</p></div>
 
<div id='dd4' style="display:none;"><p>
<b>Nimi:</b>  Pitkäharju<br>
<b>Paikan kuvaus:</b> Pitkä ja hyvin korkea harjuselänne lähellä Tallusjärven länsirantaa. Pitkäharju on myös harjun eteläpäässä sijaitsevan Siiskolan tilan virallinen nimi, jota käytetään joskus myös kansanomaisesti. 
<br><br>
<b>Nimi:</b>  Siiskola<br>
<b>Rinnakkaisnimi: </b>  Pitkäharju<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Anttilan talon torppa.<br>
<b>Perimätietoa:</b> Tila on kertoman mukaan lähes 150 vuotta vanha
</p></div>

<div id='dd5' style="display:none;"><p>
<b>Nimi:</b>  Kanavanniska<br>
<b>Paikan kuvaus:</b> Tallusjärvessä oleva lahti, josta alkaa Tallusjärven ja Hirvijärven välillä oleva
</p></div>

<div id='dd6' style="display:none;"><p>
<b>Nimi:</b>  Lökänlahti<br>
<b>Paikan kuvaus:</b> Lahti Tallusjärven länsiosassa.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Lahden pohjoispuolelle pistää Lökänniemi. Lahden rannalla on pitkä ja kapea Lökänniitty, jonka pohjoisosassa on Lökänlato tai Lökänniitynlato. <br>
<b>Perimätietoa:</b> ”Siinä ol riitoo kalavessiim piälisijä, kun sel lahen seovut siinä oh hyvijä kalapaekkoja. Se nimi on kaet pilikkanimi, kun se lahti o ollunna semmonej jonniijoutava riitakapula” (Elli Markkanen, s.1899, 1968). 
</p></div>

<div id='dd7' style="display:none;"><p>
<b>Nimi:</b>  Kaijansaari<br>
<b>Paikan kuvaus:</b> Saari Tallusjärvessä keskellä selkää. 
</p></div>

<div id='dd8' style="display:none;"><p>
<b>Nimi:</b>  Niinisaari<br>
<b>Paikan kuvaus:</b> Saari Tallusjärven selkäosassa. <br>
<b>Perimätietoa:</b> ”Siinä kasvaa niinipuita ja niitä ei missääm muuvalla kasva näellä seovulla” (Pentti Karhunen, s.1933, 1968). Niinipuut ovat metsälehmuksia. 
</p></div>

<div id='dd9' style="display:none;"><p>
<b>Nimi:</b>  Koskisaari<br>
<b>Paikan kuvaus:</b> Pieni saari Talluskanavan niskalla koskessa. 
</p></div>

<div id='dd10' style="display:none;"><p>
<b>Nimi:</b>  Iso Tuliniemi<br>
<b>Paikan kuvaus:</b> Tallusjärveen pistävä suuri niemi. Ellei sekaantumisen vaaraa ole, voidaan Isosta Tuliniemestä käyttää nimeä Tuliniemi.  <br>
<b>Muita paikkaan liittyviä nimiä:</b> <b>Muita paikkaan liittyviä nimiä:</b> Niemestä jonkin matkaa etelään on suuri ja pitkä niemi, Iso Tuliniemi, jossa on Tuliniemi-niminen tila. Pienen Tuliniemen edustalla on Tulisaari. Saaren ja niemen välissä on Tulisalmi. Niemien välissä on Tulilahti. 
</p></div>

<div id='dd11' style="display:none;"><p>
<b>Nimi:</b>  Tulisalmi<br>
<b>Paikan kuvaus:</b> Tuliniemen edustalla Tallusjärvessä sijaitseva saari.
</p></div>

<div id='dd12' style="display:none;"><p>
<b>Nimi:</b>  Tuliniemi<br>
<b>Paikan kuvaus:</b> Isossa Tuliniemessä sijaitseva lohkotila, joka on alkujaan olut Vitkon talon torppa. Talon iäksi on arvioitu ainakin 80 vuotta (vuosi 1968).
</p></div>

<div id='dd13' style="display:none;"><p>
<b>Nimi:</b>  Korppisaaret<br>
<b>Paikan kuvaus:</b> Useita lähekkäisiä saaria käsittävä saariryhmä Tallusjärvessä Kurikkasaaren ja Tuliniemen välissä. 
</p></div>

<div id='dd14' style="display:none;"><p>
<b>Nimi:</b>  Vatanen<br>
<b>Paikan kuvaus:</b> Saari Tallusjärvessä Murtoniemen lähettyvillä. <br>
<b>Perimätietoa:</b> Paikkakunnalla on asunut kertoman mukaan mies, joka kalamatkoillaan on oleskellut paljon tässä saaressa.
</p></div>

<div id='dd15' style="display:none;"><p>
<b>Nimi:</b>  Leväsaari<br>
<b>Paikan kuvaus:</b> Pieni saari Tulilahdessa. <br>
<b>Perimätietoa:</b> Saaren ympäristössä Tallusjärvessä kasvaa runsaasti leviä. 
</p></div>


<div id='dd16' style="display:none;"><p>

<b>Nimi:</b>  Tuppilahti<br>
<b>Paikan kuvaus:</b> Kapea lahti, joka pistää Tuliniemen pohjoissyrjään. <br>
<b>Perimätietoa:</b> Niemi on pitkä ja kapea kuin tuppi. 
</p></div>

<div id='dd17' style="display:none;"><p>
<b>Nimi:</b>  Kirveslahti<br>
<b>Paikan kuvaus:</b> Tallusjärven lahti Murtoniemen koillispuolella.<br> 
<b>Perimätietoa:</b> Lahti muistuttaa muodoltaan kirveen hamaraa. 
</p></div>

<div id='dd18' style="display:none;"><p>
<b>Nimi:</b>  Iso Vavesaari <br>
<b>Rinnakkaisnimi: </b>  Vavesaari<br>
<b>Paikan kuvaus:</b> Vavesaarista isompi, josta voidaan käyttää myös pelkkää Vavesaari-nimeä.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Saaren kaakkoispuolella on pienempi Pieni Vavesaari.<br> 
<b>Perimätietoa:</b> Saaressa on pidetty verkkoja vappeilla kuivumassa. Vappeet ovat maahan pystytettyjä riukuja, joiden varassa kuivatetaan verkkoja.
</p></div>

<div id='dd19' style="display:none;"><p>
<b>Nimi:</b>  Pieni Vavesaari<br>
<b>Rinnakkaisnimi: </b>  Vattusaari<br>
<b>Paikan kuvaus:</b> Pienempi kahdesta Tallusksen Vavesaaresta. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lähistöllä on suurempi Iso Vavesaari. 
</p></div>

<div id='dd20' style="display:none;"><p>
<b>Nimi:</b>  Piippulevä<br>
<b>Rinnakkaisnimi: </b>  <b>Paikan kuvaus:</b> Metsäsuo Honkasuosta jonkin matkaa kaakkoon. <br>
<b>Perimätietoa:</b> ”Se oli hyviv vesiperästä ja upottavvoo. Siinä on semmosija suohaatoja paljoj ja niissä kasvaa paljol levvee” (Toivo Karhunen, s.1929, 1968). 
</p></div>

<div id='dd21' style="display:none;"><p>
<b>Nimi:</b>  Kurikkasaari<br>
<b>Paikan kuvaus:</b> Suuri saari Tallusjärvessä lähellä Karttulan pitäjän rajaa. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Saaressa on Kurikka-niminen tila. <br>
<b>Perimätietoa:</b> Saari on saanut nimensä muotonsa perusteella. 

<b>Nimi:</b>  Kurikka<br>
<b>Paikan kuvaus:</b> Kurikkasaren pohjoisosassa sijaitseva lohkotila, joka on alunperin ollut Kallion talon torppa. <br>
<b>Perimätietoa:</b> Tila on noin 70-80 vuotta vanha (vuosi 1968). 

</p></div>

<div id='dd22' style="display:none;"><p>
<b>Nimi:</b>  Selkäsaari<br>
<b>Paikan kuvaus:</b> Saari Tallusjärvessä keskellä selkää
</p></div>

<div id='dd23' style="display:none;"><p>
<b>Nimi:</b>  Murtoniemi<br>
<b>Paikan kuvaus:</b> Tallusjärveen pistävä suuri niemi. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Niemen luoteispäähän pistää Murtolahti. <br>
<b>Perimätietoa:</b> Niemi on epätasaista ja mäkistä maata.
</p></div>

<div id='dd24' style="display:none;"><p>
<b>Nimi:</b>  Koskenvarsiniitty<br>
<b>Paikan kuvaus:</b> Pieni niittyalue Uuden Talluskanavan alajuoksussa olevan vähäisen kosken pohjoisrannalla. 
</p></div>

<div id='kk1' style="display:none;"><p>
<b>Nimi:</b>  Ahvenharju<br>
<b>Rinnakkaisnimi: </b>  Tolkkila<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut läheisen Ahvenisenpään talon torppa. Tilan vanhempi nimi on Tolkkila. <br>
<b>Perimätietoa:</b> Tilan iäksi on arveltu ainakin 100 vuotta (vuosi 1968). Tila sijaitsee vähäisellä harjanteella, josta vähän luoteeseen on Ahvenisenjärven lahti nimeltään Ahvenisenlahti. 
<br><br>
<b>Nimi:</b>  Ruunasuo<br>
<b>Paikan kuvaus:</b> Vetinen ja upottava metsäsuo Rautiaisen niittyalueesta vähän kaakkoon. <br>
<b>Perimätietoa:</b> Kerrotaan, että suohon on kauan siten uponnut ruuna. 
<br><br>
<b>Nimi:</b>  Suuri Soidinsuo<br>
<b>Paikan kuvaus:</b> Suuri metsäsuo.<br>
<b>Perimätietoa:</b> ”Metot ol siinä ennen soetimella, mut nyt minen ou nähnä siinä ennee mehtoja” (Jaakko Koskivuori, s.1903, 1968). 
<br><br>
<b>Nimi:</b>  Pitkäsuo <br>
<b>Paikan kuvaus:</b> Pitkä ja kapea viljelyssuo Ahvenharjun tilan kaakkoispuolella. <br>
<b>Perimätietoa:</b> Suo on nykyisin viljelemätön ja metsittynyt (vuosi 1968). 
</p></div>

<div id='kk2' style="display:none;"><p>
<b>Nimi:</b>  Lehtosaari<br>
<b>Paikan kuvaus:</b> Saari Hirvijärvessä.<br> 
<b>Perimätietoa:</b> Pitäjien raja kulkee saaressa ja osa saaresta kuuluu Karttulaan, osa Tervon pitäjään. Saaressa kasvaa lehtimetsää. 
</p></div>

<div id='kk3' style="display:none;"><p>
<b>Nimi:</b>  Kokkoniemi<br>
<b>Paikan kuvaus:</b> Suurehko niemi, joka pistää Hirvijärveen. Niemessä on kaksi sileää kalliota, joiden yhteinen nimi on Kokkokallio. Kokkoniemi on myös niemessä olevan vanhan kantatalon nimi. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Niemen eteläsyrjään pistää kapea Kokkolahti. Lahden rannalla on viljelyssuo nimeltään Kokkosuo. Lahdesta etelään on suora rantakaistale nimeltään Kokkoranta. Kokkoniemen talosta jonkin matkaa länteen on Kokkokangas-niminen mökki. <br>
<b>Perimätietoa:</b> Näillä kallioilla on aiemmin poltettu juhannuskokkoa ja tanssittu kesäisin. ”Ei se ikkee tarkkaan tiijjä, vuan kyllä se on tämän seovun vanahimmia taloja, usseeta satoja vuosija varmasti” (Jaakko Koskivuori, s.1903, 1968). 
</p></div>

<div id='kk4' style="display:none;"><p>
<b>Nimi:</b>  Kokkoniemi<br>
<b>Paikan kuvaus:</b> Talo
<br><br>
<b>Nimi:</b>  Renkienaitta
<b>Paikan kuvaus:</b> Aitta Kokkoniemen asuinrakennuksen itäpuolella. <br>
<b>Perimätietoa:</b> Talon rengit ovat nukkuneet aitassa kesäisin. 
<br><br>
<b>Nimi:</b>  Piikojenaitta<br>
<b>Paikan kuvaus:</b> Aitta asuinrakennuksen itäpuolella.<br>
<b>Perimätietoa:</b> Talon piiat ovat nukkuneet aitassa kesäisin. Aitan vieressä on Renkienaitta. 
</p></div>

<div id='kk5' style="display:none;"><p>
<b>Nimi:</b>  Isokallio<br>
<b>Paikan kuvaus:</b> Isompi kahdesta kalliosta, joiden yhteinen nimi on Kokkokallio.<br>
<b>Perimätietoa:</b> Kallio on laakea ja sileä. ”Siinä poltettiij juhannuskokkoja ja kesällä aena laavantaeiltana siinä suatettiin tanssijakkii, jos joukkoo tarpeeks kerty” (Jaakko Koskivuori, s.1903, 1968). 
<br><br>
<b>Nimi:</b>  Pienikallio <br>
<b>Paikan kuvaus:</b> Pienempi kahdesta kalliosta, joista toinen on Isokallio.
</p></div>

<div id='kk6' style="display:none;"><p>
<b>Nimi:</b>  Töyrypelto<br>
<b>Paikan kuvaus:</b> Pelto Kokkoniemen talon pohjoispuolella. <br>
<b>Perimätietoa:</b> Pellon keskellä on vähäinen mäennyppylä. 

</p></div>

<div id='kk7' style="display:none;"><p>
<b>Nimi:</b>  Kalliokaarre<br>
<b>Paikan kuvaus:</b> Lahti Lippukallioniemen itäpuolella.<br> 
<b>Perimätietoa:</b> Lahden ranta on kallioista. 
</p></div>

<div id='kk8' style="display:none;"><p>
<b>Nimi:</b>  Kotasaari<br>
<b>Paikan kuvaus:</b> Vähäinen saari Kokkolahdessa. <br>
<b>Perimätietoa:</b> Saaressa on aikaisemmin ollut kota, jossa on säilytetty verkkoja. 
</p></div>

<div id='kk9' style="display:none;"><p>
<b>Nimi:</b>  Kaisaharju<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Salon talon työmiesasunto.<br>
<b>Perimätietoa:</b> Tila on ainakin 100 vuotta vanha (vuosi 1968). Tila sijaitsee matalahkolla harjanteella.
</p></div>

<div id='kk10' style="display:none;"><p>
<b>Nimi:</b>  Suksiharju<br>
<b>Paikan kuvaus:</b> Tila, joka on lohkaistu Salon talon maasta.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Tilan lähistöllä on on Hirvijärveen pistävä Suksiniemi ja Suksisuo-niminen suo ja viljelyssuo. Tilasta vähän etelään on Suksilevä-niminen tila. Tila sijaitsee pienellä harjanteella.<br> 
<b>Perimätietoa:</b> Tila on noin 30 vuotta vanha (vuosi 1968).

<b>Nimi:</b>  Korpiniitty <br>
<b>Paikan kuvaus:</b> Pienehkö, pyöreä niitty metsäsuon keskellä. 
</p></div>

<div id='kk11' style="display:none;"><p>
<b>Nimi:</b>  Suksiniemi<br>
<b>Paikan kuvaus:</b> Pieni niemi Matinhonganlahden eteläpuolella. <br>
<b>Perimätietoa:</b> Lahden rannalla on suo ja viljelyssuo nimeltään Suksisuo. ”Siitä suksniemestä ja siitä suoltakii otettii enne aena sukspuita ja hyvät sukset niistä puista suatiinnii” (Jaakko Koskivuori, s.1903, 1968). 
</p></div>

<div id='kk12' style="display:none;"><p>
<b>Nimi:</b>  Suksilevä<br>
<b>Rinnakkaisnimi: </b>  Kivipelto<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Salon talon torppa. Tilan nykyinen virallinen nimi on Kivipelto.<br> 
<b>Muita paikkaan liittyviä nimiä:</b> Tilan lähistöllä on Hirvijärveen pistävä Suksiniemi ja Suksisuo, sekä Suksiharju-niminen lohkotila.<br>
<b>Perimätietoa:</b> Torppa on kertoman mukaan yli 100 vuotta vanha (vuosi 1968). Hirvijärven ranta on tilan kohdalla hyvin leväkköistä. 

</p></div>

<div id='kk13' style="display:none;"><p>
<b>Nimi:</b>  Porttimäki<br>
<b>Paikan kuvaus:</b> Mökki maantien varressa. <br>
<b>Perimätietoa:</b> Kertoman mukaan mökki on yli 100 vuotta vanha (vuosi 1968). Mökin tontti on lohkaistu Tervarannan maasta. Mökin kohdalla on aikaisemmin ollut portti maantien yli. Portinvartija on asunut mökissä. Portti on purettu joskus 1920-luvulla. 
</p></div>


<div id='kk14' style="display:none;"><p>
<b>Nimi:</b>  Itälahti<br>
<b>Paikan kuvaus:</b> Iso lahti Ahvenisenjärvessä. Itälahdella tarkoitetaan myös kahta niittyä, joista toinen ulottuu lahden rantaan saakka. Sen nimi on Iso Itälahti ja sen itäpuolella on pienempi niitty, Pieni Itälahti. Mikäli puhutaan niityistä yhtenä kokonaisuutena, käytetään nimeä Itälahti. <br>
<b>Perimätietoa:</b> Lahti ulottuu idemmäksi kuin muut tämän järven lahdet. 
<br><br>
<b>Nimi:</b>  Pieni Itälahti<br>
<b>Paikan kuvaus:</b> Pienempi ja itäisempi kahdesta Itälahden rannalla olevasta niitystä.
<br><br>
<b>Nimi:</b>  Iso Itälahti<br>
<b>Paikan kuvaus:</b> Itälahden rannalla olevista kahdesta niitystä suurempi ja läntisempi.
</p></div>

<div id='kk15' style="display:none;"><p>
<b>Nimi:</b>  Matinhonka<br>
<b>Paikan kuvaus:</b> Hirvijärveen pistävässä niemessä on ollut suuri honka, jota on kutsuttu Matinhongaksi. <br> 
<b>Muita paikkaan liittyviä nimiä:</b> Niemi, jossa honka on kasvanut on ollut nimeltään Matinhonganniemi. Niemen eteläpuolella on suurehko Mantinhonganlahti. Niemen pohjoispuolella Kokkorannan jatkeena oleva suora rantakaistale on nimeltään Matinhonganranta. Rannan länsipuolella on Matinhonganniitty. <br>
<b>Perimätietoa:</b> Nimen alkuperää ei enää muisteta. 
</p></div>

<div id='pp1' style="display:none;"><p>
<b>Nimi:</b>  Ahveninen<br>
<b>Rinnakkaisnimi: </b>  Ahvenisen järvi<br>
<b>Paikan kuvaus:</b> Suurehko järvi<br>
<b>Muita paikkaan liittyviä nimiä:</b> Järven luoteispäässä on Ahvensalmi, jonka rannalla on Ahvensalmen talo ja kulmakunta. 
</p></div>

<div id='pp2' style="display:none;"><p>
<b>Nimi:</b>  Kuminlouhu<br>
<b>Paikan kuvaus:</b> Jyrkkä ja kallioinen rantakaistale Salmenniemen kärkiosassa, sen länsirannalla. <br>
<b>Perimätietoa:</b> "Ei siinä paljom mittää kasvas se ku ov vuan semmosta kivilouhua" (Jaakko Tolonen, s.1906, 1966. 
</p></div>

<div id='pp3' style="display:none;"><p>
<b>Nimi:</b>  Mättösenkaarre<br>
<b>Paikan kuvaus:</b> Lahti, joka pistää Salmenniemen länsirantaan. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lahdessa on vähäinen Mättösensaari. 
</p></div>

<div id='pp4' style="display:none;"><p>
<b>Nimi:</b>  Taivallevänkaarre<br>
<b>Paikan kuvaus:</b> Vähäinen lahti Ahvenisenjärven luoteispäässä Mättösenkaarteen eteläpuolella. 
</p></div>

<div id='pp5' style="display:none;"><p>
<b>Nimi:</b>  Salmenniemi<br>
<b>Paikan kuvaus:</b> Pitkä niemi, joka pistää Ahvenisenjärven luoteispäähän.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Niemen kärjen lounaispuolella on Syväsalmi.
</p></div>

<div id='pp6' style="display:none;"><p>
<b>Nimi:</b>  Syväsalmi<br>
<b>Paikan kuvaus:</b> Kapeahko, mutta syvä salmi Ahvenisen järvessä. Salmen kaakkoispuolella leviää järven selkäosa. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Salmessa on pieni Syvänsalmensaari. 
</p></div>

<div id='pp7' style="display:none;"><p>
<b>Nimi:</b>  Jakunsaari<br>
<b>Rinnakkaisnimi: </b>  Jakunluoto<br>
<b>Paikan kuvaus:</b> Hyvin pieni saari Ahvenisen järven selkäosan pohjoispäässä hyvin lähellä rantaa. 
<br><br>
<b>Nimi:</b>  Väliluoto<br>
<b>Paikan kuvaus:</b> Luoto Ahvenisenjärven selkäosassa Selkäluodon ja Jakunluodon välillä. 
</p></div>

<div id='pp8' style="display:none;"><p>
<b>Nimi:</b>  Selkäluoto<br>
<b>Paikan kuvaus:</b> Luoto Ahvenisenjärven selkäosan pohjoispäässä. <br>
<b>Perimätietoa:</b> Luoto on laaja-alainen ja monet luodon kivistä ovat vedenpinnan yläpuolella.
</p></div>

<div id='pp9' style="display:none;"><p>
<b>Nimi:</b>  Hirviniemi<br>
<b>Paikan kuvaus:</b> Talo Hirvijärven länsirannalla. <br>
<b>Perimätietoa:</b> Talo on vanhoja kantataloja ja se on satoja vuosia vanha (vuosi 1966). 
<br><br>
<b>Nimi:</b>  Konipelto <br>
<b>Paikan kuvaus:</b> Hyvin kivikkoinen pelto maantien varrella.<br>
<b>Perimätietoa:</b> ”Siiheh haavattiih hevosia soenise aekaan [Ville Soininen on ollut Hirvinimen talon isäntänä 1900-luvun ensimmäisinä vuosikymmeninä] kun niitä kuol se aekaam monta hevosta” (Kalle Nuutinen, s.1896, 1966). 
<br><br>
<b>Nimi:</b>  Uudispellot<br>
<b>Paikan kuvaus:</b> Pihapellot maantien varrella Hirvisalmen talosta luoteeseen. <br>
<b>Perimätietoa:</b> Pellot on raivattu myöhemmin kuin talon kaakkoispuolella olevat pellot. 

</p></div>

<div id='pp10' style="display:none;"><p>
<b>Nimi:</b>  Seppälä<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Hirviniemen talon torppa.<br>
<b>Perimätietoa:</b> Torppa on rakennettu 1800-luvun lopulla. Torpan ensimmäinen asukas on ollut Juho Nuutinen, joka on ollut seppä. Tilan isäntänä on ollut myöhemmin ”Seppä-Kalle”, oikealta nimeltään Kalle Nuutinen. 
<br><br>
<b>Nimi:</b>  Välikorpi<br>
<b>Paikan kuvaus:</b> Suo Voivakan ja maantien välissä. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Voivakanniityn luoteispuolella on Välikorvenniitty. 
</p></div>

<div id='pp11' style="display:none;"><p>
<b>Nimi:</b>  Nissilä<br>
<b>Rinnakkaisnimi: </b>  Haapalahti<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Hirviniemen talon torppa. Tilan virallinen nimi on Haapalahti.<br>  
<b>Perimätietoa:</b> Tila on perustettu 1800-luvun lopulla. Tilan omistavat Eljas Nissisen perilliset. 
</p></div>

<div id='pp12' style="display:none;"><p>
<b>Nimi:</b>  Käärmekangas<br>
<b>Paikan kuvaus:</b> Metsäharjanne lähellä Ahvenisen järven rantaa.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Lähimpänä rantaa olevan kaistaleen nimi on Käärmeranta. <br>
<b>Perimätietoa:</b> Harjanne on aurinkoinen, joten käärmeet viihtyvät siellä. 
</p></div>

<div id='pp13' style="display:none;"><p>
<b>Nimi:</b>  Haaponiemi<br>
<b>Paikan kuvaus:</b> Ahvenisenjärveen pistävä niemi. Niemi sijaitsee Hirvisalmen talosta hieman lounaaseen.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Niemen kärjen lähellä on Haapoluoto. Niemessä on Haaponiemenpelto. Läheisen Nissisen tilan virallinen nimi on Haapalahti. 
</p></div>

<div id='pp14' style="display:none;"><p>
<b>Nimi:</b>  Voivakka<br>
<b>Paikan kuvaus:</b> Lahti Hirvijärven länsirannalla. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lahden pohjoispuolella on Voivakanniemi. Lahden pohjukasta länteen on pitkulainen ja kapea Voivakanniitty.<br>
<b>Perimätietoa:</b> ”Ennen kuulu joku mies varastanneej jostaet talosta voeta. Sitte se ol laettanna sev voev vakkaaj ja viennä sen sitte voevakallaher rantaaj ja nostanna se issoon närreesee. Joku ol löytännä sitte sev vakan siitä närreestä, ennen ku se kerkäs viijäs sem muuanne” (Matti Huttunen, s.1904, 1966). 
</p></div>

<div id='pp15' style="display:none;"><p>
<b>Nimi:</b>  Mitätönsuo<br>
<b>Paikan kuvaus:</b> Viljelyssuo Hirvisalmen rannalla, vastakkaisella puolella maantietä on Salmipelto. <br>
<b>Perimätietoa:</b> ”Märkee, mitätöntä lotjua se on se suo” (Matti Huttunen, s.1904, 1966). 
</p></div>

<div id='pp16' style="display:none;"><p>
<b>Nimi:</b>  Poikasaari<br>
<b>Paikan kuvaus:</b> Saari Hirvijärvesä lähellä Hirvisalmea. 
</p></div>

<div id='pp17' style="display:none;"><p>
<b>Nimi:</b>  Honkaranta<br>
<b>Paikan kuvaus:</b> Pitkä ja suoraviivainen rantakaistale, joka ulottuu Hirvisalmesta Voivakanlahteen. 
</p></div>

<div id='pp18' style="display:none;"><p>
<b>Nimi:</b>  Salmipelto<br>
<b>Paikan kuvaus:</b> Vähäinen peltotilkku Hirvisalmen rannalla. 
</p></div>

<div id='pp19' style="display:none;"><p>
<b>Nimi: </b>Hirvisalmi
<br><b>Paikan kuvaus:</b> Kapea salmi, jonka kautta Hirvijärvi laskee Ahveniseen. Hirvisalmi on myös talo Ahvenisenjärven rannalla ja nimitys kulmakunnalle, joka käsittää Hirvisalmen lähiympäristöineen. 
<br><b>Perimätietoa:</b> Salmessa kulkee Soinlahden ja Karttulan kylien raja. Hirvisalmen talo on vanhoja kantataloja ja se on useita satoja vuosia vanha (vuosi 1966). Kulmakunta ei ole selvärajainen. Kulmakunta ulottuu Karttulan kylän puolelle.  
</div>
<div id='pp20' style="display:none;"><p>
<b>Nimi:</b>  Virrat<br>
<b>Paikan kuvaus:</b> Mökki Hirvisalmen rannalla.<br>
<b>Perimätietoa:</b> Mökki on rakennettu vuonna 1932. Hirvijärvi laskee salmen kautta Ahveniseen, joten salmessa on voimakas veden virtaus. 
</p></div>

<div id='pp21' style="display:none;"><p>
<b>Nimi:</b>  Katiskakaarre<br>
<b>Paikan kuvaus:</b> Lahti Ahvenisenjärvessä lähellä Hirvisalmea. <br>
<b>Perimätietoa:</b> Lahdessa on aikaisemmin pidetty liistekatiskoja.
</p></div>

<div id='pp22' style="display:none;"><p>
<b>Nimi:</b>  Halkoniemi<br>
<b>Paikan kuvaus:</b> Rasvangin pohjoisosaan pistävä suurehko niemi, jossa on ollut halkopinoja. 
</p></div>

<div id='pp23' style="display:none;"><p>
<b>Nimi:</b>  Kinttuniemi<br>
<b>Rinnakkaisnimi: </b>  Varimo<br>
<b>Paikan kuvaus:</b> Vähäinen niemi Halkoniemen kupeessa. Kinttuniemi on myös niemessä sijatisevan pikkutilan nimi.<br>
<b>Perimätietoa:</b> ”Sinne on niih huono ja kappee tie, ettei sinnep piäsek kun kävelemällä” (Matti Oksman, s.1901, 1966). Tila on lohkaistu Levin tilan maasta vuonna 1928. 
</p></div>

<div id='pp24' style="display:none;"><p>
<b>Nimi:</b>  Jakosaari<br>
<b>Paikan kuvaus:</b> Pieni saari Rasvangissa Poikkisaaresta vähän kaakkoon.<br>
<b>Perimätietoa:</b> ”Kalamiehet oj jakanna kalojaan siinä suaressa” (Matti Oksman, s.1901, 1966). 
</p></div>

<div id='pp25' style="display:none;"><p>
<b>Nimi:</b>  Takala <br>
<b>Paikan kuvaus:</b> Hävinnyt mökki Honkamäen maalla.<br>
<b>Perimätietoa:</b> Mökki on ollut itsenäistymätön ja hävinnyt noin vuonna 1920. Mökki on sijainnut Koivulan takana Lepolaan kulkevalta kylätieltä katsottuna eli Koivulan itäpuolella. 
</p></div>

<div id='pp26' style="display:none;"><p>
<b>Nimi:</b>  Jänttilä <br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Mammahon torppa. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Tilasta vähän koilliseen on Ahvenisenjärvessä kolme saarta; Louhusaari, Heinäsaari ja Kanisaari, joiden yhteinen nimitys on Jänttilänsaaret. <br>
<b>Perimätietoa:</b> Torppa on arvelujen mukaan yli 100 vuotta vanha (vuosi 1966). Tila on ollut aikaisemmin Jänttien suvun hallussa. 
<br><br>
<b>Nimi:</b>  Luvepelto<br>
<b>Paikan kuvaus:</b> Pelto Jänttilän tilan luoteispuolella.<br>
<b>Perimätietoa:</b> Luve tarkoittaa luodetta. 
<br><br>

<b>Nimi:</b>  Mäkipelto<br>
<b>Paikan kuvaus:</b> Vähäinen pelto Jänttilän tilan pohjoispuolella pienellä mäennyppylällä. 
<br><br>
<b>Nimi:</b>  Sikoperänniitty<br>
<b>Paikan kuvaus:</b> Niitty Rasvangin pohjoispuolella.<br>
<b>Perimätietoa:</b> ”Siellä pit ennem mehtsiat pesseesä” (Ida Koskinen, s.1892, 1966). 
<br><br>
<b>Nimi:</b>  Peltoniemi<br>
<b>Paikan kuvaus:</b> Vähäinen niemi Jänttilän tilasta vähän matkaa kaakkoon päin.<br> 
<b>Perimätietoa:</b> Yksi tilan pelloista, Eteläpelto, ulottuu niemeen saakka. 
<br><br>
<b>Nimi:</b>  Losu<br>
<b>Paikan kuvaus:</b> Vetinen ja upottava suo Jänttilän tilasta jonkin matkaa länteen. 
<br><br>
<b>Nimi:</b>  Lontoontori<br>
<b>Paikan kuvaus:</b> Matala ja laakea kivi Jänttilän tilan eteläpuolella pellolla.<br>
<b>Perimätietoa:</b> ”Se ol semmonel lasten leikkipaekka ja se ku on niin tasanej ja iso niin sitä sanottiil lontoontoriks” (Ida Koskinen, s.1892, 1966). 
<br><br>
<b>Nimi:</b>  Sakastikivi<br>
<b>Paikan kuvaus:</b> Pienempi kivi Kirkkokiven vierellä. <br>
<b>Perimätietoa:</b> Lapset ovat leikkineet kivellä ja pitäneet sitä sakaristona ja viereistä Kirkkokiveä kirkkona. 
</p></div>

<div id='pp27' style="display:none;"><p>
<b>Nimi:</b>  Heinäsaari<br>
<b>Paikan kuvaus:</b> Jänttilänsaarista pohjoisin ja suurin.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Saaresta vähän etelään on Louhusaari ja lounaaseen Kanisaari.<br>
<b>Perimätietoa:</b> ”Siinä kasvaa semmosta luonnoheinee” (Ida Koskinen, s.1892, 1966).  
<br><br>
<b>Nimi:</b>  Kanisaari<br>
<b>Paikan kuvaus:</b> Jänttilänsaarista läntisin ja pienin. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Saaren koillispuolella on suurempi Heinäsaari ja kaakkoispuolella kivinen Louhusaari. <br>
<b>Perimätietoa:</b> ”Ennen kum meilläe ol kanija, niin ne piettiin kesät siinä suaressa, vuan nyt ei oum monneev vuotee ollu ennee [kaneja]” (Ida Koskinen, s.1892, 1966). 
<br><br>
<b>Nimi:</b>  Louhusaari<br>
<b>Paikan kuvaus:</b> Jänttilänsaarista eteläisin. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Saaren pohjoispuolella on suurempi Heinäsaari ja luoteispuolella Savikaarteen edustalla Kanisaari. <br>
<b>Perimätietoa:</b> Louhusaari on hyvin kivinen. Louhu tarkoittaa kivistä aluetta. 
</p></div>

<div id='pp28' style="display:none;"><p>
<b>Nimi:</b>  Savikaarre<br>
<b>Paikan kuvaus:</b> Vähäinen lahti Jänttilänsaariin kuuluvan Kanisaaren länsipuolella. <br>
<b>Perimätietoa:</b> Lahden ranta on savimaata, jota on otettu tiilien valmistamista varten. 
<br><br>
<b>Nimi:</b>  Tiilihauta<br>
<b>Paikan kuvaus:</b> Suuri hauta Savikaarteen lähistöllä. <br>
<b>Perimätietoa:</b> Haudassa on aikasemmin tehty tiiliä ja läheisestä Savikaarteesta on otettu sitä varten savea.
</p></div>

<div id='pp29' style="display:none;"><p>
<b>Nimi:</b>  Matikkaluoto<br>
<b>Paikan kuvaus:</b> Luoto Ahvenisenjärvessä Peltoniemen edustalla. <br>
<b>Perimätietoa:</b> Luodon ympäristössä on mateiden kutupaikkoja. 
</p></div>

<div id='pp30' style="display:none;"><p>
<b>Nimi:</b>  Lakuharju<br>
<b>Paikan kuvaus:</b> Niemi Syväsalmen rannalla. <br>
<b>Perimätietoa:</b> ”Siellä kuuluu olleeh heimosottii aekana immeesijä,  sielt ol löyvetty keramiikkiesineihin kappaleitae. En tiijä liekkö se laku ollunna jonkullaene antaatumisen merkki silloh heimoriitoe aekana” (Ida Koskinen, s.1892, 1966). 
</p></div>

<div id='pp31' style="display:none;"><p>
<b>Nimi:</b>  Tammaharju<br>
<b>Paikan kuvaus:</b> Metsäharjanne Jänttilän tilasta jonkin matkaa luoteeseen, Ukonmäen ja Jänttilän tilojen välissä. <br>
<b>Perimätietoa:</b> ”Siihen kuuluu enneh haavatun kuolleita hevosija” (Ida Koskinen, s.1892, 1966). 
</p></div>

<div id='pp32' style="display:none;"><p>
<b>Nimi:</b>  Vanhamäki<br>
<b>Paikan kuvaus:</b> Vähäinen mäenkumpare maantieltä Mamahoon vievän kylätien varrella. <br>
<b>Perimätietoa:</b> Mäellä on ollut aikaisemmin Maijala-niminen vanha kantatalo, joka on hävinnyt noin 200 vuotta sitten (vuosi 1966). 
</p></div>

<div id='pp33' style="display:none;"><p>
<b>Nimi:</b>  Kulmalahti<br>
<b>Rinnakkaisnimi: </b>  Koivula <br>
<b>Paikan kuvaus:</b> Tila, joka on lohkaistu Honkamäen talon maasta. Talon virallinen nimi on Koivula.<br>
<b>Perimätietoa:</b> Tila on lohkaistu siirtolaisille Honkamäestä 1940-luvulla. Tilan omistaa Eino Kulmalahti. 

<br><br>
<b>Nimi:</b>  Koivula <br>
<b>Rinnakkaisnimi: </b>  Kulmalahti<br>
<b>Paikan kuvaus:</b> Kulmalahden tilan virallinen nimi, jota ei kansanomaisesti käytetä.
</p></div>

<div id='pp34' style="display:none;"><p>
<b>Nimi:</b>  Majuri<br>
<b>Paikan kuvaus:</b> Tila, joka on lohkaistu Uittoharjun maasta siirtolaisille 1940-luvulla. <br>
<b>Perimätietoa:</b> Tilan omistaa Vilho Majuri. 
</p></div>

<div id='pp35' style="display:none;"><p>
<b>Nimi:</b>  Mamaho<br>
<b>Rinnakkaisnimi: </b>  Mammaho<br>
<b>Paikan kuvaus:</b> Vanha kantatalo.<br>
<b>Perimätietoa:</b> Talon on kertoman mukaan useita satoja vuosia vanha (vuosi 1966). Tila on käsittänyt aluksi nykyiset Pellonpään ja Mamahon talot yhdessä. Pellonpää on lohkaistu omaksi alueekseen 1840-luvulla. Tilan nimi on ollut alunperin Mammaho, josta nykyinen nimi on muodostunut. 
<br><br>
<b>Nimi:</b>  Kujantauspelto<br>
<b>Paikan kuvaus:</b> Pelto Mamahon talon eteläpuolella.<br>
<b>Perimätietoa:</b> Pellon pohjoispäässä on navettarakennus ja lato, jotka ovat saman katon alla siten, että niiden välille jää käytävä eli kansanomaisesti kuja. 
<br><br>
<b>Nimi:</b>  Rasinniitty<br>
<b>Paikan kuvaus:</b> Luonnonniitty Sivuksenniityn länsipuolella. <br>
<b>Perimätietoa:</b> Alue on hakattu kaskea varten, mutta puut on jätetty polttamatta. Rasi tarkoittaa aluetta, jolta on hakattu puut, mutta kaski on jätetty polttamatta. 
</p></div>

<div id='pp36' style="display:none;"><p>
<b>Nimi:</b>  Kariharju<br>
<b>Paikan kuvaus:</b> Niemi Kumpurannan pohjoispuolella. <br>
<b>Perimätietoa:</b> Alueen maasto on korkeaa ja hyvin kivikkoista. 
</p></div>

<div id='pp37' style="display:none;"><p>
<b>Nimi:</b>  Sivuksenlahti<br>
<b>Paikan kuvaus:</b> Suurehko lahti Kariharjun pohjoispuolella.<br>
<b>Perimätietoa:</b> Lahden länsirannalla on Sivuksenniitty. 
</p></div>

<div id='pp38' style="display:none;"><p>
<b>Nimi:</b>  Lehtoniemi<br>
<b>Paikan kuvaus:</b> Kapea ja pitkulainen niemi Sivuksenlahden pohjoispuolella. <br>
<b>Perimätietoa:</b> Niemessä kasvaa lehtimetsää. 
</p></div>

<div id='pp39' style="display:none;"><p>
<b>Nimi:</b>  Pellonpää<br>
<b>Paikan kuvaus:</b> Kantatalo, joka on perustettu vuonna 1842. <br>
<b>Perimätietoa:</b> Talon perustaja on ollut Lassi Nuutinen. Nykyinen asuinrakennus on rakennettu vuonna 1873. Tila on halkaistu entisen Mamahon kantatalosta ja talo on rakennettu entisten Mamahon peltojen päähän. 
<br><br>
<b>Nimi:</b>  Porttiaitta<br>
<b>Paikan kuvaus:</b> Aitta suuren kaksikerroksisen aittarakennuksen yläkerrassa. <br>
<b>Perimätietoa:</b> Aittarakennuksen ja asuinrakennuksen välissä on tie, jonka yli on portti. Aitta on portin vieressä. 
<br><br>
<b>Nimi:</b>  Emännänaitta<br>
<b>Paikan kuvaus:</b> Aitta Renkiaitan vieressä, aittarakennuksen yläkerrassa. <br>
<b>Perimätietoa:</b> Talon emäntä on nukkunut aitassa kesäisin.
<br><br>
<b>Nimi:</b>  Piika-aitta<br>
<b>Paikan kuvaus:</b> Aitta suuressa kaksikerroksisessa aittarakennuksessa Porttiaitan vieressä. <br>
<b>Perimätietoa:</b> Talon piiat ovat nukkuneet aitassa. 
<br><br>
<b>Nimi:</b>  Rietu-sedän aitta<br>
<b>Paikan kuvaus:</b> Aitta suuren aittarakennuksen yläkerrassa Portinpäällysaitan vieressä
<br><br>
<b>Nimi:</b>  Renkienaitta<br>
<b>Paikan kuvaus:</b> Aitta Rietu-sedän aitan vieressä aittarakennuksen yläkerrassa. <br>
<b>Perimätietoa:</b> Talon rengit ovat nukkuneet aitassa kesäisin. 
<br><br>
<b>Nimi:</b>  Jauhoaitta<br>
<b>Paikan kuvaus:</b> Aitta Kala-aitan vieressä suuren aittarakennuksen alakerrassa. 
<br><br>
<b>Nimi:</b>  Kala-aitta<br>
<b>Paikan kuvaus:</b> Aitta kaksikerroksisen aittarakennuksen alakerrassa Piikainaitan vieressä.<br> 
<b>Perimätietoa:</b> Aitassa on säilytetty kaloja. 
<br><br>
<b>Nimi:</b>  Liha-aitta<br>
<b>Paikan kuvaus:</b> Aitta Jauhoaitan vieressä.<br>
<b>Perimätietoa:</b> Aitassa on säilytetty suolattua lihaa. <br>
<br>
<b>Nimi:</b>  Ohra-aitta<br>
<b>Paikan kuvaus:</b> Kaksikerroksinen aitta Jyväaitan eteläpuolella. <br>
<b>Perimätietoa:</b> Aitassa on säilytetty ohria. 
<br><br>
<b>Nimi:</b>  Jyväaitta<br>
<b>Paikan kuvaus:</b> Suuri kaksikerroksinen aitta Pellonpään talosta etelään. 
<br><br>
<b>Nimi:</b>  Tupakka-aitta<br>
<b>Paikan kuvaus:</b> Aitta Jyväaitan eteläpuolella.<br>
<b>Perimätietoa:</b> Talossa on aikaisemmin kasvatettu tupakkaa ja säilytetty tupakat aitassa. 
<br><br>
<b>Nimi:</b>  Meijerihuone<br>
<b>Paikan kuvaus:</b> Kotimeijeriin kuuluva huone, jossa on säilytetty maitoa.<br>
<b>Perimätietoa:</b> Huone on meijerirakennuksessa lähimpänä taloa. 
<br><br>
<b>Nimi:</b>  Separaattorihuone<br>
<b>Paikan kuvaus:</b> Huone meijerirakennuksessa maitohuoneen vieressä. <br>
<b>Perimätietoa:</b> Maito on separoitu tässä huoneessa. 
<br><br>
<b>Nimi:</b>  Piimäkammari<br>
<b>Paikan kuvaus:</b> Huone meijerirakennuksessa Separaattorihuoneen vieressä.<br>
<b>Perimätietoa:</b> Huoneessa on säilytetty piimää. 
<br><br>
<b>Nimi:</b>  Tökkipelto<br>
<b>Paikan kuvaus:</b> Suurehko pelto Pellonpään talosta luoteeseen. <br>
<b>Perimätietoa:</b> Pellolla on ollut koko kylän ensimmäiset heinäseipäät. Tökki on vanhojen murteen puhujien kielessä tarkoittanut heinäseivästä. 
<br><br>
<b>Nim<br>i:</b>  Saunantauspelto<br>
<b>Paikan kuvaus:</b> Pelto saunan pohjoispuolella. Sauna on Pellonpään talosta vähän luoteeseen. 
<br><br>
<b>Nimi:</b>  Kuivanenä<br>
<b>Paikan kuvaus:</b> Pelto Pellonpään talosta jonkin matkaa luoteeseen. <br>
<b>Perimätietoa:</b> ”Se on korkeella mäennyppylällä ja kuiva se pelto” (Lauri Nuutinen s.1898, 1966).
</p></div>

<div id='pp40' style="display:none;"><p>
<b>Nimi:</b>  Ketunpesähaka<br>
<b>Paikan kuvaus:</b> Karjahaka Pellonpään talosta vähän itään. <br>
<b>Perimätietoa:</b> Haassa on ollut ketunpesä. 
</p></div>

<div id='pp41' style="display:none;"><p>
<b>Nimi:</b>  Ketunsuo<br>
<b>Paikan kuvaus:</b> Suo ja viljelyssuo Pellonpään talosta jonkin matkaa koilliseen. Suo ulottuu Jänttilän tilaan saakka. <br>
<b>Perimätietoa:</b> Suo on kettujen suosima oleskelupaikka. 
</p></div>

<div id='pp42' style="display:none;"><p>
<b>Nimi:</b>  Kortesuo <br>
<b>Paikan kuvaus:</b> Pitkä ja kapea viljelyssuo Pellonpään talosta jonkin matkaa etelään. <br>
<b>Perimätietoa:</b> Nykyisin suo on metsittynyt miltei kokonaan. 
</p></div>

<div id='pp43' style="display:none;"><p>
<b>Nimi:</b>  Kutja<br>
<b>Rinnakkaisnimi: </b>  Kuusela<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on lohkaistu Pellonpään talosta. Tilan virallinen nimi on Kuusela. <br>
<b>Perimätietoa:</b> Tila on lohkaistu siirtolaisväestön uudistilaksi vuonna 1949. Tilan omistaja on Stephan Kutja
<br><br>

<b>Nimi:</b>  Peräpellot<br>
<b>Paikan kuvaus:</b> Pellot Kutjan tilan ympärillä. <br>
<b>Perimätietoa:</b> Pellot ovat olleet ennen Pellonpään talon peltoja. Pellot ovat kauempana talosta kuin muut pellot. 
</p></div>

<div id='pp44' style="display:none;"><p>
<b>Nimi:</b>  Rökinluoto<br>
<b>Paikan kuvaus:</b> Luoto Ahvenisenjärvessä Kariharjun edustalla. <br>
<b>Perimätietoa:</b> Luodolla on näkyvissä runsaasti kiviä. Kertoman mukaan luoto on ollut jonkun Rökki-nimisen miehen apajapaikka. Rökillä oli lehmä; hän ei tehnyt heiniä mutta varasti, siinä sanonta ”Rökin pieles”.
</p></div>

<div id='pp45' style="display:none;"><p>
<b>Nimi:</b>  Tiensuuapaja<br>
<b>Paikan kuvaus:</b> Apajapaikka Rökinluodosta vähän etelään Kumpulahden niitylle johtavan tien kohdalla. 
</p></div>

<div id='pp46' style="display:none;"><p>
<b>Nimi:</b>  Muikkuluoto<br>
<b>Paikan kuvaus:</b> Luoto Sivuksenlahden suulla. <br>
<b>Perimätietoa:</b> Luoto on ollut muikkujen suosima kutupaikka. Nykyisin muikkuja ei ole enää tavattu Ahvenisenjärvessä. Hirvisalmen manna kalasti muikut loppuun (vuosi 1966). 
</p></div>

<div id='pp47' style="display:none;"><p>
<b>Nimi:</b>  Kytöranta<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on ollut alunperin Honkamäen talon torppa. <br>
<b>Perimätietoa:</b> Torppa on kertoman mukaan perustettu 1800-luvun puolivälissä. Tila sijaitsee Rasvangin rannalla. Kytö tarkoittaa poltettua suomaata, joka on jäänyt kytemään. 
</p></div>

<div id='pp48' style="display:none;"><p>
<b>Nimi:</b>  Rasvalampi <br>
<b>Paikan kuvaus:</b> Rasvangin lahti, Lepolan talosta vähän matkaa etelään. <br>
<b>Perimätietoa:</b> Lahden suuhun pistää sekä luoteis- että eteläpuolelta niemet, jotka miltei sulkevat lahden lammiksi. 
</p></div>

<div id='pp49' style="display:none;"><p>
<b>Nimi:</b>  Kumpulahti<br>
<b>Paikan kuvaus:</b> Lahti Jäsperinniemen pohjoispuolella. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lahden koillispuolella on Kumpuniemi. Niemen pohjoispuolella on pitkä, tasainen ja suora Kumpuranta, joka ulottuu Kariharjuun saakka. Lahden pohjukasta luoteeseen on pitkä ja kapea niittyalue nimeltään Kumpulahdenniitty. 
</p></div>

<div id='pp50' style="display:none;"><p>
<b>Nimi:</b>  Harinka<br>
<b>Paikan kuvaus:</b> Kaksi jokea, Yläjoki ja Alajoki, joiden kautta Ahveninen laskee Rasvankiin. Harinka on myös Kuivaniemen kylän puolella sijaitsevan kantatalon nimi. Tila sijaitsee Yläjoen itärannalla.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Jokien välissä on Haringanlampi, joka ulottuu Kuivaniemen kylän puolelle. Lammen luoteispuolella on viljelyssuo nimeltään Haringansuo. Suon luoteispuolella on hyvin suuri metsäsuo nimeltään Haringansydänmaa. 
</p></div>

<div id='pp51' style="display:none;"><p>
<b>Nimi:</b>  Suontaus<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Pellonpään talon torppa.<br> 
<b>Perimätietoa:</b> Tila on yli 100 vuotta vanha (vuosi 1966). Tila sijaitsee Hamingansuon eteläpuolella eli suon takana Pellonpäästä katsottuna. 
</p></div>

<div id='pp52' style="display:none;"><p>
<b>Nimi:</b>  Heikkilä<br>
<b>Paikan kuvaus:</b> Mökki, joka on ollut alunperin Honkamäen talon mäkitupa. <br>
<b>Perimätietoa:</b> Mökki on rakennettu 1800-luvun lopulla. Kertoman mukaan mökin on rakentanut Yrjö Oksman. 
</p></div>

<div id='pp53' style="display:none;"><p>
<b>Nimi:</b>  Jäsperinniemi<br>
<b>Paikan kuvaus:</b> Ahvenisenjärveen pistävä niemi Niskalevänlahden pohjoispuolella. 
</p></div>

<div id='pp54' style="display:none;"><p>
<b>Nimi:</b>  Niskalevä<br>
<b>Paikan kuvaus:</b> Lahti Haringan Yläjoen niskalla. Niskalevä on myös tilan nimi.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Lahden luoteispuolella on suuri Niskalevänniitty.<br>
<b>Perimätietoa:</b> Lahti on hyvin leväinen. Tila on lohkaistu Pellonpään talon alueesta vuonna 1949. Tilalla ovat asuneet Taumalat. 
</p></div>

<div id='pp55' style="display:none;"><p>
<b>Nimi:</b>  Yläjoki<br>
<b>Paikan kuvaus:</b> Joki, jonka kautta Ahveninen laskee Haringanlampiin. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lammin ja Rasvangin välillä virtaa laskujoki nimeltään Alajoki. 
</p></div>

<div id='pp56' style="display:none;"><p>
<b>Nimi:</b>  Selkämänpolku<br>
<b>Paikan kuvaus:</b> Pitkä metsäpolku, joka alkaa Haringasta ja päättyy Hälvänmäen päällä maantiehen. <br>
<b>Perimätietoa:</b> Polku kulkee kangasselänteitä pitkin. 
</p></div>

<div id='pp57' style="display:none;"><p>
<b>Nimi:</b>  Rantiaislahti <br>
<b>Paikan kuvaus:</b> Suuri lahti Ahvenisenjärven eteläpäässä. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lahden itärannalla on Rantijärvenniitty. <br>
<b>Perimätietoa:</b> Nimen alkuperä on epäselvä.
</p></div>

<div id='pp58' style="display:none;"><p>
<b>Nimi:</b>  Saunalahti<br>
<b>Paikan kuvaus:</b> Lahti Hirvisalmessa. <br>
<b>Perimätietoa:</b> Lahden molemmin puolin on niemet, jotka melkein sulkevat lahden lammiksi. Lahden itäpuolella pistää Saunaniemi. Lahden rannalla on ollut pieni kalasauna, jossa kalastajat ovat yöpyneet. Kalasauna on hävinnyt muutamia vuosia sitten (vuosi 1968). Niemi sijaitsee maantien länsipuolella. 
</p></div>

<div id='pp59' style="display:none;"><p>
<b>Nimi:</b>  Virranmökki<br>
<b>Rinnakkaisnimi: </b>  Salmela<br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Karttulan pitäjässä sijaitsevan Arabian talon karjatupa, jossa talon karjanhoitaja on asunut. Tilan virallinen nimi on Salmela, jota ei kansanomaisesti käytetä.  <br>
<b>Perimätietoa:</b> Tila on arveltu ainakin 150 vuotta vanhaksi (vuosi 1968). Tila sijaitsee Hirvisalmen rannalla. Hirvijärvi laskee salmen kautta Ahvenisenjärveen, joten vesi virtaa salmessa voimakkaasti. 
<br><br>

<b>Nimi:</b>  Salmela
<b>Rinnakkaisnimi: </b>  Virranmökki<br>
<b>Paikan kuvaus:</b> Virranmökin virallinen nimi. <br>
<b>Perimätietoa:</b> Tila sijaitsee Hirvisalmen rannalla. 
</p></div>

<div id='pp60' style="display:none;"><p>
<b>Nimi:</b>  Lippukallio<br>
<b>Paikan kuvaus:</b> Sileä kallio Virranmökin tilan koillispuolella Hirvijärveen pistävässä vähäisessä niemessä, jonka nimi on Lippukallionniemi. <br>
<b>Perimätietoa:</b> Aikaisemmin nuoriso on polttanut juhannuskokkoa ja tanssinut niemessä. 
</p></div>

<div id='pp61' style="display:none;"><p>
<b>Nimi:</b>  Valliniemi<br>
<b>Paikan kuvaus:</b> Hirvisalmeen pistävä pitkä ja hyvin kapea niemi Saunalammin etelä- ja länsipuolella. <br>
<b>Perimätietoa:</b> ”Venäläeset tek siinä vallihaatoja [vuonna 1917] kun ne pelekäs saksalaesteh hyökkäästä” (Jaakko Koskivuori, s.1903, 1968). Vallihaudat ulottuvat Ahvenisenjärven rannasta maantien toiselle puolelle Hirvijärven rantaan saakka. Hyökkäyksen on odotettu tapahtuvan pohjoisesta päin maantietä pitkin, sillä ampuma-aukot ovat pohjoiseen päin. 
</p></div>

<div id='pp62' style="display:none;"><p>
<b>Nimi:</b>  Liponniemi<br>
<b>Paikan kuvaus:</b> Ahvenisenjärveen pistävä vähäinen niemi.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Niemen ja Valliniemen väliin pistää Liponlahti. <br>
</p></div>

<div id='pp63' style="display:none;"><p>
<b>Nimi:</b>  Koivusaaret <br>
<b>Paikan kuvaus:</b> Kolme pientä saarta Ahvenisenjärvessä lähellä itäistä rantaa. Saarissa kasvaa koivuja. <br>
</p></div>

<div id='pp64' style="display:none;"><p>
<b>Nimi:</b>  Nyyssösenkangas<br>
<b>Paikan kuvaus:</b> Ahvenisenjärven ja maantien välillä oleva metsäpalsta, joka pohjoisessa ulottuu Hirvisalmeen ja etelässä Tervarannan tilan alueeseen. <br>
<b>Perimätietoa:</b> Metsäpalsta on alunperin kuulunut Karttulan pitäjässä sijaitsevan Arabian talon alueeseen, mutta Eino Nyyssönen on saanut palstan perintöosuutena talosta. 
</p></div>

<div id='pp65' style="display:none;"><p>
<b>Nimi:</b>  Multaluoto<br>
<b>Paikan kuvaus:</b> Vähäinen luoto Ahvenisenlahdessa. <br>
<b>Perimätietoa:</b> Osa luotoa on vedenpinna yläpuolella. Luodolla ei kasva yhtään puuta, vaan se on tasaista maata. Nimen arvellaan johtuvan tästä seikasta. 
</p></div>

<div id='pp66' style="display:none;"><p>
<b>Nimi:</b>  Kuivaniemi<br>
<b>Paikan kuvaus:</b> Hyvin pitkä niemi, joka pistää Ahvenisenjärven eteläpäähän. <br>
<b>Perimätietoa:</b> ”Se on semmosta kuivoo kannasmuata” (Jaakko Koskivuori, s.1903, 1968). 
</p></div>

<div id='pp67' style="display:none;"><p>

<b>Nimi:</b>  Tervaranta <br>
<b>Paikan kuvaus:</b> Lohkotila, joka on alunperin ollut Salon talon torppa. <br>
<b>Perimätietoa:</b> Torppa on arveltu yli 200 vuotta vanhaksi (vuosi 1968). ”Tuossa rannassa on kaks vanahoo tervahaatoo, nii että tervoo siinä om poltettu” (Jaakko Koskivuori, s.1903, 1968). 
<br><br>
<b>Nimi:</b>  Louhutöyry<br>
<b>Paikan kuvaus:</b> Hyvin kivinen mäentöyräs Tervarannan tilan pohjoispuolella. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Töyryn ympärillä on pieni Töyrypelto. 
<br><br>
<b>Nimi:</b>  Suohautakappale<br>
<b>Paikan kuvaus:</b> Pelto Tervarannan tilan itäpuolella. <br>
<b>Perimätietoa:</b> Pellon keskiosa on vesittynyttä suomaata, jonka keskellä on vähäinen suohauta. 
<br><br>
<b>Nimi:</b>  Pellonalusniitty<br>
<b>Paikan kuvaus:</b> Niitty Tervarannan tilasta vähän pohjoiseen. Niityn ja tilan välissä on vähäinen pelto. 
<br><br>
<b>Nimi:</b>  Kuoppatöyry<br>
<b>Paikan kuvaus:</b> Pelto tilan eteläpuolella.<br>
<b>Perimätietoa:</b> Pellon keskellä on pieni mäentöyräs, jossa on kaksi perunakuoppaa. 
</p></div>

<div id='pp68' style="display:none;"><p>
<b>Nimi:</b>  Läijönsaari<br>
<b>Paikan kuvaus:</b> Pitkulainen saari Ahvenisenjärvessä. Saaren rinnakkaisnimi on Äköläisensaari. Läijönsaari on myös saaressa olevan mökin nimi.<br>
<b>Muita paikkaan liittyviä nimiä:</b> Järven ranta kaartuu saaren kohdalla lahdeksi, joten väliin jää salmi, joka muistuttaa lampia. Salmen nimi on Läijönlampi. Lammen itärannalla on kapeahko kangasselänne nimeltään Läijönkangas.<br>
<b>Perimätietoa:</b> Nimen alkuperä on tuntematon. Mökki sijaitsee Kokkoniemen talon maalla. Mökki on ollut itsenäistymätön. Kertoman mukaan saarella on ollut asumus 1800-luvun loppupuolelta lähtien. Mökissä on asunut iso musta mies. 

<b>Nimi:</b>  Äköläisensaari<br>
<b>Rinnakkaisnimi: </b> Läijönsaari<br>
<b>Paikan kuvaus:</b> Läijönsaaren kansanomainen köllinimi,jota käytetään virallisen nimen rinnalla. <br>
<b>Perimätietoa:</b> Nimeä käytetään sekä saaresta että siellä olevasta mökistä puhuttaessa. Mökissä on asunut mies nimeltä Taavetti Pursiainen, jonka köllinimi on ollut äköläinen. Nimi johtuu siitä, että mies on puhuessaan esimerkiksi riitaisesta ihmisestä tai vihaisesta hevosesta sanonut: ”Siinä on sitä äköläestä”. Kun ihminen on vähän hankala, hänestä on sanottu: ”Siinä on sitä äköläistä”. 
</p></div>

<div id='pp69' style="display:none;"><p>
<b>Nimi:</b>  Lähdeniemi<br>
<b>Rinnakkaisnimi: </b>  Koivuniemi <br>
<b>Paikan kuvaus:</b> Ahvenisenjärveen pistävä niemi Tervarannan tilan länsipuolella. Niemen rinnakkaisnimi on Koivuniemi. <br>
<b>Perimätietoa:</b> Niemessä on suurehko lähde. Niemessä kasvaa koivikkometsää. 
</p></div>

<div id='pp70' style="display:none;"><p>
<b>Nimi:</b>  Ahvenisenlahti<br>
<b>Paikan kuvaus:</b> Suurehko lahti Ahvenisenjärven eteläpäässä Kuivanniemen ja Salakkolahden välissä. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Lahdesta vähän etelään on Ahvenisenpää-niminen talo ja kaakkoon tila nimeltä Ahvenharju. 
</p></div>

<div id='pp71' style="display:none;"><p>
<b>Nimi:</b>  Ahvenisenpää<br>
<b>Paikan kuvaus:</b> Kantatalo, joka on kertoman mukaan useita satoja vuosia vanha (vuosi 1968). <br>
<b>Muita paikkaan liittyviä nimiä:</b> Talo sijaitsee Ahvenisenjärven eteläpäässä olevan Ahvenisenlahden rannalla. Talosta vähän itään on Ahvenharju-niminen tila.
<br><br>
<b>Nimi:</b>  Puimala<br>
<b>Paikan kuvaus:</b> Ahvenisenpään asuinrakennuksen länsipuolella oleva rakennus, jossa viljat puidaan puimakoneella. 
</p></div>

<div id='pp72' style="display:none;"><p>
<b>Nimi:</b>  Salakkoniemi<br>
<b>Paikan kuvaus:</b> Ahvenisenjärveen pistävä suuri niemi. Salakkoniemi on myös ollut niemessä sijaitseva Ahvenisenpään työmiesasunto. <br>
<b>Muita paikkaan liittyviä nimiä:</b> Niemen itäpuolelle pistää pieni Salakkolahti, jonka rannalla on Salakkolahdenniitty ja vähäinen Salakkokallio. <br>
<b>Perimätietoa:</b> Niemen kupeella ja lahdessa on kertoman mukaan salakoiden kutupaikkoja. Asunto nimestä on hävinnyt 1940-luvun lopulla. Asunnossa on viimeiseksi asunut Aatto Karvonen. 
</p></div>

<div id='pp73' style="display:none;"><p>
<b>Nimi:</b>  Kokkokangas<br>
<b>Paikan kuvaus:</b> Nimitys mökille ja kankaalle, joka on mökin ja maantien välissä.<br>
<b>Perimätietoa:</b> Kertoman mukaan mökki on rakennettu 1800-luvun loppupuolella. Mökki on hävinnyt 1950-luvun aikana.
</p></div>
</div><!-- DOKUALUE (CONTENT) loppuu -->
 
<!-- FOOTER alkaa -->
<div id="footer"> 
	<? include "footer.htm" ?>
</div><!--FOOTER loppuu --> 

</div> <!-- CONTAINER loppuu -->
</body>
</html>
