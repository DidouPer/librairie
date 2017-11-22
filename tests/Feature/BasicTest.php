<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Box;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BasicTest extends TestCase
{
  public function testBasicTest()
  {
  
    $data = 'Je suis petit';
    $this->assertTrue(starts_with($data, 'Je'));
    $this->assertFalse(starts_with($data, 'Tu'));
    $this->assertSame(starts_with($data, 'Tu'), false);
    $this->assertStringStartsWith('Je', $data);
    $this->assertStringEndsWith('petit', $data);
  }

  // public function testHasItemInBox()
  // {
  //     $box = new Box(['cat', 'toy', 'torch']);
  //
  //     $this->assertTrue($box->has('toy'));
  //     $this->assertFalse($box->has('ball'));
  // }
  //
  // public function testTakeOneFromTheBox()
  // {
  //     $box = new Box(['torch']);
  //
  //     $this->assertEquals('torch', $box->takeOne());
  //
  //     // Null, now the box is empty
  //     $this->assertNull($box->takeOne());
  // }
  //
  // public function testStartsWithALetter()
  // {
  //     $box = new Box(['toy', 'torch', 'ball', 'cat', 'tissue']);
  //
  //     $results = $box->startsWith('t');
  //
  //     $this->assertCount(3, $results);
  //     $this->assertContains('toy', $results);
  //     $this->assertContains('torch', $results);
  //     $this->assertContains('tissue', $results);
  //
  //     // Empty array if passed even
  //     $this->assertEmpty($box->startsWith('s'));
  // }
}
