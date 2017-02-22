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


        protected function tearDown()
        {
          Type::deleteAll();
        }


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

        function test_getId()
        {
            //Arrange
            $type = "Dog";
            $test_type = new Type($type); //1
            $test_type->save();

            $type2 = "Cat";
            $test_type2 = new Type($type2, 2); //2
            $test_type2->save();


            //Act
            $result = Type::getAll();

            //Assert
             $this->assertEquals(true, is_numeric($result[0]->getId()));
        }

        function test_save()
        {
            //Arrange
            $type = "Dog";
            $test_type = new Type($type); //1
            $test_type->save();

            $type2 = "Cat";
            $test_type2 = new Type($type2, 2); //2
            $test_type2->save();


            //Act
            $result = Type::getAll();

            //Assert
             $this->assertCount(2,$result);
        }

        function test_deleteAll()
        {
            //Arrange
            $type = "Dog";
            $type2 = "Cat";
            $test_Type = new Type($type);
            $test_Type->save();
            $test_Type2 = new Type($type2);
            $test_Type2->save();

            //Act
            Type::deleteAll();
            $result = Type::getAll();

            //Assert
            $this->assertEquals( [], $result);
        }
    }
