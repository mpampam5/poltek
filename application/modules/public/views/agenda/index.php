
<div class="container">
            <div class="row">
              <div id="content" class="col-md-9 sidebar-right">
                <ul class="breadcrumbs breadcrumb">
                  <li><a href="<?=site_url()?>">Beranda</a><span class="divider"></span></li>
                    <li class="active">agenda</li>
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
                  <?=$widget_aplikasi?>
                  <?=$widget_berita?>
                  <?=$widget_informasi?>
                </div>

            </div>
        </div>

        <script>

        $(document).ready(function(){

          load_agenda(1);

          function load_agenda(page)
          {
            $.ajax({
              url:"<?=base_url();?>agenda/page/"+page,
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
            load_agenda(page);
          });
        });


      </script>
