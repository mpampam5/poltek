
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Detail <?=$layout_title?></h3>
  </div>

  <div class="box-body">

    <div class="row">
      <div class="col-md-3">
        <img src="<?=base_url()?>temp/upload/<?=($image=="")?"student.png":"thumbs/$image"?>" class="img-responsive img-thumbnail" style="max-width:150px;max-height:150px" alt="<?=$image?>">
      </div>

      <div class="col-md-9">
        <table  class="table no-border">
          <tr>
            <td>NIDN</td>
            <td><?php echo $nidn; ?></td>
          </tr>
          <tr>
            <td>NAMA</td>
            <td><?php echo $nama; ?></td>
          </tr>
          <tr>
            <td>PROGRAM STUDI</td>
            <td><?php echo $prodi; ?></td>
          </tr>
          <tr>
            <td>Biografi</td>
            <td><?php echo $desc; ?></td>
          </tr>
        </table>
      </div>
    </div>

    <hr>
    <!-- MODAL ClOSE -->
    <!-- <button type="button" class="btn btn-default btn-sm " data-dismiss="modal" aria-label="Close">tutup</button> -->
    <a href="<?=site_url(config_item("cpanel").'dosen')?>" class="btn btn-default btn-sm"> Kembali</a>
  </div>
</div>
