<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <link rel="stylesheet" href="../new-css/feedback.css">
    <link rel="stylesheet" href="../new-css/musrecc.css">
    <link rel="stylesheet" href="../new-css/style.css">
</head>
<body>
    <div class="container">
        <div class="feedback">
            <h1>Feedback Form</h1>
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="btn-b">
            <a href="home.php">BACK</a>
        </div>
    </div>
</body>
</html>