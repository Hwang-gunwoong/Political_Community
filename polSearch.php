<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>검색</title>
        <style type="text/css">
          #hide {display: none;}
        </style>
    </head>

    <body>
        <form method="post" action="./polSearch.php">
            <label>소속정당 <input type="text" name='pol_name' value=""> </label><br>
            <label>이름 <input type="text" name='name' value=""> </label><br>
            <input type="submit" value='검색하기'>
        </form>

        <table border  ="1">
          <th> 번호</th> <th> 소속 정당</th> <th> 이름 </th>
            <?php

              $pol_name = $_POST['pol_name'];
              $name = $_POST['name'];

              $con = mysqli_connect("localhost","root","aszx0902","hi") or die ("Can't access DB");
              $query = "select pol_num, pol_name, name
                        from pol
                        where pol_name Like '%". $pol_name ."%' and name Like '%" . $name . "%';";
              $result=mysqli_query($con,$query);

              if (mysqli_num_rows($result) > 0) {

                  while(  $row = mysqli_fetch_assoc($result))
                  {
                    echo "<tr>";
                    echo "<td> " . $row['pol_num'] .  "</td> <td>" . $row['pol_name'] . "</td>  <td>" .  $row['name'] . "</td>
                            <td>
                            <form method=\"post\" action=\"./polDetail.php\">
                                <input id=\"hide\" type=\"text\" name='pol_num' value=". $row['pol_num'] . ">
                                <input type=\"submit\" value='상세정보'>
                            </form> </td>";


                    echo "</tr>";
                  }
              }else{
                  echo "테이블에 데이터가 없습니다.";
              }

              mysqli_close($con); // 디비 접속 닫기
             ?>
      </table>
    </body>
</html>
