<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="align.css">
</head>
<body>
    <header>
        <h1>Lost and Found</h1>
        <nav>
            <ul>
                <li><a href= "mainpage.php>Main</a></li>
                <li><a href="announcements.php">Announcements</a></li>
                <li><a href="assignments.php">Assignments</a></li>
                <li><a href="attendance.php">Attendance</a></li>
                <li><a href="class-schedule.php">Class Schedule</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="support.php">Support</a></li>
                <li><a href="violations.php">Violations</a></li>
                <li><a href="clubs.php">Clubs</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Report Lost or Found Items</h2>
            <form id="lost-found-form">
                <label for="item-description">Item Description:</label>
                <input type="text" id="item-description" name="item-description" required>

                <label for="item-status">Status:</label>
                <select id="item-status" name="item-status" required>
                    <option value="lost">Lost</option>
                    <option value="found">Found</option>
                </select>

                <label for="contact-info">Your Contact Information:</label>
                <input type="text" id="contact-info" name="contact-info" required>

                <button type="submit">Submit</button>
            </form>
        </section>
        <section>
            <h2>Reported Items</h2>
            <div id="reported-items">
                <!-- List of reported lost and found items will be displayed here -->
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Student Portal. All rights reserved.</p>
    </footer>
</body>
</html>