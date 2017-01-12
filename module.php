<?php

namespace Forge\Modules\People;

use \Forge\Core\Abstracts\Module as AbstractModule;
use \Forge\Loader;

use function \Forge\Core\Classes\i;

class Module extends AbstractModule {

    public function setup() {
        $this->version = '1.0.0';
        $this->id = "forge-people";
        $this->name = i('People', 'forge-people');
        $this->description = i('Module to manage, display and configure people.', 'forge-people');
        $this->image = $this->url().'assets/images/module-image.png';
    }

    public function start() {
        Loader::instance()->loadDirectory($this->directory().'classes/collections/');
    }

}

?>
