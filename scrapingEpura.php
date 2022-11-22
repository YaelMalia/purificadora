<?php 
	include("simple_html_dom.php");

        $curl= curl_init();        
        curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/search?q=precio+garraf%C3%B3n+epura+20+litros&sa=X&rlz=1C1CHBF_esMX905MX905&biw=1364&bih=697&tbm=shop&ei=Cyx8Y7yzDN3PkPIPv9ahmAM&ved=0ahUKEwj85Le418D7AhXdJ0QIHT9rCDMQ4dUDCAg&uact=5&oq=precio+garraf%C3%B3n+epura+20+litros&gs_lcp=Cgtwcm9kdWN0cy1jYxADMgcIABCABBAYMgYIABAIEB4yBggAEAgQHjoJCAAQCBAeELADOgsIABAIEB4QsAMQGDoICAAQCBAHEB46CQgAEIAEEA0QGEoECEEYAVC6CFirEmDZFWgCcAB4AIABxAKIAZQMkgEHMC4xLjMuMpgBAKABAcgBAsABAQ&sclient=products-cc&sourceid=opera&ie=UTF-8&oe=UTF-8');
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