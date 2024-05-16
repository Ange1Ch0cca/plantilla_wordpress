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
                                <i class="mdi mdi-plus"></i> Create New
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
    <div class="container-fluid row">

        <!-- start page title -->
        <div class="col-12">
            <h1 class="page-title text-center">Nosotros</h1>
        </div>
        <!-- end page title -->

        <!-- Content section -->
        <div class="col-md-4">
            <img src="https://media.istockphoto.com/id/496280806/photo/computer-keyboard-about-us.jpg?s=612x612&w=0&k=20&c=g8mfKNgYDzOzuekpoKwviAJ0bAt7LubJ2bRf7adu4Wc=" alt="Imagen de Nosotros" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h2>¿Quiénes Somos?</h2>
            <p>
                Somos una tienda online dedicada a ofrecer los mejores productos a nuestros clientes. Desde nuestra fundación en [Año], hemos trabajado incansablemente para brindar una experiencia de compra única y satisfactoria.
            </p>
            <h2>Nuestra Misión</h2>
            <p>
                Nuestra misión es proporcionar productos de alta calidad a precios competitivos, asegurando al mismo tiempo un excelente servicio al cliente. Creemos en la innovación, la integridad y el compromiso con la satisfacción del cliente.
            </p>
            <h2>Nuestro Equipo</h2>
            <p>
                Contamos con un equipo apasionado y dedicado que trabaja día a día para mejorar nuestra tienda y ofrecer una atención personalizada. Nuestro equipo está compuesto por expertos en diversas áreas que garantizan que cada aspecto de su experiencia de compra sea excepcional.
            </p>
            <h2>Nuestros Valores</h2>
            <p>
                En nuestra tienda, valoramos la honestidad, la transparencia y el respeto. Nos esforzamos por construir relaciones duraderas con nuestros clientes basadas en la confianza y la satisfacción mutua.
            </p>
        </div>
        <!-- End Content section -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

                <?php include ('layout/footer.php');?>

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