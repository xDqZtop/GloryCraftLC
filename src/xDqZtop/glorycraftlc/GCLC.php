<?php

declare(strict_types=1);

namespace xDqZtop\glorycraftlc;

use pocketmine\plugin\PluginBase;

class GCLC extends PluginBase {


    private static ?GCLC $instance = null;

    public static function getInstance() : GCLC {
        return self::$instance;
    }

    public function onLoad() : void {
        self::$instance = $this;
    }

    public function onEnable() : void {
        self::$instance = $this;
        $logger = $this->getLogger();
        $logger->notice("GloryCraftLC is Loading...");
        $logger->notice("GloryCraftLC is Enabled!");
    }

    public function onDisable() : void {
        $logger = $this->getLogger();
        $logger->notice("GloryCraftLC is Disabled!");
    }
}
