<?php

namespace JUNKR\form;

final class ButtonForm extends \JUNKR\FormBase{

    public $json = ['type' => 'form', 'title' => 'Title', 'Content' => 'content', 'buttons' => []];

    public function setContent(string $content){
        $this->json['content'] = $content;
    }

    public function addButton(string $text, $isurl = false, ?string $imageUrl = null){
        $b = ['text' => $text];
        if($imageUrl !== null){
            $b['image'] = ['type' => ($isurl ? "url" : "path"), 'data' => $imageUrl];
        }

        $this->json ['buttons'][] = $b;
    }

}