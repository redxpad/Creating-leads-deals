<?php
require_once('crest.php');
$response = CRest::call('crm.lead.add', [
    'FIELDS' => [
        "TITLE" => "ИП Титов", 
        "NAME" => "Глеб", 
        "SECOND_NAME" => "Егорович", 
        "LAST_NAME" => "Титов", 
        "STATUS_ID" => "NEW", 
    ],
]);