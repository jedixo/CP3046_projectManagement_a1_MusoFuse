    <div class="footer-wrapper ">
      <footer class="site-footer container">
        <div class="content">
          <div class="footer-logo"><a href="index.php"><img src="images/logo.png" style="width:147px; height:98px;" alt="logo" /></a></div>
          <ul class="footer-navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="events.php">page1</a></li>
            <li><a href="bulletinboard.php">page1</a></li>
            <li><a href="artists.php">page1</a></li>
            <li><a href="members.php">page1</a></li>
            <li><a href="about.php">About</a></li>
            
          </ul>
          <ul class="footer-contact">
            <li class="footer-contact-address">Musofuse</li>
            <li class="footer-contact-email"> <a href="mailto:admin@townsvillemusic.org.au?Subject=Enquiry" target="_top">x@admin.com</a> </li>
            <li class="footer-contact-phone">footer</li>
          </ul>
          <div class="footer-facebook">
            <a href="" target="_blank">
              <div class="fb-icon"></div>
              <img src="images/fb2.png" style="display: none;" alt="Facebook Icon"/>
            </a>
          </div>
        </div>
      </footer>
    </div>
    
  </div>
  <!-- END .inner --> 
  
</div>
<!-- END #boxed-content -->

<script type="text/javascript">
  $(document).ready(function(){
    $('header #show-menu').click(function(e){
      e.preventDefault();
      $('header nav.site-navigation').toggle('slow');
    });

    $( window ).resize(function(){
      if(window.innerWidth > 1024) {
        $("header nav.site-navigation").removeAttr("style");
      }
    });
  });
</script>
