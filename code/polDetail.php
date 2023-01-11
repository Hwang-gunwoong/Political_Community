<!DocType html>
<html>
<!-- 주석 다는법이요. -->
<!-- 정치는 영어로 politics -->
<!-- 정치인은 영어로 politican -->
 <!-- 외부 css 파일 형식 방법.<link rel="stylesheet" href="css파일 주소"> -->
  <head>
    <title>정치인 상세페이지</title>
    <meta charset="utf-8">

    <style type="text/css">
      .all {margin-left: 200px; margin-right: 200px;}

      header {background-color:rgba(125,125,125, 1); position:sticky; top:0;left:0;right:0; height: 120px;}
      .header_top {height: 70%;}
      .header_top h2 {display: inline;}
      .header_top button {float: right; margin-right: 20px;}

      nav {height: 30%; background-color: black;}
      nav .item_menu { border: solid 3px black;  list-style-type: none;  margin: 0px; padding: 0px;}
      nav .item_top {width: 60px; border: solid 1px black; float: left; margin-left: 10px; padding: 0px; }


      nav .item_down  { margin: 0px; padding: 0px; position: absolute;}
      nav .item_down .item {  padding: 0px; margin: 0px; background-color: purple; list-style-type: none; border: solid 1px black; width: 60px;  position: relative;}
      nav .item_down .item {visibility:  hidden;}
      /* 목차 보이는 설정부분 */

      .polranking {height: 300px; width: 49.5%; float: left; margin-bottom: 5px; background-color: rgba(220,220,220, 0.5); border-radius: 3%;  border: solid 1px black;}
      .polranking h2 {display: inline;}
      .polranking .rankingList {list-style-type: none;}
      .polranking .rankingList p {border: solid 1px blue; margin-top: 0px; margin-bottom: 0px;}
      .polranking .rankingList .item {float:left; height: 120px; width:100px;margin-right:1px; border: solid 1px black; overflow: scroll;}
      .polranking .left {height: 100%; width: 100px; float: left; border-right:solid 1px black;}
      .polranking .tmp_image {height: 100px; width: 100px; background-color: purple; margin-top: 100px;}


      .userRating {height: 300px; width: 50%; float: left; margin-bottom: 5px; background-color: rgba(220,220,220, 0.5); border-radius: 3%;  border: solid 1px black;}
      .userRating h2 {display: inline;}
      .userRating #hide {display: none;}
      .userRating form {display: inline;}
      .userRating .rankingList {padding: 0; list-style-type: none;}
      .userRating .rankingList p {border: solid 1px blue; margin-top: 0px; margin-bottom: 0px;}
      .userRating .rankingList .item {float:left; height: 100px; width:80px; margin-right:1px; border: solid 1px black;}
      .userRating .tmp_graph {position: relative; height: 150px; width:  300px; background-color: white; display: block; padding: 0; margin-bottom: 5px;}
      .userRating .tmp_graph .test {height: 150px; width: 200px; margin: 0px; padding: 0px;}


      .polNews {height: 300px; width: 49.5%; float: left; margin-bottom: 5px; background-color: rgba(220,220,220, 0.5); border-radius: 3%;  border: solid 1px black;}
      .polNews a mark {background-color: initial;}
      .polNews a:link {color : black;  text-decoration: none;}
      .polNews a:visited {color : black;  text-decoration: none;}
      .polNews a:hover {color : red; text-decoration: underline;}

      .polPromise {height: 300px; width: 50%; float: left; margin-bottom: 5px; background-color: rgba(220,220,220, 0.5); border-radius: 3%;  border: solid 1px black;}
      .polPromise p {display: inline;}
      .polPromise a:link {color : black;  text-decoration: none;}
      .polPromise a:visited {color : black;  text-decoration: none;}
      .polPromise a:hover {color : red; text-decoration: underline;}
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
/* clip-path: polygon(50% 0%, 100% 38%, 82% 100%, 18% 100%, 0% 38%); */

    </style>

    <!-- padding-left:0; margin-left:0; -->



  </head>

  <body>

    <div class = "all">

      <header>
        <div class="header_top">
            <h2>정치인 상세정보</h2>
            <button>로그인</button>

        </div>

        <nav>
          <ul class = "item_menu">

            <li class="item_top">
            <!-- 상위메뉴 -->
              <button> 목차 1 </button>
              <ul class = "item_down">
                <li class="item"> 목차1_아이템 </li>
              </ul>
            </li>

            <li class="item_top">
              <button> 목차 2 </button>
              <ul class= "item_down">
                <li class="item"> 목차2_아이템 </li>
                <li class="item"> 목차2_아이템 </li>
                <li class="item"> 목차2_아이템 </li>
                <li class="item"> 목차2_아이템 </li>
              </ul>
            </li>

            <li class="item_top">
              <button> 목차 3 </button>
              <ul class= "item_down">
                <li class="item"> 목차3_아이템 </li>
                <li class="item"> 목차3_아이템 </li>
                <li class="item"> 목차3_아이템 </li>
                <li class="item"> 목차3_아이템 </li>
              </ul>
            </li>


          </ul>
        </nav>
      </header>


      <div class = "main">

        <div class = "polranking">
          <h2>정보</h2> <button> 전체보기</button>

          <div class = "left">
            <div class = "tmp_image">
              <?php
               $polnum=$_POST['pol_num'];

               $conn = mysqli_connect("127.0.0.1", "root", "aszx0902" , "hi");
               $sql = "SELECT * FROM pol where pol_num=". $polnum ;
               $result = mysqli_query($conn, $sql);
               #기본 접속 및 조회 끝


               if (mysqli_num_rows($result) > 0) {

                     $row = mysqli_fetch_assoc($result); //소속정당+이름 으로 이미지 검색


                     echo "사진<br>" . $row['pol_name']. $row['name'] . "<br>출력" ;

                     require_once 'simple_html_dom.php';
                     $html = file_get_html("https://search.naver.com/search.naver?where=image&sm=tab_jum&query=". $row['pol_name']. $row['name']);


               }else{
                   echo "테이블에 데이터가 없습니다.";
               }

               mysqli_close($conn); // 디비 접속 닫기
              ?>
              <!-- <img src="https://search.pstatic.net/common/?src=http%3A%2F%2Fimgnews.naver.net%2Fimage%2F5008%2F2011%2F08%2F24%2Fart_1314151329.jpg&type=a340"> -->
            </div class = "tmp_image">
          </div class = "left">


          <ul class = "rankingList">

            <?php
             $polnum=$_POST['pol_num'];

             $conn = mysqli_connect("127.0.0.1", "root", "aszx0902" , "hi");
             $sql = "SELECT * FROM pol where pol_num=". $polnum ;
             $result = mysqli_query($conn, $sql);
             #기본 접속 및 조회 끝


             if (mysqli_num_rows($result) > 0) {

                   $row = mysqli_fetch_assoc($result); //탑랭크 테이블에서 1행 추출

                   echo "<li class = \"item\"> <p>정치 번호</p> <p>" . $row['pol_num'] . "</p> </li>" ;
                   echo "<li class = \"item\"> <p>소속 정당</p> <p>" . $row['pol_name'] . "</p> </li>" ;
                   echo "<li class = \"item\"> <p>이름</p> <p>" . $row['name'] . "</p> </li>" ;
                   echo "<li class = \"item\"> <p>나이</p> <p>" . $row['age'] . "</p> </li>" ;
                   echo "<li class = \"item\"> <p>학력</p> <p>" . $row['edu'] . "</p> </li>" ;
                   echo "<li class = \"item\"> <p>경력1</p> <p>" . $row['career1'] . "</p> </li>";
                   echo "<li class = \"item\"> <p>경력2</p> <p>" . $row['career2'] . "</p> </li>" ;



             }else{
                 echo "테이블에 데이터가 없습니다.";
             }

             mysqli_close($conn); // 디비 접속 닫기
            ?>

              <!-- <li class = "item"> <p>범죄</p> <p>4회</p> </li>
              <li class = "item"> <p>경력</p> <p>25년</p></li>
              <li class = "item"> <p>재산</p> <p>5억</p></li>
              <li class = "item"> <p>득표율</p> <p>36%</p></li>
              <li class = "item"> <p>학력</p> <p>100점</p></li>
              <li class = "item"> <p>경력</p> <p>100점</p></li> -->

          </ul>
