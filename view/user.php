<?php


$title = 'User';
ob_start();

echo "<table class=\"table table-striped\">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th><mail></mail></th>
		</tr>
	</thead>
	<tbody>";
    echo "<tr><td>" . $userr->firstNameUser . "</td><td> " . $userr->lastNameUer ."</td><td>". $userr->mailUser."</td></tr>";
echo "</tbody>
        </table>";
echo "<a class='btn btn-primary' href='userController.php'>retour</a>";


$content = ob_get_clean();
require('../view/template.php');
