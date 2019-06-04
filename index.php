<?php 
$pageTitle = "Personal Media Library";
$section = null;

include("include/header.php"); 
include("include/data.php");
include("include/functions.php");
?>

		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

					<ul class="items">
						<?php 
							foreach($catalog as $id => $item) {
								echo get_item_html($id, $item);
							}
            			?>								
					</ul>

			</div>

		</div>

	</div> <!-- end content -->

	<?php include("include/footer.php"); ?>

	