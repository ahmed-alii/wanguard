$("#signup").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '1');

    ajax_data.append('email', $('#email').val());
    ajax_data.append('password', $('#password').val());
    ajax_data.append('f_name', $('#f_name').val());
    ajax_data.append('l_name', $('#l_name').val());
    ajax_data.append('agent_code', $('#agent_code').val());
    ajax_data.append('phone_no', $('#phone_no').val());
    ajax_data.append('business_partner', $('#business_partner').val());
    ajax_data.append('us_states', $('#us_states option:selected').val());
    ajax_data.append('image', $('#image')[0].files[0]);

    $("#signup_btn").attr("disabled", true);
    $("#signup_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);


    $.ajax({
        url: "serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {

            if (data.trim() == "email-exist") {
                swal("Info", "This email is already exist, please login", "info").then((result) => {
                    window.location.href = "login";
                });

            } else if (data.trim() == "true") {
                swal("Success", "You are registered, we send you profile approve email soon", "success").then((value) => {
                    window.location.href = "index";
                });
            } else {
                swal("Error", "Failed to register, please try again ", "error");

            }
            $("#signup_btn").attr("disabled", false);
            $("#signup_btn").html('Register Account');
        }//success
    });
});
//Signup

$("#edit_profile").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '1.1');
    ajax_data.append('user_id', $('#employee_id').val());
    ajax_data.append('name', $('#edit_name').val());
    ajax_data.append('email', $('#edit_email').val());
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
        data: ajax_data,
        success: function (data) {

            if (data.trim() == "true") {
                swal("Success", "Profile update successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to edit profile, please try again ", "error");

            }
            $("#edit_btn").attr("disabled", false);
            $("#edit_btn").html('Submit');
        }//success
    });
});
//update profile

$("#loginform").submit(function (event) {
    event.preventDefault();
    if ($("#email").val() == '' || $("#password").val() == '') {
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
            email: $("#email").val(),
            password: $("#password").val(),
        },
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                window.location.href = "index";

            } else if (data.trim() == "block") {

                swal("Block by admin", "You are block by admin. kindly contact with admin", "error");

            } else {
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
    if ($("#email").val() == '' || $("#password").val() == '') {
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
            email: $("#email").val(),
            password: $("#password").val(),
        },
        success: function (data) {

            if (data.trim() == "true") {
                window.location.href = "index";

            } else if (data.trim() == "block") {

                swal("Failed", "Your profile is not approved. please wait until admin approve it", "info");

            } else {
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
                    window.location.href = "index";
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
    var reset_token = $("#reset_Code").val();

    if (password != c_password) {
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
$("#update_profile_photo1").change(function (event) {
    event.preventDefault();

    $("#update_profile_photo1").attr("disabled", true);
    var ajax_data = new FormData();
    ajax_data.append("func", '6');
    ajax_data.append('user_id', $("#employee_id").val());
    ajax_data.append('image', $('#update_profile_photo1')[0].files[0]);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {

            if (data.trim() == "true") {
                // location.reload();
                var selectedImage = URL.createObjectURL(event.target.files[0]);

                $('.myImage').attr('src', selectedImage);

            } else {
                swal("Failed to update", "", "error");
            }


            $("#update_profile_photo1").attr("disabled", false);
        }//succes
    });//ajax

});
//Add event
$("#add_event").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '7');
    ajax_data.append('name', $('#name').val());
    ajax_data.append('event_link', $('#event_link').val());
    ajax_data.append('description', $('#description').val());
    ajax_data.append('location', $('#location').val());
    ajax_data.append('date', $('#date').val());
    ajax_data.append('time', $('#time').val());

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Event added successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to add event, please try again ", "error");

            }

            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});//Add event
