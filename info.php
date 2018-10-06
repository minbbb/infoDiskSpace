<?php
$disk = '/dev/sda1'; //drive about which we want to know information
?>
всего: <?php echo shell_exec("df -h | grep $disk | awk '{print $2}'"); ?><br/>
использовано: <?php echo shell_exec("df -h | grep $disk | awk '{print $3}'"); ?> ( <?php echo shell_exec("df -h | grep $disk | awk '{print $5}'"); ?>)<br/>
доступно: <?php echo shell_exec("df -h | grep $disk | awk '{print $4}'"); ?><br/>
