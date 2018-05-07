
<div class="container">
  <div class="row">

<!-- Content Area col-md-push-1 -->
  <div id="content" class="col-md-12 sidebar-right">
      <ul class="breadcrumbs breadcrumb">
        <li>
        <a href="<?=site_url()?>">Beranda</a><span class="divider"></span></li>
        <li class="active">Kontak</li>
      </ul>        <!-- Content Area -->

      <div class="col-sm-8" style="margin-bottom:50px;">
        <div id="pesan"></div>
        <form class="form-horizontal" action="<?=site_url('kontak/action')?>" id="kontak">
          <div class="form-group">
            <label class="control-label col-md-2">Email</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="email" name="email" value="<?=$email?>" placeholder="Email">
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-md-2">Deskripsi</label>
            <div class="col-md-10">
              <textarea class="form-control" name="desc" id="desc" rows="6" cols="80" placeholder="Deskripsi"><?=$desc?></textarea>
            </div>
          </div>



            <div class="form-group">
              <div class="col-md-2 col-md-offset-2 image">
                <?=$captcha?>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2">Captcha</label>
              <div class="col-md-5">
                <input type="text" class="form-control" name="captcha_key" id="captcha_key">
              </div>
            </div>

          <div class="">
            <button type="submit" name="submit" data-loading-text="<i class='fa fa-spinner fa-pulse'></i> Sedang Memproses ..." id="submit" class="btn btn-sm btn-info col-md-10 col-md-offset-2"><i class="fa fa-send"></i> Kirim</button>
          </div>

        </form>
      </div>



      <div class="col-sm-4">
        <address>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31821.265922454164!2d120.36099035083897!3d-4.4744499166761615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbdf057a78fb6d5%3A0xec5442a013edea72!2sPoliteknik+Kelautan+dan+Perikanan+Bone!5e0!3m2!1sid!2sid!4v1525620595395" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            <strong style="text-align:center!important"><?=strtoupper(profile("title"))?></strong><br>
            <?=profile("alamat")?><br>
            <i class="fa fa-envelope"></i>&nbsp;&nbsp;
            <a href="#"><?=profile("email")?></a><br>
            <i class="fa fa-phone"></i>&nbsp;&nbsp;
            <a href="#"><?=profile("tlp")?></a><br>
            <i class="fa fa-print"></i>&nbsp;&nbsp;
            <a href="#"><?=profile("fax")?></a><br>
            <i class="fa fa-globe"></i>&nbsp;&nbsp;
            <a href="#"> <?=profile("web")?></a>
        </address>
      </div>



    </div>
<!-- / Content Area col-md-push-1 -->

<!-- Share Media Area col-md-pull-1 -->




</div>
</div>



<script type="text/javascript">
$("#kontak").submit(function(e){
  e.preventDefault();
  var me = $(this);
  $("#submit").prop('disabled',true);

  $.ajax({
        url             : me.attr('action'),
        type            : 'post',
        data            :  new FormData(this),
        contentType     : false,
        cache           : false,
        dataType        : 'JSON',
        processData     :false,
        success:function(json){
          if (json.success==true) {
              if (json.alert_capt==1) {
                $.ajax({
                  type : 'post',
                  url  : '<?=base_url()?>kontak/captcha',
                  success : function(res){
                    if (res) {
                      $('.alert-success').remove();
                      $('.alert-danger').remove();
                      $("#submit").prop('disabled',false);
                      $('#captcha_key').val('');
                      $(".image").html(res);
                      $('#pesan').append('<div class="alert alert-danger">'+
                                          '<span class="fa fa-envelope-o"></span> '+
                                          json.alert+
                                          '<div>');
                        $('.form-group').removeClass('.has-error')
                                        .removeClass('.has-success');
                        $('.text-danger').remove();
                         $('body,html').animate({ scrollTop: 0 }, 'slow');
                        $('.alert-success').delay(500).show(10, function(){
                          $('.alert-success').delay(5000).hide(10, function(){
                            $('.alert-danger').remove();
                          });
                        })
                    }
                  }
                });

              }else {
                $('.alert-danger').remove();
                $('#pesan').append('<div class="alert alert-success">'+
                                    '<span class="fa fa-envelope-o"></span> '+
                                    json.alert+
                                    '<div>');
                  $('.form-group').removeClass('.has-error')
                                  .removeClass('.has-success');
                  $('.text-danger').remove();
                   $('body,html').animate({ scrollTop: 0 }, 'slow');
                  $('.alert-success').delay(500).show(10, function(){
                    $('.alert-success').delay(5000).hide(10, function(){
                      $('.alert-success').remove();
                      location.reload();
                    });
                  })
              }
          }else {
            $.each(json.alert, function(key, value) {
              var element = $('#' + key);
               $("#submit").prop('disabled',false);
              $(element)
              .closest('.form-group')
              .find('.text-danger').remove();
              $(element).after(value);
            });
          }
        }
  });
});
</script>