<!-- 정치인랭킹끝 -->
      </div class = "polranking">


<div class = "userRating">
  <h2>유저 평가</h2>
  <!-- <button> 평가 하기</button> -->
  <?php
  $polnum=$_POST['pol_num'];
  echo "
<form method=\"post\" target=\"_blank\" action=\"./별점매기는팝업창.php\">
    <input id=\"hide\" type=\"text\" name='pol_num' value=". $polnum . ">
    <input type=\"submit\" value='평가 하기'>
</form> ";
?>

  <!-- <button onclick="window.open('./별점매기는팝업창.php','별점','width=450,height=250,location=no,status=no,scrollbars=yes');"> 평가하기 </button> -->

  <div class = "tmp_graph">

    <?php
    $polnum=$_POST['pol_num'];

     $conn = mysqli_connect("127.0.0.1", "root", "aszx0902" , "hi");
     $sql = "select pol_num, (aa+bb+cc+dd+ee)as rate_sum ,aa,bb,cc,dd,ee
              from
              (
                  select pol_num, avg(a) as aa ,avg(b) as bb,avg(c) as cc ,avg(d) as dd,avg(e) as ee
                  from user_rate
                  where pol_num=" . $polnum . "
                  group by pol_num
              )as tmp_avg" ;
     $result = mysqli_query($conn, $sql);
     #기본 접속 및 조회 끝


     if (mysqli_num_rows($result) > 0) {

           $row = mysqli_fetch_assoc($result); //탑랭크 테이블에서 1행 추출
           $php1 = $row['aa'] ;
           $php2 = $row['bb'] ;
           $php3 = $row['cc'] ;
           $php4 = $row['dd'] ;
           $php5 = $row['ee'] ;




     }else{
         echo "테이블에 데이터가 없습니다.";
     }

     mysqli_close($conn); // 디비 접속 닫기
    ?>
   <!-- 자바 php 구분선 -->

    <div class="test">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
      <canvas id="radar-chart" width="200" height="150"></canvas>
    </div>
    <script type="text/javascript">


           var rate1 = ' <?= $php1 ?>';
           var rate2 = ' <?= $php2 ?>';
           var rate3 = ' <?= $php3 ?>';
           var rate4 = ' <?= $php4 ?>';
           var rate5 = ' <?= $php5 ?>';
    new Chart(document.getElementById("radar-chart"), {
        type: 'radar',
        data: {
          labels: ["인성", "공약이행", "업무능력", "대중소통", "언변능력"],
          datasets: [
            {
              label: " ",
              fill: true,
              backgroundColor: "rgba(0,191,255,0.2)",
              borderColor: "rgba(0,0,255,0.5)",
              pointBorderColor: "#fff",
              pointBackgroundColor: "rgba(179,181,198,1)",
              data: [rate1,rate2,rate3,rate4,rate5]
            }
          ]
        },
        options: {
          scales: {
              ticks: {
                min: 0,
                max: 5,
                beginAtZero: true,
                stepSize: 1
              }

         } ,
           legend: {
            display: false,
          },
        }
    });
    </script>
  </div class = "tmp_graph">
  <!-- 그래프끝 -->

  <!-- 유저평점 평균표시 -->
  <ul class = "rankingList">
    <?php
    $polnum=$_POST['pol_num'];

     $conn = mysqli_connect("127.0.0.1", "root", "aszx0902" , "hi");
     $sql = "select pol_num, (aa+bb+cc+dd+ee)as rate_sum ,aa,bb,cc,dd,ee
              from
              (
                  select pol_num, avg(a) as aa ,avg(b) as bb,avg(c) as cc ,avg(d) as dd,avg(e) as ee
                  from user_rate
                  where pol_num=" . $polnum . "
                  group by pol_num
              )as tmp_avg" ;
     $result = mysqli_query($conn, $sql);
     #기본 접속 및 조회 끝


     if (mysqli_num_rows($result) > 0) {

           $row = mysqli_fetch_assoc($result); //탑랭크 테이블에서 1행 추출

           echo "<li class = \"item\"> <p>평점의 합</p> <p>" .round($row['rate_sum'],2) . "</p></li>" ;
           echo "<li class = \"item\"> <p>인성 점수</p> <p>" .round($row['aa'],2) . "</p></li>";
           echo "<li class = \"item\"> <p>공약이행</p> <p>"  .round($row['bb'],2) . "</p></li>";
           echo "<li class = \"item\"> <p>업무 능력</p> <p>" .round($row['cc'],2) . "</p></li>";
           echo "<li class = \"item\"> <p>대중 소통</p> <p>" .round($row['dd'],2) . "</p></li>";
           echo "<li class = \"item\"> <p>언변능력</p> <p>"  .round($row['ee'],2) . "</p></li>";



     }else{
         echo "테이블에 데이터가 없습니다.";
     }

     mysqli_close($conn); // 디비 접속 닫기
    ?>
    <!-- 평점평균끝 -->



    <!-- <li class = "item"> <p>범죄</p> <p>4회</p> </li>
    <li class = "item"> <p>경력</p> <p>25년</p></li>
    <li class = "item"> <p>재산</p> <p>5억</p></li>
    <li class = "item"> <p>득표율</p> <p>36%</p></li>
    <li class = "item"> <p>외모</p> <p>100점</p></li> -->
  </ul>
