<?php
namespace App\Template;
// Template.php
class Layout {
    protected $pageTitle;
    protected $siteTitle;

    public function __construct($pageTitle, $siteTitle) {
        $this->pageTitle = $pageTitle;
        $this->siteTitle = $siteTitle;
    }

    public function renderHeader() {
        // Output the header section
        echo <<<HTML
        <!DOCTYPE html>
            <html>
            <head>
                <title>{$this->pageTitle}</title>
            </head>
            <body>
            <header>
                <h1>{$this->siteTitle}</h1>
            </header>
        HTML;
    }

    public function renderFooter() {
        // Output the footer section
        echo <<<HTML
        </body>
        </html>
        HTML;
    }
}
