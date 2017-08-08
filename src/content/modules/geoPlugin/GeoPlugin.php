<?php
class GeoPlugin extends Controller {
	public function getGeoLocation($ip = null) {
		if (is_null ( $ip )) {
			$ip = get_ip ();
		}
		return unserialize ( file_get_contents_wrapper ( 'http://www.geoplugin.net/php.gp?ip=' . $ip, true ) );
	}
}