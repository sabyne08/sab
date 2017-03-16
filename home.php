<!--
*

*
-->

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sunmint | Home</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <?php
    include "config/config.php";
?>
</head>

<body>
      <div id="wrapper">
        <!-- Side nav bar -->

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"> <?php echo $_SESSION['user']['user_name'] ?> </strong>
                            </span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="login.html">Profile</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            SM
                        </div>
                    </li>
                    <li class="active">
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>
                    </li>

                      <li>
                        <a href="/viewCustomers.php"><i class="fa fa-table"></i> <span class="nav-label">View Customers</span></a>
                      </li>
                      <li>
                        <a href="/addCustomers.php"><i class="fa fa-table"></i> <span class="nav-label">Add Customers</span></a>
                      </li>

                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">


<!-- Top nav bar -->
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="home.php">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
        </div>




  <div class="wrapper wrapper-content animated fadeInLeft">
<div class="row">
            <div class="col-lg-2">
                            <button class="btn btn-primary dim btn-large-dim" type="button" id="new_lead_btn"><i class="fa fa-user"></i></button>
                            </div>

<div class="col-lg-8 hide" id="form1">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>New Lead</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>

                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form role="form" class="form-inline" action="#">
                                <div class="form-group">
                                    <label for="exampleInputEmail2" class="sr-only">kWh</label>
                                    <input type="email" placeholder="kWh" id="exampleInputEmail2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword2" class="sr-only">Rate</label>
                                    <input type="password" placeholder="Rate" id="exampleInputPassword2" class="form-control">
                                </div>

                                <button class="btn btn-success btn-rounded" id="form1_submit">Calculate Freedom!</button>
                            </form>
                        </div>
                    </div>
                </div>
              </div>

              <div class="row">


              <div class="col-lg-8 hide" id="form2">
                                  <div class="ibox float-e-margins">
                                      <div class="ibox-title">
                                          <h5>New Lead</h5>
                                          <div class="ibox-tools">
                                              <a class="collapse-link">
                                                  <i class="fa fa-chevron-up"></i>
                                              </a>

                                              <a class="close-link">
                                                  <i class="fa fa-times"></i>
                                              </a>
                                          </div>
                                      </div>
                                      <div class="ibox-content">
                                          <form role="form" class="form-inline" action="#">
                                              <div class="form-group">
                                                  <label for="exampleInputEmail2" class="sr-only">kWh</label>
                                                  <input type="email" placeholder="kWh" id="exampleInputEmail2" class="form-control">
                                              </div>
                                              <div class="form-group">
                                                  <label for="exampleInputPassword2" class="sr-only">Rate</label>
                                                  <input type="password" placeholder="Rate" id="exampleInputPassword2" class="form-control">
                                              </div>

                                              <button class="btn btn-success btn-rounded" id="form1_submit">Calculate Freedom!</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                            </div>





                            <div class="col-lg-2">
                    <div class="widget style1 lazur-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-euro fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">462</h2>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
  </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>

    <!-- Scripts -->
    <script src="components/scripts.js"></script>


</body>

<input type="hidden" class="admin_url"  value="<?PHP if(isset($adminUrl)) echo $adminUrl;?>">

</html>
