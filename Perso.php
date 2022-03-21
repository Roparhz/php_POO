<?php

class Perso
{
    private string $nom;
    private string $profession;
    private int $pv;
    private int $atk;

    /**
     * @param string $nom
     * @param string $profession
     * @param int $pv
     * @param int $atk
     */
    public function __construct(
        string  $nom,
        string $profession,
        int $pv,
        int $atk
    ) {
        $this->setNom($nom);
        $this->setProfession($profession);
        $this->setPv($pv);
        $this->setAtk($atk);

        $this->message();
    }

    public function message()
    {
        echo 'je suis un '.$this->profession. ' et je m\'appelle '
            .$this->nom. ' ';
    }
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param string $profession
     */
    public function setProfession(string $profession): void
    {
        $this->profession = $profession;
        $professionDisponible = ['roi','reine','druide', 'chevalier'];
        if (!in_array(strtolower($profession), $professionDisponible)){
            throw new Exception('Cette profession n\'existe pas');
        }
        $this->profession = strtolower($profession);
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getPv(): int
    {
        return $this->pv;
    }

    /**
     * @param int $pv
     */
    public function setPv(int $pv): void
    {
        $this->pv = $pv;
    }

    /**
     * @return int
     */
    public function getAtk(): int
    {
        return $this->atk;
    }

    /**
     * @param int $atk
     */
    public function setAtk(int $atk): void
    {
        $this->atk = $atk;
    }

}