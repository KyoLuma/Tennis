<?php
// src/AppBundle/Entity/User.php

namespace TennisBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use FOS\UserBundle\Controller\ProfileController;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="first_name", type="string")
     */

    protected $first_name;

    /**
     * @ORM\Column(name="last_name", type="string")
     */

    protected $last_name;

    /**
     * @ORM\Column(name="profile_picture", type="string", nullable=true)
     */

    protected $profile_picture;

    /**
     * @ORM\Column(name="town", type="string", nullable=true)
     */

    protected $town;

    /**
     * @ORM\Column(name="zip_code", type="integer", nullable=true)
     */

    protected $zip_code;

    /**
     * @ORM\Column(name="level", type="string", nullable=true)
     */

    protected $level;

    /**
     * @ORM\Column(name="rating", type="integer", nullable=true)
     */

    protected $rating;

    /**
     * @ORM\Column(name="description", type="text", nullable=true)
     */

    protected $description;

    /**
     * @ORM\Column(name="datebirth", type="date", nullable=true)
     */

    protected $datebirth;

    /**
     * @ORM\Column(name="favorite_player", type="string", nullable=true)
     */

    protected $favorite_player;

    /**
     * @ORM\Column(name="gender", type="string", nullable=true)
     */

    protected $gender;

    /**
     * @ORM\Column(name="phone_number", type="integer", nullable=true)
     */

    protected $phone_number;

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set profilePicture
     *
     * @param string $profilePicture
     *
     * @return User
     */
    public function setProfilePicture($profilePicture)
    {
        $this->profile_picture = $profilePicture;

        return $this;
    }

    /**
     * Get profilePicture
     *
     * @return string
     */
    public function getProfilePicture()
    {
        return $this->profile_picture;
    }

    /**
     * Set town
     *
     * @param string $town
     *
     * @return User
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set zipCode
     *
     * @param integer $zipCode
     *
     * @return User
     */
    public function setZipCode($zipCode)
    {
        $this->zip_code = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return integer
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return User
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return User
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return User
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    

    /**
     * Set datebirth
     *
     * @param \DateTime $datebirth
     *
     * @return User
     */
    public function setDatebirth($datebirth)
    {
        $this->datebirth = $datebirth;

        return $this;
    }

    /**
     * Get datebirth
     *
     * @return \DateTime
     */
    public function getDatebirth()
    {
        return $this->datebirth;
    }

    /**
     * Set favoritePlayer
     *
     * @param string $favoritePlayer
     *
     * @return User
     */
    public function setFavoritePlayer($favoritePlayer)
    {
        $this->favorite_player = $favoritePlayer;

        return $this;
    }

    /**
     * Get favoritePlayer
     *
     * @return string
     */
    public function getFavoritePlayer()
    {
        return $this->favorite_player;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     *
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phone_number = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return integer
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }
}
