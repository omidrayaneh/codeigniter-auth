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
                        <div class="alert alert-danger" ><?php echo  $_SESSION['error']; ?></div>
                    <?php  }?>
                    <?php echo validation_errors(
                        ' <div class="alert alert-danger" role="alert">','</div>');
                    ?>
                    <form class="form-horizontal" action="" method="post">
                        <div class="col-sm-6">
                            <h2 class="subtitle">مشتری جدید</h2>
                            <p><strong>ثبت نام حساب کاربری</strong></p>
                            <p>با ایجاد حساب کاربری میتوانید سریعتر خرید کرده، از وضعیت خرید خود آگاه شده و تاریخچه ی سفارشات خود را مشاهده کنید.</p>
                            <a href="register.html" class="btn btn-primary">ادامه</a> </div>
                        <div class="col-sm-6">
                        <h2 class="subtitle">مشتری قبلی</h2>
                        <p><strong>من از قبل مشتری شما هستم</strong></p>
                        <div class="form-group">
                            <label class="control-label" for="input-email">آدرس ایمیل</label>
                            <input type="text" name="email" value="" placeholder="آدرس ایمیل" id="input-email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-password">رمز عبور</label>
                            <input type="password" name="password" value="" placeholder="رمز عبور" id="input-password" class="form-control" />
                            <br />
                            <a href="#">فراموشی رمز عبور</a></div>
                        <input type="submit" value="ورود" name="login" class="btn btn-primary" />
                        </div>
                    </form>
                </div>
            </div>
            <!--Middle Part End -->
            <!--Right Part Start -->

            <!--Right Part End -->
        </div>
    </div>
</div>