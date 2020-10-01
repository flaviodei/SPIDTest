<?php

//require_once('index.php');

include('index.php');

//use Italia\Spid\Sp;
//use Italia\Spid\Spid\Saml;
//use Italia\Spid\Spid\Italia\Spid\Sp;

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


if ($sp->isAuthenticated()) {
    $i = 0;

    $risposta = array();
    foreach ($sp->getAttributes() as $key => $attr) {
            $risposta[$key] = $attr;
            $i++;
    }

   // Codifico in Base 64 o json
    //json_encode($risposta);
    $encoderisposta ='name='.$risposta['name'].',familyName='.$risposta['familyName'].',address='.$risposta['address'].',digitalAddress='.$risposta['digitalAddress'].',mobilePhone='.$risposta['mobilePhone'].',dateOfBirth='.$risposta['dateOfBirth'].',ivaCode='.$risposta['ivaCode'].',spidCode='.$risposta['spidCode'].',fiscalNumber='.$risposta['fiscalNumber'].',email='.$risposta['email'].',gender='.$risposta['gender'];
    # Flavio 05.09.2020
    $encoderisposta = base64_encode($encoderisposta);

    //$token = file_get_contents("pippo.log");

   // $coderisposta = base64_encode($encoderisposta);

    // Mettere Logout Utente
    //$sp->logout(0);

    // Controllo se l'Utente è loggato
    /*if($sp->isAuthenticated()){
        //echo 'Sei ancora loggato!';
        header('Location: http://consumer.test.org:8088?callback='.implode(',',$risposta).'Fallito');
    } else {
       // echo 'Non sei più loggato!';
    }*/

    //header('Location: http://consumer.test.org:8088?callback=sendtoken');
    //$sloId = 0;
    //$sp->logout($sloId);    .',token='.$token
    header('Location: http://consumer.test.org:8088?userdata='.$encoderisposta);


    //$sp->logout(0, null, true);


} else {
    echo "Not logged in !<br>";
    echo "<a href=\"/login\">Login</a>";
}
