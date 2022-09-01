<?php
if (!defined('IN_SCRIPT')) {die('Invalid attempt!');}
$config = array(
    "name" => "Improved Bitcoin", // Coin name/title
    "symbol" => "iBTC", // Coin symbol
    "description" => "You can browse iBTC block details and transaction details with the Block Explorer.",
    "homepage" => "http://localhost/explorer",
    "root_path" => "/", //start with '/', end with '/'
    "copy_name" => "ibtc.network",
    "start_year" => 2020,
    "explorer_name" => "iBTC Block Explorer",
    "explorer_path" => "explorer/", //do not start with '/',  but end with '/', if root write ""
    "theme" => "theme1",
    "url_rewrite" => true,
    "rpc_host" => "127.0.0.1", // Host/IP for the daemon
    "rpc_port" => 9332, // RPC port for the daemon
    "rpc_user" => "your-rpc-user", // 'rpcuser' from the coin's .conf
    "rpc_password" => "your-rpc-password", // 'rpcpassword' from the coin's .conf
    "proofof" => "pow", //pow,pos
    "total_amount" => 84000000,
    "block_reward" => 50,
    "genesis_block_timestamp" => 1584397119,
    "nTargetTimespan" => 180, //14 * 24 * 60 * 60
    "nTargetSpacing" => 180, //3 * 60
    "blocks_per_page" => 20,
    "date_format" => "Y-m-d H:i:s",
    "refresh_interval" => 180, //seconds
    "retarget_diff_since" => 0,
);
