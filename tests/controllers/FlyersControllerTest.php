<?php
/**
 * Created by PhpStorm.
 * User: sokthaitang
 * Date: 1/20/17
 * Time: 10:29 AM
 */
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

//this is the assertion in Laravel (tests/controllers/FlyersControllerTest.php
class FlyersControllerTest extends TestCase{
    /** @test */

    public function it_shows_the_form_to_create_a_new_flyer(){
        $this->visit('flyers/create');
    }
}