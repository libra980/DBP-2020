<?php
  $link = mysqli_connect("localhost", "root", "rootroot", "dbp");
  $query = "SELECT * FROM chunsim";
  $result = mysqli_query($link, $query);

/*하이퍼링크를 포함한 리스트 동적으로...*/
while($row = mysqli_fetch_array($result)){
  $list = $list."<li><a
  href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
}
/*description의 내용을 보여줌..*/
$article = array(
  'title' => '춘심이 world',
  'description' => '저에 대해 알아보세요!'
);
if(isset($_GET['id'])){
  $query = "SELECT * FROM chunsim WHERE id={$_GET['id']}";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_array($result);
  $article = array(
    'title' => $row['title'],
    'description' => $row['description']
  );
}
 ?>

 <!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <title> DATABASE </title>
 </head>
 <body>
   <h1><a href="index.php"> <span style="color:#FFFFFF; background-color:#C0A55A" >춘심이를 소개합니다</span> </a></h1>

   <img src="../img/pic2.jpg" width="30%" >
   <ol> <?= $list ?> </ol>
   <form action="process_create.php" method="post">
     <p><input type="text" name="title" placeholder="제"></p>
     <p><textarea name="description" placeholder="내용을 입력하세요"></textarea></p>
     <p><input type="submit"></p>
   </form>

 </body>
 </html>
