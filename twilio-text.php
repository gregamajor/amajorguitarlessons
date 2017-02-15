<?php
header('Content-Type: text/html');
?>
<Response>
  <Message to="6362889447">
<?=htmlspecialchars(substr($_REQUEST['From'] . ": " . $_REQUEST['Body'], 0, 1600))?>
  </Message>
  <Message to="6364484557">
<?=htmlspecialchars(substr($_REQUEST['From'] . ": " . $_REQUEST['Body'], 0, 1600))?>
  </Message>
</Response>
