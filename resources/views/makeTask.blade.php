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
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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
    <div class="page-container">
        <div class="main-content">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3><a href="">TASKS >></a>&nbsp;New Task
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Create Task</h3>
                        </div>
                        <hr>
                        <form action="{{url('AddTask')}}" method="get" novalidate="novalidate">
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Title</label>
                                <input id="cc-pament" name="title" type="text" class="form-control"
                                       placeholder="Your task title" value="{{old('title')}}">
                            </div>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Description</label>
                                <textarea class="form-control" id="cc-name" name="decs"></textarea>
                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                      data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                <input id="cc-pament" name="status" type="text" class="form-control"
                                       placeholder="Your task title" value="Task">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Validate</label>
                                        <input id="cc-exp" name="exp" type="date"
                                               class="form-control cc-exp" value="{{old('exp')}}" data-val="true"
                                               data-val-required="Please enter the card expiration"
                                               data-val-cc-exp="Please enter a valid month and year"
                                               autocomplete="cc-exp">
                                        <span class="help-block" data-valmsg-for="cc-exp"
                                              data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="x_card_code" class="control-label mb-1">Security code</label>
                                    <div class="input-group">
                                        <input id="x_card_code" name="code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                               data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="x_card_code" class="control-label mb-1">Choose Project</label>
                                        <div class="input-group">
                                            <select class="form-select" aria-label="Default select example" name="project">
                                                @foreach($project as $item)
                                                    <option>{{$item->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fa fa-plus fa-lg"></i>&nbsp;
                                    <span id="payment-button-amount">Add</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script>
    var msg = '{{Session::get('alert')}}';
        {{--var msg1 = '{{Session::get('success')}}';--}}
    var exist = '{{Session::has('alert')}}';
    {{--var exist1 = '{{Session::has('success')}}';--}}
    if (exist) {
        alert(msg);
    }

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
