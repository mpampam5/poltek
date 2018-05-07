
<div class="container">
            <div class="row">
              <div id="content" class="col-md-9 sidebar-right">
                <ul class="breadcrumbs breadcrumb">
                  <li><a href="<?=site_url()?>">Beranda</a><span class="divider"></span></li>
                  <li><a href="<?=site_url('berita')?>">Berita</a></li>
                    <li>Kategori</li>
                    <li class="active"><?php echo $slug ?></li>
                </ul>
<!-- Archive Header -->
<!-- / Archive Header -->

                    <div id="news_page"></div>
                    <div class="" style="padding:0 50px 50px 50px!important;">
                      <div id="pagination_link"></div>
                    </div>

              </div>






                <!-- content end here -->

                <div id="sidebar" class="col-md-3">
                  
                  <?=$pengumuman?>
                  <?=$agenda?>
                </div>

            </div>
        </div>

        <script>
        $(document).ready(function(){

          load_berita(1);

          function load_berita(page)
          {
            $.ajax({
              url:"<?=base_url();?>kategori/<?=$id_kategori?>/<?=$slug?>/page/"+page,
              method:'GET',
              dataType:'json',
              data    :{"id":"<?=$id_kategori?>","slug":"<?=$slug?>"},
              success:function(data)
              {
                $("#news_page").html(data.load_data_news);
                $("#pagination_link").html(data.pagination);
              }
            });
          }



          $(document).on('click',".pagination li a", function(e){
            e.preventDefault();
            var page = $(this).data("ci-pagination-page");
            $( '#loader' ).addClass( 'active' );
            setTimeout( function(){
                $( '#loader' ).removeClass( 'active' );
            }, 1000);
            var htmlbody = $( 'html, body' );
                       htmlbody.animate({
                           scrollTop: $( '#body' ).offset().top
                       }, 1000);
            load_berita(page);
          });
        });


      </script>
