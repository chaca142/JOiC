<?php

namespace chaca142;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class joic extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("§aJOiCが読み込まれました");
    }

    public function onJoin(PlayerJoinEvent $event){
        if(!$event->getPlayer()->isOp()) return false;
        $event->getPlayer()->setGamemode(1);
        return false;
    }
}