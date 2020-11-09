<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport"                content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="theme-color"             content="#F5F1F1">
    <meta name="msapplication-TileColor" content="#F5F1F1">
    <meta name="msapplication-config"    content="assets/favicons/browserconfig.xml">
    
    <!-- Preload the fonts -->
    <link rel="preload" href="assets/css/fonts/650d0d58-e300-4679-853a-3e756a508990.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/css/fonts/ffa2a131-998b-4420-8aa9-7526939a00ef.woff2" as="font" type="font/woff2" crossorigin="anonymous">

    <!-- Preload the two initial images -->
    <link rel="preload" href="assets/images/illustration_1.jpg" as="image">
    <link rel="preload" href="assets/images/illustration_2.jpg" as="image">
    
    <!-- Manifest site -->
    <link rel="manifest" href="assets/favicons/site.html">
        
    <!-- Social Images -->
    <meta content="https://claudia.alessandro.wedding/assets/images/social.jpg"  itemprop="image">
    <meta content="https://claudia.alessandro.wedding/assets/images/social.jpg"  name="twitter:image">
    <meta content="https://claudia.alessandro.wedding/assets/images/social.jpg"  property="og:image">

    <!-- Favicons Icons -->  
    <link rel="apple-touch-icon" href="assets/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon"             href="assets/favicons/favicon-32x32.png"    sizes="32x32" type="image/png">
    <link rel="icon"             href="assets/favicons/favicon-16x16.png"    sizes="16x16" type="image/png">
    <link rel="mask-icon"        href="assets/favicons/safari-pinned-tab.svg" color="#23372d">
    <link rel="shortcut icon"    href="assets/favicons/favicon.ico">

    <!-- Page Title -->
    <title>Putri dan Iqbal</title>

    <!-- Styles -->
    <link href="assets/css/main.min.css" rel="stylesheet">

</head>
<body>

    <section class="opening">
        <h1 class="opening-title">
            <span>PUTRI</span>
            <span>·</span>
            <span>IQBAL</span>
    </h1>
    </section>
    
    <div class="text">
         <p class="text-big">Dwi Putriana N. Kinding<br>Iqbaluddin Syam Had<br>~</p>
    </div>

    <figure class="illustration-container">
        <img class="illustration" src="assets/images/illustration_3.jpg">
    </figure>

    <div class="text">
        <p class="optional">
        	<?php
        		$undangans = [
        			'Imanudin Sholeh',
        		];
        		$diundang = $_GET['undangan'];

	        	$diundang !== null && echo '<i>Yth. '.$undangans[$diundang].' di tempat.</i>
	        	<br>
	        	<br>';
        	?>
        	Izinkan kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dan saudara/i dalam acara pernikahan kami pada:
        </p>
        <!-- <p>iban<br> alessandro scarpellini<br> it 34 m 03589 01600 010570709079<br>Bic BKRAITMM</p> -->
    </div>
    
    <!-- <div class="text">
        <p class="optional">per confermare la tua presenza e quella di chi<br> ti accompagnerà, basterà scriverci su whatsapp<br> entro il 20 maggio, così come per indicarci esigenze<br> particolari di menu</p>
    </div> -->

    <figure class="illustration-container">
        <img class="illustration" src="assets/images/illustration_4.jpg">
    </figure>

    <div class="text">
         <p class="text-big">Sabtu,<br><br><span style="font-size: 32pt; font-weight: bold;">12 . 12 . 2020</span></p>
         <br>
         <p class="text-big">Akad<br>09:00 WIB</p>
         <p class="text-big">Resepsi<br>11:00 WIB s/d Selesai</p>
         <p><a href="https://www.lagraziosa.it/" target="_blank">Rumah Putri</a><br>Lingk. Banjarkolot RT 03/16 Desa Banjar<br>Kec. Banjar, Kota Banjar, Jawa Barat</p>
    </div>

    <figure class="illustration-container illustration-container-small">
        <img class="illustration" src="assets/images/illustration_5.jpg">
    </figure>

    <div class="text">
        <p class="optional">Sehubungan dengan pencegahan virus COVID-19<br>Tamu undangan diharapkan mematuhi protokol kesehatan<br>dengan menggunakan masker dan mencuci tangan.</p>
        <!-- <p>iban<br> alessandro scarpellini<br> it 34 m 03589 01600 010570709079<br>Bic BKRAITMM</p> -->
    </div>

   <!--  <div class="text">
        <p>ecco alcuni suggerimenti su dove alloggiare:</p>
        <ul>
            <li><a href="https://www.litoraneohotelrimini.it/" target="_blank">Litoraneo Suite Hotel</a></li>
            <li><a href="https://agriturismodasonia.it/" target="_blank">Agriturismo Da Sonia</a></li>
            <li><a href="https://www.hotelaugustea.it/" target="_blank">Hotel Villa Augustea</a></li>
            <li><a href="http://www.marilenia.it/" target="_blank">Agriturismo Marilenia</a></li>
            <li><a href="https://www.germano-reale.com/" target="_blank">Podere del Germano Reale</a></li>
            <li><a href="https://www.agriturismopecoranera.it/" target="_blank">Agriturismo La Pecora Nera</a></li>
            <li><a href="http://www.augustusrimini.com/" target="_blank">Hotel Augustus</a></li>
            <li><a href="https://www.lagraziosa.it/" target="_blank">Agriturismo La Graziosa</a></li>
        </ul>
    </div> -->

    <figure class="illustration-container illustration-container-small">
        <img class="illustration" src="assets/images/illustration_6.jpg">
    </figure>

    <div class="text">
        <p class="text-big">Terimakasih,<br>dari kami yang berbahagia<br>Putri & Iqbal</p>
    </div>

</body>

</html>
