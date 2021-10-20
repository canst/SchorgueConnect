<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lava Material - Web Application and Website Multipurpose Admin Panel Template</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="index.php" class="logo"><img src="images/logo1.png" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="setting.php" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    
                    </li>
                    <li><a href="hotel-all.php" class="waves-effect"><i class="fa fa-building-o" aria-hidden="true"></i> Hotels</a>
                    </li>
                    <li><a href="package-all.php" class="waves-effect"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                    </li>
                    <li><a href="event-all.php" class="waves-effect"><i class="fa fa-flag-checkered" aria-hidden="true"></i> Events</a>
                    </li>
                    <li><a href="offers.php" class="waves-effect"><i class="fa fa-tags" aria-hidden="true"></i> Offers</a>
                    </li>
                    <li><a href="user-add.php" class="waves-effect"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New User</a>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="fa fa-undo" aria-hidden="true"></i> Backup Data</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="images/placeholder.jpg" alt="">
                        </li>
                        <li>
                            <h5>Victoria Baker <span> Santa Ana, CA</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="index.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="user-all.php">All Users</a>
                                    </li>
                                    <li><a href="user-add.php">Add New user</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="package-all.php">All Packages</a>
                                    </li>
                                    <li><a href="package-add.php">Add New Package</a>
                                    </li>
                                    <li><a href="package-cat-all.php">All Package Categories</a>
                                    </li>
                                    <li><a href="package-cat-add.php">Add Package Categories</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header active"><i class="fa fa-h-square" aria-hidden="true"></i> Hotels</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="hotel-all.php" class="menu-active">All Hotels</a>
                                    </li>
                                    <li><a href="hotel-add.php">Add New Hotel</a>
                                    </li>
                                    <li><a href="hotel-room-type-all.php">Room Type</a>
                                    </li>
                                    <li><a href="hotel-room-type-add.php">Add Room Type</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-picture-o" aria-hidden="true"></i> Sight Seeings</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="sight-see-all.php">All Sight Seeings</a>
                                    </li>
                                    <li><a href="sight-see-add.php">Add New Sight Seeing</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar-o" aria-hidden="true"></i> Events</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="event-all.php">All Events</a>
                                    </li>
                                    <li><a href="event-add.php">Add New Event</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-braille" aria-hidden="true"></i> Ui-Kits</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="ui-form.php">ui-form</a>
                                    </li>
                                    <li><a href="ui-kit.php">ui-kit</a>
                                    </li>
                                    <li><a href="ui-table.php">ui-table</a>
                                    </li>
                                    <li><a href="ui-pre-load.php">ui-pre-load</a>
                                    </li>
                                    <li><a href="ui-tab.php">ui-tab</a>
                                    </li>
                                    <li><a href="ui-icons.php">ui-icons</a>
                                    </li>
                                    <li><a href="ui-collapsible.php">ui-collapsible</a>
                                    </li>
                                </ul>
                            </div>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-usd" aria-hidden="true"></i> Discounts</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="discount.php">All Discounts</a>
                                        </li>
                                        <li><a href="discount-add.php">Add New Discounts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-tags" aria-hidden="true"></i> Offers</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="offers.php">All Offers</a>
                                        </li>
                                        <li><a href="offers-add.php">Add New Offers</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-ticket" aria-hidden="true"></i> Booking & Enquiry</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="hotel-booking-all.php">Hotel</a>
                                        </li>
                                        <li><a href="package-booking-all.php">Package</a>
                                        </li>
                                        <li><a href="sight-see-booking-all.php">Sight Seeings</a>
                                        </li>
                                        <li><a href="event-booking-all.php">Events</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss" aria-hidden="true"></i> Blog & Articals</a>
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="blog-all.php">All Blogs</a>
                                        </li>
                                        <li><a href="blog-add.php">Add Blog</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="social-media.php"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Social Media</a>
                            </li>
                            <li><a href="login.php" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                            </li>
                    </ul>
                </div>
            </div>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Edit Hotel</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Edit Hotel Details</h2>
                    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>

                    <ul class="nav nav-tabs tab-list">
                        <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i> <span>Detail</span></a>
                        </li>
                        <li><a data-toggle="tab" href="#menu1"><i class="fa fa-bed" aria-hidden="true"></i> <span>Room Type</span></a>
                        </li>
                        <li><a data-toggle="tab" href="#menu2"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Photo Gallery</span></a>
                        </li>
                        <li><a data-toggle="tab" href="#menu3"><i class="fa fa-facebook" aria-hidden="true"></i> <span>Social Media</span></a>
                        </li>
                        <li><a data-toggle="tab" href="#menu4"><i class="fa fa-phone" aria-hidden="true"></i> <span>Contact Info</span></a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Listing Information</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="bor">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="list-title" type="text" class="validate">
                                                <label for="list-title">Listing Name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="list-name" type="text" class="validate">
                                                <label for="list-name">Contact Person</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <div class="chips chips-placeholder"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                <label for="textarea1">Listing Descriptions:</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <select multiple>
                                                    <option value="" disabled selected>Choose Category</option>
                                                    <option value="1">Hotels</option>
                                                    <option value="2">Educations</option>
                                                    <option value="3">Medical</option>
                                                    <option value="3">Health</option>
                                                    <option value="3">Fitness</option>
                                                    <option value="3">Tution</option>
                                                    <option value="3">Software</option>
                                                    <option value="3">Wedding</option>
                                                    <option value="3">Party</option>
                                                    <option value="3">Spa/Club</option>
                                                </select>
                                                <label>Select Category</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <select multiple>
                                                    <option value="" disabled selected>Choose Category</option>
                                                    <option value="1">Hotels</option>
                                                    <option value="2">Educations</option>
                                                    <option value="3">Medical</option>
                                                    <option value="3">Health</option>
                                                    <option value="3">Fitness</option>
                                                    <option value="3">Tution</option>
                                                    <option value="3">Software</option>
                                                    <option value="3">Wedding</option>
                                                    <option value="3">Party</option>
                                                    <option value="3">Spa/Club</option>
                                                </select>
                                                <label>Select Sub Category</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Hotel Room Details</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            </div>
                            <div class="bor">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select multiple>
                                                <option value="" disabled selected>Room Type</option>
                                                <option value="1">Deluxe</option>
                                                <option value="2">Premium</option>
                                                <option value="3">Premium Plus</option>
                                                <option value="3">Non-Deluxe</option>
                                                <option value="3">Normal</option>
                                            </select>
                                            <label>Select Category</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="number" class="validate">
                                            <label for="t2-price">Price</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <div class="chips chips-placeholder"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea4" class="materialize-textarea"></textarea>
                                            <label for="textarea4">Listing Descriptions:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>File</span>
                                                    <input type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" placeholder="Upload room image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="bor">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select multiple>
                                                <option value="" disabled selected>Room Type</option>
                                                <option value="1">Deluxe</option>
                                                <option value="2">Premium</option>
                                                <option value="3">Premium Plus</option>
                                                <option value="3">Non-Deluxe</option>
                                                <option value="3">Normal</option>
                                            </select>
                                            <label>Select Category</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="t2-price1" type="number" class="validate">
                                            <label for="t2-price1">Price</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <div class="chips chips-placeholder"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea2" class="materialize-textarea"></textarea>
                                            <label for="textarea2">Listing Descriptions:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>File</span>
                                                    <input type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" placeholder="Upload room image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Photo Gallery</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            </div>
                            <div class="bor">
                                <form action="#">
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Upload">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Social Media</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            </div>
                            <div class="bor">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t4-soc1" type="text" value="http://facebook.com/" class="validate">
                                            <label for="t4-soc1">Facebook Url</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t4-soc2" type="text" value="http://google.com/gplus" class="validate">
                                            <label for="t4-soc2">Google Plus Url</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t4-soc3" type="text" value="http://twitter.com/" class="validate">
                                            <label for="t4-soc3">Twitter Url</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t4-soc4" type="text" value="http://Linkedin.com/" class="validate">
                                            <label for="t4-soc4">Linkedin Url</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t4-soc5" type="text" class="validate">
                                            <label for="t4-soc5">WhatsApp Number</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t4-soc6" type="text" value="http://vk.com/" class="validate">
                                            <label for="t4-soc6">Vk Url</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Upload">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="menu4" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Contact Info</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            </div>
                            <div class="bor">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="t5-n1" type="text" class="validate">
                                            <label for="t5-n1">Contact Name</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="t5-n2" type="text" class="validate">
                                            <label for="t5-n2">Alter Contact Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="t5-n3" type="number" class="validate">
                                            <label for="t5-n3">Phone</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="t5-n4" type="number" class="validate">
                                            <label for="t5-n4">Mobile</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t5-n5" type="email" class="validate">
                                            <label for="t5-n5">Email</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="t5-n6" class="materialize-textarea"></textarea>
                                            <label for="t5-n6">Listing Descriptions:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Upload">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>