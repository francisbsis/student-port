<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs - Student Portal</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="align.css">
</head>
<body>
    <header>
        <h1>Clubs and Activities</h1>
        <nav>
            <ul>
                <li><a href="mainpage.php">Main</a></li>
                <li><a href="announcements.php">Announcements</a></li>
                <li><a href="assignments.php">Assignments</a></li>
                <li><a href="attendance.php">Attendance</a></li>
                <li><a href="class-schedule.php">Class Schedule</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="lost-and-found.php">Lost and Found</a></li>
                <li><a href="support.php">Support</a></li>
                <li><a href="violations.php">Violations</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Club Activities</h2>
            <p>Stay updated on the latest activities and events from various clubs.</p>
            <p>Recommended to join The Mighty STEM Chondria</p>
            <div id="club-updates">
                <!-- Club updates will be dynamically loaded here -->
            </div>
        </section>
        <section>
            <h2>Join a Club</h2>
            <form id="club-registration-form">
                <label for="club-name">Club Name:</label>
                <input type="text" id="club-name" name="club-name" required>
                
                <label for="student-name">Your Name:</label>
                <input type="text" id="student-name" name="student-name" required>
                
                <button type="submit">Join Club</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Student Portal. All rights reserved.</p>
    </footer>
</body>
</html>