<table border="1" width="100%">
    <tr>
		<th>ClientId</th>
		<th>ClientName</th>
		<th>ClientAddress</th>
		<th>ClientPhone</th>
		<th>Actions</th>
    </tr>
	<?php foreach($clients as $C){ ?>
    <tr>
		<td><?php echo $C['ClientId']; ?></td>
		<td><?php echo $C['ClientName']; ?></td>
		<td><?php echo $C['ClientAddress']; ?></td>
		<td><?php echo $C['ClientPhone']; ?></td>
		<td>
            <a href="<?php echo site_url('client/edit/'.$C['ClientId']); ?>">Edit</a> | 
            <a href="<?php echo site_url('client/remove/'.$C['ClientId']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
