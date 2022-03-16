<?php

    use PHPUnit\Framework\TestCase;
    // require './vendor/user.php';
    use \Encaps\User;

    class UserTest extends TestCase {

        protected $user;

        protected function setUp():void {
            $this->user = new User();
        }

        protected function tearDown(): void{
            User::$addToString = " est mon prénom.";
        }

            /**
         * @test
         */
        public function changeConcate(){

            User::$addToString = " est le prénom de votre formateur référent.";

            $this->user->name = "Maxime";
            $res = $this->user->fullAnswer();

            $this->assertSame("Maxime est le prénom de votre formateur référent.", $res);
            dump($res);

        }

        /**
         *  @test
         */
        public function testConcatenation(){

            $this->user->name = "Joba";
            $res = $this->user->fullAnswer();

            $this->assertSame("Joba est mon prénom.", $res);
        }

        /**
         *  @test
         */
        public function testAvecLeTryCatch(){

            try {
                $this->user->nbrChildren = 2;
                $this->user->addToNbrChildren('trois');
                $this->fail('une erreur est levée');

            } catch (TypeError $error) {
                $this->assertStringStartsWith("Encaps\User::addToNbrChildren():", $error->getMessage());
            }
        }
        

    }   

    ?>