//Edit event
$("#edit_event").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '8');
    ajax_data.append('event_id', $('#event_id').val());
    ajax_data.append('event_link', $('#edit_event_link').val());
    ajax_data.append('name', $('#edit_name').val());
    ajax_data.append('description', $('#edit_description').val());
    ajax_data.append('location', $('#edit_location').val());
    ajax_data.append('date', $('#edit_date').val());
    ajax_data.append('time', $('#edit_time').val());

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {

            if (data.trim() == "true") {
                swal("Success", "Event edit successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
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
}
//Delete event


//Add team
$("#add_team_member").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '10');
    ajax_data.append('rank', $('#rank').val());
    ajax_data.append('name', $('#name').val());
    ajax_data.append('level', $('#level').val());
    ajax_data.append('department', $('#department').val());
    ajax_data.append('earning', $('#earning').val());
    ajax_data.append('youtube_link', $('#youtube_link').val());
    ajax_data.append('linkedin_link', $('#linkedin_link').val());
    ajax_data.append('twitter_link', $('#twitter_link').val());
    ajax_data.append('appointment_link', $('#appointment_link').val());
    ajax_data.append('image1', $('#update_profile_photo')[0].files[0]);

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)
            $("#add_team_modal").modal("hide")
            if (data.trim() == "true") {
                swal("Success", "Team member added successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to add team, please try again ", "error");

            }
            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});//Add team
//Edit Team member
$("#edit_team_member").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '11');
    ajax_data.append('team_id', $('#team_id').val());
    ajax_data.append('name', $('#edit_name').val());
    ajax_data.append('rank', $('#edit_rank').val());
    ajax_data.append('level', $('#edit_level').val());
    ajax_data.append('department', $('#edit_department').val());
    ajax_data.append('earning', $('#edit_earning').val());
    ajax_data.append('youtube_link', $('#edit_youtube_link').val());
    ajax_data.append('linkedin_link', $('#edit_linkedin_link').val());
    ajax_data.append('twitter_link', $('#edit_twitter_link').val());
    ajax_data.append('appointment_link', $('#edit_appointment_link').val());
    ajax_data.append('image', $('#edit_update_profile_photo')[0].files[0]);

    $("#sub_btn1").attr("disabled", true);
    $("#sub_btn1").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)
            $("#edit_team_modal").modal("hide");
            if (data.trim() == "true") {
                swal("Success", "Team member edit successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
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
$("#edit_bio").submit(function (e) {
    e.preventDefault();

    var bio = tinymce.get("bio").getContent();

    if (bio == "") {
        swal("Bio details are missing", "", "info");
        return;
    }
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '13');
    ajax_data.append('team_id', $('#team_id1').val());
    ajax_data.append('bio', bio);

    $("#sub_btn2").attr("disabled", true);
    $("#sub_btn2").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Bio edit successfully ", "success").then((value) => {
                    window.location.href = "teams";
                });
            } else {
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
            data = JSON.parse(data);

            if (data['status'] == true) {
                if (data['bio']) {
                    $("#append_bio").html(data['bio']);
                } else {
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

        $("#approve_btn" + id).attr("disabled", true);
        $("#approve_btn" + id).html(`<i class="fa fa-spinner fa-spin"></i>`);

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
                    $("#approve_btn" + id).attr("disabled", false);
                    $("#approve_btn" + id).html(`<i class="fa fa-check"></i>`);
                }//success
            });//ajax
        }

    });
}//active user


$("#new-appointment").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '22');
    ajax_data.append('traine_appointment', $('#traine_appointment').val());
    ajax_data.append('appointment_type', $('#appointment_type').val());
    ajax_data.append('who_seeing', $('#who_seeing').val());
    ajax_data.append('appointment_date', $('#appointment_date').val());
    ajax_data.append('time', $('#time option:selected').val());
    ajax_data.append('they_are', $('#they_are option:selected').val());
    ajax_data.append('description', $('#description').val());
    ajax_data.append('match_up', $('input[name="match_up"]:checked').val());

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "New Appointment added successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to add Appointment, Please try again ", "error");

            }

            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});
//Add new appointment

