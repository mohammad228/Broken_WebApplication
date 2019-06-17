<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    {{--    footer--}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        /* Footer */
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        #footer {
            background: #007b5e !important;
        }

        #footer h5 {
            padding-left: 10px;
            border-left: 3px solid #eeeeee;
            padding-bottom: 6px;
            margin-bottom: 20px;
            color: #ffffff;
        }

        #footer a {
            color: #ffffff;
            text-decoration: none !important;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }

        #footer ul.social li {
            padding: 3px 0;
        }

        #footer ul.social li a i {
            margin-right: 5px;
            font-size: 25px;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }

        #footer ul.social li:hover a i {
            font-size: 30px;
            margin-top: -10px;
        }

        #footer ul.social li a,
        #footer ul.quick-links li a {
            color: #ffffff;
        }

        #footer ul.social li a:hover {
            color: #eeeeee;
        }

        #footer ul.quick-links li {
            padding: 3px 0;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }

        #footer ul.quick-links li:hover {
            padding: 3px 0;
            margin-left: 5px;
            font-weight: 700;
        }

        #footer ul.quick-links li a i {
            margin-right: 5px;
        }

        #footer ul.quick-links li:hover a i {
            font-weight: 700;
        }

        @media (max-width: 767px) {
            #footer h5 {
                padding-left: 0;
                border-left: transparent;
                padding-bottom: 0px;
                margin-bottom: 10px;
            }
        }

    </style>
</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Vulnerabilities</div>
        <div class="list-group list-group-flush">
            <a href="/dashboard" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="/xss" class="list-group-item list-group-item-action bg-light">XSS</a>
            <a href="/sqli" class="list-group-item list-group-item-action bg-light">SQL INJECTION</a>
            <a href="/open-redirect" class="list-group-item list-group-item-action bg-light">Open Redirect</a>
            <a href="/ear" class="list-group-item list-group-item-action bg-light">Execute After Redirect</a>
            <a href="/captcha" class="list-group-item list-group-item-action bg-light">Captcha</a>
            <a href="/captcha-safe" class="list-group-item list-group-item-action bg-light">Captcha_Safe</a>
            <a href="/file_upload" class="list-group-item list-group-item-action bg-light">FileUpload</a>
            <a href="/file_upload_2" class="list-group-item list-group-item-action bg-light">FileUpload_2</a>
            <a href="/file_upload_3" class="list-group-item list-group-item-action bg-light">FileUpload_3</a>
            <a href="/file_upload_4" class="list-group-item list-group-item-action bg-light">FileUpload_4</a>
            <a href="/file_upload_5" class="list-group-item list-group-item-action bg-light">FileUpload_5</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    {{--                    <li class="nav-item dropdown">--}}
                    {{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"--}}
                    {{--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--                            Dropdown--}}
                    {{--                        </a>--}}
                    {{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                    {{--                            <a class="dropdown-item" href="#">Action</a>--}}
                    {{--                            <a class="dropdown-item" href="#">Another action</a>--}}
                    {{--                            <div class="dropdown-divider"></div>--}}
                    {{--                            <a class="dropdown-item" href="#">Something else here</a>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}
                </ul>
            </div>
        </nav>

        <!-- main -->

        <h1>File Upload Challenge 4</h1>
        <div class="main-w3layouts wrapper">
            <form action="file_upload" method="post"  onsubmit="return Validate(this)" enctype="multipart/form-data">
                @csrf
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" accept="image/*" name="file">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                    <br> <br> <button type="submit">Submit</button>
                </div>
            </form>
            @isset($error)
                    <br>
                    {{$error}}

            @endisset

            @isset($success)

                @if($success===true)
                    <br>
                    {!! "Your File is Uploaded Successfully. " !!}
                    {!! "Click"!!}&nbsp;<a href="/images/{{$link}}">Here</a>&nbsp;{!!"to check your File" !!}

                @endif

            @endisset
        </div>

    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

{{--Footer Start--}}
<section id="footer" style="margin-top: 10px">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="https://www.owasp.org/index.php/Top_10-2017_Top_10"><i class="fa fa-angle-double-right"></i>Owasp Top 10 2017</a></li>
                    <li><a href="https://www.acunetix.com/blog/category/web-security-zone/"><i class="fa fa-angle-double-right"></i>Blog of Acunetix</a></li>
                    <li><a href="https://portswigger.net/"><i class="fa fa-angle-double-right"></i>Burp Suite</a></li>
                    <li><a href="https://medium.com/"><i class="fa fa-angle-double-right"></i>Medium</a></li>
                    <li><a href="https://www.exploit-db.com/"><i class="fa fa-angle-double-right"></i>Exploit DB</a></li>
                </ul>
            </div>


        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="https://twitter.com/girizliii"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/mohammad.hooshmand.sarvestani/"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/mohammad228"><i class="fa fa-github"></i></a></li>
                </ul>
            </div>
            </hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">

                <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href=""
                                                          target="_blank">Mohammad Hooshmand Sarvestani</a></p>
                <p class="h6">Email: mohammadhooshmand73@gmail.com</p>
            </div>
            </hr>
        </div>
    </div>
</section>
{{--Footer End--}}
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<script>

    const _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];

    function Validate(oForm) {
        const arrInputs = oForm.getElementsByTagName("input");
        for (var i = 0; i < arrInputs.length; i++) {
            var oInput = arrInputs[i];
            if (oInput.type == "file") {
                var sFileName = oInput.value;
                if (sFileName.length > 0) {
                    var blnValid = false;
                    for (var j = 0; j < _validFileExtensions.length; j++) {
                        var sCurExtension = _validFileExtensions[j];
                        if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                            blnValid = true;
                            break;
                        }
                    }

                    if (!blnValid) {
                        alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                        return false;
                    }
                }
            }
        }

        return true;
    }

</script>
</body>

</html>
