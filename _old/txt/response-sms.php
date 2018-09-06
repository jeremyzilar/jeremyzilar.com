<?php
  // start the session
  session_start();

  // get the session varible if it exists
  $counter = $_SESSION['counter'];

  // if it doesnt, set the default
  if(!strlen($counter)) {
      $counter = 0;
  }

  // increment it
  $counter++;

  // save it
  $_SESSION['counter'] = $counter;

  $people = array(
      // "+19177472953" => "Juliette",
      "+17185102236" => "Jeremy",
  );

  if(!$name = $people[$_REQUEST['From']]) {
      $name = "friend";
  }

  header("content-type: text/xml");
  echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
  <Sms><?php echo $name ?> has messaged <?php echo $counter; ?> times from <?php echo $_REQUEST['To']; ?></Sms>
</Response>

<!-- <Response>
  <Message>
    <Body>Hello <?php echo $name ?></Body>
    <MediaUrl>https://demo.twilio.com/owl.png</MediaUrl>
  </Message>
</Response> -->