$("#new-recruit").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '23');
    ajax_data.append('agent_id', $('#agent_id').val());
    ajax_data.append('start_date', $('#start_date').val());
    ajax_data.append('f_name', $('#f_name').val());
    ajax_data.append('l_name', $('#l_name').val());
    ajax_data.append('resident_state', $('#resident_state').val());
    ajax_data.append('recruiter', $('#recruiter option:selected').val());
    ajax_data.append('direct_MD', $('#direct_MD option:selected').val());
    ajax_data.append('direct_SMD', $('#direct_SMD option:selected').val());
    ajax_data.append('licensed', $('input[name="licensed"]:checked').val());
    ajax_data.append('contact_no', $('#contact_no').val());
    ajax_data.append('birthdate', $('#birthdate').val());
    ajax_data.append('email_address', $('#email_address').val());
    ajax_data.append('home_address', $('#home_address').val());

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "New Recruit added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to Add New Recruit, Please try again ", "error");

            }

            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});
//Add new appointment

$("#new-client1").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '24');
    ajax_data.append('f_name', $('#f_name').val());
    ajax_data.append('l_name', $('#l_name').val());
    ajax_data.append('policy_name', $('#policy_name').val());
    ajax_data.append('submitted_date', $('#submitted_date').val());
    ajax_data.append('coverage', $('#coverage').val());
    ajax_data.append('monthly_saving', $('#monthly_saving').val());
    ajax_data.append('estimated_points', $('#estimated_points').val());
    ajax_data.append('CWA', $('#CWA option:selected').val());
    ajax_data.append('writing_agent', $('#writing_agent option:selected').val());
    ajax_data.append('trainee', $('#trainee option:selected').val());
    ajax_data.append('split_option', $('input[name="split_option"]:checked').val());
    ajax_data.append('split_agent', $('#split_agent option:selected').val());
    ajax_data.append('agent_policy', $('#agent_policy option:selected').val());
    ajax_data.append('product', $('#product option:selected').val());
    ajax_data.append('provider', $('#provider option:selected').val());
    ajax_data.append('med_required', $('#med_required option:selected').val());
    ajax_data.append('contact_no', $('#contact_no').val());
    ajax_data.append('email_address', $('#email_address').val());
    ajax_data.append('add_notes', $('#add_notes').val());

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "New Client added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to Add New Client, Please try again ", "error");

            }

            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});
//Add new appointment

$("#add_guests").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '25');
    ajax_data.append('events', $('#events').val());
    ajax_data.append('guest_name', $('#guest_name').val());
    ajax_data.append('they_are', $('#they_are option:selected').val());
    ajax_data.append('guest_of', $('#guest_of option:selected').val());
    ajax_data.append('contact_number', $('#contact_number').val());
    ajax_data.append('guest_mail', $('#guest_mail').val());
    ajax_data.append('guest_app_confirm', $('input[name="guest_app_confirm"]:checked').val());

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "New Guest added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to Add New Guest, Please try again ", "error");
            }

            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});
//Add new Guest




function refreshPage() {
    location.reload();
}
// Reloads the current page


$("#welcome-setting-page").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '26');
    ajax_data.append('video', $('#video')[0].files[0]);


    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Video file Upload Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to Upload Video file, Please try again ", "error");
            }

            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});
//Add video

$("#welcome-setting-page-2").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '266');
    ajax_data.append('video', $('#video2')[0].files[0]);


    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait... <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Video file Upload Successfully!! ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to Upload Video file, Please try again ", "error");
            }

            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});

$("#add_md").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '27');
    ajax_data.append('add_md_name', $('#add_md_name').val());

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "MD Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to Add MD, Please try again ", "error");
            }

            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});
//Add MD

$("#add_smd").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '28');
    ajax_data.append('add_smd_name', $('#add_smd_name').val());

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "SMD Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to Add SMD, Please try again ", "error");
            }

            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});
//Add SMD


$("#recruitment_tools").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '29');
    ajax_data.append('recruiting_tname', $('#recruiting_tname').val());
    ajax_data.append('recruiting_tlink', $('#recruiting_tlink').val());

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Recruiting Tools Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to Add Recruiting Tools, Please try again ", "error");
            }

            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});
//Add recruiting tool

$("#section_form").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '33');
    ajax_data.append('main_title', $('#main_title').val());
    ajax_data.append('sub_title', $('#sub_title').val());

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Error, Please try again ", "error");
            }

            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});

$("#client_tools").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '30');
    ajax_data.append('client_tname', $('#client_tname').val());
    ajax_data.append('client_tlink', $('#client_tlink').val());

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Client Tools Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to Add Client Tools, Please try again ", "error");
            }

            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html('Submit');

        }//success
    });
});


