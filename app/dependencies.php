<?php
// Container
$container = $app->getContainer();

// Twig
$container['view'] = function ($c) {
    $settings = $c->get('settings');
    $view = new Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);
    // Add extensões do Twig
    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
    // Add Debug
    $view->addExtension(new Twig_Extension_Debug());
    // Add the validator extension
    $view->addExtension(new Awurth\SlimValidation\ValidatorExtension($c->get('validator')));
    // Add Flash
    $view->addExtension(new Knlv\Slim\Views\TwigMessages(new Slim\Flash\Messages()));
    // Declarado como variável global a sessao do usuario
    $view->getEnvironment()->addGlobal('session', $c->get('session')->get('userSession'));

    return $view;
};

// Flash messages
$container['flash'] = function ($c) {
    return new Slim\Flash\Messages;
};

// Session
$container['session'] = function ($c) {
    return new RKA\Session;
};

// PHPMailer
$container['mail'] = function ($c) {

    $settings = $c->get('settings');

    $object = new PHPMailer;

    $object->isSMTP();

    $object->Host       = $settings['phpmailer']['host'];
    $object->SMTPAuth   = $settings['phpmailer']['SMTPAuth'];
    $object->Username   = $settings['phpmailer']['Username'];
    $object->Password   = $settings['phpmailer']['Password'];
    $object->SMTPSecure = $settings['phpmailer']['SMTPSecure'];
    $object->Port       = $settings['phpmailer']['Port'];

    $object->setFrom($settings['phpmailer']['setFrom'], 'Subject');

    $object->isHTML($settings['phpmailer']['isHTML']);
    $object->CharSet = 'UTF-8';

    return $object;
};

// Monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings');
    $logger = new Monolog\Logger($settings['logger']['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['logger']['path'], Monolog\Logger::DEBUG));
    return $logger;
};

// Doctrine
$container['em'] = function ($c) {
    $settings = $c->get('settings');
    $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
            $settings['doctrine']['meta']['entity_path'],
            $settings['doctrine']['meta']['auto_generate_proxies'],
            $settings['doctrine']['meta']['proxy_dir'],
            $settings['doctrine']['meta']['cache'],
            false
        );
        return \Doctrine\ORM\EntityManager::create($settings['doctrine']['connection'], $config);
};

// Resource Entity Manager
$container['resource'] = function ($c) {
    return new \App\Resource\Resource($c->get('em'));
};

// Consultas do Doctrine | DQL's
// @TODO Repository Pattern
$container['consulta'] = function ($c) {
    return new \App\Resource\Consultas($c->get('em'));
};

// Validação
$container['validator'] = function () {
    return new Awurth\SlimValidation\Validator();
};
