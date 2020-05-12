<?php

$getRefundContacts = function($refundTagsMap, $customFieldsMap) use ($sendGetReq) {

    $totalNumContacts = $sendGetReq('contacts')->meta->total;
    $offsetCounter = 0;

    $refundContacts = array_reduce(array_keys(get_object_vars($refundTagsMap)),
        function($refundContacts, $tagId) use ($totalNumContacts, $sendGetReq, $offsetCounter, $refundTagsMap) {

            do {

                $page = $sendGetReq('contacts', [
                    'tagid' =>  intval($tagId),
                    'offset' => $offsetCounter
                ]);

                // API will return full list if there is no match for tag filter
                if ($page->meta->total === $totalNumContacts) {
                    break;
                }

                foreach ($page->contacts as $contact) {
                    if (!in_array($contact->id, array_column($refundContacts, 'id'))) {

                        // add specific tag name to contact entity
                        if (!isset($contact->refund_tag_names)) {
                            $contact->refund_tag_names = [ $refundTagsMap->{$tagId} ];
                        } else {
                            $contact->refund_tag_names[] = $refundTagsMap->{$tagId};
                        }

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

        // normalize products_purchased field value to JSON encode-able
        //
        // "||EMM $2000 one-time payment||EMM $499 x 5 payments||"
        // ...to
        // ['EMM $2000 one-time payment','EMM $499 x 5 payments']
        $refundContact->products_purchased = explode('||', $refundContact->products_purchased);
        $refundContact->products_purchased = array_slice($refundContact->products_purchased, 1, count($refundContact->products_purchased) - 2);

    }

    return $refundContacts;
};