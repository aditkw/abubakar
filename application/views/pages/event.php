<section>
  <div class="news">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner1.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="#">Home</a></li>
          <li class="aktip"><a href="#">Event</a></li>
        </ul>
      </div>
    </div>
    <div class="content-news">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>Our Event</p>
          </div>
        </div>
        <div class="row">
          <?php for($i=0;$i<6;$i++): ?>
          <div class="col-lg-4">
              <div class="box-news animation-element">
                <img class="img-responsive" src="<?=site_url('dist/img/assets/contoh-news.jpg')?>" alt="">
                <p>Lorem Ipsum</p>
                <p><i class="fa fa-calendar"></i> 24 April 2018</p>
                <?php $kalimat = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."; ?>
                <p><?=limitKalimat($kalimat, 100)?></p>
                <p><a href="<?=site_url('news/link')?>">Read More <i class="fa fa-arrow-right"></i></a></p>
              </div>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </div>
</section>
