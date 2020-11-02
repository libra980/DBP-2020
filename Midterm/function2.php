<?php
  $link = mysqli_connect('localhost', 'admin', 'admin', 'employees');
  $query = "SELECT year(to_date), count(*)
    from (
        select de.emp_no, to_date
        from dept_emp de
	    where to_date < \"2003-01-01\"
        group by de.emp_no
        ) ds
    group by year(to_date) ";

  $result = mysqli_query($link, $query);  
  $emp_info1 = '';
  while($row = mysqli_fetch_array($result)) {
    $emp_info1 .= '<tr>';
    $emp_info1 .= '<td>'.$row['year(to_date)'].'</td>';
    $emp_info1 .= '<td>'.$row['count(*)'].'</td>';
    $emp_info1 .= '</tr>';
  }  

  $query = "SELECT year(to_date), count(*)
    from (
        select de.emp_no, MAX(to_date) to_date
        from dept_emp de
        where not exists(
            select 1 from dept_emp de1 
            where de1.to_date = '9999-01-01' and de1.emp_no=de.emp_no)
            group by de.emp_no
        ) ds
    group by year(to_date)";

$result = mysqli_query($link, $query);  
$emp_info2 = '';
while($row = mysqli_fetch_array($result)) {
  $emp_info2 .= '<tr>';
  $emp_info2 .= '<td>'.$row['year(to_date)'].'</td>';
  $emp_info2 .= '<td>'.$row['count(*)'].'</td>';
  $emp_info2 .= '</tr>';
}  
  
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>직원 관리 시스템</title>
</head>

<body>
    <h2><a href="index.php">직원 관리 시스템</a> | 연도별 입사 및 퇴사 인원 </h2>
    <img src="img1.jpg" alt=img1>
    <br>
    <ul>
        <li><a href="emp_select.php"> 직원 정보 조회</a></li>
        <li><a href="function1.php"> 가장 오래 근무한 직원 top 10</a></li>
        <li><a href="function2.php"> 연도별 입사 및 퇴사 인원</a></li>
        <li><a href="function3.php"> 부서별 직원 수</a></li>
        <li><a href="manager.php"> 관리자 모드</a></li>
    </ul>
    <img src="./chart1.jpg" alt="chart">
    <table border="1">
        <tr>
            <th>연도</th>
            <th>입사 인원</th>

        </tr>
        <?= $emp_info1 ?>

    </table>

    <table border="1">
        <tr>
            <th>연도</th>
            <th>퇴사 인원</th>

        </tr>
        <?= $emp_info2 ?>

    </table>

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