<?php
// Get the data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create a Google Sheet spreadsheet
$spreadsheet = new GoogleSpreadsheet('1OAoy3wi9CCDNf9V3cdHoMX2q4FkzWa5gDg9gx_y9LDo');

// Create a new sheet in the spreadsheet
$sheet = $spreadsheet->createSheet();
$sheet->setName('Sheet' . uniqid());

// Add a new row to the sheet
$row = $sheet->appendRow([
  $name,
  $email,
  $subject,
  $message
]);

// Save the spreadsheet
$spreadsheet->save();

// Redirect the user to a confirmation page
header('Location: /contact-success.php');

?>
