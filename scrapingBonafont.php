<?php 
	include("simple_html_dom.php");
        
        $curl= curl_init();        
        curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/search?q=precio+garraf%C3%B3n+bonafont+20+litros&sa=X&rlz=1C1CHBF_esMX905MX905&biw=1364&bih=697&tbm=shop&ei=DdV7Y-bIBo_jkPIP9aqiqAM&oq=precio+garrafones+bona&gs_lcp=Cgtwcm9kdWN0cy1jYxADGAEyBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yCAgAEBYQHhAYMggIABAWEB4QGDIICAAQFhAeEBgyCggAEBYQHhAKEBgyCAgAEBYQHhAYOgQIABBDOgsIABCABBCxAxCDAToFCAAQgAQ6CggAELEDEIMBEEM6BwgAEIAEEA06BwgAEIAEEBhKBAhBGABQAFjgJGDZNmgAcAB4AIAB1AGIAboZkgEGMC4yMC4ymAEAoAEBwAEB&sclient=products-cc&sourceid=opera&ie=UTF-8&oe=UTF-8');
	    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    $result= curl_exec($curl);
	    curl_close($curl);
        echo $result;

	//  $domResult= new simple_html_dom();
	//  $domResult->load($result);

	//  foreach($domResult->find("a[href^=/url?]") as $link)
	//  	if( (strstr($link, 'Ciel')) || (strstr($link, 'Bonafont')) || (strstr($link, 'Epura')) ){
    //         echo "<h1>" . $link->plaintext . "</h1></br>>";
    //     }


 ?>