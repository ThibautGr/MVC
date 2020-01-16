<?php

$title = 'update your';
ob_start();


?>
<table class="table table-striped">
<thead>
<tr>
    <th>your First Name</th>
    <th>your Last Name</th>
</tr>
</thead>
<tbody>
<?php echo "<tr><td>". $userr->idUser."</td><td>" . $userr->firstNameUser . "</td><td> " . $userr->lastNameUer . "</tr>"; ?>
</tbody>
</table>
<?php
session_start();
$_SESSION["idUser"] = $userr->idUser;
$_SESSION["firstNameUser"] = $userr->firstNameUser;
$_SESSION["lastNameUer"] = $userr->lastNameUer;
$_SESSION['passwordUser'] = $userr->passwordUser;
$_SESSION['mailUser'] = $userr->mailUser;
?>
<div  class='form-group'>
    <form action='updateUserController.php' method='post'>
        <input type="hidden" value="<?php echo $_SESSION['idUser'];?>" name="idUser" >

        <label for='FirsName'>your FirsName</label>
        <input class='form-control' value="<?php echo $_SESSION['firstNameUser'];?>" id='FirsName' type='text' name='firstNameUser'>
        <?php
        if(!empty($validationError["user.firstNameUser"])){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?= $validationError["user.firstNameUser"] ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>
        <label for='LastName'>your LastName</label>
        <input class='form-control'  value="<?php echo $_SESSION['lastNameUer'];?>"  id='LastName' type='text' name='lastNameUer'>
        <?php
        if(!empty($validationError["user.lastNameUer"])){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?= $validationError["user.lastNameUer"] ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>
        <label for='password'>your password</label>
        <input class='form-control' value="<?php echo $_SESSION['passwordUser'];?>"  id='password' type='password' name='passwordUser'>
        <?php
        if(!empty($validationError["user.passwordUser"])){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?= $validationError["user.passwordUser"] ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>
        <label for='email'> your mail</label>
        <input class='form-control' id='email' type='text' value="<?php echo $_SESSION['mailUser'];?>" name='mailUser'>
        <?php
        if(!empty($validationError["user.mailUser"])){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?= $validationError["user.mailUser"] ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>
        <input class='btn btn-primary' type='submit' value='UPDATE YOUR ! '>
    </form>
</div>

<?php
$content = ob_get_clean();

require('../view/template.php');
echo "<a class='btn btn-primary' href='userController.php'>back</a>";
?>
