<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="align.css">
    <link rel="stylesheet" href="feed.css">
</head>
<body>
    <header>
        <h1>Student Portal Feedback</h1>
        <nav>
            <ul>
            <li>
                <a href="mainpage.php">Main</a></li>
                <li><a href="announcements.php">Announcements</a></li>
                <li><a href="assignments.php">Assignments</a></li>
                <li><a href="attendance.php">Attendance</a></li>
                <li><a href="class-schedule.php">Class Schedule</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="lost-and-found.php">Lost and Found</a></li>
                <li><a href="support.php">Support</a></li>
                <li><a href="violations.php">Violations</a></li>
                <li><a href="clubs.php">Clubs</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Submit Your Feedback</h2>
        <div class="feedback-container">
        <h2>Feedback Form</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="number" id="number" name="lrn" placeholder="Enter your Lrn" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback" rows="5" placeholder="Enter your feedback" required></textarea>
            </div>

            <button type="submit" class="submit-btn">Submit Feedback</button>
        </form>
    </div>
</body>
    <footer>
        <p>&copy; 2025 Student Portal. All rights reserved.</p>
    </footer>
</body>
</html>