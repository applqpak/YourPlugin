<?php
namespace TheDeibo\YourPlugin;

use TheDeibo\handlers\EventListener;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;

class Main extends PluginBase {
    
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
        @mkdir($this->getDataFolder());
        $this->saveDefaultConfig();
        $this->reloadConfig();
        $this->saveDefaultConfig();
        $this->getLogger()->info(TextFormat::RED . " Yayyy, YourPlugin is running on Version ".$this->getDescription()->getVersion());
    }
    public function onDisable() {
      $this->getLogger()->info(TextFormat::RED . " YourPlugin has been Disabled.");
      }
      
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        $cmd = strtolower($command->getName());
        $command = $this->getConfig()->get("Command");
        switch ($cmd){
            case ($command):
                if (!($sender instanceof Player)){
                $sender->sendMessage(TEXTFORMAT::GOLD . $this->getConfig()->get("Name"));
                $sender->sendMessage . $this->getConfig()->get("Slot1");
                $sender->sendMessage . $this->getConfig()->get("Slot2");
                $sender->sendMessage . $this->getConfig()->get("Slot3");
                $sender->sendMessage . $this->getConfig()->get("Slot4");
                $sender->sendMessage . $this->getConfig()->get("Slot5");
                $sender->sendMessage . $this->getConfig()->get("Slot6");
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("yourplugin.command")){
                $sender->sendMessage . $this->getConfig()->get("Name");
                $sender->sendMessage . $this->getConfig()->get("Slot1");
                $sender->sendMessage . $this->getConfig()->get("Slot2");
                $sender->sendMessage . $this->getConfig()->get("Slot3");
                $sender->sendMessage . $this->getConfig()->get("Slot4");
                $sender->sendMessage . $this->getConfig()->get("Slot5");
                $sender->sendMessage . $this->getConfig()->get("Slot6");
                    return true;
                }
                break;
            }
        }
    }
?>
