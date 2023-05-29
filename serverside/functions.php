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
        $link = '<a href="https://www.vwbagency.com/resetpassword?resetpsw='. $pass.'">Reset your Password</a>';
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

    function getAllEvents(){
        $sql = "select * from events order by id desc ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }
    function getSingleEvent($id){
        $sql = "select * from events where id='$id'";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }

    function getAllTeamMembers(){
        $sql = "select * from team_members order by id desc ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }
    function getSingleTeamMember($id){
        $sql = "select * from team_members where id='$id'";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }
    function getTeamMemberByLevel($level){
        $sql = "select * from team_members where `level`='$level'";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }



}//class
