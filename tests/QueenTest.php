<?php
    require_once "src/Queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase
    {
        function test_attack_diagonal()
        {
            //Arrange
            $test_attack = new Queen;
            $input = ;

            //Act
            $result = $test_attack->canAttack($input);

            //Assert
            $this->assertEquals(TRUE, $result);
        }
    }
 ?>
