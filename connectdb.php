 <?php  $dbcon = mysqli_connect('localhost','root','12345678','logintutorial');

     if (mysqli_connect_errno()){
     echo "ไม่สามารถติดต่อฐานข้อมูล MYSQL ได้". mysqli_connect_error();
     exit;}
       mysqli_set_charset($dbcon , 'utf8');
     ?>