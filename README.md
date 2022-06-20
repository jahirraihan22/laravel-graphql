# Laravel and Graphql setup steps

### step 1

install lighthouse package

    composer require nuwave/lighthouse

### step 2

vendor publish

    php artisan vendor:publish --tag=lighthouse-schema

### step 3

if want to get IDE support

    php artisan lighthouse:ide-helper

### step 4

add those in gitnore

    schema-directives.graphql
    programmatic-types.graphql
    _lighthouse_ide_helper.php

### step 5

to use playground

    composer require mll-lab/laravel-graphql-playground --dev

[http://127.0.0.1:8000/graphql-playground](http://127.0.0.1:8000/graphql-playground)

### step 6

publish lighthouse-config

    php artisan vendor:publish --tag=lighthouse-config

### step 7

in **_graphql/schema.graphql_**

    # this is query
    type Query {
        users: [User!]! @paginate(defaultCount: 10)
        user(id: ID @eq): User @find
    }

    # this is table
    type User {
        id: ID!
        name: String!
        created_at: DateTime!
        updated_at: DateTime!
    }

# extra ...

to create custom mutation

    php artisan lighthouse:mutation TestMutation
