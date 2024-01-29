const validation = new window.JustValidate("#signup");

validation
    .addField("#repassword", [
        {
            validator: (value, fields)=>{
                return value === fields["#password"].elem.value;
            },
            errorMessage: "Passwörter müssen übereinstimmen"
        }
    ])
    .addField("#email", [
        {
            validator:(value)=>()=>{
                return fetch ("../validate-email.php?email=" + encodeURIComponent(value))
                    .then (function(response){
                        return response.json();
                    })
                    .then(function(json){
                        return json.available;
                    })
            },
            errorMessage: "Email-Adresse bereits vergeben"
        }
    ]);