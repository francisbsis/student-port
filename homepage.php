<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="align.css">
</head>
<body>
    <header>
        <h1>WELCOME TO THE STUDENT PORTAL</h1>
        <nav>
            <ul>
                <li><a href="grades.php">Grades</a></li>
                <li><a href="attendance.php">Attendance</a></li>
                <li><a href="class-schedule.php">Class Schedule</a></li>
                <li><a href="assignments.php">Assignments</a></li>
                <li><a href="violations.php">Violations</a></li>
                <li><a href="announcements.php">Announcements</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="lost-and-found.php">Lost and Found</a></li>
                <li><a href="support.php">Technical Support</a></li>
                <li><a href="clubs.php">Clubs</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Latest Announcements</h2>
            <p>Stay updated with the latest news and announcements from the school.</p>
        </section>
        <section>
            <h2>Upcoming Events</h2>
            <p>Check out the upcoming events and register to participate.</p>
        </section>
    </main>
    <footer>
        <br>
        <br>
        <br>
        <p>&copy; 2025 Student Portal. All rights reserved.</p>
    </footer>
    <a href="logout.php">Logout</a>
    </div>
</body>
</html