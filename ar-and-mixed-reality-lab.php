<?php include_once('common/header.php') ?>

<div class="banner-area">
  <div class="item transparent-nav shadow dark text-light bg-fixed" style="background-image: url(assets/img/clients-logo/ar.jpg);">
    <div class="box-table">
      <div class="box-cell">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="content text-center">
                <h1 data-animation="animated slideInLeft">AR and Mixed Reality Lab </h1>
                <p data-animation="animated slideInUp"> Increase productivity in Architecture, Engineering, and Construction with comprehensive AR tools for visualization collaboration, and quality control. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="work-process-area default-padding bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="site-heading text-center">
          <h2>About the Lab </h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 thumb"> <img src="assets/img/clients-logo/about-kado.jpg" /> </div>
      <div class="col-md-6 process-items">
        <p> A company with a strong focus on emerging technology, Intellectsoft started to explore the potential of Augmented Reality back in 2015. We think that the technology is the next step in the evolution of Architecture, Engineering, and Construction, as well as other industries. </p>
        <p>This change is challenging, but Intellectsoft is ready to contribute. As a result, our R&D efforts have called for the creation of a separate AR development studio. </p>
        <p>Having extensive experience in building enterprise solutions, some of Intellectsoft’s best engineers, designers, and analysts are now bringing AR to the biggest industries. </p>
        <p>Now, discover the first technology by Intellectsoft AR Lab — KADO for Construction. </p>
        <!-- End Single Item -->
      </div>
    </div>
  </div>
</div>
<div class="services-area services default-padding bottom-less">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="site-heading text-center">
          <h2>What is KADO </h2>
          <p>KADO is a technological framework that transforms the construction process with the help of Microsoft HoloLens. KADO allows for better collaboration on every step and decreases the number of errors, allowing you to build better structures faster. </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="services-items text-center services_items">
        <!-- Single Item -->
        <div class="col-md-4 col-sm-6 equal-height" style="height: 385px;">
          <div class="item">
            <div class="icon"> <img src="assets/img/clients-logo/download.svg" /></div>
            <div class="info">
              <h4>Out-of-the-Box Components</h4>
              <p>Use onboarding, stabilization algorithms, and other features right away.</p>
            </div>
          </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-md-4 col-sm-6 equal-height" style="height: 385px;">
          <div class="item">
            <div class="icon"> <img src="assets/img/clients-logo/download1.svg" /></div>
            <div class="info">
              <h4>Easy to Integrate </h4>
              <p> KADO quickly integrates with construction management and CAD software. </p>
            </div>
          </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-md-4 col-sm-6 equal-height" style="height: 385px;">
          <div class="item">
            <div class="icon"> <img src="assets/img/clients-logo/download2.svg" /></div>
            <div class="info">
              <h4>Customisable </h4>
              <p>Develop and integrate of new features and capabilities with KADO </p>
            </div>
          </div>
        </div>
        <!-- End Single Item -->
<!--        <div class="row"> <a href="#" class="btn btn-theme effect btn-md text-center"> Learn more</a></div>
-->      </div>
    </div>
  </div>
</div>
<div class="contact-area default-padding bg-gray">
  <div class="container">
    <div class="row">
      <div class="contact-items bg-contain" style="background-image: url(assets/img/map.svg);">
        <div class="col-md-6 address"> <img src="assets/img/clients-logo/kado_logo_bg.jpg" /> </div>
        <div class="col-md-6 contact-form">
          <h2>Experience KADO before it’s available to the public! </h2>
          <form action="assets/mail/contact.php" method="POST" class="contact-form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" name="name" placeholder="First Name" type="text">
                  <span class="alert-error"></span> </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" name="name" placeholder="Last Name" type="text">
                  <span class="alert-error"></span> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                  <span class="alert-error"></span> </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                  <span class="alert-error"></span> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="position" name="position" placeholder="Job Title *" type="text">
                  <span class="alert-error"></span> </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="company" name="company" placeholder="Company *" type="text">
                  <span class="alert-error"></span> </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="form-group comments">
                  <textarea class="form-control" id="comments" name="comments" placeholder="Any comments (optional)"></textarea>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <button type="submit" name="submit" id="submit"> Send Message <i class="fa fa-paper-plane"></i> </button>
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
<?php include_once('common/footer.php') ?>
