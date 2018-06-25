<?php

$app->get('/profile/facebook/{id}', function ($request, $response, $args) use ($app) {

    $facebook_profile_id = $args['id'];

    $fb = new Facebook\Facebook([
        'app_id' => '246293189462608',

        'app_secret' => 'fd53f34bb0ef872c26a02a2a431cd5a8',

        'default_graph_version' => 'v3.0',
    ]);

    try {
        $response = $fb->get('/' . $facebook_profile_id . '?fields=id,name,first_name,last_name', 'EAADgAJoRilABAOI4K9ymPZBhZCat4guNAxf0VLbr3JtrZCcXowahXGXHZADAUZAd8eIZCij3piu7cSGtL4gjQlSWeZAHZAI2X1FnRjP3OKbrK4azfJ7DTP2RH6nLY2YPXrsvXqnvTZBDD4sXgEukvj5vuloDHkkDQFZCAZD');
    } catch (Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();

        exit;
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();

        exit;
    }

    $user = $response->getGraphUser();


    echo 'Name: ' . $user['name'];

    echo '<br>';

    echo $user;
});