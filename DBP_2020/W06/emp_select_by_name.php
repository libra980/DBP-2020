<?php
    $link = mysqli_connect('localhost', 'admin', 'admin', 'employees');
    $filtered_full_name = mysqli_real_escape_string($link, $_POST['full_name']);
    $exploded = explode(' ', $filtered_full_name);
    $name = array(
        'first_name' => $exploded[0],
        'last_name' => $exploded[1]
    );

    $query = " SELECT * FROM employees 
                WHERE first_name = '{$name['first_name']}' 
                AND last_name = '{$name['last_name']}'
                ORDER BY emp_no 
             ";
             
    $result = mysqli_query($link, $query);


    //print_r($result);  
    //print_r($row);
    $emp_info ='';
    while( $row = mysqli_fetch_array($result) ){
        $emp_info .='<tr>';
        $emp_info .='<td>'.$row['emp_no'].'</td>';
        $emp_info .='<td>'.$row['birth_date'].'</td>';
        $emp_info .='<td>'.$row['first_name'].'</td>';
        $emp_info .='<td>'.$row['last_name'].'</td>';
        $emp_info .='<td>'.$row['gender'].'</td>';
        $emp_info .='<td>'.$row['hire_date'].'</td>';
        $emp_info .='<td><a href="emp_update.php?emp_no='.$row['emp_no'].'">update</a></td>';
        $emp_info .='<td><a href="emp_delete.php?emp_no='.$row['emp_no'].'">delete</a></td>';

        $emp_info .='</tr>';
    
    }


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 직원 관리 시스템 </title>
</head>

<body>
    <h2><a href="index.php"> 직원 관리 시스템</a>|<a href ="emp_select.php">직원 정보 조회 </a>| 이름으로 직원 정보 조회</h2>
    <form action="emp_select_by_name.php" method="POST">
        <label>select by name : </label>
        <input type="text" name="full_name" value="<?=$filtered_full_name ?>" placeholder="Enter the full-name">
        <input type="submit" value="Select all">
    </form> 
    ex) Sachin Tsukuda <br><br>

    <table border="1">
        <tr>
            <th>emp_no</th>
            <th>birth_date</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>gender</th>
            <th>hire_date</th>
            <th>update</th>
            <th>delete</th>

        </tr>
        <?= $emp_info ?>
    </table>
</body>

</html>