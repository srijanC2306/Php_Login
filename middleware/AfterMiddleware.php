<?php
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface ;
use Slim\Factory\AppFactory;
use Slim\Psr7\Response;

class AfterMiddleware{

    public function __invoke( $request, $handler): Response
    {
        $response = $handler->handle($request);
        $response->getBody()->write('Slim frmaework');
        return $response;
    
       
    }
}