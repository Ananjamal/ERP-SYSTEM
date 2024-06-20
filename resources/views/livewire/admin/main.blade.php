    {{-- <!-- partial:partials/_sidebar.html -->
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper" >
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-home"></i>
                    </span> Dashboard
                </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <span></span>Overview <i
                                class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{ asset('DashAssets/images/dashboard/circle.svg') }}" class="card-img-absolute"
                                alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Weekly Sales <i
                                    class="mdi mdi-chart-line mdi-24px float-end"></i>
                            </h4>
                            <h2 class="mb-5">$ 15,0000</h2>
                            <h6 class="card-text">Increased by 60%</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{ asset('DashAssets/images/dashboard/circle.svg') }}" class="card-img-absolute"
                                alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Weekly Orders <i
                                    class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                            </h4>
                            <h2 class="mb-5">45,6334</h2>
                            <h6 class="card-text">Decreased by 10%</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-success card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{ asset('DashAssets/images/dashboard/circle.svg') }}" class="card-img-absolute"
                                alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Visitors Online <i
                                    class="mdi mdi-diamond mdi-24px float-end"></i>
                            </h4>
                            <h2 class="mb-5">95,5741</h2>
                            <h6 class="card-text">Increased by 5%</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="clearfix">
                                <h4 class="card-title float-start">Visit And Sales Statistics</h4>
                                <div id="visit-sale-chart-legend"
                                    class="rounded-legend legend-horizontal legend-top-right float-end"></div>
                            </div>
                            <canvas id="visit-sale-chart" class="mt-4"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Traffic Sources</h4>
                            <div class="doughnutjs-wrapper d-flex justify-content-center">
                                <canvas id="traffic-chart"></canvas>
                            </div>
                            <div id="traffic-chart-legend"
                                class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Recent Tickets</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> Assignee </th>
                                            <th> Subject </th>
                                            <th> Status </th>
                                            <th> Last Update </th>
                                            <th> Tracking ID </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('DashAssets/images/faces/face1.jpg') }}"
                                                    class="me-2" alt="image"> David Grey
                                            </td>
                                            <td> Fund is not recieved </td>
                                            <td>
                                                <label class="badge badge-gradient-success">DONE</label>
                                            </td>
                                            <td> Dec 5, 2017 </td>
                                            <td> WD-12345 </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('DashAssets/images/faces/face2.jpg') }}"
                                                    class="me-2" alt="image"> Stella Johnson
                                            </td>
                                            <td> High loading time </td>
                                            <td>
                                                <label class="badge badge-gradient-warning">PROGRESS</label>
                                            </td>
                                            <td> Dec 12, 2017 </td>
                                            <td> WD-12346 </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('DashAssets/images/faces/face3.jpg') }}"
                                                    class="me-2" alt="image"> Marina Michel
                                            </td>
                                            <td> Website down for one week </td>
                                            <td>
                                                <label class="badge badge-gradient-info">ON HOLD</label>
                                            </td>
                                            <td> Dec 16, 2017 </td>
                                            <td> WD-12347 </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('DashAssets/images/faces/face4.jpg') }}"
                                                    class="me-2" alt="image"> John Doe
                                            </td>
                                            <td> Loosing control on server </td>
                                            <td>
                                                <label class="badge badge-gradient-danger">REJECTED</label>
                                            </td>
                                            <td> Dec 3, 2017 </td>
                                            <td> WD-12348 </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body p-0 d-flex">
                            <div id="inline-datepicker" class="datepicker datepicker-custom"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Recent Updates</h4>
                            <div class="d-flex">
                                <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                                    <i class="mdi mdi-account-outline icon-sm me-2"></i>
                                    <span>jack Menqu</span>
                                </div>
                                <div class="d-flex align-items-center text-muted font-weight-light">
                                    <i class="mdi mdi-clock icon-sm me-2"></i>
                                    <span>October 3rd, 2018</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6 pe-1">
                                    <img src="{{ asset('DashAssets/images/dashboard/img_1.jpg') }}"
                                        class="mb-2 mw-100 w-100 rounded" alt="image">
                                    <img src="{{ asset('DashAssets/images/dashboard/img_4.jpg') }}"
                                        class="mw-100 w-100 rounded" alt="image">
                                </div>
                                <div class="col-6 ps-1">
                                    <img src="{{ asset('DashAssets/images/dashboard/img_2.jpg') }}"
                                        class="mb-2 mw-100 w-100 rounded" alt="image">
                                    <img src="{{ asset('DashAssets/images/dashboard/img_3.jpg') }}"
                                        class="mw-100 w-100 rounded" alt="image">
                                </div>
                            </div>
                            <div class="d-flex mt-5 align-items-top">
                                <img src="{{ asset('DashAssets/images/faces/face3.jpg') }}"
                                    class="img-sm rounded-circle me-3" alt="image">
                                <div class="mb-0 flex-grow">
                                    <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                                    <p class="mb-0 font-weight-light">It is a long established fact that a
                                        reader will be distracted by the readable content of a page.</p>
                                </div>
                                <div class="ms-auto">
                                    <i class="mdi mdi-heart-outline text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Project Status</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> Name </th>
                                            <th> Due Date </th>
                                            <th> Progress </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> Herman Beck </td>
                                            <td> May 15, 2015 </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success" role="progressbar"
                                                        style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 2 </td>
                                            <td> Messsy Adam </td>
                                            <td> Jul 01, 2015 </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-danger" role="progressbar"
                                                        style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 3 </td>
                                            <td> John Richards </td>
                                            <td> Apr 12, 2015 </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-warning" role="progressbar"
                                                        style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 4 </td>
                                            <td> Peter Meggik </td>
                                            <td> May 15, 2015 </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-primary" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 5 </td>
                                            <td> Edward </td>
                                            <td> May 03, 2015 </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-danger" role="progressbar"
                                                        style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 5 </td>
                                            <td> Ronald </td>
                                            <td> Jun 05, 2015 </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-info" role="progressbar"
                                                        style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-dark">Todo List</h4>
                            <div class="add-items d-flex">
                                <input type="text" class="form-control todo-list-input"
                                    placeholder="What do you need to do today?">
                                <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                    id="add-task">Add</button>
                            </div>
                            <div class="list-wrapper">
                                <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Meeting with Alisa
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked> Call John
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Create invoice
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Print Statements
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked> Prepare for
                                                presentation </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Pick up kids from
                                                school </label>
                                        </div>
                                        <i class="remove mdi mdi-close-circle-outline"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a
                        href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights
                    reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                    with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends --> --}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                پیشخوان
                <small>پنل مدیریت</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">پیشخوان</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>۱۵۰</h3>
                            <p>سفارش جدید</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>۵۳<sup style="font-size: 20px">%</sup></h3>
                            <p>افزایش آمار</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>۴۴</h3>
                            <p>کاربر ثبت نام کرده</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>۶۵</h3>
                            <p>بازدید کننده یکتا</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div><!-- ./col -->
            </div><!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="nav-tabs-custom">
                        <!-- Tabs within a box -->
                        <ul class="nav nav-tabs pull-right">
                            <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                            <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
                            <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
                        </ul>
                        <div class="tab-content no-padding">
                            <!-- Morris chart - Sales -->
                            <div class="chart tab-pane active" id="revenue-chart"
                                style="position: relative; height: 300px;"></div>
                            <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                            </div>
                        </div>
                    </div><!-- /.nav-tabs-custom -->

                    <!-- Chat box -->
                    <div class="box box-success">
                        <div class="box-header">
                            <i class="fa fa-comments-o"></i>
                            <h3 class="box-title">Chat</h3>
                            <div class="box-tools pull-left" data-toggle="tooltip" title="Status">
                                <div class="btn-group" data-toggle="btn-toggle">
                                    <button type="button" class="btn btn-default btn-sm active"><i
                                            class="fa fa-square text-green"></i></button>
                                    <button type="button" class="btn btn-default btn-sm"><i
                                            class="fa fa-square text-red"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="box-body chat" id="chat-box">
                            <!-- chat item -->
                            <div class="item">
                                <img src="{{ asset('dashboard/dist/img/user4-128x128.jpg') }}" alt="user image"
                                    class="online">
                                <p class="message">
                                    <a href="#" class="name">
                                        <small class="text-muted pull-left"><i class="fa fa-clock-o"></i>
                                            2:15</small>
                                        Mike Doe
                                    </a>
                                    I would like to meet you to discuss the latest news about
                                    the arrival of the new theme. They say it is going to be one the
                                    best themes on the market
                                </p>
                                <div class="attachment">
                                    <h4>Attachments:</h4>
                                    <p class="filename">
                                        Theme-thumbnail-image.jpg
                                    </p>
                                    <div class="pull-left">
                                        <button class="btn btn-primary btn-sm btn-flat">Open</button>
                                    </div>
                                </div><!-- /.attachment -->
                            </div><!-- /.item -->
                            <!-- chat item -->
                            <div class="item">
                                <img src="{{ asset('dashboard/dist/img/user3-128x128.jpg') }}" alt="user image"
                                    class="offline">
                                <p class="message">
                                    <a href="#" class="name">
                                        <small class="text-muted pull-left"><i class="fa fa-clock-o"></i>
                                            5:15</small>
                                        محمد شریفی
                                    </a>
                                    I would like to meet you to discuss the latest news about
                                    the arrival of the new theme. They say it is going to be one the
                                    best themes on the market
                                </p>
                            </div><!-- /.item -->
                            <!-- chat item -->
                            <div class="item">
                                <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" alt="user image"
                                    class="offline">
                                <p class="message">
                                    <a href="#" class="name">
                                        <small class="text-muted pull-left"><i class="fa fa-clock-o"></i>
                                            5:30</small>
                                        Susan Doe
                                    </a>
                                    I would like to meet you to discuss the latest news about
                                    the arrival of the new theme. They say it is going to be one the
                                    best themes on the market
                                </p>
                            </div><!-- /.item -->
                        </div><!-- /.chat -->
                        <div class="box-footer">
                            <div class="input-group">
                                <input class="form-control" placeholder="Type message...">
                                <div class="input-group-btn">
                                    <button class="btn btn-success"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box (chat box) -->

                    <!-- TO DO List -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <i class="ion ion-clipboard"></i>
                            <h3 class="box-title">To Do List</h3>
                            <div class="box-tools pull-left">
                                <ul class="pagination pagination-sm inline">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <ul class="todo-list">
                                <li>
                                    <!-- drag handle -->
                                    <span class="handle">
                                        <i class="fa fa-ellipsis-v"></i>
                                        <i class="fa fa-ellipsis-v"></i>
                                    </span>
                                    <!-- checkbox -->
                                    <input type="checkbox" value="" name="">
                                    <!-- todo text -->
                                    <span class="text">Design a nice theme</span>
                                    <!-- Emphasis label -->
                                    <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                                    <!-- General tools such as edit or delete-->
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fa fa-ellipsis-v"></i>
                                        <i class="fa fa-ellipsis-v"></i>
                                    </span>
                                    <input type="checkbox" value="" name="">
                                    <span class="text">Make the theme responsive</span>
                                    <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fa fa-ellipsis-v"></i>
                                        <i class="fa fa-ellipsis-v"></i>
                                    </span>
                                    <input type="checkbox" value="" name="">
                                    <span class="text">Let theme shine like a star</span>
                                    <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fa fa-ellipsis-v"></i>
                                        <i class="fa fa-ellipsis-v"></i>
                                    </span>
                                    <input type="checkbox" value="" name="">
                                    <span class="text">Let theme shine like a star</span>
                                    <small class="label label-success"><i class="fa fa-clock-o"></i> 3
                                        days</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fa fa-ellipsis-v"></i>
                                        <i class="fa fa-ellipsis-v"></i>
                                    </span>
                                    <input type="checkbox" value="" name="">
                                    <span class="text">Check your messages and notifications</span>
                                    <small class="label label-primary"><i class="fa fa-clock-o"></i> 1
                                        week</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fa fa-ellipsis-v"></i>
                                        <i class="fa fa-ellipsis-v"></i>
                                    </span>
                                    <input type="checkbox" value="" name="">
                                    <span class="text">Let theme shine like a star</span>
                                    <small class="label label-default"><i class="fa fa-clock-o"></i> 1
                                        month</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /.box-body -->
                        <div class="box-footer clearfix no-border">
                            <button class="btn btn-default pull-left"><i class="fa fa-plus"></i> Add item</button>
                        </div>
                    </div><!-- /.box -->

                    <!-- quick email widget -->
                    <div class="box box-info">
                        <div class="box-header">
                            <i class="fa fa-envelope"></i>
                            <h3 class="box-title">Quick Email</h3>
                            <!-- tools box -->
                            <div class="pull-left box-tools">
                                <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                    title="Remove"><i class="fa fa-times"></i></button>
                            </div><!-- /. tools -->
                        </div>
                        <div class="box-body">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="emailto"
                                        placeholder="Email to:">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>
                                <div>
                                    <textarea class="textarea" placeholder="Message"
                                        style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="box-footer clearfix">
                            <button class="pull-left btn btn-default" id="sendEmail">Send <i
                                    class="fa fa-arrow-circle-left"></i></button>
                        </div>
                    </div>

                </section><!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">

                    <!-- Map box -->
                    <div class="box box-solid bg-light-blue-gradient">
                        <div class="box-header">
                            <!-- tools box -->
                            <div class="pull-left box-tools">
                                <button class="btn btn-primary btn-sm daterange pull-left" data-toggle="tooltip"
                                    title="Date range"><i class="fa fa-calendar"></i></button>
                                <button class="btn btn-primary btn-sm pull-left" data-widget="collapse"
                                    data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i
                                        class="fa fa-minus"></i></button>
                            </div><!-- /. tools -->

                            <i class="fa fa-map-marker"></i>
                            <h3 class="box-title">
                                Visitors
                            </h3>
                        </div>
                        <div class="box-body">
                            <div id="world-map" style="height: 250px; width: 100%;"></div>
                        </div><!-- /.box-body-->
                        <div class="box-footer no-border">
                            <div class="row">
                                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                    <div id="sparkline-1"></div>
                                    <div class="knob-label">Visitors</div>
                                </div><!-- ./col -->
                                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                    <div id="sparkline-2"></div>
                                    <div class="knob-label">Online</div>
                                </div><!-- ./col -->
                                <div class="col-xs-4 text-center">
                                    <div id="sparkline-3"></div>
                                    <div class="knob-label">Exists</div>
                                </div><!-- ./col -->
                            </div><!-- /.row -->
                        </div>
                    </div>
                    <!-- /.box -->

                    <!-- solid sales graph -->
                    <div class="box box-solid bg-teal-gradient">
                        <div class="box-header">
                            <i class="fa fa-th"></i>
                            <h3 class="box-title">Sales Graph</h3>
                            <div class="box-tools pull-left">
                                <button class="btn bg-teal btn-sm" data-widget="collapse"><i
                                        class="fa fa-minus"></i></button>
                                <button class="btn bg-teal btn-sm" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body border-radius-none">
                            <div class="chart" id="line-chart" style="height: 250px;"></div>
                        </div><!-- /.box-body -->
                        <div class="box-footer no-border">
                            <div class="row">
                                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                    <input type="text" class="knob" data-readonly="true" value="20"
                                        data-width="60" data-height="60" data-fgColor="#39CCCC">
                                    <div class="knob-label">Mail-Orders</div>
                                </div><!-- ./col -->
                                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                    <input type="text" class="knob" data-readonly="true" value="50"
                                        data-width="60" data-height="60" data-fgColor="#39CCCC">
                                    <div class="knob-label">Online</div>
                                </div><!-- ./col -->
                                <div class="col-xs-4 text-center">
                                    <input type="text" class="knob" data-readonly="true" value="30"
                                        data-width="60" data-height="60" data-fgColor="#39CCCC">
                                    <div class="knob-label">In-Store</div>
                                </div><!-- ./col -->
                            </div><!-- /.row -->
                        </div><!-- /.box-footer -->
                    </div><!-- /.box -->

                    <!-- Calendar -->
                    <div class="box box-solid bg-green-gradient">
                        <div class="box-header">
                            <i class="fa fa-calendar"></i>
                            <h3 class="box-title">Calendar</h3>
                            <!-- tools box -->
                            <div class="pull-left box-tools">
                                <!-- button with a dropdown -->
                                <div class="btn-group">
                                    <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i
                                            class="fa fa-bars"></i></button>
                                    <ul class="dropdown-menu pull-left" role="menu">
                                        <li><a href="#">Add new event</a></li>
                                        <li><a href="#">Clear events</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">View calendar</a></li>
                                    </ul>
                                </div>
                                <button class="btn btn-success btn-sm" data-widget="collapse"><i
                                        class="fa fa-minus"></i></button>
                                <button class="btn btn-success btn-sm" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                            </div><!-- /. tools -->
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <!--The calendar -->
                            <div id="calendar" style="width: 100%"></div>
                        </div><!-- /.box-body -->
                        <div class="box-footer text-black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Progress bars -->
                                    <div class="clearfix">
                                        <span class="pull-right">Task #1</span>
                                        <small class="pull-left">90%</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                                    </div>

                                    <div class="clearfix">
                                        <span class="pull-right">Task #2</span>
                                        <small class="pull-left">70%</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                                    </div>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <div class="clearfix">
                                        <span class="pull-right">Task #3</span>
                                        <small class="pull-left">60%</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                                    </div>

                                    <div class="clearfix">
                                        <span class="pull-right">Task #4</span>
                                        <small class="pull-left">40%</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                                    </div>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div>
                    </div><!-- /.box -->

                </section><!-- right col -->
            </div><!-- /.row (main row) -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
