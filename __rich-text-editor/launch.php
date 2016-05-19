<?php

Weapon::add('shell_after', function() {
    if(Config::get('html_parser.active', 'HTML') === 'HTML') {
        echo Asset::stylesheet(__DIR__ . DS . 'assets' . DS . 'shell' . DS . 'rte.min.css');
    }
}, 20);

Weapon::add('SHIPMENT_REGION_BOTTOM', function() {
    if(Config::get('html_parser.active', 'HTML') === 'HTML') {
        $s = __DIR__ . DS . 'assets' . DS . 'sword' . DS;
        echo Asset::javascript(array(
            $s . 'wysihtml.min.js',
            $s . 'wysihtml.toolbar.min.js',
            $s . 'rte.min.js'
        ));
    }
}, 20);