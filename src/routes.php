<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    
    // Render index view
    return $this->renderer->render($response, 'index.html', $args);
});

$app->get('/webdesign', function ($request, $response, $args) {
    
    // Render webdesign view
    return $this->renderer->render($response, 'webdesign.html', $args);
});

$app->get('/webtest', function ($request, $response, $args) {
    
    // Render webtest view
    return $this->renderer->render($response, 'webtest.html', $args);
});

$app->get('/weixinhot', function ($request, $response, $args) {
    $weixin=new \app\shuju\weixinhot;
    $args['weixinhot']=$weixin->getweixinhot();
    // Render webtest view
    return $this->renderer->render($response, 'weixinhot.html', $args);
});

$app->get('/webdevelop', function ($request, $response, $args) {
 
    // Render webtest view
    return $this->renderer->render($response, 'webdevelop.html', $args);
});


$app->get('/about', function ($request, $response, $args) {
 
    // Render webtest view
    return $this->renderer->render($response, 'about.html', $args);
});
