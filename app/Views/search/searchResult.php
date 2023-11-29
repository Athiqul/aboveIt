<?= $this->extend('layout/default') ?>

<?= $this->section('meta') ?>
<meta name="description" content="Above IT started its journey by introducing its services: Desktop based Software Development, Web Application Development, Android &amp; IOS Development, Any Type of Software Development as user requirements &amp; Complete office IT support. Complete Network Management, CCTV, EPBX, IP Phone &amp; Power Solution. CCTV Support, Network Support, Laser Printer, Desktop Printer &amp; Desktop, Laptop Support. Any Type of Canon Photocopier Machine has Complete Support. and Total IT solution. Since 2013 Above IT has highly skilled management &amp; Development team to manage the affairs of the company.">
<meta name="keywords" content="Above IT, Above BD, Above Software, Above Apps, Above Ecommerce, Web Application, Mobile Application, Software Development, Business Email, Web Hosting Services, Bulk SMS, Voice Call Blast, Email Marketing, Search Engine Optimization, Social Media Marketing, Search Engine Marketing, Product Advising Video, Short Film Marketing, YouTube Channel Management, Logo Design, Business Card Design, Brochure Design, Product Design, Social Medial Cover Design, Printer, Desktop &amp; Laptop Support, CCTV, EPBX, IP Phone &amp; Power Solution, Network Management, Canon Photocopier Support, Complete office IT support,">
<meta name="author" content="Above IT">
<?= $this->endSection() ?>
   
<?= $this->section('title') ?>Are you looking for <?=$search?> | Web App & Software Solution<?= $this->endSection() ?>
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
            <h1 class="title">Search Result</h1>
            <ul class="page-breadcrumb">
              <li><a href="<?=site_url('/')?>">Home</a></li>

              <li>Search Result</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end main-content -->
      
      <!-- Services Section -->
     
        <section class="featured-products">
        <span class="bg-shape"></span>
       
        <div class="auto-container">
          <!--MixitUp Galery-->
          <div class="mixitup-gallery">
           <h4 id="searchTotal"></h4>

            <div class="filter-list row" id="showItems">
              <!--Product Block-->
              

              <!--Product Block-->
             

             


            


            </div>
          </div>
        </div>
      </section>
   
      <!-- End Services Section-->
<?=$this->endSection()?>
    
<?= $this->section('footer') ?>
        <?= $this->include('assets/footer') ?>
        <?= $this->endSection() ?>
    
   
<?= $this->section('jsLink') ?>

<script>

  //Api Calling
  

  let url="<?=site_url('/search-api?search='.$search)?>";

  let result=document.getElementById('searchTotal');

  fetch(url).then(res=>res.json()).then(res=>{
     if(res.msg!==null)
     {
      result.innerText="<?=$search?>" + ` keyword search we found ${res.msg.length} records!`;  
      console.log(res.msg); 
      let html=''; 
       res.msg.forEach(function(item){
           if(item.type=='products')
           {
             html+=productCard(item);
           }

           if(item.type=='services')
           {
            html+=serviceCard(item);
           }

           if(item.type=='blog')
           {
             html+=blogCard(item);
           }
       });


       document.getElementById('showItems').innerHTML=html;

     }
     else{
          result.innerText=`On your search we don't found any records!`;  
     }
  }).catch(err=>console.log(err));


//Show product card
function productCard(item)
{
    return `<div
                class="product-block all mix pantry fruit col-lg-3 col-md-6 col-sm-12"
              >
                <div class="inner-box">
                  <div class="image">
                    <a href="/products/${item.id}?info=${item.title}"
                      ><img src="https://go.abovebd.com/admin/product-image/${item.image}" alt="${item.title}"
                    /></a>
                  </div>
                  <div class="content">
                    <h4><a href="/products/${item.id}?info=${item.title}">${item.title}</a></h4>
                    <span class="price">${item.brand}</span>
                    <span class="rating  ${(item.stock_status=='1')?'text-success':'text-danger'}"
                      >  ${(item.stock_status=='1')?'Stock In':'Stock Out'}</span>
                  </div>
                  <div class="icon-box">
                    <a href="/products/${item.id}?info=${item.title}" class="ui-btn like-btn"
                      ><i class="fa fa-heart"></i
                    ></a>
                    <a href="/products/${item.id}?info=${item.title}" class="ui-btn add-to-cart"
                      ><i class="fa fa-shopping-cart"></i
                    ></a>
                  </div>
                </div>
              </div>`;
}


function serviceCard(item)
{
     return `<div class="service-block col-lg-4 col-md-6 col-sm-12">
              <div class="inner-box">
                <div class="icon-box">
                
                  <i class="icon flaticon-repair"></i>
                </div>
                <h5 class="title" style="width: 100%; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                  <a href="/services/${item.id}?${item.title}"  >${item.title}</a>
                </h5>
                <div style="width: 100%; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;" class="text">
                   ${removeHtmlTags(item.desc)}
                  </div>
                <a href="/services/${item.id}?${item.title}" class="read-more"
                  ><i class="fa fa-long-arrow-alt-right"></i> Read more</a
                >
              </div>
            </div>`;
}


function removeHtmlTags(htmlString) {
  var doc = new DOMParser().parseFromString(htmlString, 'text/html');
  return doc.body.textContent || "";
}


//Return Blog
function blogCard(item)
{
  return ` <div class="news-block col-xl-4 col-lg-6 col-md-6">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <a href="/blogs/${item.id}?blog=${item.title}"
                      ><img src="https://go.abovebd.com/admin/blog-image/${item.image}" alt="${item.title}"
                    /></a>
                  </figure>
                </div>
                <div class="content-box">
                  <span class="date">${item.publish_at}</span>
                  <span class="post-info"
                    ><i class="fa fa-user-circle"></i> by ${item.user_name}</span
                  >
                  <h5 class="title" style="width: 100%; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">
                  <a href="/blogs/${item.id}?blog=${item.title}"
                      >${item.title}</a
                    >
                  </h5>
                  <div class="text" style="width: 100%; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                  ${item.title}
                  </div>
                  <a href="/blogs/${item.id}?blog=${item.title}" class="read-more"
                    ><i class="fa fa-long-arrow-alt-right"></i> Read More</a
                  >
                </div>
              </div>
            </div>`;
}

</script>
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
    <?= $this->endSection() ?>
