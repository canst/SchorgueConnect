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
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> Hotels</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="hotel-all.php">All Hotels</a>
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
                        <li><a href="javascript:void(0)" class="collapsible-header active"><i class="fa fa-braille" aria-hidden="true"></i> Ui-Kits</a>
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
                                    <li><a href="ui-icons.php" class="menu-active">ui-icons</a>
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
                        <li class="active-bre"><a href="#"> Ui Form</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Icon Packs</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="row icon-container">
                                        <br>
                                        <br>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">info_outline</i><span>info_outline</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">input</i><span>input</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">invert_colors</i><span>invert_colors</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">label</i><span>label</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">label_outline</i><span>label_outline</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">language</i><span>language</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">query_builder</i><span>query_builder</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">perm_identity</i><span>perm_identity</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">perm_media</i><span>perm_media</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">perm_phone_msg</i><span>perm_phone_msg</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">perm_scan_wifi</i><span>perm_scan_wifi</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">picture_in_picture</i><span>picture_in_picture</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">play_for_work</i><span>play_for_work</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">polymer</i><span>polymer</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">power_settings_new</i><span>power_settings_new</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">print</i><span>print</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">thumb_down</i><span>thumb_down</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">thumb_up</i><span>thumb_up</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">thumbs_up_down</i><span>thumbs_up_down</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">email</i><span>email</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">dialpad</i><span>dialpad</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">dialer_sip</i><span>dialer_sip</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">contacts</i><span>contacts</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">forward_5</i><span>forward_5</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">stay_current_portrait</i><span>stay_current_portrait</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">stay_primary_landscape</i><span>stay_primary_landscape</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">stay_primary_portrait</i><span>stay_primary_portrait</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">swap_calls</i><span>swap_calls</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">textsms</i><span>textsms</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">voicemail</i><span>voicemail</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">vpn_key</i><span>vpn_key</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">group_work</i><span>group_work</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">grade</i><span>grade</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">clear_all</i><span>clear_all</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">chat_bubble_outline</i><span>chat_bubble_outline</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">chat_bubble</i><span>chat_bubble</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">repeat</i><span>repeat</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">repeat_one</i><span>repeat_one</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">replay</i><span>replay</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">replay_10</i><span>replay_10</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">replay_30</i><span>replay_30</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">replay_5</i><span>replay_5</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">shuffle</i><span>shuffle</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">skip_next</i><span>skip_next</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">skip_previous</i><span>skip_previous</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">contact_phone</i><span>contact_phone</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">comment</i><span>comment</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">recent_actors</i><span>recent_actors</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">snooze</i><span>snooze</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">sort_by_alpha</i><span>sort_by_alpha</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">stop</i><span>stop</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">subtitles</i><span>subtitles</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">surround_sound</i><span>surround_sound</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">web</i><span>web</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">volume_up</i><span>volume_up</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">volume_off</i><span>volume_off</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">volume_mute</i><span>volume_mute</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">toc</i><span>toc</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">today</i><span>today</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">toll</i><span>toll</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">track_changes</i><span>track_changes</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">translate</i><span>translate</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">trending_down</i><span>trending_down</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">question_answer</i><span>question_answer</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">receipt</i><span>receipt</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">done</i><span>done</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">tab</i><span>tab</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">tab_unselected</i><span>tab_unselected</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">theaters</i><span>theaters</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">hd</i><span>hd</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">games</i><span>games</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">hearing</i><span>hearing</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">view_module</i><span>view_module</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">view_list</i><span>view_list</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_remote</i><span>settings_remote</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_voice</i><span>settings_voice</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">search</i><span>search</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings</i><span>settings</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_applications</i><span>settings_applications</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_backup_restore</i><span>settings_backup_restore</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_bluetooth</i><span>settings_bluetooth</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_brightness</i><span>settings_brightness</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_cell</i><span>settings_cell</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_ethernet</i><span>settings_ethernet</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_input_antenna</i><span>settings_input_antenna</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">trending_flat</i><span>trending_flat</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">trending_up</i><span>trending_up</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">work</i><span>work</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">youtube_searched_for</i><span>youtube_searched_for</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">zoom_in</i><span>zoom_in</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">my_location</i><span>my_location</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">visibility_off</i><span>visibility_off</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">visibility</i><span>visibility</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">view_week</i><span>view_week</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">view_stream</i><span>view_stream</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">view_quilt</i><span>view_quilt</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">video_library</i><span>video_library</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">videocam</i><span>videocam</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">videocam_off</i><span>videocam_off</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">volume_down</i><span>volume_down</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_overscan</i><span>settings_overscan</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_input_svideo</i><span>settings_input_svideo</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_input_hdmi</i><span>settings_input_hdmi</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_input_composite</i><span>settings_input_composite</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_input_component</i><span>settings_input_component</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">launch</i><span>launch</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">perm_device_information</i><span>perm_device_information</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">perm_data_setting</i><span>perm_data_setting</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">zoom_out</i><span>zoom_out</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">alarm_on</i><span>alarm_on</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">dns</i><span>dns</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">redeem</i><span>redeem</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">reorder</i><span>reorder</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">report_problem</i><span>report_problem</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">restore</i><span>restore</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">room</i><span>room</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">schedule</i><span>schedule</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">movie</i><span>movie</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">android</i><span>android</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">announcement</i><span>announcement</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">mic_off</i><span>mic_off</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">mic_none</i><span>mic_none</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">swap_horiz</i><span>swap_horiz</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">swap_vert</i><span>swap_vert</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">swap_vertical_circle</i><span>swap_vertical_circle</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">system_update_alt</i><span>system_update_alt</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">present_to_all</i><span>present_to_all</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">portable_wifi_off</i><span>portable_wifi_off</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">phonelink_setup</i><span>phonelink_setup</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">phonelink_ring</i><span>phonelink_ring</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">phonelink_lock</i><span>phonelink_lock</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">phonelink_erase</i><span>phonelink_erase</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">person_pin</i><span>person_pin</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">navigation</i><span>navigation</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">new_releases</i><span>new_releases</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">not_interested</i><span>not_interested</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">pause</i><span>pause</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">pause_circle_filled</i><span>pause_circle_filled</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">pause_circle_outline</i><span>pause_circle_outline</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">play_arrow</i><span>play_arrow</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">play_circle_filled</i><span>play_circle_filled</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">play_circle_outline</i><span>play_circle_outline</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">playlist_add</i><span>playlist_add</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">queue</i><span>queue</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">queue_music</i><span>queue_music</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">radio</i><span>radio</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">class</i><span>class</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">code</i><span>code</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">credit_card</i><span>credit_card</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">dashboard</i><span>dashboard</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">delete</i><span>delete</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">description</i><span>description</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">open_with</i><span>open_with</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">pageview</i><span>pageview</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">payment</i><span>payment</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">perm_camera_mic</i><span>perm_camera_mic</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">perm_contact_calendar</i><span>perm_contact_calendar</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">airplay</i><span>airplay</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">done_all</i><span>done_all</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">phone</i><span>phone</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">no_sim</i><span>no_sim</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">invert_colors_off</i><span>invert_colors_off</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">chat</i><span>chat</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">call_split</i><span>call_split</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">call_received</i><span>call_received</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">call_missed</i><span>call_missed</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">call_merge</i><span>call_merge</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">call_made</i><span>call_made</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">call_end</i><span>call_end</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">call</i><span>call</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">business</i><span>business</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">alarm_off</i><span>alarm_off</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">message</i><span>message</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">location_on</i><span>location_on</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">location_off</i><span>location_off</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">live_help</i><span>live_help</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">album</i><span>album</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">av_timer</i><span>av_timer</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">closed_caption</i><span>closed_caption</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">equalizer</i><span>equalizer</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">turned_in_not</i><span>turned_in_not</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">verified_user</i><span>verified_user</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">view_agenda</i><span>view_agenda</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">view_array</i><span>view_array</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">view_carousel</i><span>view_carousel</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">view_column</i><span>view_column</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">subject</i><span>subject</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">supervisor_account</i><span>supervisor_account</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_power</i><span>settings_power</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">shop</i><span>shop</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">shop_two</i><span>shop_two</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">shopping_basket</i><span>shopping_basket</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">shopping_cart</i><span>shopping_cart</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">speaker_notes</i><span>speaker_notes</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">spellcheck</i><span>spellcheck</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">star</i><span>star</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">stars</i><span>stars</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">store</i><span>store</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">ring_volume</i><span>ring_volume</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">speaker_phone</i><span>speaker_phone</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">stay_current_landscape</i><span>stay_current_landscape</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">forum</i><span>forum</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">import_export</i><span>import_export</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">open_in_browser</i><span>open_in_browser</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">open_in_new</i><span>open_in_new</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">forward_30</i><span>forward_30</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">turned_in</i><span>turned_in</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">view_headline</i><span>view_headline</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">view_day</i><span>view_day</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">warning</i><span>warning</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">error_outline</i><span>error_outline</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">error</i><span>error</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">add_alert</i><span>add_alert</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">settings_phone</i><span>settings_phone</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">forward_10</i><span>forward_10</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">fast_rewind</i><span>fast_rewind</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">fast_forward</i><span>fast_forward</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">explicit</i><span>explicit</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">list</i><span>list</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">lock</i><span>lock</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">lock_open</i><span>lock_open</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">lock_outline</i><span>lock_outline</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">loyalty</i><span>loyalty</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">markunread_mailbox</i><span>markunread_mailbox</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">note_add</i><span>note_add</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">offline_pin</i><span>offline_pin</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">http</i><span>http</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">mic</i><span>mic</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">loop</i><span>loop</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">library_music</i><span>library_music</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">library_books</i><span>library_books</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">library_add</i><span>library_add</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">high_quality</i><span>high_quality</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">info</i><span>info</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">https</i><span>https</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">aspect_ratio</i><span>aspect_ratio</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">assessment</i><span>assessment</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">assignment</i><span>assignment</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">assignment_ind</i><span>assignment_ind</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">assignment_late</i><span>assignment_late</span>
                                        </div>
                                        <div class="icon-preview col s6 m3"><i class="material-icons dp48">mode_edit</i><span>mode_edit</span>
                                        </div>


                                    </div>
                                </div>
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