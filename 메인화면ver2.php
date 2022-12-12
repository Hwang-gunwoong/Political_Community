<!DocType html>
<html>
<!-- 주석 다는법이요. -->
<!-- 정치는 영어로 politics -->
<!-- 정치인은 영어로 politican -->
 <!-- 외부 css 파일 형식 방법.<link rel="stylesheet" href="css파일 주소"> -->
  <head>
    <title>메인페이지</title>
    <meta charset="utf-8">

    <style type="text/css">
      .all {margin-left: 200px; margin-right: 200px;}

      header {background-color:rgba(125,125,125, 1); position:sticky; top:0;left:0;right:0; height: 120px;}
      .header_top {height: 65px;}
      .header_top h2 {display: inline;}
      .header_top button {float: right; margin-right: 20px;}

      nav {height: 50px; background-color: black;}
      nav .item_menu { border: solid 3px black;  list-style-type: none;  margin: 0px; padding: 0px;}
      nav .item_top {width: 60px; border: solid 1px black; float: left; margin-left: 10px; padding: 0px; }


      nav .item_down  { margin: 0px; padding: 0px; position: absolute;}
      nav .item_down .item {visibility: visible;  padding: 0px; margin: 0px; background-color: purple; list-style-type: none; border: solid 1px black; width: 60px;  position: relative;}
      nav .item_down .item {visibility:  hidden;}

      .adverb {background-color: gray; height: 300px; width: 100%; text-align: center;}
      .adverb .adverbList {margin: 0; padding: 0; background-color: red; height: 250px; width: 80%; display: inline-block;;}
      .adverb .btn_left {float: left; }
      .adverb .btn_right { float: right;}


      .polranking {height: 300px; width: 59%; float: left; background-color: rgba(220,220,220, 0.5); border-radius: 3%;  border: solid 1px black;}
      .polranking h2 {display: inline;}
      .polranking .rankingList {list-style-type: none;}
      .polranking .rankingList p {border: solid 1px blue; margin-top: 0px; margin-bottom: 0px;}
      .polranking .rankingList .item {float:left; height: 150px; width:100px;margin-right:19px; border: solid 1px black;}

      .community {height: 300px; width: 59%; float: left; background-color: rgba(220,220,220, 0.5); border-radius: 3%;  border: solid 1px black;}
      .community h2 {display: inline;}

      .newspaper { height: 600px; width: 40%; float: right; background-color: rgba(220,220,220, 0.5); border-radius: 3%;  border: solid 1px black;}
      .newspaper h2 {display: inline;}
      .newspaper a:link {color : black;  text-decoration: none;}
      .newspaper a:visited {color : black;  text-decoration: none;}
      .newspaper a:hover {color : red; text-decoration: underline;}

    </style>

    <!-- padding-left:0; margin-left:0; -->





  </head>

  <body>

    <div class = "all">

      <header>
        <div class="header_top">
            <h2>메인 페이지</h2>
            <button>로그인</button>

        </div>

        <nav>
          <ul class = "item_menu">

            <li class="item_top">
            <!-- 상위메뉴 -->
              <button onclick="window.open('./poladd.php')"> 정치인 추가 </button>
              <ul class = "item_down">
                <li class="item"> 목차1_아이템 </li>
              </ul>
            </li>

            <li class="item_top">
              <button onclick="window.open('./polSearch.php')"> 정치인 검색 </button>
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
        <!-- <p>메인 본문들 시작 </p> -->
        <!-- <div class = "adverb"> <p>광고 및 추천?</p>
          <button class= "btn_left"> <<<버튼 </button>
          <ul class = "adverbList">


          </ul>
          <button class = "btn_right"> >>>버튼 </button>
        </div> -->
      <!-- 광고끝   -->


        <div class = "polranking">
          <h2>유저평가 랭킹</h2> <button> 전체보기</button>
          <ul class = "rankingList">

<!-- 상위 5등조회 시작 -->
            <?php
             $conn = mysqli_connect("127.0.0.1", "root", "aszx0902" , "hi");
             $sql = "SELECT pol_num , rate_sum FROM top_rank";
             $result = mysqli_query($conn, $sql);
             #기본 접속 및 조회 끝


             if (mysqli_num_rows($result) > 0) {
                 $a = 0;
                 while($a < 5) {
                   $a = $a +1;
                   $row = mysqli_fetch_assoc($result); //탑랭크 테이블에서 1행 추출

                   $polnum =  $row['pol_num'];
                   $ratesum = $row['rate_sum'];

                   $sql = "SELECT name FROM pol WHERE pol_num  =" . $polnum;

                   $result2 = mysqli_query($conn, $sql);
                   $row = mysqli_fetch_assoc($result2);

                   //echo "이름: " . $row["name"]. "<br>";
                   echo "<li class = \"item\"> <p>" . $a . "등 </p> <p>사진</p> <p>" . $row['name'] . "</p> <p>총점</p> <p>" . round($ratesum,2) . "</p> </li>";
                 }
             }else{
                 echo "테이블에 데이터가 없습니다.";
             }

             mysqli_close($conn); // 디비 접속 닫기
            ?>

            <!-- <li class = "item"> <p>1등</p> <p>사진</p> <p>이름</p> <p>총점</p> </li>
            <li class = "item"> <p>2등</p> <p>사진</p> <p>이름</p> <p>총점</p> </li>
            <li class = "item"> <p>3등</p> <p>사진</p> <p>이름</p> <p>총점</p> </li>
            <li class = "item"> <p>4등</p> <p>사진</p> <p>이름</p> <p>총점</p> </li>
            <li class = "item"> <p>5등</p> <p>사진</p> <p>이름</p> <p>총점</p> </li> -->

          </ul>
        </div>
<!-- 정치인랭킹끝 -->

        <div class = "newspaper">
          <h2>주요 뉴스</h2> <button> 전체보기</button><br>
            <div style="overflow:scroll; width:100%; height:95%;">
              <?php
                require_once 'simple_html_dom.php';
                $html = file_get_html('https://news.naver.com/main/main.naver?mode=LSD&mid=shm&sid1=100');
                foreach($html->find('div[class=cluster] a[class=cluster_text_headline nclicks(cls_pol.clsart)]') as $element) {
                   echo $element . '<hr>';
                 }
                // var_dump($news->plaintext);
              ?>
            </div>
        </div>
        <div class = "community">
          <h2>유저 커뮤니티</h2> <button> 전체보기</button>
        </div>
        <!-- <div class = "polcontents"> <p>정치공약</p> </div>
        <div class = "community"> <p>뭐가 필요할까</p> </div>
 -->

      </div>
      <!-- 본문 끝 -->

      <footer>
        <p>20171622 황건웅</p>

      </footer>


    </div>
    <!-- all전체가 끝나는지점 -->



  </body>
</html>
