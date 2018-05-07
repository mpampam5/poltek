<div class="container">
  <div class="row">

<!-- Content Area col-md-push-1 -->
  <div id="content" class="col-md-9 sidebar-right">
      <ul class="breadcrumbs breadcrumb"><li>
        <a href="<?=site_url()?>">Beranda</a><span class="divider"></span></li>
        <li><a href="<?=site_url("berita")?>">Berita</a><span class="divider"></span></li>
        <li class="active">Detail</li>
      </ul>        <!-- Content Area -->

      <article class="single-post">
          <div class="post-heading">
            <h2 class="post-title"><?=$judul?></h2>
            <ul class="entry-meta">
              <li><i class="fa fa-clock-o"></i> <?=date("d,M Y",strtotime($date));?></li>
              <li><a href="<?=site_url('kategori/'.$id_kategori.'/'.$slug_kategori)?>"><i class="fa fa-tags"></i> <?=$kategori?></a></li>
              <li> <i class="fa fa-eye"></i> <?=$hits?></li>
              <?php if ($komentar!=0): ?>
                <li><i class="fa fa-commenting"></i> <fb:comments-count href="<?=site_url('berita/detail/'.$id_berita.'/'.$slug)?>"></fb:comments-count></li>
              <?php endif; ?>
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

        <?php if ($komentar!=0): ?>
            <div class="fb-comments" data-href="<?=site_url('berita/detail/'.$id_berita.'/'.$slug)?>" data-numposts="5" width="100%"></div>
        <?php endif; ?>
            <!-- Share -->



            <?php if ($id_kategori !=""): ?>
              <?php $berita_terkait = $this->db->query("SELECT * FROM berita WHERE id_berita!=$id_berita AND id_kategori=$id_kategori  ORDER BY id_berita DESC LIMIT 4") ?>
              <?php if ($berita_terkait->num_rows()>0): ?>
                <div class="related-post">
                  <div class="content-header">
                      <h3 class="content-title">Berita Terkait</h3>
                  </div>
                  <ul class="post-list">


                      <?php foreach ($berita_terkait->result() as $berita_terkaits): ?>
                        <li>
                          <a href="<?=site_url('berita/detail/'.$berita_terkaits->id_berita.'/'.$berita_terkaits->slug)?>">
                              <?=$berita_terkaits->judul?>
                            </a>
                          <div class="entry-meta">
                              <span class="meta-date"><?=date("d,M Y",strtotime($berita_terkaits->created_at));?></span>
                          </div>
                      </li>
                      <?php endforeach; ?>
                  </ul>
                </div>
              <?php endif; ?>
            <?php endif; ?>

            <!-- Other news -->

                    <!-- / Other news -->



      </div>
  </article>


      <!-- / Content Area -->


    </div>
<!-- / Content Area col-md-push-1 -->

<!-- Share Media Area col-md-pull-1 -->

  <div id="sidebar" class="col-md-3">
    <?=$sosialshare?>
    <?=$widget_kategori?>
    <?=$widget_pengumuman?>
    <?=$widget_agenda?>
  </div>


</div>
</div>


<?php if ($komentar!=0): ?>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.12&appId=253337898474474&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
<?php endif; ?>
