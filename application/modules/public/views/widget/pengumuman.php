<div class="col-sm-12">
  <div class="widget widget_recent_entries">
      <div class="widget-header">
          <h3 class="widget-title"><a href="<?=site_url('pengumuman')?>">Pengumuman</a></h3>
      </div>
      <ul class="post-list">
        <?php $pengumuman = $this->db->query("SELECT * FROM pengumuman ORDER BY id_pengumuman ASC limit 4 "); ?>
        <?php foreach ($pengumuman->result() as $pengumumans): ?>
          <li>
              <a href="<?=site_url('pengumuman/'.$pengumumans->id_pengumuman.'/'.$pengumumans->slug)?>" title="Video Streaming Kuliah Umum Digital Ekonomi Oleh Menteri Sekretaris Negara"><?=substr($pengumumans->pengumuman,0,100)?>
              <div class="entry-meta">
                  <span class="meta-date"><i class="fa fa-clock-o"></i> <?=date("d,M Y",strtotime($pengumumans->created_at))?></span>
              </div>
              </a>
          </li>
        <?php endforeach; ?>

      </ul>
  </div>

</div>
