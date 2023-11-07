<?php
namespace Src\Template;
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
        echo "
        <!DOCTYPE html>
        <html>
        <head>
            <title>{$this->pageTitle}</title>
        </head>
        <body>
        <header>
            <h1>{$this->siteTitle}</h1>
        </header>
        ";
    }

    public function renderFooter() {
        // Output the footer section
        echo "
        </body>
        </html>
        ";
    }
}
