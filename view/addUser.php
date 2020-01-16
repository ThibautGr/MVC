<?php
$title = 'Add a user';
ob_start();


?>
    <div  class='form-group'>
        <form action='addUserController.php' method='post'>
        
        <label for='FirsName'>your FirsName</label>
        <input class='form-control' id='FirsName' value="<?php echo $_SESSION['firstNameUser'];?>" type='text' name='firstNameUser'>
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
        <input class='form-control' id='LastName' value="<?php echo $_SESSION['lastNameUer'];?>" type='text' name='lastNameUer'>
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
        <input class='form-control' id='password' value="<?php echo $_SESSION['passwordUser'];?>" type='password' name='passwordUser'>
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
        <input class='form-control' id='email' value="<?php echo $_SESSION['mailUser'];?>" type='text' name='mailUser'>
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
        <input class='btn btn-primary' type='submit' value='be a new member! '>
        </form>
    </div>

<?php
$content = ob_get_clean();

require('../view/template.php');
echo "<a class='btn btn-primary' href='userController.php'>back</a>";
?>