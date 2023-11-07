<?php

namespace App\Components;

class Footer {
    protected $sectionTitle;
    protected $content;

    public function __construct($sectionTitle, $content) {
        $this->sectionTitle = $sectionTitle;
        $this->content = $content;
    }

    public function render() {
        // Output the content section
        echo <<<HTML
        <footer>
            <h2>{$this->sectionTitle}</h2>
            <p>{$this->content}</p>
        </footer>
        HTML;
    }
}

