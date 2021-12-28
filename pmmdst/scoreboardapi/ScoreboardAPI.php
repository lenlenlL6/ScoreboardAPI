<?php
/*____                     _                         _    _    ____ ___ 
 / ___|  ___ ___  _ __ ___| |__   ___   __ _ _ __ __| |  / \  |  _ \_ _|
 \___ \ / __/ _ \| '__/ _ \ '_ \ / _ \ / _` | '__/ _` | / _ \ | |_) | | 
  ___) | (_| (_) | | |  __/ |_) | (_) | (_| | | | (_| |/ ___ \|  __/| | 
 |____/ \___\___/|_|  \___|_.__/ \___/ \__,_|_|  \__,_/_/   \_\_|  |___| 
*/
/**
 * This plugin made by pmmdst
 * Youtube: https://youtube.com/channel/UCChmZrlaOzary1F6mSz-W0w
 * Facebook: https://www.facebook.com/profile.php?id=100071316150096
*/
namespace pmmdst\scoreboardapi;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\network\mcpe\protocol\SetDisplayObjectivePacket;
use pocketmine\network\mcpe\protocol\SetScorePacket;
use pocketmine\network\mcpe\protocol\RemoveObjectivePacket;
use pocketmine\network\mcpe\protocol\types\ScorePacketEntry;

class ScoreboardAPI extends PluginBase implements Listener {
        
     public function onEnable(){
       $this->getLogger()->info("
       ____                     _                         _    _    ____ ___ 
 / ___|  ___ ___  _ __ ___| |__   ___   __ _ _ __ __| |  / \  |  _ \_ _|
 \___ \ / __/ _ \| '__/ _ \ '_ \ / _ \ / _` | '__/ _` | / _ \ | |_) | | 
  ___) | (_| (_) | | |  __/ |_) | (_) | (_| | | | (_| |/ ___ \|  __/| | 
 |____/ \___\___/|_|  \___|_.__/ \___/ \__,_|_|  \__,_/_/   \_\_|  |___|");
     }
     //Api
     public function createScoreboard(Player $player, string $objective, string $displayname) : void{
       $pk = new SetDisplayObjectivePacket();
       $pk->objectiveName = $objective;
       $pk->displayName = $displayname;
       $pk->displaySlot = "sidebar";
       $pk->sortOrder = 0;
       $pk->criteriaName = "dummy"; 
       $player->sendDataPacket($pk);
     }
     
     public function removeScoreboard(Player $player, string $objective) : void{
       $pk = new RemoveObjectivePacket();
       $pk->objectiveName = $objective;
       $player->sendDataPacket($pk);
     }
     
     public function addEntry(Player $player, string $objective, int $score, string $text) : void{
       $entry = new ScorePacketEntry();
       $entry->objectiveName = $objective;
       $entry->score = $score;
       $entry->scoreboardId = $score;
       $entry->type = 3;
       $entry->customName = $text;
       $pk = new SetScorePacket();
       $pk->type = 0;
       $pk->entries[$score] = $entry;
       $player->sendDataPacket($pk);
     }
}
