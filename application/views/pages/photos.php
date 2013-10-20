

    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Leora Katzman</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="/home">Home</a></li>
                <li><a href="/experience">My Experience</a></li>
                <ul class="nav" role="navigation">
                <li><a href="/library" >Get Involved</a></li>
                <li class = "active"><a href="#">Photos</a></li>
                <li><a href="/contact">Contact Us</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->


<div class="container">
     <div id="this-carousel-id" class="carousel slide">
        <div class="carousel-inner">

            <div class="item active">
                <img src="../assets/img/gallery/1.jpg" alt="1" />
            </div>

            <? foreach (range(2,16) as $image) { ?>
            <div class="item">
                <img src="../assets/img/gallery/<?echo $image?>.jpg" alt="<?echo $image ?>" />
            </div>
            <? } ?>

            <? foreach (range(17,18) as $image) { ?>
            <div class="item">
                <img src="../assets/img/gallery/<?echo $image?>.JPG" alt="<?echo $image ?>" />
            </div>
            <? } ?>

            <? foreach (range(19,20) as $image) { ?>
            <div class="item">
                <img src="../assets/img/gallery/<?echo $image?>.jpg" alt="<?echo $image ?>" />
            </div>
            <? } ?>

            <div class="item">
                <img src="../assets/img/gallery/21.JPG" alt="21" />
            </div>

            <div class="item">
                <img src="../assets/img/gallery/22.jpg" alt="22" />
            </div>

            <? foreach (range(23,24) as $image) { ?>
            <div class="item">
                <img src="../assets/img/gallery/<?echo $image?>.JPG" alt="<?echo $image ?>" />
            </div>
            <? } ?>

            <div class="item">
                <img src="../assets/img/gallery/25.jpg" alt="25" />
            </div>

            <? foreach (range(26,27) as $image) { ?>
            <div class="item">
                <img src="../assets/img/gallery/<?echo $image?>.JPG" alt="<?echo $image ?>" />
            </div>
            <? } ?>

            <? foreach (range(28,30) as $image) { ?>
            <div class="item">
                <img src="../assets/img/gallery/<?echo $image?>.jpg" alt="<?echo $image ?>" />
            </div>
            <? } ?>

            <div class="item">
                <img src="../assets/img/gallery/31.JPG" alt="31" />
            </div>

            <div class="item">
                <img src="../assets/img/gallery/32.jpg" alt="32" />
            </div>

            <!-- No number 33-->

            <? foreach (range(34,37) as $image) { ?>
            <div class="item">
                <img src="../assets/img/gallery/<?echo $image?>.jpg" alt="<?echo $image ?>" />
            </div>
            <? } ?>

        </div>
          <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
        </div>