<?php

namespace cronv\LaravelTaskExample\Examples\Node;

/**
 * Class Node
 *
 * Represents a node in a singly linked list.
 *
 * @package cronv\LaravelTaskExample\Examples\Node
 */
class Node {
    /** @var Node|null $next The next node in the linked list or null if this is the last node */
    public ?self $next = null;
}
