<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</style>
<div class="container">
	<div class="row">
    <div id="content" class="col-md-12 sidebar-right">
      <ul class="breadcrumbs breadcrumb">
        <li>
        <a href="<?=site_url()?>">Beranda</a><span class="divider"></span></li>
        <li><a href="<?=site_url('album')?>">Album</a></li>
        <li class="active">Detail</li>
      </ul>

      <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <h5>Album :</h5>
            <p><?=$album?></p>
            <hr>
            <h5>Deskripsi :</h5>
            <p style="text-align:justify"><?=($desc=="")?"tidak ada deskripsi":"$desc"?></p>
          </div>
        </div>
      </div>

      <div class='list-group gallery' id="galery">

      </div> <!-- list-group / end -->


    </div>
	</div> <!-- row / end -->
</div> <!-- container / end -->

<script type="text/javascript">
$(document).ready(function(){
  $(".fancybox").fancybox({
      openEffect: "none",
      closeEffect: "none"
  });
});

$.getJSON("<?=base_url()?>album/json/<?=$id_album?>",function(json){
  $.each(json,function(i,field){
      $("#galery").append('<div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">'
                              +'<a class="thumbnail fancybox" rel="ligthbox" href="<?=base_url()?>temp/upload/img/'+field.image+'">'
                              +    '<img class="img-responsive" alt="" src="<?=base_url()?>temp/upload/thumbs/'+field.image+'" />'
                              +'</a>'
                          +'</div>');
      $("#galery").hide().fadeIn("slow");
  });
});

</script>
