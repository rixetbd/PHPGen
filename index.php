<?php
    if(!isset($_SESSION["email"])){
       header('location:login.php'); 
    }
?>
<?php include 'include/header.php'; ?>

    <div class="container">
        <div class="row align-items-center vh-100 top_row">
            <div class="form-holder col-sm-12 col-md-6">
                <!-- <form action=""> -->
                <div class="form-content">
                    <div class="form-items">
                        <h1 class="gradient_text">EFinder v2.0</h1>
                        <p>Fill in the data below.</p>

                        <div class="col-md-12 domainOne">
                            <input class="form-control cs_bg" type="text" id="fullName" placeholder="Full Name ( Max 2 words )"
                                required>
                                <div class="domainOneSign">
                                    <i class="fas fa-arrow-right-arrow-left" id="fullNameExchange"></i>
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control cs_bg" type="text" id="first_name" placeholder="First Name"
                                required disabled>
                            </div>

                            <div class="col-md-6">
                                <input class="form-control cs_bg" type="text" id="last_name" placeholder="Last Name"
                                    required disabled>
                            </div>
                        </div>

                        <div class="col-md-12 domainOne">
                            <input class="form-control cs_bg" type="text" id="domain" placeholder="example.com"
                                required>
                                <!-- <i class="fas fa-redo domainOneSign"></i> -->
                                <div class="domainOneSign">
                                    <i class="fas fa-arrow-right-arrow-left" id="domainExchange"></i>
                                </div>
                        </div>

                        <p class="displayDom" id="domainDisplay"></p>

                        <div class="mt-2 alert_box">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progess_secondary progress-bar-animated"
                                    id="progress_bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="alert_box">
                            <!-- <label class="form-check-label">I confirm, it's my responsibility.</label> -->
                            <small id="first_namecheck" style="color: rgb(255, 100, 100);">First Name
                                missing.</small>
                            <small id="last_namecheck" style="color: rgb(255, 100, 100);">Last Name missing.</small>
                            <small id="domaincheck" style="color: rgb(255, 100, 100);">Domain missing.</small>
                        </div>

                        <div class="form-button">
                            <button id="submitbtn" type="submit" class="btn me-2"><i class="fa-solid fa-dna"></i>
                                Genarate</button>
                            <button id="resetbtn" type="button" class="btn float-end"><i
                                    class="fa-solid fa-rotate-right"></i> Reset</button>
                        </div>

                        <div class="mt-2 ruleBox">
                            <p>* Click <i class="fas fa-arrow-right-arrow-left mx-1"></i> icon for replace existing text.</p>
                            <p>* No need to click on "Generate" button.</p>
                            <p>* Check all emails at your own responsibility.</p>
                        </div>
                    </div>
                </div>
                <!-- </form> -->
            </div>
            <div class="form-holder col-sm-12 col-md-5">
                <div class="form-content">
                    <div class="form-items text-light">
                        <h1 class="gradient_text">Generated Email</h1>
                        <p>Need to verify first</p>

                        <p class="text-light" id="output"></p>

                        <button id="copyFunc" type="button" class="btn btn-sm btn-success d-none"><i
                                class="fa-solid fa-copy"></i> Copy Emails</button>

                        <a id="sendFunc" href="" target="_blank" class="btn btn-sm btn-success d-none"><i
                                class="fa-solid fa-copy"></i> Send GMail</a>

                    </div>
                </div>
            </div>

            <div class="col-md-1 rota">
                <h2>EFinder v2.0</h2>
            </div>
        </div>
    </div>

    <footer class="container-fluid m-0 p-0">
        <marquee behavior="scroll" direction="left" scrollamount="10" style="border-bottom: 2px solid #c2d7ef;">
            <img src="./svg/car2.gif" class="vec_car" id="vec_car">
        </marquee>
        <div class="col-sm-12 col-md-12">
            <p class="text-light text-center" style="margin-bottom: 5px"><small>Planning By Jayonta Debnath.</small>
            </p>
            <p class="text-light text-center">Copyright &copy; <script type="text/javascript">
                    var year = new Date();
                    document.write(year.getFullYear());
                </script> 🤖 Development By <a class="link-copyright" target="_blank"
                    href="https://rixetbd.github.io/portfolio/">Rabiul Islam.</a></p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/function.js"></script>
    <script src="js/progressBar.js"></script>
    <script src="js/submit.js"></script>

</body>

</html>