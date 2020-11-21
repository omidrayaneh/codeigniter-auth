<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<div id="container">
    <div class="container">
        <!-- Breadcrumb Start-->
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="login.html">حساب کاربری</a></li>
            <li><a href="login.html">ورود</a></li>
        </ul>
        <!-- Breadcrumb End-->
        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-sm-9">
                <h1 class="title">حساب کاربری ورود</h1>
                <div class="row">
                    <?php if(isset($_SESSION['success'])) { ?>
                        <div class="alert alert-success" ><?php echo  $_SESSION['success']; ?></div>
                    <?php  }?>
                    <?php if(isset($_SESSION['error'])) { ?>
                        <div id="error" class="alert alert-danger" ><?php echo  $_SESSION['error']; ?></div>
                    <?php  }?>
                    <?php echo validation_errors(
                        ' <div class="alert alert-danger text-center" role="alert">','</div>');
                    ?>
                    <div id="login-form"  class="form-horizontal"  >
                        <div class="col-sm-6">
                            <h2 class="subtitle">مشتری جدید</h2>
                            <p><strong>ثبت نام حساب کاربری</strong></p>
                            <p>با ایجاد حساب کاربری میتوانید سریعتر خرید کرده، از وضعیت خرید خود آگاه شده و تاریخچه ی سفارشات خود را مشاهده کنید.</p>
                            <a href="register" class="btn btn-primary">ادامه</a> </div>
                        <div class="col-sm-6">
                        <h2 class="subtitle">مشتری قبلی</h2>
                        <p><strong>من از قبل مشتری شما هستم</strong></p>
                        <div class="form-group">
                            <label class="control-label" for="input-email">آدرس ایمیل</label>
                            <input type="text" id="email" name="email" value="" placeholder="آدرس ایمیل"  class="form-control" />
                            <div id="email-error" style="display: none"  class="alert alert-danger" ></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-password">رمز عبور</label>
                            <input type="password" name="password"  id="password" value="" placeholder="رمز عبور" class="form-control" />
                            <div id="pass-error" style="display: none"  class="alert alert-danger" ></div>
                            <br />
                            <a href="#">فراموشی رمز عبور</a></div>
                        <input type="submit" onclick="submitform()"  value="ورود" name="login" class="btn btn-primary" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    /*Custom fucntion to validate data and submit data thorugh ajax*/
    function submitform() {

        /*Checking the value of inputs*/
        var email = $("input[name='email']").val();
        var pass_message = document.getElementById("pass-error");
        var email_message = document.getElementById("email-error");
        var password = $("input[name='password']").val();

        /*Validating the values of inputs that it is neither null nor undefined.*/

        if (email === '' || email === undefined) {
            $('#email').css('border', '1px solid red');
            email_message.style.display = "block";
            email_message.innerHTML = 'ایمیل الزامی می باشد';

        }else {
            $('#email').css('border', '1px solid green');
             email_message = document.getElementById("email-error");
            email_message.style.display = "none";
        }
        if (password === '' || password === undefined) {
          //  $('#password').css('border', '1px solid red');

            pass_message.style.display = "block";
            pass_message.innerHTML = 'رمز عبور الزامی می باشد';
        }else {
            $('#email').css('border', '1px solid green');
            email_message = document.getElementById("pass-error");
            email_message.style.display = "none";
        }
            /*Ajax call*/
            $.ajax({
                url: "<?php echo base_url('api/login') ?>",
                method: 'POST',
                data: {email: email, password: password},
                statusCode: {
                    400: function (xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'خطا',
                            text: 'رمز عبور و نام کاربری اجباری می باشد',
                        })
                    },
                    500:function (xhr){
                        Swal.fire({
                            icon: 'error',
                            title: 'خطا',
                            text: 'رمز عبور یا نام کاربری اشتباه می باشد',
                        })
                    }
                },
                success: function (result) {
                    /*result is the response from LoginController.php file under getLogin.php function*/

                    if (result.data.role === 'admin'){
                         window.location.href = "/dashboard";
                    }else{
                        window.location.href = "/";
                    }
                }

            });

    }

</script>