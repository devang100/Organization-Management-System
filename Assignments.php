<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!----Stylesheet---->
    <link rel = "Stylesheet" href="Assignments.css">
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
                <a href="index1.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="profile.php">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Profile</h3>
                </a>

                <a href="Assignments.php" class="active">
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
    <header>
        <div class="header_left">
            <h1> Java Assignment-2</h1>
            <p>Topics : <br> <br>
                (1) Packages<br>
                (2) File handling <br>
                (3) Multi-threading<br>
                (4) Exception Handling<br>
                (5) Collection framework<br>
                <br>
                Submission Date : 1st November</p>
        </div>
        <div class="header_right">
            <div class="header_right-image">
                <img src="assignment .png" height="500rem" width="500rem">
            </div>
        </div>
    </header>
</main>
</body>
</html>