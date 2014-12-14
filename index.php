<?php 
	global $page_id;
	global $page_url;

	function setActive( $this_id){
		global $page_id;
		global $page_url;
		if ( $page_id === $this_id){
			echo 'id="active-link"';
		}
	}

	if ( isset( $_GET['page_id'])){
		$page_id = $_GET['page_id'];
	} else {
		$page_id = 'home';
	} // Set page_id from get, defaults to 'home'

	$page_url = 'content/'.$page_id.'.php';
		// Construct URL of the content file to get
	include 'includes/header.php';
	// Get the header


	if ( empty( $_GET )){
		include './includes/carousel.php';
	// Display Bootstrap Carousel on any other page than Home or Post view (which has no page_id)
	}
?>
	<main class="container-fluid">
		<section id="content-area" class="container">

		<?php
			if ( !empty( $_GET )){
				include 'includes/sidebar.php'; 
				// Display sidebar on any other page than Home or Post view (which has no page_id)
			}
		?>
	
			<section id="content" class="col-xs-12">
				<!-- MAIN CONTENT AREA -->
				<?php include $page_url; ?>
			</section>
		</section>
	</main>
	<script src="js/fixMenu.js"></script>

	<?php 
		include 'includes/footer.php'; 
			// Get the footer
	?>
	
