<?php include("config.php") ?>
<!DOCTYPE HTML>
<html>

<head>
    <title>OTS | Online Test Series</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='preconnect'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='preconnect'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='preconnect'>
    <link href="<?php echo BASE_URL ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo BASE_URL ?>css/style.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo BASE_URL ?>css/font-awesome.css" rel="stylesheet">
    <!-- Custom Theme files -->
    <script src="<?php echo BASE_URL ?>js/jquery-1.12.0.min.js"></script>
    <script src="<?php echo BASE_URL ?>js/bootstrap.min.js"></script>
</head>

<body>
<?php include("includes/header.php"); ?>
    <div class="container">
        <div class="row" style="display: flex;justify-content: center; align-items: center;">
            <div class="col-md-6">
                <h1>OTS - Online Test Series</h1>
            </div>
            <div class="col-md-6">
                <img src="<?php echo BASE_URL ?>images/ots.jpg" height="415" class="img-fluid" alt="" srcset="">
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
    <?php include("includes/signup.php"); ?>
</body>

</html>