<?php

class CUser
{

    private $db;
    private $acronym;
    private $name;
    private $isAuthenticated = false;
    private $table;

    /**
     * Creates a new CUser
     * @param CDatabase $db The database this user is saved in
     */
    public function __construct($db, $table = 'user')
    {
        $this->db = $db;
        $this->table = $table;
        if(isset($_SESSION['user']) && $_SESSION['user']->table == $table)
        {
            $this->acronym = $_SESSION['user']->acronym;
            $this->name = $_SESSION['user']->name;
            $this->table = $_SESSION['user']->table;
            $this->isAuthenticated = true;
        }
    }

    /**
     * Tries to login to the database.
     * @param string $user     The acronym of the user
     * @param string $password The password of the user
     */
    public function Login($user, $password)
    {

        $qry = "SELECT acronym, name FROM {$this->table} WHERE acronym = ? AND password = md5(concat(?, salt))";
        $params = array($user, $password);
        $res = $this->db->ExecuteSelectQueryAndFetchAll($qry, $params);
        if(isset($res[0]))
        {
            $_SESSION['user'] = $res[0];
            $_SESSION['user']->table = $this->table;
            $this->acronym = $_SESSION['user']->acronym;
            $this->name = $_SESSION['user']->name;
            $this->isAuthenticated = true;
        }
    }

    /**
     * Logs the current user
     */
    public function Logout()
    {
        unset($_SESSION['user']);
        $this->acronym = "";
        $this->name = "";
        $this->isAuthenticated = false;
    }

    /**
     * Returns true if this user is logged in
     */
    public function IsAuthenticated()
    {
        return $this->isAuthenticated;
    }

    /**
     * Gets the acronym of this user
     */
    public function GetAcronym()
    {
        return $this->acronym;
    }

    /**
     * Gets the name (First name + last name) of this user
     */
    public function GetName()
    {
        return $this->name;
    }
}
