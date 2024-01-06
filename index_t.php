<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!----Stylesheet---->
    <link rel = "Stylesheet" href="index1.css">
    <!-------Material cdn----->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">

</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="log">
                    <img src="logo.png">
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close </span>
                </div>
            </div>

            <div class="slidebar">
                <a href="index1.php" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="profile.php">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Profile</h3>
                </a>

                <a href="Assignments.php">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Assignments</h3>
                </a>

                <a href="improvement.php">
                    <span class="material-icons-sharp">insights</span>
                    <h3>Improvement</h3>
                </a>

                <a href="message.php">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Messages</h3>
                    <span class="message-count">26</span>
                </a>

                <!-- <a href="#">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Report</h3>
                </a> -->

                <a href="events.php">
                    <span class="material-icons-sharp">event_available</span>
                    <h3>Events</h3>
                </a>

                <!-- <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">add</span>
                    <h3>Any Features</h3>
                </a> -->

                <a href="index.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Log out</h3>
                </a>
            </div>
        </aside>

        <!-- ---------End of aside--------- -->
        <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="student">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Students</h3>
                            <h1>2,24,343</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>

                <!-- --------End of Sales------>

                <div class="expenses">
                    <span class="material-icons-sharp">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Attendance</h3>
                            <h1>81</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>

                <!-- -------End of expenses----------->

                <!-- <div class="income">
                    <span class="material-icons-sharp">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Average Income</h3>
                            <h1>$10,000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div> -->
                <!-- -------End of income----------->
            </div>
            <!-- ----------------End of insights---------- -->
            <!-- <div class="top-student">
                <h2>Top Students</h2>
                <table>
                    <thread>
                        <tr>
                            <th>Name</th>
                            <th>ID number</th>
                            <th>Payment</th>
                            <th>Status</th>
                        </tr>
                    </thread>
                    <tbody>
                        <tr>
                            <td>Student</td>
                            <td>1</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Student</td>
                            <td>2</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Student</td>
                            <td>3</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Student</td>
                            <td>4</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Student</td>
                            <td>5</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Student</td>
                            <td>6</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show all</a>
            </div> -->
            <div class="attendance-list">
                <h1>Attendance List</h1>
                <table class="table">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Subject</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>P/A</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>01</td>
                      <td>Maths</td>
                      <td>03-24-22</td>
                      <td>8:00AM</td>
                      <td>P</td>
                    </tr>
                    <tr class="active">
                      <td>02</td>
                      <td>DCN</td>
                      <td>03-24-22</td>
                      <td>9:00AM</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>03</td>
                      <td>DE</td>
                      <td>03-24-22</td>
                      <td>8:00AM</td>
                      <td>P</td>
                    </tr>
                    <tr>
                      <td>04</td>
                      <td>Java</td>
                      <td>03-24-22</td>
                      <td>8:00AM</td>
                      <td>A</td>
                    </tr>
                    <!-- <tr >
                      <td>05</td>
                      <td>Salina</td>
                      <td>Coding</td>
                      <td>03-24-22</td>
                      <td>9:00AM</td>
                      <td>4:00PM</td>
                      <td><button>View</button></td>
                    </tr>
                    <tr >
                      <td>06</td>
                      <td>Tara Smith</td>
                      <td>Testing</td>
                      <td>03-24-22</td>
                      <td>9:00AM</td>
                      <td>4:00PM</td>
                      <td><button>View</button></td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
        </main>
        <!-- --------------end of main--------------- -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <!-- <span class="material-icons-sharp">menu</span> -->
                    </button>
                    <div class="theme-toggler">
                        <span class="material-icons-sharp active">light_mode</span>
                        <span class="material-icons-sharp">dark_mode</span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p>Hey, <b>Devang</b></p>
                            <small class="text-muted">Admin</small>
                        </div>
                        <div class="profile-photo">
                            <img src="avatar.jpg">
                        </div>
                    </div>
                </div>
                <!-- ---end of top----- -->
                <div class="recent-update">
                    <h2>Recent update</h2>
                    <div class="updates">
                        <div class="update">
                                <div class="profile-photo">
                                <img src="avatar.jpg">
                            </div>
                            <div class="message">
                                <p><b>Pranay</b> received his DE manual.</p>
                                <small class="text-muted">2 minutes ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="avatar.jpg">
                        </div>
                        <div class="message">
                            <p><b>Dev</b> received his book.</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="avatar.jpg">
                        </div>
                        <div class="message">
                            <p><b>Jeet</b> received his manual.</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                </div>
                <!-- -------------End of recent updates------------ -->
                <div class="sales-analytics">
                    <h2>Sales Analytics</h2>
                    <div class="item online">
                        <div class="icon">
                            <span class="material-icons-sharp">shopping_cart</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>Online Orders</h3>
                                <small class="text-muted">Last 24 hours</small>
                            </div>
                            <h5 class="success">+39%</h5>
                            <h3>3849</h3>
                        </div>
                    </div>

                    <div class="item offline">
                        <div class="icon">
                            <span class="material-icons-sharp">local_mall</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>Offline Orders</h3>
                                <small class="text-muted">Last 24 hours</small>
                            </div>
                            <h5 class="danger">-17%</h5>
                            <h3>1100</h3>
                        </div>
                    </div>

                    <div class="item customers">
                        <div class="icon">
                            <span class="material-icons-sharp">person</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>New Customers</h3>
                                <small class="text-muted">Last 24 hours</small>
                            </div>
                            <h5 class="success">+25%</h5>
                            <h3>849</h3>
                        </div>
                    </div>
                    <div class="item add-product">
                        <div>
                            <span class="material-icons-sharp">add</span>
                            <h3>Add Product</h3>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="index1.js"></script>
</body>
</html>