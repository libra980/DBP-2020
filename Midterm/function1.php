<?php
  $link = mysqli_connect('localhost', 'admin', 'admin', 'employees');
  $query = "SELECT e.emp_no, e.first_name, e.last_name, d.dept_name, e.hire_date
    from dept_emp de
    inner join employees e on e.emp_no=de.emp_no
    inner join departments d on d.dept_no=de.dept_no
    where de.to_date = '9999-01-01' 
    order by hire_date
    limit 10 ";

  $result = mysqli_query($link, $query);  
  $emp_info = '';
  while($row = mysqli_fetch_array($result)) {
    $emp_info .= '<tr>';
    $emp_info .= '<td>'.$row['emp_no'].'</td>';
    $emp_info .= '<td>'.$row['first_name'].'</td>';
    $emp_info .= '<td>'.$row['last_name'].'</td>';
    $emp_info .= '<td>'.$row['dept_name'].'</td>';
    $emp_info .= '<td>'.$row['hire_date'].'</td>';
    $emp_info .= '</tr>';
  }  
  
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>직원 관리 시스템</title>
</head>

<body>
    <h2><a href="index.php">직원 관리 시스템</a> | 가장 오래 근무한 직원 top 10</h2>
    <img src="img1.jpg" alt=img1>
    <br>
    <ul>
        <li><a href="emp_select.php"> 직원 정보 조회</a></li>
        <li><a href="function1.php"> 가장 오래 근무한 직원 top 10</a></li>
        <li><a href="function2.php"> 연도별 입사 및 퇴사 인원</a></li>
        <li><a href="function3.php"> 부서별 직원 수</a></li>
        <li><a href="manager.php"> 관리자 모드</a></li>
    </ul>
    <table border="1">
        <tr>
            <th>직원번호</th>
            <th>first name</th>
            <th>last name</th>
            <th>부서명</th>
            <th>고용일</th>

        </tr>
        <?= $emp_info ?>

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