<?php

namespace App\Api\Generated\Build\Objects\UsersRelative;

enum Type: string
{
    case Parent = 'parent';
    case Child = 'child';
    case Grandparent = 'grandparent';
    case Grandchild = 'grandchild';
    case Sibling = 'sibling';
}