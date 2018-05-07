

<section id="main-heading" class="section-page">
  <div class="post-slider featured-content">

    <?php foreach ($banner->result() as $banners): ?>
      <article class="post">
              <img data-lazy="<?=base_url()?>temp/public/images/ajax-loader.gif" src="<?=base_url()?>temp/upload/img/<?=$banners->image?>" alt="Selamat Datang di Universitas Gadjah Mada">
              <div class="post-content bottom-center">
                <?php if ($banners->desc!=""): ?>
                    <div class="entry-content"><?=$banners->desc?></div>
                <?php endif; ?>
              </div>
        </article>
      <?php endforeach; ?>

    </div>
</section>
<!-- / Slider -->

<!-- News Release -->




  <section id="newsfeed" class="section-page">
      <div class="container">

          <div class="row">

            <div class="col-md-3">
              <div class="section-title"><h2>App Online</h2></div>
                <div class="info-social info-item" style="margin-bottom:50px!important">
                    <div class="banner-box row">
                      <?php $btn= $this->db->query("SELECT * FROM btn_app ORDER BY id_btn DESC"); ?>
                      <?php foreach ($btn->result() as $btns): ?>
                        <div class="col-sm-12 btn-appl" style="background-color:<?=$btns->bg_color?>">
                          <a href="<?=$btns->btn_url?>" target="_blank" class="btn btn-flat btn-block"><i class="<?=$btns->btn_icon?>"></i>&nbsp;<?=$btns->btn_name?></a>
                        </div>
                      <?php endforeach; ?>
                    </div>
                </div>
            </div>






            <div class="col-md-9">
              <div class="section-title"><h2>Berita Terbaru</h2></div>
              <div id="berita-content"></div>

              <div class="text-center">
                <a href="<?=site_url('berita')?>" class="btn ">Lihat Semua Berita</a>
              </div>
            </div>



          </div>


      </div>
  </section>
<!-- / News Release -->

<section id="gallery" class="section-page">
    <div class="container">
        <div class="section-title"><h2>Video & Galeri Foto</h2></div>
        <div class="row">
            <div class="col-md-12 video-box">
              <?php $video = $this->db->query("SELECT * FROM video LIMIT 1") ?>
              <?php foreach ($video->result() as $videos): ?>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$videos->embed?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <h4 class="video-title"><?=$videos->video?></h4>
              <?php endforeach; ?>
                    <div class="btn-box">
                        <a href="<?=site_url('video')?>" class="btn btn-more">Video Selengkapnya</a>
                    </div>
            </div>
            <p>&nbsp;</p>


            <?php $album = $this->db->query("SELECT * FROM album LIMIT 3"); ?>
            <?php if ($album->num_rows() > 0): ?>

              <div class="col-md-12 photo-box">

                  <div class="row">

                    <?php foreach ($album->result() as $albums): ?>
                    <figure class="photo-item col-sm-4">
                      <a href="<?=site_url('album/detail/'.$albums->id_album)?>">
                          <span class="photo-img">
                            <?php $imgalb = $this->db->query("SELECT * FROM galery_image where id_album=$albums->id_album LIMIT 1");
                               if ($imgalb->num_rows()>0){
                                  $imgalbs = $imgalb->row()->image;
                                 }else {
                                   $imgalbs = "default.png";
                                 }
                             ?>
                            <img src="<?=base_url()?>temp/upload/thumbs/<?=$imgalbs?>" alt="<?=$imgalbs?>" style="width:100%!important;height:100%" class="img-responsive">
                          </span>
                          <label>
                              <span class="item-title"><?=$albums->album?></span>
                          </label>
                      </a>
                  </figure>
                  <?php endforeach; ?>


                  </div>

                  <div class="btn-box">
                    <a href="<?=site_url('album')?>" class="btn btn-more">Galeri Foto Selengkapnya</a>
                  </div>

            </div>

            <?php endif; ?>

        </div>
    </div>
</section>

