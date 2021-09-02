$ideya = $_POST['ideya'];
$email = $_POST['email'];

$ideya = htmlspecialchars($ideya);
$email = htmlspecialchars($email);

$ideya = urldecode($ideya);
$email = urldecode($email);

$ideya = trim($ideya);
$email = trim($email);

mail("matveyatom38@gmail.com", "Идея для сайта", $ideya,$email);