<table border="1" width="100%">
    <tr>
		<th>OrderId</th>
		<th>ClientId</th>
		<th>ItemId</th>
		<th>ItemQuantity</th>
		<th>Actions</th>
    </tr>
	<?php foreach($orders as $O){ ?>
    <tr>
		<td><?php echo $O['OrderId']; ?></td>
		<td><?php echo $O['ClientId']; ?></td>
		<td><?php echo $O['ItemId']; ?></td>
		<td><?php echo $O['ItemQuantity']; ?></td>
		<td>
            <a href="<?php echo site_url('order/edit/'.$O['OrderId']); ?>">Edit</a> | 
            <a href="<?php echo site_url('order/remove/'.$O['OrderId']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
