<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Wunder - Bootstrap Material Admin Dashboard Template</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/vendors/material.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/wunder.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="../assets/vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <nav class="sidebar" data-background-color="white">
            <div class="logo">
                <a href="#" class="simple-text">
                    Wunder Admin
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="#" class="simple-text">
                    W
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">
                            <i class="material-icons">dashboard</i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="widgets/widgets.html">
                            <i class="material-icons">apps</i>
                            <p>
                                Widgets
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#charts" class="collapsed" aria-expanded="false">
                            <i class="material-icons">equalizer</i>
                            <p>
                                Charts
                                <i class="material-icons">arrow_drop_down</i>
                            </p>
                        </a>
                        <div class="collapse" id="charts" aria-expanded="false" style="height: 0px;">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="charts/chart-js-charts.html">ChartJS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="charts/flot-charts.html">Flot</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-elements" class="collapsed" aria-expanded="false">
                            <i class="material-icons">extension</i>
                            <p>
                                UI Elements
                                <i class="material-icons">arrow_drop_down</i>
                            </p>
                        </a>
                        <div class="collapse" id="ui-elements" aria-expanded="false" style="height: 0px;">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="ui/accordions.html">Accordions</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui/alerts.html">Alerts</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui/buttons.html">Buttons</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui/colors.html">Colors</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui/grid.html">Grid System</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui/icons.html">Icons</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui/modals.html">Modals</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui/notifications.html">Notifications</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui/tabs.html">Tabs</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui/typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#forms" class="collapsed" aria-expanded="false">
                            <i class="material-icons">border_color</i>
                            <p>
                                Forms
                                <i class="material-icons">arrow_drop_down</i>
                            </p>
                        </a>
                        <div class="collapse" id="forms" aria-expanded="false" style="height: 0px;">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="forms/basic-elements.html">Basic Elements</a></li>
                                <li class="nav-item"><a class="nav-link" href="forms/advanced-elements.html">Advanced Elements</a></li>
                                <li class="nav-item"><a class="nav-link" href="forms/form-validation.html">Form Validation</a></li>
                                <li class="nav-item"><a class="nav-link" href="forms/form-wizard.html">Form Wizard</a></li>
                                <li class="nav-item"><a class="nav-link" href="forms/sample-forms.html">Sample Forms</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#tables" class="collapsed" aria-expanded="false">
                            <i class="material-icons">grid_on</i>
                            <p>
                                Tables
                                <i class="material-icons">arrow_drop_down</i>
                            </p>
                        </a>
                        <div class="collapse" id="tables" aria-expanded="false" style="height: 0px;">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="tables/tables.html">Simple Tables</a></li>
                                <li class="nav-item"><a class="nav-link" href="tables/data-tables.html">Data Tables</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#pages" class="collapsed" aria-expanded="false">
                            <i class="material-icons">content_copy</i>
                            <p>
                                Pages
                                <i class="material-icons">arrow_drop_down</i>
                            </p>
                        </a>
                        <div class="collapse" id="pages" aria-expanded="false" style="height: 0px;">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="sample-pages/template.html">Template</a></li>
                                <li class="nav-item"><a class="nav-link" href="sample-pages/user-profile.html">User Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="sample-pages/login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="sample-pages/signup.html">Sign Up</a></li>
                                <li class="nav-item"><a class="nav-link" href="sample-pages/pricing-table.html">Pricing Table</a></li>
                                <li class="nav-item"><a class="nav-link" href="sample-pages/invoice.html">Invoice</a></li>
                                <li class="nav-item"><a class="nav-link" href="sample-pages/help-faqs.html">Help & FAQs</a></li>
                                <li class="nav-item"><a class="nav-link" href="sample-pages/timeline.html">Timeline</a></li>
                                <li class="nav-item"><a class="nav-link" href="sample-pages/404.html">404</a></li>
                                <li class="nav-item"><a class="nav-link" href="sample-pages/500.html">500</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calendar/calendar.html">
                            <i class="material-icons">date_range</i>
                            <p>
                                Calendar
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="docs/documentation.html">
                            <i class="material-icons">library_books</i>
                            <p>
                                Documentation
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="main-panel">
            <nav class="navbar navbar-toggleable-md navbar-default navbar-absolute navbar-inverse" data-topbar-color="blue">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
					              <i class="material-icons visible-on-sidebar-regular f-26">keyboard_arrow_left</i>
                        <i class="material-icons visible-on-sidebar-mini f-26">keyboard_arrow_right</i>
                    </button>
                </div>
                <div class="navbar-header d-flex">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                    <a class="navbar-brand" href="#"> Dashboard </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">6</span>
                                <p class="hidden-lg-up">
                                    Notifications
                                    <i class="material-icons">arrow_drop_down</i>
                                </p>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">You have 5 new messages</a>
                                <a class="dropdown-item" href="#">You're now friend with Mike</a>
                                <a class="dropdown-item" href="#">Wish Mary on her birthday!</a>
                                <a class="dropdown-item" href="#">5 warnings in Server Console</a>
                                <a class="dropdown-item" href="#">Jane completed 'Induction Training'</a>
                                <a class="dropdown-item" href="#">'Prepare Marketing Report' is overdue</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#pablo" class="nav-link" data-toggle="dropdown">
                                <i class="material-icons">apps</i>
                                <p class="hidden-lg-up">Apps</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#pablo" class="nav-link" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg-up">Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#pablo" class="nav-link" data-toggle="dropdown">
                                <i class="material-icons">settings</i>
                                <p class="hidden-lg-up">Settings</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg-up"></li>
                    </ul>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-lg-4 pr-lg-5 dashboard-demo-graph">
                                    <h4 class="card-title">Product-wise Sales</h4>
                                    <p class="category mb-3">
                                      Your top performing products.
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Product A</td>
                                                    <td class="text-right">
                                                        2.920
                                                    </td>
                                                    <td class="text-right">
                                                        53.23%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Product B</td>
                                                    <td class="text-right">
                                                        1.300
                                                    </td>
                                                    <td class="text-right">
                                                        20.43%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Product C</td>
                                                    <td class="text-right">
                                                        760
                                                    </td>
                                                    <td class="text-right">
                                                        10.35%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Product D</td>
                                                    <td class="text-right">
                                                        690
                                                    </td>
                                                    <td class="text-right">
                                                        7.87%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Product E</td>
                                                    <td class="text-right">
                                                        600
                                                    </td>
                                                    <td class="text-right">
                                                        5.94%
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-5 pl-lg-5 pr-lg-5 dashboard-demo-graph">
                                    <h4 class="card-title">Weekly Sales Trend</h4>
                                    <p class="category mb-3">
                                      See how you performed in the past week.
                                    </p>
                                    <div class="chart-edge">
                                        <div id="area-chart" class="demo-placeholder"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 pl-lg-5 pr-lg-3">
                                    <div class="statistic-box">
                                        <h4 class="card-title">
                                          Sales - Region-wise
                                        </h4>
                                        <p class="category mb-3">
                                            Compare sales by region.
                                        </p>
                                        <div class="row text-center">
                                            <div class="col-xl-12">
                                                <div id="dash1-sales-chart" class="chart mb-4">
                                                    <canvas id="doughnutChart" height="500" width="498" style="display: block; width: 498px; height: 500px;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card" style="min-height: 465px">
                                <div class="card-header card-header-icon">
                                    <i class="material-icons">timeline</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title ">Sales Trend
                                    </h4>
                                    <div class="table-tasks table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <tr>
                                                    <th>Domain</th>
                                                    <th>Status</th>
                                                    <th>Auto Renewal</th>
                                                    <th>Expiry Date</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>abcd.com</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                        <label class="checkbox">
    															                        <input type="checkbox" value="" data-toggle="checkbox">
    														                        </label>
                                                    </td>
                                                    <td>Mar 7, 2018</td>
                                                    <td><button class="btn btn-info btn-fill btn-sm">Manage</button></td>
                                                </tr>
                                                <tr>
                                                    <td>abcd.com</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                        <label class="checkbox">
    															                          <input type="checkbox" value="" data-toggle="checkbox">
    														                        </label>
                                                    </td>
                                                    <td>Mar 7, 2018</td>
                                                    <td><button class="btn btn-info btn-fill btn-sm">Manage</button></td>
                                                </tr>
                                                <tr>
                                                    <td>abcd.com</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                        <label class="checkbox">
                                                          <input type="checkbox" value="" data-toggle="checkbox">
                                                        </label>
                                                    </td>
                                                    <td>Mar 7, 2018</td>
                                                    <td><button class="btn btn-info btn-fill btn-sm">Manage</button></td>
                                                </tr>
                                                <tr>
                                                    <td>abcd.com</td>
                                                    <td><span class="badge badge-danger">Expired</span></td>
                                                    <td>
                                                        <label class="checkbox">
    															                          <input type="checkbox" value="" data-toggle="checkbox">
    														                        </label>
                                                    </td>
                                                    <td>Mar 7, 2018</td>
                                                    <td><button class="btn btn-info btn-fill btn-sm">Manage</button></td>
                                                </tr>
                                                <tr>
                                                    <td>abcd.com</td>
                                                    <td><span class="badge badge-danger">Expired</span></td>
                                                    <td>
                                                        <label class="checkbox">
    															                          <input type="checkbox" value="" data-toggle="checkbox">
    														                        </label>
                                                    </td>
                                                    <td>Mar 7, 2018</td>
                                                    <td><button class="btn btn-info btn-fill btn-sm">Manage</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="min-height: 465px">
                                <div class="card-header">
                                    <h4 class="card-title float-left">Task List</h4>
                                    <div class="dropdown float-right">
                                        <button type="button " class="btn btn-round btn-info dropdown-toggle mt-1" data-toggle="dropdown">
                                          <i class="material-icons ">build</i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a href="#action" class="dropdown-item">Action</a>
                                            <a href="#action" class="dropdown-item">Another action</a>
                                            <a href="#here" class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#link" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <table class="table table-top-aligned">
                                        <tbody>
                                            <tr>
                                                <td class="p-l-8">
                                                    <div class="checkbox">
                                                        <label>
                                                                  <input type="checkbox" name="optionsCheckboxes" checked>
                                                              </label>
                                                    </div>
                                                </td>
                                                <td>Create Annual Training Plan. Get it reviewed by Mike</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs ">
                                                              <i class="material-icons">edit</i>
                                                          </button>
                                                    <button type="button" rel="tooltip" title="Remove " class="btn btn-danger btn-simple btn-xs ">
                                                              <i class="material-icons">close</i>
                                                          </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-l-8">
                                                    <div class="checkbox">
                                                        <label>
                                                                  <input type="checkbox" name="optionsCheckboxes ">
                                                              </label>
                                                    </div>
                                                </td>
                                                <td>Create Tutorials for Induction Training</td>
                                                <td class="td-actions text-right ">
                                                    <button type="button" rel="tooltip " title="Edit Task " class="btn btn-primary btn-simple btn-xs ">
                                                              <i class="material-icons ">edit</i>
                                                          </button>
                                                    <button type="button" rel="tooltip " title="Remove " class="btn btn-danger btn-simple btn-xs ">
                                                              <i class="material-icons ">close</i>
                                                          </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-l-8">
                                                    <div class="checkbox">
                                                        <label>
                                                                  <input type="checkbox" name="optionsCheckboxes ">
                                                              </label>
                                                    </div>
                                                </td>
                                                <td>Complete wireframe for HR Portal by end of December
                                                </td>
                                                <td class="td-actions text-right ">
                                                    <button type="button" rel="tooltip " title="Edit Task " class="btn btn-primary btn-simple btn-xs ">
                                                              <i class="material-icons ">edit</i>
                                                          </button>
                                                    <button type="button" rel="tooltip " title="Remove " class="btn btn-danger btn-simple btn-xs ">
                                                              <i class="material-icons ">close</i>
                                                          </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-l-8">
                                                    <div class="checkbox">
                                                        <label>
                                                                  <input type="checkbox" name="optionsCheckboxes " checked>
                                                              </label>
                                                    </div>
                                                </td>
                                                <td>Recruit five developers and get them trained on the new project</td>
                                                <td class="td-actions text-right ">
                                                    <button type="button" rel="tooltip " title="Edit Task " class="btn btn-primary btn-simple btn-xs ">
                                                              <i class="material-icons ">edit</i>
                                                          </button>
                                                    <button type="button" rel="tooltip " title="Remove " class="btn btn-danger btn-simple btn-xs ">
                                                              <i class="material-icons ">close</i>
                                                          </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-8 col-md-12 ">
                            <div class="card " style="min-height: 495px">
                                <div class="card-header card-header-text ">
                                    <h4 class="card-title ">Employees Stats</h4>
                                    <p class="category ">New employees on 15th December, 2016</p>
                                </div>
                                <div class="card-content table-responsive ">
                                    <table class="table table-hover ">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Bob Williams</td>
                                                <td>$23,566</td>
                                                <td>USA</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Mike Tyson</td>
                                                <td>$10,200</td>
                                                <td>Canada</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Tim Sebastian</td>
                                                <td>$32,190</td>
                                                <td>Netherlands</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Philip Morris</td>
                                                <td>$31,123</td>
                                                <td>Korea, South</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>South Africa</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Hulk Hogan</td>
                                                <td>$43,120</td>
                                                <td>Netherlands</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Angelina Jolie </td>
                                                <td>$12,140</td>
                                                <td>Australia</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 ">
                            <div class="card " style="min-height: 495px ">
                                <div class="card-header ">
                                    <h4 class="card-title ">Activities</h4>
                                </div>
                                <div class="card-content ">
                                    <div class="streamline ">
                                        <div class="sl-item sl-primary ">
                                            <div class="sl-content ">
                                                <small class="text-muted ">5 mins ago</small>
                                                <p>Williams has just joined Project X</p>
                                            </div>
                                        </div>
                                        <div class="sl-item sl-danger ">
                                            <div class="sl-content ">
                                                <small class="text-muted ">25 mins ago</small>
                                                <p>Jane has sent a request for access to the project folder</p>
                                            </div>
                                        </div>
                                        <div class="sl-item sl-success ">
                                            <div class="sl-content ">
                                                <small class="text-muted ">40 mins ago</small>
                                                <p>Kate added you to her team</p>
                                            </div>
                                        </div>
                                        <div class="sl-item ">
                                            <div class="sl-content ">
                                                <small class="text-muted ">45 minutes ago</small>
                                                <p>John has finished his task</p>
                                            </div>
                                        </div>
                                        <div class="sl-item sl-warning ">
                                            <div class="sl-content ">
                                                <small class="text-muted ">55 mins ago</small>
                                                <p>Jim shared a folder with you</p>
                                            </div>
                                        </div>
                                        <div class="sl-item ">
                                            <div class="sl-content ">
                                                <small class="text-muted ">60 minutes ago</small>
                                                <p>John has finished his task</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 ">
                            <div class="card ">
                                <div class="card-header card-header-icon ">
                                    <i class="material-icons ">language</i>
                                </div>
                                <div class="card-content ">
                                    <h4 class="card-title ">Global Sales by Top Locations</h4>
                                    <div class="row ">
                                        <div class="col-lg-5 ">
                                            <div class="table-responsive">
                                                <table class="table ">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="flag ">
                                                                    <img src="../assets/img/flags/US.png ">
                                                                </div>
                                                            </td>
                                                            <td>USA</td>
                                                            <td class="text-right ">
                                                                2.920
                                                            </td>
                                                            <td class="text-right ">
                                                                53.23%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag ">
                                                                    <img src="../assets/img/flags/DE.png ">
                                                                </div>
                                                            </td>
                                                            <td>Germany</td>
                                                            <td class="text-right ">
                                                                1.300
                                                            </td>
                                                            <td class="text-right ">
                                                                20.43%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag ">
                                                                    <img src="../assets/img/flags/AU.png ">
                                                                </div>
                                                            </td>
                                                            <td>Australia</td>
                                                            <td class="text-right ">
                                                                760
                                                            </td>
                                                            <td class="text-right ">
                                                                10.35%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag ">
                                                                    <img src="../assets/img/flags/GB.png ">
                                                                </div>
                                                            </td>
                                                            <td>United Kingdom</td>
                                                            <td class="text-right ">
                                                                690
                                                            </td>
                                                            <td class="text-right ">
                                                                7.87%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag ">
                                                                    <img src="../assets/img/flags/RO.png ">
                                                                </div>
                                                            </td>
                                                            <td>Romania</td>
                                                            <td class="text-right ">
                                                                600
                                                            </td>
                                                            <td class="text-right ">
                                                                5.94%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag ">
                                                                    <img src="../assets/img/flags/BR.png ">
                                                                </div>
                                                            </td>
                                                            <td>Brasil</td>
                                                            <td class="text-right ">
                                                                550
                                                            </td>
                                                            <td class="text-right ">
                                                                4.34%
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 offset-lg-1 ">
                                            <div id="worldMap" class="map"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer ">
                <div class="container ">
                    <nav class="float-left ">
                        <ul>
                            <li>
                                <a href="# ">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="# ">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="# ">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="# ">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright float-right ">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="# ">Wunder</a> BootStrap Admin Dashboard
                    </p>
                </div>
            </footer>
        </div>
        <div class="fixed-plugin ">
            <div class="dropdown show-dropdown">
                <a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-cog fa-2x "> </i>
                </a>
                <div class="dropdown-menu">

                        <a href="javascript:void(0) " class="adjustments-line dropdown-item switch-trigger active-color ">
                          <h6 class="header-title dropdown-header"> Topbar Filters</h6>

                            <div class="badge-colors text-center ">
                                <span class="badge filter badge-default " data-color="default"></span>
                                <span class="badge filter badge-blue" data-color="blue"></span>
                                <span class="badge filter badge-green" data-color="green"></span>
                                <span class="badge filter badge-yellow" data-color="yellow"></span>
                                <span class="badge filter badge-red" data-color="red"></span>
                                <span class="badge filter badge-white" data-color="white"></span>
                            </div>
                            <div class="clearfix "></div>
                        </a>
                        <a href="javascript:void(0)" class="adjustments-line dropdown-item switch-trigger background-color">
                          <h6 class="header-title dropdown-header">Sidebar Background</h6>

                            <div class="text-center">
                                <span class="badge filter badge-gray" data-color="gray"></span>
                                <span class="badge filter badge-white active" data-color="default"></span>
                            </div>
                            <div class="clearfix "></div>
                        </a>
                        <a href="javascript:void(0) " class="adjustments-line switch-trigger">
                            <p>Sidebar Mini</p>
                            <div class="togglebutton switch-sidebar-mini">
                                <label>
									                  <input type="checkbox" unchecked>
                                    <span class="toggle"></span>
								                </label>
                            </div>
                            <div class="clearfix "></div>
                        </a>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/vendors/jquery-3.1.1.min.js " type="text/javascript "></script>
