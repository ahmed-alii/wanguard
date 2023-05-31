//update profile
$("#signup").submit(function (e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '1');

    ajax_data.append('name',$('#name').val());
    ajax_data.append('email',$('#email').val());
    ajax_data.append('password',$('#password').val());


    $("#signup_btn").attr("disabled", true);
    $("#signup_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);


    $.ajax({
        url: "serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function (data) {

            if(data.trim() == "email-exist"){
                swal("Info", "This email is already exist, please login", "info").then((result) => {
                    window.location.href="login";
                });

            }else if (data.trim() == "true") {
                swal("Success", "You are registered, we send you profile approve email soon", "success").then((value) => {
                    window.location.href="index";
                });
            }
            else {
                swal("Error", "Failed to register, please try again ", "error");

            }
            $("#signup_btn").attr("disabled", false);
            $("#signup_btn").html('Register Account');
        }//success
    });
});//update profile
//update profile
$("#edit_profile").submit(function (e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '1.1');
    ajax_data.append('user_id',$('#employee_id').val());
    ajax_data.append('name',$('#edit_name').val());
    ajax_data.append('email',$('#edit_email').val());
    // ajax_data.append('phone',$('#edit_phone').val());
    // ajax_data.append('address',$('#edit_address').val());
    // ajax_data.append('notes',$('#edit_notes').val());

    $("#edit_btn").attr("disabled", true);
    $("#edit_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);


    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function (data) {

            if (data.trim() == "true") {
                swal("Success", "Profile update successfully ", "success").then((value) => {
                    location.reload();
                });
            }
            else {
                swal("Error", "Failed to edit profile, please try again ", "error");

            }
            $("#edit_btn").attr("disabled", false);
            $("#edit_btn").html('Submit');
        }//success
    });
});//update profile
//login Admin
$("#loginform").submit(function (event) {
    event.preventDefault();
    if($("#email").val() == '' || $("#password").val()=='' ){
        swal("", "Email or password is missing", "info");
        return;
    }
    $("#login_btn").attr("disabled", true);
    $("#login_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);
    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        data: {
            func: 2,
            email:$("#email").val(),
            password:$("#password").val(),
        },
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                window.location.href="index";

            }else if (data.trim() == "block") {

                swal("Block by admin", "You are block by admin. kindly contact with admin", "error");

            }else {
                swal("Failed To Sign In", "Incorrect Email/Password", "error");
            }

            $("#login_btn").attr("disabled", false);
            $("#login_btn").html("Sign-in");
        }//success
    });
});
//login User
$("#login").submit(function (event) {
    event.preventDefault();
    if($("#email").val() == '' || $("#password").val()=='' ){
        swal("", "Email or password is missing", "info");
        return;
    }
    $("#login_btn").attr("disabled", true);
    $("#login_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);
    $.ajax({
        url: "serverside/post.php",
        type: "POST",
        data: {
            func: 2,
            email:$("#email").val(),
            password:$("#password").val(),
        },
        success: function (data) {

            if (data.trim() == "true") {
                window.location.href="index";

            }else if (data.trim() == "block") {

                swal("Failed", "Your profile is not approved. please wait until admin approve it", "info");

            }else {
                swal("Failed To Sign In", "Incorrect Email/Password", "error");
            }

            $("#login_btn").attr("disabled", false);
            $("#login_btn").html("Sign-in");
        }//success
    });
});
//send forgot email
$("#forget_password_email").submit(function (event) {

    event.preventDefault();
    $("#email_btn").attr("disabled", true);
    $("#email_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);
    var email = $('#forgetemail').val();
    $.ajax({
        url: "serverside/post.php",
        type: "POST",
        data: {
            func: 3,
            email: email,
        },
        success: function (data) {

            if (data.trim() == "true") {
                swal("", "We’ve sent a recovery link to your email", "success").then((value) => {
                    window.location.href="index";
                });

            } else if (data.trim() == "not-exist") {
                swal("Email not found", "Check your email, and try again!", "error");
            } else {
                swal("Password Not Recover", "Check your email, and try again!", "error");

            }

            $("#email_btn").attr("disabled", false);
            $("#email_btn").html("Submit");
        }//success


    });
});
//recover password
$("#recoverPassword").submit(function (event) {
    event.preventDefault();

    var password = $('#password').val();
    var c_password = $('#confirm_pass').val();
    var reset_token=$("#reset_Code").val();

    if ( password != c_password ) {
        swal("Error", "Your password don't match, please check!", "info");
        return;

    }
    $("#recoverPass_btn").attr("disabled", true);
    $("#recoverPass_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);
    $.ajax({
        url: "serverside/post.php",
        type: "POST",
        data: {
            func: 4,
            password: password,
            reset_code: reset_token,
        },
        success: function (data) {


            if (data.trim() == "true") {
                swal("Updated Successfully", "Password updated successfully!", "success").then((value) => {
                    window.location.href = "login";
                });
            } else if (data.trim() == "token-not-found") {
                swal("Reset Token not found", "Check your email, and try again!", "error");
            } else {
                swal("Not Updated", "Check your token and try again!", "error");

            }

            $("#recoverPass_btn").attr("disabled", false);
            $("#recoverPass_btn").html("Update");
        }//success

    });

});
//update password
$("#updatepasswordform").submit(function (event) {
    event.preventDefault();
    var oldpass = $('#old_password').val();
    var newpass = $('#password').val();
    var confirmpass = $('#c_password').val();

    if (newpass != confirmpass) {
        swal("Password missmatch", "Your password and confirm password don't match", "info");
        // $('#updatepasswordform').trigger("reset");
        return;
    }
    $("#updatePass_btn").attr("disabled", true);
    $("#updatePass_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);
    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        data: {
            func: 5,
            oldpass: oldpass,
            newpass: newpass,
        },
        success: function (data) {
            console.log(data)
            if (data.trim() == "true") {
                swal("Password update successfully!", "", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("", "Password not update please check your old password, try again!", "error");

            }


            $("#updatePass_btn").attr("disabled", false);
            $("#updatePass_btn").html("Change Password");

        }//success
    });

});
//update profile Photo
$("#update_profile_photo").change(function (event) {
    event.preventDefault();

    $("#update_profile_photo").attr("disabled", true);
    var ajax_data = new FormData();
    ajax_data.append("func", '6');
    ajax_data.append('user_id',$("#employee_id").val());
    ajax_data.append('image', $('#update_profile_photo')[0].files[0]);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function (data) {

            if (data.trim() == "true") {
                // location.reload();
                var selectedImage = URL.createObjectURL(event.target.files[0]);

                $('.myImage').attr('src', selectedImage);

            } else {
                swal("Failed to update","", "error");
            }


            $("#update_profile_photo").attr("disabled", false);
        }//succes
    });//ajax

});
//Add event
$("#add_event").submit(function (e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '7');
    ajax_data.append('name',$('#name').val());
    ajax_data.append('event_link',$('#event_link').val());
    ajax_data.append('description',$('#description').val());
    ajax_data.append('location',$('#location').val());
    ajax_data.append('date',$('#date').val());
    ajax_data.append('time',$('#time').val());

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Event added successfully ", "success").then((value) => {
                    location.reload();
                });
            }
            else {
                swal("Error", "Failed to add event, please try again ", "error");

            }

            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});//Add event
