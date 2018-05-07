<!-- <?php $banner = $this->db->query("SELECT * FROM banner ORDER BY id_banner ASC") ?>
<?php foreach ($banner->result() as $banners): ?>
  <article class="post">
          <img data-lazy="<?=base_url()?>temp/public/images/ajax-loader.gif" src="<?=base_url()?>temp/upload/img/<?=$banners->image?>" alt="Selamat Datang di Universitas Gadjah Mada">
          <div class="post-content bottom-center">
            <?php if ($banners->desc!=""): ?>
                <div class="entry-content"><?=$banners->desc?></div>
            <?php endif; ?>
          </div>
    </article>
  <?php endforeach; ?> -->
  <style media="screen">
  #myVideo {
  position: relative;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  }

  </style>
  <section id="main-heading" class="section-page">
    <div class="post-slider featured-content video-ok">
      <video autoplay loop id="myVideo">
        <source src="<?=base_url()?>temp/pt.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    </div>
  </section>
