<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>별점주기</title>
        <script type="text/javascript">
          window.resizeTo( 300, 200 )
        </script>
    </head>

    <body>
        <?php
          $polnum=$_POST['pol_num'];
          echo "
          <form method=\"post\" action=\"./별점주기.php\">
              <mark>평가 점수</mark> ( 1) ( 2) ( 3) (4) ( 5) <br>
              <label>인성 점수 <input type=\"range\" name=\"rate1\" min=\"1\" max=\"5\" step=\"1\" value=\"3\"> </label><br>
              <label>공약 이행 <input type=\"range\" name=\"rate2\" min=\"1\" max=\"5\" step=\"1\" value=\"3\"> </label><br>
              <label>업무 능력 <input type=\"range\" name=\"rate3\" min=\"1\" max=\"5\" step=\"1\" value=\"3\"> </label><br>
              <label>대중 소통 <input type=\"range\" name=\"rate4\" min=\"1\" max=\"5\" step=\"1\" value=\"3\"> </label><br>
              <label>언변 능력 <input type=\"range\" name=\"rate5\" min=\"1\" max=\"5\" step=\"1\" value=\"3\"> </label><br>

              <input id=\"hide\" type=\"hidden\" name='pol_num' value=". $polnum . ">
              <input type=\"submit\" value='평가 하기'>
        </form> ";
        ?>
    </body>
</html>
