<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metatag List  -->
    <meta charset="UTF-8">
    <meta name="Generator" content="VisualStudioCode">
    <meta name="Author" content="KingdomParadise">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="">
    <meta name="Description" content="This is serverstation54 website.">
    <!-- The title - Website Name -->
    <title>FeedbackForm</title>
    <!-- link Bootstrap by cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" integrity="sha512-thoh2veB35ojlAhyYZC0eaztTAUhxLvSZlWrNtlV01njqs/UdY3421Jg7lX0Gq9SRdGVQeL8xeBp9x1IPyL1wQ==" crossorigin="anonymous" />
    <!-- link Bootstrap by local vendor
        <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.css">
        -->
    <!-- link Fontawesome by cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- link Fontawesome by local vendor 
        <link rel="stylesheet" href="./vendor/fontawesome/css/all.css">
        -->
    <!-- link style.css and custom.css -->
    <link type="text/css" rel="stylesheet" href="../../assets/home/css/style.css">
    <link type="text/css" rel="stylesheet" href="../../assets/home/css/custom.css">
</head>

<body>
    <div class="wrapper">
        <header>
            <h1>Wave</h1>
            <div class="welcome">
                <h3>Dear Valuable Guest,
                    Wave Restaurant – Belajio Resort is proud to provide you with the utmost excellence of Quality & Service .
                    Sharing us with your opinion and feedback would greatly help us in assessing our performance in order to better serve you in the future</h3>
            </div>
        </header>
        <div class="main">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <img src="../../assets/home/logo/sample.png">
                    </div>
                </div>
                <div class="col-md-8">
                    <form>
                        <section>
                            <div class="mb-3">
                                <h2>SERVICE الخدمة</h2>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6 state_des">
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Good</h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Average</h5>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Bad</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Attitude & Friendliness الاداء واللطف</h4>
                                    </div>
                                    <div class="col-md-2 radio-button">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="good" checked />
                                        </div>
                                    </div>
                                    <div class="col-md-2 radio-button">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="average" />
                                        </div>
                                    </div>
                                    <div class="col-md-2 radio-button">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="bad" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <?php
                            for ($i = 0; $i < 4; $i++) {
                            ?>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Attitude & Friendliness الاداء واللطف</h4>
                                        </div>
                                        <div class="col-md-2 radio-button">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions<?php echo $i; ?>" id="inlineRadio1" value="good" checked />
                                            </div>
                                        </div>
                                        <div class="col-md-2 radio-button">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions<?php echo $i; ?>" id="inlineRadio2" value="average" />
                                            </div>
                                        </div>
                                        <div class="col-md-2 radio-button">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions<?php echo $i; ?>" id="inlineRadio3" value="bad" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            <?php
                            }
                            ?>
                        </section>
                        <section>
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 20px;">
                                    <label>You were dining at رقم الطاولة</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12" style="margin-bottom: 20px;">
                                    <label>Full name الاسم كامل*</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12" style="margin-bottom: 20px;">
                                    <label>Email البريد الالكتروني*</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="col-md-12" style="margin-bottom: 20px;">
                                    <label>Mobile الجوال*</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12" style="margin-bottom: 20px;">
                                    <label>Other comments هل هناك ملاحظات اضافية</label>
                                    <textarea class="form-control" style="height: 150px;"></textarea>
                                </div>
                            </div>
                        </section>
                        <button type="submit" class="btn btn-primary" style="float: right; width:150px;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <footer>

        </footer>
    </div>
</body>
<!-- link Bootstrap by cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js" integrity="sha512-ZvbjbJnytX9Sa03/AcbP/nh9K95tar4R0IAxTS2gh2ChiInefr1r7EpnVClpTWUEN7VarvEsH3quvkY1h0dAFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js" integrity="sha512-q2vREMvON/xrz1KuOj5QKWmdvcHtM4XNbNer+Qbf4TOj+RMDnul0Fg3VmmYprdf3fnL1gZgzKhZszsp62r5Ugg==" crossorigin="anonymous"></script>

<!-- link Bootstrap by local vendor 
        <script type="text/javascript" src="./vendor/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="./vendor/bootstrap/js/bootstrap.bundle.js"></script>
        -->
<!-- link style.js and custom.js -->
<script type="text/javascript" src="../../assets/home/js/style.js"></script>
<script type="text/javascript" src="../../assets/home/js/custom.js"></script>

</html>