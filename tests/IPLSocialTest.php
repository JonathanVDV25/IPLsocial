<?php

require_once('controllers/HomeController.php');
use PHPUnit\Framework\TestCase;

class IPLSocialTest extends TestCase
{
    public function testCheckPasswordGivenPasswordLength0ShouldReturnErrorMessagePasswordTooSmall() : void{

        //Arrange
        $IPLSocial = new HomeController();
        //Act
        $actual = $IPLSocial->checkPassword("");
        //Assert
        $this->assertEquals("mot de passe doit contenir au moins 8 charactères", $actual);
    }

    public function testCheckPasswordGivenPasswordLength8WithoutSpecialCharsShouldReturnErrorMessagePasswordMustContainOneSpecialChar() : void{
        //Arrange
        $IPLSocial = new HomeController();
        //Act
        $actual = $IPLSocial->checkPassword("aaaaaaaaa");
        //Assert
        $this->assertEquals("mot de passe doit contenir au moins un caractère spécial", $actual);
    }
}
