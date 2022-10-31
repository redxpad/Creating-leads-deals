<?php
require_once('crest.php');
$response = CRest::call('crm.contact.add', [
    'FIELDS' => [
        "NAME" => "Глеб", 
        "SECOND_NAME" => "Егорович", 
        "LAST_NAME" => "Титов", 
    ],
]);
