<?php
require_once('my_coin.php');
$coin=new my_coin();
$coin->set_name("Bitcrystalrare");
$coin->set_prefix("BITCRYR");
$coin->set_fee(0.0000002);
$coin->set_feebee($coin->getName());
$coin->set_buy_fee(false);
$coin->set_sell_fee(false);
$coin->set_use_multisignature_support(true);
$coin->set_count_of_used_addresses_for_multisignature_support(3);
$coin->set_rpc_settings_coin("WernerChainer", "fickdiehenneextended", "127.0.0.1", "19333", "", 99999999);
?>