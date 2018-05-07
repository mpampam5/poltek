
<div class="col-sm-12" >
  <ul class="share-box" id="yw1">
    <li><a class="facebook" onclick="return facebook();" title="Share Facebook" ><i class="fa fa-facebook"></i></a></li>
    <li><a class="twitter" title="Share Twitter"  onclick="return twitter();" ><i class="fa fa-twitter"></i></a></li>
    <li><a class="whatsapp"  title="Share Whatsapp" onclick="return whatsap();" ><i class="fa fa-whatsapp"></i></a></li>
  </ul>
</div>


<script type="text/javascript">

var locations = window.location.host+window.location.pathname;
    function facebook()
    {
      window.open('http://www.facebook.com/sharer/sharer.php?u='+location,'_blank');
    }

    function twitter()
    {
      window.open('http://twitter.com/share?url='+location,'_blank');
    }

    function whatsap()
    {
      window.open('whatsapp://send?text='+location,'_blank');
    }

</script>
