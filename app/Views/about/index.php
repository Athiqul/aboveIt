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
            <h1 class="title">About Us</h1>
            <ul class="page-breadcrumb">
              <li><a href="<?=site_url('/')?>">Home</a></li>

              <li>About Us</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end main-content -->      <section class="about-section">
        <div class="auto-container">
          <div class="row">
            <div
              class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight"
              data-wow-delay="600ms"
            >
              <div class="inner-column">
                <div class="sec-title">
                  <span class="sub-title">Get to Know</span>
                  <h2>We provide best software solution</h2>
                  <div class="text">
                  We use the latest technologies and tools to develop software that is reliable, scalable, and secure. Our solutions are designed to streamline your business processes, increase efficiency, and improve overall performance. We also provide ongoing support and maintenance to ensure that your software remains up-to-date and running smoothly.
                  </div>
                </div>

                <ul class="list-style-two">
                  <li>
                    <i class="fa fa-check-circle"></i>Our team of experts has years of experience in the industry. 
                  </li>
                  <li>
                    <i class="fa fa-check-circle"></i>We work closely with our clients to understand their unique needs and requirements.
                  </li>
                  <li>
                    <i class="fa fa-check-circle"></i>We work hard to develop solutions that are tailored to your specific needs.
                  </li>
                </ul>

                <div class="btn-box">
                  <a href="tel:+8809678282828" class="info-btn">
                    <i class="icon fa fa-phone"></i>
                    <small>Call Anytime</small> + 8809678 282 828
                  </a>
                  <a href="<?=site_url('/?#package')?>" class="theme-btn btn-style-one"
                    ><span class="btn-title">Explore now</span></a
                  >
                </div>
              </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
              <div class="inner-column wow fadeInLeft">
                <figure class="image-1 overlay-anim wow fadeInUp">
                  <img src="images/resource/about-1.jpg" alt="" />
                </figure>
                <figure class="image-2 overlay-anim wow fadeInRight">
                  <img src="images/resource/about-2.jpg" alt="" />
                </figure>
                <div class="experience bounce-y">
                  <div class="inner">
                    <i class="icon flaticon-discuss"></i>
                    <div class="text">
                      <strong>11+</strong> Years of <br />experience
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Emd About Section -->

      <!-- Team Section -->
      <?php if($teammembers->errors==false):?>
      <section class="team-section pt-0" id="team">
        <div class="auto-container">
          <div class="sec-title text-center">
            <span class="sub-title">Meet the Expert People</span>
            <h2>Expert & professional team <br />members</h2>
          </div>

          <div class="row">
            <!-- Team block -->
            <?php foreach($teammembers->msg as $item):?>
            <div
              class="team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
            >
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <a href="page-team-details.html"
                      ><img src="<?=getenv('IMAGE_LINK').'member-image/'.$item->image?>" alt="<?=$item->name?>"
                    /></a>
                  </figure>
                  <div class="social-links">
                    <a href="https://www.facebook.com/AboveBD" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://bd.linkedin.com/company/above-it" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                  </div>
                  <span class="share-icon fa fa-plus"></span>
                </div>
                <div class="info-box">
                  <h4 class="name">
                    <a href="#"><?=$item->name?></a>
                  </h4>
                  <span class="designation"><?=$item->designation?></span>
                </div>
              </div>
            </div>
            <?php endforeach?>
         

          
          </div>
         <!--Here Pagination go-->
         <div class="row">
            <ul class="pagination">
              <?php 
              $current=$teammembers->currentPage;
              ?>
              <li class="page__btn">
                <a href="<?=site_url('/aboout-us?page=1')?>">
                <i class="fa-solid fa-angles-left"></i>
                </a>
               
              </li>
              <?php for($i=1;$i<=$teammembers->totalPage;$i++):?>
              <li class="page__numbers <?=($i==$current)?'text-danger':''?>"><a class="<?=($i==$current)?'text-danger':''?>" href="<?=site_url('/about-us?page=').$i?>"><?=$i?></a></li>
              <?php endfor?>
             
              
              <li class="page__btn">
               <a href="<?=site_url('/about-us?page=').$teammembers->totalPage?>">

               <i class="fa-solid fa-angles-right"></i>
               </a> 
              </li>
            </ul>
          </div>
        </div>
      </section>
      <?php endif?>
      <!-- End Team Section -->

      <!-- Features Section -->
      <section class="features-section">
        <div class="bg bg-pattern-1"></div>
        <div class="auto-container">
          <div class="row">
            <!-- Content Column -->
            <div class="content-column col-xl-5 col-lg-6 col-md-12">
              <div class="inner-column wow fadeInRight">
                <div class="sec-title">
                  <span class="sub-title">Welcome to Above IT</span>
                  <h2>Experienced designers & developers</h2>
                </div>

                <div class="feature-block">
                  <div class="inner-box">
                    <div class="content">
                      <span class="icon"><i class="fa fa-check"></i></span>
                      <h5 class="title"> Experienced team</h5>
                      <div class="text">
                     Our designers and developers have years of experience under their belts, and they bring that expertise to every project.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="feature-block">
                  <div class="inner-box">
                    <div class="content">
                      <span class="icon"><i class="fa fa-check"></i></span>
                      <h5 class="title"> Custom Development</h5>
                      <div class="text">
                      Whether you need a new website, a mobile app, or a custom software solution, we've got you covered.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="feature-block">
                  <div class="inner-box">
                    <div class="content">
                      <span class="icon"><i class="fa fa-check"></i></span>
                      <h5 class="title">Quality web & app design</h5>
                      <div class="text">
                      We take the time to understand your specific needs and requirements, and we develop custom solutions tailored to your business.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Content Column -->
            <div class="image-column col-xl-7 col-lg-6 col-md-12 col-sm-12">
              <div class="inner-column wow fadeInLeft">
                <div class="image-box">
                  <figure class="image">
                    <img src="images/resource/image-2.jpg" alt="" />
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Offer Section -->

      <!-- Projects section two-->
      <section class="projects-section-two p-0">
        <div
          class="bg-image"
          style="background-image: url(./images/background/2.jpg)"
        ></div>
        <div class="auto-container">
          <div class="upper-box">
            <div class="counter-column">
              <div class="count-box">
                <span class="title">Project Completed</span>
                <div class="numbers">87+</div>
              </div>
            </div>
            <div class="text-column">
              <div class="text">
              We are passionate about what we do, and we are dedicated to helping businesses like yours succeed. Contact us today to learn more about our services and how we can help take your business to the next level.
              </div>
            </div>
          </div>

          <div class="sec-title text-center light">
            <span class="sub-title">Recent Work</span>
            <h2>Work showcase</h2>
          </div>

          <div class="carousel-outer">
            <div class="projects-carousel owl-carousel owl-theme">
              <!-- Training Block-->
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a href="page-project-details.html"
                        ><img src="images/resource/project-1.jpg" alt=""
                      /></a>
                    </figure>
                    <div class="info-box">
                      <a href="page-project-details.html" class="read-more"
                        ><i class="fa fa-long-arrow-alt-right"></i
                      ></a>
                      <span class="cat">Graphics</span>
                      <h6 class="title">
                        <a href="page-project-details.html"
                          >Digital marketing web</a
                        >
                      </h6>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Training Block-->
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a href="page-project-details.html"
                        ><img src="images/resource/project-2.jpg" alt=""
                      /></a>
                    </figure>
                    <div class="info-box">
                      <a href="page-project-details.html" class="read-more"
                        ><i class="fa fa-long-arrow-alt-right"></i
                      ></a>
                      <span class="cat">Graphics</span>
                      <h6 class="title">
                        <a href="page-project-details.html"
                          >Digital marketing web</a
                        >
                      </h6>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Training Block-->
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a href="page-project-details.html"
                        ><img src="images/resource/project-3.jpg" alt=""
                      /></a>
                    </figure>
                    <div class="info-box">
                      <a href="page-project-details.html" class="read-more"
                        ><i class="fa fa-long-arrow-alt-right"></i
                      ></a>
                      <span class="cat">Graphics</span>
                      <h6 class="title">
                        <a href="page-project-details.html"
                          >Digital marketing web</a
                        >
                      </h6>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Training Block-->
              <div class="project-block">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <a href="page-project-details.html"
                        ><img src="images/resource/project-4.jpg" alt=""
                      /></a>
                    </figure>
                    <div class="info-box">
                      <a href="page-project-details.html" class="read-more"
                        ><i class="fa fa-long-arrow-alt-right"></i
                      ></a>
                      <span class="cat">Graphics</span>
                      <h6 class="title">
                        <a href="page-project-details.html"
                          >Digital marketing web</a
                        >
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
   
    <?= $this->endSection() ?>
