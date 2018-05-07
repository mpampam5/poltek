
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Detail <?=$layout_title?></h3>
  </div>

  <div class="box-body">
  <table class="table">
	    <tr><td>Btn Name</td><td><?php echo $btn_name; ?></td></tr>
	    <tr><td>Btn Url</td><td><?php echo $btn_url; ?></td></tr>
	    <tr><td>Btn Icon</td><td><?php echo $btn_icon; ?></td></tr>
	    <tr><td>Bg Color</td><td><?php echo $bg_color; ?></td></tr>
	</table>
    <hr>
    <!-- MODAL ClOSE -->
    <!-- <button type="button" class="btn btn-default btn-sm " data-dismiss="modal" aria-label="Close">tutup</button> -->
    <a href="<?=site_url(config_item("cpanel").'btn_app')?>" class="btn btn-default btn-sm"> Kembali</a>
  </div>
</div>
