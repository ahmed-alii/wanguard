<?php

if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {

    session_start();
}
//date_default_timezone_set("Asia/Karachi");
include "crud.php";
include "functions.php";
//connect to database
$db = new Database();
$db->connect();
//create functions object
$Functions = new Functions();

$func = $_POST['func'];
$create_date=date('Y-m-d H:i:s');

//Update Profile
if($func == 1) {

    $user_id = htmlspecialchars(stripslashes($_POST['user_id']));
    $user_id = $db->escapeString($user_id);

    $name = htmlspecialchars(stripslashes($_POST['name']));
    $name = $db->escapeString($name);

    $email = htmlspecialchars(stripslashes($_POST['email']));
    $email = $db->escapeString($email);

    $phone = htmlspecialchars(stripslashes($_POST['phone']));
    $phone = $db->escapeString($phone);

    $address = htmlspecialchars(stripslashes($_POST['address']));
    $address = $db->escapeString($address);


    $notes = htmlspecialchars(stripslashes($_POST['notes']));
    $notes = $db->escapeString($notes);

    $sql = "update users set `name`='$name',`phone`='$phone',`address`='$address',`notes`='$notes',`updated_date`='$create_date' where id='$user_id' ";

    if($db->sql($sql)){
        echo "true";
    }
    else {
        echo "false";
    }
    $db->getSql();
}//1
//login
else if ($func == 2) {

    $email = htmlspecialchars(stripslashes($_POST['email']));
    $email = $db->escapeString($email);

    $password = htmlspecialchars(stripslashes($_POST['password']));
    $password = $db->escapeString($password);
    $hashpass = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' and password='$hashpass'";

    if ($db->sql($sql)) {
        $result = $db->getResult();
        if (!empty($result)) {
            foreach ($result as $row) {

                if ($row['status'] == 1) {
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['user_type'] = $row['user_type'];
                    echo "true";
                } else {
                    echo "block";
                }
            }
        }else{
            echo 'false';
        }//else
    }//outerif
} //2
//Send recover password email
else if ($func==3) {

    $email = htmlspecialchars(stripslashes($_POST['email']));
    $email = $db->escapeString($email);

    if (!$Functions->CheckEmailExists($email)) {
        echo 'not-exist';

    }else{

        $pass=$Functions->random_Code();
        $sql = "UPDATE `users` SET `reset_token`='$pass' WHERE email='$email'";

        if ($db->sql($sql)) {
            $Functions->sendrecoveremail($email,$pass);
            echo "true";

        } else {
            echo "false";
        }
    }

}//3
//recover password
else if ($func==4) {

    $password = htmlspecialchars(stripslashes($_POST['password']));
    $password = $db->escapeString($password);
    $password1=md5($password);

    $reset_token = htmlspecialchars(stripslashes($_POST['reset_code']));
    $reset_token = $db->escapeString($reset_token);

    $sql = "SELECT * from users WHERE reset_token='$reset_token'";
    $db->sql($sql);
    $c=count($db->getResult());
    if($c!=1) {
        echo "token-not-found";

    }else{
        $sql = "UPDATE `users` SET `password`='$password1',`reset_token`='' WHERE 
     reset_token='$reset_token'";

        if ($db->sql($sql)) {

            echo "true";

        } else {
            echo "false";
        }

    }
}//4
//update password
else if($func == 5){
    $oldpass = htmlspecialchars(stripslashes($_POST['oldpass']));
    $oldpass = $db->escapeString($oldpass);

    $newpass = htmlspecialchars(stripslashes($_POST['newpass']));
    $newpass = $db->escapeString($newpass);

    $userId=$_SESSION['user_id'];

    if (!empty($oldpass) && !empty($newpass)) {

        if ($Functions->UpdatePassword($userId,$newpass,$oldpass)) {
            echo "true";
        } else {
            echo "false";
        }
    }
}//5
//update Profile Photo
else if($func == 6){
    $user_id = htmlspecialchars(stripslashes($_POST['user_id']));
    $user_id = $db->escapeString($user_id);

    if(!empty($_FILES['image'])){
        $image=$_FILES['image'];
        $filename=$image['name'];
        $file_tmp=$image['tmp_name'];
        $target="../uploads/profile/";
        $timestamp=time();
        $file=$timestamp.'-'.$filename;
        $upload_to=$target.$file;
        move_uploaded_file($file_tmp,$upload_to);
    }else{
        $upload_to="";
    }

    $sql="update users set `image_path` ='$upload_to' where id='$user_id'";

    if ($db->sql($sql)) {
        echo "true";
    } else {
        echo "false";
    }
//    echo $db->getSql();
}//6
//Add Event
else if($func == 7) {

    $name = htmlspecialchars(stripslashes($_POST['name']));
    $name = $db->escapeString($name);

    $description = htmlspecialchars(stripslashes($_POST['description']));
    $description = $db->escapeString($description);

    $location = htmlspecialchars(stripslashes($_POST['location']));
    $location = $db->escapeString($location);

    $date = htmlspecialchars(stripslashes($_POST['date']));
    $date = $db->escapeString($date);

    $time = htmlspecialchars(stripslashes($_POST['time']));
    $time = $db->escapeString($time);


    $sql = "insert into events (`name`,`location`,`date`,`time`,`description`,`created_date`) 
                      values ('$name','$location','$date','$time','$description','$create_date')";

    if($db->sql($sql)){
        echo "true";
    }
    else {
        echo "false";
    }

}//7
//Update Event
else if ($func == 8) {

    $event_id = htmlspecialchars(stripslashes($_POST['event_id']));
    $event_id = $db->escapeString($event_id);

    $name = htmlspecialchars(stripslashes($_POST['name']));
    $name = $db->escapeString($name);

    $description = htmlspecialchars(stripslashes($_POST['description']));
    $description = $db->escapeString($description);

    $location = htmlspecialchars(stripslashes($_POST['location']));
    $location = $db->escapeString($location);

    $date = htmlspecialchars(stripslashes($_POST['date']));
    $date = $db->escapeString($date);

    $time = htmlspecialchars(stripslashes($_POST['time']));
    $time = $db->escapeString($time);


    $sql = "update events set `name`='$name',`location`='$location',`date`='$date',`time`='$time',`description`='$description',`updated_date`='$create_date' ";

    if($db->sql($sql)){
        echo "true";
    }
    else {
        echo "false";
    }

}//8
//Delete Event
else if ($func ==9) {

    $event_id = htmlspecialchars(stripslashes($_POST['event_id']));
    $event_id = $db->escapeString($event_id);

    $sql=" delete from events where id= '$event_id'";

    if ($db->sql($sql)) {
        echo "true";
    } else {
        echo "false";
    }
}//9
//Add team member
else if($func == 10) {

    $name = htmlspecialchars(stripslashes($_POST['name']));
    $name = $db->escapeString($name);

    $level = htmlspecialchars(stripslashes($_POST['level']));
    $level = $db->escapeString($level);

    $department = htmlspecialchars(stripslashes($_POST['department']));
    $department = $db->escapeString($department);

    $earning = htmlspecialchars(stripslashes($_POST['earning']));
    $earning = $db->escapeString($earning);

    $youtube_link = htmlspecialchars(stripslashes($_POST['youtube_link']));
    $youtube_link = $db->escapeString($youtube_link);

    $appointment_link = htmlspecialchars(stripslashes($_POST['appointment_link']));
    $appointment_link = $db->escapeString($appointment_link);

    $rank = htmlspecialchars(stripslashes($_POST['rank']));
    $rank = $db->escapeString($rank);

    if(!empty($_FILES['image'])){
        $image=$_FILES['image'];
        $filename=$image['name'];
        $file_tmp=$image['tmp_name'];
        $target="../uploads/";
        $timestamp=time();
        $file=$timestamp.'-'.$filename;
        $upload_to=$target.$file;
        move_uploaded_file($file_tmp,$upload_to);
    }else{
        $upload_to="";
    }


    $sql = "insert into team_members (`rank`,`appointment_link`,`name`,`level`,`department`,`earning`,`youtube_link`,`image_path`,created_date) 
                      values ('$rank','$appointment_link','$name','$level','$department','$earning','$youtube_link','$upload_to','$create_date')";

    if($db->sql($sql)){
        echo "true";
    }
    else {
        echo "false";
    }
}//10
//Update team member
else if ($func == 11) {

    $appointment_link = htmlspecialchars(stripslashes($_POST['appointment_link']));
    $appointment_link = $db->escapeString($appointment_link);

    $rank = htmlspecialchars(stripslashes($_POST['rank']));
    $rank = $db->escapeString($rank);

    $name = htmlspecialchars(stripslashes($_POST['name']));
    $name = $db->escapeString($name);

    $level = htmlspecialchars(stripslashes($_POST['level']));
    $level = $db->escapeString($level);

    $department = htmlspecialchars(stripslashes($_POST['department']));
    $department = $db->escapeString($department);

    $earning = htmlspecialchars(stripslashes($_POST['earning']));
    $earning = $db->escapeString($earning);

    $youtube_link = htmlspecialchars(stripslashes($_POST['youtube_link']));
    $youtube_link = $db->escapeString($youtube_link);

    $team_id = htmlspecialchars(stripslashes($_POST['team_id']));
    $team_id = $db->escapeString($team_id);


    if(!empty($_FILES['image'])){
        $image=$_FILES['image'];
        $filename=$image['name'];
        $file_tmp=$image['tmp_name'];
        $target="../uploads/";
        $timestamp=time();
        $file=$timestamp.'-'.$filename;
        $upload_to=$target.$file;
        move_uploaded_file($file_tmp,$upload_to);

        $sql = "update team_members set `rank`='$rank',`appointment_link`='$appointment_link',`name`='$name',`level`='$level',`department`='$department',`earning`='$earning',`youtube_link`='$youtube_link',`image_path`='$upload_to' where `id`='$team_id' ";

    }else{
        $upload_to="";
        $sql = "update team_members set `rank`='$rank',`appointment_link`='$appointment_link',`name`='$name',`level`='$level',`department`='$department',`earning`='$earning',`youtube_link`='$youtube_link' where `id`='$team_id' ";

    }
    if($db->sql($sql)){
        echo "true";
    }
    else {
        echo "false";
    }

}//11
//Delete team member
else if ($func ==12) {

    $team_id = htmlspecialchars(stripslashes($_POST['team_id']));
    $team_id = $db->escapeString($team_id);

    $sql=" delete from team_members where id= '$team_id'";

    if ($db->sql($sql)) {

        echo "true";
    }
    else {
        echo "false";
    }
}//12

//Add Bio
else if ($func ==13) {

    $team_id = htmlspecialchars(stripslashes($_POST['team_id']));
    $team_id = $db->escapeString($team_id);

    $bio=$_POST['bio'];
    $bio = str_replace("'",'"',$bio);

    $sql="update team_members set bio='$bio' where id= '$team_id'";

    if ($db->sql($sql)) {

        echo "true";
    }
    else {
        echo "false";
    }
}//13
//Show Bio
else if ($func ==14) {

    $team_id = htmlspecialchars(stripslashes($_POST['team_id']));
    $team_id = $db->escapeString($team_id);

    $user=$Functions->getSingleTeamMember($team_id);

    $data = new stdClass();
    if (!empty($user)) {
        $data->status=true;
        $data->bio=$user[0]['bio'];
    }
    else {
        $data->status=false;
    }
    echo json_encode($data);

}//14
?>