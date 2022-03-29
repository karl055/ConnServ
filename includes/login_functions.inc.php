<?php

function emptyInputSignup($fname, $lname, $username, $email, $pwd, $pwdrepeat){
    /* 
    $result; */
    if(empty($fname) || empty($lname) || empty($username) || empty($email) || empty($pwd) || empty($pwdrepeat)){

        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    /* 
    $result; */
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdrepeat){
    /* 
    $result; */
    if($pwd !== $pwdrepeat){

        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function uidExists($connect, $username, $email){
    /* 
    $result; */
    $sql = "SELECT * FROM users WHERE userUid = ? OR userEmail = ?;";

    $stmt = mysqli_stmt_init($connect);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($connect, $fname, $lname, $uid, $email, $pwd){
    /* 
    $result; */
    $sql = "INSERT INTO users (userFirstname, userLastname, userUid, userEmail, userPwd) VALUES (?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($connect);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }



    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $uid, $email, $pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("Location: ../login.php");
    exit();
}

/* LOGIN FUNCTIONS */
function emptyInputLogin($username, $pwd){
    if(empty($username) || empty($pwd)){

        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($connect, $username, $pwd){
    /* $uidExists = uidExists($connect, $username, $username); */

    /* $sql = "SELECT * FROM users WHERE userUid = $username";
    $result = mysqli_query($connect, $sql);

    $uidExist = mysqli_fetch_row($result);

    if($uidExist === false){
        header("Location: ../login.php?error=wronglogin");
        exit();
    }
    
    $pwdHashed = $uidExist['userPwd'];
    $checkPwd = password_verify($pwd, $pwdHashed); */

    $sql = "SELECT * FROM users WHERE userEmail = '$username' and userPwd = '$pwd'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    /* $pwdTrue = $row['active']; */
    

    $count = mysqli_num_rows($result);

    if($count === false){
        header("Location: ../login.php?error=wrong");
        exit();
    }
    else if($count === true){
        session_start();

        $_SESSION["userid"] = $row["userIdentity"];
        $_SESSION["useruid"] = $row["userEmail"];
        header("Location: ../user_profile.php");
        exit();
    }
}