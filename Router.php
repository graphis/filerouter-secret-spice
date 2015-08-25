<?php


use FileRouter\Exception\Directory;
use FileRouter\Exception\Route\DoesNotExistException;
use FileRouter\Exception\Route\IsNotInSourcePathException;




class Router extends \FileRouter\Router\AbstractRouter
{




    /**
     * Create instance with source path and "php" as fileExtension
     *
     * @param \SplFileInfo $sourcePath
     */
    public function __construct(\SplFileInfo $sourcePath)
    {
        parent::__construct($sourcePath, 'php');
    }

    /**
     * Handle the route $route
     *
     * @param string $route
     * @return void
     */
    public function handleRoute($route)
    {
		/* @var \SplFileInfo $routingFile */
        $requestedFile = $this->getFileByRoute($route);


        // do something
		echo 'kkk';
			
        /** @noinspection PhpIncludeInspection */
        include $requestedFile->getRealPath();
    }
}
