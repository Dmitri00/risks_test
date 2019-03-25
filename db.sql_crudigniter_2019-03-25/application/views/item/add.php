<?php echo form_open('item/add'); ?>

	<div>
		<span class="text-danger">*</span>ItemName : 
		<input type="text" name="ItemName" value="<?php echo $this->input->post('ItemName'); ?>" />
		<span class="text-danger"><?php echo form_error('ItemName');?></span>
	</div>
	<div>
		ItemDescription : 
		<input type="text" name="ItemDescription" value="<?php echo $this->input->post('ItemDescription'); ?>" />
	</div>
	<div>
		<span class="text-danger">*</span>ItemQuantity : 
		<input type="text" name="ItemQuantity" value="<?php echo $this->input->post('ItemQuantity'); ?>" />
		<span class="text-danger"><?php echo form_error('ItemQuantity');?></span>
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>