<?php
namespace welcome\Test;

use PHPUnit\Framework\TestCase;
use welcome\User;

class userTest extends TestCase
{
    public function testHelloNoInput()
    {
        $this->assertEquals("Hello World", User::hello());
    }

    public function testHelloNullInput()
    {
        $this->assertEquals("Hello World", User::hello(null));
    }

    public function testHelloNameInput()
    {
        $this->assertEquals("Hello Andrew", User::hello("Andrew"));
    }
}