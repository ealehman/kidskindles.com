

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
                <li><a href="/about">About</a></li>
                <li><a href="/experience">My Experience</a></li>
                <ul class="nav" role="navigation">
                <li><a href="/library" >Library</a></li>
                <li class = "active"><a href="#">Photos</a></li>
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

            <? foreach (range(2,32) as $image) { ?>
            <div class="item">
                <img src="../assets/img/gallery/<?echo $image?>.jpg" alt="<?echo $image ?>" />
            </div>
            <? } ?>

        </div>
          <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
        </div>