$("#section_form_image").submit(function(e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '35');
    ajax_data.append("sectionid", $("#sectionid").val());
    ajax_data.append('url', $('#url').val());
    // ajax_data.append('images', $('#images').prop('files')[0]);
    ajax_data.append('images', $('#images')[0].files[0]);


    $("#section_imgs_btn").attr("disabled", true);
    $("#section_imgs_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Image Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed , Please try again ", "error");
            }

            $("#section_imgs_btn").attr("disabled", false);
            $("#section_imgs_btn").html(`Submit`);


        }//success
    });


});


function delete_recruitment_tool(event_id) {
    swal({
        text: 'Are you sure to delete this Recruitment event?',
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
                    func: 31,
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
}
//Delete recruitment tools
function deleteimage(imageid){
    swal({
        text: 'Are you sure to delete this Image?',
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
                    func: 36,
                    imageid: imageid,
                },
                success: function (data) {
                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'Success',
                            text: 'Image deleted successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to delete, please try again!'
                        });
                    }
                }//success
            });//ajax
        }
    });

}
function deletesection(section_id) {
    swal({
        text: 'Are you sure to delete this section?',
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
                    func: 34,
                    section_id: section_id,
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
}
function delete_client_tool(client_id) {
    swal({
        text: 'Are you sure to delete this Client event?',
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
                    func: 32,
                    client_id: client_id,
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
}
//Delete client tools

function delete_business_partner_md(md_id) {
    swal({
        text: 'Are you sure to delete this Business Partner MD?',
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
                    func: 38,
                    md_id: md_id,
                },
                success: function (data) {
                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'Success',
                            text: 'Business Partner MD deleted successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to delete Business partner MD, please try again!'
                        });
                    }
                }//success
            });//ajax
        }
    });
}
//Delete business partners MD

function delete_business_partner_smd(smd_id) {
    swal({
        text: 'Are you sure to delete this Business Partner SMD?',
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
                    func: 39,
                    smd_id: smd_id,
                },
                success: function (data) {
                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'Success',
                            text: 'Business Partner SMD deleted successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to delete Business partner SMD, please try again!'
                        });
                    }
                }//success
            });//ajax
        }
    });
}
//Delete business partners SMD
function reset() {
    swal({
        text: 'Are you sure to reset?',
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
                    func: 40,
                },
                success: function (data) {
                    if (data.trim() == "true") {
                        swal("Success", "Reset Successfully ", "success").then((value) => {
                            location.reload();
                        });                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to reset, please try again!'
                        });
                    }
                }//success
            });//ajax
        }
    });

}

$("#dashboard_stats").submit(function(e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '41');
    ajax_data.append("lic", $("#lic").val());
    ajax_data.append("net_lic", $("#net_lic").val());
    ajax_data.append("one_300", $("#one_300").val());

    $("#section_imgs_btn").attr("disabled", true);
    $("#section_imgs_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed , Please try again ", "error");
            }
            $("#section_imgs_btn").attr("disabled", false);
            $("#section_imgs_btn").html(`Submit`);

        }//success
    });
});
//Add client tool

$("#one_three").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '42');
    ajax_data.append('name', $('#name').val());
    ajax_data.append('number', $('#number').val());


    $("#one_three_btn").attr("disabled", true);
    $("#one_three_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)
            $("#add_team_modal").modal("hide")
            if (data.trim() == "true") {
                swal("Success", "1 / 300 added successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to add 1 / 300, please try again ", "error");

            }
            $("#one_three_btn").attr("disabled", false);
            $("#one_three_btn").html('Submit');

        }//success
    });
});

$("#welcome_video_url").submit(function(e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '43');
    ajax_data.append('w_video_url', $('#w_video_url')[0].files[0]);

    $("#sub-btn").attr("disabled", true);
    $("#sub-btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed , Please try again ", "error");
            }
            $("#sub-btn").attr("disabled", false);
            $("#sub-btn").html(`Submit`);
        }//success
    });
});

