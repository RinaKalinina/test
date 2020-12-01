<?php

$fileName = 'test.xml';

if (file_exists($fileName)) {
    $xml = simplexml_load_file($fileName);
} else {
    exit("Не удалось открыть файл $fileName");
}

$debtor = [];
$managerAttributes = $xml->PublisherInfo->ArbitrManager->attributes();

$firstName = $managerAttributes->FirstName;
$middleName = $managerAttributes->MiddleName;
$lastName = $managerAttributes->LastName;


$debtor['id'] = (int)$managerAttributes->Id;
$debtor['type'] = (string)$xml->PublisherInfo->attributes()->PublisherType;
$debtor['full_name'] = $firstName . ' ' . $middleName . ' ' . $lastName;

$key = 0;
foreach ($xml->MessageInfo->Auction->LotTable->AuctionLot as $lots) {
    $debtor['lots'][$key]['order'] = (int)$lots->Order;
    $debtor['lots'][$key]['price'] = (int)$lots->StartPrice;
    $debtor['lots'][$key]['description'] = trim((string)$lots->Description);

    $key++;
}

return $debtor;
