<?php

namespace Tests\Unit;

use cronv\LaravelTaskExample\Examples\Node\Node;
use cronv\LaravelTaskExample\Examples\Node\NodeList;
use PHPUnit\Framework\TestCase;

class NodeTest extends TestCase
{
    /**
     * @test
     */
    public function itInitNextToNull(): void
    {
        $node = new Node();
        $this->assertNull($node->next);
    }

    /**
     * @test
     */
    public function itHandlesEmptyList(): void
    {
        $nodeList = new NodeList();
        $head = null;

        $reversedHead = $nodeList->solve($head);

        $this->assertNull($reversedHead);
    }

    /**
     * @test
     */
    public function itLinksNodes(): void
    {
        $a = new Node();
        $b = new Node();
        $c = new Node();
        $a->next = $b;
        $b->next = $c;
        $c->next = null;

        $this->assertTrue($a->next === $b);
        $this->assertTrue($b->next === $c);
        $this->assertTrue($c->next === null);
    }

    /**
     * @test
     */
    public function itReversesMultipleNodeList(): void
    {
        $a = new Node();
        $b = new Node();
        $c = new Node();
        $a->next = $b;
        $b->next = $c;
        $c->next = null;

        $solution = new NodeList();
        $reverse = $solution->solve($a);
        // print_r($reverse);

        $this->assertEquals($b, $c->next);
        $this->assertEquals($a, $b->next);
        $this->assertEquals(null, $a->next);
    }

    /** @test */
    public function itHandlesCycleInList(): void
    {
        $a = new Node();
        $b = new Node();
        $c = new Node();
        $a->next = $b;
        $b->next = $c;
        $c->next = $a;

        $nodeList = new NodeList();

        $result = $nodeList->solve($a);
        $this->assertNull($result);
    }
}
