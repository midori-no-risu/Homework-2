<?php

namespace Vendor;

use Vendor\AbstractCat;
use Vendor\CatInterface;

class NyanCat extends AbstractCat implements CatInterface
{
    public function __construct()
    {
        $this->body = 'cookie';
        $this->tail = 'rainbow';
    }

    public function meowUntilYouGoMad($message = 'meow')
    {
        return $message;
    }

    public function treatCat($paws_count)
    {
        if ($paws_count !== 4) {
            $message = 'are u sure it\'s normal for a cat to have ' . $paws_count . ' paws?.';

        } else {
            $message = 'Your cat looks like ' . $this->getBody() . ' with ' . $this->getTail() . ' tail.';
        }
        return $message;
    }
}