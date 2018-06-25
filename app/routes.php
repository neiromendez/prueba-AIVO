<?php

$app->get('/id/{id}', function ($request, $response, $args) use ($app) {

    return $args;
});