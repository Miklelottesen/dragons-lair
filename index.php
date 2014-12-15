<?php 
	// Global variables:
	global $page_id;
	global $page_url;

	// Function to add .active class to active navbar link:
	function setActive( $this_id){
		global $page_id;
		global $page_url;
		if ( $page_id === $this_id){
			echo 'id="active-link"';
		}
	}

	// Set page_id from get, defaults to 'home':
	if ( isset( $_GET['page_id'])){
		$page_id = $_GET['page_id'];
	} else {
		$page_id = 'home';
	} 

	// Construct URL of the content file to get:
	$page_url = 'content/'.$page_id.'.php';
		
	// Get the header:
	include 'includes/header.php';

	// Inlclude Bootstrap carousel on Home (which has no page_id):
	if ( empty( $_GET )){
		include './includes/carousel.php';
	}
?>
	<main class="container-fluid">
		<section id="content-area" class="container">


			<section id="content" class="col-xs-12">
				<!-- MAIN CONTENT AREA -->
				<?php include $page_url; ?>
			</section>
		</section>
	</main>
	<script src="js/fixMenu.js"></script>
		<!-- Script to enable hover-dropdown -->

	<?php 
		// Get the footer:
		include 'includes/footer.php'; 
	?>
	
