<!DOCTYPE html>
<html lang="en">

<head>
<head>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?=$this->renderSection('meta')?>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <link rel="shortcut icon" href="/images/logo-mini.svg" type="image/x-icon">
    <title><?=$this->renderSection('title')?></title>
    
    <!-- plugins:css -->
  
    <?=$this->renderSection('cssLink')?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
</head>

<body>
<div class="page-wrapper">
      <!-- Preloader -->
      <div class="preloader"></div>

        <?=$this->renderSection('navbar')?>
        <?=$this->renderSection('slider')?>
        <?= $this->renderSection('content') ?>
        <?=$this->renderSection('footer')?>
        
        </div>
        <div class="scroll-to-top scroll-to-target" data-target="html">
      <span class="fa fa-angle-up"></span>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   <?= $this->renderSection('jsLink')?>
    
    <!-- End custom js for this page -->
</body>

</html>