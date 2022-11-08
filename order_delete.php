<?php
  session_start();
  $Line = $_GET['Line'];
  $_SESSION["intLine"][$Line] = "";
  session_destroy($Line);
?>