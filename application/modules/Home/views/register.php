<div id="container">
    <div class="container">
        <!-- Breadcrumb Start-->
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="login.html">حساب کاربری</a></li>
            <li><a href="register.html">ثبت نام</a></li>
        </ul>
        <!-- Breadcrumb End-->
        <div class="row">
            <!--Middle Part Start-->
            <div class="col-sm-9" id="content">
                <h1 class="title">ثبت نام حساب کاربری</h1>
                <p>اگر قبلا حساب کاربریتان را ایجاد کرد اید جهت ورود به <a href="login.html">صفحه لاگین</a> مراجعه کنید.</p>

                   <?php echo validation_errors(
                           ' <div class="alert alert-danger text-center" role="alert">','</div>');
                   ?>
                <div id="error1" class="alert alert-danger invisible" ></div>

                <div class="form-horizontal" >
                    <fieldset id="account">
                        <legend>اطلاعات شخصی شما</legend>

                        <div class="form-group required">
                            <label for="input-firstname" class="col-sm-2 control-label">نام</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" placeholder="نام" value="" name="username">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="input-email" class="col-sm-2 control-label">آدرس ایمیل</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="آدرس ایمیل" value="" name="email">
                            </div>
                        </div>
                    <fieldset>
                        <div class="form-group required">
                            <label for="input-password" class="col-sm-2 control-label">رمز عبور</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" placeholder="رمز عبور" value="" name="password">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="input-confirm" class="col-sm-2 control-label">تکرار رمز عبور</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="confirm" placeholder="تکرار رمز عبور" value="" name="confirm">
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons">
                        <div class="pull-right">
                            <input type="checkbox" value="1" name="agree">
                            &nbsp;من <a class="agree" href="#"><b>سیاست حریم خصوصی</b> را خوانده ام و با آن موافق هستم</a> &nbsp;
                            <input type="submit" onclick="submitform()" class="btn btn-primary" name="register" value="ثبت نام">
                        </div>
                    </div>
                </div>
            </div>
            <!--Middle Part End -->
        </div>
    </div>
</div>
<script>
    /*Custom fucntion to validate data and submit data thorugh ajax*/
    function submitform() {

        /*Checking the value of inputs*/

        var username = $("input[name='username']").val();
        var email = $("input[name='email']").val();
        var password = $("input[name='password']").val();
        var confirm = $("input[name='confirm']").val();
        var error = document.getElementById("error1");

        /*Ajax call*/
        $.ajax({
            url: "<?php echo base_url('api/register') ?>",
            method: 'POST',
            data: {username: username ,email: email, password: password,confirm:confirm },
            statusCode: {
                400: function (xhr) {
                    $("#error1").removeClass('invisible');
                    error.innerHTML='';
                    error.innerHTML +=  xhr.responseJSON.message;
                },
                500:function (xhr){
                    $("#error1").removeClass('invisible');
                    error.innerHTML='';
                    error.innerHTML +=  xhr.responseJSON.message;
                }
            },
            success: function (result) {
                    window.location.href = "/login";
            }

        });

    }

</script>