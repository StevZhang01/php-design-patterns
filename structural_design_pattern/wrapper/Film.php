<?php
// Film.php
include_once("Decorator.php");
class Film extends Decorator
{
	private $filmNow;

	public function __construct(IComponent $dateNow) {
		$this->date = $dateNow;	
	}

	private $filmTypes = array(
		"sci-fi" => "Science Fiction",
		"war" => "War",
		"romance" => "Romance",
		"drama" => "Drama"
	);

	public function setFeature($type) {
		$this->filmNow = $this->filmTypes[$type];
	}

	public function getFeature() {
		$output = $this->date->getFeature();
		$fmat = "<br/>&nbsp;&nbsp;";
		$output .= "$fmat Favorite film: ";
		$output .= $this->filmNow;
		return $output;
	}
}

