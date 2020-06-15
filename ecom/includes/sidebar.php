<?php
include("includes/db.php");

?>



<div class="panel panel-default sidebar-menu"><!---panel panel-default sidebar-meenu start---->
	<div class="panel-heading"><!---panel heading-meenu start---->
		<h3 class="panel-title">
			 Product Categories
		</h3>
	</div><!---panel heading-meenu end---->
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked category-menu">
		<?php   getPCats();  ?>
		</ul>
	</div>
	
</div><!---panel panel-default sidebar-meenu start---->





<div class="panel panel-default sidebar-menu"><!---panel panel-default sidebar-meenu start---->
	<div class="panel-heading"><!---panel heading-meenu start---->
		<h3 class="panel-title">
			 Categories
		</h3>
	</div><!---panel heading-meenu end---->
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked category-menu">
		<?php
		getCats();
		?>
		</ul>
	</div>
	
</div><!---panel panel-default sidebar-meenu start---->