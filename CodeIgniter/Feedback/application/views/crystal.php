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
            <div class="row">
                <div class="col-12" style="margin-top: 20px;">
                    <div class="logo">
                        <img src="../../assets/home/logo/sample.png">
                    </div>
                </div>
                <div class="col-12">
                    <h1 class="title_header">Crystal</h1>
                    <div class="welcome">
                        <h3 style="margin-right:20px; margin-left:20px;">Dear Valuable Guest,
                            Crystal Restaurant – Belajio Resort is proud to provide you with the utmost excellence of Quality & Service .
                            Sharing us with your opinion and feedback would greatly help us in assessing our performance in order to better serve you in the future</h3>
                    </div>
                </div>
            </div>
        </header>
        <div class="main">
            <div class="row" style="padding-right: 5px; padding-left:5px;">
                <div class="col-12">
                    <form action="home/get_feedback" class="needs-validation" method="post" novalidate>
                        <?php
                        for ($i = 0; $i < $section_count; $i++) {
                            for ($j = 0; $j < count($fields[$i]); $j++) {
                                if ($fields[$i][$j]['f_field_type'] == 0) {
                        ?>
                                    <div class="mb-3">
                                        <h2 style="margin-bottom:40px;"><?php echo $fields[$i][$j]['f_section_content']; ?></h2>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-6 state_des">
                                            </div>
                                            <div class="col-2">
                                                <h5>Good</h5>
                                            </div>
                                            <div class="col-2">
                                                <h5>Aver</h5>
                                            </div>
                                            <div class="col-2">
                                                <h5>Bad</h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <h4><?php echo $fields[$i][$j]['f_label']; ?></h4>
                                            </div>
                                            <div class="col-2 radio-button">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="<?php echo $fields[$i][$j]['f_id']; ?>" id="<?php echo $fields[$i][$j]['f_id']; ?>" value="good" checked />
                                                </div>
                                            </div>
                                            <div class="col-2 radio-button">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="<?php echo $fields[$i][$j]['f_id']; ?>" id="<?php echo $fields[$i][$j]['f_id']; ?>" value="average" />
                                                </div>
                                            </div>
                                            <div class="col-2 radio-button">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="<?php echo $fields[$i][$j]['f_id']; ?>" id="<?php echo $fields[$i][$j]['f_id']; ?>" value="bad" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                        <?php
                                }
                            }
                        }
                        ?>
                        <div class="row">
                            <?php
                            foreach ($input_fields as $key => $value) {
                            ?>
                                <div class="col-12" style="margin-bottom: 20px;">
                                    <label><?php echo $value['f_label']; ?></label>
                                    <input type="text" class="form-control" name="<?php echo $value['f_id']; ?>" id="<?php echo $value['f_id']; ?>" required>
                                    <div class="invalid-feedback">
                                        Please input this field.
                                    </div>
                                </div>
                            <?php
                            }
                            foreach ($text_fields as $key => $value) {
                            ?>
                                <div class="col-12" style="margin-bottom: 20px;">
                                    <label><?php echo $value['f_label']; ?></label>
                                    <textarea class="form-control" name="<?php echo $value['f_id']; ?>" id="<?php echo $value['f_id']; ?>" style="height: 150px;"></textarea>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
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
<script>
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

</html>