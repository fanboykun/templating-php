<?php
namespace Src\View;

use Src\Components\Header;
use Src\Template\Layout;

// HomeView.php
class Home extends Layout {
    public function __construct() {
        parent::__construct("Home", "My Website");
    }

    public function render() {
        $this->renderHeader();
        $contentComponent = new Header("Welcome to the Home Page", "This is the content for the home page.");
        $contentComponent->render();
        $this->renderFooter();
    }
}

