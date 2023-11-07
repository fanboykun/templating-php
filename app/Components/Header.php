<?php

namespace App\Components;
// ContentComponent.php
class Header {
    protected $sectionTitle;
    protected $content;

    public function __construct($sectionTitle, $content) {
        $this->sectionTitle = $sectionTitle;
        $this->content = $content;
    }

    public function render() {
        // Output the content section
        echo "
        <section>
            <h2>{$this->sectionTitle}</h2>
            <p>{$this->content}</p>
        </section>
        ";
    }
}

