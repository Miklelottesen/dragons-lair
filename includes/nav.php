<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <section class="container">
    <!-- Brand and toggle get grouped for better mobile display: -->
    <section class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">LOGO</a>
    </section>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <section class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <!-- Links: -->
      <!-- Get Wordpress links (generates its own list): -->  
      <section class="menu-main-container">
        <ul class="menu nav navbar-nav" role="menu">
          <li><a href="./">Home</a></li>
          <li><a href="#">News</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" area-expanded="false">Events</a>
            <ul class="sub-menu dropdown-menu" role="menu">
              <li><a href="#">Board Games</a></li>
              <li><a href="#">Card Games</a></li>
              <li><a href="#">Figurine Painting</a></li>
              <li><a href="#">Hardball</a></li>
              <li><a href="#">Live Role-play</a></li>
              <li><a href="#">Tabletop Games</a></li>
              <li><a href="#">Workshop</a></li>
            </ul>
          </li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Articles</a></li>
          <li><a href="#">Rankings</a></li>
        </ul>
      </section>
      <!-- Script to add Bootstrap classes to WP generated list: -->  
      <script src="js/fixmenu.js"></script> 

      <!-- Search field: -->
      <form class="navbar-form navbar-right" role="search">
        <section class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </section>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </section><!-- /.navbar-collapse -->
  </section><!-- /.container-fluid -->
</nav>