(function(window, undefined) {
  'use strict';

    $('#phone').keyup(function(){
        if($.trim(this.value).length == 10){
            $.ajax({ 
                type        : 'POST',
                data        : {mobile_no : $("#phone").val()},
                url         : "Login/regPhoneCheck",
                success: function(data) {
                    if (data){
                        $("#checkPh").text('Phone no. already registered');
                        $(".actions ul li a[href='#next']").fadeOut();
                    }
                    else{
                        $("#checkPh").text('');
                        $(".actions ul li a[href='#next']").fadeIn();
                    }
                },
                error:function(data) {
                    alert('error');
                }
            });
        }
        else{
            $("#checkPh").text('');
        }
    });

    $(".actions ul li a[href='#next']").click(function(){
        if($("#name").valid() && $("#phone").valid()){
            $(".actions ul li a[href='#next']").fadeOut();
                if(!$("#phone").hasClass("sent")){
                    $("#phone").addClass("sent");
                    $.ajax({ 
                        type        : 'POST',
                        url         : "Login/regOtp", 
                        data        : {phone : $("#phone").val()},
                        success: function(data) {
                            console.log(data);
                        },
                        error:function(data) {
                            alert('error');
                        }
                    });
                }
        }

    });

    $('#otp').keyup(function(){
        if($.trim(this.value).length == 6){
            $.ajax({ 
                type        : 'POST',
                data        : {otp : $("#otp").val()},
                url         : "Login/verifyOtp",
                success: function(data) {
                    if (data){
                        $('#otp_status').removeClass("danger");
                        $('#otp_status').addClass("success");
                        $('#otp').attr("readonly","true");
                        $('#otp_status').text("✔ OTP verified");
                        $(".actions ul li a[href='#next']").fadeIn();
                        $(".actions ul li a[href='#previous']").fadeOut();
                    }
                    else{
                        $('#otp_status').removeClass("success");
                        $('#otp_status').addClass("danger");
                        $('#otp_status').text("✗ Wrong OTP");
                        $(".actions ul li a[href='#previous']").fadeIn();
                        console.log("wrong otp");
                    }
                },
                error:function(data) {
                    alert('error');
                }
            });
        }
        else{
            $('#fwd').hide();
            $('#otp_status').text('');

        }
    });
      
    $(".actions ul li a[href='#previous']").click(function(){
        $("#phone").removeClass("sent");
        $(".actions ul li a[href='#next']").fadeIn();
    });

    $('#select-files').change(function() {
        var file_data = $('#select-files').prop('files')[0];   
        var form_data = new FormData();                  
        form_data.append('file', file_data);             
        $.ajax({
            url: 'Edit/img_upload',
             
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,                         
            type: 'post',
            success: function(data){
                window.location.reload();
            }
        });
    });

    $('#reset-profile-img').click(function() {           
        $.ajax({
            url: 'Delete/profile_img',
            success: function(data){
                window.location.reload();
            }
        });
    });

    $('#pwd_change').validate({})


})(window);