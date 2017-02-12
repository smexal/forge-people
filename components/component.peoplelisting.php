<?php

namespace Forge\Modules\People\Components;

use Forge\Core\Classes\Media;
use \Forge\Core\Abstracts\Components;
use \Forge\Core\App\App;
use \Forge\Core\Components\Listing;
use function \Forge\Core\Classes\i;

class PeoplelistingComponent extends Listing {
    protected $collection = 'forge-people';

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

    public function renderItem($item) {
        $image = $item->getMeta('image');
        $image = new Media($image);
        return App::instance()->render(MOD_ROOT.'forge-people/templates/', 'listing-item', array(
            'title' => $item->getMeta('title'),
            'description' => $item->getMeta('description'),
            'email' => $item->getMeta('email'),
            'image' => [
                'src' => $image->url.$image->name,
                'alt' => $item->getMeta('title')
            ]
        ));
    }

}

?>
