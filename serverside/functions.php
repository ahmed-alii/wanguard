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
    function ProfileApproveEmail($name,$email){

        include_once "../phpmailer/sendmailfunction.php";
        $link = '<a href="https://www.vwbagency.com/">VANGUARD WEALTH BUILDERS</a>';
        $to = $email;
        $message = "Hi ".$name."! your profile is approved. Now you can login. <br>" . $link . "<br><br> Thank you!";
        $subject = "Profile approved";
        sendemailsmtp($to, $message, $subject);
    }
    function NewSignupEmail(){

        include_once "../phpmailer/sendmailfunction.php";
        $link = '<a href="https://www.vwbagency.com/admin/">VANGUARD WEALTH BUILDERS</a>';
        $to = "ur123meo@gmail.com";
        $message = "A new user signup. please login on ".$link." to approve the profile of this user. <br> Thank you!";
        $subject = "New Signup";
        sendemailsmtp($to, $message, $subject);
    }
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

    function getAllRecruitmetTools(){
        $sql = "select * from recruitment_tool order by id desc ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }

     function getAllsections(){
        $sql = "select * from trainer_sections order by id desc ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }
    function getsectionimages($sectionid){
         $sql = "select * from trainer_images where section_id =  '$sectionid'";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }
    function getAllsectionsImages(){
        $sql = "select tm.id, tm.image_path, ts.main_heading from trainer_images tm join trainer_sections ts on tm.section_id = ts.id";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }

    function getAllClientTools(){
        $sql = "select * from client_tool order by id desc ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }

    function getAllMD(){
        $sql = "select * from `add_md`";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }
    
    function getAllSMD(){
        $sql = "select * from `add_smd`";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }

    function getWelcomeVideoFilePath()
    {
        $sql = "SELECT `video_file` FROM `welcome_page_settings`";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }

    function getRecogVideoPath()
    {
        $sql = "SELECT `video_file` FROM `recognition_video`";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }

    function getAllNewRecruite()
    {
        $sql = "select * from `new-recruit`";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }
    function getAllNewRecruite_count()
    {
        $sql = "select * from `new-recruit` where status=1";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }
    function getAllFamilyClient()
    {
        $sql = "select * from `new-client` ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }
function getDashboardStats(){
    $sql = "select * from `dashboard_stats`";
    if ($this->db->sql($sql)) {
        return $this->db->getResult();
    }
}
    function getDashboardAll(){
        $sql = "select * from `dashboard_stats` ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }
    function getAllFamilyClient_count()
    {
        $sql = "select * from `new-client` where status=1 ";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }
    function getAllGuests()
    {
        $sql = "select * from `add_guest`";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }
    function getAllAppointments()
    {
        $sql = "select * from `new-appointment`";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }

    function getAllBusinessPartners()
    {
        $sql = "select * from `new-recruit`";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }
    function getAllClients()
    {
        $sql = "select * from `new-client`";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }

    function getAllOneThrees()
    {
        $sql = "select * from `one_three`";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }


    function NextPageWelcomeVideo()
    {
        $sql = "SELECT `video_file` FROM `next_page_w_video`";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }

    function NextPageVANGuardVideo()
    {
        $sql = "SELECT `video_file` FROM `next_page_VAN_video`";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }

    function FeaturedVideo()
    {
        $sql = "SELECT `video_file` FROM `training_featured_video`";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }

    function GetALLTrainingPageBtnLinks()
    {
        $sql = "SELECT * FROM `training_featured_btn` WHERE 1";
        if ($this->db->sql($sql)) {
            return $this->db->getResult();
        }
    }










}//class
