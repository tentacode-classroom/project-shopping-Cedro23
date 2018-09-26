<?php
/**
 * Created by PhpStorm.
 * User: Cedric
 * Date: 26/09/2018
 * Time: 12:17
 */

namespace App\Entity;


class User
{
    private $id;
    private $email;
    private $password;
    private $firstname;
    private $lastname;

    public function __construct(int $_id, string $_email, string $_password, string $_firstname, string $_lastname)
    {
        $this->id = $_id;
        $this->email = $_email;
        $this->password = $_password;
        $this->firstname = $_firstname;
        $this->lastname =$_lastname;
    }
}