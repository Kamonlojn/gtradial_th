<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GT Radial Thailand</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- warpper -->
    <link href="css/970.css" rel="stylesheet">
    <!-- backtotop -->
    <link href="css/back-to-top.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- width 970px -->

  </head>
  <body>

    <div class="container-fluid" style="text-align:center; height:200px;">

        <div class="row row-header-1">
            <div class="warpper">
                <!-- navbar-brand -->
                <a href="index.html">
                    <div class="col-xs-12 col-md-7 header-banner"></div>
                </a>
                <!-- navbar-menu -->
                <div class="col-xs-12 col-md-5 header-nav">
                    <ul class="nav nav-pills nav-justified" >
                        <li role="presentation"><a href="index.html">หน้าหลัก</a></li>
                        <li role="presentation" class="dropdown" >
                            <a class="has-submenu" data-toggle="dropdown" href="#">
                                สินค้า
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" >
                                <li class=""><a href="passenger_car.html">รถยนต์ทั่วไป (Passenger Car)</a></li>
                                <li class=""><a href="suv_4x4.html">รถยนต์อเนกประสงค์ (SUV)</a></li>
                                <li class=""><a href="light_truck_and_van_tires.html">รถยนต์กระบะเล็ก/รถแวน (LIGHT TRUCK/VAN)</a></li>
                                <li class=""><a href="truck_and_bus.html">รถยนต์กระบะใหญ่และรถบรรทุก (TRUCK&BUS)</a></li>
                            </ul>
                        </li>
                        <li role="presentation" class=""><a href="care.html">ดูแลรักษา</a></li>
                        <li role="presentation" class="dropdown active">
                            <a class="has-submenu" data-toggle="dropdown" href="#">
                                เกี่ยวกับเรา
                                <span class="caret"></span>
                            </a>
                             <ul class="dropdown-menu" >
                                <li class=""><a href="about_us_2.html">ทำไมต้องเลือก?</a></li>
                                <li class=""><a href="about_us.html">เกี่ยวกับ จีที เรเดียล</a></li>
                                <li class=""><a href="contact.php">ติดต่อเรา</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--/row 1-->


    <div class="row">
        <div class="col-xs-12 col-md-12 header-product-catagory" style="">
            <div class="warpper" style="padding:10px;">
                <div class="col-md-2" style="background-color: rgba(4, 4, 4, 0.5); margin-bottom:10px; color:white; text-align:left;">
                    <label style="font-size:50px;">ติดต่อเรา</label>
                </div>
            </div>
        </div>
    </div><!--/ row2-->

    <div class="row row-content-1">
        <div class="warpper">
            <div class="row" style="text-align:left;">
                <a href="index.html">หน้าหลัก</a> >> ติดต่อเรา
            </div>
        </div>
    </div><!--/ row3-->

    <div class="row row-content-2" >
        <div class="warpper" style="height:350px; color:white; background-color:#034ea2;">
            <div class="col-xs-12 col-md-6" style="text-align:left; padding-bottom:20px;">
                <h2>ติดต่อเรา</h2></br>
                <span>
                    บริษัท ซิลเวอร์ไทร์ อินเตอร์เนชั่นแนล จำกัด</br>
                    88 ซอย ลาดพร้าว41 ถนน ลาดพร้าว จันทรเกษม </br>
                    จตุจักร กรุงเทพฯ 10900</br>
                    โทร: (02) 930-4115-8</br>
                    แฟกซ์: (02) 930-4133</br>
                    เฟสบุค: <a href="www.facebook.com/GTradialTH" style="color:white;">www.facebook.com/GTradialTH</a>
                </span>
            </div>

            <?php
            if(isset($_POST['submit'])){
                $to = "marketing@silvertire.com";
                $from = $_POST['email'];
                $full_name = $_POST['full_name'];
                $tel = $_POST['tel'];
                // $message = $_POST['message'];

                $header = "From: " . $full_name . "E-mail :". $from;
                $header2 = "From: " . $to . "\r\n";

                $message = $full_name . "\n" . "หมายเลขโทรศัพท์ : " . $tel . "\n\n" . $_POST['message'];
                $message2 = "สำเนาจดหมาย " . $full_name . "\n\n" . $_POST['message'];

                mail($to, $headers, $message ); // form customer

                mail($from, $header2, $message2); // to customer

                echo "Mail Sent. Thank you " . $full_name . ", we will contact you shortly.";
                // You can also use header('Location: thank_you.php'); to redirect to another page.
                }
            ?>

            <div class="col-xs-12 col-md-6" style="text-align:left; color:white; background-color:#034ea2;">
                <h2>ฝากข้อความ</h2>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-xs-2" style="text-align:right">ชื่อ</label>
                        <div class="col-xs-10">
                            <input name="full_name" class="form-control" placeholder="ชื่อ">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-2" style="text-align:right">อีเมล์</label>
                        <div class="col-xs-10">
                            <input name="email" class="form-control" placeholder="อีเมล์">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-2" style="text-align:right">โทร</label>
                        <div class="col-xs-10">
                            <input name="tel" class="form-control" placeholder="โทร">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-2" style="text-align:right">ข้อความ</label>
                        <div class="col-xs-10">
                            <textarea name="message" row="3" class="form-control" >
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <input class="col-xs-12 col-md-4 corner-radius-topic" type="submit" name="submit" value="ส่งข้อความ" style="text-align:center; cursor:pointer; border:0px;">
                        </div>
                    </div>
                </form>
            </div>
        </div> <!--/ content1 -->
    </div><!--/ row4-->

    <div class="row row-content-3">
    </div><!--/ row6-->
    <div class="row row-footer-1">
        <div class="warpper">
            <!-- global-footer-menu -->
            <div class="col-xs-12 col-md-3" style="text-align:left;">
                <b>สินค้า</b></br>
                <a href="passenger_car.html">Passenger Car</a></br>
                <a href="suv_4x4.html">SUV/4X4</a></br>
                <a href="light_truck_and_van_tires.html">Light Truck/Van</a></br>
                <a href="truck_and_bus.html">Truck & Bus</a></br>
            </div>
            <div class="col-xs-12 col-md-3" style="text-align:left;">
                <b>ดูแลรักษา</b></br>
                <a href="care_basic.html">พื้นฐานของยาง</a></br>
                <a href="care_maintenance.html">ดูแลรักษา</a></br>
                <a href="#">วิธีใช้</a></br>
            </div>
            <div class="col-xs-12 col-md-3" style="text-align:left;">
                <b>เกี่ยวกับเรา</b></br>
                <a href="about_us_2.html">ทำไมต้องเลือก?</a></br>
                <a href="about_us.html">เกี่ยวกับ จีที เรเดียล</a></br>
                <a href="contact.html">ติดต่อเรา</a></br>
            </div>
            <div class="col-xs-12 col-md-3" style="text-align:left;">
                <div class="row"><b>ติดตาม</b></br></div>
                <div class="row">
                    <a href="https://www.facebook.com/GTradialTH/?fref=ts">
                        <div class="col-xs-12 col-md-4" style="width:24px; height:24px; background-image:url('images/sprites.png'); background-repeat : no-repeat; background-position: -0px -1559px; background-size:44px 1776px; height:24px;">
                        </div>
                    </a>

                    <a href="https://twitter.com/gtradialglobal">
                        <div class="col-xs-12 col-md-4" style="width:24px; height:24px; background-image:url('images/sprites.png'); background-repeat : no-repeat; background-position: -0px -1585px; background-size:44px 1776px; height:24px;">
                        </div>
                    </a>
                    <a href="https://www.youtube.com/channel/UCoSK0vVb9iryZ92R0EHIlgQ">
                        <div class="col-xs-12 col-md-4" style="width:24px; height:24px; background-image:url('images/sprites.png'); background-repeat : no-repeat; background-position: -0px -1611px; background-size:44px 1776px; height:24px;">
                        </div>
                    </a>
                </div>
            </div>
            <!-- global-footer-menu End -->
        </div><!--/warrper-->
    </div><!--/ row6-->
    <div class="row row-footer-2" >
        <div class="col-xs-12 col-md-12">

        </div>
    </div><!--/ row7-->

    <a href="#0" class="cd-top">Top</a>
    </div><!-- /.container-fluid -->















    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- use jssor.slider.debug.js for debug -->
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- Modernizr -->
    <script src="js/modernizr.js"></script>
    <!-- Main scroll to top, -->
    <script src="js/main.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            console.log("Ready")
            /*slide*/
            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                           //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
            /* /slide*/
        });
    </script>
  </body>
</html>