//Edit event
$("#edit_event").submit(function (e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '8');
    ajax_data.append('event_id',$('#event_id').val());
    ajax_data.append('event_link',$('#edit_event_link').val());
    ajax_data.append('name',$('#edit_name').val());
    ajax_data.append('description',$('#edit_description').val());
    ajax_data.append('location',$('#edit_location').val());
    ajax_data.append('date',$('#edit_date').val());
    ajax_data.append('time',$('#edit_time').val());

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function (data) {

            if (data.trim() == "true") {
                swal("Success", "Event edit successfully ", "success").then((value) => {
                    location.reload();
                });
            }
            else {
                swal("Error", "Failed to edit sport center, please try again ", "error");

            }
            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');
        }
    });
});//Edit event
//Delete event
function deleteEvent(event_id) {

    swal({
        text: 'Are you sure to delete this event?',
        icon: 'info',
        buttons: true,
        dangerMode: true,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result) {
            $.ajax({
                url: "../serverside/post.php",
                type: "POST",
                data: {
                    func: 9,
                    event_id: event_id,
                },
                success: function (data) {
                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'Success',
                            text: 'Event deleted successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to delete event, please try again!'
                        });
                    }
                }//success
            });//ajax
        }
    });
}//Delete event
//Add team
$("#add_team_member").submit(function (e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '10');
    ajax_data.append('rank',$('#rank').val());
    ajax_data.append('name',$('#name').val());
    ajax_data.append('level',$('#level').val());
    ajax_data.append('department',$('#department').val());
    ajax_data.append('earning',$('#earning').val());
    ajax_data.append('youtube_link',$('#youtube_link').val());
    ajax_data.append('appointment_link',$('#appointment_link').val());
    ajax_data.append('image', $('#update_profile_photo')[0].files[0]);

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function (data) {
            console.log(data)
            $("#add_team_modal").modal("hide")
            if (data.trim() == "true") {
                swal("Success", "Team member added successfully ", "success").then((value) => {
                    location.reload();
                });
            }
            else {
                swal("Error", "Failed to add team, please try again ", "error");

            }
            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});//Add team
