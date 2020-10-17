<?php
session_start();
require_once './connect_db.php';




class Login {
    private function checkLogin($login) {
        $conn = OpenCon();
        $query =  mysqli_query($conn, "select * from boombac.users where login = '$login'");
        $query1 = mysqli_fetch_array($query);
        if ($query1 > 0) {
            return true;
        } else {
            return false;
        }
    }

    private function checkPassword($login, $pass) {
        $conn = OpenCon();
        $query = mysqli_query($conn, "select * from boombac.users where login = '$login' and password = '$pass'");
        $row = mysqli_fetch_array($query);
        if ($row['password'] === $pass) {
            return true;
        } else {
            return  false;
        }
    }

    public function Entry($login, $pass) {
        if ($this -> checkLogin($login)) {
            if ($this -> checkPassword($login, $pass)) {
                $_SESSION['login'] = $login;
                header("Location: lk.php");
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}
?>