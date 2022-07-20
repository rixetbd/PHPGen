<?php
    if(!isset($_SESSION["email"])){
       header('location:login.php'); 
    }
?>

<?php include 'include/header.php'; ?>

<div class="container">
    <div class="row align-items-center vh-100 top_row">
        <div class="form-holder col-sm-12 col-md-5">
            <form action="./function/register-post.php" method="POST">
                <div class="form-content">
                    <div class="form-items">
                        <h1 class="gradient_text">EFinder v2.0</h1>
                        <p>Give Login Information.</p>

                        <div class="col-md-12">
                            <input class="form-control cs_bg" type="text" name="name" id="name" placeholder="Name"
                                required>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control cs_bg" type="email" name="email" id="email"
                                placeholder="Email Address" required>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control cs_bg" type="password" name="password" id="domain"
                                placeholder="Password" required>
                        </div>

                        <div class="col-md-12">
                            <select name="role" id="role" class="form-control select_drop">
                                <option value="Freelancer">Freelancer</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>


                        <div class="form-button d-flex justify-content-between">
                            <button id="submitbtn" type="submit" class="btn mt-3"><i class="fas fa-user me-2"></i> Add User</button>
                            <a id="submitbtn" class="btn mt-3 text-danger" href="function/functions.php?action=logout"><i class="fas fa-sign-out me-2"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="form-holder col-sm-12 col-md-6">
            <div class="form-content">
                <div class="form-items">
                    <table class="table text-light" id="userTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $userData = mysqli_query($dbCon, "SELECT * FROM `users`");
                                foreach ($userData as $key=>$user){
                            ?>
                            <tr>
                                <td><?=$key+1 ?></td>
                                <td><?=$user['name']?></td>
                                <td><?=$user['email']?></td>
                                <td class="text-center">
                                    <a href="function/functions.php?id=<?=$user['id']?>&action=user_delete"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php };?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-1 rota">
            <h2>EFinder v2.0</h2>
        </div>
    </div>
</div>


<?php include 'include/footer.php'; ?>