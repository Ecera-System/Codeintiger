<?php require_once "header.php"?>
	<div class ="container">
		<h3 class="text-center mb-3">Customize your site settings</h3>
		<form style="display:inline" action="admin/editSettings" method="post">
		<?php $arr= $this->settings->get_settings();
		foreach ($arr as $k=>$value) {?>
  <div class="form-group">
    <label style="font-weight:bold"><?php echo$k?></label>
    <?php if($k=="base_controller"){?>
    	<select class="ml-4"name="base_controller"><option>welcome</option>
    		<option>admin</option><option>auth</option></select><?php continue;}?>
    		<?php if($k=="allow_registration"||$k=="email_activation"){?>
    	<select class="ml-4"name="<?php echo $k?>"><option>Yes</option>
    		<option>No</option></select><?php continue;}?>
    <input type="text" class="form-control" name ="<?php echo$k?>"  value="<?php echo $value ?>">
      </div>
  <?php }?>

    <button type="submit" class="btn btn-primary">Save your settings</button>

</form>
<a href="<?php echo base_url();?>admin"><button class="btn btn-danger ml-3">Go Back</button></a>
</div>
</body>
</html>