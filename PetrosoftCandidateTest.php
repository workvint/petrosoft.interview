<?php

spl_autoload_register(function ($class) {
    require_once str_replace('\\', '/', $class) . '.php'; 
});

/**
 * Tests
 */
class PetrosoftCandidateTest extends PHPUnit_Framework_TestCase 
{
    public function testTask1()
    {
        $p = new PetrosoftCandidate();
        
        $result = $p->task1(array());
        $this->assertEquals(array_values($result), array_values(array()));
        
        $result = $p->task1(array(6, 2, 7, 1, 3, 4, 5));
        $this->assertEquals(array_values($result), array_values(array(6, 7, 4, 5)));
        
        $result = $p->task1(array(6, 2, 1, 3.3, 4, 5));
        $this->assertEquals(array_values($result), array_values(array(6, 4, 5)));
        
        $result = $p->task1(array(6, 2, 1, 3.8, 4, 5));
        $this->assertEquals(array_values($result), array_values(array(6, 3.8, 4, 5)));
    }
    
    public function testTask2()
    {
        $p = new PetrosoftCandidate();
        
        $result = $p->task2(0); 
        $this->assertEquals($result, 0);
        
        $result = $p->task2(680.00); 
        $this->assertEquals($result, 43.00);
        
        $result = $p->task2(413.00); 
        $this->assertEquals($result, 20.65);
        
        $result = $p->task2(750); 
        $this->assertEquals($result, 50.00);
        
        $result = $p->task2(1111); 
        $this->assertEquals($result, 95.13);
        
        $result = $p->task2(2345); 
        $this->assertEquals($result, 270.50);
    }
    
    public function testTask3()
    {
        $p = new PetrosoftCandidate();
        
        $result = $p->task3(array());
        $this->assertEquals($result, array());
        
        $result = $p->task3(array(
            array(1, 2, 3, 4), 
            array(5, 6, 7, 8), 
            array(9, 0, 3, 2), 
            array(5, 2, 4, 2)
        ));
        $this->assertEquals($result, array(
            array(1, 2, 3, 4),
            array(5, 2, 7, 8),
            array(9, 0, 3, 2),
            array(5, 2, 4, 6)
        ));
        
        $result = $p->task3(array(
            array(15, 2, 3, 4), 
            array(5, 6, 7, 8), 
            array(9, 0, 5, 2), 
            array(5, 2, 4, 1)
        ));
        $this->assertEquals($result, array(
            array(1, 2, 3, 4),
            array(5, 5, 7, 8),
            array(9, 0, 6, 2),
            array(5, 2, 4, 15)
        ));
        
        $result = $p->task3(array(
            array(15, 2, 3, 4, 3), 
            array(5, 6, 7, 8, 3), 
            array(9, 0, 5, 2, 3), 
            array(5, 2, 4, 1, 3),
            array(5, 2, 4, 1, 3)
        ));
        $this->assertEquals($result, array(
            array(1, 2, 3, 4, 3), 
            array(5, 3, 7, 8, 3), 
            array(9, 0, 5, 2, 3), 
            array(5, 2, 4, 6, 3),
            array(5, 2, 4, 1, 15)
        ));
    }
    
    public function testTask4()
    {
        $p = new PetrosoftCandidate();
        
        $result = $p->task4(array());
        $this->assertEquals($result, array());
        
        $result = $p->task4(array(
            array(),
            array(),
            array()
        ));
        $this->assertEquals($result, array());
        
        $result = $p->task4(array(
            array(1),
            array(2),
            array(3)
        ));
        $this->assertEquals($result, array(1, 2, 3));
        
        $result = $p->task4(array(
            array(1, 2, 3, 4),
            array(5, 6, 7, 8),
            array(9, 10, 11, 12)
        ));
        $this->assertEquals($result, array(1, 2, 3, 4, 8, 7, 6, 5, 9, 10, 11, 12));
    }
}
