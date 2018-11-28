<?php
// ProgramLang.php
include_once("Decorator.php");
class ProgramLang extends Decorator
{
	private $languageNow;

	public function __construct(IComponent $dateNow) {
		$this->date = $dateNow;
	}
	
	private $language = array(
		"php" => "PHP",
		"cs" => "C#",
		"js" => "JavaScript",
		"as3" => "ActionScript 3.0"
	);

	public function setFeature($lang) {
		$this->languageNow = $this->language[$lang];
	}

	public function getFeature() {
		$output = $this->date->getFeature();
		$fmat = "<br>&nbsp;&nbsp";
		$output .= "$fmat Preferred programming language: ";
		$output .= $this->languageNow;
		return $output;
	}
}
