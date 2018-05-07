<div class="container">
  <div class="row">
    <div id="content" class="col-md-9 sidebar-right">
      <ul class="breadcrumbs breadcrumb"><li>
        <a href="<?=site_url()?>">Beranda</a><span class="divider"></span></li>
        <li><a href="<?=site_url("dosen")?>">dosen</a><span class="divider"></span></li>
        <li class="active">Detail</li>
      </ul>
        <article class="single-post">
          <div class="post-content">
            <div class="col-sm-3">
              <a href="<?=base_url()?>temp/upload/<?=($image=="")?"student.png":"img/$image"?>" target="_blank"><img src="<?=base_url()?>temp/upload/<?=($image=="")?"student.png":"thumbs/$image"?>" class="img img-responsive img-thumbnail" style="height:200px;width:100%" alt="dosen"></a>
            </div>
            <div class="col-sm-9">
              <table>
                <tr>
                  <td>Nidn</td>
                  <td>:</td>
                  <td><?=$nidn?></td>
                </tr>

                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><?=$nama?></td>
                </tr>

                <tr>
                  <td>Program Studi</td>
                  <td>:</td>
                  <td><a style="text-decoration:none" href="<?=site_url('prodi/'.$slug_prodi)?>"><?=$prodi?></a></td>
                </tr>
              </table>
            </div>
            <hr>
            <div class="col-sm-12">
              <hr>
                <?=$desc?>
            </div>
          </div>
        </article>


    </div>

    <div class="col-md-3">
      <?=$sosialshare?>
      <?=$widget_berita?>
      <?=$widget_pengumuman?>
      <?=$widget_agenda?>
    </div>
  </div>
</div>
