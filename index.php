<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./svg/favicon.png" type="image/x-icon">

    <meta name="title" content="Email Generator - RixetBD">
    <meta name="description" content="EMailGeN is an Email Generator application using Javascript. Fast temporary & business email without registration and free. [ Temp mail, fake email, disposable email, temporary email ]">
    <meta name="keywords" content="email generator, email, generator, rixetbd, Temp mail, fake email, disposable email, temporary email">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Rabiul Islam">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="style.css">

    <title>EFinder By RixetBD 😍</title>
    <style>
        .displayDom{
            margin-top: 5px;
            font-size: 15px !important;
            text-align: right !important;
            color: #c7c7c7 !important;
            margin-bottom: -5px;
            transition: 1s ease-in;
        }
        .domainOne{
            position: relative;
        }
        .domainOneSign{
            position: absolute;
            top: 2px;
            right: 5px;
            border-radius: 5px;
            background-color: #142631;
        }
        .domainOneSign i{
            padding: 10px 15px;
            color: #636363;
            cursor: pointer;
        }
        .domainOneSign i:hover{
            color: #5ee05e;
            background-color: #0e1a22;
            border-radius: 5px;
        }
        .domainOneSign i:nth-child(2):hover{
            color: red;
        }
    </style>
</head>

<body class="position-relative">

    <div class="sticky_menu">
        <div class="sticky_box">
            <span class="me-1"><i class="fa-solid fa-plus"></i></span>
            <a href="https://rixetbd.github.io/emaildr.io/" target="_blank">Email v2</a>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center vh-100 top_row">
            <div class="form-holder col-sm-12 col-md-6">
                <!-- <form action=""> -->
                <div class="form-content">
                    <div class="form-items">
                        <h1 class="gradient_text">EFinder v1.2</h1>
                        <p>Fill in the data below.</p>

                        <div class="col-md-12 domainOne">
                            <input class="form-control cs_bg" type="text" id="fullName" placeholder="Full Name ( Max 2 words )"
                                required>
                                <div class="domainOneSign">
                                    <i class="fas fa-paste"></i>
                                    <i class="fas fa-redo" id="fullNameRedo"></i>
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control cs_bg" type="text" id="first_name" placeholder="First Name"
                                    required>
                            </div>

                            <div class="col-md-6">
                                <input class="form-control cs_bg" type="text" id="last_name" placeholder="Last Name"
                                    required>
                            </div>
                        </div>

                        <div class="col-md-12 domainOne">
                            <input class="form-control cs_bg" type="text" id="domain" placeholder="example.com"
                                required>
                                <!-- <i class="fas fa-redo domainOneSign"></i> -->
                                <div class="domainOneSign">
                                    <i class="fas fa-paste"></i>
                                    <i class="fas fa-redo" id="domainRedo"></i>
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
                    </div>
                </div>
                <!-- </form> -->
            </div>
            <div class="form-holder col-sm-12 col-md-6">
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

    <script>
        $('#first_namecheck').hide();
        $('#last_namecheck').hide();
        $('#domaincheck').hide();

        function fullNameFun(){
            let fullname = $('#fullName').val();
            let fullnameArr = fullname.split(" ");
            $('#first_name').val(fullnameArr[0]);
            $('#last_name').val(fullnameArr[1]);
        }

        $('#fullName').keyup(function(){
            fullNameFun();
            progressBar();
            $("#submitbtn").click();
        });

        $('#fullName').keypress(function () {
            fullNameFun();
            progressBar();
            $("#submitbtn").click();
        });
        $('#fullName').focusout(function () {
            fullNameFun();
            progressBar();
            $("#submitbtn").click();
        });

        function progressBar() {
            if ($("#first_name").val() != '' && $("#domain").val() != '' && $("#last_name").val() != '') {
                $('#progress_bar').css("width", "100%");
                $('#progress_bar').css("background-color", "#008000");
                $('#submitbtn').addClass("bg-success");
            } else if ($("#first_name").val() == '' && $("#domain").val() !== '' && $("#last_name").val() !== '') {
                $('#progress_bar').css("width", "66%");
                $('#progress_bar').css("background-color", "#ffff0071");
                $('#submitbtn').removeClass("bg-success");
            } else if ($("#first_name").val() != '' && $("#domain").val() != '' && $("#last_name").val() == '') {
                $('#progress_bar').css("width", "66%");
                $('#submitbtn').removeClass("bg-success");
                $('#progress_bar').css("background-color", "#ffff0071");
            } else if ($("#first_name").val() != '' && $("#domain").val() == '' && $("#last_name").val() != '') {
                $('#progress_bar').css("width", "66%");
                $('#submitbtn').removeClass("bg-success");
                $('#progress_bar').css("background-color", "#ffff0071");
            } else if ($("#first_name").val() == '' && $("#domain").val() == '' && $("#last_name").val() != '') {
                $('#progress_bar').css("width", "33%");
                $('#submitbtn').removeClass("bg-success");
            } else if ($("#first_name").val() != '' && $("#domain").val() == '' && $("#last_name").val() == '') {
                $('#progress_bar').css("width", "33%");
                $('#submitbtn').removeClass("bg-success");
            } else if ($("#first_name").val() == '' && $("#domain").val() != '' && $("#last_name").val() == '') {
                $('#progress_bar').css("width", "33%");
                $('#submitbtn').removeClass("bg-success");
            } else {
                $('#progress_bar').css("width", "0%");
                $('#submitbtn').removeClass("bg-success");
            }
        }

        $("#first_name").focusout(function () {
            $('#progress_bar').css("transition", "1s ease-in");
            progressBar();
            $("#submitbtn").click();
        });
        $("#first_name").keyup(function () {
            $('#progress_bar').css("transition", "1s ease-in");
            progressBar();
            $("#submitbtn").click();
        });

        $("#last_name").focusout(function () {
            $('#progress_bar').css("transition", "1s ease-in");
            progressBar();
            $("#submitbtn").click();
        });
        $("#last_name").keyup(function () {
            $('#progress_bar').css("transition", "1s ease-in");
            progressBar();
            $("#submitbtn").click();
        });

        $("#domain").focusout(function () {
            $('#progress_bar').css("transition", "1s ease-in");
            progressBar();
            $("#submitbtn").click();
        });
        $("#domain").keyup(function () {
            $('#progress_bar').css("transition", "1s ease-in");
            progressBar();
            $("#submitbtn").click();
        });

        // $("#domain").click(function () {
        //     let domainVal = navigator.clipboardData.getData('text/plain');
        //     // $("#domain").val().bind("paste", paste_input);
        //     console.log(domainVal);
        // });

        $("#submitbtn").click(function () {

            var firstNameInput = $("#first_name").val().toLowerCase().replace(/\s/g, '');
            var lastNameInput = $("#last_name").val().toLowerCase().replace(/\s/g, '');
            var domainInput = $("#domain").val().toLowerCase();

            let mainDomain = domainInput.split('/');
            if(mainDomain.length > 2){
                domainInput = mainDomain[2];
            }

            domainInput = domainInput.replace("http://www.","");
            domainInput = domainInput.replace("https://www.","");
            domainInput = domainInput.replace("http://","");
            domainInput = domainInput.replace("https://","");
            domainInput = domainInput.replace("www.","");
            domainInput = domainInput.replace("/","");


            $('#domainDisplay').show();
            $('#domainDisplay').html(domainInput);

            if (firstNameInput.length == '') {
                $('#first_namecheck').show();
            } else {
                $('#first_namecheck').hide();
            }

            if (lastNameInput.length == '') {
                $('#last_namecheck').show();
            } else {
                $('#last_namecheck').hide();
            }

            if (domainInput.length == '') {
                $('#domaincheck').show();
            } else {
                $('#domaincheck').hide();
            }

            // ------------------------- Test

            var str1 = firstNameInput;
            var str2 = lastNameInput;
            var str3 = "@" + domainInput;
            // var str1 = localStorage.getItem("firstName");
            // var str2 = localStorage.getItem("lastName");
            // var str3 = "@" + localStorage.getItem("domain");

            var a = firstNameInput.concat(lastNameInput, str3);
            var b = firstNameInput.concat(str3);
            var c = lastNameInput.concat(str3);
            var d = lastNameInput.concat(firstNameInput, str3);
            var e = firstNameInput.charAt(0);
            var f = lastNameInput.charAt(0);

            let emails =
                `${b}\n${c}\n${a}\n${d}\n${str1 + "." + str2 + str3}\n${e + "." + str2 + str3}\n${str1 + "_" + str2 + str3}\n${str1 + "-" + str2 + str3}\n${e + str2 + str3}\n${str1 + f + str3}\n${str2 + e + str3}\n${e + f + str3}`;

            let gtomail = `${b};${c};${a};${d};${str1 + "." + str2 + str3};${e + "." + str2 + str3};${str1 + "_" + str2 + str3};${str1 + "-" + str2 + str3};${e + str2 + str3};${str1 + f + str3};${str2 + e + str3};${e + f + str3}`;

            const output = document.getElementById('output')
            const copyFunc = document.getElementById('copyFunc')
            const sendFunc = document.getElementById('sendFunc')

            // let mailtro = `mailto:${gtomail}`;
            let mailtro = `https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=${gtomail}&body=`;
            $('#sendFunc').attr("href", mailtro);

            if ($("#first_name").val() != '' && $("#domain").val() != '' && $("#last_name").val() != '') {
                output.innerText = emails
            // }

            // if (output.innerText != null) {
                copyFunc.classList.remove('d-none')
                sendFunc.classList.remove('d-none')
            }


            let divToast = null;

            copyFunc.addEventListener('click', function () {
                window.navigator.clipboard.writeText(output.innerText)
                if (divToast != null) {
                    divToast.remove();
                    divToast = null;
                }
                generateToastmessage(`All Email Copied`)
            })

            function generateToastmessage(msg) {
                divToast = document.createElement('div')
                divToast.innerText = msg;
                divToast.className = 'toast-message toast-message-slide-in';

                divToast.addEventListener('click', function () {
                    divToast.classList.remove('toast-message-slide-in');
                    divToast.classList.add('toast-message-slide-out');

                    divToast.addEventListener('animationend', function () {
                        divToast.remove();
                        divToast = null;
                    })
                })

                setTimeout(function () {
                    divToast.classList.remove('toast-message-slide-in');
                    divToast.classList.add('toast-message-slide-out');
                    divToast.remove();
                    divToast = null;
                }, 4000);

                document.body.appendChild(divToast);
            }


        });

        $("#fullNameRedo").click(function () {
            $('#fullName').val("");
            fullNameFun();
            $('#domainDisplay').hide();
            // $("#submitbtn").click();
            $('#output').html("");
            progressBar();
        });

        $("#domainRedo").click(function () {
            $('#domain').val("");
            $('#domainDisplay').hide();
            // $("#submitbtn").click();
            $('#output').html("");
            progressBar();
        });

        $("#resetbtn").click(function () {
            $('#first_name').val("");
            $('#last_name').val("");
            $('#domain').val("");
            $('#fullName').val("");
            $('#domainDisplay').hide();
            let emails = null;
            const output = document.getElementById('output')
            output.innerText = emails
            const copyFunc = document.getElementById('copyFunc')
            copyFunc.classList.add('d-none')
            sendFunc.classList.add('d-none')
            progressBar();
            // location.reload();
        });

        // if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
        //     localStorage.clear();
        // }
    </script>

</body>

</html>