<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 직원 관리 시스템 </title>
</head>

<body>
    <img src="img1.jpg" alt=img1>
    <br>
    <ul>
        <li><a href="emp_select.php"> 직원 정보 조회</a></li>
        <li><a href="function1.php"> 가장 오래 근무한 직원 top 10</a></li>
        <li><a href="function2.php"> 연도별 입사 및 퇴사 인원</a></li>
        <li><a href="function3.php"> 부서별 직원 수</a></li>
        <li><a href="manager.php"> 관리자 모드</a></li>
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

</style>