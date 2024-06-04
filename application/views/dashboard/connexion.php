









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MESRI STATS</title>



    <link href="_plugins/bootstrap4/css/bootstrap.min.css" rel="stylesheet" type="text/css">




    <link href="_plugins/font/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="_plugins/zebra/css/zebra_form.css" type="text/css">


    <link rel="stylesheet" type="text/css" href="css?family=Arimo">

    <link href="gabarits/_login/css/zebra.css" rel="stylesheet">



    <link href="_plugins/ui/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet">

    <style>
    body {
        background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
        background: #283c86;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #45a247, #283c86);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #45a247, #283c86);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        /*background: linear-gradient(155.26deg,#300158 22%,#241568 38.82%,#12509e 60.55%,#34b1c7 82.92%,#9de0d5);*/

    }

    textarea:focus,
    input[type="text"]:focus,
    input[type="password"]:focus,
    input[type="datetime"]:focus,
    input[type="datetime-local"]:focus,
    input[type="date"]:focus,
    input[type="month"]:focus,
    input[type="time"]:focus,
    input[type="week"]:focus,
    input[type="number"]:focus,
    input[type="email"]:focus,
    input[type="url"]:focus,
    input[type="search"]:focus,
    input[type="tel"]:focus,
    input[type="color"]:focus,
    
    .uneditable-input:focus {
        border: none;
        box-shadow: 0 0px 0px rgba(0, 0, 0, 0.075) inset, 0 0 0px rgba(126, 239, 104, 0.6);
        outline: 0 none;

        border-bottom: 2px solid #0062cc;

        background: #E4E5E6;
        color: #00416A;
    }

    .contact-form {
        background: #fff;
        margin-top: 10%;
        margin-bottom: 5%;
        width: 30%;
        border-radius: 10px;
    }


    @media (min-width: 768px) {

        .contact-form {
            width: 60%;

        }
    }

    @media (min-width: 992px) {

        .contact-form {
            width: 40%;

        }
    }



    @media (min-width: 1200px) {

        .contact-form {
            width: 30%;

        }
    }

    @media (max-width: 768px) {

        .contact-form {
            width: 70%;

        }
    }

    @media (max-width: 576px) {

        .contact-form {
            width: 90%;

        }
    }


    .contact-form .form-control {
        border-radius: 1rem;
    }

    .contact-image {
        text-align: center;
    }

    .contact-image {
        border-radius: 50%;
        margin-top: -20px;
        text-align: center;
        width: 60px;
        background: #fff;
    }

    /*.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}*/
    .contact-form h3 {
        /* margin-bottom: 8%;*/
        /*   margin-top: -10%;*/
        padding-top: 20px;
        text-align: center;
        color: #0062cc;
    }

    .contact-form .btnContact {
        width: 50%;
        border: none;
        border-radius: 1rem;
        padding: 1.5%;
        background: #dc3545;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
    }

    .btnContactSubmit {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        color: #fff;
        background-color: #0062cc;
        border: none;
        cursor: pointer;
    }
    </style>
</head>

