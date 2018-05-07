<div class="col-sm-12">
  <div class="widget widget-event">
      <div class="widget-header">
          <h3 class="widget-title"><a href="<?=site_url('agenda')?>">Agenda</a></h3>
      </div>
      <ul class="event-list">
        <?php $agenda = $this->db->query("SELECT * FROM agenda ORDER BY date ASC limit 4 "); ?>
        <?php foreach ($agenda->result() as $agendas): ?>
          <li>
              <a href="<?=site_url('agenda/'.$agendas->id_agenda.'/'.$agendas->date)?>">
                  <span class="event-date" style="color:red;font-size:20px!important"><?=date("d",strtotime($agendas->date));?>
                    <strong>
                      <?=date("M",strtotime($agendas->date));?></br>
                      <?=date("Y",strtotime($agendas->date));?>
                    </strong>
                  </span>
                  <span class="event-title"> <?=substr($agendas->agenda,0,80)?></span>
              </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
</div>
