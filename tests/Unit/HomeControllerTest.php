<?php

namespace Tests\Unit;

use App\Controllers\HomeController;
use PHPUnit\Framework\TestCase;

class HomeControllerTest extends TestCase
{
    private $capturedViewData;

    protected function setUp(): void
    {
        parent::setUp();
        $this->capturedViewData = [];
    }

    public function testIndexMethodExists()
    {
        $controller = new HomeController();
        $this->assertTrue(method_exists($controller, 'index'), 'HomeController should have index method');
    }

    public function testIndexCallsViewWithCorrectData()
    {
        $controllerReflection = new \ReflectionClass(HomeController::class);
        $methodReflection = $controllerReflection->getMethod('index');
        $sourceCode = file_get_contents($methodReflection->getFileName());
        $methodStartLine = $methodReflection->getStartLine();
        $methodEndLine = $methodReflection->getEndLine();
        
        $sourceLines = explode("\n", $sourceCode);
        $methodCode = implode("\n", array_slice($sourceLines, $methodStartLine - 1, $methodEndLine - $methodStartLine + 1));
        
        $this->assertStringContainsString("view('home'", $methodCode);
        $this->assertStringContainsString("'title' => 'Welcome'", $methodCode);
    }
}
