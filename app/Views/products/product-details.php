<?= $this->extend('layout/default') ?>


    <!-- Stylesheets -->
    <?= $this->section('cssLink') ?>
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    <link href="/css/responsive.css" rel="stylesheet" />

    

  
    <?= $this->endSection() ?>

    <?= $this->section('title') ?>Above IT | Web App & Software Solution<?= $this->endSection() ?>

    <?= $this->section('meta') ?>
<meta name="description" content="<?=$details->msg->meta_desc?>">
<meta name="keywords" content="<?=$details->msg->meta_tag?>">
<meta name="author" content="Above IT">
<?= $this->endSection() ?>
   
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
            <h1 class="title">Product Details</h1>
            <ul class="page-breadcrumb">
              <li><a href="<?=site_url('/')?>">Home</a></li>
              <li><a href="<?=site_url('/products')?>">Products</a></li>
              <li>Details</li>
            </ul>
          </div>
        </div>
      </section>

      <!--Start Services Details-->
      <section class="product-details">
        <div class="container pb-70">
          <div class="row">
            <div class="col-lg-6 col-xl-6">
              <div class="bxslider">
                <div class="slider-content">
                  <figure class="image-box">
                    <a
                      href="<?=getenv('IMAGE_LINK').'product-image/'.$details->msg->image?>"
                      class="lightbox-image"
                      data-fancybox="gallery"
                      ><img
                        src="<?=getenv('IMAGE_LINK').'product-image/'.$details->msg->image?>"
                        alt="Product Image"
                    /></a>
                  </figure>
                
                </div>
           
              </div>
            </div>
            <div class="col-lg-6 col-xl-6 product-info">
              <div class="product-details__top">
                <h3 class="product-details__title">
                  <?=$details->msg->title?>
                </h3>
              </div>
        
              <div class="product-details__content mt-5">
                <p class="product-details__content-text1">
                  <?=$details->msg->desc?>
                </p>
               
              </div>

              
            </div>
          </div>
        </div>
      </section>
      <!--Product Details End-->

      <!--Product Description Start-->
      <section class="product-description">
        <div class="container pt-0 pb-90">
          <div class="product-discription">
            <div class="tabs-box">
              <div class="tab-btn-box text-center">
                <ul class="tab-btns tab-buttons clearfix">
                  <li class="tab-btn active-btn" data-tab="#tab-1">
                   Others Info
                  </li>
              </div>
              <div class="tabs-content">
                <div class="tab active-tab" id="tab-1">
                  <div class="text">
                 
                    <div class="product-description__list">
                      <ul class="list-unstyled">
                        <li>
                          <p>
                            <span class="fa fa-arrow-right"></span>  <?=$details->msg->brand?> Brand.
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="fa fa-arrow-right"></span> Currently <?=$details->msg->stock_status=='1'?'Stock In': 'Stock out'?>
                          </p>
                        </li>
                      </ul>
                    </div>
                 
                  </div>
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Product Description End-->
      <?php if($products->errors==false):?>
      <section class="related-product">
        <div class="container pt-0 pb-90">
          <h3>Related Products</h3>
          <div class="row clearfix">
            <div class="col">
              <!--MixitUp Galery-->
              <div class="mixitup-gallery">
                <div class="filter-list row">
                  <!--Product Block-->
                  <?php foreach($products->msg as $item):?>
                    <div
                class="product-block all mix pantry fruit col-lg-3 col-md-6 col-sm-12"
              >
                <div class="inner-box">
                  <div class="image">
                    <a href="<?=site_url('/products/'.$item->id.'?info='.$item->title)?>"
                      ><img src="<?=getenv('IMAGE_LINK').'product-image/'.$item->image?>" alt=""
                    /></a>
                  </div>
                  <div class="content">
                    <h4><a href="<?=site_url('/products/'.$item->id.'?info='.$item->title)?>"><?=$item->title?></a></h4>
                    <span class="price"><?=$item->brand?></span>
                    <span class="rating  <?=($item->stock_status=='1')?'text-success':'text-danger'?>"
                      > <?=($item->stock_status=='1')?'Stock In':'Stock Out'?></span>
                  </div>
                  <div class="icon-box">
                    <a href="<?=site_url('/products/'.$item->id.'?info='.$item->title)?>" class="ui-btn like-btn"
                      ><i class="fa fa-heart"></i
                    ></a>
                    <a href="<?=site_url('/products/'.$item->id.'?info='.$item->title)?>" class="ui-btn add-to-cart"
                      ><i class="fa fa-shopping-cart"></i
                    ></a>
                  </div>
                </div>
              </div>

                  <?php endforeach?>

                 

               
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php endif?>
      <!--End Services Details-->
      <?= $this->endSection() ?>
      <!-- Main Footer -->
      <?= $this->section('footer') ?>
        <?= $this->include('assets/footer') ?>
        <?= $this->endSection() ?>
        <?= $this->section('jsLink') ?>
        <script src="js/jquery.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/jquery.countdown.js"></script>
    <script src="/js/bxslider.js"></script>
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
    <script>
      (function ($) {
        $("#contact_form").validate({
          submitHandler: function (form) {
            var form_btn = $(form).find('button[type="submit"]');
            var form_result_div = "#form-result";
            $(form_result_div).remove();
            form_btn.before(
              '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
            );
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop("disabled", true).data("loading-text"));
            $(form).ajaxSubmit({
              dataType: "json",
              success: function (data) {
                if (data.status == "true") {
                  $(form).find(".form-control").val("");
                }
                form_btn.prop("disabled", false).html(form_btn_old_msg);
                $(form_result_div).html(data.message).fadeIn("slow");
                setTimeout(function () {
                  $(form_result_div).fadeOut("slow");
                }, 6000);
              },
            });
          },
        });
      })(jQuery);
    </script>
    <?= $this->endSection() ?>
