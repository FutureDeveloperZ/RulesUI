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
*/


namespace Rules;

//**PocketMine**\\
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\{command\ConsoleCommandSender, Server, Player, utils\TextFormat};
use pocketmine\plugin\PluginBase;

//**Custom Plugin**\\
use jojoe77777\FormAPI;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getLogger()->Info("§aWolfGangUI Rules has been enabled!\n\n\n\§l§b§onSubcribe channel Wolfkid!!");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		$player = $sender->getPlayer();
		switch($cmd->getName()){
			case "rules":
			$this->mainForm($player);
        }
        return true;
    }
	
	public function mainForm($player){
		if($player instanceof Player){
			$formapi = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
			$form = $formapi->createSimpleForm(function (Player $event, array $data){
				$player = $event->getPlayer();
				if(isset($data[0])){
					switch($data[0]){
						}
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
			