<?php
header("Content-type: text/plain");
var_dump($_POST);
$to = $_POST['envelope']['to'];
if ($to == 'thomaslepretre78@gmail.com' || $to == 'charlescretois@gmail.com'){
  http_response_code(201);
  echo("success\n");
}else{
  http_response_code(201);
}

echo("Envelope:\n");
print_r($_POST['envelope']);

echo("Headers:\n");
print_r($_POST['headers']);

echo("Plain:\n");
echo($_POST['plain']."\n");

echo("HTML:\n");
echo($_POST['html']."\n");

echo("Attachments:\n");
print_r($_FILES["attachments"]);
?>
