<?php include_once('common/header.php') ?>

<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark bg-fixed text-center text-light"
    style="background-image: url(assets/images/Contact.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Contact Us</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact Area
    ============================================= -->
<div class="contact-area default-padding">
    <div class="container">
        <div class="row">
            <div class="contact-items bg-contain" style="background-image: url(assets/img/map.svg);">
                <div class="col-md-4 address">
                    <div class="address-items">
                        <ul class="info">
                            <!--li>
                                    <h4>Office Location</h4>
                                    <div class="icon"><i class="fas fa-map-marked-alt"></i></div> 
                                    <span>Villa A-64 - Al Ittihad St - Ajman<br> United Arab Emirates</span>
                                </li-->
                            <li>
                                <h4>Office Hours</h4>
                                <div class="icon"><i class="fas fa-clock"></i> </div>
                                <span>Mon - Fri 9:00 - 21:00<br>Saturday 10:00 - 16:00</span>
                            </li>
                            <li>
                                <h4>Phone</h4>
                                <div class="icon"><i class="fas fa-phone"></i></div>
                                <span>+971-589-691-683 <br>+971-566-774-440</span>
                            </li>
                            <li>
                                <h4>Email</h4>
                                <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                <span>info@alfa4tech<br>admin@alfa4tech</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 contact-form">
                    <h2>Let's lalk about your idea</h2>
                    <p>
                        Let us know your query please , we will be glad to assist you. Thanks
                    </p>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments"
                                        placeholder="Tell Us About Project *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

<!-- Start Google Maps 
    ============================================= -->
<!-- <div class="maps-area">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <h2>Dubai Office</h2>
                <p>A-64, Al Ittihad, Ajman, UAE<br />
                    Phone: +971-589691683<br />
                    Email: info@alfa4tech
                </p>
                <div class="google-maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.4840854955028!2d55.489726815014045!3d25.422074583792117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5f7073d942b3f%3A0x8d934c0c13733e0c!2zQWptYW4gbWVkaWEgY2l0eSBmcmVlIHpvbmUgLCDZhdiv2YrZhtipINi52KzZhdin2YYg2KfZhNil2LnZhNin2YXZitipINin2YTYrdix2Yc!5e0!3m2!1sen!2sin!4v1579544889554!5m2!1sen!2sin"
                        width="100%" height="" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>

            <div class="col-md-4">
                <h2>India Office</h2>
                <p>F-296, Sector-63, Noida, UP, India<br />
                    Phone: +91-95600-62149 , +91-96254-96517<br />
                    Email: info@alfa4tech</p>
                <div class="google-maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.38308716716!2d77.38817733569914!3d28.620700620019562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cefed8be3a04b%3A0xdfcfbe828409db7e!2sF%20Block%2C%20Sector%2063%2C%20Noida%2C%20Uttar%20Pradesh%20201307!5e0!3m2!1sen!2sin!4v1581928379178!5m2!1sen!2sin"
                        width="100%" height="" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>

            <div class="col-md-4">
                <h2>Bangladesh Office</h2>
                <p>F-19, BDBL Bhaban, 12 Kazi Nazrul Islam Ave, Dhaka<br />
                    Phone: +880-19773-25266 , +880-19743-25266<br />
                    Email: info@alfa4tech</p>
                <div class="google-maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9029977487994!2d90.39122601498137!3d23.750838284589214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd535e2469%3A0xd144b1293fb0f720!2sBDBL%20Bhaban%2C%2012%2C%20Kazi%20Nazrul%20Islam%20Ave%2C%20Dhaka%201215%2C%20Bangladesh!5e0!3m2!1sen!2sin!4v1581928178751!5m2!1sen!2sin"
                        width="100%" height="" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>

        </div>
    </div>
</div> -->
<!-- End Google Maps -->

<?php include_once('common/footer.php') ?>