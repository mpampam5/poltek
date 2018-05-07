<div class="container">
  <div class="row">

<!-- Content Area col-md-push-1 -->
  <div id="content" class="col-md-9 sidebar-right">
      <ul class="breadcrumbs breadcrumb"><li>
        <a href="<?=site_url()?>">Beranda</a><span class="divider"></span></li>
        <li><a href="<?=site_url("agenda")?>">agenda</a><span class="divider"></span></li>
        <li class="active">Detail</li>
      </ul>        <!-- Content Area -->

      <article class="single-post">
          <div class="post-heading">
            <h2 class="post-title"><?=$agenda?></h2>
          </div>



          <div class="post-content">
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
    <?=$widget_informasi?>
  </div>


</div>
</div>
