<div class="col-sm-12">
  <div class="widget widget_recent_entries">
      <div class="widget-header">
          <h3 class="widget-title">Kategori</h3>
      </div>
      <ul class="post-list">
        <?php $kategori = $this->db->query("SELECT * FROM kategori"); ?>
        <?php foreach ($kategori->result() as $kategoris): ?>
          <li style="margin-bottom:0;padding:10px">
              <a href="<?=site_url('kategori/'.$kategoris->id_kategori.'/'.$kategoris->slug)?>" title="<?=$kategoris->kategori?>">
                <i class="fa fa-tags"></i> <?=$kategoris->kategori?>
              </a>
          </li>
        <?php endforeach; ?>

      </ul>
  </div>

</div>
