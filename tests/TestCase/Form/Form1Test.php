<?php
namespace App\Test\TestCase\Form;

use App\Form\Form1;
use Cake\TestSuite\TestCase;

/**
 * App\Form\Form1 Test Case
 */
class Form1Test extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\Form1
     */
    public $Form1;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Form1 = new Form1();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Form1);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
