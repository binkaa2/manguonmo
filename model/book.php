
<?php
    class Book{
        #region Properties
        var $price;
        var $title;
        var $author;
        var $year;
        #endregion

        #constructor function
        function __construct($price,$title,$author,$year){
            $this->price = $price;
            $this->title = $title;
            $this->author = $author;
            $this->year = $year;
        }

        #Member function
        function display(){
            echo "price : ".$this->price."\n"."title : ".$this->title;
        }

        public static function getList($search){
            $list = array();
            array_push($list,new Book(10,'title1','thanh','1999'));
            array_push($list,new Book(20,'title2','thanh','1997'));
            array_push($list,new Book(30,'title3','thanh','1998'));
            array_push($list,new Book(40,'title4','thanh','1996'));
            array_push($list,new Book(50,'title5','thanh','1995'));
            array_push($list,new Book(60,'title6','thanh','1994'));
            array_push($list,new Book(70,'title7','thanh','1993'));

            if($search != ""){
                foreach($list as $key => $ls){
                    $check = false;
                    if(strpos($ls->price,$search) !== false 
                        || strpos($ls->title,$search) !== false
                        || strpos($ls->author,$search) !== false
                        || strpos($ls->year,$search) !== false){
                        $check = true;
                    }
                    if(!$check){
                        unset($list[$key]);
                    }
                }
            }   
            return $list;
        }
    }
