<?php 
	include("simple_html_dom.php");

        $curl= curl_init();
        $urlScraping = "";
        
        curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/search?q=precio+garraf%C3%B3n+ciel+20+litros&sa=X&rlz=1C1CHBF_esMX905MX905&biw=1364&bih=697&tbm=shop&ei=xit8Y_LYEprjkPIPm5ODqAM&ved=0ahUKEwjy08qX18D7AhWaMUQIHZvJADUQ4dUDCAg&oq=precio+garraf%C3%B3n+ciel+20+litros&gs_lcp=Cgtwcm9kdWN0cy1jYxAMMgYIABAIEB4yCAgAEAgQHhAYOggIABCABBCwAzoJCAAQCBAeELADOgsIABAIEB4QsAMQGDoICAAQCBAHEB46CggAEAgQHhANEBhKBAhBGAFQ-gpYzhRgjDdoA3AAeACAAdUBiAGDBpIBBTAuNC4xmAEAoAEByAEEwAEB&sclient=products-cc&sourceid=opera&ie=UTF-8&oe=UTF-8');
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