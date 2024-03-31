<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-contacts.css">
    <title>Christina Pankiv</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="social.php">Social</a></li>
                <li><a href="contacts.php">Contacts</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
    <div class="feedback-form">
        <h2>Contacts</h2>
        <form action="process_form.php" method="post">
            <div class="form-group">
                <label for="name">Ім'я:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Повідомлення:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">Send</button>
        </form>
    </div>
</div>

   

    <footer>
        <p>© 2024 WEB Christina Pankiv</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
