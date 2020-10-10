<?php
require_once 'connect_db.php';
$conn = OpenCon();

$login = $_POST['login'];
$password = $_POST['password'];

$count = mysqli_query($conn, "select * from boombac.users where login = '$login' and password = '$password'");
if (mysqli_num_rows($count) === 0) {
    echo '<div>Вы не зарегистрированы!</div>
            <div>Пройдите авторизацию <a href="index.php">повторно</a> </div>';
} else {
    header("location:lk.php");
}
?>