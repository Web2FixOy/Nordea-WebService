<?php

require_once __DIR__ . '/../vendor/autoload.php';

$key_file = realpath(__DIR__ . '/../cert/WSNDEA1234_2.pem');

$config = new \Profit\Nordea\API\Config();
$config->language = 'EN';
$config->environment = 'PRODUCTION';
$config->user_agent = 'Ruby';
$config->software_id = 'Ruby';
$config->cert_file = $key_file;
$config->private_key_file = $key_file;
$config->sender_id = 11111111;
$config->customer_id = 162355330;
$config->receiver_id = 123456789;

