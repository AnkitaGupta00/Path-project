
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 3</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">


    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="CoolAdmin"/>
                    </a>
                </div>
                <div class="header__navbar">
                    <ul class="list-unstyled">
                        <li class="has-sub">
                            <a href="{{url('pod')}}">
                                <i class="fas fa-desktop"></i>
                                <span class="bot-line"></span>department</a>
                        </li>
                    </ul>
                </div>
                <div class="header__tool">
                    <div class="header-button-item has-noti js-item-menu">
                        <i class="zmdi zmdi-notifications"></i>
                        <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                            <div class="notifi__title">
                                <p>You have 3 Notifications</p>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c1 img-cir img-40">
                                    <i class="zmdi zmdi-email-open"></i>
                                </div>
                                <div class="content">
                                    <p>You got a email notification</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c2 img-cir img-40">
                                    <i class="zmdi zmdi-account-box"></i>
                                </div>
                                <div class="content">
                                    <p>Your account has been blocked</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c3 img-cir img-40">
                                    <i class="zmdi zmdi-file-text"></i>
                                </div>
                                <div class="content">
                                    <p>You got a new file</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__footer">
                                <a href="#">All notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-button-item js-item-menu">
                        <i class="zmdi zmdi-settings"></i>
                        <div class="setting-dropdown js-dropdown">
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-globe"></i>Language</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-pin"></i>Location</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-email"></i>Email</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="{{asset('app/public/images/'.session('profile'))}}" alt="John Doe"/>
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{session('name')}}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{asset('app/public/images/'.session('profile'))}}" alt="John Doe"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{session('name')}}</a>
                                        </h5>
                                        <span class="email">{{session('email')}}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{url('logout')}}">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->

    <!-- HEADER MOBILE-->


    <!-- END HEADER MOBILE -->

    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
        <!-- BREADCRUMB-->

        <!-- END BREADCRUMB-->

        <!-- WELCOME-->
        <section class="welcome p-t-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title-4">
                            Tasks - {{$taskCount}}
                        </h1>
                        <hr class="line-seprate">
                    </div>
                </div>
            </div>
        </section>
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">data table</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="rs-select2--light rs-select2--md">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">All Properties</option>
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="rs-select2--light rs-select2--sm">
                                    <select class="js-select2" name="time">
                                        <option selected="selected">Today</option>
                                        <option value="">3 Days</option>
                                        <option value="">1 Week</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                    <a href="{{url('makeTask')}}" style="color: white">Add tasks +</a></button>

                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>created_by</th>
                                    <th>date</th>
                                    <th>expire on</th>
                                    <th>project</th>
                                    <th>status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($task as $item)
                                    <tr class="tr-shadow">
                                        <td>{{$item->title ?? ''}}</td>
                                        <td>
                                            <span class="block-email">{{$item->decs ?? ''}}</span>
                                        </td>
                                        <td class="desc">Admin</td>
                                        <td>{{$item->created_at ?? ''}}</td>
                                        <td>{{$item->last_date ?? ''}}</td>
                                        <td>{{\App\Models\project::where('id', $item->project_id)->get('title')}}</td>
                                        <td>
                                            <span class="status--process">Processing</span>
                                        </td>

                                        <td>
                                            <div class="table-data-feature">
                                                <a href="{{url('task/'.$item->id)}}" class="item" data-toggle="tooltip"
                                                   data-placement="top" title="" data-original-title="Send">
                                                    <i class="zmdi zmdi-mail-send"></i>
                                                </a>
                                                <a href="" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <a href="" class="item" data-toggle="tooltip" data-placement="top"
                                                   title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <section class="p-t-60 p-b-20">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="col-md-12">
                        <!-- END DATA TABLE-->
                    </div>
                </div>
            </div>
        </section>
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="table-responsive table-responsive-data2">
                        <div class="table-data__tool">
                            <div class="table-data__tool-left"></div>
                            <div class="table-data__tool-right">

                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal"
                                        data-whatever="@mdo" style="margin-left: 25px; margin-top: 20px">
                                    Add Project +
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>Project</th>

                                    <th>description</th>
                                    <th>status</th>
                                    <th>tasks</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($project as $projects)
                                <tr>
                                    <td>{{$projects->title ?? ''}}</td>

                                    <td>{{$projects->created_at}}</td>
                                    <td class="process">{{$projects->status}}</td>
                                    <td>{{\App\Models\tasks::where('project_id',$projects->id)->count()}}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="{{url('complete/'.$projects->id)}}" class="item" data-toggle="tooltip"
                                               data-placement="top" title="" data-original-title="Send">
                                                <i class="zmdi zmdi-check"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="table-data__tool">
                            <div class="table-data__tool-left"></div>
                            <div class="table-data__tool-right">

                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#addDepart"
                                        data-whatever="@mdo" style="margin-left: 25px; margin-top: 20px">
                                    Add Department +
                                </button>
                            </div>
                        </div>
                        <!-- TOP CAMPAIGN-->
                        <div class="top-campaign">
                            <h3 class="title-3 m-b-30">All Departments</h3>
                            <div class="table-responsive">
                                <table class="table table-top-campaign">
                                    <tbody>
                                    @foreach($department as $depart)
                                    <tr>
                                        <td>{{$depart->name}}</td>
                                        <td>{{$depart->status}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--  END TOP CAMPAIGN-->
                    </div>
                    <div class="col-lg-6">
                        <!-- TOP CAMPAIGN-->
                        <div class="table-data__tool">
                            <div class="table-data__tool-left"></div>
                            <div class="table-data__tool-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#addPod"
                                        data-whatever="@mdo" style="margin-left: 25px; margin-top: 20px">
                                    Add Department +
                                </button>
                            </div>
                        </div>
                        <!-- TOP CAMPAIGN-->
                        <div class="top-campaign">
                            <h3 class="title-3 m-b-30">All Pods</h3>
                            <div class="table-responsive">
                                <table class="table table-top-campaign">
                                    <tbody>
                                    @foreach($pod as $pods)
                                        <tr>
                                            <td>{{$pods->name}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--  END TOP CAMPAIGN-->
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add a subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('addProject')}}">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name of Subject</label>
                        <input type="text" class="form-control" id="recipient-name" name="project">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="addDepart" tabindex="-1" role="dialog" aria-labelledby="addDepartlLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDepartlLabel">Add new Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('addDepart')}}">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name of Department</label>
                        <input type="text" class="form-control" id="recipient-name" name="department">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="addPod" tabindex="-1" role="dialog" aria-labelledby="addPodlLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPodlLabel">Add new Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('addPod')}}">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name of Pod</label>
                        <input type="text" class="form-control" id="recipient-name" name="pod">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
