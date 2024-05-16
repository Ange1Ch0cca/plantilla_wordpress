<!DOCTYPE html>
<html lang="en">

    <head>
    
        <?php include ('layout/head.php');?>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">
            <div class="header-border"></div>
            <header id="page-topbar">
                <div class="navbar-header">

                    <div class="d-flex align-items-left">
                        <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                            id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-plus"></i> Create Nuevo
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    Application
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    Software
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    EMS System
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    CRM App
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown d-none d-sm-inline-block ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-bell"></i>
                                <span class="badge badge-danger badge-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="assets/images/users/avatar-2.jpg"
                                                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Samuel Coverdale</h6>
                                                <p class="font-size-12 mb-1">You have new follower on Instagram</p>
                                                <p class="font-size-12 mb-0 text-muted"><i
                                                        class="mdi mdi-clock-outline"></i> 2 min ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-success rounded-circle">
                                                    <i class="mdi mdi-cloud-download-outline"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Download Available !</h6>
                                                <p class="font-size-12 mb-1">Latest version of admin is now available.
                                                    Please download here.</p>
                                                <p class="font-size-12 mb-0 text-muted"><i
                                                        class="mdi mdi-clock-outline"></i> 4 hours ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="assets/images/users/avatar-3.jpg"
                                                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Victoria Mendis</h6>
                                                <p class="font-size-12 mb-1">Just upgraded to premium account.</p>
                                                <p class="font-size-12 mb-0 text-muted"><i
                                                        class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-down-circle mr-1"></i> Load More..
                                    </a>
                                </div>
                            </div>
                        </div>

                        <?php include ('layout/header.php');?>

                    </div>
                </div>
            </header>

            <?php include ('layout/sidebar.php');?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Preguntas Frecuentes</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Páginas</a></li>
                                        <li class="breadcrumb-item active">FAQs</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>     
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center mt-4">
                                <h4>Preguntas Frecuentes</h4>
                                <p class="text-muted mt-3 mb-4">Aquí encontrarás respuestas a las preguntas más frecuentes sobre nuestros productos y servicios.</p>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row mt-5">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mb-3 font-weight-bold text-uppercase">Envíos y Entregas</h5>
                                    <div id="accordion">
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingOne">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne" class="text-dark">
                                                        Q. ¿Cuánto tiempo tarda en llegar mi pedido?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show"
                                                    aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body text-muted pt-1">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rutrum, mi nec accumsan fringilla, nisl mi sollicitudin quam, ac lacinia ex nulla sit amet enim.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingTwo">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Q. ¿Cuál es el costo de envío?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body text-muted pt-1">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rutrum, mi nec accumsan fringilla, nisl mi sollicitudin quam, ac lacinia ex nulla sit amet enim.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Agrega más preguntas y respuestas aquí -->
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mb-3 font-weight-bold text-uppercase">Devoluciones y Reembolsos</h5>
                                    <div id="accordion2">
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingFour">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Q. ¿Cuál es el proceso de devolución?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion2">
                                                <div class="card-body text-muted pt-1">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rutrum, mi nec accumsan fringilla, nisl mi sollicitudin quam, ac lacinia ex nulla sit amet enim.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingFive">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        Q. ¿Cómo obtengo un reembolso?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion2">
                                                <div class="card-body text-muted pt-1">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rutrum, mi nec accumsan fringilla, nisl mi sollicitudin quam, ac lacinia ex nulla sit amet enim.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Agrega más preguntas y respuestas aquí -->
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0">¿Tienes alguna pregunta?</h5>
                                    <p class="text-muted font-13 mb-4">Envíanos un correo electrónico con tus preguntas o contáctanos a través de Twitter.</p>
                                    <form>
                                        <div class="form-group row">
                                            <div class="col-lg-6 mb-3 mb-lg-0">
                                                <input class="form-control" type="text" id="name" placeholder="Nombre">                                                       
                                            </div> 
                                            <div class="col-lg-6">
                                                <input class="form-control" type="email" id="example-email-input3" placeholder="Correo electrónico">
                                            </div>                                                   
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" id="subject2" placeholder="Asunto">                                                       
                                            </div>                                                    
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Tu mensaje"></textarea>
                                        </div>                                                
                                        <button type="submit" class="btn btn-primary btn-block px-4">Enviar mensaje</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


                <?php include('layout/footer.php'); ?>
            </div>

            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Overlay-->
        <div class="menu-overlay"></div>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/simplebar.min.js"></script>

        <!-- App js -->
        <script src="assets/js/theme.js"></script>

    </body>

</html>