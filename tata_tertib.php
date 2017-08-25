<?php require 'templates/header.php'; ?>

<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Tata Tertib</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Tata Tertib</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    </section><!--/#Page header-->

<section class="container">
  <div class="row" style="margin-top: 52px">
    <div>
      <ul class="tata-tertib">
          <?php for ($i=1; $i <= 10; $i++) { ?>
            <li class="wow fadeInUp" data-wow-duration="1500ms" style="padding: 20px 15px;margin-bottom: 35px;box-shadow: 3px 5px 10px #aaa;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
          <?php } ?>
        </ul>
    </div>
  </div>
</section>


<?php require 'templates/footer.php'; ?>
