 <footer>
  <div class="container">
    <div class="row">
      <p>Copyright © 2020 Juha Stenroos | Theme by Juha Stenroos</a></p>

    </div><!-- row-->
  </div><!--row -->

        <?php wp_footer(); ?>
</footer>


<script>
              document.addEventListener('DOMContentLoaded', function(){
                  Typed.new('.typed', {
                    strings: ["<?php bloginfo( 'name' ); ?>"],
                    typeSpeed: 100
                  });
              });


          </script>


 <?php if (is_archive()) {
echo '<script type="text/javascript">
      jQuery( document ).ready(function() {
    jQuery(".xiong-filters li:nth-child(1) a").text("All");
});
    </script> ';
}?>

  </body>
</html>
