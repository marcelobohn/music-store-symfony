<?php

namespace spec\App\Entity;

use App\Entity\Artist;
use PhpSpec\ObjectBehavior;

class ArtistSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Artist::class);
    }

    function it_should_set_name()
    {
        $this->setArtistName('Marcelo');
        $this->getArtistName()->shouldReturn('Marcelo');
        $this->getArtistName()->shouldBeString();
    }    

    function it_should_set_twitter()
    {
        $this->setTwitterHandle('@name');
        $this->getTwitterHandle()->shouldReturn('@name');
        $this->getTwitterHandle()->shouldBeString();
    }        
}
