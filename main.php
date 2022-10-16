<?php 
    session_start();
    if(!$_SESSION['logged_in']){
        $_SESSION['error'] = "You need to be logged in";
        header("Location: index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="description"
            content="Main Landing Page of the Dashboard of Longworth Dental Boutique" />
        <link rel="stylesheet" href="styles/mastermain.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"
            rel="stylesheet" />
        <script
            src="https://kit.fontawesome.com/170f096220.js"
            crossorigin="anonymous"></script>
        <script src="script/main.js" type="text/javascript"></script>
        <link
            href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
            rel="stylesheet" />
        <title>Dashboard | Story</title>
    </head>
    <body>
        <header>
            <div class="sidebar" id="mySidebar">
                <span class="closeBtn" onclick="closeNav()">&times;</span>
                <a href="#"><i class="fas fa-th-large"></i>Dashboard</a>
                <a href="#"><i class="far fa-chart-bar"></i>Analytics</a>
                <a href="#"><i class="far fa-comment-dots"></i>Comments</a>
                <a href="#"><i class="fa-solid fa-gear"></i>Settings</a>
            </div>
        </header>
        <main>
            <div id="main">
                <div id="navHead" class="navHead">
                    <nav class="accountDrop">
                        <button class="openBtn" onclick="openNav()">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <span>
                            <i class="fa-solid fa-book-open-reader"></i>
                        </span>
                        <span class="searchBox">
                            <i class="fas fa-search icon"></i>
                            <input
                                type="search"
                                class="search-input"
                                placeholder="Search.."
                                name="searchbox" />
                        </span>
                    </nav>
                    <!-- User Profile Dropdown -->
                    <div id="userProfileDropdown" class="userProfileDropdown">
                        <button class="accountButton" onclick="settingHover2()">
                            <i class="fa-solid fa-circle-user"></i>&nbsp;<i
                                class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropAccount" id="dropAccount">
                            <a href="account.html">Accounts</a>
                            <a href="settings.html">Settings</a>
                            <a href="logout.html">Log Out</a>
                        </div>
                    </div>
                </div>

                <!-- Main Page Contents -->
                <div id="mainContent">
                    <div id="greetingBox" class="greetingBox">
                        <p></p>
                        <h1>Happy Monday, Shreya! Here's your weekly Update</h1>
                        <p></p>
                    </div>
                    <div id="avgFigure" class="avgFigure">
                        <div id="thisMonth" class="thisMonth">
                            <p>Total Revenue this Month</p>
                            <p id="thisMonthRevenue" class="thisMonthRevenue">
                                $75,000
                            </p>
                        </div>
                        <div id="prevMonth" class="prevMonth">
                            <p>Total Revenue Previous Month</p>
                            <p id="prevMonthRevenue" class="prevMonthRevenue">
                                $70,000
                            </p>
                        </div>
                        <div id="lastYear" class="lastYear">
                            <p>Total Revenue This Month Last Year</p>
                            <p id="lastYearRevenue" class="lastYearRevenue">
                                $70,000
                            </p>
                        </div>
                    </div>
                    <div id="exclaimBox" class="exclaimBox">
                        <p>
                            Your doctors look like they are having a good month
                        </p>
                    </div>
                    <div id="thisMonthChart" class="thisMonthChart">
                        <img
                            src="images/graphchart.png"
                            alt="This Month's Revenue in Chart" />
                    </div>
                    <div id="oldChart" class="oldChart">
                        <div id="prevChart" class="prevChart">
                            <img
                                src="images/graphchart.png"
                                alt="Previous Month's Revenue in Chart" />
                        </div>
                        <div id="lastYearChart" class="lastYearChart">
                            <img
                                src="images/graphchart.png"
                                alt="Last Year's this Month's Revenue in Chart" />
                        </div>
                    </div>
                    <div id="tabularData" class="tabularData">
                        <p>Production Summary</p>
                        <img
                            src="images/tabulardata.png"
                            alt="Revenue in Tabular Format" />
                    </div>
                </div>
            </div>
        </main>
        <footer></footer>
    </body>
</html>