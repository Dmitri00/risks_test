<table border="1" width="100%">
    <tr>
		<th>SupplyerId</th>
		<th>SupplyerName</th>
		<th>SupplyerAddress</th>
		<th>SupplyerPhone</th>
		<th>Actions</th>
    </tr>
	<?php foreach($supplyers as $S){ ?>
    <tr>
		<td><?php echo $S['SupplyerId']; ?></td>
		<td><?php echo $S['SupplyerName']; ?></td>
		<td><?php echo $S['SupplyerAddress']; ?></td>
		<td><?php echo $S['SupplyerPhone']; ?></td>
		<td>
            <a href="<?php echo site_url('supplyer/edit/'.$S['SupplyerId']); ?>">Edit</a> | 
            <a href="<?php echo site_url('supplyer/remove/'.$S['SupplyerId']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
