<?php
// src/AppBundle/Entity/User.php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**

 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="prenom", type="string", length=255)
     *
     * @Assert\NotBlank(message="Taper votre Prénom", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max="255",
     *     minMessage="Taper un prénom valid.",
     *     maxMessage="Taper un prénom valid.",
     *     groups={"Registration", "Profile"}
     * )
     */

    protected $prenom;

    /**
     * @ORM\Column(name="nom", type="string", length=255)
     *
     * @Assert\NotBlank(message="Taper votre Nom", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max="255",
     *     minMessage="Taper un nom valid.",
     *     maxMessage="Taper un nom valid.",
     *     groups={"Registration", "Profile"}
     * )
     */

    protected $nom;

    /**
     * @ORM\Column(name="tel", type="string", length=255)
     *
     * @Assert\NotBlank(message="Taper votre Télephone", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max="8",
     *     minMessage="Taper un télephone valid.",
     *     maxMessage="Taper un télephone valid.",
     *     groups={"Registration", "Profile"}
     * )
     */

    protected $tel;

    /**
     * @ORM\Column(name="cin", type="string", length=255)
     *
     * @Assert\NotBlank(message="Taper votre CIN", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max="8",
     *     minMessage="Taper un numéro de CIN valide.",
     *     maxMessage="Taper un numéro de CIN valide.",
     *     groups={"Registration", "Profile"}
     * )
     */

    protected $cin;





    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return User
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }


}
