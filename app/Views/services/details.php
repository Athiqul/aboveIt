<?= $this->extend('layout/default') ?>


    <!-- Stylesheets -->
    <?= $this->section('cssLink') ?>
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    <link href="/css/responsive.css" rel="stylesheet" />

    

  
    <?= $this->endSection() ?>

    <?= $this->section('title') ?>Above IT | Web App & Software Solution <?= $this->endSection() ?>

    <?= $this->section('meta') ?>
<meta name="description" content="<?=$details->msg->meta_desc?>">
<meta name="keywords" content="<?=$details->msg->meta_tag?>">
<meta name="author" content="Above IT">
<meta name="subtitle" content="<?=$details->msg->sub_title??''?>">
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
      <section
        class="page-title"
        style="background-image: url(/images/background/page-title.jpg)"
      >
        <div class="auto-container">
          <div class="title-outer">
            <h1 class="title">Service Details</h1>
            <ul class="page-breadcrumb">
              <li><a href="<?=site_url('/')?>">Home</a></li>
              <li><a href="<?=site_url('/services')?>">Services</a></li>
              <li>Details</li>
            </ul>
          </div>
        </div>
      </section>

      <!--Start Services Details-->
      <section class="services-details">
        <div class="container">
          <div class="row">
            <!--Start Services Details Sidebar-->
            <?php if($services->errors==false):?>
            <div class="col-xl-4 col-lg-4">
              <div class="service-sidebar">
                <!--Start Services Details Sidebar Single-->
                <div class="sidebar-widget service-sidebar-single">
                  <div class="sidebar-service-list">
                    <ul>
                      <?php foreach($services->msg as $item):?>
                      <li>
                        <a href="<?=site_url('/services/'.$item->id.'?'.$item->title)?>" class="current"
                          ><i class="fas fa-angle-right"></i
                          ><span><?=$item->title?></span></a
                        >
                      </li>
                     <?php endforeach?>
                    </ul>
                  </div>

                  <div class="service-details-help">
                    <div class="help-shape-1"></div>
                    <div class="help-shape-2"></div>
                    <h2 class="help-title">
                      Contact with <br />
                      us for any <br />
                      advice
                    </h2>
                    <div class="help-icon">
                      <span class="lnr-icon-phone-handset"></span>
                    </div>
                    <div class="help-contact">
                      <p>Need help? Talk to an expert</p>
                      <a href="tel:+8809678282828">+88 (09678) 282 - 828</a>
                    </div>
                  </div>

                  
                </div>
                <!--End Services Details Sidebar-->
              </div>
            </div>
            <?php endif?>

            <!--Start Services Details Content-->
            <div class="col-xl-8 col-lg-8">
              <div class="services-details__content">
                <img src="<?=getenv('IMAGE_LINK').'service-image/'.$details->msg->image?>" alt="" />
                <h3 class="mt-4"> <?=$details->msg->title?></h3>
                <p>
                  <?=$details->msg->desc?>
                </p>
                
                
                <div class="mt-25">
                  <h3>Frequently Asked Question</h3>
                  <p>
                    Lorem ipsum is simply free text used by copytyping
                    refreshing. Neque porro est qui dolorem ipsum quia quaed
                    inventore veritatis et quasi architecto beatae vitae dicta
                    sunt explicabo.
                  </p>
                  <ul class="accordion-box wow fadeInRight">
                    <!--Block-->
                    <li class="accordion block">
                      <div class="acc-btn">
                        Is my technology allowed on tech?
                        <div class="icon fa fa-plus"></div>
                      </div>
                      <div class="acc-content">
                        <div class="content">
                          <div class="text">
                            There are many variations of passages the majority
                            have suffered alteration in some fo injected humour,
                            or randomised words believable.
                          </div>
                        </div>
                      </div>
                    </li>
                    <!--Block-->
                    <li class="accordion block active-block">
                      <div class="acc-btn active">
                        How to soft launch your business?
                        <div class="icon fa fa-plus"></div>
                      </div>
                      <div class="acc-content current">
                        <div class="content">
                          <div class="text">
                            There are many variations of passages the majority
                            have suffered alteration in some fo injected humour,
                            or randomised words believable.
                          </div>
                        </div>
                      </div>
                    </li>
                    <!--Block-->
                    <li class="accordion block">
                      <div class="acc-btn">
                        How to turn visitors into contributors
                        <div class="icon fa fa-plus"></div>
                      </div>
                      <div class="acc-content">
                        <div class="content">
                          <div class="text">
                            There are many variations of passages the majority
                            have suffered alteration in some fo injected humour,
                            or randomised words believable.
                          </div>
                        </div>
                      </div>
                    </li>
                    <!--Block-->
                    <li class="accordion block">
                      <div class="acc-btn">
                        How can i find my solutions?
                        <div class="icon fa fa-plus"></div>
                      </div>
                      <div class="acc-content">
                        <div class="content">
                          <div class="text">
                            There are many variations of passages the majority
                            have suffered alteration in some fo injected humour,
                            or randomised words believable.
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--End Services Details Content-->
          </div>
        </div>
      </section>
      <!--End Services Details-->
      <?= $this->endSection() ?>
      <!-- Main Footer -->
      <?= $this->section('footer') ?>
        <?= $this->include('assets/footer') ?>
        <?= $this->endSection() ?>
        <?= $this->section('jsLink') ?>
    <script src="/js/jquery.js"></script>/
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
