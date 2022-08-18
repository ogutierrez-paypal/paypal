
<!DOCTYPE html>

<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <title>

        Payment |

        Antarpply Expeditions - Explore Antarctica on board the Ushuaia </title>









    <meta name="HandheldFriendly" content="true" />

    <meta name="format-detection" content="telephone=no" />

    <script>

        var uagent = navigator.userAgent.toLowerCase();

        if( uagent.search('ipad') > -1 ) {

//

        }

        else {

            var viewPortTag = document.createElement('meta');

            viewPortTag.id = "viewport";

            viewPortTag.name = "viewport";

            viewPortTag.content = "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0";

            document.getElementsByTagName('head')[0].appendChild(viewPortTag);

        }

    </script>





    <meta name="description" content="Explore Antarctica with Antarpply Expeditions - small ship expedition cruises to Antarctica and the sub-Antarctic islands." />

    <meta name="keywords" content="Antarpply Expeditions, Antarctic, Antarctica, Antarctic cruise, Antarctic travel, Explore Antarctica, Antarctic Peninsula, South Shetland Islands, Antarctic expeditions, MV Ushuaia" />







    <link href="/favicon.ico" type="image/x-icon" rel="icon" /><link href="/favicon.ico" type="image/x-icon" rel="shortcut icon" /><link rel="stylesheet" type="text/css" href="/css/style__.css" /><link rel="stylesheet" type="text/css" href="/css/style.css?20140603" />

    <script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>

    <script type="text/javascript" src="/js/jquery.printElement.min.js"></script>

    <script type="text/javascript" src="/js/script.js"></script>





    <link rel="stylesheet" href="https://antarpply.com/css/r.css" />





</head>

<body class="page page-payment single-page body-lang-en">



<div id="r-wrapper">



    <div id="overlay-container">

        <div class="ovl-content-box">

            <div class="close-btn"></div>

            <a class="load-item-prev"></a>

            <a class="load-item-next"></a>

            <div class="ovl-content"></div>

        </div>

    </div>



    <div class="header-background hide-on-r"><img src="https://antarpply.com/img/bground/background2.jpg"></div>

    <div class="header-wrapper">

        <div class="long-left-bar language-bar">

            <div id="top-lang">

                <a id="lang-esp" href="/es">ESPAÑOL</a>

                <a href="/en" class="selected">ENGLISH</a>

            </div>

        </div>



        <div class="long-left-bar logo-bar">



            <a id="r-back" class="show-on-r" href="https://antarpply.com/en"></a>



            <a class="logo" href="/en"></a>

        </div>



        <div id="sm-top-menu" class="long-right-bar nav1-bar">

            <ul>

                <li><a href="https://antarpply.com/en/about-us">About us</a></li>

                <li><a href="https://antarpply.com/en/contact-us">Contact us</a></li>

                <li><a href="https://antarpply.com/en/agents">Agents</a></li>

            </ul>

        </div>

        <div id="top-menu" class="long-right-bar nav2-bar">

            <ul>

                <li id="top-menu-item-1">

                    <a href="https://antarpply.com/en/">

                        HOME </a>

                </li>

                <li id="top-menu-item-2">

                    <a href="https://antarpply.com/en/itineraries">

                        ITINERARIES </a>

                </li>

                <li id="top-menu-item-3">

                    <a href="https://antarpply.com/en/ratesandavailability">

                        RATES &AMP; AVAILABILITY </a>

                </li>

                <li id="top-menu-item-4">

                    <a href="https://antarpply.com/en/galleries">

                        GALLERY </a>

                </li>

                <li id="top-menu-item-5">

                    <a href="https://antarpply.com/en/the-ushuaia">

                        THE USHUAIA </a>

                </li>

                <li id="top-menu-item-6">

                    <a href="https://antarpply.com/en/resources">

                        RESOURCES </a>

                </li>

            </ul>

        </div>



    </div>











    <div class="content-wrapper">

        <div id="smart-button-container">

            <div>We can write some text here too</div>

            <div> </div>

            <div><label for="description">Description </label><input id="description" maxlength="127" name="descriptionInput" type="text" value="" /></div>

            <p id="descriptionError" style="visibility: hidden; color: red;">Please enter a description</p>

            <div><label for="amount">Enter amount in US$ </label><input id="amount" name="amountInput" type="number" value="" /> USD</div>

            <p id="priceLabelError" style="visibility: hidden; color: red;">Please enter a price</p>

            <div id="invoiceidDiv" style="display: none;"><label for="invoiceid"> </label><input id="invoiceid" maxlength="127" name="invoiceid" type="text" value="" /></div>

            <p id="invoiceidError" style="visibility: hidden; color: red;">Please enter an Invoice ID</p>

            <div id="paypal-button-container" style="margin-top: 0.625rem;"> </div>

        </div>

        <script src="https://www.paypal.com/sdk/js?client-id=AfygyqVHuaaqUHya1Rg6luDiCC7MaJbzhXMPisOYacf2GU4vn5Xtq4RFJtRh1RRKVz7_DqnLbu8hYveH&amp;enable-funding=venmo&amp;currency=USD" data-sdk-integration-source="button-factory"></script>

        <script>// <![CDATA[

            function initPayPalButton() {

                var description = document.querySelector('#smart-button-container #description');

                var amount = document.querySelector('#smart-button-container #amount');

                var descriptionError = document.querySelector('#smart-button-container #descriptionError');

                var priceError = document.querySelector('#smart-button-container #priceLabelError');

                var invoiceid = document.querySelector('#smart-button-container #invoiceid');

                var invoiceidError = document.querySelector('#smart-button-container #invoiceidError');

                var invoiceidDiv = document.querySelector('#smart-button-container #invoiceidDiv');



                var elArr = [description, amount];



                if (invoiceidDiv.firstChild.innerHTML.length > 1) {

                    invoiceidDiv.style.display = "block";

                }



                var purchase_units = [];

                purchase_units[0] = {};

                purchase_units[0].amount = {};



                function validate(event) {

                    return event.value.length > 0;

                }



                paypal.Buttons({

                    style: {

                        color: 'gold',

                        shape: 'pill',

                        label: 'paypal',

                        layout: 'vertical',



                    },



                    onInit: function (data, actions) {

                        actions.disable();



                        if(invoiceidDiv.style.display === "block") {

                            elArr.push(invoiceid);

                        }



                        elArr.forEach(function (item) {

                            item.addEventListener('keyup', function (event) {

                                var result = elArr.every(validate);

                                if (result) {

                                    actions.enable();

                                } else {

                                    actions.disable();

                                }

                            });

                        });

                    },



                    onClick: function () {

                        if (description.value.length < 1) {

                            descriptionError.style.visibility = "visible";

                        } else {

                            descriptionError.style.visibility = "hidden";

                        }



                        if (amount.value.length < 1) {

                            priceError.style.visibility = "visible";

                        } else {

                            priceError.style.visibility = "hidden";

                        }



                        if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {

                            invoiceidError.style.visibility = "visible";

                        } else {

                            invoiceidError.style.visibility = "hidden";

                        }



                        purchase_units[0].description = description.value;

                        purchase_units[0].amount.value = amount.value;



                        if(invoiceid.value !== '') {

                            purchase_units[0].invoice_id = invoiceid.value;

                        }

                    },



                    createOrder: function (data, actions) {

                        return actions.order.create({

                            purchase_units: purchase_units,

                        });

                    },



                    onApprove: function (data, actions) {

                        return actions.order.capture().then(function (orderData) {



// Full available details

                            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));



// Show a success message within this page, e.g.

                            const element = document.getElementById('paypal-button-container');

                            element.innerHTML = '';

                            element.innerHTML = '<h3>Thank you for your payment!</h3>';



// Or go to another URL: actions.redirect('thank_you.html');



                        });

                    },



                    onError: function (err) {

                        console.log(err);

                    }

                }).render('#paypal-button-container');

            }

            initPayPalButton();

            // ]]></script> </div>

















    <div id="push" class="show-on-r"></div>

