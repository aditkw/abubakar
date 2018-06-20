<section>
  <div class="partners">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner1.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="<?=site_url()?>">Home</a></li>
          <li class="aktip"><a href="#">Our Clients</a></li>
        </ul>
      </div>
    </div>
    <div class="content-partners">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>Our Clients</p>
          </div>
        </div>
        <?php foreach ($clients as $client): ?>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
              <img src="<?=site_url("uploads/img/clients/$client->image_name")?>">
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
              <p><?=nl2br($client->info_desc)?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