<script src="../assets/vendors/jquery-ui.min.js " type="text/javascript "></script>
<script src="../assets/vendors/tether.min.js" type="text/javascript"></script>
<script src="../assets/vendors/bootstrap.min.js " type="text/javascript "></script>
<script src="../assets/vendors/perfect-scrollbar.jquery.min.js " type="text/javascript "></script>
<!-- Forms Validations Plugin -->
<script src="../assets/vendors/jquery.validate.min.js "></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../assets/vendors/moment.min.js "></script>
<!--  Charts Plugin -->
<script src="../assets/vendors/charts/flot/jquery.flot.js "></script>
<script src="../assets/vendors/charts/flot/jquery.flot.resize.js "></script>
<script src="../assets/vendors/charts/flot/jquery.flot.pie.js "></script>
<script src="../assets/vendors/charts/flot/jquery.flot.stack.js "></script>
<script src="../assets/vendors/charts/flot/jquery.flot.categories.js "></script>
<script src="../assets/vendors/charts/chartjs/Chart.min.js " type="text/javascript "></script>

<!--  Plugin for the Wizard -->
<script src="../assets/vendors/jquery.bootstrap-wizard.js "></script>
<!--  Notifications Plugin    -->
<script src="../assets/vendors/bootstrap-notify.js "></script>
<!-- DateTimePicker Plugin -->
<script src="../assets/vendors/bootstrap-datetimepicker.js "></script>
<!-- Vector Map plugin -->
<script src="../assets/vendors/jquery-jvectormap.js "></script>
<!-- Sliders Plugin -->
<script src="../assets/vendors/nouislider.min.js "></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="../assets/vendors/jquery.select-bootstrap.js "></script>
<!-- Sweet Alert 2 plugin -->
<script src="../assets/vendors/sweetalert/sweetalert2.min.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../assets/vendors/jasny-bootstrap.min.js "></script>
<!--  Full Calendar Plugin    -->
<script src="../assets/vendors/fullcalendar.min.js "></script>
<!-- TagsInput Plugin -->
<script src="../assets/vendors/jquery.tagsinput.js "></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/wunder.min.js "></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.min.js "></script>
<script src="../assets/js/charts/flot-charts.min.js "></script>
<script src="../assets/js/charts/chartjs-charts.min.js "></script>
</html>