<?php
    system("gpio -g mode 17 out");
    system("gpio -g write 17 1");
    usleep(100000);
    system("gpio -g write 17 0");
?>