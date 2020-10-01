<!DOCTYPE html>
<html>
<head>
    <title>Login Spid</title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="css/spid-sp-access-button.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body { margin: auto; text-align: center; }
        .section1{ margin: 20px auto 0; }
        .section2 { margin: 50px auto 0; }
        .section3{ margin: 30px auto 0;}
        .section2 .content { background-color: #216294; color: white; padding: 20px 0; }
        .textICon{ text-align: left; margin: 30px; font-weight: bold; }
        .container{ border: 2px solid #000000; border-radius:16px; max-width:750px; width: auto; margin: auto; height: 400px; }
        .spidtext{ margin: 10px 50px 20px; font-size: 17px; position: absolute; top: 55%; -ms-transform: translateY(-100%); transform: translateY(-100%); }
        a{ text-decoration: none; text-transform: none; color:#000; }
        a:hover{ opacity: 0.9; }
        .section3 .content{ height: 230px; position: relative; }

        .left-panel{ display: inline-block; width: 50%; float: left;}
        .textlink{ text-align:left; display: block; margin: auto 40px; color: #216294; text-decoration: none; font-weight: 700; }

        .button{
            left:auto !important;
            position: relative !important;
            cursor: pointer !important;
            display: inline-block !important;
            overflow: hidden !important;
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important;
            -webkit-tap-highlight-color: transparent !important;
            vertical-align: middle !important;
            z-index: 99 !important;
            -webkit-transition: .3s ease-out !important;
            transition: .3s ease-out !important;
            text-decoration: none !important;
            background-color: #216294 !important;
            text-align: center !important;
            letter-spacing: .5px !important;
            -webkit-transition: background-color .2s ease-out !important;
            transition: background-color .2s ease-out !important;
            cursor: pointer !important;
            border: none !important;
            border-radius: 2px !important;
            display: inline-block !important;
            height: 36px !important;
            line-height: 36px !important;
            padding: 0 16px !important;
            text-transform: uppercase !important;
            vertical-align: middle !important;
            -webkit-tap-highlight-color: transparent !important;
            -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2) !important;
            box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2) !important;
            margin-right: 15px !important;
        }
        .buttoncentered{
            position: relative !important;
            cursor: pointer !important;
            display: inline-block !important;
            overflow: hidden !important;
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important;
            -webkit-tap-highlight-color: transparent !important;
            vertical-align: middle !important;
            z-index: 99 !important;
            -webkit-transition: .3s ease-out !important;
            transition: .3s ease-out !important;
            text-decoration: none !important;
            background-color: #216294 !important;
            text-align: center !important;
            letter-spacing: .5px !important;
            -webkit-transition: background-color .2s ease-out !important;
            transition: background-color .2s ease-out !important;
            cursor: pointer !important;
            border: none !important;
            border-radius: 2px !important;
            display: inline-block !important;
            height: 36px !important;
            line-height: 36px !important;
            padding: 0 16px !important;
            text-transform: uppercase !important;
            vertical-align: middle !important;
            -webkit-tap-highlight-color: transparent !important;
            -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2) !important;
            box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2) !important;
            margin-right: 15px !important;
        }

        .button:hover, .button.f-btn-transparent:focus, .button.f-btn-transparent:hover {background-color: #2196f3 !important;}
        .buttoncentered:hover, .buttoncentered.f-btn-transparent:focus, .buttoncentered.f-btn-transparent:hover {background-color: #2196f3 !important;}
        .btntop{margin-top:10px !important;}
        .button:hover, .button:focus {opacity: 0.8 !important;}
        .buttoncentered:hover, .buttoncentered:focus{ opacity: 0.8 !important;}
        .button span, .buttoncentered span {color: #fff !important;}
        .button.password{margin-top:10px !important;}
        .button.password:hover, .button.password:focus { background-color: #2196f3 !important; }

        .menu{ background-color: #216294; }
        .menu .content {
            display: inline-block;
        }

        .menu .content ul li {
            max-width: 100%;
            display: block;
            float: left;
            margin: 13px 20px;
        }
        .menu .content ul li a { color: white; font-weight: bold; }

        .menu .content ul li a:hover { text-decoration: none; }
    </style>
</head>
<body>
<section class="menu">
    <div class="content">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="amministrazione-transparente.php">Amministrazione Trasparente</a></li>
        </ul>
    </div>
</section>
    <section class="section1">
        <div class="title">
            <div class="image"><img src="img/Logo-Ordine-colori.png" title="Ordine dei Medici Chirurgi"/></div>
        </div>
    </section>
    <section class="section2">
        <div class="content">
            <h2>Benvenuto nel servizio di richiesta Iscrizione OnLine</h2>
        </div>
    </section>
    <section class="section3">
        <div class="container">
            <div class="title">
                <div>
                    <p class="textICon"><i class="fa fa-user" aria-hidden="true"></i> Autenticazione</p>
                </div>
            </div>
            <div class="content">
                <p class="spidtext">SPID è il sistema di accesso che consente di utilizzare, con un'identità digitale unica, i servizi online della Pubblica Amministrazione e dei privati accreditati. Se sei già in possesso di un'identità digitale, accedi con le credenziali del tuo gestore. Se non hai ancora un'identità digitale, richiedila ad uno dei gestori.</p>
            </div>
            <div class="footer">
                <div class="left-panel"><div>
                        <a class="textlink" href="https://www.spid.gov.it/" target="_blank">Maggiori informazioni su SPID</a>
                        <a class="textlink" href="https://www.spid.gov.it/richiedi-spid" target="_blank">Non hai SPID?</a>
                    </div>
                </div>
                <div class="right-panel">
                    <!-- AGID - SPID IDP BUTTON MEDIUM "ENTRA CON SPID" * begin * -->
                    <form name="spid_idp_access" action="login.php" method="post">
                        <input type="hidden" name="param_001" value="" />
                        <input type="hidden" name="param_002" value="" />
                        <input type="hidden" name="param_003" value="" />
                        <a href="#" class="italia-it-button italia-it-button-size-m button-spid" spid-idp-button="#spid-idp-button-medium-post" aria-haspopup="true" aria-expanded="false">
                            <span class="italia-it-button-icon"><img src="img/spid-ico-circle-bb.svg" onerror="this.src='img/spid-ico-circle-bb.png'; this.onerror=null;" alt="" /></span>
                            <span class="italia-it-button-text">Entra con SPID</span>
                        </a>
                        <div id="spid-idp-button-medium-post" class="spid-idp-button spid-idp-button-tip spid-idp-button-relative">
                            <ul id="spid-idp-list-medium-root-post" class="spid-idp-button-menu" aria-labelledby="spid-idp">
                                <li class="spid-idp-button-link" data-idp="arubaid">
                                    <button class="idp-button-idp-logo" name="aruba_id" type="submit"><span class="spid-sr-only">Aruba ID</span><img class="spid-idp-button-logo" src="img/spid-idp-arubaid.svg" onerror="this.src='img/spid-idp-arubaid.png'; this.onerror=null;" alt="Aruba ID" /></button>
                                </li>
                                <li class="spid-idp-button-link" data-idp="infocertid">
                                    <button class="idp-button-idp-logo" name="infocert_id" type="submit"><span class="spid-sr-only">Infocert ID</span><img class="spid-idp-button-logo" src="img/spid-idp-infocertid.svg" onerror="this.src='img/spid-idp-infocertid.png'; this.onerror=null;" alt="Infocert ID" /></button>
                                </li>
                                <li class="spid-idp-button-link" data-idp="intesaid">
                                    <button class="idp-button-idp-logo" name="intesa_id" type="submit"><span class="spid-sr-only">Intesa ID</span><img class="spid-idp-button-logo" src="img/spid-idp-intesaid.svg" onerror="this.src='img/spid-idp-intesaid.png'; this.onerror=null;" alt="Intesa ID" /></button>
                                </li>
                                <li class="spid-idp-button-link" data-idp="lepidaid">
                                    <button class="idp-button-idp-logo" name="lepida_id" type="submit"><span class="spid-sr-only">Lepida ID</span><img class="spid-idp-button-logo" src="img/spid-idp-lepidaid.svg" onerror="this.src='img/spid-idp-lepidaid.png'; this.onerror=null;" alt="Lepida ID" /></button>
                                </li>
                                <li class="spid-idp-button-link" data-idp="namirialid">
                                    <button class="idp-button-idp-logo" name="namirial_id" type="submit"><span class="spid-sr-only">Namirial ID</span><img class="spid-idp-button-logo" src="img/spid-idp-namirialid.svg" onerror="this.src='img/spid-idp-namirialid.png'; this.onerror=null;" alt="Namirial ID" /></button>
                                </li>
                                <li class="spid-idp-button-link" data-idp="posteid">
                                    <button class="idp-button-idp-logo" name="poste_id" type="submit"><span class="spid-sr-only">Poste ID</span><img class="spid-idp-button-logo" src="img/spid-idp-posteid.svg" onerror="this.src='img/spid-idp-posteid.png'; this.onerror=null;" alt="Poste ID" /></button>
                                </li>
                                <li class="spid-idp-button-link" data-idp="sielteid">
                                    <button class="idp-button-idp-logo" name="sielte_id" type="submit"><span class="spid-sr-only">Sielte ID</span><img class="spid-idp-button-logo" src="img/spid-idp-sielteid.svg" onerror="this.src='img/spid-idp-sielteid.png'; this.onerror=null;" alt="Sielte ID" /></button>
                                </li>
                                <li class="spid-idp-button-link" data-idp="spiditalia">
                                    <button class="idp-button-idp-logo" name="spiditalia" type="submit"><span class="spid-sr-only">SPIDItalia Register.it</span><img class="spid-idp-button-logo" src="img/spid-idp-spiditalia.svg" onerror="this.src='img/spid-idp-spiditalia.png'; this.onerror=null;" alt="SpidItalia" /></button>
                                </li>
                                <li class="spid-idp-button-link" data-idp="timid">
                                    <button class="idp-button-idp-logo" name="tim_id" type="submit"><span class="spid-sr-only">Tim ID</span><img class="spid-idp-button-logo" src="img/spid-idp-timid.svg" onerror="this.src='img/spid-idp-timid.png'; this.onerror=null;" alt="Tim ID" /></button>
                                </li>
                                <li class="spid-idp-support-link" data-spidlink="info">
                                    <a href="https://www.spid.gov.it">Maggiori informazioni</a>
                                </li>
                                <li class="spid-idp-support-link" data-spidlink="rich">
                                    <a href="https://www.spid.gov.it/richiedi-spid">Non hai SPID?</a>
                                </li>
                                <li class="spid-idp-support-link" data-spidlink="help">
                                    <a href="https://www.spid.gov.it/serve-aiuto">Serve aiuto?</a>
                                </li>
                            </ul>
                        </div>
                    </form>
                    <!-- AGID - SPID IDP BUTTON MEDIUM "ENTRA CON SPID" * end * -->
                </div>
            </div>
        </div>

    </section>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/spid-sp-access-button.min.js"></script>
    <script>
        $(document).ready(function(){
            var rootList = $("#spid-idp-list-medium-root-post");
            var idpList = rootList.children(".spid-idp-button-link");
            var lnkList = rootList.children(".spid-idp-support-link");
            while (idpList.length) {
                rootList.append(idpList.splice(Math.floor(Math.random() * idpList.length), 1)[0]);
            }
            rootList.append(lnkList);
        });
    </script>
</body>
</html>

