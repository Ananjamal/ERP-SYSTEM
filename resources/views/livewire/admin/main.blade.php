{{--
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
    </div> --}}

<main class="bmd-layout-content">
    <div class="container-fluid ">

        <!-- content -->
        <!-- breadcrumb -->

        <div class="row  m-1 pb-4 mb-3 ">
            <div class="col-xs-12  col-sm-12  col-md-12  col-lg-12 p-2">
                <div class="page-header breadcrumb-header ">
                    <div class="row align-items-end ">
                        <div class="col-lg-8">
                            <div class="page-header-title text-left-rtl">
                                <div class="d-inline">
                                    <h3 class="lite-text" data-ar="اللوحة الرئيسية" data-en="Dashboard">Dashboard</h3>
                                    <span class="lite-text text-gray" data-ar="تقارير وتحليلات"
                                        data-en="Report and analytics">Report and analytics</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" data-ar="لوحة القيادة" data-en="Dashboard">Dashboard
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row m-1 mb-2">
            <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                <div class="box-card mini animate__animated animate__flipInY   "><i class="fab far fa-chart-bar b-first"
                        aria-hidden="true"></i>
                    <span class="c-first" data-ar="معدل الارتداد" data-en="Bounce Rate">Bounce Rate</span>
                    <span>30%</span>
                    <p class="mt-3 mb-1 text-center"><i class="far fas fa-wallet mr-1 c-first"></i>Your main
                        list is
                        growing</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                <div class="box-card mini animate__animated animate__flipInY    "><i class="fab far fa-clock b-second"
                        aria-hidden="true"></i>
                    <span class="c-second" data-ar="الزوار " data-en="Visitors">Visitors</span>
                    <span>27</span>
                    <p class="mt-3 mb-1 text-center"><i class="far fas fa-wifi mr-1 c-second"></i>Your main
                        list is growing</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                <div class="box-card mini animate__animated animate__flipInY   "><i class="fab far fa-comments b-third"
                        aria-hidden="true"></i>
                    <span class="c-third" data-ar="الرسائل " data-en="Messages">Messages</span>
                    <span>5</span>
                    <p class="mt-3 mb-1 text-center"><i class="fab fa-whatsapp mr-1 c-third"></i>Your main
                        list
                        is
                        growing</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                <div class="box-card mini animate__animated animate__flipInY   "><i class="fab far fa-gem b-forth"
                        aria-hidden="true"></i>
                    <span class="c-forth" data-ar="الذي تم جمعه " data-en="Mined">Mined</span>
                    <span>555,223</span>
                    <p class="mt-3 mb-1 text-center"><i class="fab fa-bluetooth mr-1 c-forth"></i>Your main
                        list
                        is
                        growing</p>
                </div>
            </div>
        </div>

        <div class="row m-2 mb-1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-2">
                <div class="alert  alert-third alert-shade alert-dismissible fade show" role="alert">
                    <strong>alert-third!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
        </div>


        <div class="row m-1">
            <div class="col-xs-1 col-sm-1 col-md-8 col-lg-8 p-2">
                <div class="card shade h-100">
                    <div class="card-body">
                        <h5 class="card-title" data-ar="مخطط الشريط/الخط المختلط" data-en="Mixed Bar/line Chart">Mixed
                            Bar/line Chart</h5>

                        <hr>
                        <canvas id="myChart5"></canvas>
                        <hr class="hr-dashed">
                        <p class="text-center c-danger">Example of bar chart</p>
                    </div>

                </div>
            </div>

            <div class="col-xs-1 col-sm-1 col-md-4 col-lg-4 p-2">
                <div class="card flat f-first h-100">
                    <div class="card-body">
                        <h5 class="card-title" data-ar="عنصر واجهة البرنامج للطقس" data-en="Weather Widget">Weather Widget</h5>

                        <hr>
                        <a class="weatherwidget-io" href="https://forecast7.com/en/37d5545d08/urmia/"
                            data-label_1="URMIA" data-label_2="WEATHER" data-icons="Climacons Animated" data-days="5"
                            data-textcolor="#fafafaad"></a>


                    </div>

                </div>
            </div>
        </div>
        <div class="row mb-2 m-2">
            <div class="col-xl-8 col-md-6 col-sm-6 p-2">
                <div class="box-dash h-100 pastel animate__animated animate__flipInY b-second   "><i
                        class="fab far fa-clock" aria-hidden="true"></i>

                    <span>27</span>
                    <hr class="m-0 ">
                    <span data-ar="زوار الأسبوع " data-en="Week Visitors" >Week Visitors</span>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-6 p-2">
                <div class="box-card h-100 flat f-main animate__animated animate__flipInY   ">

                    <iframe
                        src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FTehran"
                        width="100%" height="115" frameborder="0" seamless></iframe>
                </div>
            </div>



        </div>
        <div class="row m-1">
            <div class="col-xs-1 col-sm-1 col-md-4 col-lg-4 p-2">
                <div class="card shade h-100">
                    <div class="card-body">
                        <h5 class="card-title">Doughnut Chart</h5>

                        <hr>
                        <canvas id="myChart4" width="10" height="11"></canvas>
                        <hr class="hr-dashed">
                        <p class="text-center c-danger">Example of Doughnut chart</p>
                    </div>

                </div>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-8 col-lg-8 p-2">
                <div class="card shade h-100">
                    <div class="card-body">
                        <h5 class="card-title">Table Item</h5>

                        <hr>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>


        <div class="row m-1">
            <div class="col-xs-1 col-sm-1 col-md-8 col-lg-8 p-2">
                <div class="alert col-12  alert-success alert-shade-white bd-side alert-dismissible fade show"
                    role="alert">
                    <strong>alert-success!</strong> You should check in on some of those fields below.

                </div>
                <div id="accordion " class="accordion card shade outlined o-forth w-100">
                    <div class="">
                        <div class="card-header mr-3 ml-3 pr-0 pl-0" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link c-grey w-100 m-0 text-left" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                synth nesciunt you probably haven't heard of them accusamus labore
                                sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="card-header mr-3 ml-3 pr-0 pl-0" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link c-grey collapsed w-100 m-0 text-left"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Collapsible Group Item #2
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                synth nesciunt you probably haven't heard of them accusamus labore
                                sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="card-header mr-3 ml-3 pr-0 pl-0" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link c-grey collapsed w-100 m-0 text-left"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Collapsible Group Item #3
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                synth nesciunt you probably haven't heard of them accusamus labore
                                sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 p-2">
                <div class="card shade h-100">
                    <div class="card-body">
                        <h5 class="card-title">Polar Chart</h5>

                        <hr>
                        <canvas id="myChart2" width="10" height="13"></canvas>

                    </div>

                </div>
            </div>

        </div>
    </div>
</main>
