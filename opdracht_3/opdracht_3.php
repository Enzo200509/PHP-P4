<?php

/**
 * Class muis
 */
class muis
{
    /**
     * @var
     */
    public $soort;
    public $kleur;


    /**
     * Muis constructor.
     * @param $soort
     * @param $kleur
     */
function __construct($soort, $kleur)
    {
        $this->soort = $soort;
        $this->kleur = $kleur;
    }
    public function text()
    {
        echo "Dit is een {$this->soort} muis en heeft de kleur {$this->kleur}.";
    }
}

/**
 * Class razer
 */
class razer extends Muis {
    public $materiaal;

    /**
     * razer constructor.
     * @param $soort
     * @param $kleur
     * @param $materiaal
     */

    public function __construct($soort, $kleur, $materiaal) {
        $this->soort = $soort;
        $this->kleur = $kleur;
        $this->materiaal = $materiaal;
    }
    public function text() {
        echo "Deze muis is een{$this->soort}, de kleur is {$this->kleur}, en hij is van {$this->materiaal}.";
    } 
}
$razer = new razer(" razer", "zwart", "plastic");
echo "<br>";
$razer->text();
echo "<br>";
$muis   = new Muis("Logitech", "wit");
$muis->text();
?>