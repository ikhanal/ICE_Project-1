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
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo WEB_ROOT; ?>admin/index.php">ourPlace </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo WEB_ROOT; ?>admin/index.php">Home</a></li>
                <li ><a href="<?php echo WEB_ROOT; ?>admin/index.php">Manage Homepage</a></li>
                <li><a href="<?php echo WEB_ROOT; ?>admin/index.php">Advertisements</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Council Services<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Documents</a></li>
                        <!--  <li><a href="#.php">New Enrolment</a></li> -->

                    </ul>

                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!-- <li><a href="#">Reports</a></li> -->
                        <li><a href="<?php echo WEB_ROOT; ?>admin/modules/user/index.php">Manage User</a></li>
                        <!--   <li><a href="#">Others</a></li> -->
                        <li><a href="<?php echo WEB_ROOT; ?>admin/logout.php">Logout</a></li>
                    </ul>
                </li>


            </ul>

        </div>
        <!--/.navbar-collapse -->
    </div>
    <!-- /.nav-collapse -->
</div>

<div class="container">

        <?php check_message(); ?>
        <?php require_once $content; ?>

        <hr>
        <footer>
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

                    <!--      <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>-->
                    <script src="<?php echo WEB_ROOT; ?>js/tooltip.js"></script>
                    <!--     <script src="assets/js/jquery.js"></script>>-->
                    <script src="<?php echo WEB_ROOT; ?>js/bootstrap.min.js"></script>
                    <script src="<?php echo WEB_ROOT; ?>js/popover.js"></script>
                    <script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js"
                            charset="UTF-8"></script>
                    <script type="text/javascript"
                            src="<?php echo WEB_ROOT; ?>js/locales/bootstrap-datetimepicker.uk.js"
                            charset="UTF-8"></script>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>