<?php
require "src/Chop.php";

class Test extends \PHPUnit\Framework\TestCase
{
    /** @covers \App\Chop::search */
    public function testSearch()
    {
        $this->assertEquals(-1, \App\Chop::search(3, []));
        $this->assertEquals(-1, \App\Chop::search(3, [1]));
        $this->assertEquals(0,  \App\Chop::search(1, [1]));

        $this->assertEquals(0,  \App\Chop::search(1, [1, 3, 5]));
        $this->assertEquals(1,  \App\Chop::search(3, [1, 3, 5]));
        $this->assertEquals(2,  \App\Chop::search(5, [1, 3, 5]));
        $this->assertEquals(-1, \App\Chop::search(0, [1, 3, 5]));
        $this->assertEquals(-1, \App\Chop::search(2, [1, 3, 5]));
        $this->assertEquals(-1, \App\Chop::search(4, [1, 3, 5]));
        $this->assertEquals(-1, \App\Chop::search(6, [1, 3, 5]));

        $this->assertEquals(0,  \App\Chop::search(1, [1, 3, 5, 7]));
        $this->assertEquals(1,  \App\Chop::search(3, [1, 3, 5, 7]));
        $this->assertEquals(2,  \App\Chop::search(5, [1, 3, 5, 7]));
        $this->assertEquals(3,  \App\Chop::search(7, [1, 3, 5, 7]));
        $this->assertEquals(-1, \App\Chop::search(0, [1, 3, 5, 7]));
        $this->assertEquals(-1, \App\Chop::search(2, [1, 3, 5, 7]));
        $this->assertEquals(-1, \App\Chop::search(4, [1, 3, 5, 7]));
        $this->assertEquals(-1, \App\Chop::search(6, [1, 3, 5, 7]));
        $this->assertEquals(-1, \App\Chop::search(8, [1, 3, 5, 7]));
    }
}
