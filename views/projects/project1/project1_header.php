<div id='project1' class='tab-pane fade in active'>
<?php require_once('project1_controller.php'); ?>
<script>
	var wordCloudData = <?php echo $wordCloudData; ?>;
</script>

	<!-- ADD PAGES HERE -->
	<ul id='sidebar_menu' class='nav nav-tabs'>
		<li class='active'><a data-toggle='pill' href='#m1'>Wordcloud</a></li>
		<li><a data-toggle='pill' href='#m2'>1-2 test wordcloud</a></li>
		<li><a data-toggle='pill' href='#m3'>1-3 Empty</a></li>
	</ul>
	<!-- -->

	<div class='tab-content'>


		<div id='m1' class='tab-pane fade in active'><?php require 'views/projects/project1/project1_pages/project1-1.php'; ?></div>
		<div id='m2' class='tab-pane fade'></div>
		<div id='m3' class='tab-pane fade'></div>
	</div>

</div>
