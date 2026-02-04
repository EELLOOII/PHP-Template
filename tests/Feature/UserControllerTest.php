<?php

namespace Tests\Feature;

use App\Controllers\UserController;
use PHPUnit\Framework\TestCase;

class UserControllerTest extends TestCase
{
    public function testIndexMethodExists()
    {
        $controller = new UserController();
        $this->assertTrue(method_exists($controller, 'index'), 'UserController should have index method');
    }

    public function testControllerCanBeInstantiated()
    {
        $controller = new UserController();
        $this->assertInstanceOf(UserController::class, $controller);
    }

    public function testIndexMethodIsCallable()
    {
        $controller = new UserController();
        $this->assertIsCallable([$controller, 'index']);
    }

    public function testControllerUsesUserService()
    {
        $controllerReflection = new \ReflectionClass(UserController::class);
        $sourceCode = file_get_contents($controllerReflection->getFileName());
        
        $this->assertStringContainsString('use App\Services\UserService;', $sourceCode);
        $this->assertStringContainsString('new UserService()', $sourceCode);
    }

    public function testControllerInCorrectNamespace()
    {
        $controller = new UserController();
        $this->assertEquals('App\Controllers\UserController', get_class($controller));
    }
}
