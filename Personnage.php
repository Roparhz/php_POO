<?php

class Personnage
{
    public string $nom;
    public string $profession;

    /**
     * @param string $nom
     * @param string $profession
     */
    public function __construct(string $nom, string $profession)
    {
        $this->nom = $nom;
        $this->profession = $profession;
    }
    public function blah()
    {
           echo 'je suis un '.$this->profession. ' et je m\'appelle '
               .$this->nom.' ';
    }
}