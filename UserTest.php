<?php
    use PHPUnit\Framework\TestCase;
    use Encaps\User;

    class UserTest extends TestCase {
        
        protected $user;

        protected function setUp():void{
            parent::setUp();
            $this->user= new User();
        }
        /**
         * @test
         */
        public function testConcatenation(){
            $this->user->name = "Florent";
            $res = $this->user->fullAnswer();

            $this->assertSame("Florent est mon prénom.",$res);
        }

        /**
         * @test
         */
        public function changeConcate(){
            User::$addToString = " est le prénom de mon formateur.";
            $this->user->name = "Maxime";
            $res = $this->user->fullAnswer();

            $this->assertSame("Maxime est le prénom de mon formateur.",$res);
        }
    }