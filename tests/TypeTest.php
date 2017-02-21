<?php

    require_once "src/Type.php";
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    $server = 'mysql:host=localhost:8889;dbname=animal_shelter';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class TypeTest extends PHPUnit_Framework_TestCase
    {

        function test_createType()
        {
            //Arrange
            $type = "Dog";
            $test_type = new Type($type);

            //Act
            $result = $test_type->getType();

            //Assert
            $this->assertEquals($type, $result);
        }

        function test_save()
        {
            //Arrange
            $type = "Dog";
            $test_type = new Type($type, 1);
            $test_type->save();

            //Act
            $result = Type::getAll();

            //Assert
            $this->assertEquals($test_type, $result[0]);
        }
    }
