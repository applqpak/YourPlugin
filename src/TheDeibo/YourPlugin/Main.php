<?php
namespace TheDeibo\YourPlugin;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\Server;

use TheDeibo\handlers\EventListener;

class Main extends PluginBase {
    
    public function onEnable()
    {
        #. This Part may be added on or not, it depends if it works or not... at the moment, it gives an error.
        #$this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
        #
        $this->saveDefaultConfig();
        $this->reloadConfig();
        $this->saveDefaultConfig();
        $this->getLogger()->info(TextFormat::RED . " Yayyy, YourPlugin is running on Version ".$this->getDescription()->getVersion());
    }
    public function onDisable()
    {
        $this->saveDefaultConfig();
    }
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case $this->getConfig()->get("0"):
                if (!($sender instanceof Player)){
                $sender->sendMessage(TEXTFORMAT::GOLD . "--------[" . $this->getConfig()->get("1") . "]--------");
                $sender->sendMessage . $this->getConfig()->get("2");
                $sender->sendMessage . $this->getConfig()->get("3");
                $sender->sendMessage . $this->getConfig()->get("4");
                $sender->sendMessage . $this->getConfig()->get("5");
                $sender->sendMessage . $this->getConfig()->get("6");
                $sender->sendMessage . $this->getConfig()->get("7");
                $sender->sendMessage . $this->getConfig()->get("8");
                $sender->sendMessage . $this->getConfig()->get("9");
                
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("thedeibo.yourplugin")){
                    $sender->sendMessage("" . "--------[" . $this->getConfig()->get("1") . "]--------");
                $sender->sendMessage(" " . $this->getConfig()->get("2"));
                $sender->sendMessage(" " . $this->getConfig()->get("3"));
                $sender->sendMessage(" " . $this->getConfig()->get("4"));
                $sender->sendMessage(" " . $this->getConfig()->get("5"));
                $sender->sendMessage(" " . $this->getConfig()->get("6"));
                $sender->sendMessage(" " . $this->getConfig()->get("7"));
                $sender->sendMessage(" " . $this->getConfig()->get("8"));
                $sender->sendMessage(" " . $this->getConfig()->get("9"));
                    return true;
                }
                break;
            }
        }
    }
?>
