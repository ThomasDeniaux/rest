<?php
namespace models;
/**
 * @table("name"=>"slot")
 */
class Slot{
	/**
	 * @id()
	 * @column("name"=>"id","dbType"=>"int(11)")
	 * @validator("type"=>"id","constraints"=>["autoinc"=>true])
	 */
	private $id;

	/**
	 * @column("name"=>"name","dbType"=>"time")
	 * @validator("type"=>"type","constraints"=>["ref"=>"time","notNull"=>true])
	 */
	private $name;

	/**
	 * @column("name"=>"days","dbType"=>"varchar(20)")
	 * @validator("type"=>"length","constraints"=>["max"=>20,"notNull"=>true])
	 */
	private $days;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id=$id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name=$name;
	}

	public function getDays(){
		return $this->days;
	}

	public function setDays($days){
		$this->days=$days;
	}

	 public function __toString(){
		return ($this->days??'no value').'';
	}

}