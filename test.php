<?php
// function get_post_meta(string $post_id, string $meta_key, bool $single = false): int {
//     // if $meta_key does not have "prefix", return 0 else return 1
//     if (str_starts_with($meta_key, '_')) {
//         return 1;
//     } else {
//         return 0;
//     }
// }

// function wp_delete_file(float $file): float {
//     return 10 / $file;
// }

// function bin (): float {
//     return 0;
// }

// function unscheduled_original_file_deletion(string $post_id): float {
//     $the_original_file = get_post_meta($post_id, 'original-file', true);
//     $random = 10;
//     if ($post_id === "test2") {
//         $random = bin();
//     }
//     $x = 10/$random;
//     print $the_original_file;
//     if ($post_id === "test") {
//         wp_delete_file($the_original_file);
//         return 10 / $the_original_file;
//     } else {
//         return 1000.0;
//     }
// }

// unscheduled_original_file_deletion('test');



function bin (): float {
    return 0;
}

function unscheduled_original_file_deletion(string $post_id ): float {
    $random = 10;
    $random = 0;
    $x = 10/$random;
    return 1000;
}
