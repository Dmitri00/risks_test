<?php echo form_open('item/edit/'.$item['ItemId']); ?>

	<div>
		<span class="text-danger">*</span>ItemName : 
		<input type="text" name="ItemName" value="<?php echo ($this->input->post('ItemName') ? $this->input->post('ItemName') : $item['ItemName']); ?>" />
		<span class="text-danger"><?php echo form_error('ItemName');?></span>
	</div>
	<div>
		ItemDescription : 
		<input type="text" name="ItemDescription" value="<?php echo ($this->input->post('ItemDescription') ? $this->input->post('ItemDescription') : $item['ItemDescription']); ?>" />
	</div>
	<div>
		<span class="text-danger">*</span>ItemQuantity : 
		<input type="text" name="ItemQuantity" value="<?php echo ($this->input->post('ItemQuantity') ? $this->input->post('ItemQuantity') : $item['ItemQuantity']); ?>" />
		<span class="text-danger"><?php echo form_error('ItemQuantity');?></span>
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>