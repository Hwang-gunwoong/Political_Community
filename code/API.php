/* 추가된 정보 */

<?php
  $date = $_POST['date']; //20220601
  $code = $_POST['code']; //4

echo "<br>선거일 : ".$date."<br> 선거코드 : ".$code ;
  $ch = curl_init();
  $url = 'http://apis.data.go.kr/9760000/PofelcddInfoInqireService/getPofelcddRegistSttusInfoInqire'; /*URL 따와서 해본거*/
//  $url = 'http://apis.data.go.kr/9760000/PofelcddInfoInqireService/getPoelpcddRegistSttusInfoInqire'; /*사이트에서 제공한버젼*/
        //https://apis.data.go.kr/9760000/PofelcddInfoInqireService/getPofelcddRegistSttusInfoInqire?sgId=20220309&sgTypecode=1&serviceKey=m7DV7mxQRFEv9mESKSjqpdNUfx%2B%2BrvGPqSnhcDEhh%2FDbf31dJPifDTUIsKFG6fCOzFDGIvnbm0Ccp%2FfVFe8C2A%3D%3D
  $queryParams = '?' . urlencode('serviceKey') . '=m7DV7mxQRFEv9mESKSjqpdNUfx%2B%2BrvGPqSnhcDEhh%2FDbf31dJPifDTUIsKFG6fCOzFDGIvnbm0Ccp%2FfVFe8C2A%3D%3D'; /*Service Key*/
  $queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /**/
  $queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('100'); /**/
  $queryParams .= '&' . urlencode('sgId') . '=' . urlencode($date); /**/
  $queryParams .= '&' . urlencode('sgTypecode') . '=' . urlencode($code); /**/
  $queryParams .= '&' . urlencode('sggName') . '=' . urlencode(''); /**/
  $queryParams .= '&' . urlencode('sdName') . '=' . urlencode(''); /**/

  curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
  $response = curl_exec($ch); //결과를 response 객체에 넣기.
  curl_close($ch); //curl 닫기

  $object = simplexml_load_string($response); //구조체에 {배열,배열,배열,배열 로저장}
  $items = $object->body->items->item; //xml파일 태그 분리?떄기?
  //var_dump($items); xml 태그떄고 걍 string을 다출력하기;

  foreach ($items as $item) {
	  echo "<br><br>". ($item->jdName)."<br>";
    echo($item->name)."<br>";
    echo($item->age)."<br>";
    echo($item->job)."<br>";
    echo($item->edu)."<br>";
    echo($item->career1)."<br>";
    echo($item->career2)."<br>";
    echo($item->huboid)."<br>";
   // 몰?루 객체(사람전체)속 배열(사람하나) 조회 , 출력하는곳

   //sql에 넣을 문자열에 ''이 포함되면 오류나서 ''삭제하는곳
   $trim_career1 = str_replace("'", "o", $item->career1);
   $trim_career2 = str_replace("'", "o", $item->career2);

   //api로 조회한 값 DB에 집어넣기 (선 중복검사 후)
     $conn = mysqli_connect("127.0.0.1", "root", "aszx0902" , "hi");
     $sql = "SELECT exists (SELECT * FROM pol where pol_name ='" . $item->jdName . "'and name='" . $item->name . "') As check_result";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     if($row["check_result"]){
       echo "값이 이미 존재합니다. 추가하지않습니다.".$row["check_result"];

     }else{
       echo "테이블에 데이터가 없습니다.";
       $sql = "insert into pol(pol_name,name,age, edu, career1, career2 , pol_id) values('" . $item->jdName . "','" . $item->name . "', " . $item->age . ",'" . $item->edu . "','" . $trim_career1 . "','" . $trim_career2 . "','" . $item->huboid ."')";
       $result=mysqli_query($conn,$sql);
       echo "<br> 입력했습니다.";
     }
     mysqli_close($conn);


  }


  //var_dump($response); xml 태그떄고 걍 string을 다출력하기;
?>
