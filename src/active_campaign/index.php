<?php

require __DIR__.'/sendGetReq.php';

$refundTags = $sendGetReq('tags', [ 'search' => 'refund' ])->tags;

// filter out "refunded" tags such as "refunded 4/10/20"
$refundTags = array_filter($refundTags, function($tag) {
    return stripos($tag->tag, 'refunded') === false;
});

$refundTagIds = array_map(function($tag) {
    return intval($tag->id);
}, $refundTags);

$totalNumContacts = $sendGetReq('contacts')->meta->total;

$offsetCounter = 0;

$refundContacts = array_reduce($refundTagIds,
    function($refundContacts, $tagId) use ($totalNumContacts, $sendGetReq, $offsetCounter) {

            do {

                $page = $totalNumContacts = $sendGetReq('contacts', [
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

var_dump($refundContacts);