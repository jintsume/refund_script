<?php

$getRefundContacts = function($refundTagIds, $customFieldsMap) use ($sendGetReq) {

    $totalNumContacts = $sendGetReq('contacts')->meta->total;
    $offsetCounter = 0;

    $refundContacts = array_reduce($refundTagIds,
        function($refundContacts, $tagId) use ($totalNumContacts, $sendGetReq, $offsetCounter) {

            do {

                $page = $sendGetReq('contacts', [
                    'tagid' =>  $tagId,
                    'offset' => $offsetCounter
                ]);

                // API will return full list if there is no match for tag filter
                if ($page->meta->total === $totalNumContacts) {
                    break;
                }

                foreach ($page->contacts as $contact) {
                    if (!in_array($contact->id, array_column($refundContacts, 'id'))) {
                        $refundContacts[] = $contact;
                    }
                }

                $offsetCounter += 100;

            } while (count($page->contacts) === 100);

            return $refundContacts;

        },
    []);

    // make additional fetch to get custom field values
    foreach ($refundContacts as $refundContact) {

        $refundContactFields = $sendGetReq($refundContact->links->fieldValues)->fieldValues;

        foreach ($refundContactFields as $refundContactField) {

            // if custom field is 'recurring status' || 'products purchased'
            if (isset($customFieldsMap->{$refundContactField->field})) {
                $refundContact->{$customFieldsMap->{$refundContactField->field}} = $refundContactField->value;
            }
        }
    }

    return $refundContacts;
};