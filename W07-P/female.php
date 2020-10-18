<?php
  $link = mysqli_connect('localhost', 'admin', 'admin', 'employees');
  $query = "SELECT dept_name, count(*)
                from dept_emp de
                inner join departments d on d.dept_no=de.dept_no
                inner join employees e on e.emp_no = de.emp_no
                where de.to_date='9999-01-01' and e.gender='F'
                group by dept_name
                order by count(*) 
                desc ";

  $result = mysqli_query($link, $query);  
  $emp_info = '';
  while($row = mysqli_fetch_array($result)) {
    $emp_info .= '<tr>';
    $emp_info .= '<td>'.$row['dept_name'].'</td>';
    $emp_info .= '<td>'.$row['count(*)'].'</td>';
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
    <h2><a href="index.php">직원 관리 시스템</a> | 부서별 여직원 수</h2>
    <table border="1">
        <tr>
            <th>부서명</th>
            <th>여직원 수</th>

        </tr>
        <?= $emp_info ?>

    </table>
</body>

</html>