</div>
<!-- 유저평가 끝 -->

<!-- 관련 뉴스 -->

<div class="polNews">
    <h2>관련 뉴스</h2>
        <div style="overflow:scroll; width:100%; height:75%;">
            <?php

            $polnum=$_POST['pol_num'];

            $conn = mysqli_connect("127.0.0.1", "root", "aszx0902" , "hi");
            $sql = "SELECT * FROM pol where pol_num=". $polnum ;
            $result = mysqli_query($conn, $sql);
            #기본 접속 및 조회 끝


            if (mysqli_num_rows($result) > 0) {

                  $row = mysqli_fetch_assoc($result); //


                // $row['pol_name']  $row['name']




                   require_once 'simple_html_dom.php';
                   $html = file_get_html("https://search.naver.com/search.naver?where=news&sm=tab_jum&query=". $row['name']);
                   // $news = $html->find( 'div[group_news]');


                   foreach($html->find('div[class=group_news] ul[class=list_news] div[class=news_area] a[class=news_tit]') as $element) {
                      echo $element . '<hr>';
                    }

                   // var_dump($news->plaintext);

             }else{
                 echo "테이블에 데이터가 없습니다.";
             }

             mysqli_close($conn); // 디비 접속 닫기
            ?>
        </div>
</div class="polNews">


