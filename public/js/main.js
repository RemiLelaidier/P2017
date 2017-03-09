/**
 * Fonction pour charger les themes
 * @param themes
 */
function loadThemes(themes) {
    for (i = 0; i < themes.length / 5; i++){
        var tr = document.createElement('TR')
        for(j = 0; j < 5; j++){

            // identifieur JSON
            identifieur = i*5 + j

            var td = document.createElement('TD')
            td.innerHTML = themes[identifieur].titre
            td.title = themes[identifieur].description

            // Couleurs
            if(themes[identifieur].couleur === "BLUE")
                td.style.backgroundColor = "#77c9d2"
            if(themes[identifieur].couleur === "VERT")
                td.style.backgroundColor = "#bbdeab"
            if(themes[identifieur].couleur === "INDIGO")
                td.style.backgroundColor = "#acb9dd"
            if(themes[identifieur].couleur === "VIOLET")
                td.style.backgroundColor = "#d49fb8"
            if(themes[identifieur].couleur === "JAUNE")
                td.style.backgroundColor = "#fed899"
            if(themes[identifieur].couleur === "ORANGE")
                td.style.backgroundColor = "#f9b98f"
            if(themes[identifieur].couleur === "ROUGE")
                td.style.backgroundColor = "#f59888"
            
            td.addEventListener("click", function () {
                this.className = "selected"
            })

            tr.appendChild(td)
        }
        document.getElementById('liste').appendChild(tr)
    }
}