$("#vanguard_video_url").submit(function(e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '44');
    ajax_data.append('v_video_url', $('#v_video_url')[0].files[0]);

    $("#sub-btn").attr("disabled", true);
    $("#sub-btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed , Please try again ", "error");
            }
            $("#sub-btn").attr("disabled", false);
            $("#sub-btn").html(`Submit`);
        }//success
    });
});
$("#featured_video").submit(function(e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '45');
    ajax_data.append('featured_video_url', $('#featured_video_url')[0].files[0]);

    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed , Please try again ", "error");
            }
            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html(`Submit`);
        }//success
    });
});

$("#training_btn_links").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '46');
    ajax_data.append('faith', $('#faith').val());
    ajax_data.append('family', $('#family').val());
    ajax_data.append('fitness', $('#fitness').val());
    ajax_data.append('fun', $('#fun').val());
    ajax_data.append('finance', $('#finance').val());


    $("#sub_btn").attr("disabled", true);
    $("#sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed , Please try again ", "error");
            }
            $("#sub_btn").attr("disabled", false);
            $("#sub_btn").html(`Submit`);
        }//success
    });
});


$("#lic_name").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '47');
    ajax_data.append('f_name', $('#f_name_lic').val());
    ajax_data.append('l_name', $('#l_name_lic').val());


    $("#lic_name_btn").attr("disabled", true);
    $("#lic_name_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed , Please try again ", "error");
            }
            $("#lic_name_btn").attr("disabled", false);
            $("#lic_name_btn").html(`Submit`);
        }//success
    });
});

$("#net_lic_name").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '48');
    ajax_data.append('f_name', $('#f_name_net').val());
    ajax_data.append('l_name', $('#l_name_net').val());


    $("#net_lic_name_btn").attr("disabled", true);
    $("#net_lic_name_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed , Please try again ", "error");
            }
            $("#net_lic_name_btn").attr("disabled", false);
            $("#net_lic_name_btn").html(`Submit`);
        }//success
    });
});


$("#one_three_name").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '49');
    ajax_data.append('f_name', $('#f_name_one_three').val());
    ajax_data.append('l_name', $('#l_name_one_three').val());


    $("#one_three_name_btn").attr("disabled", true);
    $("#one_three_name_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed , Please try again ", "error");
            }
            $("#one_three_name_btn").attr("disabled", false);
            $("#one_three_name_btn").html(`Submit`);
        }//success
    });
});

$("#training_section_form").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '50');
    ajax_data.append('main_title', $('#training_main_title').val());
    ajax_data.append('sub_title', $('#training_sub_title').val());

    $("#tra_sec_btn").attr("disabled", true);
    $("#tra_sec_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Error, Please try again ", "error");
            }

            $("#tra_sec_btn").attr("disabled", false);
            $("#tra_sec_btn").html('Submit');

        }//success
    });
});

$("#training_section_form_image").submit(function(e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '51');
    ajax_data.append("t_section_id", $("#training_section_id").val());
    ajax_data.append('url', $('#training_url').val());
    // ajax_data.append('images', $('#images').prop('files')[0]);
    ajax_data.append('images', $('#training_images')[0].files[0]);

    $("#_training_section_imgs_btn").attr("disabled", true);
    $("#_training_section_imgs_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {
                swal("Success", "Image Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed , Please try again ", "error");
            }
            $("#_training_section_imgs_btn").attr("disabled", false);
            $("#_training_section_imgs_btn").html(`Submit`);
        }//success
    });
});

function DeleteTrainingSection(section_id) {
    swal({
        text: 'Are you sure to delete this section?',
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
                    func: 52,
                    section_id: section_id,
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
}

function DeleteTrainingImage(imageid){
    swal({
        text: 'Are you sure to delete this Image?',
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
                    func: 53,
                    TrainingImageId: imageid,
                },
                success: function (data) {
                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'Success',
                            text: 'Image deleted successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to delete, please try again!'
                        });
                    }
                }//success
            });//ajax
        }
    });
}

