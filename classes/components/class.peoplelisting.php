<?php

namespace Forge\Modules\People\Components;

use \Forge\Core\Abstracts\Components;
use \Forge\Core\Components\Listing;
use \Forge\Core\App\App;

use function \Forge\Core\Classes\i;

class PeopleListing extends Listing {

    public function prefs() {
        return array(
            'name' => i('People Listing'),
            'description' => i('List People from the Module.'),
            'id' => 'people-listing',
            'image' => '',
            'level' => 'inner',
            'container' => false
        );
    }

}

?>
