<?php

namespace Forge\Modules\People;

use \Forge\Core\Abstracts\DataCollection;



class PeopleCollection extends DataCollection {
    public $permission = "manage.forge-people";

    protected function setup() {
        $this->preferences['name'] = 'forge-people';
        $this->preferences['title'] = i('People', 'forge-people');
        $this->preferences['all-title'] = i('Manage people', 'forge-people');
        $this->preferences['add-label'] = i('Add person', 'forge-people');
        $this->preferences['single-item'] = i('People', 'forge-people');
    }

    public function custom_fields() {
        $this->addFields([
            [
                'key' => 'image',
                'label' => i('Image of that person', 'forge-people'),
                'multilang' => true,
                'type' => 'image',
                'order' => 30,
                'position' => 'left',
                'hint' => ''
            ],
            [
                'key' => 'email',
                'label' => i('E-mail adress', 'forge-people'),
                'multilang' => true,
                'type' => 'text',
                'order' => 30,
                'position' => 'left',
                'hint' => ''
            ]
        ]);
    }
}

?>
