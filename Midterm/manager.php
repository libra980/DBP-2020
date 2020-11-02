<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 직원 관리 시스템-관리자모드 </title>
</head>

<body>
    <img src="img1.jpg" alt=img1>
    <br>
    <ul>
        <li><a href="emp_select.php"> 직원 정보 조회</a></li>
        <li><a href="emp_insert.php"> 신규 직원 등록</a></li>
        <li><form action="emp_update.php" method="POST">
        <li><a href="function1.php"> 가장 오래 근무한 직원 top 10</a></li>
        <li><a href="function2.php"> 연도별 입사 및 퇴사 인원</a></li>
        <li><a href="function3.php"> 부서별 직원 수</a></li>
    </ul><br><br>
    <ul id="ul2">
    
        <form><a href="emp_insert.php"> 신규 직원 등록</a><br></form>
        <form action="emp_update.php" method="POST"> 직원 정보 수정:<input type="text" name="emp_no" placeholder="emp_no">
            <input type="submit" value="Search">
        </form>
       <form action="emp_delete.php" method="POST"> 직원 정보 삭제:<input type="text" name="emp_no" placeholder="emp_no">
            <input type="submit" value="Delete">
        </form>

        </ul>
    </body>
</html>
<style type="text/css">
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #333;
    }
    ul:after{
        content:'';
        display: block;
        clear:both;
    }
    li {
        float: left;
    }
    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    li a:hover:not(.active) {
        background-color: #111;
    }
    .active {
        background-color: #4CAF50;
    }
    form   
    { list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #333;
    }
    

</style>

<style>
#ul2{
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
</style>
