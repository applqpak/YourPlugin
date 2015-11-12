<?php
namespace TheDeibo\handlers;
use TheDeibo\YourPlugin\Main;
use pocketmine\event\Listener;
class EventListener {
  private $plugin;
  public function __construct(Main $plugin)
  {
    $this->plugin = $plugin;
  }
}
