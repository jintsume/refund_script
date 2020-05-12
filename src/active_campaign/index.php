<?php

require __DIR__.'/sendGetReq.php';
require __DIR__.'/getRefundTagIds.php';
require __DIR__.'/getCustomFieldsMap.php';
require __DIR__.'/getRefundContacts.php';

$refundTagIds = $getRefundTagIds();
$customFieldsMap = $getCustomFieldsMap();
$refundContacts = $getRefundContacts($refundTagIds, $customFieldsMap);

foreach ($refundContacts as $refundContact) {
    if (!(new ActiveCampaignContactsQuery())->findPK(intval($refundContact->id))) {
        $activeCampaignContact = new ActiveCampaignContacts();
        $activeCampaignContact->setId(intval($refundContact->id));
        $activeCampaignContact->setFirstName($refundContact->firstName);
        $activeCampaignContact->setLastName($refundContact->lastName);
        $activeCampaignContact->setEmail($refundContact->email);
        $activeCampaignContact->setRecurringStatus($refundContact->recurring_status);
        $activeCampaignContact->setProductsPurchased($refundContact->products_purchased);
        $activeCampaignContact->save();
        echo "Saved contact {$refundContact->id}\n";
    }
}