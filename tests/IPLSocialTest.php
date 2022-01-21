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

    public function testCheckPasswordGivenPasswordLength8WithOneSpecialCharWithoutNumberShouldReturnErrorMessagePasswordMustContaintOneNumber() : void{
        //Arrange
        $IPLSocial = new HomeController();
        //Act
        $actual = $IPLSocial->checkPassword("aaaaaaaa(");
        //Assert
        $this->assertEquals("mot de passe doit contenir au moins un chiffre", $actual);
    }

    public function testCheckGivenPasswordLength8WithSpecialCharAndWithNumberShouldReturnMessagePasswordRespectsTheRules() : void {
        //Arrange
        $IPLSocial = new HomeController();
        //Act
        $actual = $IPLSocial->checkPassword("aaaa5aaa(");
        //Assert
        $this->assertEquals("Mot de passe respecte bien les règles !", $actual);
    }

    public function testCheckPasswordGivenPasswordLength7ShouldReturnErrorMessagePasswordTooSmall() : void{
        //Arrange
        $IPLSocial = new HomeController();
        //Act
        $actual = $IPLSocial->checkPassword("aaaaaaa");
        //Assert
        $this->assertEquals("mot de passe doit contenir au moins 8 charactères", $actual);
    }
}
