<?php

/**
 *  Unit test for dataList.php
 */

require 'dataList.php';
use PHPUnit\Framework\TestCase;

class dataListTest extends TestCase
{
    public function testSuccessDataList(){
        $expected = '<h2>Slave 1 (UCS)</h2><h4>Set Number: 75060</h4><h4>Piece Count: 1996</h4><h4>Release Year: 2015</h4>';

        $sets = [[
            'setName' => 'Slave 1 (UCS)',
            'setNumber' => '75060',
            'pieceCount' => '1996',
            'releaseYear' => '2015'
        ]];

        $case = dataList($sets);
        $this->assertEquals($expected, $case);
    }

    public function testMalformedDataList(){
        $expected = '<h2>Slave 1 (UCS)</h2><h4>Set Number: 75060</h4><h4>Piece Count: 1996</h4><h4>Release Year: 2015</h4>';
        $sets = 69;

        $this->expectException(TypeError::class);
        $case = dataList($sets);
    }

}