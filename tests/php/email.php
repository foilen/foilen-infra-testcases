<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>PHP Email</title>
</head>

<body>

<?php
  switch($_POST["type"]) {
    case 'plain':
      if (mail ($_POST["to"], $_POST["subject"], $_POST["body"])) {
        echo "Mail sent";
      } else {
        echo "Problem sending email";
      }
      break;
      case 'fromHeader':
        $headers = 'From: ' . $_POST["from"];
        if (mail ($_POST["to"], $_POST["subject"], $_POST["body"], $headers)) {
          echo "Mail sent";
        } else {
          echo "Problem sending email";
        }
        break;
    case 'withR':
      $headers = 'From: ' . $_POST["from"];
      $additional_parameters = '-r ' . $_POST["from"];
      if (mail ($_POST["to"], $_POST["subject"], $_POST["body"], $headers, $additional_parameters)) {
        echo "Mail sent";
      } else {
        echo "Problem sending email";
      }
      break;
  }
 ?>

<p>Plain</p>
<form method="post">
  <input name="to" type="email" value="simon@foilen.com" />
  <input name="subject" type="text" value="[Plain] This is a test" />
  <input name="body" type="text" value="This is the body of the test message" />
  <input name="type" value="plain" type="submit">
</form>

<hr/>

<p>With FROM in headers</p>
<form method="post">
  <input name="from" type="email" value="admin@foilen.com" />
  <input name="to" type="email" value="simon@foilen.com" />
  <input name="subject" type="text" value="[From header] This is a test" />
  <input name="body" type="text" value="This is the body of the test message" />
  <input name="type" value="fromHeader" type="submit">
</form>

<hr/>

<p>With additional_parameters using "-r" for the from</p>
<form method="post">
  <input name="from" type="email" value="admin@foilen.com" />
  <input name="to" type="email" value="simon@foilen.com" />
  <input name="subject" type="text" value="[Additionnal param -r] This is a test" />
  <input name="body" type="text" value="This is the body of the test message" />
  <input name="type" value="withR" type="submit">
</form>

<hr/>

</body>

</html>
