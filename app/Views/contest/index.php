<?= $this->extend('layout/default') ?>

<?= $this->section('meta') ?>
<meta name="description" content="Above IT started its journey by introducing its services: Desktop based Software Development, Web Application Development, Android &amp; IOS Development, Any Type of Software Development as user requirements &amp; Complete office IT support. Complete Network Management, CCTV, EPBX, IP Phone &amp; Power Solution. CCTV Support, Network Support, Laser Printer, Desktop Printer &amp; Desktop, Laptop Support. Any Type of Canon Photocopier Machine has Complete Support. and Total IT solution. Since 2013 Above IT has highly skilled management &amp; Development team to manage the affairs of the company.">
<meta name="keywords" content="Above IT, Above BD, Above Software, Above Apps, Above Ecommerce, Web Application, Mobile Application, Software Development, Business Email, Web Hosting Services, Bulk SMS, Voice Call Blast, Email Marketing, Search Engine Optimization, Social Media Marketing, Search Engine Marketing, Product Advising Video, Short Film Marketing, YouTube Channel Management, Logo Design, Business Card Design, Brochure Design, Product Design, Social Medial Cover Design, Printer, Desktop &amp; Laptop Support, CCTV, EPBX, IP Phone &amp; Power Solution, Network Management, Canon Photocopier Support, Complete office IT support,">
<meta name="author" content="Above IT">
<?= $this->endSection() ?>
   
<?= $this->section('title') ?>Above IT | Web App & Software Solution<?= $this->endSection() ?>
    <!-- Stylesheets -->
    

    <?= $this->section('cssLink') ?>
    <link href="css/bootstrap.min.css" rel="stylesheet" />

<link href="/css/style.css" rel="stylesheet" />
<link href="/css/responsive.css" rel="stylesheet" />
<!-- contest css -->
<link rel="stylesheet" href="/css/contest/contest-animation.css" />
<link rel="stylesheet" href="/css/contest/contest-style.css" />
<link rel="stylesheet" href="/css/contest/contest-responsive.css" />

   
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
  
 
      <section class="contest-section">
     

        <main>
          <div class="inner">
            <div class="container">
              <div class="wrapper-contest">
                <!-- form -->
                <?= $this->include('assets/alert') ?>
                <?= form_open('/contest',"class='show-section' id='steps'")?>
                  <!-- step2 -->
                  <section class="steps">
                    <article>
                      <div class="main-heading">Details</div>
                      <div class="main-text">
                        Above IT is a Smart Software & IT Solution Company
                      </div>
                    </article>

                    <!-- step-2 form -->
                    <div class="form-inner">
                      <div class="steps-inner lightSpeedIn">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="input-field select-field">
                              <label for="contest">
                                Participating Contest
                              </label>
                              <select name="contest_type" id="contest" required>
                              <option value="">Choose</option>
                                <option value="0">UI / UX Design</option>
                                <option value="1">
                                  Frontend Developer
                                </option>
                              </select>
                              <span></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-field">
                              <label>Name </label>
                              <input
                                required
                                type="text"
                                name="participant_name"
                                id="firstName"
                                placeholder="<?=old('participant_name','Enter Name')?>"
                                value="<?=old('participant_name')?>"
                                required
                              />
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="input-field">
                              <label for="phone"> Mobile </label>
                              <div class="field-c">
                                <select
                                  class="second"
                                
                                  id="contrycode"
                                >
                                  <option value="88" selected>+88</option>
                                </select>
                                <input
                                  required
                                  type="tel"
                                  name="mobile"
                                  id="phone"
                                  placeholder="<?=old('mobile','01.........')?>"
                                  pattern="[017+[0-9]{8}|018+[0-9]{8}|013+[0-9]{8}|014+[0-9]{8}|019+[0-9]{8}|015+[0-9]{8}|016+[0-9]{8}]"
                                  value="<?=old('mobile')?>"
                                  required
                                />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-field">
                              <label> Email </label>
                              <input
                                required
                                type="text"
                                name="email"
                                id="mail-email"
                                placeholder="<?=old('email','Email')?>"
                                value="<?=old('email')?>"
                                required
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-field">
                              <label> Address </label>
                              <input
                                required
                                type="text"
                                name="address"
                                id="address"
                                placeholder="<?=old('address','Address')?>"
                                value="<?=old('address')?>"
                                required
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-field">
                              <label> Year of Birth </label>
                              <input
                               
                                type="number"
                                min="1990"
                                max="2005"
                                name="yob"
                                id="dob"
                                placeholder="<?=old('yob','1990')?>"
                                value="<?=old('yob')?>"
                                required
                              />
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="input-field select-field">
                              <label for="profession">Where did you find out about this contest?</label>
                              <select name="referrer" id="profession" required>
                              <option value="">Choose</option>
                                <option value="social">Social Media</option>
                                <option value="friend">Friend</option>
                                <option value="other">Other</option>
                              </select>
                              <span></span>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="input-field">
                              <label> Institute Name <span>(Currently You Are Studying or Work)</span> </label>
                              <input
                                
                                type="text"
                                name="institute"
                                id="institute"
                                placeholder="<?=old('institute','Company/College/Varsity')?>"
                                value="<?=old('institute')?>"
                                required
                              />
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="input-field">
                              <label for="description">
                              What do you know about Above IT?
                              </label>
                              <textarea
                                class="textarea"
                                name="opinion"
                                id="description"
                                min="30"
                                max="200"
                                placeholder="<?=old('opinion','Describe here shortly...')?>"                              
                                required
                              ><?=old('opinion')?></textarea>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="input-field select-field">
                              <label for="contest">
                                Are you Interest to work with Above IT ?(It depends on your Interest and Skills)
                              </label>
                              <select name="joining" id="contest" required>
                              <option value="">Choose</option>
                                <option value="0">May be later</option>
                                <option value="1">
                                  Of course.
                                </option>
                              </select>
                              <span></span>
                            </div>
                          </div>
                         
                        </div>
                        <div class="next-prev justify-content-center">
                          <button id="sub" type="submit" class="apply">
                            Registration<i class="fa-solid fa-arrow-right"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="right-map">
                      <img src="./image/map.png" alt="" />
                    </div>
                  </section>
                </form>
              </div>
            </div>
          </div>
        </main>
      </section>
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
