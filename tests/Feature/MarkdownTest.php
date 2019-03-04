<?php

namespace ripon\Press\Tests;

use Orchestra\Testbench\TestCase;
use ripon\Press\MarkdownParser;


class MarkdownTest extends TestCase
{
    /** @test */
    public function simple_markdown_is_parsed()
    {
        $this->assertEquals('<h1>new heading</h1>', MarkdownParser::parse('# new heading'));
        //$parsedown = new Parsedown();
        //dd(MarkdownParser::parse('# new heading'));
    }
}