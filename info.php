всего: <?php echo shell_exec("df -h | grep /dev/sda1 | awk '{print $2}'"); ?><br/>
использовано: <?php echo shell_exec("df -h | grep /dev/sda1 | awk '{print $3}'"); ?> ( <?php echo shell_exec("df -h | grep /dev/sda1 | awk '{print $5}'"); ?>)<br/>
доступно: <?php echo shell_exec("df -h | grep /dev/sda1 | awk '{print $4}'"); ?><br/>
