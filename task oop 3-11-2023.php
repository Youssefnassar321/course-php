<?php

class circle1 {
    private $radius;
    private $color;

   public function getradius(){
      return $this->radius; 
   }

    public function getcolor(){
      return $this->color;
    }


    public function setradius( $re ){
        $this->radius = $re; 
    }

    public function setcolor( $co ){
        $this->color = $co;
    }

    public function getarea(){
        return pi() * pow($this->radius , 2); 
    }

    public function tostring(){
        echo "the area is" . $this->getarea();
    }

}
$circle1 = new circle();
$circle1->setradius(7);
$circle1->getradius("red");
$circle1->getarea();
$circle1->tostring();


class  circle2 {
    private $radius1 ;

    public function getradius(){
        return $this->radius; 
     }

    public function setradius( $re ){
        $this->radius = $re; 
    }

    public function getarea(){
        return pi() * pow($this->radius , 2); 
    }
    
    public function getcircumference(){
        return 2*pi() * $this->radius ; 
    }

    public function tostring(){
        echo "the area is" . $this->getarea() . "the circumference is" . $this->getcircumference();
    }
}

$circle3 = new circle2();
$circle3->setradius(5);
$circle3->tostring();


class rectangle{

    private $length;
    private $width;

    public function getlength(){
        return $this->length; 
     }

    public function getwidth(){
        return $this->width; 
     }

    public function setlength( $le ){
        $this->length = $le; 
    }

    public function setwidth( $wi ){
        $this->width = $wi; 
    }

    public function getarea(){
        return  $this->width * $this->length; 
    }

    public function getperimeter(){
        return 2 * ( $this->width + $this->length); 
    }

    public function tostring(){
        echo "the area is" . $this->getarea() ."and the parameter is ".$this->getperimeter();
    }
}

$rectangle1 = new rectangle();
$rectangle1->setlength(5);
$rectangle1->setwidth(8);
$rectangle1->tostring();


class employee{
    private $id;
    private $firstname;
    private $lastname;
    private $salary;

    public function getid(){
        return $this->id; 
     }

    public function getfirstname(){
        return $this->firstname; 
     }
    public function getlastname(){
        return $this->lastname; 
     }

    public function getsalary(){
        return $this->salary; 
     }

    public function setsalary( $sa ){
        $this->salary = $sa; 
    }

    public function getannualsalary(){
        return  $this->salary * 12; 
    }

    public function getraisesalary(){
        return  $this->salary * 10 ; 
    }

    public function tostring(){

        echo "the first name is " . $this->firstname . "the last name is " . $this->lastname . "the annual salary is" . $this->getannualsalary() . "the raise of the salary is " . $this->getraisesalary() ;
    }
}

$employee1 = new employee( 12344 , "youssf" , "nassar" , 2000 );
$employee1->setsalary( 2000);
$employee1->tostring();



class invoiceitem{
    private $id;
    private $desc;
    private $qty;
    private $unitprice;

    public function getid(){
        return $this->id; 
     }

    public function getdesc(){
        return $this->desc; 
     }
    public function getqty(){
        return $this->qty; 
     }

    public function getunitprice(){
        return $this->unitprice; 
     }

    public function setqty( $qty ){
        $this->qty = $qty; 
    }

    public function setunitprice($up){
        return  $this->unitprice = $up ; 
    }

    public function gettotal(){
        return  $this->unitprice * $this->qty ; 
    }

    public function tostring(){

        echo "the id is " . $this->id . "the desc is " . $this->desc . "the qty is" . $this->qty . "the unit price is " . $this->unitprice ;
    }
}

$invoiceitem1 = new invoiceitem();
$invoiceitem1->setqty(555555);
$invoiceitem1->setunitprice(10000000);
$invoiceitem1->tostring();

?>