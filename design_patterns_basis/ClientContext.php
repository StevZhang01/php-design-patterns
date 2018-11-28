<?php
include_once("Context.php");
include_once("ConcreteStrategyA.php");

$strategyA = new ConcreteStrategyA();
$context = new Context($strategyA);
$context->algorithm("elements");
