<?php echo form_open('order/add'); ?>

	<div>
		Client : 
		<select name="ClientId">
			<option value="">select client</option>
			<?php 
			foreach($all_clients as $client)
			{
				$selected = ($client['ClientId'] == $this->input->post('ClientId')) ? ' selected="selected"' : "";

				echo '<option value="'.$client['ClientId'].'" '.$selected.'>'.$client['ClientId'].'</option>';
			} 
			?>
		</select>
	</div>
	<div>
		Item : 
		<select name="ItemId">
			<option value="">select item</option>
			<?php 
			foreach($all_items as $item)
			{
				$selected = ($item['ItemId'] == $this->input->post('ItemId')) ? ' selected="selected"' : "";

				echo '<option value="'.$item['ItemId'].'" '.$selected.'>'.$item['ItemId'].'</option>';
			} 
			?>
		</select>
	</div>
	<div>
		<span class="text-danger">*</span>ItemQuantity : 
		<input type="text" name="ItemQuantity" value="<?php echo $this->input->post('ItemQuantity'); ?>" />
		<span class="text-danger"><?php echo form_error('ItemQuantity');?></span>
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>