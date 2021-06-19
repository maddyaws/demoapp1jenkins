<?php
echo "Welcome  ".$_REQUEST["user"]."<br>";
echo $_REQUEST["email"]."<br>";
echo "Date: " . date('d-m-Y', strtotime('now'));