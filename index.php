<?php

    /*
        Plugin name: Redes sociales
        Plugin URL: http://www.aulaformativa.com
        Descrption: Short code para incluir barra de redes sociales
        Author: Traian
        Version: 0.9
        Author URI: http://www.aulaformativa.com
    */ 

    function social_aulaformativa($atts){

        $args = shortcode_atts(array(
            'facebook' => 'http://facebook.com',
            'twitter' => 'http://twitter.com',
            'google' => 'http://plus.google.com'
        ), $atts
        
        $uf = $args["facebook"];
        $ut = $args["twitter"];
        $ug = $args["google"];

        );

        $facebook = "<a href='".$uf."'>Facebook</a>";
        $twitter = "<a href='".$ut."'>Twitter</a>";
        $google = "<a href='".$ug."'>Google</a>";

        $social = $facebook . " " . $twitter . " " . $google;
        return $social;
    }

    add_shortcode("social_aulaformativa","social_aulaformativa");

?>