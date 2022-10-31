<?php
require_once('crest.php');
$response = CRest::call('crm.contact.list', [
    'SELECT' => ['PHONE'],
    'FILTER' => ['PHONE' => '+79046333332']
]);