<?php
    system("gpio -g mode 27 out");
    system("gpio -g write 27 1");
    usleep(500000);
    system("gpio -g write 27 0");
?>