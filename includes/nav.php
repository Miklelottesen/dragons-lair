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
      <a class="navbar-brand" href="./"><img src="./img/dragonslair_logo.png" alt="DragonsLair Logo"></a>
    </section>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <section class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <!-- Links: -->
      <!-- Get Wordpress links (generates its own list): -->  
      <section class="menu-main-container">
        <ul class="menu nav navbar-nav" role="menu">
          <li><a <?php setActive('home') ?> href="./">Home</a></li>
          <li><a <?php setActive('news') ?> href="./?page_id=news">News</a></li>
          <li class="dropdown">
            <a href="./?page_id=events" class="dropdown-toggle" data-toggle="dropdown" role="button" area-expanded="false">Events</a>
            <ul class="sub-menu dropdown-menu" role="menu">
              <li><a <?php setActive('events-board') ?> href="./?page_id=events-test">Board Games</a></li>
              <li><a <?php setActive('events-cards') ?> href="./?page_id=events-test">Card Games</a></li>
              <li><a <?php setActive('events-figurine') ?> href="./?page_id=events-test">Figurine Painting</a></li>
              <li><a <?php setActive('events-hardball') ?> href="./?page_id=events-test">Hardball</a></li>
              <li><a <?php setActive('events-role') ?> href="./?page_id=events-test">Live Role-play</a></li>
              <li><a <?php setActive('events-table') ?> href="./?page_id=events-test">Tabletop Games</a></li>
              <li><a <?php setActive('events-workshop') ?> href="./?page_id=events-test">Workshop</a></li>
            </ul>
          </li>
          <li><a <?php setActive('gallery') ?> href="./?page_id=gallery">Gallery</a></li>
          <li><a <?php setActive('articles') ?> href="./?page_id=articles">Articles</a></li>
          <li><a <?php setActive('rankings') ?> href="./?page_id=rankings">Rankings</a></li>
        </ul>
      </section>
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