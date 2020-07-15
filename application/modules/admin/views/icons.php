<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/vendor.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
            }
        </script>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse d-lg-none d-xl-none">
                        <button class="collapse-btn" id="sidebar-collapse-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="header-block header-block-search">
                        <form role="search">
                            <div class="input-container">
                                <i class="fa fa-search"></i>
                                <input type="search" placeholder="Search">
                                <div class="underline"></div>
                            </div>
                        </form>
                    </div>
                    <div class="header-block header-block-buttons">
                        <a href="https://github.com/modularcode/modular-admin-html" class="btn btn-sm header-btn">
                            <i class="fa fa-github-alt"></i>
                            <span>View on GitHub</span>
                        </a>
                        <a href="https://github.com/modularcode/modular-admin-html/stargazers" class="btn btn-sm header-btn">
                            <i class="fa fa-star"></i>
                            <span>Star Us</span>
                        </a>
                        <a href="https://github.com/modularcode/modular-admin-html/releases" class="btn btn-sm header-btn">
                            <i class="fa fa-cloud-download"></i>
                            <span>Download .zip</span>
                        </a>
                    </div>
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="notifications new">
                                <a href="" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <sup>
                                        <span class="counter">8</span>
                                    </sup>
                                </a>
                                <div class="dropdown-menu notifications-dropdown-menu">
                                    <ul class="notifications-container">
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p>
                                                        <span class="accent">Zack Alien</span> pushed new commit: <span class="accent">Fix page load performance issue</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/5.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p>
                                                        <span class="accent">Amaya Hatsumi</span> started new task: <span class="accent">Dashboard UI design.</span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="notification-item">
                                                <div class="img-col">
                                                    <div class="img" style="background-image: url('assets/faces/8.jpg')"></div>
                                                </div>
                                                <div class="body-col">
                                                    <p>
                                                        <span class="accent">Andy Nouman</span> deployed new version of <span class="accent">NodeJS REST Api V3</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <footer>
                                        <ul>
                                            <li>
                                                <a href=""> View All </a>
                                            </li>
                                        </ul>
                                    </footer>
                                </div>
                            </li>
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40')">
                                    </div>
                                    <span class="name"> John Doe </span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-user icon"></i> Profile </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-bell icon"></i> Notifications </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-gear icon"></i> Settings </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="login.html">
                                        <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo">
                                    <span class="l l1"></span>
                                    <span class="l l2"></span>
                                    <span class="l l3"></span>
                                    <span class="l l4"></span>
                                    <span class="l l5"></span>
                                </div> Modular Admin
                            </div>
                        </div>
                        <nav class="menu">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-th-large"></i> Items Manager <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="items-list.html"> Items List </a>
                                        </li>
                                        <li>
                                            <a href="item-editor.html"> Item Editor </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-area-chart"></i> Charts <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="charts-flot.html"> Flot Charts </a>
                                        </li>
                                        <li>
                                            <a href="charts-morris.html"> Morris Charts </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-table"></i> Tables <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="static-tables.html"> Static Tables </a>
                                        </li>
                                        <li>
                                            <a href="responsive-tables.html"> Responsive Tables </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="forms.html">
                                        <i class="fa fa-pencil-square-o"></i> Forms </a>
                                </li>
                                <li class="active open">
                                    <a href="">
                                        <i class="fa fa-desktop"></i> UI Elements <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="buttons.html"> Buttons </a>
                                        </li>
                                        <li>
                                            <a href="cards.html"> Cards </a>
                                        </li>
                                        <li>
                                            <a href="typography.html"> Typography </a>
                                        </li>
                                        <li class="active">
                                            <a href="icons.html"> Icons </a>
                                        </li>
                                        <li>
                                            <a href="grid.html"> Grid </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-file-text-o"></i> Pages <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="login.html"> Login </a>
                                        </li>
                                        <li>
                                            <a href="signup.html"> Sign Up </a>
                                        </li>
                                        <li>
                                            <a href="reset.html"> Reset </a>
                                        </li>
                                        <li>
                                            <a href="error-404.html"> Error 404 App </a>
                                        </li>
                                        <li>
                                            <a href="error-404-alt.html"> Error 404 Global </a>
                                        </li>
                                        <li>
                                            <a href="error-500.html"> Error 500 App </a>
                                        </li>
                                        <li>
                                            <a href="error-500-alt.html"> Error 500 Global </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-sitemap"></i> Menu Levels <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="#"> Second Level Item <i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="#"> Third Level Item </a>
                                                </li>
                                                <li>
                                                    <a href="#"> Third Level Item </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"> Second Level Item </a>
                                        </li>
                                        <li>
                                            <a href="#"> Second Level Item <i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="#"> Third Level Item </a>
                                                </li>
                                                <li>
                                                    <a href="#"> Third Level Item </a>
                                                </li>
                                                <li>
                                                    <a href="#"> Third Level Item <i class="fa arrow"></i>
                                                    </a>
                                                    <ul class="sidebar-nav">
                                                        <li>
                                                            <a href="#"> Fourth Level Item </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Fourth Level Item </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="screenful.html">
                                        <i class="fa fa-bar-chart"></i> Agile Metrics <span class="label label-screenful">by Screenful</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/modularcode/modular-admin-html">
                                        <i class="fa fa-github-alt"></i> Theme Docs </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <footer class="sidebar-footer">
                        <ul class="sidebar-menu metismenu" id="customize-menu">
                            <li>
                                <ul>
                                    <li class="customize">
                                        <div class="customize-item">
                                            <div class="row customize-header">
                                                <div class="col-4">
                                                </div>
                                                <div class="col-4">
                                                    <label class="title">fixed</label>
                                                </div>
                                                <div class="col-4">
                                                    <label class="title">static</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="title">Sidebar:</label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="sidebarPosition" value="">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="title">Header:</label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="headerPosition" value="">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="title">Footer:</label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <label>
                                                        <input class="radio" type="radio" name="footerPosition" value="">
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="customize-item">
                                            <ul class="customize-colors">
                                                <li>
                                                    <span class="color-item color-red" data-theme="red"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-orange" data-theme="orange"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-green active" data-theme=""></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-seagreen" data-theme="seagreen"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-blue" data-theme="blue"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-purple" data-theme="purple"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <a href="">
                                    <i class="fa fa-cog"></i> Customize </a>
                            </li>
                        </ul>
                    </footer>
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content icons-page">
                    <div class="title-block">
                        <h3 class="title"> Icons </h3>
                        <p class="title-description"> Font Awesome gives you scalable vector icons that can instantly be customized </p>
                    </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Web Application Icons </h3>
                                        </div>
                                        <section class="section">
                                            <div class="row list-icon">
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-adjust"></em>fa-adjust</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-anchor"></em>fa-anchor</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-archive"></em>fa-archive</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrows"></em>fa-arrows</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrows-h"></em>fa-arrows-h</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrows-v"></em>fa-arrows-v</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-asterisk"></em>fa-asterisk</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-ban"></em>fa-ban</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bar-chart-o"></em>fa-bar-chart-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-barcode"></em>fa-barcode</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bars"></em>fa-bars</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-beer"></em>fa-beer</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bell"></em>fa-bell</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bell-o"></em>fa-bell-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bolt"></em>fa-bolt</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-book"></em>fa-book</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bookmark"></em>fa-bookmark</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bookmark-o"></em>fa-bookmark-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-briefcase"></em>fa-briefcase</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bug"></em>fa-bug</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-building-o"></em>fa-building-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bullhorn"></em>fa-bullhorn</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bullseye"></em>fa-bullseye</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-calendar"></em>fa-calendar</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-calendar-o"></em>fa-calendar-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-camera"></em>fa-camera</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-camera-retro"></em>fa-camera-retro</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-caret-square-o-down"></em>fa-caret-square-o-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-caret-square-o-left"></em>fa-caret-square-o-left</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-caret-square-o-right"></em>fa-caret-square-o-right</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-caret-square-o-up"></em>fa-caret-square-o-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-certificate"></em>fa-certificate</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-check"></em>fa-check</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-check-circle"></em>fa-check-circle</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-check-circle-o"></em>fa-check-circle-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-check-square"></em>fa-check-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-check-square-o"></em>fa-check-square-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-circle"></em>fa-circle</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-circle-o"></em>fa-circle-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-clock-o"></em>fa-clock-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-cloud"></em>fa-cloud</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-cloud-download"></em>fa-cloud-download</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-cloud-upload"></em>fa-cloud-upload</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-code"></em>fa-code</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-code-fork"></em>fa-code-fork</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-coffee"></em>fa-coffee</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-cog"></em>fa-cog</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-cogs"></em>fa-cogs</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-comment"></em>fa-comment</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-comment-o"></em>fa-comment-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-comments"></em>fa-comments</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-comments-o"></em>fa-comments-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-compass"></em>fa-compass</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-credit-card"></em>fa-credit-card</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-crop"></em>fa-crop</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-crosshairs"></em>fa-crosshairs</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-cutlery"></em>fa-cutlery</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-dashboard"></em>fa-dashboard <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-desktop"></em>fa-desktop</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-dot-circle-o"></em>fa-dot-circle-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-download"></em>fa-download</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-edit"></em>fa-edit <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-ellipsis-h"></em>fa-ellipsis-h</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-ellipsis-v"></em>fa-ellipsis-v</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-envelope"></em>fa-envelope</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-envelope-o"></em>fa-envelope-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-eraser"></em>fa-eraser</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-exchange"></em>fa-exchange</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-exclamation"></em>fa-exclamation</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-exclamation-circle"></em>fa-exclamation-circle</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-exclamation-triangle"></em>fa-exclamation-triangle</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-external-link"></em>fa-external-link</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-external-link-square"></em>fa-external-link-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-eye"></em>fa-eye</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-eye-slash"></em>fa-eye-slash</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-female"></em>fa-female</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-fighter-jet"></em>fa-fighter-jet</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-film"></em>fa-film</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-filter"></em>fa-filter</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-fire"></em>fa-fire</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-fire-extinguisher"></em>fa-fire-extinguisher</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-flag"></em>fa-flag</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-flag-checkered"></em>fa-flag-checkered</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-flag-o"></em>fa-flag-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-flash"></em>fa-flash <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-flask"></em>fa-flask</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-folder"></em>fa-folder</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-folder-o"></em>fa-folder-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-folder-open"></em>fa-folder-open</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-folder-open-o"></em>fa-folder-open-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-frown-o"></em>fa-frown-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-gamepad"></em>fa-gamepad</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-gavel"></em>fa-gavel</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-gear"></em>fa-gear <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-gears"></em>fa-gears <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-gift"></em>fa-gift</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-glass"></em>fa-glass</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-globe"></em>fa-globe</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-group"></em>fa-group <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-hdd-o"></em>fa-hdd-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-headphones"></em>fa-headphones</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-heart"></em>fa-heart</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-heart-o"></em>fa-heart-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-home"></em>fa-home</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-inbox"></em>fa-inbox</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-info"></em>fa-info</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-info-circle"></em>fa-info-circle</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-key"></em>fa-key</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-keyboard-o"></em>fa-keyboard-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-laptop"></em>fa-laptop</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-leaf"></em>fa-leaf</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-legal"></em>fa-legal <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-lemon-o"></em>fa-lemon-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-level-down"></em>fa-level-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-level-up"></em>fa-level-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-lightbulb-o"></em>fa-lightbulb-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-location-arrow"></em>fa-location-arrow</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-lock"></em>fa-lock</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-magic"></em>fa-magic</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-magnet"></em>fa-magnet</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-mail-forward"></em>fa-mail-forward <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-mail-reply"></em>fa-mail-reply <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-mail-reply-all"></em>fa-mail-reply-all</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-male"></em>fa-male</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-map-marker"></em>fa-map-marker</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-meh-o"></em>fa-meh-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-microphone"></em>fa-microphone</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-microphone-slash"></em>fa-microphone-slash</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-minus"></em>fa-minus</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-minus-circle"></em>fa-minus-circle</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-minus-square"></em>fa-minus-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-minus-square-o"></em>fa-minus-square-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-mobile"></em>fa-mobile</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-mobile-phone"></em>fa-mobile-phone <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-money"></em>fa-money</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-moon-o"></em>fa-moon-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-music"></em>fa-music</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-pencil"></em>fa-pencil</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-pencil-square"></em>fa-pencil-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-pencil-square-o"></em>fa-pencil-square-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-phone"></em>fa-phone</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-phone-square"></em>fa-phone-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-picture-o"></em>fa-picture-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-plane"></em>fa-plane</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-plus"></em>fa-plus</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-plus-circle"></em>fa-plus-circle</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-plus-square"></em>fa-plus-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-plus-square-o"></em>fa-plus-square-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-power-off"></em>fa-power-off</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-print"></em>fa-print</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-puzzle-piece"></em>fa-puzzle-piece</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-qrcode"></em>fa-qrcode</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-question"></em>fa-question</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-question-circle"></em>fa-question-circle</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-quote-left"></em>fa-quote-left</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-quote-right"></em>fa-quote-right</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-random"></em>fa-random</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-refresh"></em>fa-refresh</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-reply"></em>fa-reply</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-reply-all"></em>fa-reply-all</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-retweet"></em>fa-retweet</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-road"></em>fa-road</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-rocket"></em>fa-rocket</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-rss"></em>fa-rss</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-rss-square"></em>fa-rss-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-search"></em>fa-search</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-search-minus"></em>fa-search-minus</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-search-plus"></em>fa-search-plus</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-share"></em>fa-share</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-share-square"></em>fa-share-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-share-square-o"></em>fa-share-square-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-shield"></em>fa-shield</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-shopping-cart"></em>fa-shopping-cart</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sign-in"></em>fa-sign-in</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sign-out"></em>fa-sign-out</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-signal"></em>fa-signal</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sitemap"></em>fa-sitemap</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-smile-o"></em>fa-smile-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sort"></em>fa-sort</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sort-alpha-asc"></em>fa-sort-alpha-asc</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sort-alpha-desc"></em>fa-sort-alpha-desc</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sort-amount-asc"></em>fa-sort-amount-asc</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sort-amount-desc"></em>fa-sort-amount-desc</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sort-asc"></em>fa-sort-asc</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sort-desc"></em>fa-sort-desc</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sort-down"></em>fa-sort-down <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sort-numeric-asc"></em>fa-sort-numeric-asc</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sort-numeric-desc"></em>fa-sort-numeric-desc</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sort-up"></em>fa-sort-up <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-spinner"></em>fa-spinner</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-square"></em>fa-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-square-o"></em>fa-square-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-star"></em>fa-star</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-star-half"></em>fa-star-half</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-star-half-empty"></em>fa-star-half-empty <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-star-half-full"></em>fa-star-half-full <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-star-half-o"></em>fa-star-half-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-star-o"></em>fa-star-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-subscript"></em>fa-subscript</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-suitcase"></em>fa-suitcase</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-sun-o"></em>fa-sun-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-superscript"></em>fa-superscript</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-tablet"></em>fa-tablet</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-tachometer"></em>fa-tachometer</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-tag"></em>fa-tag</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-tags"></em>fa-tags</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-tasks"></em>fa-tasks</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-terminal"></em>fa-terminal</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-thumb-tack"></em>fa-thumb-tack</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-thumbs-down"></em>fa-thumbs-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-thumbs-o-down"></em>fa-thumbs-o-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-thumbs-o-up"></em>fa-thumbs-o-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-thumbs-up"></em>fa-thumbs-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-ticket"></em>fa-ticket</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-times"></em>fa-times</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-times-circle"></em>fa-times-circle</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-times-circle-o"></em>fa-times-circle-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-tint"></em>fa-tint</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-toggle-down"></em>fa-toggle-down <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-toggle-left"></em>fa-toggle-left <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-toggle-right"></em>fa-toggle-right <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-toggle-up"></em>fa-toggle-up <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-trash-o"></em>fa-trash-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-trophy"></em>fa-trophy</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-truck"></em>fa-truck</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-umbrella"></em>fa-umbrella</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-unlock"></em>fa-unlock</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-unlock-alt"></em>fa-unlock-alt</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-unsorted"></em>fa-unsorted <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-upload"></em>fa-upload</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-user"></em>fa-user</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-users"></em>fa-users</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-video-camera"></em>fa-video-camera</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-volume-down"></em>fa-volume-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-volume-off"></em>fa-volume-off</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-volume-up"></em>fa-volume-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-warning"></em>fa-warning <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-wheelchair"></em>fa-wheelchair</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-wrench"></em>fa-wrench</div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Currency Icons </h3>
                                        </div>
                                        <section class="section">
                                            <div class="row list-icon">
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bitcoin"></em>fa-bitcoin <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-btc"></em>fa-btc</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-cny"></em>fa-cny <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-dollar"></em>fa-dollar <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-eur"></em>fa-eur</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-euro"></em>fa-euro <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-gbp"></em>fa-gbp</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-inr"></em>fa-inr</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-jpy"></em>fa-jpy</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-krw"></em>fa-krw</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-money"></em>fa-money</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-rmb"></em>fa-rmb <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-rouble"></em>fa-rouble <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-rub"></em>fa-rub</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-ruble"></em>fa-ruble <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-rupee"></em>fa-rupee <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-try"></em>fa-try</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-turkish-lira"></em>fa-turkish-lira <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-usd"></em>fa-usd</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-won"></em>fa-won <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-yen"></em>fa-yen <span class="text-muted">(alias)</span>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Text Editor Icons </h3>
                                        </div>
                                        <section class="section">
                                            <div class="row list-icon">
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-align-center"></em>fa-align-center</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-align-justify"></em>fa-align-justify</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-align-left"></em>fa-align-left</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-align-right"></em>fa-align-right</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bold"></em>fa-bold</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-chain"></em>fa-chain <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-chain-broken"></em>fa-chain-broken</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-clipboard"></em>fa-clipboard</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-columns"></em>fa-columns</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-copy"></em>fa-copy <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-cut"></em>fa-cut <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-dedent"></em>fa-dedent <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-eraser"></em>fa-eraser</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-file"></em>fa-file</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-file-o"></em>fa-file-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-file-text"></em>fa-file-text</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-file-text-o"></em>fa-file-text-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-files-o"></em>fa-files-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-floppy-o"></em>fa-floppy-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-font"></em>fa-font</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-indent"></em>fa-indent</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-italic"></em>fa-italic</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-link"></em>fa-link</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-list"></em>fa-list</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-list-alt"></em>fa-list-alt</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-list-ol"></em>fa-list-ol</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-list-ul"></em>fa-list-ul</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-outdent"></em>fa-outdent</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-paperclip"></em>fa-paperclip</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-paste"></em>fa-paste <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-repeat"></em>fa-repeat</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-rotate-left"></em>fa-rotate-left <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-rotate-right"></em>fa-rotate-right <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-save"></em>fa-save <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-scissors"></em>fa-scissors</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-strikethrough"></em>fa-strikethrough</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-table"></em>fa-table</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-text-height"></em>fa-text-height</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-text-width"></em>fa-text-width</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-th"></em>fa-th</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-th-large"></em>fa-th-large</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-th-list"></em>fa-th-list</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-underline"></em>fa-underline</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-undo"></em>fa-undo</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-unlink"></em>fa-unlink <span class="text-muted">(alias)</span>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Directional Icons </h3>
                                        </div>
                                        <section class="section">
                                            <div class="row list-icon">
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-angle-double-down"></em>fa-angle-double-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-angle-double-left"></em>fa-angle-double-left</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-angle-double-right"></em>fa-angle-double-right</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-angle-double-up"></em>fa-angle-double-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-angle-down"></em>fa-angle-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-angle-left"></em>fa-angle-left</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-angle-right"></em>fa-angle-right</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-angle-up"></em>fa-angle-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrow-circle-down"></em>fa-arrow-circle-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrow-circle-left"></em>fa-arrow-circle-left</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrow-circle-o-down"></em>fa-arrow-circle-o-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrow-circle-o-left"></em>fa-arrow-circle-o-left</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrow-circle-o-right"></em>fa-arrow-circle-o-right</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrow-circle-o-up"></em>fa-arrow-circle-o-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrow-circle-right"></em>fa-arrow-circle-right</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrow-circle-up"></em>fa-arrow-circle-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrow-down"></em>fa-arrow-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrow-left"></em>fa-arrow-left</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrow-right"></em>fa-arrow-right</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrow-up"></em>fa-arrow-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrows"></em>fa-arrows</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrows-alt"></em>fa-arrows-alt</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrows-h"></em>fa-arrows-h</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrows-v"></em>fa-arrows-v</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-caret-down"></em>fa-caret-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-caret-left"></em>fa-caret-left</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-caret-right"></em>fa-caret-right</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-caret-square-o-down"></em>fa-caret-square-o-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-caret-square-o-left"></em>fa-caret-square-o-left</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-caret-square-o-right"></em>fa-caret-square-o-right</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-caret-square-o-up"></em>fa-caret-square-o-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-caret-up"></em>fa-caret-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-chevron-circle-down"></em>fa-chevron-circle-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-chevron-circle-left"></em>fa-chevron-circle-left</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-chevron-circle-right"></em>fa-chevron-circle-right</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-chevron-circle-up"></em>fa-chevron-circle-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-chevron-down"></em>fa-chevron-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-chevron-left"></em>fa-chevron-left</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-chevron-right"></em>fa-chevron-right</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-chevron-up"></em>fa-chevron-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-hand-o-down"></em>fa-hand-o-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-hand-o-left"></em>fa-hand-o-left</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-hand-o-right"></em>fa-hand-o-right</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-hand-o-up"></em>fa-hand-o-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-long-arrow-down"></em>fa-long-arrow-down</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-long-arrow-left"></em>fa-long-arrow-left</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-long-arrow-right"></em>fa-long-arrow-right</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-long-arrow-up"></em>fa-long-arrow-up</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-toggle-down"></em>fa-toggle-down <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-toggle-left"></em>fa-toggle-left <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-toggle-right"></em>fa-toggle-right <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-toggle-up"></em>fa-toggle-up <span class="text-muted">(alias)</span>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Video Player Icons </h3>
                                        </div>
                                        <section class="section">
                                            <div class="row list-icon">
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-arrows-alt"></em>fa-arrows-alt</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-backward"></em>fa-backward</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-compress"></em>fa-compress</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-eject"></em>fa-eject</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-expand"></em>fa-expand</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-fast-backward"></em>fa-fast-backward</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-fast-forward"></em>fa-fast-forward</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-forward"></em>fa-forward</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-pause"></em>fa-pause</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-play"></em>fa-play</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-play-circle"></em>fa-play-circle</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-play-circle-o"></em>fa-play-circle-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-step-backward"></em>fa-step-backward</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-step-forward"></em>fa-step-forward</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-stop"></em>fa-stop</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-youtube-play"></em>fa-youtube-play</div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Brand Icons </h3>
                                        </div>
                                        <section class="section">
                                            <div class="alert alert-success">
                                                <ul class="margin-bottom-none padding-left-lg">
                                                    <li>All brand icons are trademarks of their respective owners.</li>
                                                    <li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
                                                </ul>
                                            </div>
                                            <div class="row list-icon">
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-adn"></em>fa-adn</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-android"></em>fa-android</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-apple"></em>fa-apple</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bitbucket"></em>fa-bitbucket</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bitbucket-square"></em>fa-bitbucket-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-bitcoin"></em>fa-bitcoin <span class="text-muted">(alias)</span>
                                                </div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-btc"></em>fa-btc</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-css3"></em>fa-css3</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-dribbble"></em>fa-dribbble</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-dropbox"></em>fa-dropbox</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-facebook"></em>fa-facebook</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-facebook-square"></em>fa-facebook-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-flickr"></em>fa-flickr</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-foursquare"></em>fa-foursquare</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-github"></em>fa-github</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-github-alt"></em>fa-github-alt</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-github-square"></em>fa-github-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-gittip"></em>fa-gittip</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-google-plus"></em>fa-google-plus</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-google-plus-square"></em>fa-google-plus-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-html5"></em>fa-html5</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-instagram"></em>fa-instagram</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-linkedin"></em>fa-linkedin</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-linkedin-square"></em>fa-linkedin-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-linux"></em>fa-linux</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-maxcdn"></em>fa-maxcdn</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-pagelines"></em>fa-pagelines</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-pinterest"></em>fa-pinterest</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-pinterest-square"></em>fa-pinterest-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-renren"></em>fa-renren</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-skype"></em>fa-skype</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-stack-exchange"></em>fa-stack-exchange</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-stack-overflow"></em>fa-stack-overflow</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-trello"></em>fa-trello</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-tumblr"></em>fa-tumblr</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-tumblr-square"></em>fa-tumblr-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-twitter"></em>fa-twitter</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-twitter-square"></em>fa-twitter-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-vimeo-square"></em>fa-vimeo-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-vk"></em>fa-vk</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-weibo"></em>fa-weibo</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-windows"></em>fa-windows</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-xing"></em>fa-xing</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-xing-square"></em>fa-xing-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-youtube"></em>fa-youtube</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-youtube-play"></em>fa-youtube-play</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-youtube-square"></em>fa-youtube-square</div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Medical Icons </h3>
                                        </div>
                                        <section class="section">
                                            <div class="row list-icon">
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-ambulance"></em>fa-ambulance</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-h-square"></em>fa-h-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-hospital-o"></em>fa-hospital-o</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-medkit"></em>fa-medkit</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-plus-square"></em>fa-plus-square</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-stethoscope"></em>fa-stethoscope</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-user-md"></em>fa-user-md</div>
                                                <div class="col-md-3 col-sm-4">
                                                    <em class="fa fa-wheelchair"></em>fa-wheelchair</div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
                <footer class="footer">
                    <div class="footer-block buttons">
                        <iframe class="footer-github-btn" src="https://ghbtns.com/github-btn.html?user=modularcode&repo=modular-admin-html&type=star&count=true" frameborder="0" scrolling="0" width="140px" height="20px"></iframe>
                    </div>
                    <div class="footer-block author">
                        <ul>
                            <li> created by <a href="https://github.com/modularcode">ModularCode</a>
                            </li>
                            <li>
                                <a href="https://github.com/modularcode/modular-admin-html#get-in-touch">get in touch</a>
                            </li>
                        </ul>
                    </div>
                </footer>
                <div class="modal fade" id="modal-media">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Media Library</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                            <div class="modal-body modal-tab-container">
                                <ul class="nav nav-tabs modal-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a>
                                    </li>
                                </ul>
                                <div class="tab-content modal-tab-content">
                                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                                        <div class="images-container">
                                            <div class="row">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                        <div class="upload-container">
                                            <div id="dropzone">
                                                <form action="/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                                    <div class="dz-message-block">
                                                        <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Insert Selected</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <div class="modal fade" id="confirm-modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><i class="fa fa-warning"></i> Alert</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure want to do this?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-80463319-4', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>