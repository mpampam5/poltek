<div id="alert"></div>
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Detail Program Studi <?php echo $prodi; ?></h3>
  </div>

  <div class="box-body">
  <div class="col-md-12" style="text-align:justify;margin-top:5px;padding:20px">
    <?php echo $desc; ?>
  </div>

    <!-- MODAL ClOSE -->
    <!-- <button type="button" class="btn btn-default btn-sm " data-dismiss="modal" aria-label="Close">tutup</button> -->
    <hr>
    <p>&nbsp;</p>
    <p><a href="<?=site_url(config_item("cpanel").'prodi')?>" class="btn btn-default btn-sm"> Kembali</a>
    <a href="<?=site_url(config_item("cpanel")."prodi/edit/$id_prodi")?>" id="edit" class="btn btn-sm btn-warning">edit</a>
    <a href="<?=site_url(config_item("cpanel")."prodi/hapus/$id_prodi")?>" id="hapus" class="btn btn-sm btn-danger">hapus</a>
    </p>
  </div>
</div>


<script type="text/javascript">
$(document).on('click', '#hapus', function(e){
 e.preventDefault();
 var Link = $(this).attr('href');
 testAnim("zoomIn");
 $('.modal-dialog').removeClass('modal-lg');
 $('.modal-dialog').addClass('modal-sm');
 $('#ModalHeader').html('Konfirmasi');
 $('#ModalContent').html('Apakah anda yakin ingin Menghapus?');
 $('#ModalFooter').html("<button type='button' class='btn btn-primary' id='ya-hapus'  data-url='"+Link+"'>Ya, saya yakin</button><button type='button' class='btn btn-default' data-dismiss='modal'>Batal</button>");
 $('#ModalGue').modal('show');
});

$(document).on('click', '#ya-hapus', function(e){
 e.preventDefault();

 $.ajax({
   url: $(this).data('url'),
   type: "POST",
   cache: false,
   dataType:'json',
   success: function(data){
     $("#ModalGue").modal('hide');
     $('#alert').append('<div id="alert" class="alert alert-success">'+
                       data.alert+
                       '<div>');
      //$('#table').DataTable().ajax.reload();
     $('.alert-success').delay(500).show(10, function(){
       $('.alert-success').delay(5000).hide(10, function(){
         $('.alert-success').remove();
         location.href="<?=site_url(config_item("cpanel").'prodi')?>";
       });
     })
   }
 });
});
</script>