<section id="info" class="section-page">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="info-news info-item">
                    <div class="section-title"><h2><i class="fa fa-bullhorn"></i> Pengumuman</h2></div>
                    <div id="pengumuman"></div>


                  <div class="btn-box">
                        <a href="<?=site_url('pengumuman')?>" class="btn btn-more">Pengumuman Selengkapnya</a>
                  </div>

                </div>
            </div>





            <div class="col-md-4">
                <div class="info-event info-item">
                    <div class="section-title"><h2><i class="fa fa-calendar"></i> Agenda Terkini</h2></div>

                    <div id="agenda"></div>

                  <div class="btn-box">
                        <a href="<?=site_url('agenda')?>" class="btn btn-more">Agenda Selengkapnya</a>
                  </div>
                </div>
            </div>



            <div class="col-md-4">
                <div class="info-news info-item">
                    <div class="section-title"><h2><i class="fa fa-file-text"></i> Berita Lainnya</h2></div>

                    <div id="berita-lain"></div>

                  <div class="btn-box">
                        <a href="<?=site_url("berita")?>" class="btn btn-more">Berita Selengkapnya</a>
                  </div>
                </div>
            </div>



        </div>
    </div>
</section>




<script type="text/javascript">
        $(document).ready(function(){
          $.getJSON("<?=base_url()?>public/home/berita_json",function(json){
            $.each(json,function(i,field){
              if (field.image=="") {
                var img = "bg-home.png";
              }else {
                var img = "upload/img/"+field.image;
              }

                $("#berita-content").append('<div class="col-md-4">'
                                        +'<div id="berita">'
                                        +'<img id="images" src="<?=base_url()?>temp/'+img+'" alt="'+field.judul+'" style="width:100%;height:200px;">'
                                        +'<div class="berita-caption">'
                                        +'<h5><a href="<?=base_url()?>berita/detail/'+field.id_berita+'/'+field.slug+'.html">'+field.judul+'</a></h5>'
                                        +'</div>'
                                        +'</div>'
                                        +'</div>'
                                      );
              $("#berita-content").hide().fadeIn("slow");
            });
          });

          $.getJSON("<?=base_url()?>public/home/pengumuman_json",function(json){
            $.each(json,function(i,field){
                $("#pengumuman").append('<article class="post">'
                                        +'<div class="post-content">'
                                        +'<div class="post-title">'
                                        +'<h3><a href="<?=base_url()?>pengumuman/'+field.id_pengumuman+'/'+field.slug+'.html">'+field.pengumuman+'</a></h3>'
                                        +'<span class="post-date">'+field.date+'</span>'
                                        +'</div>'
                                        +'</div>'
                                        +'</article>'
                                      );
              $("#pengumuman").hide().fadeIn("slow");
            });
          });

        $.getJSON("<?=base_url()?>public/home/agenda_json",function(json){
          $.each(json,function(i,field){
              $("#agenda").append('<article class="post post-event">'
                                      +'<div class="row">'
                                      +'<div class="col-md-3 col-sm-3 col-xs-3 event-date">'
                                      +'<span>'+field.tanggal+' <strong> '+field.bulan+' <br> '+field.tahun+'</strong></span>'
                                      +'</div>'
                                      +'<div class="col-md-9 col-sm-9 col-xs-9 post-content">'
                                      +'<div class="post-title">'
                                      +'<h3><a href="<?=base_url()?>agenda/'+field.id_agenda+'/'+field.created_at+'.html">'+field.agenda+'</a></h3>'
                                      +'</div>'
                                      +'</div>'
                                      +'</div>'
                                      +'</article>'
                                    );
            $("#agenda").hide().fadeIn("slow");
          });
        });

        $.getJSON("<?=base_url()?>public/home/beritalain_json",function(json){
          $.each(json,function(i,field){
              $("#berita-lain").append('<article class="post post-event">'
                                      +'<div class="row">'
                                      +'<div class="col-md-3 col-sm-3 col-xs-3">'
                                      +'<img src="<?=base_url()?>temp/upload/'+field.image+'" style="width:100%!important;height:50px!important" class="img-thumbnail" alt="'+field.image+'">'
                                      +'</div>'
                                      +'<div class="col-md-9 col-sm-9 col-xs-9 post-content">'
                                      +'<div class="post-title">'
                                      +'<h3><a href="<?=base_url()?>berita/detail/'+field.id_berita+'/'+field.slug+'.html">'+field.judul+'</a></h3>'
                                      +'<span class="post-date">'+field.date+'</span>'
                                      +'</div>'
                                      +'</div>'
                                      +'</div>'
                                      +'</article>'
                                    );
            $("#berita-lain").hide().fadeIn("slow");
          });
        });


});
</script>











        <!-- content end here -->
