<html>
<style type="text/css">
  .white_content {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.8);
      opacity:0;
      -webkit-transition: opacity 400ms ease-in;
      -moz-transition: opacity 400ms ease-in;
      transition: opacity 400ms ease-in;
      pointer-events: none;
  }
  .white_content:target {
      opacity:1;
      pointer-events: auto;
  }
  .white_content > div {
    position: absolute;
    top: 25%;
    left: 25%;
    width: 50%;
    height: 50%;
    padding: 16px;
    border: 16px solid orange;
    background-color: white;
    overflow: auto;
}
</style>



<?php
	for($i=1; $i<=4; $i=$i+1)
	{

    // echo "<br>회차 : ".$i ." 테스트 : ";  테스트할떄씀
    $ch = curl_init();
    $url = 'http://apis.data.go.kr/9760000/ElecPrmsInfoInqireService/getCnddtElecPrmsInfoInqire'; /*URL*/
    $queryParams = '?' . urlencode('serviceKey') . '=m7DV7mxQRFEv9mESKSjqpdNUfx%2B%2BrvGPqSnhcDEhh%2FDbf31dJPifDTUIsKFG6fCOzFDGIvnbm0Ccp%2FfVFe8C2A%3D%3D'; /*Service Key*/
    $queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /**/
    $queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('10'); /**/
    $queryParams .= '&' . urlencode('sgId') . '=' . urlencode('20220601'); /**/
    $queryParams .= '&' . urlencode('sgTypecode') . '=' . urlencode($i); /**/
    $queryParams .= '&' . urlencode('cnddtId') . '=' . urlencode('100149514'); /**/

    curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $response = curl_exec($ch);
    curl_close($ch);

    if (strpos($response,"INFO-03")){
        // echo "정보가 없습니다.";  테스트할떄씀
      }else{
        // 정보가있는 경우
        // var_dump($response);
        $object = simplexml_load_string($response); //구조체에 {배열,배열,배열,배열 로저장}
        $items = $object->body->items->item; //xml파일 태그 분리?떄기?
                // var_dump($items);
        foreach ($items as $item) {
          echo "<br><br>";
          echo($item->prmsCnt)." 개수<br>";

          // 공약수만 만큼 반복문
          $count = $item->prmsCnt;
          for ($a=1; $a<=$count; $a=$a+1 )
          {
            // 임시 주석
            $Order = "prmsOrd" . $a;
            $Title = "prmsTitle" . $a;
            $Content =  "prmmCont". $a;
            // echo "<p>" . ($item->$Order)."번째 공약: " .($item->$Title)."제목 </p>";
            // // echo($item->prmsRealmName1)."분야<br>";
            // echo($item->$Content)."내용<br>";

          echo "<p>" . ($item->$Order)."번째 공약: <a href='#open'>" .($item->$Title)."</a> 클릭시보임 </p>";
          echo  "<div class='white_content' id='open'>
                     <div>
                         <p> ".($item->$Content). "<a href='#close'> <br><br>닫기</a></p>
                     </div>
                </div>";

          }

        }
      }
	}
?>
</html>
