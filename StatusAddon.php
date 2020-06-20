<?php

declare(strict_types = 1);

/**
 * @name StatusAddon
 * @version 1.0.0
 * @main JackMD\ScoreHud\Addons\StatusAddon
 * @depends status
 */

namespace JackMD\ScoreHud\Addons {
    
    use JackMD\ScoreHud\addon\AddonBase;
    use arclegrandroi\status\Status;
    use pocketmine\Player;
    
    class StatusAddon extends AddonBase {
        
		public function getProcessedTags(Player $player): array {

		 return [
		    "{status}" => Status::getInstance()->getStatus($player)
		    ];
		}
    }
}
