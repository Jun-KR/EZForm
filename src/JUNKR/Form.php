<?php

namespace JUNKR;

class FormBase implements \pocketmine\form\Form{

    protected $json;
    protected $callable;

    public function __construct(?callable $callable){
        $this->callable = $callable;
    }

    public function setTitle(string $title){
        $this->json['title'] = $title;
    }

    public function jsonSerialize() : array{
        return $this->json;
    }

    public function handleResponse(\pocketmine\Player $player, $data) : void{
        if(($callable = $this->callable) !== null){
            $callable($player, $data);
        }
    }

}
