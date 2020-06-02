<?php
  $tz = 'America/Los_Angeles';
  $timestamp = time();
  $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
  $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
  echo $dt->format("l - F jS, Y");
?>
