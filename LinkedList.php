<?php

class LinkedList
{
    private $first_node = null;
    private $last_node = null;
    
    // Accept a constructor argument later
    public function __construct()
    {
    
    }
    
    // Adds to the beginning of the list
    public function unshift($var)
    {
        $node = new Node($var);
        if ($this->first_node !== null) {
            $node->setNext($this->first_node);
            $this->first_node->setPrev($node);
        }
        $node->first_node = $node;
    }
    
    // Returns the first item and shortens the list by 1
    public function shift()
    {
    
    }
    
    // Adds to the end of the list
    public function push($var)
    {
        $node = new Node($var);
        if ($this->last_node !== null) {
            $node->setPrev($this->last_node);
            $this->last_node->setNext($node);
        }
        $this->last_node = $node;
    }
    
    // Returns the last item and shortens the list by 1
    public function pop()
    {
        
    }
    
    public function first()
    {
        return $this->first_node;
    }
    
    public function last()
    {
        return $this->last_node;
    }
    
    public function insertBefore(Node $node, $var)
    {
    
    }
    
    public function insertAfter(Node $node, $var)
    {
        $new_node = new Node($var);
        $new_node->setPrev($node);
        $new_node->setNext($node->getNext());
        $node->setNext($new_node);
    }
    
    public function removeBefore(Node $node)
    {
    
    }
    
    public function removeAfter(Node $node)
    {
    
    }
    
}