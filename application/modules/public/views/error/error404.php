<style media="screen">
  #er404{
    background-image:url('<?=base_url()?>temp/error404.gif');
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    width: 100%;
    height: 500px;
    padding: 0;
    margin: 0;
  }

  #contentt{
    top:220px;
    /* opacity: 0.8; */
    color:#fff;
  }

  .cont{
    /* background-color: #fff; */
    width: 90%;
    padding: 5px;
    margin: auto;
  }
  .cont h1 small{
    color :#ffed00;
  }


</style>
<section id="main-heading" class="section-page">
  <div class="post-slider featured-content">
<div id="er404">
  <div class="row">
    <div id="contentt" class="col-md-12 text-center">
      <div class="cont">
        <h1>ERROR 404! <small>Halaman Yang Anda Cari Tidak Ditemukan</small></h1>
        <h3><?=strtoupper(profile("title"))?></h3>
        <a href="javascript:history.back()" class="btn btn-info btn-sm"> Back</a>
      </div>
    </div>
  </div>
</div>
</div>
</section>
