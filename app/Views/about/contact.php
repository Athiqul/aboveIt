<?= $this->extend('layout/default') ?>

<?= $this->section('meta') ?>
<meta name="description" content="Above IT started its journey by introducing its services: Desktop based Software Development, Web Application Development, Android &amp; IOS Development, Any Type of Software Development as user requirements &amp; Complete office IT support. Complete Network Management, CCTV, EPBX, IP Phone &amp; Power Solution. CCTV Support, Network Support, Laser Printer, Desktop Printer &amp; Desktop, Laptop Support. Any Type of Canon Photocopier Machine has Complete Support. and Total IT solution. Since 2013 Above IT has highly skilled management &amp; Development team to manage the affairs of the company.">
<meta name="keywords" content="Above IT, Above BD, Above Software, Above Apps, Above Ecommerce, Web Application, Mobile Application, Software Development, Business Email, Web Hosting Services, Bulk SMS, Voice Call Blast, Email Marketing, Search Engine Optimization, Social Media Marketing, Search Engine Marketing, Product Advising Video, Short Film Marketing, YouTube Channel Management, Logo Design, Business Card Design, Brochure Design, Product Design, Social Medial Cover Design, Printer, Desktop &amp; Laptop Support, CCTV, EPBX, IP Phone &amp; Power Solution, Network Management, Canon Photocopier Support, Complete office IT support,">
<meta name="author" content="Above IT">
<?= $this->endSection() ?>
   
<?= $this->section('title') ?>Above IT | Web App & Software Solution<?= $this->endSection() ?>
    <!-- Stylesheets -->
    

    <?= $this->section('cssLink') ?>
    <link href="/css/bootstrap.min.css" rel="stylesheet" />

    <link href="/css/style.css" rel="stylesheet" />
    <link href="/css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/fontawesome.css" />


   
    <?= $this->endSection() ?>
    <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <?= $this->section('navbar') ?>
<?= $this->include('assets/navbar') ?>
<?= $this->endSection() ?>
      <!--End Main Header -->
      <?= $this->section('content') ?> 
      <!-- Start main-content -->
      <section
        class="page-title"
        style="background-image: url(/images/background/page-title.jpg)"
      >
        <div class="auto-container">
          <div class="title-outer">
            <h1 class="title">Contact</h1>
            <ul class="page-breadcrumb">
              <li><a href="<?=site_url('/')?>">Home</a></li>

              <li>Contact</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end main-content -->

      <section class="team-contact-form">
        <?php if(session()->has('warning')):?>
      <p class="alert alert-danger text-center">
                <?=session()->get('warning')?>
              </p>
              <?php endif?>
              <?php if(session()->has('success')):?>
      <p class="alert alert-success text-center">
                <?=session()->get('success')?>
              </p>
              <?php endif?>
        <div class="container pb-100">
          <div class="sec-title text-center">
            <span class="sub-title">Contact With Us Now</span>
            <h2 class="section-title__title">
              Feel Free to Request Us We Will Contact You soon <br />
             Above IT
            </h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <!-- Contact Form -->
              <?=form_open('/contact',"id='contact_form'")?>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <input
                        name="customer_name"
                        class="form-control"
                        type="text"
                        placeholder="<?=old('customer_name','Enter Name')?>"
                        value="<?=old('customer_name')?>"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <input
                        name="email"
                        class="form-control required email"
                        type="email"
                        placeholder="<?=old('email','Enter Email')?>"
                        value="<?=old('email')?>"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <input
                        
                        class="form-control required"
                        type="text"
                        placeholder="Query"
                        disabled
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <input
                        name="mobile"
                        class="form-control required mobile"
                        type="text"
                        placeholder="<?=old('mobile','Enter Mobile Number')?>"
                       /
                        value="<?=old('mobile')?>"
                        required
                      />
                    </div>
                  </div>
                </div>
                
                <div class="mb-3 text-center">
                  <input
                    name="form_botcheck"
                    class="form-control"
                    type="hidden"
                    value=""
                  />
                  <button
                    type="submit"
                    class="theme-btn btn-style-one"
                    data-loading-text="Please wait..."
                  >
                    <span class="btn-title">Send Call Request</span>
                  </button>
                  <button type="reset" class="theme-btn btn-style-one">
                    <span class="btn-title">Reset</span>
                  </button>
                </div>
              </form>
              <!-- Contact Form Validation-->
            </div>
          </div>
        </div>
      </section>

      <section class="contact-details">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-6 mb-md-60">
              <div class="contact-details__right">
                <div class="sec-title">
                  <span class="sub-title">Need any help?</span>
                  <h2>Get in touch with us</h2>
                  <div class="text">
                  Above IT is a Software Development & Solution House in Dhaka, Bangladesh, which has more than 11 years of experience in the IT field.
                  </div>
                </div>
                <ul class="list-unstyled contact-details__info">
                  <li>
                    <div class="icon">
                      <span class="lnr-icon-phone"></span>
                    </div>
                    <div class="text">
                      <h6>Have any question?</h6>
                      <a href="tel:+8809678282828"
                        > +8809678 (282)-828</a
                      ><br>
                      <a href="tel:+8801821422222"
                        > +880 (18214)-22222</a
                      >
                    </div>
                  </li>

                  <li>
                    <div class="icon">
                      <span class=""> <i class="fa-brands fa-whatsapp"></i></span>
                    </div>
                    <div class="text">
                      <h6>Whats App <span>(Message Only)</span></h6>
                      <a href="https://wa.link/ukeot5" target="_blank"
                        > +880 (18214)-22222</a
                      >
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <span class="lnr-icon-envelope"></span>
                    </div>
                    <div class="text">
                      <h6>Write email</h6>
                      <a href="mailto:info@abovebd.com"
                        >info@abovebd.com</a
                      >
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <span class="lnr-icon-map-marker"></span>
                    </div>
                    <div class="text">
                      <h6>Write email</h6>
                      <a href="mailto:info@abovebd.com" class="text-muted"
                        >House-20,Road-9,Sector-11,Uttara,Dhaka 1230</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-7 col-lg-6">
              <!-- Google Map HTML Codes -->
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.320555896855!2d90.39032041543302!3d23.87824918979609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c4f2bda8544f%3A0x4c2ec30ebae7b65b!2sAbove%20IT!5e0!3m2!1sen!2sbd!4v1677652641599!5m2!1sen!2sbd"
                width="100%"
                height="550"
                frameborder="0"
                allowfullscreen=""
              ></iframe>
            </div>
          </div>
        </div>
      </section>
      <!--Contact Details End-->

      <!--Contact Details Start-->
     
      <!--Contact Details End-->
      <!-- Services Section -->
     
      <!-- End Services Section-->
<?=$this->endSection()?>
    
<?= $this->section('footer') ?>
        <?= $this->include('assets/footer') ?>
        <?= $this->endSection() ?>
    
   
<?= $this->section('jsLink') ?>
    <script src="/js/jquery.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/appear.js"></script>
    <script src="/js/select2.min.js"></script>
    <script src="/js/swiper.min.js"></script>
    <script src="/js/owl.js"></script>
    <script src="/js/script.js"></script>

    <!-- form submit -->
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/jquery.form.min.js"></script>
  
   
    <?= $this->endSection() ?>