</div> <!-- r-wrapper -->



<div class="footer-wrapper">

    <div class="footer-copy hide-on-r">

        <div id="footer_inner">

            <span class="copyleft"><p>© Copyright Antarpply Expeditions. <a href="../../media/documents/Antarpply_Privacy_policy_230518.pdf">Privacy Policy</a> - <a href="../../en/terms">Terms and Conditions</a></p></span>

            <a href="https://twitter.com/antarpply" target="_blank" class="social-tw last">Twitter</a> <a href="https://www.facebook.com/antarcticexpeditions" target="_blank" class="social-fb">Facebook</a> </div>

    </div>



    <div class="footer-content">

        <div id="footer_inner2">

            <div id="footer1"><div id="footer-img"><img src="/img/iaato-logo.jpg" alt="" border="0" class="footimg2" /></div><div id="footer-text">As members of the <b>International Association of Antarctica Tour Operators (IAATO)</b>, we are committed to appropriate, safe and environmentally sound private-sector travel to the Antarctic. We operate all our expeditions in accordance with IAATO guidelines and we comply with all the relevant international regulations during navigation and shore visits.</div></div>

            <div id="footer2"><strong>Antarpply Expeditions</strong><br /> Gobernador Paz 633 - 1st Floor,<br /> 9410, Ushuaia, Tierra del Fuego, Argentina</div>

            <div id="footer3"><b>Contact Us</b><br />

                Tel: +54 (2901) 433636 / 436747<br />

                Fax: +54 (2901) 437728<br />

                Email: <a href="mailto:info@antarpply.com">info@antarpply.com</a></div>

        </div>

        <div class="footer-clear hide-on-r"></div>

    </div>





    <div id="r-footer-social" class="show-on-r">

        <a href="https://www.facebook.com/antarcticexpeditions" target="_blank" class="social-fb">Facebook</a><a href="https://twitter.com/antarpply" target="_blank" class="social-tw">Twitter</a> </div>



</div>



</body>

</html>


