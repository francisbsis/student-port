<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support - Student Portal</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="align.css">
</head>
<body>
    <header>
        <h1>Technical Support</h1>
        <nav>
            <ul>
                <li><a href="homepage.php">Main</a></li>
                <li><a href="announcements.php">Announcements</a></li>
                <li><a href="assignments.php">Assignments</a></li>
                <li><a href="attendance.php">Attendance</a></li>
                <li><a href="class-schedule.php">Class Schedule</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="lost-and-found.php">Lost and Found</a></li>
                <li><a href="violations.php">Violations</a></li>
                <li><a href="clubs.php">Clubs</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Submit a Support Request</h2>
            <form id="support-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="issue">Issue Description:</label>
                <textarea id="issue" name="issue" rows="4" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Student Portal. All rights reserved.</p>
    </footer>
</body>
</html>