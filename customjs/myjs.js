
$("#signupform").submit(function (event) {
    event.preventDefault();
    if($("#email").val() == '' || $("#password").val()=='' ){
        swal("Error", "Email or password is missing", "info");
        return;
    }
    if($("#password").val() != $("#c_password").val() ){
        swal("Error", "Password mis-match, Your password and confirm password is mis-match", "info");
        return;
    }

    $("#signup_btn").attr("disabled", true);
    $("#signup_btn").html(`Please wait...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>`);
    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        data: {
            func: 1,
            email:$("#email").val(),
            password:$("#password").val(),
            name:$("#name").val(),
            user_type:$("input[name='account_type']:checked").val(),
        },
        success: function (data) {
            console.log(data)

            if (data.trim() == "true") {

                swal("Success", "Account created successfully", "success").then((value) => {
                    window.location.href='index';
                });

            }else {
                swal("Error", "Account is not created successfully, please try again", "error");
            }

            $("#signup_btn").attr("disabled", false);
            $("#signup_btn").html("Signup");
        }//success
    });
});
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
                swal("Password update successfully!", "", "success");
            } else {
                swal("", "Password not update please check your old password, try again!", "error");

            }

            $('#updatepasswordform').trigger("reset");
            $("#updatePass_btn").attr("disabled", false);
            $("#updatePass_btn").html("UPDATE");

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
                    window.location.href="sports-center";
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

