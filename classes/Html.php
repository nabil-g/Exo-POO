<?php

class Html {
    public function setCssLink($url) {
        return '<link rel="stylesheet" type="text/css" href="' . $url .'">';
    }

    public function setMeta($attributs) {
        return '<meta ' . $attributs . ' >';
    }

    public function setImage($url, $alt) {
        return '<img src="' . $url .'" alt="' . $alt . '" >';
    }

    public function setAnchor($url, $name) {
        return '<a href="' . $url . '">' . $name . '</a>';
    }

    public function setScript($url) {
        return '<script type="text/javascript" src="' . $url . '"></script>';
    }
}