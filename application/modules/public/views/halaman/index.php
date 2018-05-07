
<div class="container">
  <div class="row">

<!-- Content Area col-md-push-1 -->
  <div id="content" class="col-md-12 sidebar-right">
      <ul class="breadcrumbs breadcrumb">
        <li>
        <a href="<?=site_url()?>">Beranda</a><span class="divider"></span></li>
        <li>Halaman</li>
        <li class="active"><?=ucwords($halaman)?></li>
      </ul>        <!-- Content Area -->

      <article class="single-post">
          <div class="post-heading">
            <h2 class="post-title"><?=ucwords($halaman)?></h2>
          </div>



          <div class="post-content">
            <?php if ($image!=""): ?>
              <div class="gallery-slider slick-initialized slick-slider">
                <img src="<?=base_url()?>temp/upload/img/<?=$image?>" style="width:100%;max-height:500px" class="img img-responsive img-thumbnail" alt="<?=$image?>">
              </div>
            <?php endif; ?>

          <div class="news-content" style="text-align:justify">
            <?=$desc?>
          </div>




                    <!-- / Other news -->



      </div>
  </article>


      <!-- / Content Area -->


    </div>
<!-- / Content Area col-md-push-1 -->

<!-- Share Media Area col-md-pull-1 -->




</div>
</div>