<body>

    <div class="container contact-form">

        <h3>Page Authentification</h3>
        <div>

            <div style="padding:20px">


                <div id="smsg" class="alert alert-success" style="display:none"> <button type="button" class="close"
                        id="ssuccessclose">
                        ×</button>
                    <span class="glyphicon glyphicon-ok"></span> <strong>Opération réussie</strong>

                    <div id="opsmsg"> </div>
                </div>

                <div id="dmsg" class="alert alert-danger" style="display:none"> <button type="button" class="close"
                        id="sdangerclose">
                        ×</button>
                    <span class="fa  fa-danger"></span> <strong>Echec Connexion</strong>

                    <div id="opdmsg"> </div>
                </div>
                <form action="<?php echo site_url('verif-connexion-ecole'); ?>" method="post"
                    novalidate="novalidate" class="Zebra_Form">   
                    <div class="hidden">
                      <input type="hidden" name="username" id="name_SinappsLoginForm"
                            value="SinappsLoginForm"><label for="zebra_honeypot_SinappsLoginForm"
                            style="display:none">Leave this field blank</label>
                            <input type="text"
                            name="password" id="zebra_honeypot_SinappsLoginForm" value=""
                            class="control text" autocomplete="off"></div>


                    <div class="row">
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="note" id="note_login">Email utilisateur</div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                        </div><input type="text" name="username" id="login" value=""
                                            class="control text form-control form-control-sm">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="note" id="note_password">Mot de passe utilisateur</div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-lock"></i></div>
                                        </div><input type="password" name="password" id="password" value=""
                                            class="control password  form-control form-control-sm">
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <!--<div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" onclick="showPassword()">
     Show password
    </label>
  </div>-->



                    <div class="row">
                        <input type="reset" value="Cancel" id="btncancel" style="display:none"
                            onclick="this.form.reset();">
                        <div class="col-md-8">
                            <div style="padding-top:10px"><a href="login/reset.html">Mot de passe perdu ?</a></div>
                        </div>
                        <div class="col-md-4">
                            <input type="submit" name="btnsubmit" value="Login"
                                class="button  btn-primary  sinapps_submit_button  blue-gradient">
                        </div>
                    </div>





                </form>
                <script type="text/javascript">
                function init_17246b7728208322c8e467485c1b0b4e() {
                    if (typeof jQuery == "undefined" || typeof jQuery.fn.Zebra_Form == "undefined") {
                        setTimeout("init_17246b7728208322c8e467485c1b0b4e()", 100);
                        return
                    } else {
                        $(document).ready(function() {
                            $("#SinappsLoginForm").Zebra_Form({
                                clientside_disabled: false,
                                close_tips: true,
                                disable_upload_validation: false,
                                on_ready: false,
                                scroll_to_error: true,
                                tips_position: 'left',
                                validate_on_the_fly: false,
                                validate_all: false,
                                validation_rules: {
                                    "login": {
                                        "required": ["Email requis"],
                                        "email": ["Email incorrect"]
                                    },
                                    "password": {
                                        "required": ["Mot de passe requis"]
                                    }
                                }
                            })
                        })
                    }
                }
                init_17246b7728208322c8e467485c1b0b4e()
                </script>

                <!--<div class="logo"><img class="google" src="https://www.google.com/images/srpr/logo11w.png"></div>-->
            </div>
        </div>
        <div class="d-flex" style="padding:20px;padding-top:0">
            <div class="">
                <div class="d-flex pt-1 pb-0 mb-0">
                    <div class="pt-1  pr-3">
                        <div class="nav justify-content-center"><img src="gabarits/sinapps/img/flag.jpg"
                                class="img-responsive" style="height:25px;"></div>

                    </div>
                    <div class="pt-1 pr-1" style="text-transform:uppercase;font-size:9px;color:#000;font-weight:400">
                        MINISTERE DE L'ENSEIGNEMENT SUPERIEUR , <br> DE LA RECHERCHE ET DE L'INNOVATION

                    </div>



                </div>


            </div>

            <div class="ml-auto pt-2" style="font-size:9px;font-weight:400;text-align:justify;color:#000">CELLULLE DES
                ETUDES <br>ET DE LA PLANIFICATION</div>
            <!--  <div class="pt-0 pr-2 pl-3" style="font-size:24px;font-weight:300;color:#000">C.E.P</div>-->


        </div>

    </div>






    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="_plugins/jquery/jquery-3.2.1.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>-->
    <script src="_plugins/bootstrap4/popper.min.js"></script>
    <script src="_plugins/bootstrap4/js/bootstrap.min.js"></script>
    <script src="_plugins/ui/loader/sinapps-waitingfor.js"></script>

    <script src="_plugins/sinapps/js/form.js"></script>
    <script src="_plugins/ui/pace-master/pace.min.js"></script>


    <script type="text/javascript" src="_plugins/zebra/javascript/zebra_form.js"></script>

    <script type="text/javascript">
    sinappsAjax('https://mesristats.com/_plugins/ui/loader/img/squares.gif', 'SinappsLoginForm',
        'https://mesristats.com/login/validate', 'login', 'btnsubmit');
    </script>
    <script>
    function showPassword() {

        var key_attr = $('#password').attr('type');

        if (key_attr != 'text') {

            $('.checkbox').addClass('show');
            $('#password').attr('type', 'text');

        } else {

            $('.checkbox').removeClass('show');
            $('#password').attr('type', 'password');

        }

    }
    </script>
</body>

</html>