<?php 
	include 'includes/header.php';
	// Get the header
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
				<h2>Content area</h2>
			</section>
		</section>
	</main>

	<?php 
		include 'includes/footer.php'; 
			// Get the footer
	?>
	
