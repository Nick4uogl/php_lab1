<?php
class Student
{
    public function __construct(public $name, public $groupName, public $avarageGrage)
    {
        $this->name = $name;
        $this->groupName = $groupName;
        $this->avarageGrage = $avarageGrage;
    }

    // public function __construct($name, $groupName, $avarageGrage)
    // {
    //     $this->name = $name;
    //     $this->groupName = $groupName;
    //     $this->avarageGrage = $avarageGrage;
    // }

    public function __toString()
    {
        return "Student $this->name $this->groupName";
    }
}

class Captain extends Student
{
    public $additionalPoints;

    public function __construct($name, $groupName, $avarageGrage, $additionalPoints)
    {

        parent::__construct($name, $groupName, $avarageGrage);
        $this->additionalPoints = $additionalPoints;
    }

    public function get_points()
    {
        return $this->additionalPoints;
    }
}


$student1 = new Student('Nick', 'TB-12', 93);
echo $student1->name;
echo '<br/>';
$student2 = new Captain('Jesica', 'TB-13', 97, 10);
echo $student2->name;
echo '<br/>';
echo $student2->get_points();
