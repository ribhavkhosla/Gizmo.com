<?php
    if(isset($_POST["signin"]) && $_POST["signin"]=="Login")
    {
        $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=aditya21012");
        $email = $_POST["email"];
        $pswd = $_POST["pswd"];
        $query = "SELECT * FROM user_info";
        $res = pg_query($conn, $query);
        $nameArr = pg_fetch_all_columns($res, pg_field_num($res, 'firstname'));
        $lnameArr = pg_fetch_all_columns($res, pg_field_num($res, 'lastname'));
        $addArr = pg_fetch_all_columns($res, pg_field_num($res, 'address'));
        $phoneArr = pg_fetch_all_columns($res, pg_field_num($res, 'phone'));
        $usrArr = pg_fetch_all_columns($res, pg_field_num($res, 'email'));
        $pswArr = pg_fetch_all_columns($res, pg_field_num($res, 'password'));
        $idArr = pg_fetch_all_columns($res, pg_field_num($res, 'userid'));
        for($i = 0; $i < count($usrArr); $i++)
        {
            if($email == $usrArr[$i] && $pswd == $pswArr[$i])
            {
                session_start();
                $_SESSION['uId'] = $idArr[$i];
                $_SESSION['uname'] = $nameArr[$i];
                $_SESSION['lname'] = $lnameArr[$i];
                $_SESSION['pass'] = $pswArr[$i];
                $_SESSION['phone'] = $phoneArr[$i];
                $_SESSION['address'] = $addArr[$i];
                $_SESSION['email'] = $usrArr[$i];
                header("location: ../html_php/choose.php");
            }
        }
        echo "<script>alert('Invalid User Info. Go back and try again.')</script>";
    }

?>