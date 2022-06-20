<?php

namespace App\GraphQL\Mutations;

final class updateUserImage
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        dd($args['image']);
        // TODO implement the resolver
        return $args['image'];
    }
}