//Add ground
$("#add_ground").submit(function (e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '10');
    ajax_data.append('sport_center_id',$('#sport_center_id').val());
    ajax_data.append('name',$('#name').val());
    ajax_data.append('has_a_store',$('#has_a_store option:selected').val());
    ajax_data.append('parking',$('#parking option:selected').val());
    ajax_data.append('location',$('#location').val());
    ajax_data.append('booking_price',$('#booking_price').val());
    ajax_data.append('description',$('#description').val());
    ajax_data.append('image', $('#update_profile_photo')[0].files[0]);
    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function (data) {
            console.log(data)
            $("#add_ground_modal").modal("hide")
            if (data.trim() == "true") {
                swal("Success", "Ground added successfully ", "success").then((value) => {
                    location.reload();
                });
            }
            else {
                swal("Error", "Failed to add ground, please try again ", "error");

            }
        }
    });
});//Add ground
//Edit Ground
$("#edit_ground").submit(function (e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '11');
    ajax_data.append('ground_id',$('#ground_id').val());
    ajax_data.append('name',$('#edit_name').val());
    ajax_data.append('has_a_store',$('#edit_has_a_store option:selected').val());
    ajax_data.append('parking',$('#edit_parking option:selected').val());
    ajax_data.append('location',$('#edit_location').val());
    ajax_data.append('booking_price',$('#edit_booking_price').val());
    ajax_data.append('description',$('#edit_description').val());
    ajax_data.append('image', $('#edit_update_profile_photo')[0].files[0]);
    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function (data) {
            console.log(data)
            $("#edit_ground_modal").modal("hide");
            if (data.trim() == "true") {
                swal("Success", "Ground edit successfully ", "success").then((value) => {
                    location.reload();
                });
            }
            else {
                swal("Error", "Failed to edit ground, please try again ", "error");

            }
        }
    });
});//Edit Ground
//Delete ground
function deleteGround(ground_id) {

    swal({
        text: 'Are you sure to delete this ground?',
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
                    ground_id: ground_id,
                },
                success: function (data) {
                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'Success',
                            text: 'Ground deleted successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to delete ground, please try again!'
                        });
                    }
                }//success
            });//ajax
        }

    });
}//Delete ground
//Add New Booking
$("#confirm_booking").submit(function (e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '13');
    ajax_data.append('sport_center_id',$('#sport_center_id').val());
    ajax_data.append('ground_id',$('#ground_id').val());
    ajax_data.append('booking_date',$('#booking_date').val());
    ajax_data.append('time_slot1',$('#time_slot1').val());
    ajax_data.append('total_payment',$('#total_payment').val());
    ajax_data.append('customer_id',$('#customer_id').val());
    ajax_data.append('image', $('#update_profile_photo1')[0].files[0]);

    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function (data) {
            console.log(data)
            if (data.trim() == "true") {
                swal("Success", "Booking confirmed successfully ", "success").then((value) => {
                    window.location.href="index";
                });
            }
            else {
                swal("Error", "Failed to book ground, please try again ", "error");

            }
        }
    });
});//Add New Booking
//Approve booking
function approveBooking(booking_id) {

    swal({
        text: 'Are you sure to approve this booking?',
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
                    func: 14,
                    booking_id: booking_id,
                },
                success: function (data) {
                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'Success',
                            text: 'Booking approved successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to approve booking, please try again!'
                        });
                    }
                }//success
            });//ajax
        }

    });
}//Approve booking/
//Reject booking
function rejectBooking(booking_id) {

    swal({
        text: 'Are you sure to reject this booking?',
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
                    func: 15,
                    booking_id: booking_id,
                },
                success: function (data) {
                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'Success',
                            text: 'Booking rejected successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to reject booking, please try again!'
                        });
                    }
                }//success
            });//ajax
        }

    });
}//Delete booking
//Delete booking
function deleteBooking(booking_id) {

    swal({
        text: 'Are you sure to delete this booking?',
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
                    func: 16,
                    booking_id: booking_id,
                },
                success: function (data) {
                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'Success',
                            text: 'Booking deleted successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to delete booking, please try again!'
                        });
                    }
                }//success
            });//ajax
        }

    });
}//Delete booking
//Add bank
$("#add_bank").submit(function (e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '16');
    ajax_data.append('name',$('#name').val());
    ajax_data.append('address',$('#address').val());
    ajax_data.append('bank_code',$('#bank_code').val());
    ajax_data.append('account_number',$('#account_number').val());
    ajax_data.append('notes',$('#notes').val());
    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function (data) {
            console.log(data)
            $("#add_bank_modal").modal("hide");
            if (data.trim() == "true") {
                swal("Success", "Bank added successfully ", "success").then((value) => {
                    location.reload();
                });
            }
            else {
                swal("Error", "Failed to add bank, please try again ", "error");

            }
        }
    });
});//Add bank
//Edit Bank
$("#edit_bank").submit(function (e){
    e.preventDefault();
    var ajax_data = new FormData();
    //append into ajax data
    ajax_data.append("func", '17');
    ajax_data.append('bank_id',$('#bank_id').val());
    ajax_data.append('name',$('#edit_name').val());
    ajax_data.append('address',$('#edit_address').val());
    ajax_data.append('bank_code',$('#edit_bank_code').val());
    ajax_data.append('account_number',$('#edit_account_number').val());
    ajax_data.append('notes',$('#edit_notes').val());
    $.ajax({
        url: "../serverside/post.php",
        type: "POST",
        processData: false,
        contentType: false,
        data:ajax_data,
        success: function (data) {
            console.log(data)
            $("#edit_bank_modal").modal("hide");
            if (data.trim() == "true") {
                swal("Success", "Bank edit successfully ", "success").then((value) => {
                    location.reload();
                });
            }
            else {
                swal("Error", "Failed to edit bank, please try again ", "error");

            }
        }
    });
});//Edit Bank
//Delete bank
function deleteBank(bank_id) {

    swal({
        text: 'Are you sure to delete this bank?',
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
                    func: 18,
                    bank_id: bank_id,
                },
                success: function (data) {
                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'Success',
                            text: 'Bank deleted successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to delete bank, please try again!'
                        });
                    }
                }//success
            });//ajax
        }

    });
}//Delete bank

