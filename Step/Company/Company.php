<?php
/**
 * bla bla
 *
 * more bla bla
 *
 * @package PDO
 */

namespace Step\Company;

/**
 *  
 */
const SQLITE = "sqlite";
/**
 *  
 */
const PGRE   = "pgre";
/**
 *  
 */
const MYSQL  = "mysql";
/**
 * Class to create Multiple Instances of the PHP built-in PDO Class
 *
 */
class Database extends \Step\Company{
    /**
     *
     * @var str database-type : mysql,postgre,sqlite, 
     */
    public $pdo;
    /**
     *
     * @var str database host 
     */
    public $host;
    /**
     *
     * @var int database port 
     */
    public $port;
    /**
     *
     * @var str database name
     */
    public $database;
    /**
     *
     * @var str database user
     */
    public $user;
    /**
     *
     * @var bool persistent Connection
     */
    public $keepalive;
    /**
     * creating an Instance of PHP DATABASE OBJECT (PDO)
     *
     * @param $user
     * @param $pass
     * @param $arguments
     *
     * @return PDO
     *
     * @access public
     */
    public function instance($user="",$pass="",
            $arguments=array(\PDO::ATTR_PERSISTENT => false)) {
        //state!
        return new \PDO(                
            $this->pdo 
            . ":" .
            (($this->pdo!=SQLITE)? "host=":"" ).
            $this->host           
            .(($this->pdo!=SQLITE)? ";port" .
            $this->port
            . ";dbname=" .
            $this->database : ""), 
            $user,
            $pass,
            $arguments
            );
 
    }
    /**
     * Contructor of Factory
     *
     * @param $pdo
     * @param $host
     * @param $port
     * @param $database
     *
     * @access public
     */
    public function __construct($pdo,$host,$port="",$database="") {

        $this->pdo = $pdo;
        $this->host = $host;
        $this->port = $port;
        $this->database = $database;
    } 

}

?>
