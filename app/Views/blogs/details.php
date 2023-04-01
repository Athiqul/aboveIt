<?= $this->extend('layout/default') ?>


    <!-- Stylesheets -->
    <?= $this->section('cssLink') ?>
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    <link href="/css/responsive.css" rel="stylesheet" />

    <?= $this->endSection() ?>

    <?= $this->section('title') ?>Above IT | Web App & Software Solution<?= $this->endSection() ?>

    <?= $this->section('meta') ?>
<meta name="description" content="<?=$details->msg->blog->meta_desc?>">
<meta name="keywords" content="<?=$details->msg->blog->meta_tag?>">
<meta name="author" content="Above IT">
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
            <h1 class="title">Blog Details</h1>
            <ul class="page-breadcrumb">
              <li><a href="<?=site_url('/')?>">Home</a></li>
              <li><a href="<?=site_url('/blogs')?>">Blogs</a></li>
              <li>Details</li>
            </ul>
          </div>
        </div>
      </section>

      <!--Start Services Details-->
      <section class="blog-details">
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-7">
              <div class="blog-details__left">
                <div class="blog-details__img">
                  <img src="<?=getenv('IMAGE_LINK').'blog-image/'.$details->msg->blog->image?>" alt="<?=$details->msg->blog->title?>" />
                  <div class="blog-details__date">
                    <span class="day"><?=date('j',strtotime($details->msg->blog->publish_at))?></span>
                    <span class="month"><?=date('M Y',strtotime($details->msg->blog->publish_at))?></span>
                  </div>
                </div>
                <div class="blog-details__content">
                  <ul class="list-unstyled blog-details__meta">
                    <li>
                      <a href=""
                        ><i class="fas fa-user-circle"></i> Admin</a
                      >
                    </li>
                   
                  </ul>
                  <h3 class="blog-details__title">
                   <?=$details->msg->blog->title?>
                  </h3>
                  <p class="blog-details__text-2">
                  <?=$details->msg->blog->desc?>
                  </p>
                </div>
                <div class="blog-details__bottom">
                    <?php if($details->msg->categories!=null):?>
                  <p class="blog-details__tags">
                    <span>Tags</span>
                    <?php foreach($details->msg->categories as $item):?>
                    <a href="news-details.html"><?=$item->cat_name?></a>
                    <?php endforeach?>
                  </p>
                  <?php endif?>
                  <div class="blog-details__social-list">
                    <a href="news-details.html"
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a href="news-details.html"
                      ><i class="fab fa-facebook"></i
                    ></a>
                    <a href="news-details.html"
                      ><i class="fab fa-pinterest-p"></i
                    ></a>
                    <a href="news-details.html"
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
                <?php if($blogs->errors==false):?>
                    
                <div class="nav-links">
                <?php foreach($blogs->msg as $item):?>
                        <?php if($item->id==$details->msg->blog->id) continue;?>
                  <div class="prev">
                    <a href="" rel="prev"
                      ><?=$item->title?></a
                    >
                  </div>
                 <?php endforeach?>
                </div>
                <?php endif?>
                
              </div>
            </div>
            <div class="col-xl-4 col-lg-5">
              <div class="sidebar">
                <div class="sidebar__single sidebar__search">
                  <form action="#" class="sidebar__search-form">
                    <input type="search" placeholder="Search here" />
                    <button type="submit">
                      <i class="lnr-icon-search"></i>
                    </button>
                  </form>
                </div>
                <?php if($blogs->errors==false):?>
                <div class="sidebar__single sidebar__post">
                  <h3 class="sidebar__title">Latest Posts</h3>
                  <ul class="sidebar__post-list list-unstyled">
                    <?php foreach($blogs->msg as $item):?>
                        <?php if($item->id==$details->msg->blog->id) continue;?>
                    <li>
                      <div class="sidebar__post-image">
                        <img src="<?=getenv('IMAGE_LINK').'blog-image/'.$item->image?>" alt="<?=$item->title?>" />
                      </div>
                      <div class="sidebar__post-content">
                        <h3>
                          <span class="sidebar__post-content-meta"
                            ><i class="fas fa-user-circle"></i>Admin</span
                          >
                          <a href=""
                            ><?=$item->title?></a
                          >
                        </h3>
                      </div>
                    </li>
                    <?php endforeach?>
                  </ul>
                </div>
                <?php endif?>

                <?php if($details->msg->categories!=null||$details->msg->noselectcat):?>
                <div class="sidebar__single sidebar__category">
                  <h3 class="sidebar__title">Categories</h3>
                  <ul class="sidebar__category-list list-unstyled">
                  <?php if($details->msg->categories!=null):?> 
                    <?php foreach($details->msg->categories as $item):?>
                    <li class="active">
                      <a href="<?=site_url('/blogs/tags/').$item->id.'?'.$item->cat_name?>" 
                        ><?=$item->cat_name?><span class="icon-right-arrow"></span
                      ></a>
                    </li>
                    
                    <?php endforeach?>
                    <?php endif?>
                    <?php if($details->msg->noselectcat!=null):?> 
                    <?php foreach($details->msg->noselectcat as $item):?>
                    <li>
                      <a href="<?=site_url('/blogs/tags/').$item->id.'?'.$item->cat_name?>"
                        ><?=$item->cat_name?><span class="icon-right-arrow"></span
                      ></a>
                    </li>
                    <?php endforeach?>
                    <?php endif?>
                  </ul>
                </div>
                <?php endif?>
                <div class="sidebar__single sidebar__tags">
                  <h3 class="sidebar__title">Tags</h3>
                  <div class="sidebar__tags-list">
                  <?php if($details->msg->categories!=null):?> 
                    <?php foreach($details->msg->categories as $item):?>
                    <a href="<?=site_url('/blogs/tags/').$item->id.'?'.$item->cat_name?>"><?=$item->cat_name?></a>
                    <?php endforeach?>
                    <?php endif?>
                    <?php if($details->msg->noselectcat!=null):?> 
                    <?php foreach($details->msg->noselectcat as $item):?>
                        <a href="<?=site_url('/blogs/tags/').$item->id.'?'.$item->cat_name?>"><?=$item->cat_name?></a>
                    <?php endforeach?>
                    <?php endif?>
                  </div>
                </div>
               
              </div>
            </div>
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
        <script src="/js/jquery.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/jquery.countdown.js"></script>
    <script src="/js/mixitup.js"></script>
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
