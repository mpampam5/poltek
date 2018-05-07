<link rel="stylesheet" href="<?=directory("admin_dir")?>plugins/colorpicker/bootstrap-colorpicker.min.css">
<script src="<?=directory("admin_dir")?>plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

      <div id="pesan"></div>
      <form action="<?=$aksi?>" id="form">

						 <div class="form-group">
                <label for="varchar">Name</label>
                <input type="text" class="form-control" name="btn_name" id="btn_name" placeholder="Name" value="<?php echo $btn_name; ?>" />
            </div>

						 <div class="form-group">
                <label for="varchar">Url</label>
                <input type="text" class="form-control" name="btn_url" id="btn_url" placeholder="Url" value="<?php echo $btn_url; ?>" />
            </div>


            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                   <label for="varchar">Icon <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank"> <i class="fa fa-link"></i></a></label>
                   <input type="text" class="form-control" name="btn_icon" id="btn_icon" placeholder="Icon" value="<?php echo $btn_icon; ?>" />
               </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                   <label for="varchar">Color</label>
                   <input type="text" class="form-control my-colorpicker1" name="bg_color" id="bg_color" placeholder="Color" value="<?php echo $bg_color; ?>" />
               </div>
              </div>
            </div>



<hr>

        <div class="row">
            <div class="col-md-6">
            <!-- MODAL ClOSE -->
            <!-- <button type="button" class="btn btn-default btn-sm btn-block" data-dismiss="modal" aria-label="Close">tutup</button> -->
              <a href="<?=site_url(config_item("cpanel").'btn_app')?>" class="btn btn-sm btn-default btn-block"> batal</a>
            </div>

            <div class="col-md-6">
              <button type="submit" data-loading-text="<i class='fa fa-spinner fa-pulse'></i> Sedang Memproses ..." class="btn btn-info btn-sm btn-block" name="submit" id="submit"><?=$button?></button>
            </div>
        </div>

      </form>



<script type="text/javascript">
$(function(){
  $(".my-colorpicker1").colorpicker();
});

  $("#form").submit(function(e){
    e.preventDefault();
    var me = $(this);
    $("#submit").prop('disabled',true)
                .button('loading');

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

                    $("#ModalGue").modal('hide');
                    $('#mytable').DataTable().ajax.reload();
                  });
                })
            }else {
              $.each(json.alert, function(key, value) {
                var element = $('#' + key);
                $('#submit').button('reset');
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
