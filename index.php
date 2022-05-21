<?php
include_once('include/header.php');

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST')
{ 
    date_default_timezone_set('Asia/Kolkata');

    $_POST = array_map(function($input){
        return filter_var($input, FILTER_SANITIZE_STRING);
    }, $_POST);

    extract($_POST);

    $date = date('d-m-Y');
    $time = date('H:i a');

    $sql = $conn->prepare("INSERT INTO `user` (`name`, `phone`, `service`, `warranty`, `address`, `city`, `pincode`, `date`, `time`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param("sssssssss", $name, $phone, $service, $warranty, $address, $city, $pincode, $date, $time);
    
    $msg = $sql->execute() === true ? 'Thank you for contacting us. Your Service Request has been booked. Our service technician will call you soon.'
                : 'Something not going good. Try again.';

    $sql->close();
    $conn->close();

    echo '<script>alert("'.$msg.'"); window.open("'.$_SERVER['PHP_SELF'].'", "_self");</script>';
}

?>
<div class="ltn__utilize-overlay"></div>
<!-- SLIDER AREA START (slider-3) -->
<div class="ltn__slider-area ltn__slider-3  section-bg-2---">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60---" data-bg="img/slider/banner/2.jpg">
            <div class="ltn__slide-item-inner  text-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h6 class="slide-sub-title ltn__secondary-color animated text-uppercase"><span><i class="fas fa-square-full"></i></span> Great Experience In Services</h6>
                                    <h1 class="slide-title animated color_white">Air Conditioning <br> Repair & Service</h1>
                                    <div class="slide-brief animated">
                                        <p class="color_white">for your home and work place all type of <br> Air Conditioner</p>
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="services.php" class="theme-btn-1 btn btn-effect-1" tabindex="0">Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60---" data-bg="img/slider/71.jpg">
            <div class="ltn__slide-item-inner  text-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h6 class="slide-sub-title ltn__secondary-color animated text-uppercase"><span><i class="fas fa-square-full"></i></span> Great Experience In Services</h6>
                                    <h1 class="slide-title animated ">Need To Service/Repair <br> Your Microwave Repair</h1>
                                    <div class="slide-brief animated">
                                        <p>Solo Microwave Oven Service<br>Window Air Conditioner Service</p>
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="services.php" class="theme-btn-1 btn btn-effect-1">Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60---" data-bg="img/slider/banner/10.jpg">
            <div class="ltn__slide-item-inner  text-right">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h6 class="slide-sub-title ltn__secondary-color animated text-uppercase"><span><i class="fas fa-square-full"></i></span> Great Experience In Services</h6>
                                    <h1 class="slide-title animated ">Washing Machine <br> Repair & Service</h1>
                                    <div class="slide-brief animated">
                                        <p>Top Loading Washing Machine Service<br> Semi-Automatic Washing Machine Service</p>
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="services.php" class="theme-btn-1 btn btn-effect-1">Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
</div>
<!-- SLIDER AREA END -->
<div id="Appoinment" class="ltn__img-slider-area pt-80 pb-80" data-bg="img/bg/8.jpg" style="background-image: url(&quot;img/bg/8.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">Make an Appoinment</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="ltn__form-box contact-form-box box-shadow white-bg">
                    <h4 class="title-2">Contact for any Inquiry</h4>
                    <form id="contact-form" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="name" placeholder="Enter Your Full Name" maxlength="100" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-phone ltn__custom-icon">
                                    <input type="text" name="phone" pattern="[0-9]{10}" placeholder="Enter phone number" maxlength="10" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item">
                                    <select class="nice-select" name="service" style="display: none;" required="">
                                        <option>Fridge/Refregirator Repair</option>
                                        <option>Washing Machine Repair</option>
                                        <option>Microwave Oven Repair</option>
                                        <option>Air Conditioner Repair</option>
                                        <option>LCD/LED Repair</option>
                                        <option>Water Purifier Repair</option>
                                        <option>Water Dispenser Repair</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item">
                                    <select class="nice-select" name="warranty" style="display: none;" required="">
                                        <option>Under One Year</option>
                                        <option>More Than One Year</option>
                                        <option>2 To 5 Year</option>
                                        <option>6 To 10 Year</option>
                                        <option>More Than 10 Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-home ltn__custom-icon">
                                    <input type="text" class="form-control" name="city" id="city" placeholder="City" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-home ltn__custom-icon">
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Address" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-home ltn__custom-icon">
                                    <input type="text" class="form-control" placeholder="Pincode" name="pincode" pattern="[0-9]{6}" maxlength="6" required="">
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapper mt-0">
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area section-bg-1 bg-image pt-120 pb-90" data-bg="img/bg/31.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">Our Services</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__category-slider-active--- slick-arrow-1 justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="services.php">
                        <span class="category-icon"><img src="img/icn/1.png" class="icn"></span>
                        <span class="category-title">Refrigerator Repair</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="services.php">
                        <span class="category-icon"><img src="img/icn/2.png" class="icn"></span>
                        <span class="category-title">Washing Machine Repair</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="services.php">
                        <span class="category-icon"><img src="img/icn/3.png" class="icn"></span>
                        <span class="category-title">Microwave Repair</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="services.php">
                        <span class="category-icon"><img src="img/icn/4.png" class="icn"></span>
                        <span class="category-title">Air Conditioner Repair</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="services.php">
                        <span class="category-icon"><img src="img/icn/5.png" class="icn"></span>
                        <span class="category-title">LCD LED Television Repair</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="services.php">
                        <span class="category-icon"><img src="img/icn/6.png" class="icn"></span>
                        <span class="category-title">Water Purifier Repair</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                <div class="ltn__category-item ltn__category-item-5 text-center">
                    <a href="services.php">
                        <span class="category-icon"><img src="img/icn/7.png" class="icn"></span>
                        <span class="category-title">Chimney Repair</span>
                        <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->
<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <img src="img/about.jpg" alt="About Us Image">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h1 class="section-title">About Us</h1>
                    </div>
                    <p>Appliances Service Hub is an ultra-convenient solution to book appliance services and avail services from home. We bring appliance service at your fingertip. It connects customers with trusted service providers. The outstanding features
                        of Appliances Service hub are 30 days warranty for service, lowest inspection charge, transparent pricing and the multiple payment option. We are a one-stop service solution to all your appliance service needs!</p>
                    <div class="about-author-info d-flex">
                        <div class="author-name-designation  align-self-center mr-30">
                            <div class="btn-wrapper">
                                <a class="btn theme-btn-2 btn-effect-1" href="about.php">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->
<?php include_once('include/footer.php') ?>