function getBookingDate(){

    $("#time_slot1").html('');
    let service_date=$("#booking_date").val();
    $.ajax({
        url:"../serverside/post.php",
        type:"POST",
        data:{
            func:19,
            servicedate:service_date
        },
        success:function (data){

            data=JSON.parse(data);

            $("#time_slot1").append(`<option data-slot="0" value="0">---Select time---</option>
                                <option value="8:00-9:00" id="slot_1">8:00AM - 9:00AM</option>
                                <option value="9:00-10:00" id="slot_2">9:00AM - 10:00AM</option>
                                <option value="10:00-11:00" id="slot_3">10:00AM - 11:00AM</option>
                                <option value="11:00-12:00" id="slot_4">11:00AM - 12:00PM</option>
                                <option value="12:00-1:00" id="slot_5">12:00PM - 1:00PM</option>
                                <option value="1:00-2:00" id="slot_6">1:00PM - 2:00PM</option>
                                <option value="2:00-3:00" id="slot_7">2:00PM - 3:00PM</option>
                                <option value="3:00-4:00" id="slot_8">3:00PM - 4:00PM</option>
                                <option value="4:00-5:00" id="slot_9">4:00PM - 5:00PM</option>`);
            $("#time_slot1").selectpicker("refresh");
            data_len=Object.keys(data).length;
            if(data_len>0){

                slot_1=data[0].slot_1;
                slot_2=data[0].slot_2;
                slot_3=data[0].slot_3;
                slot_4=data[0].slot_4;
                slot_5=data[0].slot_5;
                slot_6=data[0].slot_6;
                slot_7=data[0].slot_7;
                slot_8=data[0].slot_8;
                slot_9=data[0].slot_9;

                if(slot_1==1){
                    $('#time_slot1 option[value="8:00-9:00"]').prop('disabled', true);
                    $("#time_slot1").selectpicker("refresh");
                }
                if(slot_2==1){
                    $('#time_slot1 option[value="9:00-10:00"]').prop('disabled', true);
                    $("#time_slot1").selectpicker("refresh");
                }
                if(slot_3==1){
                    $('#time_slot1 option[value="10:00-11:00"]').prop('disabled', true);
                    $("#time_slot1").selectpicker("refresh");
                }
                if(slot_4==1){
                    $('#time_slot1 option[value="11:00-12:00"]').prop('disabled', true);
                    $("#time_slot1").selectpicker("refresh");
                }
                if(slot_5==1){
                    $('#time_slot1 option[value="12:00-1:00"]').prop('disabled', true);
                    $("#time_slot1").selectpicker("refresh");
                }
                if(slot_6==1){
                    $('#time_slot1 option[value="1:00-2:00"]').prop('disabled', true);
                    $("#time_slot1").selectpicker("refresh");
                }
                if(slot_7==1){
                    $('#time_slot1 option[value="2:00-3:00"]').prop('disabled', true);
                    $("#time_slot1").selectpicker("refresh");
                }
                if(slot_8==1){
                    $('#time_slot1 option[value="3:00-4:00"]').prop('disabled', true);
                    $("#time_slot1").selectpicker("refresh");
                }
                if(slot_9==1){
                    $('#time_slot1 option[value="4:00-5:00"]').prop('disabled', true);
                    $("#time_slot1").selectpicker("refresh");
                }
            }else{
                $("#slot_1").prop("disabled",false);

                $("#slot_2").prop("disabled",false);

                $("#slot_3").prop("disabled",false);

                $("#slot_4").prop("disabled",false);

                $("#slot_5").prop("disabled",false);

                $("#slot_6").prop("disabled",false);

                $("#slot_7").prop("disabled",false);

                $("#slot_8").prop("disabled",false);

                $("#slot_9").prop("disabled",false);

            }
        }
    });

}











function deleteUser(user_id,type) {
    let user="";
    if(type==2){
        user="manager";
    }else {
        user="customer";
    }

    swal({
        text: 'All sport centers of this '+ user +' will also deleted. Are you sure to delete this user?',
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
                    func: 24,
                    user_id: user_id,
                },
                success: function (data) {
                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'Success',
                            text: user+' deleted successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to delete '+user+', please try again!'
                        });
                    }
                }//success
            });//ajax
        }

    });
}//Delete user
function blockUser(user_id,type) {

    let user="";
    if(type==2){
        user="manager";
    }else {
        user="customer";
    }

    swal({
        title: 'Are you sure to block this '+user+'?',
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
                    func: 25,
                    user_id: user_id,
                },
                success: function (data) {

                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'Success',
                            text: user+' blocked successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to block '+user+'!'
                        });
                    }
                }//success
            });//ajax
        }
    });
}//block user
function activeUser(user_id,type) {
    let user="";
    if(type==2){
        user="manager";
    }else {
        user="customer";
    }

    swal({
        title: 'Are you sure to activate this '+user+'?',
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
                    func: 26,
                    user_id: user_id,
                },
                success: function (data) {

                    if (data.trim() == "true") {
                        swal({
                            icon: 'success',
                            title: 'Success',
                            text: user+' activated successfully!',
                        }).then((result) => {
                            location.reload();
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to activate '+user+ '!'
                        });
                    }
                }//success
            });//ajax
        }
    });
}//active user

function remove_profile_photo(employee_id) {
    swal({
        title: 'Are you sure to remove profile image?',
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
                    func: 27,
                    user_id: employee_id,
                },
                success: function (data) {

                    if (data.trim() == "true") {
                        location.reload();

                    } else {
                        swal({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to remove image, Please try again!'
                        });
                    }
                }//success
            });//ajax
        }
    });
}//active employee

