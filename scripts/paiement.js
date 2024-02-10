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
    onApprove: function(data, actions){
        return actions.order.capture().then(function(details){
            alert("Transaction OK : "+details.payer.name.given_name);

            //On rajoute ici les éléments à rajouter dans la page html
            //en cas de paiement approuvé
            let baliseSection = document.querySelector("section")
            let contenu = `
            <p>
                <label for="language">Choose your language :</label>
                <select name="language" id="language" required>
                    <option></option>
                    <option value="english">English</option>
                    <option value="french">French</option>
                    <option value="spanish">Spanish</option>
                </select>
            </p>
            `
            baliseSection.innerHTML = contenu
            chooseYourLanguage()
        })
    },
    onError: function (err){
        console.error('Payment error :', err);
        alert("Payment failed !");
    }
}).render("#paypal-button-container");
