if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user = $_POST['user'];
    $campus = $_POST['campus'];
    $options = isset($_POST['option1']) ? 'Social Media ' : '';
    $options .= isset($_POST['option2']) ? 'ASU or Career Fair ' : '';
    $options .= isset($_POST['option3']) ? 'Other ' : '';
    $message = $_POST['message'];

    $to = 'nmalexa1@asu.edu';
    $subject = 'Form Submission';
    $headers = 'From: ' . $fname . ' ' . $lname;

    $body = "Name: $fname $lname\n";
    $body .= "User Type: $user\n";
    $body .= "Campus: $campus\n";
    $body .= "How Heard: $options\n";
    $body .= "Message: $message";

    // The following line helps when ready to send emails
    mail($to, $subject, $body, $headers);

    echo 'Form submitted successfully!';
} else {
    echo 'Invalid request.';
}
