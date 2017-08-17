<?php

class GeoPlugin extends Controller
{

    public function getGeoLocation($ip = null)
    {
        if (is_null($ip)) {
            $ip = get_ip();
        }
        
        return json_decode(file_get_contents_wrapper('http://www.geoplugin.net/json.gp?ip=' . $ip, true), true);
    }
}