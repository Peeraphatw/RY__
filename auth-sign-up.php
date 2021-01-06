<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['username']))
{
  
  header('location: auth-normal-sign-in.html');
}


?>
<html lang="en">

<head>
    <title>Material Able bootstrap admin template by Codedthemes</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" />
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css" />
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all" />
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css" />
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <style>
    input[type='date']:required:invalid::-webkit-datetime-edit {
        color: transparent;
    }

    input[type='date']:focus::-webkit-datetime-edit {
        color: black !important;
    }

    #gender,
    #country {
        font-size: 14px;
    }
    </style>
</head>

<body themebg-pattern="theme1">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" id="form-create" action="Register_action.php"
                        method="POST">
                        <input type="hidden" name="ReqType" value="Insert" />
                        <div class="text-center">
                            <img src="assets/images/logo.png" alt="logo.png" />
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="Usr" class="form-control" autocomplete="off" />
                                    <span class="form-bar"></span>
                                    <label class="float-label">Choose Username</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="Em" class="form-control" autocomplete="off" />
                                    <span class="form-bar"></span>
                                    <label class="float-label">Your Email Address</label>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="Pwd" id="password" class="form-control" />
                                            <span class="form-bar"></span>
                                            <label class="float-label">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="confirm-password" id="confirm-password"
                                                class="form-control" />
                                            <span class="form-bar"></span>
                                            <label class="float-label">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <select name="Gen" id="Gender" class="form-control fill">
                                                <option value=""></option>
                                                <option value="m">Male</option>
                                                <option value="f">Female</option>
                                            </select>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Gender</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-primary">
                                            <input type="number" name="Age" id="" class="form-control" min="0" />
                                            <label for="" class="float-label">Age</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select id="country" class="form-control" name="Cnt" required>
                                        <option value=""></option>
                                    </select>
                                    <label for="" class="float-label">Country</label>
                                </div>

                                <div class="form-group form-primary">
                                    <input type="date" name="Db" class="form-control" required />
                                    <span class="form-bar"></span>
                                    <label class="float-label">Date of Birth</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" maxlength="10" name="Tel" class="form-control"
                                        autocomplete="off" />
                                    <span class="form-bar"></span>
                                    <label class="float-label">Phone Number(Optional)</label>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" name="Tm" />
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">I read and accept
                                                    <a href="#">Terms &amp; Conditions.</a></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" name="Lt" />
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Send me the
                                                    <a href="#!">Newsletter</a> weekly.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                            Sign up now
                                        </button>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left">
                                            <a href="index.html"><b>Back to website</b></a>
                                        </p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="assets/images/auth/Logo-small-bottom.png" alt="small-logo.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
      <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>
          You are using an outdated version of Internet Explorer, please upgrade
          <br />to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
          <ul class="iew-download">
            <li>
              <a href="http://www.google.com/chrome/">
                <img src="assets/images/browser/chrome.png" alt="Chrome" />
                <div>Chrome</div>
              </a>
            </li>
            <li>
              <a href="https://www.mozilla.org/en-US/firefox/new/">
                <img src="assets/images/browser/firefox.png" alt="Firefox" />
                <div>Firefox</div>
              </a>
            </li>
            <li>
              <a href="http://www.opera.com">
                <img src="assets/images/browser/opera.png" alt="Opera" />
                <div>Opera</div>
              </a>
            </li>
            <li>
              <a href="https://www.apple.com/safari/">
                <img src="assets/images/browser/safari.png" alt="Safari" />
                <div>Safari</div>
              </a>
            </li>
            <li>
              <a
                href="http://windows.microsoft.com/en-us/internet-explorer/download-ie"
              >
                <img src="assets/images/browser/ie.png" alt="" />
                <div>IE (9 & above)</div>
              </a>
            </li>
          </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
      </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script>
    let status = false;
    const country = document.querySelector('#country');
    const allCountries = async () =>
        await fetch('https://api.first.org/data/v1/countries', {
            method: 'GET',
        })
        .then((data) => data.json())
        .then((data) => {
            let res = data.data;
            key = Object.keys(res);
            for (let i = 0; i <= key.length - 1; i++) {
                const opt = document.createElement('option');
                opt.text = res[key[i]].country;
                opt.value = res[key[i]].country;
                country.appendChild(opt);
                console.log(res[key[i]].country, 'Country', key[i]);
            }
        });

    allCountries();
    const pass = document.querySelector('#password');
    const passCon = document.querySelector('#confirm-password');

    const validatePWD = () => {
        if (pass.value !== passCon.value) {
            console.log(pass.value + '!=' + passCon.value);
            console.log(typeof pass.value);
            console.log(pass.value);
            console.error(status);
        } else {
            if (pass.value == '') return;
            else status = true;
            console.warn(status);
        }
    };

    document
        .getElementById('form-create')
        .addEventListener('submit', function(event) {
            //console.log(this);
            event.preventDefault();
            validatePWD();
            if (status === true) {
                //this.submit();

                fetch('http://localhost/RY__/Get_member_api.php', {
                        method: 'POST',
                        body: new FormData(this),
                    })
                    .then((data) => {
                        console.log(data.status);
                        location.replace('http://localhost/RY__/index.php');
                    })
                    .catch((err) => console.log(err.message));

                console.log(this);
            } else {
                document.querySelector('#confirm-password').style.backgroundColor =
                    '#FB5959';
            }
        });
    </script>

    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>