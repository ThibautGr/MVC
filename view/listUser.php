<?php
//ici le vrais
$title = 'List of Users';
?>

<?php
ob_start();
?>


<br />
<div>
	<a href="userController.php" class="btn black-background text-white">
		<span class="glyphicon glyphicon-plus text-white"></span> Add user
	</a>
</div>
<br />

<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
<?php
        foreach ($users as $user) {
?>
		<tr>
			<th scope="row"><a href="userController.php?id=<?php echo $user->idUser ?>"><?php echo $user->idUser ?></a></th>
			<td><?php echo $user->firstNameUser ?></td>
			<td><?php echo $user->lastNameUer ?></td>
			<td><a href="editUserController.php?id=<?php echo $user->idUser ?>"><i class="fas fa-edit"></i></a></td>
			<td><a href="deleteUserController.php?id=<?php echo $user->idUser ?>"><i class="far fa-trash-alt"></i></a></td>
		</tr>
<?php
        }
?>
	</tbody>
</table>

<?php
$content = ob_get_clean();
?>

<?php
require('../view/template.php');
?>
