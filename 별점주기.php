/* 추가된 정보 */

<?php
  $polnum= $_POST['pol_num'];
  $rate1 = $_POST['rate1']; //20220601
  $rate2 = $_POST['rate2']; //4
  $rate3 = $_POST['rate3'];
  $rate4 = $_POST['rate4'];
  $rate5 = $_POST['rate5'];

   // DB입력
     $conn = mysqli_connect("127.0.0.1", "root", "aszx0902" , "hi");

       $sql = "insert into user_rate(pol_num,user_id,a, b, c, d , e ) values('" . $polnum . "','test_id', " . $rate1 . ",'" . $rate2 . "','" . $rate3 . "','" . $rate4 . "','" . $rate5 ."')";
       $result=mysqli_query($conn,$sql);
       echo "<br> 입력했습니다.";

     mysqli_close($conn);





  //var_dump($response); xml 태그떄고 걍 string을 다출력하기;
?>
