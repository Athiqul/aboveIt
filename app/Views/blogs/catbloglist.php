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
            <h1 class="title">Blogs</h1>
            <ul class="page-breadcrumb">
              <li><a href="<?=site_url('/')?>">Home</a></li>
              <li><a href="<?=site_url('/blogs')?>">Blogs</a></li>
              <li>Tags</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end main-content -->
      
      <!-- Services Section -->
      <?php if($blogs->errors==false):?>
      <section class="bg-silver-light">
        
      <div class="container pb-90">
       <?php if($tags->errors==false):?>   
      <div class="row">
            <div class="sec-title text-center">
              <h3>Tags</h3>
              <div class="blog-details__tags text-center">
                <?php foreach($tags->msg as $item):?>
                <a href="<?=site_url('/blogs/tags/').$item->id.'?'.$item->cat_name?>"><?=$item->cat_name?></a>
                <?php endforeach?>
              </div>
            </div>
          </div>
          <?php endif?>
          
          <div class="row">
            <!-- News Block -->
      
             <?php foreach($blogs->msg as $item):?>
                <div class="news-block col-xl-4 col-lg-6 col-md-6">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <a href="<?=site_url('/blogs/'.$item[0]->id.'?blog='.$item[0]->title)?>"
                      ><img src="<?=getenv('IMAGE_LINK').'blog-image/'.$item[0]->image?>" alt="<?=$item[0]->title?>"
                    /></a>
                  </figure>
                </div>
                <div class="content-box">
                  <span class="date"><?= date('j M Y',strtotime($item[0]->publish_at))?></span>
                  <span class="post-info"
                    ><i class="fa fa-user-circle"></i> by Admin</span
                  >
                  <h5 class="title" style="width: 100%; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">
                  <a href="<?=site_url('/blogs/'.$item[0]->id.'?blog='.$item[0]->title)?>"
                      ><?=$item[0]->title?></a
                    >
                  </h5>
                  <div class="text" style="width: 100%; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                   <?=$item[0]->desc?>
                  </div>
                  <a href="<?=site_url('/blogs/'.$item[0]->id.'?blog='.$item[0]->title)?>" class="read-more"
                    ><i class="fa fa-long-arrow-alt-right"></i> Read More</a
                  >
                </div>
              </div>
            </div>
          
            <?php endforeach?>
         

             </div>
          
        
          </div>
        </div>
      </section>
      <?php endif?>
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
