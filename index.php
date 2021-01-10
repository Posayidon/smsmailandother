<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
header("Content-type: text/plain");

$to = $_POST['envelope']['to'];
if ($to == 'thomaslepretre78@gmaim.com'){
  http_response_code(201);
  echo("success\n");
}else{
  http_response_code(403);
  echo("user not allowed here\n");
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
  </body>
</html>
