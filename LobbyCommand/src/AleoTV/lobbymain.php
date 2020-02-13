<?php

namespace AleoTV;


use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\{Command, CommandSender};

class Main extends PluginBase {
 
 $prefix = "LobbyCommand"

public funtion onEnable(){
 $this->getLogger()->info($this->prefix . "Plugin wurde aktiviert");
} 


public funtion on command(CommandSender $player, Command $cmd, string $label, array $args):bool {

switch($cmd->get name()){
case "discord":
if ($player instanceof Player){
     $player->sendMessage("https://discord.gg/ExUPBYe");
}
break;
}

  return true;
}  )




