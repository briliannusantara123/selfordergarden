<?php
if (!function_exists('hex_to_rgb')) {
    function hex_to_rgb($hex) {
        // Menghapus simbol '#' jika ada
        $hex = str_replace("#", "", $hex);

        // Mengonversi nilai hex ke nilai RGB
        if (strlen($hex) == 3) {
            $r = hexdec(str_repeat(substr($hex, 0, 1), 2));
            $g = hexdec(str_repeat(substr($hex, 1, 1), 2));
            $b = hexdec(str_repeat(substr($hex, 2, 1), 2));
        } else if (strlen($hex) == 6) {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        } else {
            return false; // Jika format tidak valid
        }

        return array('r' => $r, 'g' => $g, 'b' => $b);
    }
}
