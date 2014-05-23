<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ourPlace Pty Ltd. -creating virtual place</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo WEB_ROOT; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo WEB_ROOT; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo WEB_ROOT; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>css/styles.css">
    <script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.dataTables.js"></script>

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            var t = $('#example').DataTable({
                "columnDefs": [
                    {
                        "searchable": false,
                        "orderable": false,
                        "targets": 1
                    }
                ],
                "order": [
                    [ 3, 'asc' ]
                ]
            });

            t.on('order.dt search.dt',function () {
                t.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();
        });

    </script>

    <!-- Custom styles for this template -->
    <link href="<?php echo WEB_ROOT; ?>css/offcanvas.css" rel="stylesheet">

    <?php
    //login confirmation
    confirm_logged_in();

    ?>
</head>

<body>
<!-- Site header and navigation -->
<header class="top" role="header">
    <div class="container">
        <a href="#" class="navbar-brand pull-left">
            BS3 TUTORIAL
        </a>
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="glyphicon glyphicon-align-justify"></span>
        </button>
        <nav class="navbar-collapse collapse" role="navigation">
            <ul class="navbar-nav nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- Site banner -->
<div class="banner">
    <div class="container">
        <h1>Twitter Bootstrap 3: Responsive Design Tutorial</h1>
        <p>A comprehensive tutorial showing you how to quickly create responsive designs using Twitter Bootstrap 3.</p>
    </div>
</div>

<!-- Middle content section -->
<div class="middle">
    <div class="container">
        <div class="col-md-9 content">
            <h2>Use Twitter Bootstrap to create responsive designs for desktop, tablet & mobile</h2>
            <p>Twitter bootstrap allows web developers and designers to quickly create attractive and responsive website templates. This tutorial provided by <a href="http://www.revillweb.com/">RevillWeb.com</a> will show you how to use Twitter Bootstrap 3 to create this responsive website template.</p>
            <div class="to-tutorial">
                <p><strong>Visit the tutorial now to learn more:</strong></p>
                <a href="http://www.revillweb.com/tutorials/bootstrap-tutorial/" class="btn btn-success">TO THE TUTORIAL</a>
            </div>
        </div>
        <div class="col-md-3">
            <h2>Resources</h2>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="http://getbootstrap.com/" target="_blank">Download Twitter Bootstrap</a></li>
                <li><a href="https://www.bootstrapresponsivethemes.com/" target="_blank">Bootstrap Responsive Themes</a></li>
                <li><a href="http://amzn.to/1iO8NBg" target="_blank">UK: HTML & CSS: Design and Build Web Sites</a></li>
                <li><a href="http://amzn.to/1lESKDp" target="_blank">UK: Bootstrap Site Blueprints</a></li>
                <li><a href="http://amzn.to/1oXAbu6" target="_blank">US: HTML & CSS: Design and Build Web Sites</a></li>
                <li><a href="http://amzn.to/1lESF2w" target="_blank">US: Bootstrap Site Blueprints</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Site footer -->
<div class="bottom">
    <div class="container">
        <div class="col-md-4">
            <h3><span class="glyphicon glyphicon-heart"></span> Footer section 1</h3>
            <p>Content for the first footer section.</p>
        </div>
        <div class="col-md-4">
            <h3><span class="glyphicon glyphicon-star"></span> Footer section 2</h3>
            <p>Content for the second footer section.</p>
        </div>
        <div class="col-md-4">
            <h3><span class="glyphicon glyphicon-music"></span> Footer section 3</h3>
            <p>Content for the third footer section.</p>
        </div>
    </div>
</div>
</body>
</html>