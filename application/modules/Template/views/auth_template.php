<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo base_url(); ?>assets/home/image/favicon.png" rel="icon" />
    <title> <?php if (!empty($title)) echo $title;?></title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/js/bootstrap/css/bootstrap-rtl.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/stylesheet-rtl.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/responsive-rtl.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/stylesheet-skin3.css" />

    <!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <nav id="top" class="htop">
            <div class="container">
                <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                    <div class="pull-left flip left-top">
                        <div class="links">
                            <ul>
                                <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                                <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a></li>
                                <li class="wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی<b></b></a>
                                    <div class="dropdown-menu custom_block">
                                        <ul>
                                            <li>
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img alt="" src="<?php echo base_url(); ?>assets/home/image/banner/cms-block.jpg"></td>
                                                        <td><img alt="" src="<?php echo base_url(); ?>assets/home/image/banner/responsive.jpg"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h4>بلاک های محتوا</h4></td>
                                                        <td><h4>قالب واکنش گرا</h4></td>
                                                    </tr>
                                                    <tr>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">لیست علاقه مندی (0)</a></li>
                                <li><a href="#">تسویه حساب</a></li>
                            </ul>
                        </div>
                        <div id="language" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> <img src="<?php echo base_url(); ?>assets/home/image/flags/gb.png" alt="انگلیسی" title="انگلیسی">انگلیسی <i class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="<?php echo base_url(); ?>assets/home/image/flags/gb.png" alt="انگلیسی" title="انگلیسی" /> انگلیسی</button>
                                </li>
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="<?php echo base_url(); ?>assets/home/image/flags/ar.png" alt="عربی" title="عربی" /> عربی</button>
                                </li>
                            </ul>
                        </div>
                        <div id="currency" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> تومان <i class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ USD</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="top-links" class="nav pull-right flip">
                        <ul>
                            <?php  if (!isset($_SESSION['user_logged'])){?>
                                <li><a href="login">ورود</a></li>
                                <li><a href="register">ثبت نام</a></li>
                            <?php }else{?>
                                <li><a href="logout">خروج</a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Top Bar End-->
        <!-- Header Start-->
        <header class="header-row">
            <div class="container">
                <div class="table-container">
                    <!-- Logo Start -->
                    <div class="col-table-cell col-lg-4 col-md-4 col-sm-12 col-xs-12 inner">
                        <div id="logo"><a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>assets/home/image/logo.png" title="MarketShop" alt="MarketShop" /></a></div>
                    </div>
                    <!-- Logo End -->
                    <!-- جستجو Start-->
                    <div class="col-table-cell col-lg-5 col-md-5 col-md-push-0 col-sm-6 col-sm-push-6 col-xs-12">
                        <div id="search" class="input-group">
                            <input id="filter_name" type="text" name="search" value="" placeholder="جستجو" class="form-control input-lg" />
                            <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- جستجو End-->
                    <!-- Mini Cart Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-md-pull-0 col-sm-6 col-sm-pull-6 col-xs-12 inner">
                        <div id="cart">
                            <button type="button" data-toggle="dropdown" data-loading-text="بارگذاری ..." class="heading dropdown-toggle">
                                <span class="cart-icon pull-left flip"></span>              <span id="cart-total">2 آیتم - 132000 تومان</span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td class="text-center"><a href="#"><img class="img-thumbnail" title="کفش راحتی مردانه" alt="کفش راحتی مردانه" src="<?php echo base_url(); ?>assets/home/image/product/sony_vaio_1-50x50.jpg"></a></td>
                                            <td class="text-left"><a href="#">کفش راحتی مردانه</a></td>
                                            <td class="text-right">x 1</td>
                                            <td class="text-right">32000 تومان</td>
                                            <td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><a href="#"><img class="img-thumbnail" title="تبلت ایسر" alt="تبلت ایسر" src="<?php echo base_url(); ?>assets/home/image/product/samsung_tab_1-50x50.jpg"></a></td>
                                            <td class="text-left"><a href="#">تبلت ایسر</a></td>
                                            <td class="text-right">x 1</td>
                                            <td class="text-right">98000 تومان</td>
                                            <td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="text-right"><strong>جمع کل</strong></td>
                                                <td class="text-right">132000 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>کسر هدیه</strong></td>
                                                <td class="text-right">4000 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>مالیات</strong></td>
                                                <td class="text-right">11880 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>قابل پرداخت</strong></td>
                                                <td class="text-right">139880 تومان</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p class="checkout"><a href="cart.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;&nbsp;&nbsp;<a href="checkout.html" class="btn btn-primary"><i class="fa fa-share"></i> تسویه حساب</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mini Cart End-->
                </div>
            </div>
        </header>
        <!-- Header End-->
        <!-- Main آقایانu Start-->
        <nav id="menu" class="navbar">
            <div class="container">
                <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="home_link" title="خانه" href="index.html"><span>خانه</span></a></li>
                        <li class="dropdown"><a>خرید بر اساس دسته بندی</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <a href="category.html">البسه<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">آقایان <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">زیردسته ها</a></li>
                                                            <li><a href="category.html">زیردسته ها</a></li>
                                                            <li><a href="category.html">زیردسته ها</a></li>
                                                            <li><a href="category.html">زیردسته ها</a></li>
                                                            <li><a href="category.html">زیردسته جدید</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html" >بانوان</a> </li>
                                                <li><a href="category.html">دخترانه<span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">زیردسته ها </a></li>
                                                            <li><a href="category.html">زیردسته جدید</a></li>
                                                            <li><a href="category.html">زیردسته جدید</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">پسرانه</a></li>
                                                <li><a href="category.html">نوزاد</a></li>
                                                <li><a href="category.html">لوازم <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">زیردسته های جدید</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li> <a href="category.html">الکترونیکی<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li> <a href="category.html">لپ تاپ <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li> <a href="category.html">زیردسته های جدید </a> </li>
                                                            <li> <a href="category.html">زیردسته های جدید </a> </li>
                                                            <li> <a href="category.html">زیردسته جدید </a> </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li> <a href="category.html">رومیزی <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li> <a href="category.html">زیردسته های جدید </a> </li>
                                                            <li> <a href="category.html">زیردسته جدید </a> </li>
                                                            <li> <a href="category.html">زیردسته جدید </a> </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li> <a href="category.html">دوربین <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li> <a href="category.html">زیردسته های جدید</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">موبایل و تبلت <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">زیردسته های جدید</a></li>
                                                            <li><a href="category.html">زیردسته های جدید</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">صوتی و تصویری <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">زیردسته های جدید </a> </li>
                                                            <li><a href="category.html">زیردسته جدید </a> </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">لوازم خانگی</a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">کفش<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">آقایان</a> </li>
                                                <li><a href="category.html">بانوان <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">زیردسته های جدید </a> </li>
                                                            <li><a href="category.html">زیردسته ها </a> </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">دخترانه</a> </li>
                                                <li><a href="category.html">پسرانه</a> </li>
                                                <li><a href="category.html">نوزاد</a> </li>
                                                <li><a href="category.html">لوازم <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">زیردسته های جدید</a></li>
                                                            <li><a href="category.html">زیردسته های جدید</a></li>
                                                            <li><a href="category.html">زیردسته ها</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li> <a href="category.html">ساعت<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li> <a href="category.html">ساعت مردانه</a></li>
                                                <li> <a href="category.html">ساعت زنانه</a></li>
                                                <li> <a href="category.html">ساعت بچگانه</a></li>
                                                <li> <a href="category.html">لوازم</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li> <a href="category.html">جواهرات<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li> <a href="category.html">نقره <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li> <a href="category.html">زیردسته های جدید</a></li>
                                                            <li> <a href="category.html">زیردسته های جدید</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">طلا <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">تست 1</a></li>
                                                            <li><a href="category.html">تست 2</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">الماس</a></li>
                                                <li><a href="category.html">مروارید <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">زیردسته های جدید</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">زیورآلات آقایان</a></li>
                                                <li><a href="category.html">زیورآلات کودکان <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">زیردسته های جدید </a> </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">زیبایی و سلامت<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li> <a href="category.html">عطر و ادکلن</a></li>
                                                <li> <a href="category.html">آرایشی</a></li>
                                                <li> <a href="category.html">ضد آفتاب</a></li>
                                                <li> <a href="category.html">مراقبت از پوست</a></li>
                                                <li> <a href="category.html">مراقبت از چشم</a></li>
                                                <li> <a href="category.html">مراقبت از مو</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li> <a href="category.html">کودک و نوزاد<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">اسباب بازی</a></li>
                                                <li><a href="category.html">بازی <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">تست 25</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">پازل</a></li>
                                                <li><a href="category.html">سرگرمی</a></li>
                                                <li><a href="category.html">متنوع</a></li>
                                                <li><a href="category.html">سلامت و امنیت</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li> <a href="category.html">ورزشی<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">دوچرخه سواری</a></li>
                                                <li><a href="category.html">دویدن</a></li>
                                                <li><a href="category.html">شنا</a></li>
                                                <li><a href="category.html">فوتبال</a></li>
                                                <li><a href="category.html">گلف</a></li>
                                                <li><a href="category.html">موج سواری</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li> <a href="category.html">خانه و باغچه<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">لوازم خواب</a></li>
                                                <li><a href="category.html">خوراک</a></li>
                                                <li><a href="category.html">لوازم منزل</a></li>
                                                <li><a href="category.html">آشپزخانه</a></li>
                                                <li><a href="category.html">روشنایی</a></li>
                                                <li><a href="category.html">ابزارها</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li> <a href="category.html">خوراک<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">نوشیدنی</a></li>
                                                <li><a href="category.html">تنقلات</a></li>
                                                <li><a href="category.html">میان وعده</a></li>
                                                <li><a href="category.html">خشک بار</a></li>
                                                <li><a href="category.html">شکلات</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu_brands dropdown"><a href="#">برند ها</a>
                            <div class="dropdown-menu">
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url(); ?>assets/home/image/product/apple_logo-60x60.jpg" title="اپل" alt="اپل" /></a><a href="#">اپل</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url(); ?>assets/home/image/product/canon_logo-60x60.jpg" title="کنون" alt="کنون" /></a><a href="#">کنون</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"> <a href="#"><img src="<?php echo base_url(); ?>assets/home/image/product/hp_logo-60x60.jpg" title="اچ پی" alt="اچ پی" /></a><a href="#">اچ پی</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url(); ?>assets/home/image/product/htc_logo-60x60.jpg" title="اچ تی سی" alt="اچ تی سی" /></a><a href="#">اچ تی سی</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url(); ?>assets/home/image/product/palm_logo-60x60.jpg" title="پالم" alt="پالم" /></a><a href="#">پالم</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url(); ?>assets/home/image/product/sony_logo-60x60.jpg" title="سونی" alt="سونی" /></a><a href="#">سونی</a> </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url(); ?>assets/home/image/product/canon_logo-60x60.jpg" title="test" alt="test" /></a><a href="#">تست</a> </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url(); ?>assets/home/image/product/apple_logo-60x60.jpg" title="test 3" alt="test 3" /></a><a href="#">تست 3</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url(); ?>assets/home/image/product/canon_logo-60x60.jpg" title="test 5" alt="test 5" /></a><a href="#">تست 5</a> </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url(); ?>assets/home/image/product/canon_logo-60x60.jpg" title="test 6" alt="test 6" /></a><a href="#">تست 6</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url(); ?>assets/home/image/product/apple_logo-60x60.jpg" title="test 7" alt="test 7" /></a><a href="#">تست 7</a> </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url(); ?>assets/home/image/product/canon_logo-60x60.jpg" title="test1" alt="test1" /></a><a href="#">تست1</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="<?php echo base_url(); ?>assets/home/image/product/apple_logo-60x60.jpg" title="test2" alt="test2" /></a><a href="#">تست2</a></div>
                            </div>
                        </li>
                        <li class="custom-link"><a href="#">لینک های دلخواه</a></li>
                        <li class="dropdown wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی</a>
                            <div class="dropdown-menu custom_block">
                                <ul>
                                    <li>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td><img alt="" src="<?php echo base_url(); ?>assets/home/image/banner/cms-block.jpg"></td>
                                                <td><img alt="" src="<?php echo base_url(); ?>assets/home/image/banner/responsive.jpg"></td>
                                                <td><img alt="" src="<?php echo base_url(); ?>assets/home/image/banner/cms-block.jpg"></td>
                                            </tr>
                                            <tr>
                                                <td><h4>بلاک های محتوا</h4></td>
                                                <td><h4>قالب واکنش گرا</h4></td>
                                                <td><h4>پشتیبانی ویژه</h4></td>
                                            </tr>
                                            <tr>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                            </tr>
                                            <tr>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown information-link"><a>برگه ها</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="#">ورود</a></li>
                                    <li><a href="#">ثبت نام</a></li>
                                    <li><a href="#">دسته بندی (شبکه/لیست)</a></li>
                                    <li><a href="#">محصولات</a></li>
                                    <li><a href="#">سبد خرید</a></li>
                                    <li><a href="#">تسویه حساب</a></li>
                                    <li><a href="#">مقایسه</a></li>
                                    <li><a href="#">لیست آرزو</a></li>
                                    <li><a href="#">جستجو</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">درباره ما</a></li>
                                    <li><a href="#">404</a></li>
                                    <li><a href="#">عناصر</a></li>
                                    <li><a href="#">سوالات متداول</a></li>
                                    <li><a href="#">نقشه سایت</a></li>
                                    <li><a href="#">تماس با ما</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="contact-link"><a href="contact-us.html">تماس با ما</a></li>
                        <li class="custom-link-right"><a href="#" target="_blank">پیشنهاد های ویژه</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Main آقایانu End-->
    </div>
    <?php $this->load->view($content_view); ?>

    <!--Footer Start-->
    <footer id="footer">
        <div class="fpart-first">
            <div class="container">
                <div class="row">
                    <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h5>اطلاعات تماس</h5>
                        <ul>
                            <li class="address"><i class="fa fa-map-marker"></i>میدان تایمز، شماره 77، نیویورک</li>
                            <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                            <li class="email"><i class="fa fa-envelope"></i>برقراری ارتباط از طریق <a href="contact-us.html">تماس با ما</a>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>اطلاعات</h5>
                        <ul>
                            <li><a href="#">درباره ما</a></li>
                            <li><a href="#">اطلاعات 0 تومان</a></li>
                            <li><a href="#">حریم خصوصی</a></li>
                            <li><a href="#">شرایط و قوانین</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>خدمات مشتریان</h5>
                        <ul>
                            <li><a href="#">تماس با ما</a></li>
                            <li><a href="#">بازگشت</a></li>
                            <li><a href="#">نقشه سایت</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>امکانات جانبی</h5>
                        <ul>
                            <li><a href="#">برند ها</a></li>
                            <li><a href="#">کارت هدیه</a></li>
                            <li><a href="#">بازاریابی</a></li>
                            <li><a href="#">ویژه ها</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>حساب من</h5>
                        <ul>
                            <li><a href="#">حساب کاربری</a></li>
                            <li><a href="#">تاریخچه سفارشات</a></li>
                            <li><a href="#">لیست علاقه مندی</a></li>
                            <li><a href="#">خبرنامه</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="fpart-second">
            <div class="container">
                <div id="powered" class="clearfix">
                    <div class="powered_text pull-left flip">
                        <p>کپی رایت © 2016 فروشگاه شما | پارسی سازی و ویرایش توسط <a href="http://www.20script.ir" target="_blank">بیست اسکریپت</a></p>
                    </div>
                    <div class="social pull-right flip"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?php echo base_url(); ?>assets/home/image/socialicons/facebook.png" alt="Facebook" title="Facebook"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?php echo base_url(); ?>assets/home/image/socialicons/twitter.png" alt="Twitter" title="Twitter"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?php echo base_url(); ?>assets/home/image/socialicons/google_plus.png" alt="Google+" title="Google+"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?php echo base_url(); ?>assets/home/image/socialicons/pinterest.png" alt="Pinterest" title="Pinterest"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?php echo base_url(); ?>assets/home/image/socialicons/rss.png" alt="RSS" title="RSS"> </a> </div>
                </div>
                <div class="bottom-row">
                    <div class="custom-text text-center">
                        <img alt="" src="<?php echo base_url(); ?>assets/home/image/logo-small.png">
                        <p>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید. لورم ایپسوم یک متن آزمایشی برای پر کردن این محل است..</p>
                    </div>
                    <div class="payments_types"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?php echo base_url(); ?>assets/home/image/payment/payment_paypal.png" alt="paypal" title="PayPal"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?php echo base_url(); ?>assets/home/image/payment/payment_american.png" alt="american-express" title="American Express"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?php echo base_url(); ?>assets/home/image/payment/payment_2checkout.png" alt="2checkout" title="2checkout"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?php echo base_url(); ?>assets/home/image/payment/payment_maestro.png" alt="maestro" title="Maestro"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?php echo base_url(); ?>assets/home/image/payment/payment_discover.png" alt="discover" title="Discover"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="<?php echo base_url(); ?>assets/home/image/payment/payment_mastercard.png" alt="mastercard" title="MasterCard"></a> </div>
                </div>
            </div>
        </div>
        <div id="back-top"><a data-toggle="tooltip" title="بازگشت به بالا" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
    </footer>
    <!--Footer End-->
    <!-- Facebook Side Block Start -->
    <div id="facebook" class="fb-left sort-order-1">
        <div class="facebook_icon"><i class="fa fa-facebook"></i></div>
        <div class="fb-page" data-href="https://www.facebook.com/harnishdesign/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.facebook.com/harnishdesign/"><a href="https://www.facebook.com/harnishdesign/">هارنیش دیزاین</a></blockquote>
            </div>
        </div>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
    </div>
    <!-- Facebook Side Block End -->
    <!-- Twitter Side Block Start -->
    <div id="twitter_footer" class="twit-left sort-order-2">
        <div class="twitter_icon"><i class="fa fa-twitter"></i></div>
        <a class="twitter-timeline" href="https://twitter.com/" data-chrome="nofooter noscrollbar transparent" data-theme="light" data-tweet-limit="2" data-related="twitterapi,twitter" data-aria-polite="assertive" data-widget-id="347621595801608192">توییت های @</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    <!-- Twitter Side Block End -->
    <!-- Video Side Block Start -->
    <div id="video_box" class="vb-right sort-order-1">
        <div id="video_box_icon"><i class="fa fa-play"></i></div>
        <p>
            <iframe allowfullscreen="" src="//www.youtube.com/embed/SZEflIVnhH8" height="315" width="560"></iframe>
        </p>
    </div>
    <!-- Video Side Block End -->
    <!-- Custom Side Block Start -->
    <div id="custom_side_block" class="custom_side_block_right sort-order-2">
        <div class="custom_side_block_icon"> <i class="fa fa-chevron-right"></i> </div>
        <table>
            <tbody>
            <tr>
                <td><h2>بلاک های محتوا</h2></td>
            </tr>
            <tr>
                <td><img alt="" src="<?php echo base_url(); ?>assets/home/image/banner/cms-block.jpg"></td>
            </tr>
            <tr>
                <td>میتوانید محتوای دلخواه خود را به این بخش اضافه کنید.</td>
            </tr>
            <tr>
                <td><strong><a href="#">ادامه مطلب</a></strong></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- Custom Side Block End -->
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/custom.js"></script>
<!-- JS Part End-->
</body>
</html>

