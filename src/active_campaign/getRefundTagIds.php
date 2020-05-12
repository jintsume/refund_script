<?php

$getRefundTagsMap = function() use ($sendGetReq) {
    $refundTags = $sendGetReq('tags', [ 'search' => 'refund' ])->tags;

    // filter out "refunded" tags such as "refunded 4/10/20"
    $refundTags = array_filter($refundTags, function($tag) {
        return stripos($tag->tag, 'refunded') === false;
    });

    return array_reduce($refundTags, function($refundTagsMap, $tag) {
        $refundTagsMap->{$tag->id} = $tag->tag;
        return $refundTagsMap;
    }, new stdClass());
};