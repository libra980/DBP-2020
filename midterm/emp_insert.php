<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>직원 관리 시스템</title>
</head>

<body>
    <h2><a href="index.php">직원 관리 시스템</a> | 신규 직원 등록</h2>
    <img src="img1.jpg" alt=img1>
    <br>
    <ul>
        <li><a href="emp_select.php"> 직원 정보 조회</a></li>
        <li><a href="function1.php"> 가장 오래 근무한 직원 top 10</a></li>
        <li><a href="function2.php"> 연도별 입사 및 퇴사 인원</a></li>
        <li><a href="function3.php"> 부서별 직원 수</a></li>
        <li><a href="manager.php"> 관리자 모드</a></li>
    </ul>
    <form action="emp_insert_process.php" method="POST">
        <label>emp_no:</label>
        <input type="text" name="emp_no" placeholder="emp_no"><br>
        <label>birth_date:(0000-00-00)</label>
        <input type="text" name="birth_date" placeholder="birth_date"><br>
        <label>first_name:</label>
        <input type="text" name="first_name" placeholder="first_name"><br>
        <label>last_name:</label>
        <input type="text" name="last_name" placeholder="last_name"><br>
        <label>gender:(M or F)</label>
        <input type="text" name="gender" placeholder="gender"><br>
        <label>hire_date:(0000-00-00)</label>
        <input type="text" name="hire_date" placeholder="hire_date"><br>
        <input type="submit" value="Create">

    </form>

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