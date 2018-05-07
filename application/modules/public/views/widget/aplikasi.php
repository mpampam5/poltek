<div class="col-sm-12">
  <div class="widget widget_recent_entries">
      <div class="widget-header">
          <h3 class="widget-title">Aplikasi Online</h3>
      </div>

        <div class="info-social info-item">
            <div class="banner-box row">
              <?php $btn= $this->db->query("SELECT * FROM btn_app ORDER BY id_btn DESC"); ?>
              <?php foreach ($btn->result() as $btns): ?>
                <div class=" btn-appl" style="background-color:<?=$btns->bg_color?>">
                  <a href="<?=$btns->btn_url?>" target="_blank" class="btn btn-flat btn-block" style="padding:10px!important;"><i class="<?=$btns->btn_icon?>"></i>&nbsp;<?=$btns->btn_name?></a>
                </div>
              <?php endforeach; ?>
            </div>
        </div>


  </div>

</div>
