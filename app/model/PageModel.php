<?php

namespace FindCode\Model;


use Formation\MVC\SubjectInterface;
use Lib\Manager\Manager;
use PDO;


class PageModel extends AbstractPageModel implements 
	SubjectInterface,
	PageModelInterface

{
	protected

	$page;
	
	private 
	
	/**
	 * @var string url target
	 */
	$target;
	
	/**
	 * Construct Model
	 */
	public function __construct()
	{
		parent::__construct();
		$this->page = [];
		$scriptName = filter_input(INPUT_SERVER, "SCRIPT_NAME");
		$scriptArray = explode("/", $scriptName);
		$this->target = array_key_exists(count($scriptArray) -1, $scriptArray)
				? $scriptArray[count($scriptArray) -1]
				: "";
	}
	
	private function setTitle (array $fetch)
	{
		if (array_key_exists("title", $fetch)) {
			$this->title = $fetch["spa_id"]; 
			return $fetch["spa_id"];
		}
	}
	
	private function setLink(array $fetch)
	{
		foreach ($fetch as $value) {
			$this->link[] = $value["href"];
		}
	}
	
	private function setPage(array $fetch)
	{
		foreach ($fetch as $value) {
			$this->page[] = $value["id"];
		}
	}
	
	
	private function setScript(array $fetch)
	{
		foreach ($fetch as $value) {
			$this->script[] = $value["src"];
		}
	}
	
	private function fetchAttr (
	
		PDO $dbh,
			string $table,
			string $column,
		int $id)
			
	{
		
		$sql = "SELECT `" . $table."`.`" . $column. "` FROM `spa_" . $table."`"
		. "JOIN `" . $table."`"
		. "ON `spa_" . $table."` . `" . $table."_id` = `" . $table."`. `" . $table."_id`"
		. "WHERE `spa_id` = :id ORDER BY `spa_" . $table."`.`" . $table."_id` ASC;";
				$sth = $dbh->prepare ($sql);
				$sth->bindValue(":id", $id);
				$sth->execute();
				$results = (array) $sth->fetchAll(PDO::FETCH_ASSOC);
				$this->{"set" . ucfirst($table)}($results);
	}
	
	
	public function get()
	{
		
		$dbh = Manager::getPdo();
				
			$sql = "SELECT `spa_id`, `title` FROM `spa` WHERE `target` = :target; ";
			$sth = $dbh->prepare ($sql);
			$sth->bindValue(":target", $this->target);
			$sth->execute();
			$id = $this->setTitle((array) $sth->fetch(PDO::FETCH_ASSOC));
			$this->fetchAttr($dbh, "link", "href", $id);
			$this->fetchAttr($dbh, "script", "src", $id);
			$this->fetchAttr($dbh, "page", "id", $id);
		

		$this->title = "Find code IO";	
		$this->page[] ="Home";
		$this->page[] ="JS";
		$this->page[] ="PHP";
		$this->page[] ="Java";
		$this->link[] ="./assets/css/lib/bootstrap.css";
		$this->link[] ="./assets/js/lib/jquery.mobile-1.4.5/"
					. "jquery.mobile-1.4.5.css";
		$this->link[] ="./assets/css/app/find-code.css";
		$this->script[] ="./assets/js/lib/underscore.js";
		$this->script[] ="./assets/js/lib/jquery-1.9.1.js";
		$this->script[] ="./assets/js/lib/backbone.js";
		$this->script[] ="./assets/js/lib/bootstrap.js";
		$this->script[] ="./assets/js/app/model/page-model.js";
		$this->script[] ="./assets/js/app/view/page-view.js";
		$this->script[] ="./assets/js/app/router.js";
		$this->script[] ="./assets/js/app/index.js";
		$this->script[] ="./assets/js/lib/jquery.mobile-1.4.5/". "jquery.mobile-1.4.5.js";
		$this->notify();
	}
}