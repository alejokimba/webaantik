
// Step #3
const cardForm = mp.cardForm({
    amount: "100.5",
    autoMount: true,
    form: {
      id: "form-checkout",
      cardholderName: {
        id: "form-checkout__cardholderName",
        placeholder: "Card Holder",
      },
      cardholderEmail: {
        id: "form-checkout__cardholderEmail",
        placeholder: "E-mail",
      },
      cardNumber: {
        id: "form-checkout__cardNumber",
        placeholder: "Card Number",
      },
      cardExpirationMonth: {
        id: "form-checkout__cardExpirationMonth",
        placeholder: "MM",
      },
      cardExpirationYear: {
        id: "form-checkout__cardExpirationYear",
        placeholder: "YYYY",
      },
      securityCode: {
        id: "form-checkout__securityCode",
        placeholder: "CVV",
      },
      installments: {
        id: "form-checkout__installments",
        placeholder: "Installments",
      },
      identificationType: {
        id: "form-checkout__identificationType",
        placeholder: "Document Type",
      },
      identificationNumber: {
        id: "form-checkout__identificationNumber",
        placeholder: "Document Number",
      },
      issuer: {
        id: "form-checkout__issuer",
        placeholder: "Issuer",
      },
    },
    callbacks: {
      onFormMounted: error => {
        if (error) return console.warn("Form Mounted handling error: ", error);
        console.log("Form mounted");
      },
      onSubmit: event => {
        event.preventDefault();
  
        const {
          paymentMethodId: payment_method_id,
          issuerId: issuer_id,
          cardholderEmail: e-mail,
          amount,
          token,
          installments,
          identificationNumber,
          identificationType,
        } = cardForm.getCardFormData();
  
        fetch("/process_payment", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({
            token,
            issuer_id,
            payment_method_id,
            transaction_amount: Number(amount),
            installments: Number(installments),
            description: "Product description",
            payer: {
              email,
              identification: {
                type: identificationType,
                number: identificationNumber,
              },
            },
          }),
        });
      },
      onFetching: (resource) => {
        console.log("Fetching resource: ", resource);
  
        // Animate progress bar
        const progressBar = document.querySelector(".progress-bar");
        progressBar.removeAttribute("value");
  
        return () => {
          progressBar.setAttribute("value", "0");
        };
      },
    },
  });