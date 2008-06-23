<?

/**
 *	@author		Seth_ Gregg
 *	@mail		greg.seth@gmail.com
 *	@version	2.0.1
 *	@date		2008:01:14
 */
 
/**
 *	Classe de connexion  une base MySQL
 */
class MySqlConnect {
	var $server;
	var $db;
	var $user;
	var $pwd;
	
	var $cx;
	var $results;
	var $reqCount = 0;
	
	var $msgStack;
	var $isConnected = false;
	
	/**
	 *	Constructeur de la classe. Initialise les variables et se connecte
	 *	 la base choisie/
	 *	@param	$server		Le serveur de la base
	 *	@param	$user		Le nom d'utilisateur de la base
	 *	@param	$pwd		Le mot de passe de la base
	 *	@param	$db			Le nom de la base de donnes
	 */
	function MySqlConnect($server, $user, $pwd, $db) {
		$this->server = $server;
		$this->db = $db;
		$this->user = $user;
		$this->pwd = $pwd;
		
		$this->msgStack[] = 'Operation succeeded';
		
		$this->connect() or $this->msgStack[] = mysql_error();
	}
	
	/**
	 *	Retourne true si la connexion est russie, false en cas d'chec
	 */
	function connect() {
		$this->cx = mysql_connect($this->server, $this->user, $this->pwd);
		if (!$this->cx) return false;
		$this->isConnected = mysql_select_db($this->db, $this->cx);
		return $this->isConnected;
	}
	
	/**
	 *	Envoie un requte  la base.
	 *	@param	$req		La requte au format SQL
	 *	@param	$singleRow	Paramtre optionnel qui permet de spcifier si on veut 
	 *						seulement la premire ligne du rsultat. Vaut false pas dfaut.
	 *	@return				Suivant les cas :
	 *							- Un tableau  deux dimensions contenant le rsultat de 
	 *								la requte (si SELECT).
	 *							- Un tableau  une dimension contenant le rsultat de la 
	 *								requte (si SELECT et que $singleRow vaut true).
	 *							- Le nombre de lignes affectes par la requte 
	 *								(si DELETE ou UPDATE).
	 *							- false en cas d'chec de la requte.
	 */
	function query($req, $singleRow=false, $singleVal=false) {
		if ($this->isConnected) {
			$this->reqCount++;
			$req = trim($req);
			$selectCmd = (substr($req, 0, 6) == 'SELECT');
			if (empty($this->results[$req]) || !$selectCmd) {
				if (!($res = mysql_query($req, $this->cx)))  echo mysql_error().':<br />'.$req.'<br />';
				if ($res) {
					if ($selectCmd) {
						$result = array();
						while ($row = mysql_fetch_array($res)) {
							array_walk($row, 'specialChars');
							if ($singleRow) {
								if ($singleVal) $result = $row[0];
								else $result = $row;
								break;
							} else {
								$result[] = $row;
							}
						}
					} else {
						$result = mysql_affected_rows($this->cx);
					}
					
					$this->results[$this->reqCount] = $result;
					$this->results[$req] = $result;
				} else {
					$this->msgStack[] = mysql_error($this->cx);
					return false;
				}
			}
			return $this->results[$req];
		}
		return false;
	}
	
	function getLastId() {
		return mysql_insert_id($this->cx);
	}
	
	function escape($string) {
		//return utf8_decode(mysql_real_escape_string($string, $this->cx));
		return mysql_real_escape_string($string, $this->cx);
		//return $string;
	}
	
	/**
	 *	Retourne les dernier message de la pile
	 *	@return		Le message
	 */
	function getMsg () {
		return array_pop($this->msgStack);
	}
	
	/**
	 *	Ferme la connexion  la base
	 */
	function close () {
		mysql_close($this->cx);
	}
}
	
function specialChars(&$item, $key) {
	$item = utf8_encode($item);
}
