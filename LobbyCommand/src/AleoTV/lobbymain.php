<?php

namespace AleoTV;


use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\{Command, CommandSender};


class main extends PluginBase {
 public $prefix = "LobbyCommand"
     public function onEnable() {
          $this->getLogger()->info($this->prefix . "Plugin wurde aktiviert");
     }
} 