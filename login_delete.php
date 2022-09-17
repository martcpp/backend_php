<?php include "database.php";?>
<?php include "functions.php"; ?>

<?php
   
    deleteUsers();
?>

<?php include "header.php" ?>

<div class="container">
    
    <div class="col-sm-6">
       <h1 class="text-center">DELETE</h1>
        <form action="login_delete.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>
            
             <div class="form-group">
                <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
            </div>
            
            
             <div class="form-group">
             <select name="id" id="id">
                <?php 
                 readID();
                  ?>
             </select>
             
         </div>
            <input class="btn btn-primary" type="submit" name="submit" value="delete">
            
        </form>
    </div>


<?php include "footer.php"?>