<?php

namespace cronv\LaravelTaskExample\Examples\Node;

/**
 * Class NodeList
 *
 * Class for manipulating a linked list of Node objects.
 *
 * This class provides methods to solve common operations on linked lists,
 * such as reversing the list.
 *
 * @package cronv\LaravelTaskExample\Examples\Node
 */
class NodeList
{
    /**
     * Reverses the linked list starting from the given head node.
     *
     * This method takes the head of a linked list and reverses the order
     * of the nodes, returning the new head of the reversed list.
     *
     * @param Node|null $head The head node of the linked list to be reversed.
     *                        If null, the method will return null.
     * @return Node|null Returns the new head of the reversed linked list,
     *                   or null if the input head was null.
     */
    public function solve(?Node $head): ?object
    {
        if ($head === null) {
            return null;
        }

        $slow = $head;
        $fast = $head;

        while ($fast !== null && $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;

            if ($slow === $fast) {
                return null;
            }
        }

        $prev = null;
        $current = $head;

        while ($current !== null) {
            $next = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $next;
        }

        return $prev;
    }
}
