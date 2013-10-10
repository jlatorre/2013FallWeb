<div class="containter">
	
	<h2>Users</h2>
	<table class="table">
		<tr>
			
			<th>First Name</th>
			<th>Last Name</th>
			<th>Type</th>
			<th></th>
			
		</tr>
		
		
		<? foreach ($model as $rs): ?>
		<tr>
			<td><?=$rs['FirstName']?> </td>
			<td><?=$rs['LastName']?></td>
			<td><?=$rs['UserType']?></td>
			<td>
				
				
			</td>
		</tr>
		<? endforeach ?>
	</table>
	
	
</div>

