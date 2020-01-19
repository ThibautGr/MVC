<?php
//ici le vrais
$title = 'List of Users';
?>

<?php
ob_start();
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Edit</th>
			<th>Delete</th>
            <th>Favorite</th>
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
			<td><a href="updateUserController.php?id=<?php echo $user->idUser ?>"><i class="fas fa-edit"></i></a></td>
			<td><a href="deleteUserController.php?id=<?php echo $user->idUser ?>"><i class="far fa-trash-alt"></i></a></td>
            <td><a href="favoriteByUserController.php?id=<?php echo $user->idUser ?>"> <i class="far fa-star"></i></a></td>
		</tr>
<?php
        }
?>
	</tbody>
</table>
<br />
<div class="text-center">
    <a href="addUserController.php" class="btn black-background text-white">
        <span class=" btn btn-primary"> Ajouter un utilisateur</span>
    </a>
</div>
<br />
<?php
$content = ob_get_clean();
?>

<?php
require('../view/template.php');
?>
