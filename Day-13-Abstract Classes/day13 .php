class MyBook extends Book{

    private $price;

    function __construct($title,$author,$price){
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }


     function display(){
        echo "Title: ".$this->title;
        echo "Author: ".$this->author;
        echo "Price: ".$this->price;
    }

}
