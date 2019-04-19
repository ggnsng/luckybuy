<?php
 echo exec("kill $(ps aux | grep 'while :; do :; done' | awk '{print $2}')");
?>
