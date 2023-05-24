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

//Signup
if ($func == 1) {

    $name = htmlspecialchars(stripslashes($_POST['name']));
    $name = $db->escapeString($name);

    $email = htmlspecialchars(stripslashes($_POST['email']));
    $email = $db->escapeString($email);

    $user_type = htmlspecialchars(stripslashes($_POST['user_type']));
    $user_type = $db->escapeString($user_type);

    $password = htmlspecialchars(stripslashes($_POST['password']));
    $password = $db->escapeString($password);
    $hashpass = md5($password);

//    $user_type=3;
//
//    if((isset($_SESSION['user_id']))&&($_SESSION['user_type']==1)){
//        $user_type=2;
//    }


    $sql = "insert into users (`user_type`,`name`,`email`,`password`,`create_date`) values ('$user_type','$name','$email','$hashpass','$create_date')";

    if ($db->sql($sql)) {
//        $Functions->newSignupEmail($business_name);

        $insert_id=$db->insert_id();
//        also set the session
        $sql = "SELECT * FROM users WHERE id='$insert_id' ";
        if ($db->sql($sql)) {
            $result = $db->getResult();
            if (!empty($result)) {
                foreach ($result as $row) {
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['user_type']=$row['user_type'];
                }
            }else{
                echo 'false';
            }//else
        }//if

        echo "true";
    } else {
        echo "false";
    }
//echo $db->getSql();
} //1
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
//Add supplier
else if($func == 10) {

    $booking_price = htmlspecialchars(stripslashes($_POST['booking_price']));
    $booking_price = $db->escapeString($booking_price);

    $name = htmlspecialchars(stripslashes($_POST['name']));
    $name = $db->escapeString($name);

    $location = htmlspecialchars(stripslashes($_POST['location']));
    $location = $db->escapeString($location);

    $has_a_store = htmlspecialchars(stripslashes($_POST['has_a_store']));
    $has_a_store = $db->escapeString($has_a_store);

    $parking = htmlspecialchars(stripslashes($_POST['parking']));
    $parking = $db->escapeString($parking);

    $description = htmlspecialchars(stripslashes($_POST['description']));
    $description = $db->escapeString($description);

    $sport_center_id = htmlspecialchars(stripslashes($_POST['sport_center_id']));
    $sport_center_id = $db->escapeString($sport_center_id);


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


    $sql = "insert into grounds (`booking_price`,`sport_center_id`,`name`,`location`,`has_a_store`,`parking`,`description`,`photo`,created_date) 
                      values ('$booking_price','$sport_center_id','$name','$location','$has_a_store','$parking','$description','$upload_to','$create_date')";

    if($db->sql($sql)){
        echo "true";
    }
    else {
        echo "false";
    }
}//10
//Update grounds
else if ($func == 11) {

    $booking_price = htmlspecialchars(stripslashes($_POST['booking_price']));
    $booking_price = $db->escapeString($booking_price);

    $name = htmlspecialchars(stripslashes($_POST['name']));
    $name = $db->escapeString($name);

    $location = htmlspecialchars(stripslashes($_POST['location']));
    $location = $db->escapeString($location);

    $has_a_store = htmlspecialchars(stripslashes($_POST['has_a_store']));
    $has_a_store = $db->escapeString($has_a_store);

    $parking = htmlspecialchars(stripslashes($_POST['parking']));
    $parking = $db->escapeString($parking);

    $description = htmlspecialchars(stripslashes($_POST['description']));
    $description = $db->escapeString($description);

    $ground_id = htmlspecialchars(stripslashes($_POST['ground_id']));
    $ground_id = $db->escapeString($ground_id);


    if(!empty($_FILES['image'])){
        $image=$_FILES['image'];
        $filename=$image['name'];
        $file_tmp=$image['tmp_name'];
        $target="../uploads/";
        $timestamp=time();
        $file=$timestamp.'-'.$filename;
        $upload_to=$target.$file;
        move_uploaded_file($file_tmp,$upload_to);

        $sql = "update  grounds set `booking_price`='$booking_price',`name`='$name',`location`='$location',`has_a_store`='$has_a_store',`parking`='$parking',`description`='$description',`photo`='$upload_to' where `gid`='$ground_id' ";

    }else{
        $upload_to="";
        $sql = "update   grounds set `booking_price`='$booking_price',`name`='$name',`location`='$location',`has_a_store`='$has_a_store',`parking`='$parking',`description`='$description' where `gid`='$ground_id' ";

    }



    if($db->sql($sql)){
        echo "true";
    }
    else {
        echo "false";
    }
}//11
//Delete ground
else if ($func ==12) {

    $ground_id = htmlspecialchars(stripslashes($_POST['ground_id']));
    $ground_id = $db->escapeString($ground_id);

    $sql=" delete from grounds where gid= '$ground_id'";

    if ($db->sql($sql)) {

        echo "true";
    }
    else {
        echo "false";
    }
}//12
//Add New Booking
else if($func == 13) {

    $sport_center_id = htmlspecialchars(stripslashes($_POST['sport_center_id']));
    $sport_center_id = $db->escapeString($sport_center_id);

    $ground_id = htmlspecialchars(stripslashes($_POST['ground_id']));
    $ground_id = $db->escapeString($ground_id);

    $customer_id = htmlspecialchars(stripslashes($_POST['customer_id']));
    $customer_id = $db->escapeString($customer_id);

    $booking_date = htmlspecialchars(stripslashes($_POST['booking_date']));
    $booking_date = $db->escapeString($booking_date);

    $time_slot = htmlspecialchars(stripslashes($_POST['time_slot1']));
    $time_slot = $db->escapeString($time_slot);

    $total_payment = htmlspecialchars(stripslashes($_POST['total_payment']));
    $total_payment = $db->escapeString($total_payment);

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

    $sql = "insert into bookings (`sport_center_id`,`ground_id`,`customer_id`,`time_slot`,`booking_date`,`total_payment`,`receipt`,created_date) 
                      values ('$sport_center_id','$ground_id','$customer_id','$time_slot','$booking_date','$total_payment','$upload_to','$create_date')";

    if($db->sql($sql)){
        echo "true";
        $booking_date=date('Y-m-d',strtotime($booking_date));

        $check_date_available=$Functions->checkBookingSlots($booking_date);
        if(count($check_date_available)>0){
            $insert_id=$check_date_available[0]['id'];
        }else{
            $sql = "insert into booking_slots (`booking_date`) values ('$booking_date') ";
            $db->sql($sql);

            $insert_id=$db->insert_id();
        }

        $time_slots=explode(',',$time_slot);

        foreach ($time_slots as $time_slot){

            if($time_slot=='8:00-9:00'){

                $sql = "update booking_slots set slot_1='1' where id='$insert_id' ";
            }else if ($time_slot=='9:00-10:00'){
                $sql = "update booking_slots set slot_2='1' where id='$insert_id' ";
            }else if($time_slot=='10:00-11:00'){
                $sql = "update booking_slots set slot_3='1' where id='$insert_id' ";
            }else if($time_slot=='11:00-12:00'){
                $sql = "update booking_slots set slot_4='1' where id='$insert_id' ";
            }else if($time_slot=='12:00-1:00'){
                $sql = "update booking_slots set slot_5='1' where id='$insert_id' ";
            }else if($time_slot=='1:00-2:00'){
                $sql = "update booking_slots set slot_6='1' where id='$insert_id' ";
            }else if($time_slot=='2:00-3:00'){
                $sql = "update booking_slots set slot_7='1' where id='$insert_id' ";
            }else if($time_slot=='3:00-4:00'){
                $sql = "update booking_slots set slot_8='1' where id='$insert_id' ";
            }else if($time_slot=='4:00-5:00'){
                $sql = "update booking_slots set slot_9='1' where id='$insert_id' ";
            }

            $db->sql($sql);
        }

    }
    else {
        echo "false";
    }

}//13
//Approve Booking
else if ($func == 14) {

    $booking_id = htmlspecialchars(stripslashes($_POST['booking_id']));
    $booking_id = $db->escapeString($booking_id);

    $sql = "update bookings set `status`=1 where bid='$booking_id'";

    if($db->sql($sql)){
        echo "true";
    }
    else {
        echo "false";
    }

}//14
//Jeject Booking
else if ($func ==15) {

    $booking_id = htmlspecialchars(stripslashes($_POST['booking_id']));
    $booking_id = $db->escapeString($booking_id);

    $sql = "update bookings set `status`=2 where bid='$booking_id'";

    if($db->sql($sql)){
        echo "true";
    }
    else {
        echo "false";
    }

}//15
//Delete Booking
else if($func == 16) {

    $booking_id = htmlspecialchars(stripslashes($_POST['booking_id']));
    $booking_id = $db->escapeString($booking_id);

    $sql = "delete from bookings  where bid='$booking_id'";

    if($db->sql($sql)){
        echo "true";
    }
    else {
        echo "false";
    }

}//16
//Update bank
else if ($func == 17) {

    $bank_id = htmlspecialchars(stripslashes($_POST['bank_id']));
    $bank_id = $db->escapeString($bank_id);

    $name = htmlspecialchars(stripslashes($_POST['name']));
    $name = $db->escapeString($name);

    $bank_code = htmlspecialchars(stripslashes($_POST['bank_code']));
    $bank_code = $db->escapeString($bank_code);

    $address = htmlspecialchars(stripslashes($_POST['address']));
    $address = $db->escapeString($address);

    $account_number = htmlspecialchars(stripslashes($_POST['account_number']));
    $account_number = $db->escapeString($account_number);

    $notes = htmlspecialchars(stripslashes($_POST['notes']));
    $notes = $db->escapeString($notes);

    $sql = "update banks set `name`='$name',`bank_code`='$bank_code',`account_number`='$account_number',`address`='$address',`notes`='$notes',`updated_date`='$create_date' where id='$bank_id'";

    if($db->sql($sql)){
        echo "true";
    }
    else {
        echo "false";
    }

}//17
//Delete bank
else if ($func ==18) {

    $bank_id = htmlspecialchars(stripslashes($_POST['bank_id']));
    $bank_id = $db->escapeString($bank_id);

    $sql=" delete from banks where id= '$bank_id'";

    if ($db->sql($sql)) {

        echo "true";
    }
    else {
        echo "false";
    }
}//18
//select time slot
else if($func==19){

    $sdate=htmlspecialchars(stripslashes($_POST['servicedate']));
//    $new_date=explode('/',$sdate);
//    $service_date=$new_date[2].'-'.$new_date[0].'-'.$new_date[1];

    $service_date=date('Y-m-d',strtotime($sdate));

    $check=$Functions->checkBookingSlots($service_date);
    echo json_encode($check);
}
//Update bank
else if ($func == 20) {

    $tank_lari_id = htmlspecialchars(stripslashes($_POST['tank_lari_id']));
    $tank_lari_id = $db->escapeString($tank_lari_id);

    $lari_number = htmlspecialchars(stripslashes($_POST['lari_number']));
    $lari_number = $db->escapeString($lari_number);

    $driver_name = htmlspecialchars(stripslashes($_POST['driver_name']));
    $driver_name = $db->escapeString($driver_name);

    $phone = htmlspecialchars(stripslashes($_POST['phone']));
    $phone = $db->escapeString($phone);

    $route_from = htmlspecialchars(stripslashes($_POST['route_from']));
    $route_from = $db->escapeString($route_from);

    $route_to = htmlspecialchars(stripslashes($_POST['route_to']));
    $route_to = $db->escapeString($route_to);

    $storage_capacity = htmlspecialchars(stripslashes($_POST['storage_capacity']));
    $storage_capacity = $db->escapeString($storage_capacity);

    $no_of_chambers = htmlspecialchars(stripslashes($_POST['no_of_chambers']));
    $no_of_chambers = $db->escapeString($no_of_chambers);

    $notes = htmlspecialchars(stripslashes($_POST['notes']));
    $notes = $db->escapeString($notes);

    $sql = "update tank_lari set `lari_number`='$lari_number',`driver_name`='$driver_name',`route_from`='$route_from',`phone`='$phone',`route_to`='$route_to',`storage_capacity`='$storage_capacity',`no_of_chambers`='$no_of_chambers',`notes`='$notes',`updated_date`='$create_date' where id='$tank_lari_id'";

    if($db->sql($sql)){
        echo "true";
    }
    else {
        echo "false";
    }

}//20
//Delete bank
else if ($func ==21) {

    $tank_lari_id = htmlspecialchars(stripslashes($_POST['tank_lari_id']));
    $tank_lari_id = $db->escapeString($tank_lari_id);

    $sql=" delete from tank_lari where id= '$tank_lari_id'";

    if ($db->sql($sql)) {

        echo "true";
    }
    else {
        echo "false";
    }
}//21
//Add Employee
else if($func == 22) {

    $name = htmlspecialchars(stripslashes($_POST['name']));
    $name = $db->escapeString($name);

    $email = htmlspecialchars(stripslashes($_POST['email']));
    $email = $db->escapeString($email);

    $phone = htmlspecialchars(stripslashes($_POST['phone']));
    $phone = $db->escapeString($phone);

    $address = htmlspecialchars(stripslashes($_POST['address']));
    $address = $db->escapeString($address);

    $tab_access = htmlspecialchars(stripslashes($_POST['tab_access']));
    $tab_access = $db->escapeString($tab_access);

    $bank_account_number = htmlspecialchars(stripslashes($_POST['bank_account_number']));
    $bank_account_number = $db->escapeString($bank_account_number);

    $notes = htmlspecialchars(stripslashes($_POST['notes']));
    $notes = $db->escapeString($notes);

    $password = htmlspecialchars(stripslashes($_POST['password']));
    $password = $db->escapeString($password);
    $pass=md5($password);

    if ($Functions->CheckEmailExists($email)) {
        echo 'email-exist';
        return;
    }

    $sql = "insert into users (`name`,`email`,`phone`,`tab_access`,`bank_account_number`,`address`,`notes`,`password`,create_date) 
                      values ('$name','$email','$phone','$tab_access','$bank_account_number','$address','$notes','$pass','$create_date')";

    if($db->sql($sql)){
        echo "true";
    }
    else {
        echo "false";
    }

}//22
//Update Employee
else if($func == 23) {

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

}//23
//delete User
else if($func == 24) {

    $user_id = htmlspecialchars(stripslashes($_POST['user_id']));
    $user_id = $db->escapeString($user_id);

    $sql = "delete from users where id ='$user_id' ";

    if($db->sql($sql)){
        echo "true";

        $sql = "delete from sport_centers where user_id ='$user_id' ";
        $db->sql($sql);

    }
    else {
        echo "false";
    }

}//24
//block User
else if ($func == 25) {

    $user_id = htmlspecialchars(stripslashes($_POST['user_id']));
    $user_id = $db->escapeString($user_id);

    $sql = "update users set status=0 where id='$user_id'";
    if ($db->sql($sql)) {
        echo "true";
    } else {
        echo "false";
    }
} //25
//Activate User
else if ($func == 26) {

    $user_id = htmlspecialchars(stripslashes($_POST['user_id']));
    $user_id = $db->escapeString($user_id);

    $sql = "update users set status=1 where id='$user_id'";
    if ($db->sql($sql)) {

        echo "true";
    }
    else {
        echo "false";
    }
}//26
//Remove profile image
else if ($func == 27) {

    $user_id = htmlspecialchars(stripslashes($_POST['user_id']));
    $user_id = $db->escapeString($user_id);
    $path="";
    $sql = "update users set image_path='$path' where id='$user_id'";
    if ($db->sql($sql)) {

        echo "true";
    }
    else {
        echo "false";
    }
}//27

?>