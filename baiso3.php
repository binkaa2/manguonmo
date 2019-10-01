
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
            echo "price : ".$this->price."\n";
        }
    }
