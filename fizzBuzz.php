<?php
declare(strict_types=1);
class FizzBuzz 
{
    public $start;
    public $endnum;
    
    public $output = array();
    
    function __construct($start, $endnum) {
        $this->start = $start;
        $this->endnum = $endnum;
      }
    public function print_numbers(): iterable {
        
        for ($i = $this->start; $i <= $this->endnum; $i++)
        {
            
          if ( $i % 3 == 0 && $i % 5 == 0 )
           {
             $output[] = "FizzBuzz";
           }
          else if ( $i % 3 == 0 ) 
           {
             $output[] = "Fizz";
           }
             else if ($i % 5 == 0) 
           {
             $output[] = "Buzz";
           }
             else
           {
             $output[] =  $i;
           }
        }  
     return $output;
    }
       
}


$obj=new FizzBuzz(1,100);

$myIterable = $obj->print_numbers();

foreach($myIterable as $item) {
  echo $item."\n";
}
