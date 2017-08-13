<?php

class GeoPluginSample extends Controller
{

    public function render()
    {
        ob_start();
        $controller = ModuleHelper::getMainController("geoPlugin");
        var_dump($controller->getGeoLocation());
        return ob_get_clean();
    }
}