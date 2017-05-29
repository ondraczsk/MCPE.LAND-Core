<?php

namespace mcpelandcore; 

use pocketmine\plugin\PluginBase;

use pocketmine\utils\Config;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\player\PlayerQuitEvent;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;


class Main extends PluginBase{ 
  
 public function onEnable(){
                    $this->getLogger()->info("Enabled Core");
  $this->getServer()->getCommandMap()->getCommand("help")->setLabel("ddeucisiqqueme_hei-f_fds_wrwr");
  $this->getServer()->getCommandMap()->getCommand("help")->unregister($this->getServer()->getCommandMap());
  $this->getServer()->getCommandMap()->getCommand("ver")->setLabel("ddeucisiqqueme_hei-f_fdssagzt_wrwr");
  $this->getServer()->getCommandMap()->getCommand("ver")->unregister($this->getServer()->getCommandMap());
  $this->getServer()->getCommandMap()->getCommand("version")->setLabel("ddeucisiqqueme_hei-f_fds_wrssfrwr");
  $this->getServer()->getCommandMap()->getCommand("version")->unregister($this->getServer()->getCommandMap());
  $this->getServer()->getCommandMap()->getCommand("about")->setLabel("ddeucisiqqueme_hei-f_fds_wrgwr");
  $this->getServer()->getCommandMap()->getCommand("about")->unregister($this->getServer()->getCommandMap());
  
          }
          
          
  public function onJoin(PlayerJoinEvent $event){
   $player = $event->getPlayer();
   $name = $player->getName();  
   }
  
  
  public function onCommand(CommandSender $sender,Command $cmd,$label,array $args){
 /*   switch(strtolower($command->getName())){
      case "minihry":
               if ($sender instanceof Player) {
                    if (!(isset($args[0]))) {
                            $sender->sendMessage($this->prefix . "Please type '/minihry'.");
                            return true;        
             }
              $arg = array_shift($args);
                    switch ($arg) {
                        case "id":
                            if ($sender->hasPermission("slapper.id") || $sender->hasPermission("slapper")) {
                                $this->idSessions[$sender->getName()] = true;
                                $sender->sendMessage($this->prefix . "Hit an entity to get its ID!");
                                return true;
                            } else {
                                $sender->sendMessage($this->noperm);
                                return true;
                            }
                            break;
                        }     
             
             
    } */
    
    
    if($cmd->getName() == "minihry"){
     if(!$sender instanceof Player){ 
          $sender->sendMessage("Tento prikaz nejde v konzoli, sorry jako!"); 
     }else{ 
          $sender->getInventory()->addItem(Item::get(364,0,4));
          $sender->sendMessage("You have just recieved 4 steak!");
     }
}
 return true;
 
 
 
 
 
 
 //end of function onCommand 
   } 
}   




} //end
