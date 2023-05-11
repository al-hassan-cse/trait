<?php

trait Sort 
{   
    public function getName()
    {
        echo 'Trait method call';
    }
}

trait Sort2 
{   
    public function getRoll()
    {
        echo 'Trait2 method call';
    }

    private function getRoll2()
    {
        echo 'Trait2 method call Roll2';
    }
}


class SortImpl{

    use Sort, Sort2;
    

    public function dispaly()
    {
        $this->getRoll2();
    }

}

$obj = new SortImpl;
echo $obj->getName();

echo "<br>";
echo $obj->getRoll();

echo "<br>";
echo $obj->dispaly();
 
 
# note:
# ata just use korbo
# tahole method access pabo
# propertie thakte pare
# method thakte pare
# private funcyion chaild access kora jai
?>

