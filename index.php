
			<?php 

				require_once('utility.php');
				require 'views/header.php';
				require 'views/navbar.php';
			?>

			<br>
			
			<div class='container-fluid'>

				<div class='row'>

					<?php require 'views/sidebar.php'; ?>

					<div class='col-md-9'>	

						<!--CONTENT OF SIDEBAR -->	

						<!-- Sidebar follows the following template --> 
						<div class='tab-content'>

							<?php require 'views/projects/project1/project1_header.php'; ?>

							<?php require 'views/projects/project2/project2_header.php'; ?>
								
						</div>

					</div>

			<?php require 'views/footer.php'; ?>