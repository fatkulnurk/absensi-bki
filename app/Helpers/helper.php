<?php
if (!function_exists('leave_status_to_str')) {
    function leave_status_to_str($value)
    {
        switch ($value) {
            case 1:
                return 'Diterima';
            case 2:
                return 'Ditolak';
            default:
                return 'Menunggu';
        }
    }
}
