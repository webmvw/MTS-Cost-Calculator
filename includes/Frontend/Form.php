<?php

namespace Mts\Frontend;

class Form{

    function __construct(){
        $this->formBuilder();
    }

    public function formBuilder(){
        add_shortcode('mtsCostCalculationBuilder', [$this, 'shortcode_file']);
    }

    public function shortcode_file(){
        echo "<h2>Cost Calculation form Builder</h2>";
    }

}
