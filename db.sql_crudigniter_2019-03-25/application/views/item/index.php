<table border="1" width="100%">
    <tr>
		<th>ItemId</th>
		<th>ItemName</th>
		<th>ItemDescription</th>
		<th>ItemQuantity</th>
		<th>Actions</th>
    </tr>
	<?php foreach($items as $I){ ?>
    <tr>
		<td><?php echo $I['ItemId']; ?></td>
		<td><?php echo $I['ItemName']; ?></td>
		<td><?php echo $I['ItemDescription']; ?></td>
		<td><?php echo $I['ItemQuantity']; ?></td>
		<td>
            <a href="<?php echo site_url('item/edit/'.$I['ItemId']); ?>">Edit</a> | 
            <a href="<?php echo site_url('item/remove/'.$I['ItemId']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
