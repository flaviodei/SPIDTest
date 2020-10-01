<?php
require_once('index.php');

use Italia\Spid\Sp;
use Italia\Spid\Spid\Saml;

ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$entityid = 'https://sp.test.org';

$settings = array(
    'sp_entityid' => $entityid, // preferred: https protocol, no trailing slash, example: https://sp.example.com/
    'sp_key_file' => 'sp.key',
    'sp_cert_file' => 'sp.crt',
    'sp_comparison' => 'exact', // one of: "exact", "minimum", "better" or "maximum"
    'sp_assertionconsumerservice' => [
        // order is important ! the 0-base index in this array will be used as ID in the calls
        $entityid . '/testspid/response.php',
    ],
    'sp_singlelogoutservice' => [
        // order is important ! the 0-base index in this array will be used as ID in the calls
        [$entityid . '/testspid/slo.php', 'POST'],
        [$entityid . '/testspid/slo.php', 'REDIRECT']
    ],
    'sp_org_name' => 'test',
    'sp_org_display_name' => 'Test',
    'sp_key_cert_values' => [ // Optional: remove this if you want to generate .key & .crt files manually
        'countryName' => 'IT',
        'stateOrProvinceName' => 'Rome',
        'localityName' => 'Rome',
        'commonName' => 'Ome',
        'emailAddress' => 'test@test.com',
    ],
    'idp_metadata_folder' => './idp_metadata/',
    'sp_attributeconsumingservice' => [
        // order is important ! the 0-base index in this array will be used as ID in the calls
        ["fiscalNumber"],
        ["name", "familyName", "fiscalNumber", "email", "spidCode", "gender", "dateOfBirth", "ivaCode", "mobilePhone", "email", "address", "digitalAddress"],

    ],
    // Time in seconds of skew that is acceptable between client and server when checking OnBefore and NotOnOrAfter
    // assertion condition validity timestamps, and IssueInstant response / assertion timestamps. Optional.
    // Default is 0. Acceptable range: 0-300 (inclusive)
    'accepted_clock_skew_seconds' => 100
);

$sp = new Italia\Spid\Sp($settings);

$sp = new Italia\Spid\Sp($settings, null, $autoconfiguration = true);

// shortname of IdP, same as the name of corresponding IdP metadata file, without .xml
$idpName = 'idp.test.org';
// index of assertion consumer service as per the SP metadata (sp_assertionconsumerservice in settings array)
$assertId = 0;
// index of attribute consuming service as per the SP metadata (sp_attributeconsumingservice in settings array)
$attrId = 1;

if(!$sp->isAuthenticated()){

    $sp->login($idpName, $assertId, $attrId);

    $sp->isAuthenticated();

    $userAttributes = $sp->getAttributes();

} else {
  ?><p>Devi eseguire il </p> <a href="logout.php" style="font-size: 18px;">Logout</a> <?php
}

/*if (isset($_POST) && isset($_POST['selected_idp'])) {
    $idp = $_POST['selected_idp'];
}

if (!$url = $sp->login($idp ?? $idpName,$assertId, $attrId, 1, null, true)) {
    echo "Already logged in !<br>";
    echo ">Home</a>";
} else {
    echo $url;
}*/
