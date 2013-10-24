<?php
namespace Vendor;

abstract class AbstractCat
{
    public $eyes;
    public $paws;
    public $pawsCount;
    public $whiskers;
    protected $body;
    protected $tail;

    abstract protected function treatCat($paws_count);

    public function getBody()
    {
        return $this->body;
    }

    public function getTail()
    {
        return $this->tail;
    }

    public function setEyes($color)
    {
        $this->eyes = $color;
    }

}
