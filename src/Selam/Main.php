<?php

namespace Selam;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\Listener;
use pocketmine\{Player, Server};

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
/**
 * @param \pocketmine\event\player\PlayerChatEvent $event
 * @priority LOWEST
 */

    public function onChat(PlayerChatEvent $e){
		$mesaj = strtolower($e->getMessage());
		$tag = null;
		if (substr($mesaj,0,1) == "!"){
			$mesaj = substr($mesaj,1);
			$tag = "!";
		}
		if ($mesaj == "sa"){
			$e->setMessage($tag . "Selamun Aleyküm");
		}elseif ($mesaj == "as"){
			$e->setMessage($tag . "Aleyküm Selam");
		}
	}
}

?>