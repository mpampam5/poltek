<div class="container">
  <div class="row">

<!-- Content Area col-md-push-1 -->
  <div id="content" class="col-md-9 sidebar-right">
      <ul class="breadcrumbs breadcrumb"><li>
        <a href="<?=site_url()?>">Beranda</a><span class="divider"></span></li>
        <li><a href="<?=site_url("pengumuman")?>">Pengumuman</a><span class="divider"></span></li>
        <li class="active">Detail</li>
      </ul>        <!-- Content Area -->

      <article class="single-post">
          <div class="post-heading">
            <h2 class="post-title"><?=$pengumuman?></h2>
            <ul class="entry-meta">
              <li><i class="fa fa-clock-o"></i> <?=date("d,M Y",strtotime($date));?></li>
              <li>Share : <a href="#" alt="share facebok"> <i class="fa fa-facebook"></i></a>&nbsp;<a href="#" alt="share twitter"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>



          <div class="post-content">

            <?php if ($image!=""): ?>
              <figure class="entry-thumbnail slider-wrapper">
              <div class="gallery-slider slick-initialized slick-slider">
                <img src="<?=base_url()?>temp/upload/img/<?=$image?>" alt="<?=$image?>">
              </div>
              </figure>
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

  <div id="sidebar" class="col-md-3">
    <?=$widget_aplikasi?>
    <?=$widget_berita?>
    <?=$widget_agenda?>
  </div>


</div>
</div>
