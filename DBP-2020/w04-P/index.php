<?php
  $link = mysqli_connect("localhost", "root", "rootroot", "dbp");
  $query = "SELECT * FROM chunsim";
  $result = mysqli_query($link, $query);
  $list ='';
/*하이퍼링크를 포함한 리스트 동적으로...*/
while ($row = mysqli_fetch_array($result)) {
    $list = $list."<li><a
  href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
}
/*description의 내용을 보여줌..*/
$article = array(
  'title' => '',
  'description' => '저에 대해 알아보세요!'
);

$update_link = '';
$delete_link ='';
$writer ='';


if (isset($_GET['id'])) {
  $filterd_id = mysqli_real_escape_string($link, $_GET['id']);
    $query = "SELECT * FROM chunsim LEFT JOIN writer ON chunsim.writer_id = writer.id WHERE chunsim.id={$filterd_id}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article['title'] = htmlspecialchars($row['title']);
    $article['description'] = htmlspecialchars($row['description']);
    $article['name'] = htmlspecialchars($row['name']);

    $article['name'] = htmlspecialchars($row['name']);
    $update_link = '<input type= "button" value="수정" onClick="location.href=\'update.php?id='.$_GET['id'].'\'">';
    $delete_link = '
      <form action="process_delete.php" method ="POST">
      <input type="hidden" name="id" value="'.$_GET['id'].'">
      <input type="submit" value="삭제">
      </form>
    ';
    $writer = "<p>by {$article['name']}</p>";
}
 ?>

 <!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <title> CHUNSIM </title>
 </head>
 <body>
   <h1><span style="color:#FFFFFF; background-color:#C0A55A"
     >춘심이를 소개합니다</span></h1>
   <img src="../img/pic1.jpg" width="30%" ><br><br>
   <a href="writer.php">작성자</a><br>

    <ol> <?= $list ?> </ol>
    <input type='button' value='추가' onClick="location.href='create.php'">
    <?=$update_link?>
    <?=$delete_link?>
   <h2> <?= $article['title'] ?> </h2>
   <?= $article['description'] ?>
   <?= $writer ?>

 </body>
 </html>
