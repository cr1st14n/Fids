<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>NAABOL</title>

    <!-- vendor css -->
    <link href="{{ asset('resources/plantilla/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/plantilla/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/plantilla/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/plantilla/lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('resources/plantilla/css/bracket.css') }}">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>NAABOL<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-15 mg-t-20">Menu </label>
        <div class="br-sideleft-menu">
            <a href="index.html" class="br-menu-link">
                <div class="br-menu-item" id="btn_mod_1">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Intinerarios</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="mailbox.html" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                    <span class="menu-item-label">Registro</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="card-dashboard.html" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Información F.I.D.S.</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
        </div><!-- br-sideleft-menu -->
        <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
        <div class="br-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
        </div><!-- br-header-left -->
        <div class="br-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name hidden-md-down">Katherine</span>
                        <img src="https://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
                        <span class="square-10 bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                            <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                            <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                            <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                            <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
                            <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
            <div class="navicon-right">
            </div><!-- navicon-right -->
        </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="br-sideright">
        <ul class="nav nav-tabs sidebar-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i
                        class="icon ion-ios-contact-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i
                        class="icon ion-ios-folder-outline tx-22"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i
                        class="icon ion-ios-calendar-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i
                        class="icon ion-ios-gear-outline tx-24"></i></a>
            </li>
        </ul><!-- sidebar-tabs -->

        <!-- Tab panes -->
        <div class="tab-content">
        </div><!-- tab-content -->
    </div><!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="index.html">Intinerario de Vuelos</a>
                <span class="breadcrumb-item active"></span>
            </nav>
        </div><!-- br-pageheader -->
        {{-- <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Blank Page (Default Layout)</h4>
            <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
        </div> --}}

        <div class="br-pagebody" id="body_1">
            <!-- ########## show del detalle  ########## -->
        </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <!-- LARGE MODAL -->
    <div id="modaldemo3" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pd-20">
                    <div class="lh-3 mg-b-20">
                        <form action="">
                            <div class="row">
                                <div class="col-xl-6 mg-t-20 mg-xl-t-0">
                                    <div class="form-layout form-layout-5">
                                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Right Label
                                            Alignment
                                        </h6>
                                        <p class="mg-b-30 tx-gray-600">A basic form where labels are aligned in right.
                                        </p>
                                        <div class="row">
                                            <label class="col-sm-4 form-control-label"><span
                                                    class="tx-danger">*</span>
                                                Firstname:</label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter firstname">
                                            </div>
                                        </div><!-- row -->
                                        <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label"><span
                                                    class="tx-danger">*</span>
                                                Lastname:</label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter lastname">
                                            </div>
                                        </div>
                                        <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label"><span
                                                    class="tx-danger">*</span>
                                                Email:</label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter email address">
                                            </div>
                                        </div>
                                        <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label"><span
                                                    class="tx-danger">*</span>
                                                Address:</label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <textarea rows="2" class="form-control" placeholder="Enter your address"></textarea>
                                            </div>
                                        </div><!-- row -->
                                        <div class="row mg-t-30">
                                            <div class="col-sm-8 mg-l-auto">
                                                <div class="form-layout-footer">
                                                    <button class="btn btn-info">Submit Form</button>
                                                    <button class="btn btn-secondary">Cancel</button>
                                                </div><!-- form-layout-footer -->
                                            </div><!-- col-8 -->
                                        </div>
                                    </div><!-- form-layout -->
                                </div><!-- col-6 -->
                                <div class="col-xl-6 mg-t-20 mg-xl-t-0">
                                    <div class="form-layout form-layout-5">
                                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Right Label
                                            Alignment
                                        </h6>
                                        <p class="mg-b-30 tx-gray-600">A basic form where labels are aligned in right.
                                        </p>
                                        <div class="row">
                                            <label class="col-sm-4 form-control-label"><span
                                                    class="tx-danger">*</span>
                                                Firstname:</label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter firstname">
                                            </div>
                                        </div><!-- row -->
                                        <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label"><span
                                                    class="tx-danger">*</span>
                                                Lastname:</label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter lastname">
                                            </div>
                                        </div>
                                        <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label"><span
                                                    class="tx-danger">*</span>
                                                Email:</label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter email address">
                                            </div>
                                        </div>
                                        <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label"><span
                                                    class="tx-danger">*</span>
                                                Address:</label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <textarea rows="2" class="form-control" placeholder="Enter your address"></textarea>
                                            </div>
                                        </div><!-- row -->
                                        <div class="row mg-t-30">
                                            <div class="col-sm-8 mg-l-auto">
                                                <div class="form-layout-footer">
                                                    <button class="btn btn-info">Submit Form</button>
                                                    <button class="btn btn-secondary">Cancel</button>
                                                </div><!-- form-layout-footer -->
                                            </div><!-- col-8 -->
                                        </div>
                                    </div><!-- form-layout -->
                                </div><!-- col-6 -->
                            </div>

                        </form>
                    </div>
                    <h4 class=" lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Why We Use Electoral
                            College, Not Popular Vote</a></h4>
                    <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable
                        content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
                        making it look like readable English. </p>
                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary tx-size-xs">Save changes</button>
                    <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->

    <script src="{{ asset('resources/plantilla/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('resources/plantilla/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('resources/plantilla/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('resources/plantilla/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('resources/plantilla/lib/moment/moment.js') }}"></script>
    <script src="{{ asset('resources/plantilla/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('resources/plantilla/lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
    <script src="{{ asset('resources/plantilla/lib/peity/jquery.peity.js') }}"></script>

    <script src="{{ asset('resources/plantilla/js/bracket.js') }}"></script>

    <script src="{{ asset('resources/js/index.js') }}"></script>
</body>

</html>
