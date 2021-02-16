<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
    if (!preg_match("/^[A-Za-z .'-]+$/", $name)) {
        $name_error = 'Invalid name';
    }
    if (!preg_match("/^[A-Za-z .'-]+$/", $subject)) {
        $subject_error = 'Invalid subject';
    }
    if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
        $email_error = 'Invalid email';
    }
    if (strlen($message) === 0) {
        $message_error = 'Your message should not be empty';
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" name="name">
    <p><?php if (isset($name_error)) echo $name_error; ?></p>
    <label for="subject">Subject:</label><br>
    <input type="text" name="subject">
    <p><?php if (isset($subject_error)) echo $subject_error; ?></p>
    <label for="email">Email:</label><br>
    <input type="text" name="email">
    <p><?php if (isset($email_error)) echo $email_error; ?></p>
    <label for="message">Message:</label><br>
    <textarea name="message"></textarea>
    <p><?php if (isset($message_error)) echo $message_error; ?></p>
    <input type="submit" name="submit" value="Submit">
    <?php
    if (isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)) {
        $to = 'metapixels@outlook.com'; // edit here
        $body = " Name: $name\n E-mail: $email\n Message:\n $message";
        if (mail($to, $subject, $body)) {
            echo '<p style="color: green">Message sent</p>';
        } else {
            echo '<p>Error occurred, please try again later</p>';
        }
    }
    ?>
</form>