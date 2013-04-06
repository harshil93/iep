
<header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="/iep/views/index.php" class="brand brand-bootbus">IITG Entertainment</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Videos<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="our_works.html">Most Vie</a></li>
                    <li><a href="patnerships.html">Parnerships</a></li>
                    <li><a href="leadership.html">Leadership</a></li>
                    
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Apps<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="our_works.html">Our works</a></li>
                    <li><a href="patnerships.html">Parnerships</a></li>
                    <li><a href="leadership.html">Leadership</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="blog.html">Blog</a></li>
                  </ul>
                </li> -->
                <li><a href="events.html">Videos</a></li>
                <li><a href="/iep/ebooks/views/index.php">Ebooks</a></li>
                 <li><a href="events.html">Music</a></li>
                 <li><a href="/iep/gallery/index.php">Image Gallery</a></li>
                <li><a href="faq.html">Coding Portal</a></li>
                <li><a href="contact_us.html">Contact us</a></li>
                <?php if(isset($_SESSION['status'])) 
                          echo "<li><a href='/iep/controllers/logout.php'>Logout</a></li>";
                      else{

                 ?>
               <li><a href="/iep/views/signin.php" class="active-link">Sign in</a></li> <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>