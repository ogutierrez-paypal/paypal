
<!DOCTYPE html>
<html lang="en">
<head>
    <title>OXXO Example</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="./styles-oxxo.css" />
</head>

<body>
<br />

<label>
    <input
        type="radio"
        name="payment-option"
        value="paypal"
        id="paypal-radio"
        checked
    />
    <span id="paypal-mark"></span>
</label>

<label>
    <input
        id="oxxo-radio"
        value="oxxo"
        name="payment-option"
        type="radio"
    />
    <span id="oxxo-mark"></span>
</label>

<div id="oxxo-fields"></div>

<div id="paypal-btn"></div>
<div id="oxxo-btn"></div>

<script src="https://www.paypal.com/sdk/js?client-id=ATxZUpGH-lnD2CzEEPOpVUfwURN6PCRTjoya8BuMY2fN9yKLTShAeMJerO90ohCDhnHS3dqS5dVbZUvs&components=buttons,payment-fields,marks,funding-eligibility&enable-funding=oxxo&currency=MXN"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" async></script>

<script>


    /* eslint-disable consistent-return, new-cap, no-alert, no-console */

    var order = {
        purchase_units: [
            {
                amount: {
                    currency_code: "MXN",
                    value: "49.99",
                },
            },
        ]
    };

    /* Paypal */
    paypal
        .Marks({
            fundingSource: paypal.FUNDING.PAYPAL,
        })
        .render("#paypal-mark");

    paypal
        .Buttons({
            fundingSource: paypal.FUNDING.PAYPAL,
            style: {
                label: "pay",
                color: "silver",
            },
            createOrder(data, actions) {
                return actions.order.create(order);
            },
            onApprove(data, actions) {
                return actions.order.capture().then((details) => {
                    alert(`Transaction completed by ${details.payer.name.given_name}!`);
                });
            },
            onCancel(data, actions) {
                console.log("onCancel called");
            },
            onError(err) {
                console.error(err);
            },
        })
        .render("#paypal-btn");

    /* OXXO  */
    paypal
        .Marks({
            fundingSource: paypal.FUNDING.OXXO,
        })
        .render("#oxxo-mark");

    paypal
        .PaymentFields({
            fundingSource: paypal.FUNDING.OXXO,
            style: {},
            fields: {
                name: {
                    value: "",
                },
            },
        })
        .render("#oxxo-fields");

    paypal
        .Buttons({
            upgradeLSAT: true,
            fundingSource: paypal.FUNDING.OXXO,
            style: {
                label: "pay",
            },
            createOrder(data, actions) {
                return actions.order.create(order);
            },
            onApprove(data, actions) {
                fetch(`/orders/${data.orderID}`, {
                    method: "get",
                })
                    .then((res) => res.json())
                    .then((data) => {
                        console.log(data);
                        // Order is autocaptured for non-instant payment methods
                        swal(
                            "Order Information!",
                            `Id: ${data.id}, ${Object.keys(data.payment_source)[0]}, ${
                                data.purchase_units[0].payments.captures[0].amount.currency_code
                            } ${data.purchase_units[0].payments.captures[0].amount.value}`,
                            "success"
                        );
                    })
                    .catch(console.error);
            },
            onCancel(data, actions) {
                console.log(data);
                swal("Order Canceled", `ID: ${data.orderID}`, "warning");
            },
            onError(err) {
                console.error(err);
            },
        })
        .render("#oxxo-btn");

    document.getElementById("oxxo-btn").style.display = "none";
    document.getElementById("oxxo-fields").style.display = "none";

    /* radio buttons */
    document.querySelectorAll("input[name=payment-option]").forEach((el) => {
        el.addEventListener("change", (event) => {
            switch (event.target.value) {
                case "paypal":
                    document.getElementById("oxxo-fields").style.display = "none";
                    document.getElementById("oxxo-btn").style.display = "none";
                    document.getElementById("paypal-btn").style.display = "block";
                    break;
                case "oxxo":
                    document.getElementById("oxxo-fields").style.display = "block";
                    document.getElementById("oxxo-btn").style.display = "block";
                    document.getElementById("paypal-btn").style.display = "none";
                    break;
                default:
                    break;
            }
        });
    });



</script>
</body>
</html>
