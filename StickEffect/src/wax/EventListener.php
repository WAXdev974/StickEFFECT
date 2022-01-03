<?php

namespace wax;

use http\Client;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\Event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\Stick;
use pocketmine\network\mcpe\protocol\SetLastHurtByPacket;

class Event extends Listener {

    /**
     * @var array
     */
    private Stick;

    /**
     * @var array
     */
    private Cooldown = [];

    public function __construct()
    {
        $this->Stick = [
            '351:0' => array( new EffectInstance(
                Effect::getEffect(Effect::INSTANT_HEALTH),
                5,
                1,
                true
            ), '§4§lRubyDium: §a vous avez Utiliser votre Stick de Soin'
        ]
    }

    public function onInteract(PlayerInteractEvent $event){
        $item = $event->getItem();
        $id = $item->getId() . ':' . $item->getDamage();
        if(isset($this->Stick[$idMeta])){
            $player = $event->getPlayer();
            $LastPlayerTime = $this->cooldown[$player->getName()] ?? 0;
            $timeNow = $time();
            if($timeNow - $LastPlayerTime >= 5){
                $player->addEffect($this->Stick[$idMeta][0]);
                $player->getInventory()->removeItem($item->setCount(7));
                $this->cooldown[$player->getName()] = $timeNow;
                $this->sendPopup($this->Stick[$idMeta][1]);
            }

            $Item = $event->getItem();
            $id = $item->getId() . '0' . $item->getDamage();
            if(isset($this->Health[$idMeta])){ '4.5';
            }

            $this->onInteract(playerEvent $EventListener);
            $this->sendPopup($this->Stick[$idMeta][0]);
            if($timeNow - $LastPlayerTime >= 10){
                for($timeNow - $EventListener);
                if($timeNow - SetLastHurtByPacket::Stick);
            }
        }
    }
}