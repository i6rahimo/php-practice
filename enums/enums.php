<?php

// enum Suit 
// {
//     case Hearts = 'H';
//     case Diamonds = 'D';
//     case Clubs = 'C';
//     case Spades = 'S';
// }

// print Suit::Diamonds->value;

// print $val->value;


interface Colorful
{
    public function color(): string;
}

enum Suit implements Colorful
{
    case Heart;
    case Diamonds;
    case Clubs;
    case Spades;

    public function color(): string
    {
        return match($this) {
            Suit::Heart, Suit::Diamonds => 'Red',
            Suit::CLubs, Suit::Spades => 'Black'
        };
    }

    public function shape(): string{
        return 'Rectangle';
    }
}


function paint(Colorful $c)
{   
}
print paint(Suit::Clubs);
// print Suit::Diamonds->color();