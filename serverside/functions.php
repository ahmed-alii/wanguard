<?php

require_once 'crud.php';
//date_default_timezone_set("Asia/Karachi");
class Functions
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
        $this->db->connect();
    }

    function CheckEmailExists($email)
    {
        $sql = "SELECT * from users WHERE email='$email'";
        $this->db->sql($sql);
        $res = $this->db->numRows();
        if ($res > 0) {
            return true;
        } else {
            return false;
        }
    }//checkEmail Exist
    function checktokenexist($token)
    {
        $sql = "SELECT * from users WHERE reset_token='$token'";
        $this->db->sql($sql);
        $res = $this->db->numRows();
        // echo $res;
        if ($res > 0) {
            return true;
        } else {
            return false;
        }
    }//checktokenexist
    //generat a random password
    function random_Code()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 6; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $pass1 = implode($pass);//turn the array into a string
        if ($this->checktokenexist($pass1)) {
            random_Code();
        } else {
            return $pass1;
        }


    }//generat a random password
    function sendrecoveremail($email, $pass)
    {
        include_once "../phpmailer/sendmailfunction.php";
        $link = '<a href="https://localhost/sportease/resetpassword?resetpsw='. $pass.'">Reset your Password</a>';
        $to = $email;
        $message = "You have requested to reset the password, please click on below link to reset the password. <br>" . $link . "<br><br> Thank you!";
        $subject = "Password recovery";
        sendemailsmtp($to, $message, $subject);

    }//sendrecoveremail
    function UpdatePassword($userid, $confirmpass, $oldpass)
    {
        if ($this->CheckOldPass($userid, $oldpass)) {
            $hashPassword = md5($confirmpass);

            $sql = "update users set password='$hashPassword' where id='$userid'";
            if ($this->db->sql($sql)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }//UpdatePassword
    function CheckOldPass($userid, $oldpass)
    {
        $hashPassword = md5($oldpass);
        $sql = "SELECT password from users where id='$userid' and password='$hashPassword'";
        $this->db->sql($sql);
        $res = $this->db->numRows();
        if ($res > 0) {
            return true;
        } else {
            return false;
        }
    }//CheckOldPass
    function getSingleUser($id)
    {
        $sql = "select * from users where id='$id'";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getSingleUser
    function getAllUser()
    {
        $sql = "select * from users where user_type=0 order by id desc ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getAllUser
    function getAllUserByType($user_type){
        $sql = "select * from users where user_type='$user_type' order by id desc ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }
    function getSingleSportCenters($id)
    {

        $sql = "select * from sport_centers where sid='$id' ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
//        echo $this->db->getSql();
    }//getSingleSportCenters

    function getAllSportCenters()
    {
        $sql = "select * from sport_centers order by sid desc  ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getAllSportCenters
    function getMySportCenters($user_id)
    {
        $sql = "select * from sport_centers where `user_id`='$user_id' order by sid desc  ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getMySportCenters

    function getSearchedSportCenters($where)
    {
        $sql = "select * from sport_centers where $where order by sid desc  ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getSearchedSportCenters

    function getAllGroundsBySportCenter($id)
    {
        $sql = "select * from grounds where sport_center_id='$id' order by gid desc ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getAllGroundsBySportCenter
    function getSearchedGroundsBySportCenter($where)
    {
        $sql = "select * from grounds where $where order by gid desc ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getSearchedGroundsBySportCenter
    function getSingleGrounds($ground_id)
    {
        $sql = "select * from grounds where gid='$ground_id'";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getSingleGrounds
    function getAllGrounds()
    {
        $sql = "select * from grounds order by gid desc ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getAllGrounds

    function getAllBookings()
    {
        $sql = "SELECT u.name as name, u.email as email,u.phone as phone, u.image_path as image, g.photo as ground_image, g.name as ground_name, g.location as ground_location, g.gid as gid, s.name as sport_center_name , b.* FROM users u INNER JOIN bookings b ON u.id = b.customer_id INNER JOIN grounds g ON g.gid = b.ground_id INNER JOIN sport_centers s ON s.sid = b.sport_center_id ORDER BY b.bid desc ";

        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getAllBookings
    function getAllBookingsByStatus($status)
    {
        $sql = "SELECT u.name as name, u.email as email,u.phone as phone, u.image_path as image, g.photo as ground_image, g.name as ground_name, g.location as ground_location, g.gid as gid, s.name as sport_center_name , b.* FROM users u INNER JOIN bookings b ON u.id = b.customer_id INNER JOIN grounds g ON g.gid = b.ground_id INNER JOIN sport_centers s ON s.sid = b.sport_center_id where b.status='$status' ORDER BY b.bid desc ";

        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getAllBookingsByStatus

    function getMyBookingsByStatus($status,$user_id,$user_type)
    {
        if($user_type==2){
            $column_name='s.user_id';
        }else{
            $column_name='b.customer_id';
        }
        $sql = "SELECT u.name as name, u.email as email,u.phone as phone, u.image_path as image, g.photo as ground_image, g.name as ground_name, g.location as ground_location, g.gid as gid, s.name as sport_center_name , b.* FROM users u INNER JOIN bookings b ON u.id = b.customer_id INNER JOIN grounds g ON g.gid = b.ground_id INNER JOIN sport_centers s ON s.sid = b.sport_center_id where b.status='$status' and $column_name='$user_id' ORDER BY b.bid desc ";

        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getMyBookingsByStatus

    function getAllMyBookings($user_id,$user_type)
    {
        if($user_type==2){
            $column_name='s.user_id';
        }else{
            $column_name='b.customer_id';
        }
        $sql = "SELECT u.name as name, u.email as email,u.phone as phone, u.image_path as image, g.photo as ground_image, g.name as ground_name, g.location as ground_location, g.gid as gid, s.name as sport_center_name , b.* FROM users u INNER JOIN bookings b ON u.id = b.customer_id INNER JOIN grounds g ON g.gid = b.ground_id INNER JOIN sport_centers s ON s.sid = b.sport_center_id where  $column_name='$user_id' ORDER BY b.bid desc ";

        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
//        echo $this->db->getSql();

    }//getAllMyBookings

    function getBookingsByStatus($status)
    {
        $sql = "SELECT u.name as name, u.email as email,u.phone as phone, u.image_path as image, g.photo as ground_image, g.name as ground_name, g.location as ground_location, g.gid as gid, s.name as sport_center_name , b.* FROM users u INNER JOIN bookings b ON u.id = b.customer_id INNER JOIN grounds g ON g.gid = b.ground_id INNER JOIN sport_centers s ON s.sid = b.sport_center_id where b.status='$status'ORDER BY b.bid desc ";

        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getBookingsByStatus
    function getSingleBooking($booking_id)
    {
        $sql = "SELECT u.name as name, u.email as email,u.phone as phone, u.image_path as image, g.photo as ground_image, g.name as ground_name, g.location as ground_location, g.gid as gid, s.name as sport_center_name , b.* FROM users u INNER JOIN bookings b ON u.id = b.customer_id INNER JOIN grounds g ON g.gid = b.ground_id INNER JOIN sport_centers s ON s.sid = b.sport_center_id where `bid`='$booking_id' ORDER BY b.bid desc ";

        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getSingleBooking
    function getAllBookingsOfGround($ground_id)
    {
        $sql = "SELECT u.name as name, u.email as email,u.phone as phone, u.image_path as image, g.name as ground_name, g.gid as gid, s.name as sport_center_name , b.* FROM users u INNER JOIN bookings b ON u.id = b.customer_id INNER JOIN grounds g ON g.gid = b.ground_id INNER JOIN sport_centers s ON s.sid = b.sport_center_id where `ground_id`='$ground_id' ORDER BY b.bid desc ";

        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }//getAllBookingsOfGround

    function checkBookingSlots($date){
        $sql = "select * from booking_slots where booking_date='$date'";
        if($this->db->sql($sql)){
            return $this->db->getResult();
        }
//        echo $this->db->getSql();
    }//checkBookingSlots

}//class
