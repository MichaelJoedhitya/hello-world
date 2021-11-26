<?php
	require __DIR__.'/../vendor/autoload.php';

	use Michaeljoe\HelloWorld;

	$helloWorld = new HelloWorld();
	echo $helloWorld->getMessage();
