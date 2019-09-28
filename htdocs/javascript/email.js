    function confirmEmail() {
        var emailVal = document.getElementById("email").value
        var confemailVal = document.getElementById("confemail").value
        if(emailVal != confemailVal) {
            alert('Emails must match');
        }
    }

//Script Source in report
