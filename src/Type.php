<?php
    class Type
    {
        private $type;
        private $id;

        function __construct($type, $id = null)
        {
            $this->type = $type;
            $this->id = $id;
        }

        function getType()
        {
            return $this->type;
        }

        function setType($new_type)
        {
            $this->type = $new_type;
        }

        function getId()
        {
            return $this->id;
        }
        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO animal_type (type) VALUES ('{$this->getType()}');");
        }

        static function getAll(){
            $returned_types = $GLOBALS['DB']->query("SELECT * FROM animal_type;");
            $types = array();
            foreach($returned_types as $type){
                $animal_type = $type['type'];
                $id = $type['id'];
                $new_type = new Type($animal_type, $id);
                array_push($types, $new_type);
            }
            return $types;
        }





    }
