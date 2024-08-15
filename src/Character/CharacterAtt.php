<?php

namespace Rpg\Ptpdeux\Character;


abstract class CharacterAtt
{
    protected string $name;

    protected int $exp;                       /**     @var int Experience     */
                                            // Erfahrungspunkte
    protected int $lvl;                       /**     @var int Level      */
                                            // ..
    protected int $hp;                        /**     @var int Health Points     */
                                            // Gesundheit
    protected int $ap;                        /**     @var int Attack Points     */
                                            // Stärke
    protected float $af;                      /**     * @var float Attack Bonus Factor     */
                                            // Faktor für die Angriffsstärke
    protected int $dp;                        /**     * @var int Defense Points     */
                                            // Verteidigung
    protected float $df;                      /**     * @var float Defense Factor     */
                                            // Faktor für die Verteidigung
    protected int $cp;                        /**     * @var int Critical Points     */
                                            // kritischer Schaden
    protected float $cf;                      /**     * @var float Critical Bonus Factor     */
                                            // Faktor für kritischen Treffer
    protected int $agp;                       /**     @var int agility Points     */
                                            // Beweglichkeit
    protected float $agf;                     /**     @var float agility Factor   */
                                            // Faktor für die Beweglichkeit
    protected int $dop;                       /**     @var int dodge Points   */
                                            // Ausweichen
    protected float $dof;                     /**     @var float dodge Factor     */
                                            // Faktor zum Ausweichen
    /**
                                             * @param string $name
                                             * @param int $hp
                                             * @param int $ap
                                             * @param float $af
                                             * @param int $dp
                                             * @param float $df
                                             * @param int $cp
                                             * @param float $cf
                                             */
    public function __construct(
        string $name,
        int $exp = 1,
        int $lvl = 1,
        int $hp = 100,
        int $ap = 1,
        float $af = 0.1,
        int $dp = 1,
        float $df = 0.1,
        int $cp = 1,
        float $cf = 0.1,
        int $agp = 1,
        float $agf = 0.1,
        int $dop = 1,
        float $dof =0.1,

    )
    {
        $this->name = $name;
        $this->exp = $exp;
        $this->lvl = $lvl;
        $this->hp = $hp;
        $this->ap = $ap;
        $this->af = $af;
        $this->dp = $dp;
        $this->df = $df;
        $this->cp = $cp;
        $this->cf = $cf;
        $this->agp = $agp;
        $this->agf = $agf;
        $this->dop = $dop;
        $this->dof = $dof;


    }

    public function __toString(): string
    {
        return $this->name;
    }


    public function getName(): string                       /**     * @return string     */
        {   return $this->name;    }

    public function setName(string $name): void             /**     * @param string $name     */
        {   $this->name = $name;    }


    public function getHp(): int                            /**     * @return int     */
        {   return $this->hp;    }


    public function setHp(int $hp): void                    /**     * @param int $hp     */
        {   $this->hp = $hp;    }

                    /**     * @return int     */
    public function getAp(): int                            {   return $this->ap;    }

                    /**     * @param int $ap     */
    public function setAp(int $ap): void                    {   $this->ap = $ap;    }

                    /**     * @return float     */
    public function getAf(): float                          {   return $this->af;    }

                    /**     * @param float $af     */
    public function setAf(float $af): void                  {   $this->af = $af;    }

                    /**     * @return int     */
    public function getDp(): int                            {   return $this->dp;   }

                    /**     * @param int $dp     */
    public function setDp(int $dp): void                    {   $this->dp = $dp;    }

                    /**     * @return float     */
    public function getDf(): float                          {   return $this->df;    }

                    /**     * @param float $df     */
    public function setDf(float $df): void                  {   $this->df = $df;  }

                    /**     * @return int     */
    public function getCp(): int                            {   return $this->cp;   }

                    /**     * @param int $cp     */
    public function setCp(int $cp): void                    {   $this->cp = $cp;    }

                    /**     * @return float     */
    public function getCf(): float                          {   return $this->cf;   }

                    /**     * @param float $cf     */
    public function setCf(float $cf): void                  {   $this->cf = $cf;    }


    /**
     * @return int
     */
    public function getExp(): int
    {
        return $this->exp;
    }

    /**
     * @param int $exp
     */
    public function setExp(int $exp): void
    {
        $this->exp = $exp;
    }

    /**
     * @return int
     */
    public function getLvl(): int
    {
        return $this->lvl;
    }

    /**
     * @param int $lvl
     */
    public function setLvl(int $lvl): void
    {
        $this->lvl = $lvl;
    }

    /**
     * @return int
     */
    public function getAgp(): int
    {
        return $this->agp;
    }

    /**
     * @param int $agp
     */
    public function setAgp(int $agp): void
    {
        $this->agp = $agp;
    }

    /**
     * @return float
     */
    public function getAgf(): float
    {
        return $this->agf;
    }

    /**
     * @param float $agf
     */
    public function setAgf(float $agf): void
    {
        $this->agf = $agf;
    }

    /**
     * @return int
     */
    public function getDop(): int
    {
        return $this->dop;
    }

    /**
     * @param int $dop
     */
    public function setDop(int $dop): void
    {
        $this->dop = $dop;
    }

    /**
     * @return float
     */
    public function getDof(): float
    {
        return $this->dof;
    }

    /**
     * @param float $dof
     */
    public function setDof(float $dof): void
    {
        $this->dof = $dof;
    }
}