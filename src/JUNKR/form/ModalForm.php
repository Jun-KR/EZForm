<?php

namespace JUNKR\form;

final class ModalForm extends \JUNKR\FormBase{

    private $json = [
        'type' => 'modal',
        'title' => 'Title',
        'content' => 'Content',
        'button1' => 'Button1',
        'button2' => 'Button2'
    ];

    public function setContent(string $content){
        $this->json['content'] = $content;
    }

    public function setButton1(string $text){
        $this->json['button1'] = $text;
    }

    public function setButton2(string $text){
        $this->json['button2'] = $text;
    }

}