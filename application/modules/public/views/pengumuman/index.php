
<div class="container">
            <div class="row">
              <div id="content" class="col-md-9 sidebar-right">
                <ul class="breadcrumbs breadcrumb">
                  <li><a href="<?=site_url()?>">Beranda</a><span class="divider"></span></li>
                    <li class="active">Pengumuman</li>
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
                  <?=$aplikasi?>
                  <?=$berita?>
                  <?=$agenda?>
                </div>

            </div>
        </div>

        <script>

        $(document).ready(function(){

          load_pengumuman(1);

          function load_pengumuman(page)
          {
            $.ajax({
              url:"<?=base_url();?>pengumuman/page/"+page,
              method:'GET',
              dataType:'json',
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
            load_pengumuman(page);
          });
        });


      </script>
