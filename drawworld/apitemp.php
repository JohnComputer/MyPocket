<?php
    $url = "http://apis.data.go.kr/1262000/CountrySafetyService/getCountrySafetyList?ServiceKey=c2E7zBhyPEGWTD7crBbUcjppLUnRrIDVvgOd6g%2FGIkeGQmd6%2FNHpD3vMjYowzHknp4Ri3QMhjFtmp8cMthLysw%3D%3D";

    $xml=simplexml_load_file($url) or die("Error: Cannot create object");
    $items = $xml->body->items;
    foreach($items->children() as $item) {
      $title = $item->title;  // Title 이름 가져오기.
      $countryName = $item->countryName;
      $wrtDt = $item->wrtDt;  // 날짜

      $content =  $item->content; // content가져오기.
      $contenttitle = explode('다.',$content); // 글들이 정렬되어 있지않아서. 처음 나오는 '다.' 기준으로 짤라냄.
      $contentTitleExplode = str_replace($title,"",$contenttitle[0]); // 마찬가지로 정렬되어있지않음 o,O 썩여있어서 제목삭제 후 저장

      echo  $title. "<br>";
      echo  $countryName. "<br>";
      echo  $wrtDt. "<br>";
      echo $contentTitleExplode.'다'."<br><br><br>";
    }
    // DB 저장후 이용은 사용자 지정 IP 즉 웹사이트가 있어야 사용 가능하여 임시적으로 사용.!
 ?>
