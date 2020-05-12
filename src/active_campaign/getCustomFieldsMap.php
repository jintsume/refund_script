<?php

$getCustomFieldsMap = function() use ($sendGetReq) {
    $customFields = $sendGetReq('fields')->fields;

    $customFields = array_filter($customFields, function($customField) {
        return in_array(strtolower($customField->title), [ 'recurring status', 'products purchased' ]);
    });

    return array_reduce($customFields, function($customFieldMap, $customField) {
        $customFieldMap->{$customField->id} = str_replace(' ','_',strtolower($customField->title));
        return $customFieldMap;
    }, new stdClass());
};