//Convertie la saisi de l'utilisateur en coordonné GPS, latitude, longitude pour la stocker dans l'input avant de submit le form
$(document).ready(function() {
    $("button").click(function() {
        // Recupere le nom saisi dans l'input et le type d'adresse selectionné.
        var textInput = $("#nom").val();
        var typeSelected = $("input:checked").attr("id");
        //  Verifie si au moins un champ à était saisi.
        if (textInput.length > 0) {
            $.ajax({
                url: "https://api-adresse.data.gouv.fr/search/?q=" + textInput + "&type=" + typeSelected,
                success: function(result) {
                    if (result["features"].length > 0) {
                        var ville = result["features"][0]["properties"]["city"];
                        var coord = result["features"][0]["geometry"]["coordinates"];
                        $("#nom2passage").val(coord[1] + "/" + coord[0] + "/" + ville);
                        document.forms[0].submit();
                    } else {
                        alert("Entré inconnue ou erroné, veuillez saisir une autre valeur.")
                    }
                }
            });
        }
    })
})