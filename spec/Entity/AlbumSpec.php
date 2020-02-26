<?php

namespace spec\App\Entity;

use App\Entity\Album;
use PhpSpec\ObjectBehavior;

class AlbumSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Album::class);
    }

    function it_is_how_old()
    {
        $this->setYear(2010);
        $this->getYear()->shouldReturn(2010);
        $this->getAge()->shouldReturn(10);
    }
}
