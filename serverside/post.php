<?php

if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {

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
$create_date = date('Y-m-d H:i:s');
//Signup
if ($func == 1) {

    $email = htmlspecialchars(stripslashes($_POST['email']));
    $email = $db->escapeString($email);

    $password = htmlspecialchars(stripslashes($_POST['password']));
    $password = $db->escapeString($password);
    $hashpass = md5($password);

    $f_name = htmlspecialchars(stripslashes($_POST['f_name']));
    $f_name = $db->escapeString($f_name);

    $l_name = htmlspecialchars(stripslashes($_POST['l_name']));
    $l_name = $db->escapeString($l_name);

    $agent_code = htmlspecialchars(stripslashes($_POST['agent_code']));
    $agent_code = $db->escapeString($agent_code);

    $phone_no = htmlspecialchars(stripslashes($_POST['phone_no']));
    $phone_no = $db->escapeString($phone_no);

    $business_partner = htmlspecialchars(stripslashes($_POST['business_partner']));
    $business_partner = $db->escapeString($business_partner);

    $us_states = htmlspecialchars(stripslashes($_POST['us_states']));
    $us_states = $db->escapeString($us_states);

    if (!empty($_FILES['image'])) {
        $image = $_FILES['image'];
        $filename = $image['name'];
        $file_tmp = $image['tmp_name'];
        $target = "../uploads/profile/";
        $timestamp = time();
        $file = $timestamp . '-' . $filename;
        $upload_to = $target . $file;
        move_uploaded_file($file_tmp, $upload_to);
    } else {
        $upload_to = "";
    }

    if ($Functions->CheckEmailExists($email)) {
        echo 'email-exist';
        return;
    }

    $sql = "INSERT INTO `users`(`fname`, `lname`, `agent_code`, `email`, `phone`, `business_patner`, `us_states`, `password`, `image_path` , `create_date`) VALUES('$f_name','$l_name','$agent_code','$email','$phone_no','$business_partner','$us_states','$hashpass','$upload_to')";

    if ($db->sql($sql)) {
        echo "true";
//        $Functions->NewSignupEmail();
    } else {
        echo "false";
    }

}//1
//Update Profile
if ($func == 1.1) {

    $user_id = htmlspecialchars(stripslashes($_POST['user_id']));
    $user_id = $db->escapeString($user_id);

    $name = htmlspecialchars(stripslashes($_POST['name']));
    $name = $db->escapeString($name);

    $email = htmlspecialchars(stripslashes($_POST['email']));
    $email = $db->escapeString($email);

//    $phone = htmlspecialchars(stripslashes($_POST['phone']));
//    $phone = $db->escapeString($phone);
//
//    $address = htmlspecialchars(stripslashes($_POST['address']));
//    $address = $db->escapeString($address);
//
//
//    $notes = htmlspecialchars(stripslashes($_POST['notes']));
//    $notes = $db->escapeString($notes);

    $sql = "update users set `name`='$name',`email`='$email',`updated_date`='$create_date' where id='$user_id' ";

    if ($db->sql($sql)) {
        echo "true";
    } else {
        echo "false";
    }

}//1.1
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
                    $_SESSION['email'] = $row['email'];
                    echo "true";
                } else {
                    echo "block";
                }
            }
        } else {
            echo 'false';
        }//else
    }//outerif
} //2
//Send recover password email
else if ($func == 3) {

    $email = htmlspecialchars(stripslashes($_POST['email']));
    $email = $db->escapeString($email);

    if (!$Functions->CheckEmailExists($email)) {
        echo 'not-exist';

    } else {

        $pass = $Functions->random_Code();
        $sql = "UPDATE `users` SET `reset_token`='$pass' WHERE email='$email'";

        if ($db->sql($sql)) {
            $Functions->sendrecoveremail($email, $pass);
            echo "true";

        } else {
            echo "false";
        }
    }

}//3
//recover password
else if ($func == 4) {

    $password = htmlspecialchars(stripslashes($_POST['password']));
    $password = $db->escapeString($password);
    $password1 = md5($password);

    $reset_token = htmlspecialchars(stripslashes($_POST['reset_code']));
    $reset_token = $db->escapeString($reset_token);

    $sql = "SELECT * from users WHERE reset_token='$reset_token'";
    $db->sql($sql);
    $c = count($db->getResult());
    if ($c != 1) {
        echo "token-not-found";

    } else {
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
else if ($func == 5) {
    $oldpass = htmlspecialchars(stripslashes($_POST['oldpass']));
    $oldpass = $db->escapeString($oldpass);

    $newpass = htmlspecialchars(stripslashes($_POST['newpass']));
    $newpass = $db->escapeString($newpass);

    $userId = $_SESSION['user_id'];

    if (!empty($oldpass) && !empty($newpass)) {

        if ($Functions->UpdatePassword($userId, $newpass, $oldpass)) {
            echo "true";
        } else {
            echo "false";
        }
    }
}//5
//update Profile Photo
else if ($func == 6) {
    $user_id = htmlspecialchars(stripslashes($_POST['user_id']));
    $user_id = $db->escapeString($user_id);

    if (!empty($_FILES['image'])) {
        $image = $_FILES['image'];
        $filename = $image['name'];
        $file_tmp = $image['tmp_name'];
        $target = "../uploads/profile/";
        $timestamp = time();
        $file = $timestamp . '-' . $filename;
        $upload_to = $target . $file;
        move_uploaded_file($file_tmp, $upload_to);
    } else {
        $upload_to = "";
    }

    $sql = "update users set `image_path` ='$upload_to' where id='$user_id'";

    if ($db->sql($sql)) {
        echo "true";
    } else {
        echo "false";
    }
//    echo $db->getSql();
}//6
//Add Event
else if ($func == 7) {

    $name = htmlspecialchars(stripslashes($_POST['name']));
    $name = $db->escapeString($name);

    $description = htmlspecialchars(stripslashes($_POST['description']));
    $description = $db->escapeString($description);

    $event_link = htmlspecialchars(stripslashes($_POST['event_link']));
    $event_link = $db->escapeString($event_link);

    $location = htmlspecialchars(stripslashes($_POST['location']));
    $location = $db->escapeString($location);

    $date = htmlspecialchars(stripslashes($_POST['date']));
    $date = $db->escapeString($date);

    $time = htmlspecialchars(stripslashes($_POST['time']));
    $time = $db->escapeString($time);


    $sql = "insert into events (`event_link`,`name`,`location`,`date`,`time`,`description`,`created_date`) 
                      values ('$event_link','$name','$location','$date','$time','$description','$create_date')";

    if ($db->sql($sql)) {
        echo "true";
    } else {
        echo "false";
    }

}//7
//Update Event
else if ($func == 8) {

    $event_id = htmlspecialchars(stripslashes($_POST['event_id']));
    $event_id = $db->escapeString($event_id);

    $name = htmlspecialchars(stripslashes($_POST['name']));
    $name = $db->escapeString($name);

    $event_link = htmlspecialchars(stripslashes($_POST['event_link']));
    $event_link = $db->escapeString($event_link);

    $description = htmlspecialchars(stripslashes($_POST['description']));
    $description = $db->escapeString($description);

    $location = htmlspecialchars(stripslashes($_POST['location']));
    $location = $db->escapeString($location);

    $date = htmlspecialchars(stripslashes($_POST['date']));
    $date = $db->escapeString($date);

    $time = htmlspecialchars(stripslashes($_POST['time']));
    $time = $db->escapeString($time);


    $sql = "update events set `event_link`='$event_link',`name`='$name',`location`='$location',`date`='$date',`time`='$time',`description`='$description',`updated_date`='$create_date' where id='$event_id'";

    if ($db->sql($sql)) {
        echo "true";
    } else {
        echo "false";
    }

}//8
//Delete Event
else if ($func == 9) {

    $event_id = htmlspecialchars(stripslashes($_POST['event_id']));
    $event_id = $db->escapeString($event_id);

    $sql = " delete from events where id= '$event_id'";

    if ($db->sql($sql)) {
        echo "true";
    } else {
        echo "false";
    }
}//9
//Add team member
else if ($func == 10) {

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

    if (!empty($_FILES['image'])) {
        $image = $_FILES['image'];
        $filename = $image['name'];
        $file_tmp = $image['tmp_name'];
        $target = "../uploads/";
        $timestamp = time();
        $file = $timestamp . '-' . $filename;
        $upload_to = $target . $file;
        move_uploaded_file($file_tmp, $upload_to);
    } else {
        $upload_to = "";
    }


    $sql = "insert into team_members (`rank`,`appointment_link`,`name`,`level`,`department`,`earning`,`youtube_link`,`image_path`,created_date) 
                      values ('$rank','$appointment_link','$name','$level','$department','$earning','$youtube_link','$upload_to','$create_date')";

    if ($db->sql($sql)) {
        echo "true";
    } else {
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


    if (!empty($_FILES['image'])) {
        $image = $_FILES['image'];
        $filename = $image['name'];
        $file_tmp = $image['tmp_name'];
        $target = "../uploads/";
        $timestamp = time();
        $file = $timestamp . '-' . $filename;
        $upload_to = $target . $file;
        move_uploaded_file($file_tmp, $upload_to);

        $sql = "update team_members set `rank`='$rank',`appointment_link`='$appointment_link',`name`='$name',`level`='$level',`department`='$department',`earning`='$earning',`youtube_link`='$youtube_link',`image_path`='$upload_to' where `id`='$team_id' ";

    } else {
        $upload_to = "";
        $sql = "update team_members set `rank`='$rank',`appointment_link`='$appointment_link',`name`='$name',`level`='$level',`department`='$department',`earning`='$earning',`youtube_link`='$youtube_link' where `id`='$team_id' ";

    }
    if ($db->sql($sql)) {
        echo "true";
    } else {
        echo "false";
    }

}//11
//Delete team member
else if ($func == 12) {

    $team_id = htmlspecialchars(stripslashes($_POST['team_id']));
    $team_id = $db->escapeString($team_id);

    $sql = " delete from team_members where id= '$team_id'";

    if ($db->sql($sql)) {

        echo "true";
    } else {
        echo "false";
    }
}//12

//Add Bio
else if ($func == 13) {

    $team_id = htmlspecialchars(stripslashes($_POST['team_id']));
    $team_id = $db->escapeString($team_id);

    $bio = $_POST['bio'];
    $bio = str_replace("'", '"', $bio);

    $sql = "update team_members set bio='$bio' where id= '$team_id'";

    if ($db->sql($sql)) {

        echo "true";
    } else {
        echo "false";
    }
}//13
//Show Bio
else if ($func == 14) {

    $team_id = htmlspecialchars(stripslashes($_POST['team_id']));
    $team_id = $db->escapeString($team_id);

    $user = $Functions->getSingleTeamMember($team_id);

    $data = new stdClass();
    if (!empty($user)) {
        $data->status = true;
        $data->bio = $user[0]['bio'];
    } else {
        $data->status = false;
    }
    echo json_encode($data);

}//14

//delete User
else if ($func == 19) {

    $userid = htmlspecialchars(stripslashes($_POST['userid']));
    $userid = $db->escapeString($userid);
    $sql = "delete from users where id ='$userid' ";

    if ($db->sql($sql)) {
        echo "true";
    } else {
        echo "false";
    }

}//15
//blockUser
else if ($func == 20) {
    $id = htmlspecialchars(stripslashes($_POST['id']));
    $id = $db->escapeString($id);
    $sql = "update users set status=0 where id='$id'";
    if ($db->sql($sql)) {
        echo "true";
    } else {
        echo "false";
    }
} //blockUser
//ActiveUser
else if ($func == 21) {
    $id = htmlspecialchars(stripslashes($_POST['id']));
    $id = $db->escapeString($id);
    $sql = "update users set status=1 where id='$id'";
    $user = $Functions->getSingleUser($id);
    if ($db->sql($sql)) {

        echo "true";
        if (!empty($user)) {
            $Functions->ProfileApproveEmail($user[0]['name'], $user[0]['email']);

        }
    } else {
        echo "false";
    }
}//ActiveUser

//Add new_appointment
else if ($func == 22) {

    $appointment_link = htmlspecialchars(stripslashes($_POST['traine_appointment']));
    $appointment_link = $db->escapeString($appointment_link);

    $appointment_type = htmlspecialchars(stripslashes($_POST['appointment_type']));
    $appointment_type = $db->escapeString($appointment_type);

    $who_seeing = htmlspecialchars(stripslashes($_POST['who_seeing']));
    $who_seeing = $db->escapeString($who_seeing);

    $appointment_date = htmlspecialchars(stripslashes($_POST['appointment_date']));
    $appointment_date = $db->escapeString($appointment_date);

    $time = htmlspecialchars(stripslashes($_POST['time']));
    $time = $db->escapeString($time);

    $they_are = htmlspecialchars(stripslashes($_POST['they_are']));
    $they_are = $db->escapeString($they_are);

    $description = htmlspecialchars(stripslashes($_POST['description']));
    $description = $db->escapeString($description);

    $match_up = htmlspecialchars(stripslashes($_POST['match_up']));
    $match_up = $db->escapeString($match_up);

    $sql = "INSERT INTO `new-appointment`(`traine_appointment`, `appointment_type`, `who_seeing`, `appointment_date`, `time` , `they_are`, `description` , `match_up`) 
    VALUES ('$appointment_link','$appointment_type','$who_seeing','$appointment_date','$time','$they_are','$description','$match_up')";

    if ($db->sql($sql)) {

        echo "true";
    } else {
        echo "false";
    }
} //Add new_recruit
else if ($func == 23) {

    $agent_id = htmlspecialchars(stripslashes($_POST['agent_id']));
    $agent_id = $db->escapeString($agent_id);

    $start_date = htmlspecialchars(stripslashes($_POST['start_date']));
    $start_date = $db->escapeString($start_date);

    $f_name = htmlspecialchars(stripslashes($_POST['f_name']));
    $f_name = $db->escapeString($f_name);

    $l_name = htmlspecialchars(stripslashes($_POST['l_name']));
    $l_name = $db->escapeString($l_name);

    $resident_state = htmlspecialchars(stripslashes($_POST['resident_state']));
    $resident_state = $db->escapeString($resident_state);

    $recruiter = htmlspecialchars(stripslashes($_POST['recruiter']));
    $recruiter = $db->escapeString($recruiter);

    $direct_MD = htmlspecialchars(stripslashes($_POST['direct_MD']));
    $direct_MD = $db->escapeString($direct_MD);

    $direct_SMD = htmlspecialchars(stripslashes($_POST['direct_SMD']));
    $direct_SMD = $db->escapeString($direct_SMD);

    $licensed = htmlspecialchars(stripslashes($_POST['licensed']));
    $licensed = $db->escapeString($licensed);

    $contact_no = htmlspecialchars(stripslashes($_POST['contact_no']));
    $contact_no = $db->escapeString($contact_no);

    $birthdate = htmlspecialchars(stripslashes($_POST['birthdate']));
    $birthdate = $db->escapeString($birthdate);

    $email_address = htmlspecialchars(stripslashes($_POST['email_address']));
    $email_address = $db->escapeString($email_address);

    $home_address = htmlspecialchars(stripslashes($_POST['home_address']));
    $home_address = $db->escapeString($home_address);

    $sql = "INSERT INTO `new-recruit`(`agent_id`, `start_date` , `f_name`, `l-name`, `resident_state`, `recruiter`, `direct_MD`, `direct_SMD`, `licensed`, `contact_no`, `birthdate`, `email_address`) VALUES ('$agent_id','$f_name','$l_name','$resident_state','$recruiter','$direct_MD','$direct_SMD','$licensed','$contact_no','$birthdate','$email_address','$home_address')";

    if ($db->sql($sql)) {

        echo "true";
    } else {
        echo "false";
    }
} //Add new_recruit
else if ($func == 24) {

    $f_name = htmlspecialchars(stripslashes($_POST['f_name']));
    $f_name = $db->escapeString($f_name);

    $l_name = htmlspecialchars(stripslashes($_POST['l_name']));
    $l_name = $db->escapeString($l_name);

    $policy_name = htmlspecialchars(stripslashes($_POST['policy_name']));
    $policy_name = $db->escapeString($policy_name);

    $submitted_date = htmlspecialchars(stripslashes($_POST['submitted_date']));
    $submitted_date = $db->escapeString($submitted_date);

    $coverage = htmlspecialchars(stripslashes($_POST['coverage']));
    $coverage = $db->escapeString($coverage);

    $monthly_saving = htmlspecialchars(stripslashes($_POST['monthly_saving']));
    $monthly_saving = $db->escapeString($monthly_saving);

    $estimated_points = htmlspecialchars(stripslashes($_POST['estimated_points']));
    $estimated_points = $db->escapeString($estimated_points);

    $CWA = htmlspecialchars(stripslashes($_POST['CWA']));
    $CWA = $db->escapeString($CWA);

    $trainee = htmlspecialchars(stripslashes($_POST['trainee']));
    $trainee = $db->escapeString($trainee);

    $split_option = htmlspecialchars(stripslashes($_POST['split_option']));
    $split_option = $db->escapeString($split_option);

    $split_agent = htmlspecialchars(stripslashes($_POST['split_agent']));
    $split_agent = $db->escapeString($split_agent);

    $agent_policy = htmlspecialchars(stripslashes($_POST['agent_policy']));
    $agent_policy = $db->escapeString($agent_policy);

    $product = htmlspecialchars(stripslashes($_POST['product']));
    $product = $db->escapeString($product);

    $provider = htmlspecialchars(stripslashes($_POST['provider']));
    $provider = $db->escapeString($provider);

    $med_required = htmlspecialchars(stripslashes($_POST['med_required']));
    $med_required = $db->escapeString($med_required);

    $contact_no = htmlspecialchars(stripslashes($_POST['contact_no']));
    $contact_no = $db->escapeString($contact_no);

    $email_address = htmlspecialchars(stripslashes($_POST['email_address']));
    $email_address = $db->escapeString($email_address);

    $sql = "INSERT INTO `new-client`(`f_name`, `l_name`, `policy_name`, `submitted_date`, `coverage`, `monthly_saving`, `estimated_points`, `CWA`, `trainee`, `split_option`, `split_agent`, `agent_policy`, `product`, `provider`, `med_required`, `contact_no`, `email_address`) VALUES ('$f_name','$l_name','$policy_name','$submitted_date','$coverage','$monthly_saving','$estimated_points','$CWA','$trainee','$split_option','$split_agent','$agent_policy','$product','$provider','$med_required','$contact_no','$email_address')";

    if ($db->sql($sql)) {

        echo "true";
    } else {
        echo "false";
    }
} //Add guest
else if ($func == 25) {

    $events = htmlspecialchars(stripslashes($_POST['events']));
    $events = $db->escapeString($events);

    $guest_name = htmlspecialchars(stripslashes($_POST['guest_name']));
    $guest_name = $db->escapeString($guest_name);

    $they_are = htmlspecialchars(stripslashes($_POST['they_are']));
    $they_are = $db->escapeString($they_are);

    $guest_of = htmlspecialchars(stripslashes($_POST['guest_of']));
    $guest_of = $db->escapeString($guest_of);

    $contact_number = htmlspecialchars(stripslashes($_POST['contact_number']));
    $contact_number = $db->escapeString($contact_number);

    $guest_mail = htmlspecialchars(stripslashes($_POST['guest_mail']));
    $guest_mail = $db->escapeString($guest_mail);

    $guest_app_confirm = htmlspecialchars(stripslashes($_POST['guest_app_confirm']));
    $guest_app_confirm = $db->escapeString($guest_app_confirm);

    $sql = "INSERT INTO `add_guest`(`events`, `guest_name`, `they_are`, `guest_of`, `contact_number`, `guest_mail`, `guest_app_confirm`) VALUES ('$events','$guest_name','$they_are','$guest_of','$contact_number','$guest_mail','$guest_app_confirm')";

    if ($db->sql($sql)) {

        echo "true";
    } else {
        echo "false";
    }
}

?>