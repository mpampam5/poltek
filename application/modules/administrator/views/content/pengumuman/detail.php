
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Detail <?=$layout_title?></h3>
  </div>

  <div class="box-body">
    <div class="panel panel-default">
      <div class="panel-body">
    <div class="col-lg-12 bg-info" style="padding:10px;">
      <div class="col-md-9">
            <table class="table no-border">
          	    <tr><th>Pengumuman</th><td><?php echo $pengumuman; ?></td></tr>
          	    <tr><th>Di buat</th><td><?php echo $created_at; ?></td></tr>
          	    <tr><th>Terakhir di ubah</th><td><?php echo $update_at; ?></td></tr>
          	</table>
      </div>

      <div class="col-md-3">
        <?php if ($image!=""): ?>
          <img src="<?=base_url()?>temp/upload/thumbs/<?=$image?>" class="img img-responsive img-thumbnail" style="width:200px;height:200px" alt="<?=$image?>">
          <?php else: ?>
          <img src="<?=base_url()?>temp/upload/default.png" style="width:200px;height:200px" alt="default.png">
        <?php endif; ?>
      </div>
    </div>

    <p>&nbsp;</p>
    <hr>

    <div class="col-md-12" style="text-align:justify">
      <?php echo $desc; ?>
    </div>
  </div>
</div>

    <hr>
    <!-- MODAL ClOSE -->
    <!-- <button type="button" class="btn btn-default btn-sm " data-dismiss="modal" aria-label="Close">tutup</button> -->

    <div class="col-md-12">
      <a href="<?=site_url(config_item("cpanel").'pengumuman')?>" class="btn btn-default btn-sm"> Kembali</a>
    </div>
  </div>
</div>
