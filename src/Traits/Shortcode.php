<?php

namespace FredBradley\WordPressTraits\Traits;

abstract class Shortcode
{

    protected static function setup()
    {
        $init = new static;
        $init->init();
    }

    private function init()
    {
        add_shortcode($this->tag, array($this, 'render'));
    }

    abstract public function render($atts, $content = null);
}