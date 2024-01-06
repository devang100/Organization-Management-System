<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!----Stylesheet---->
    <link rel = "Stylesheet" href="events.css">
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

                <a href="events.php" class="active">
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
    <!-- <div class="ongoing_events">
        <div class="right">
            <img src="codepie.jpg">
        </div>
        <div class="left">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum, eaque!</p>
        </div>
    </div> -->
    <header>
        <div class="header_left">
            <h1>Codepie (Ongoing Events) </h1>
            <p>In collaboration with Codechef, CSPIT and DEPSTAR,<br>
            Charusat are hosting CODEPIE, a competitive programming<br>
            competition. As a result of this competition, students will be<br>
            able to enhance their problem-solving skills and their ability <br>
            to brainstorm with their teammates. Our goal is to foster a <br>
            competitive programming culture at our university that will <br>
            enable students to compete globally.
            </p>
        </div>
        <div class="header_right">
            <div class="header_right-image">
                <img src="codepie.jpg">
            </div>
        </div>
    </header>

    <header>
        <div class="header_left">
            <h1>Google Developer Student Clubs <br>(Upcoming Event)</h1>
            <p>GDSC CHARUSAT is here with their very first event. <br>
                Get ready for Compose Camp - a three day mega <br>
                event with lots to learn about Android studio, Kotlin <br>
                and Jetpack Compose. The events will cover all the <br>
                basics so do not worry if you aren't familiar with all <br>
                these technologies</p>
        </div>
        <div class="header_right">
            <div class="header_right-image">
                <img src="GDSC.png">
            </div>
        </div>
    </header>
</main>
</body>
</html>