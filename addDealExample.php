<?php
require_once('crest.php');
$response = CRest::call('crm.lead.add', [
    'FIELDS' => [
        "TITLE" => "Плановая продажа", 
        "TYPE_ID" => "GOODS", 
        "STAGE_ID" => "NEW", 
        "CONTACT_ID" => 1,
    ],
]);