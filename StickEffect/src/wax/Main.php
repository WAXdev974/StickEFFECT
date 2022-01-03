<?php

namespace wax;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable ()
    {
        $this->getLogger()->notice("le plugin de stickEffect et actuellement Activé");
    }
}