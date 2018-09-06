<?php
 
    // make an associative array of callers we know, indexed by phone number
    $people = array(
      // "+19177472953" => "Juliette",
      "+17185102236" => "Jeremy",
    );
 
    // if the caller is known, then greet them by name
    // otherwise, consider them just another monkey
    if(!$name = $people[$_REQUEST['From']]) {
        $name = "friend";
    }
 
    // now greet the caller
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>Hello <?php echo $name ?>.</Say>
    <Sms><?php echo $name ?>, thanks for the call!</Sms>
</Response>