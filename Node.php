<?php

class Node
{
    private $prev = null;
    private $next = null;
    private $data = null;
    
    public function __construct($data = null)
    {
        $this->data = $data;
    }
    
    public function getData()
    {
        return $this->data;
    }
    
    public function setPrev(Node &$node)
    {
        $this->prev = $node;
    }
    
    public function getPrev()
    {
        return $this->prev;
    }
    
    public function setNext(Node &$node)
    {
        $this->next = $node;
    }
    
    public function getNext()
    {
        return $this->next;
    }
}