<p>         <?php if ( in_category('wordpress') ) {
            echo "<i class='fa fa-wordpress cat-icon' title='Wordpress dev'></i> ";
            }
            ?>

            <?php if ( in_category('js') ) {
            echo "<i class='fa fa-code cat-icon' title='JavaScript dev'></i> ";
            }
            ?>
            <?php if ( in_category('css') ) {
            echo "<i class='fa fa-css3 cat-icon' title='CSS'></i> ";
            }
            ?>

            <?php if ( in_category('ios') ) {
            echo "<i class='fa fa-apple cat-icon' title='iOS dev'></i> ";
            }
            ?>
              <?php if ( in_category('books') ) {
            echo "<i class='fa fa-book cat-icon' title='Book recommendations'></i> ";

            }
            ?>
            <?php if ( in_category('fiction') ) {
            echo "<span class='xiong-book-sub-cat'>Fiction</span>";
            }
            ?>
            <?php if ( in_category('nonfiction') ) {
            echo "<span class='xiong-book-sub-cat'>Non-Fiction</span>";
            }
            ?>
            <?php if ( in_category('software') ) {
            echo "<span class='xiong-book-sub-cat'>Software Development</span>";
            }
            ?>
            <?php if ( in_category('business') ) {
            echo "<span class='xiong-book-sub-cat'>Business</span>";
            }
            ?>

              <?php if ( in_category('basics')||in_category('basics-js') ) {
            echo "<span class='xiong-basics'>Basics</span>";
            }
            ?>
            <?php if ( in_category('intermediate') || in_category('intermediate-js')  ) {
            echo "<span class='xiong-intermediate'>Intermediate</span>";
            }
            ?>
            <?php if ( in_category('advanced')|| in_category('advanced-js') ) {
            echo "<span class='xiong-advanced'>Advanced</span>";
            }
            ?>
            <?php if ( in_category('expert')|| in_category('expert-js') ) {
            echo "<span class='xiong-expert'>Expert</span>";
            }
            ?>

            <?php $stars = get_post_meta( get_the_ID(), 'stars', true );
            if ($stars == '1') {
            echo '<i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
            ';}
            elseif($stars == '2') {
            echo '<i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
            ';}
            elseif($stars == '3') {
            echo '<i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
            ';}
            elseif($stars == '4') {
            echo '<i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
            ';}
            elseif($stars == '5') {
            echo '<i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
            ';}else {
                  echo '';
            }
            ?>



            </p>