$("#Update_training_section_form").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '54');
    ajax_data.append('section_id', $('#section_id').val());
    ajax_data.append('tra_f_name', $('#tra_f_name').val());
    ajax_data.append('tra_l_name', $('#tra_l_name').val());

    $("#update_tra_sec_btn").attr("disabled", true);
    $("#update_tra_sec_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);


    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {

            if (data.trim() == "true") {
                swal("Success", "Profile update successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to edit profile, please try again ", "error");

            }
            $("#update_tra_sec_btn").attr("disabled", false);
            $("#update_tra_sec_btn").html('Submit');
        }//success
    });
});

$("#Update_training_section_image").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '55');
    ajax_data.append('section_id', $('#section_id').val());
    ajax_data.append('images', $('#training_image')[0].files[0]);

    $("#update_tra_img_btn").attr("disabled", true);
    $("#update_tra_img_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);


    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)
            if (data.trim() == "true") {
                swal("Success", "Profile update successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to edit profile, please try again ", "error");

            }
            $("#update_tra_img_btn").attr("disabled", false);
            $("#update_tra_img_btn").html('Submit');
        }//success
    });
});

$("#Update_trainers_section_form").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '56');
    ajax_data.append('section_id', $('#section_id').val());
    ajax_data.append('trainers_f_name', $('#trainers_f_name').val());
    ajax_data.append('trainers_l_name', $('#trainers_l_name').val());

    $("#update_trainers_sec_btn").attr("disabled", true);
    $("#update_trainers_sec_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);


    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {

            if (data.trim() == "true") {
                swal("Success", "Update successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to edit, please try again ", "error");

            }
            $("#update_trainers_sec_btn").attr("disabled", false);
            $("#update_trainers_sec_btn").html('Submit');
        }//success
    });
});

$("#Update_trainers_section_image").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '57');
    ajax_data.append('section_id', $('#section_id').val());
    ajax_data.append('images1', $('#trainers_image')[0].files[0]);

    $("#update_trainers_img_btn").attr("disabled", true);
    $("#update_trainers_img_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);


    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)
            if (data.trim() == "true") {
                swal("Success", "Update successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to edit, please try again ", "error");

            }
            $("#update_trainers_img_btn").attr("disabled", false);
            $("#update_trainers_img_btn").html('Submit');
        }//success
    });
});

$("#banner_img").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '58');
    ajax_data.append('banner_img1', $('#banner_img1')[0].files[0]);
    ajax_data.append('banner_img_url', $('#banner_img_url').val());

    $("#banner_img_btn").attr("disabled", true);
    $("#banner_img_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)
            if (data.trim() == "true") {
                swal("Success", "Image Added successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to Add Image, please try again ", "error");

            }
            $("#banner_img_btn").attr("disabled", false);
            $("#banner_img_btn").html('Submit');
        }//success
    });
});

$("#dashboard_btns").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '59');
    ajax_data.append('btn_1', $('#btn_1').val());
    ajax_data.append('btn_2', $('#btn_2').val());
    ajax_data.append('btn_3', $('#btn_3').val());

    $("#dashboard_btns_sub_btn").attr("disabled", true);
    $("#dashboard_btns_sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);
    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)
            if (data.trim() == "true") {
                swal("Success", "Button Links Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to Add Button Links, Please try again ", "error");
            }
            $("#dashboard_btns_sub_btn").attr("disabled", false);
            $("#dashboard_btns_sub_btn").html('Submit');
        }//success
    });
});

$("#dashboard_table_inputs").submit(function (e) {
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '60');
    ajax_data.append('f_name', $('#f_name').val());
    ajax_data.append('l_name', $('#l_name').val());
    ajax_data.append('agency_team', $('#agency_team').val());

    $("#dashboard_table_inputs_sub_btn").attr("disabled", true);
    $("#dashboard_table_inputs_sub_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);
    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: ajax_data,
        success: function (data) {
            console.log(data)
            if (data.trim() == "true") {
                swal("Success", "Button Links Added Successfully ", "success").then((value) => {
                    location.reload();
                });
            } else {
                swal("Error", "Failed to Add Button Links, Please try again ", "error");
            }
            $("#dashboard_table_inputs_sub_btn").attr("disabled", false);
            $("#dashboard_table_inputs_sub_btn").html('Submit');
        }//success
    });
});

