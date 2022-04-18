<?php if ($this->session->userdata('OOZID') == '') {
    redirect(base_url() . 'myadmin/admin/login/');
}
$time = base64_decode($this->session->userdata('timer'));
$curr_date = date("H:i:s");
$diff = abs(strtotime($time) - strtotime($curr_date)); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title><?php echo ADMINTITLE; ?></title>
    <link href="<?php echo base_url('frontendAssets/images/fav-icon.png'); ?>" rel="shortcut icon" type="image/x-icon">
    <meta content="" name="description">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="<?php echo base_url(); ?>backendAssets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>backendAssets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>backendAssets/css/core.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>backendAssets/css/components.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>backendAssets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>backendAssets/css/pages.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>backendAssets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>backendAssets/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>backendAssets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url(); ?>backendAssets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>backendAssets/js/modernizr.min.js"></script>
    <script type="text/javascript">
        function printData() {
            var e = document.getElementById("example");
            newWin = window.open("", "Print", "width=1000,height=500"), newWin.document.write('<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backendAssets/data-tables/bootstrap3/jquery.dataTables.min.css"/>'), newWin.document.write('<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/print.css"/>'), newWin.document.write(e.outerHTML), newWin.document.close()
        }
        var BASEURL = "<?php echo base_url(); ?>";
        $(document).ready(function(e) {
            $("a.print").click(function() {
                printData()
            })
        })
    </script>
    <script type="text/javascript">
        $(window).load(function() {
            $("div.loading").hide()
        })
    </script>
    <style type="text/css">
        .loading {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            background: rgba(255, 255, 255, .9);
            z-index: 9999
        }

        .loading img {
            position: relative;
            top: 50%
        }
    </style>
</head>

<body class="fixed-left">
    <div id="wrapper">
        <div class="loading"><img src="<?php echo base_url(); ?>backendAssets/images/preloader.gif" alt="loading"></div>
        <div class="topbar">
            <div class="topbar-left"><a href="<?php echo base_url('myadmin/dashboard/listview/'); ?>" class="logo"><img src="<?php echo base_url(); ?>backendAssets/images/user.jpg" height="70px;" width="70px;"><i class="zmdi zmdi-layers"></i></a></div>
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <ul class="nav navbar-nav navbar-left">
                        <li><button class="button-menu-mobile open-left"><i class="zmdi zmdi-menu"></i></button></li>
                        <li>
                            <h4 class="page-title"><?php  ?></h4>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right"><?php if ($this->session->userdata('OOZID') == 'SUPER') { ?><li>
                                <div class="dropdown pull-right"><a href="#" class="card-drop dropdown-toggle" aria-expanded="false" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><i class="fa fa-clock-o"></i> Logged From <span id="worked"><?php echo $minuts . ':' . $seconds; ?></span></li>
                                        <script type="text/javascript">
                                            $(document).ready(function(e) {
                                                function t() {
                                                    var e = s.html(),
                                                        i = e.split(":"),
                                                        n = new Date;
                                                    n.setHours(0), n.setMinutes(i[0]), n.setSeconds(i[1]);
                                                    var o = new Date(n.valueOf() + 1e3),
                                                        u = o.toTimeString().split(" "),
                                                        a = u[0].split(":");
                                                    s.html(a[1] + ":" + a[2]), setTimeout(t, 1e3)
                                                }
                                                var s = $("#worked");
                                                setTimeout(t, 1e3)
                                            })
                                        </script><?php echo $this->master_model->getAdminMenu(); ?><li><a href="<?php echo base_url(); ?>myadmin/admin/clearCache/" class="last left setting" title="Clear Cache"><i class="fa fa-cog"></i> Clear Cache</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo base_url() . 'myadmin/admin/logout/'; ?>"><i class="fa fa-off"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </li><?php } ?></ul>
                </div>
            </div>
        </div><?php $this->load->view('admin/admin-sidebar'); ?><div class="content-page">