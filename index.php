<?php
class Cookie {
    private $type;

    private $availableTypes = ['шоколадное', 'овсяное', 'кокосовое', 'ванильное'];

    public function setType($type) {
        if (in_array($type, $this->availableTypes)) {
            $this->type = $type;
        } else {
            echo "Тип печенья '$type' недоступен.\n";
        }
    }

    public function getType() {
        return $this->type ? $this->type : "Тип печенья не установлен.";
    }
}

$cookie = new Cookie();

$cookie->setType('шоколадное');
echo "Тип печенья: " . $cookie->getType() . "\n"  . "<br>";

$cookie->setType('кокосовое');
echo "Тип печенья: " . $cookie->getType() . "\n"  . "<br>";

$cookie->setType('ванильное');