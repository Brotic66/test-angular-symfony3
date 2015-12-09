<?php
/**
 * Created by PhpStorm.
 * User: brice
 * Date: 09/12/15
 * Time: 15:23
 */

namespace AppBundle;


class Personne
{
    private $nom;
    private $prenom;
    private $age;

    /**
     * @var array
     */
    private $amis;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return array
     */
    public function getAmis()
    {
        return $this->amis;
    }

    /**
     * @param array $amis
     */
    public function setAmis($amis)
    {
        $this->amis = $amis;
    }


}