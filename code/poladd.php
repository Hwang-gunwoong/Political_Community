<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>정치인 입력창</title>
    </head>

    <body>
        <form method="post" action="./API.php">
        <!-- <form method="post" action="./임시추가삽입용.php"> -->
            <label>선거일 <input type="number" name='date'> </label><br>
            <label>선거유형 <input type="number" name='code'> </label><br>
            <input type="submit" value='추가하기'>
        </form>
    </body>
</html>
