
//update profile
$("#edit_profile").submit(function (e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '1');
    ajax_data.append('user_id',$('#employee_id').val());
    ajax_data.append('name',$('#edit_name').val());
    ajax_data.append('email',$('#edit_email').val());
    ajax_data.append('phone',$('#edit_phone').val());
    ajax_data.append('address',$('#edit_address').val());
    ajax_data.append('notes',$('#edit_notes').val());

    $("#edit_btn").attr("disabled", true);
    $("#edit_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);


    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function (data) {
            console.log(data)
            $("#edit_employee_modal").modal("hide");
            if (data.trim() == "true") {
                swal("Success", "Employee edit successfully ", "success").then((value) => {
                    location.reload();
                });
            }
            else {
                swal("Error", "Failed to edit employee, please try again ", "error");

            }
            $("#edit_btn").attr("disabled", false);
            $("#edit_btn").html('Submit');
        }//success
    });
});//update profile
//login

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
            $("#login_btn").html("Login");
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
        url: "../serverside/post.php",
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

    var password = $('#pass').val();
    var c_password = $('#confirm_pass').val();
    var reset_token=$("#reset_Code").val();

    if ( password != c_password ) {
        swal("Error", "Your password don't match, please check!", "info");
        return;

    }
    $("#recoverPass_btn").attr("disabled", true);
    $("#recoverPass_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);
    $.ajax({
        url: "../serverside/post.php",
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
            $('#recoverPassword').trigger("reset");
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
            console.log(data)
            // $("#edit_event_modal").modal("hide");
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
        }
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
        }
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


