<?php

class Form {
    protected $debut = "<form>";
    protected $inputText = '<input type="text">';
    protected $select = '<select></select>';
    protected $subBtn = '<button type="submit"></button>';
    protected $textarea = '<textarea></textarea>';
    protected $radio = '<input type="radio">';
    protected $checkbox = '<input type="checkbox"';
    protected  $fin = '</form>';

    public function getDebut()
    {
        return $this->debut;
    }

    public function getInputText()
    {
        return $this->inputText;
    }

    public function getSelect()
    {
        return $this->select;
    }

    public function getSubBtn()
    {
        return $this->subBtn;
    }

    public function getTextarea()
    {
        return $this->textarea;
    }

    public function getRadio()
    {
        return $this->radio;
    }

    public function getCheckbox()
    {
        return $this->checkbox;
    }

    public function getFin()
    {
        return $this->fin;
    }




}