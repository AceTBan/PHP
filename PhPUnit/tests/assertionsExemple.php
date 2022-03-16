<?php
    use PHPUnit\Framework\TestCase;

    class AssertionsExemple extends TestCase{
        /** 
         * @test
        */
        public function StringIdentiques(){
            $string1 = 'une string';
            $string2 = 'une string';
            $string3 = 'une String';

            $this->assertSame($string1, $string2);
            $this->assertSame($string2, $string3);
        }

        /**
         * @test
         */

        public function intIdentiques(){
            $this->assertEquals(10, 5+5);
        }
    }


?>