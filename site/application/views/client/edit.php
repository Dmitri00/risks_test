<?php echo form_open('client/edit/'.$client['ClientId']); ?>

	<div>
		<span class="text-danger">*</span>ClientName : 
		<input type="text" name="ClientName" value="<?php echo ($this->input->post('ClientName') ? $this->input->post('ClientName') : $client['ClientName']); ?>" />
		<span class="text-danger"><?php echo form_error('ClientName');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>ClientAddress : 
		<input type="text" name="ClientAddress" value="<?php echo ($this->input->post('ClientAddress') ? $this->input->post('ClientAddress') : $client['ClientAddress']); ?>" />
		<span class="text-danger"><?php echo form_error('ClientAddress');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>ClientPhone : 
		<input type="text" name="ClientPhone" value="<?php echo ($this->input->post('ClientPhone') ? $this->input->post('ClientPhone') : $client['ClientPhone']); ?>" />
		<span class="text-danger"><?php echo form_error('ClientPhone');?></span>
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>