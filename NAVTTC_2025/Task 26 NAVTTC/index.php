<!DOCTYPE html>
<html>
<head>
    <title>Current Day of the Week</title>
</head>
<body>
    <h1>What day is it today?</h1>

    <?php
    // Get the current day abbreviation (e.g., Mon, Tue)
    $day = date("D");

    switch ($day) {
        case "Mon":
            echo "<p>Today is <strong>Monday</strong>.</p>";
            break;
        case "Tue":
            echo "<p>Today is <strong>Tuesday</strong>.</p>";
            break;
        case "Wed":
            echo "<p>Today is <strong>Wednesday</strong>.</p>";
            break;
        case "Thu":
            echo "<p>Today is <strong>Thursday</strong>.</p>";
            break;
        case "Fri":
            echo "<p>Today is <strong>Friday</strong>.</p>";
            break;
        case "Sat":
            echo "<p>Today is <strong>Saturday</strong>.</p>";
            break;
        case "Sun":
            echo "<p>Today is <strong>Sunday</strong>.</p>";
            break;
        default:
            echo "<p>Unable to determine the day.</p>";
    }
    ?>

</body>
</html>
