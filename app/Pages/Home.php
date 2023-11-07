<?php
namespace App\Pages;

use App\Components\Header;
use App\Template\Layout;

class Home extends Layout {

    public $data;
    public function __construct(mixed $data = null) {
        parent::__construct("Home", "My Website");
        $this->data = $data;
    }

    public function render() {
        $this->renderHeader();
        $contentComponent = new Header("Welcome to the Home Page", "This is the content for the home page.");
        $contentComponent->render();
        $this->renderFooter();
    }
}

