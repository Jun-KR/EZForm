<?php

namespace JUNKR\form;

final class CustomForm extends \JUNKR\FormBase{

    protected $json = ['type' => 'custom_form', 'title' => 'Title', 'content' => []];

    public function addInput(string $text, ?string $default = null, ?string $placeholder = null){
        $d = ['type' => 'input', 'text' => $text];

        if($default !== null){
            $d['default'] = $default;
        }
        if($placeholder !== null){
            $d['placeholder'] = $placeholder;
        }

        $this->json['content'][] = $d;
    }

    public function addDropdown(string $text, array $options, int $default = null){
        $this->json['content'][] = [
            'type' => 'dropdown',
            'text' => $text,
            'options' => $options,
            'default' => $default
        ];
    }

    public function addLabel(string $text){
        $this->json['content'][] = ['type' => 'label', 'text' => $text];
    }

    public function addToggle(string $text, bool $default = true){
        $this->json['content'][] = ['type' => 'toggle', 'text' => $text, 'default' => $default];
    }

    public function addSlider(string $text, int $min, int $max, int $default = 1, int $step = 1){
        $this->json['content'][] = [
            'type' => 'slider',
            'text' => $text,
            'max' => $max,
            'min' => $min,
            'default' => $default
        ];
    }

    public function addStepSlider(string $text, array $steps, int $default = 1){
        $this->json['content'][] = [
            'type' => 'step_slider',
            'text' => $text,
            'steps' => $steps,
            'default' => $default
        ];
    }

}
