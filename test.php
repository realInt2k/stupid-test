<?php

function unscheduled_original_file_deletion(int $x): float {
    return 10 / $x;
}

$x = unscheduled_original_file_deletion(0);
print $x;
