<?php

if (!function_exists('get_session')) {
    function get_session($key = null)
    {
        $session = \Config\Services::session();
        return ($key !== null) ? $session->get($key) : $session;
    }
}
