<?php

if (!function_exists('global_config')) {
    function global_config($key)
    {
        $config = \App\Models\Configuration::where('key', $key)->first();
        return $config->value;
    }
}

