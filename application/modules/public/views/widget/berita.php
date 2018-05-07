<div class="col-sm-12">
  <div class="widget widget_rss">
      <div class="widget-header">
          <h3 class="widget-title">
              <a href="<?=site_url('berita')?>" class="rsswidget">Berita</a>
          </h3>
      </div>
      <ul>
        <?php $berita = $this->db->query("SELECT * FROM berita ORDER BY id_berita DESC"); ?>
        <?php foreach ($berita->result() as $beritas): ?>
          <li>
              <a class="rsswidget" href="<?=site_url('berita/detail/'.$beritas->id_berita.'/'.$beritas->slug)?>" title="<?=$beritas->judul?>"><?=$beritas->judul?></a>
              <span class="rss-date"><?=date("d, M Y",strtotime($beritas->created_at))?></span>
          </li>
        <?php endforeach; ?>
      </ul>
  </div>

</div>
