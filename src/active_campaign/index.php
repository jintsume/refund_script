<?php

require __DIR__.'/sendGetReq.php';
require __DIR__.'/getRefundTagIds.php';
require __DIR__.'/getCustomFieldsMap.php';
require __DIR__.'/getRefundContacts.php';

$refundTagsMap = $getRefundTagsMap();
$customFieldsMap = $getCustomFieldsMap();
$refundContacts = $getRefundContacts($refundTagsMap, $customFieldsMap);

foreach ($refundContacts as $refundContact) {
    if (!(new ActiveCampaignContactsQuery())->findPK(intval($refundContact->id))) {
        $activeCampaignContact = new ActiveCampaignContacts();
        $activeCampaignContact->setId(intval($refundContact->id));
        $activeCampaignContact->setFirstName($refundContact->firstName);
        $activeCampaignContact->setLastName($refundContact->lastName);
        $activeCampaignContact->setEmail($refundContact->email);
        $activeCampaignContact->setRefundTagNames(json_encode($refundContact->refund_tag_names));
        $activeCampaignContact->setProductsPurchased(json_encode($refundContact->products_purchased));
        $activeCampaignContact->setRecurringStatus($refundContact->recurring_status);
        $activeCampaignContact->save();
        echo "Saved contact {$refundContact->id}\n";
    }
}