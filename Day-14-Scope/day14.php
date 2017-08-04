function __construct($elements){

    $this->elements = $elements;
    
}

function computeDifference(){

    $max = max($this->elements);
    $min = min($this->elements);

    $this->maximumDifference = $max - $min;

}
