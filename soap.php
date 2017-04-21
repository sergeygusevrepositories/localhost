<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 26.02.17
 * Time: 10:40
 */

$wsdl = 'http://www.cbr.ru/DailyInfoWebServ/DailyInfo.asmx?WSDL';

$client = new \SoapClient($wsdl, [
    'exeptions' => 1,
    'cach_wsdl' => WSDL_CACHE_MEMORY,
    'trace' => true,
]);

$result = $client->getCursOnDate([
    'On_date' => '2016-12-21',
]);

echo '=============== REQUEST ================<br />';

echo $client->__getLastRequestHeaders() . '<br />';
echo $client->__getLastRequest() . '<br />';

echo '=============== Response ================' . '<br />';

echo $client->__getLastResponseHeaders() . '<br />';
echo $client->__getLastResponse() . '<br />';

echo '================= DATA =================' . '<br />';

$data = new SimpleXMLElement($result->GetCursOnDateResult->any);

foreach($data->ValuteData->ValuteCursOnDate as $curs)
{
    printf('%s %s = %s руб.', trim($curs->VchCode), trim($curs->Vname), floatVal($curs->Vcurs) / floatval($curs->Vnom));
    echo '<br />';
}