<?php require_once "header.php"?>
	<div class ="container">
		<h3 class="text-center mb-3">Delete your site settings</h3>
		<ul>
		<?php $arr= $this->settings->get_settings();
		foreach ($arr as $k=>$value) {
			?>
			<li class="mb-2"> <?php echo $k;?> <a class=" ml-3" href="admin/delSett/<?php echo $k;?>">Delete</a></li>
		<?php }?>
</ul> <a href="/ci/admin">Go Back</a>
</div>

