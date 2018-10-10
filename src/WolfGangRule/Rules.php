<?php

/**
  * ___       _                  ___                 _                     ____
  *| __>_ _ _| |_ _ _  _ _  ___ | . \ ___  _ _  ___ | | ___  ___  ___  _ _|_  /
  *| _>| | | | | | | || '_>/ ._>| | |/ ._>| | |/ ._>| |/ . \| . \/ ._>| '_>/ / 
  *|_| `___| |_| `___||_|  \___.|___/\___.|__/ \___.|_|\___/|  _/\___.|_| /___|
  *                                                         |_|               
  *
  *  Creator: @Wolfkid200444
  *  Team: FutureDeveloperZ
  *  Link: http://github.com/FutureDeveloperZ
  *
**/

declare(strict_types=1);
namespace Rules;

// PocketMine
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

// Imported or Implements
use jojoe77777\FormAPI;

class Rules extends PluginBase implements Listener {
	
    public function onEnable(){
        $this->getLogger()->info("§aWolfGangUI Rules has been enabled!\n\n\n\§l§b§onSubcribe channel Wolfkid!!");
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
	
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        $player = $sender->getPlayer();
	switch($command->getName()){
           case "rules":
           $this->mainForm($player);
        }
        return true;
    }
	
    public function mainForm($player): void {
        $formapi = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
	$form = $formapi->createSimpleForm(function (Player $player, $data){
           switch ($data) {
           }
	});
	$form->setTitle("§l§eRules ");
	$form->setContent("§o§aPlease Read them Carefully!");
	$form->addLabel("§e1. Dont Hack");
	$form->addLabel("§e2. Dont Cheat");
	$form->addLabel("§e3. Dont be rude to people or STAFF ");
	$form->addLabel("§e4. Dont Team in SkyWars or Spleef");
	$form->addLabel("§e5. Dont Curse or Talk SOS words");
	$form->addLabel("§e6. Dont Do Bad Stuff");
	$form->sendToPlayer($player);
    }
}
			
