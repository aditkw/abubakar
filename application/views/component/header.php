<header>
  <div class="container-fluid header">
    <div class="row visible-xs visible-sm">
      <div class="logo">
        <a href="<?=site_url()?>">
          <img src="<?=site_url('dist/img/assets/logo-mobile.jpg')?>" alt="">
        </a>
      </div>
      <div class="contact">
        <p><?=$contact->contact_phone?></p>
        <p><?=$contact->contact_email?></p>
      </div>
      <div  class="open">
        <span class="cls"></span>
          <span>
            <form class="search-mobile" action="<?=site_url('search')?>" method="get">
              <input placeholder="Search here" type="text" name="s">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
              <ul class="sub-menu ">
                <li>
                    <a href="<?=site_url('our-firm')?>" title="our firm">Our Firm</a>
                </li>
                <li>
                    <a href="<?=site_url('our-service')?>" title="our services">Our Services</a>
                </li>
                <li>
                  <a href="<?=site_url('our-partners')?>" title="our partners">Our Partners</a>
                </li>
                <li>
                  <a href="<?=site_url('our-clients')?>" title="our clients">Our Clients</a>
                </li>
                <li>
                  <a href="<?=site_url('benefits-for-our-client')?>" title="benefits our clients">Benefits For Our Clients</a>
                </li>
                <li>
                  <a href="<?=site_url('international-association')?>" title="international association">International Association</a>
                </li>
                <li>
                  <a href="<?=site_url('news')?>" title="news">News</a>
                </li>
                <li>
                    <a href="<?=site_url('event')?>" title="event">Event</a>
                </li>
                <li>
                    <a href="<?=site_url('careers')?>" title="careers">Careers</a>
                </li>
                <li>
                    <a href="<?=site_url('contact')?>" title="contact">Contact</a>
                </li>
              </ul>
          </span>
        <span class="cls"></span>
    </div>
    </div>
    <div class="row visible-lg visible-md">
      <div class="logo-name col-lg-5">
        <div class="logo">
          <a href="<?=site_url()?>">
            <img src="<?=site_url("dist/img/assets/logo.jpg")?>" alt="">
          </a>
        </div>
        <div class="name">
          <p>Abubakar Usman & Rekan</p>
          <p><em>Registered Public Accountants</em></p>
        </div>
      </div>
      <div class="menubar col-lg-5">
        <ul>
          <li><a class="<?php echo (empty($uri_1)) ? "active" : ""; ?>" href="<?=site_url()?>">Home</a></li>
          <li>
            <a class="<?=active_perent($uri_1, $about_list)?>" href="#">About Us <i class="fa fa-angle-down"></i></a>
            <ul>
              <li><a href="<?=site_url('our-firm')?>">Our Firm</a></li>
              <li><a href="<?=site_url('our-service')?>">Our Service</a></li>
              <li><a href="<?=site_url('our-partners')?>">Our Partners</a></li>
              <li><a href="<?=site_url('our-clients')?>">Our Clients</a></li>
              <li><a href="<?=site_url('benefits-for-our-client')?>">Benefits For Our Client</a></li>
              <li><a href="<?=site_url('international-association')?>">International Association</a></li>
            </ul>
          </li>
          <li><a class="<?=active_menu($uri_1, 'news')?>" href="<?=site_url('news')?>">News</a></li>
          <li><a class="<?=active_menu($uri_1, 'event')?>" href="<?=site_url('event')?>">Event</a></li>
          <li><a class="<?=active_menu($uri_1, 'careers')?>" href="<?=site_url('careers')?>">Careers</a></li>
          <li><a class="<?=active_menu($uri_1, 'contact-us')?>" href="<?=site_url('contact-us')?>">Contact Us</a></li>
        </ul>
        <form id="search" class="umpetin" action="<?=site_url('search')?>" method="get">
          <input placeholder="Search here" type="text" name="s">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <div class="search-contact col-lg-2">
        <div class="search" onclick="searchClck()">
          <i class="fa fa-search"></i>
        </div>
        <div class="contact">
          <p><?=$contact->contact_phone?></p>
          <p><?=$contact->contact_email?></p>
        </div>
      </div>
    </div>
  </div>
</header>
<div id="myScroll" class="scroll-top">
  <button onclick="topFunction()" type="button" name="button"> <i class="fa fa-angle-up"></i> </button>
</div>
