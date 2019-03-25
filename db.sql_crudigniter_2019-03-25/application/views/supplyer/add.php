<?php echo form_open('supplyer/add'); ?>

	<div>
		<span class="text-danger">*</span>SupplyerName : 
		<input type="text" name="SupplyerName" value="<?php echo $this->input->post('SupplyerName'); ?>" />
		<span class="text-danger"><?php echo form_error('SupplyerName');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>SupplyerAddress : 
		<input type="text" name="SupplyerAddress" value="<?php echo $this->input->post('SupplyerAddress'); ?>" />
		<span class="text-danger"><?php echo form_error('SupplyerAddress');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>SupplyerPhone : 
		<input type="text" name="SupplyerPhone" value="<?php echo $this->input->post('SupplyerPhone'); ?>" />
		<span class="text-danger"><?php echo form_error('SupplyerPhone');?></span>
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>