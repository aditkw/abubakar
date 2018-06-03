<section>
  <div class="news">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner2.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="#">Home</a></li>
          <li><a href="#">News</a></li>
          <li class="aktip"><a href="#">Lorem Ipsum</a></li>
        </ul>
      </div>
    </div>
    <div class="content-detail">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>Lorem Ipsum</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="user">
              <i class="fa fa-user"></i> Administrator
            </div>
            <div class="tanggal">
              <i class="fa fa-calendar"></i> 21 April 2018
            </div>
            <div class="share">
              <a class="fa fa-facebook facebook-icon social-icon-x2 rounded" href="#"></a>
              <a class="fa fa-twitter twitter-icon social-icon-x2 rounded" href="#"></a>
              <a class="fa fa-linkedin linkedin-icon social-icon-x2 rounded" href="#"></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <img class="img-responsive" src="<?=site_url('dist/img/assets/contoh-news.jpg')?>" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="row video">
          <div class="col-lg-12">
            <div class="box-video">
              <p>Watch the video</p>
              <span class="garis"></span>
              <iframe src="https://www.youtube.com/embed/bCc_iSZdTNU" allow="encrypted-media" allowfullscreen="" frameborder="0"></iframe>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <p>Our Other News</p>
          </div>
          <div class="col-lg-12">
            <div id="news-slide" class="owl-carousel">
              <div class="item col-lg-12">
                <div class="box-news">
                  <img class="img-responsive" src="<?=site_url('dist/img/assets/contoh-news.jpg')?>" alt="">
                  <p>Lorem Ipsum</p>
                  <p><i class="fa fa-calendar"></i> 24 April 2018</p>
                  <?php $kalimat = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."; ?>
                  <p><?=limitKalimat($kalimat, 100)?></p>
                  <p><a href="<?=site_url('news/link')?>">Read More <i class="fa fa-arrow-right"></i></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
