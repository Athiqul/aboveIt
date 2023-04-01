<header class="main-header header-style-three">
        <div class="container-fluid">
          <!-- Main box -->
          <div class="main-box">
            <div class="logo-box">
              <div class="logo">
                <a href="<?=site_url('/')?>"
                  ><img src="/images/logo-2.png" alt="" title="Above IT"
                /></a>
              </div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer">
              <?php $curr=current_url();
               
              ?>
              <nav class="nav main-menu">
                <ul class="navigation">
                  <li class="<?=strpos($curr,'/')?'':'current'?>">
                    <a href="<?=site_url('/')?>">Home</a>
                  </li>

                  <li class="<?=strpos($curr,'/services')?'current':''?>">
                    <a href="<?=site_url('/services')?>">Services</a>
                  </li>
                  <li class="<?=strpos($curr,'/products')?'current':''?>">
                    <a href="<?=site_url('/products')?>">Products</a>
                  </li>
                  <li class="<?=strpos($curr,'/blogs')?'current':''?>">
                    <a href="<?=site_url('/blogs')?>">Blog</a>
                  </li>
                  <li class="<?=strpos($curr,'/about-us')?'current':''?>">
                    <a href="<?=site_url('/about-us')?>">About Us</a>
                  </li>
                  <li class="<?=strpos($curr,'/contact')?'current':''?>"><a href="<?=site_url('/contact')?>">Call Back Request</a></li>
                </ul>
              </nav>

              <!-- Main Menu End-->
            </div>

            <div class="outer-box">
              <div class="ui-btn-outer">
                <button class="ui-btn ui-btn search-btn">
                  <span class="icon"
                    ><i class="fa-solid fa-magnifying-glass"></i
                  ></span>
                </button>
              </div>

              <a href="tel:+8809678282828" class="info-btn">
                <i class="icon fa fa-phone"></i>
                <small>Call Anytime</small>+ 880 ( 9678 ) 282-828
              </a>

              <!-- Mobile Nav toggler -->
              <div class="mobile-nav-toggler">
                <span class="icon"><i class="fa-solid fa-bars"></i></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
          <div class="menu-backdrop"></div>

          <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
          <nav class="menu-box">
            <div class="upper-box">
              <div class="nav-logo">
                <a href="<?=site_url('/')?>"
                  ><img src="/images/logo.png" alt="" title=""
                /></a>
              </div>
              <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
              <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
            <ul class="contact-list-one">
              <li>
                <!-- Contact Info Box -->
                <div class="contact-info-box">
                  <i class="icon lnr-icon-phone-handset"></i>
                  <span class="title">Call Now</span>
                  <a href="tel:+92880098670">+92 (8800) - 98670</a>
                </div>
              </li>
              <li>
                <!-- Contact Info Box -->
                <div class="contact-info-box">
                  <span class="icon lnr-icon-envelope1"></span>
                  <span class="title">Send Email</span>
                  <a href="mailto:help@company.com">help@company.com</a>
                </div>
              </li>
              <li>
                <!-- Contact Info Box -->
                <div class="contact-info-box">
                  <span class="icon lnr-icon-clock"></span>
                  <span class="title">Send Email</span>
                  Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                </div>
              </li>
            </ul>

            <ul class="social-links">
              <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-pinterest"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- End Mobile Menu -->

        <!-- Header Search -->
        <div class="search-popup">
          <span class="search-back-drop"></span>
          <button class="close-search">
            <span class="fa fa-times"></span>
          </button>

          <div class="search-inner">
            <form method="post" action="blog-showcase.html">
              <div class="form-group">
                <input
                  type="search"
                  name="search-field"
                  value=""
                  placeholder="Search..."
                  required=""
                />
                <button type="submit"><i class="fa fa-search"></i></button>
              </div>
            </form>
          </div>
        </div>
        <!-- End Header Search -->

        <!-- Sticky Header  -->
        <div class="sticky-header">
          <div class="auto-container">
            <div class="inner-container">
              <!--Logo-->
              <div class="logo">
                <a href="<?=site_url('/')?>" title=""
                  ><img src="/images/logo-2.png" alt="" title=""
                /></a>
              </div>

              <!--Right Col-->
              <div class="nav-outer">
                <!-- Main Menu -->
                <nav class="main-menu">
                  <div class="navbar-collapse show collapse clearfix">
                    <ul class="navigation clearfix">
                      <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                  </div>
                </nav>
                <!-- Main Menu End-->

                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler">
                  <span class="icon"><i class="fa-solid fa-bars"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sticky Menu -->
      </header>