<div class="polPromise">
<h2>공약</h2>
  <div style="overflow:scroll; width:100%; height:75%;">
      <?php
      	for($i=1; $i<=4; $i=$i+1)
      	{
          // echo "<br>회차 : ".$i ." 테스트 : "; 테스트용임~
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
              // echo "정보가 없습니다."; 테스트용
            }else{
              // 정보가있는 경우
              // var_dump($response);
              $object = simplexml_load_string($response); //구조체에 {배열,배열,배열,배열 로저장}
              $items = $object->body->items->item; //xml파일 태그 분리?떄기?
                      // var_dump($items);
              foreach ($items as $item) {
                echo($item->prmsCnt)." 개 확인.<br>";

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

                  $nl2br = nl2br($item->$Content);
                  // 이거없으면 echo구문에서 개행문자\n 인식못해서 씹힘 <br>로 바꿔야됨.

                echo "<p>" . ($item->$Order)."번째 : <a href='#open'>" .($item->$Title)."</a> <hr></p>";
                echo  "<div class='white_content' id='open'>
                           <div>
                               <p> ".($nl2br). "<a href='#close'> <br><br>닫기</a></p>
                           </div>
                      </div>";

                }

              }
            }
      	}
      ?>
    </div>
</div>

      </div>
      <!-- 본문 끝 -->

      <footer>
        <p>20171622 황건웅</p>
      </footer>


    </div class = "all">
    <!-- all전체가 끝나는지점 -->



  </body>
</html>
