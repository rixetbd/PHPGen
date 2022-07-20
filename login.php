
<?php include 'include/header.php'; ?>

<div class="container">
    <div class="row align-items-center justify-content-center vh-100 top_row">
        <div class="form-holder col-sm-12 col-md-6">
            <form action="function/login.php" method="POST">
                <div class="form-content">
                    <div class="form-items">
                        <h1 class="gradient_text">EFinder v2.0</h1>
                        <p>Give Login Information.</p>

                        <div class="col-md-12">
                            <input class="form-control cs_bg" type="email" name="email" id="email" placeholder="Email Address" required>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control cs_bg" type="password" name="password" id="domain" placeholder="Password"
                                required>
                        </div>

                        <div class="form-button">
                            <button id="submitbtn" type="submit" class="btn mt-3"><i class="fas fa-user me-2"></i> Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>