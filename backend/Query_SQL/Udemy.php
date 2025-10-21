<?php
    $campaigns = [
        'Spring Sale' => [
            'AdSet1' => ['name' => 'Discounted Gadgets','clicks' => 150,'impressions' => 10000],
            'AdSet2' => ['name' => 'Outdoor Equipment','clicks' => 250,'impressions' => 15000],
                        ],

        'Holiday Deals' => [
            'AdSet1' => ['name' => 'Winter Apparel','clicks' => 200,'impressions' => 12000],
            'AdSet2' => ['name' => 'Electronics Special','clicks' => 300,'impressions' => 18000],
                            ],
                ];
$totalCampaignClicks = [];
$totalCampaignImpressions = [];
$counterclick = 0;
$counterimpressions = 0;
foreach($campaigns as $campaignName => $adSets){
    $tot = 0;
    foreach($adSets as $adSet){
        $tot += $adSet['clicks'];
        $counterclick ++ ;
    }
    $totalCampaignClicks[$campaignName] = $tot;
}

foreach($campaigns as $campaignName => $adSets){
    $tot = 0;
    foreach($adSets as $adSet){
        $tot += $adSet['impressions'];
        $counterimpressions ++;
    }
    $totalCampaignImpressions[$campaignName] = $tot;
}
//var_dump($totalCampaignClicks);
//var_dump($totalCampaignImpressions);
$sumclick = 0;
$sumimpre = 0 ;
foreach($totalCampaignClicks AS $key => $value){
        $sumclick += $value;
}
foreach($totalCampaignImpressions AS $key => $value){
        $sumimpre += $value;
}
if(empty($campaigns)){
    echo"Average clicks per ad set: 0, Average impressions per ad set: 0.";
}else{
    echo "Average clicks per ad set: ". $sumclick / $counterclick .",Average impressions per ad set: ".$sumimpre / $counterimpressions.".";
}

//$string_media = "Average clicks per ad set: [average clicks], Average impressions per ad set: [average impressions].";

round()