//Edit Team member
$("#edit_team_member").submit(function (e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '11');
    ajax_data.append('team_id',$('#team_id').val());
    ajax_data.append('name',$('#edit_name').val());
    ajax_data.append('rank',$('#edit_rank').val());
    ajax_data.append('level',$('#edit_level').val());
    ajax_data.append('department',$('#edit_department').val());
    ajax_data.append('earning',$('#edit_earning').val());
    ajax_data.append('youtube_link',$('#edit_youtube_link').val());
    ajax_data.append('appointment_link',$('#edit_appointment_link').val());
    ajax_data.append('image', $('#edit_update_profile_photo')[0].files[0]);

    $("#sub_btn1").attr("disabled", true);
    $("#sub_btn1").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function (data) {
            console.log(data)
            $("#edit_team_modal").modal("hide");
            if (data.trim() == "true") {
                swal("Success", "Team member edit successfully ", "success").then((value) => {
                    location.reload();
                });
            }
            else {
                swal("Error", "Failed to edit team member, please try again ", "error");

            }
            $("#sub_btn1").attr("disabled", false);
            $("#sub_btn1").html('Submit');
        }//success
    });
});//Edit Team member
//Delete team
function deleteTeamMember(team_id) {

    swal({
        text: 'Are you sure to delete this team?',
        icon: 'info',
        buttons: true,
        dangerMode: true,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result) {
            $.ajax({
                url: "../serverside/post.php",
                type: "POST",
                data: {
                    func: 12,
                    team_id: team_id,
                },
                success: function (data) {
                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'Success',
                            text: 'Team member deleted successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to delete team member, please try again!'
                        });
                    }
                }//success
            });//ajax
        }

    });
}//Delete
//Edit Bio
$("#edit_bio").submit(function (e){
    e.preventDefault();

    var bio = tinymce.get("bio").getContent();

    if(bio==""){
        swal("Bio details are missing","","info");
        return;
    }
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '13');
    ajax_data.append('team_id',$('#team_id1').val());
    ajax_data.append('bio',bio);

    $("#sub_btn2").attr("disabled", true);
    $("#sub_btn2").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Bio edit successfully ", "success").then((value) => {
                    window.location.href="teams";
                });
            }
            else {
                swal("Error", "Failed to edit bio, please try again ", "error");

            }
            $("#sub_btn2").attr("disabled", false);
            $("#sub_btn2").html('Submit');
        }//success
    });
});//Edit Bio
//Show Bio
function showBio(team_id) {

    $.ajax({
        url: "serverside/post.php",
        type: "POST",
        data: {
            func: 14,
            team_id: team_id,
        },
        success: function (data) {
            $("#append_bio").html('')
            console.log(data);
            data=JSON.parse(data);

            if (data['status'] == true) {
                if(data['bio']){
                    $("#append_bio").html(data['bio']);
                }else {
                    $("#append_bio").html(`<p>No bio found </p>`);
                }

                $("#bio_modal").modal('show');
            } else {
                swal({
                    icon: 'error',
                    title: 'Error',
                    text: 'Failed to find team member, please try again!'
                });
            }
        }//success
    });//ajax

}//showBio

function deleteUser(id) {

    swal({
        title: 'Are you sure to delete this user?',
        icon: 'info',
        buttons: true,
        dangerMode: true,
    }).then((result) => {

        if (result) {
            $.ajax({
                url: "../serverside/post.php",
                type: "POST",
                data: {
                    func: 19,
                    userid: id,
                },
                success: function (data) {

                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'success',
                            text: 'User deleted successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Failed to delete!'
                        });
                    }
                }//success
            });//ajax
        }
    });
}//delete user
function blockUser(id) {
    swal({
        title: 'Are you sure to block this user?',
        icon: 'info',
        buttons: true,
        dangerMode: true,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result) {
            $.ajax({
                url: "../serverside/post.php",
                type: "POST",
                data: {
                    func: 20,
                    id: id,
                },
                success: function (data) {

                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'success',
                            text: 'User blocked successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Failed to block!'
                        });
                    }
                }//success
            });//ajax
        }
    });
}//block user
function activeUser(id) {
    swal({
        title: 'Are you sure to activate this user?',
        icon: 'info',
        buttons: true,
        dangerMode: true,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */

        $("#approve_btn"+id).attr("disabled", true);
        $("#approve_btn"+id).html(`<i class="fa fa-spinner fa-spin"></i>`);

        if (result) {
            $.ajax({
                url: "../serverside/post.php",
                type: "POST",
                data: {
                    func: 21,
                    id: id,
                },
                success: function (data) {

                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'success',
                            text: 'User activated successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Failed to activate user!'
                        });
                    }
                    $("#approve_btn"+id).attr("disabled", false);
                    $("#approve_btn"+id).html(`<i class="fa fa-check"></i>`);
                }//success
            });//ajax
        }

    });
}//active user
