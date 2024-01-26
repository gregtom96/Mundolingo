paypal.Buttons({
    createOrder: function(data, actions){
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: '10'
                }
            }]
        })
    },
    onApprove: function(data, functions){
        return actions.order.capture().then(function(details){
            alert("Transaction OK : "+details.payer.name.given_name);

            //On rajoute ici les éléments à rajouter dans la page html
            //en cas de paiement approuvé
            let baliseSection = document.querySelector("section")

            let contenu = `
            <iframe src="https://calendar.google.com/calendar/embed?src=rocioaruarte69%40gmail.com&ctz=America%2FArgentina%2FSalta" style="border: 0" width="600" height="400" frameborder="0" scrolling="no"></iframe>
            <form method="get" action="">
                <p>
                    <label for="date">Choose a schedule for your class</label>
                    <input type="date" id="date" name="date" required>
                </p>
                <p>
                    <label for="time">At what time ?</label>
                    <input type="time" id="time" name="time" required>
                </p>
                <p>
                    <button onclick="secondStep()">Reserve your class</button>
                </p>
            </form>`
            baliseSection.innerHTML = contenu
        })
    },
    onError: function (err){
        console.error('Payment error :', err);
        alert("Payment failed !");
    }
}).render("#paypal-button-container");