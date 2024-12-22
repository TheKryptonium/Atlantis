<?php
    $empty1 = array();
    $empty2 = array();
    $proc=proc_open("cd GodEye; python main.py",$empty1,$empty2 );
    $ret = proc_close($proc);
?>