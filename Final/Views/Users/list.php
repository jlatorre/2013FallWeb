<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="ext/css" rel="stylesheet">

<div class="containter">
	
	
	<h2>Users</h2>
	<table class="table">
		
		<thead>
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
	</thead>
	</table>
</div>

<? function $scripts(){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(".table").dataTable();
		
	</script>
	
	
	}
