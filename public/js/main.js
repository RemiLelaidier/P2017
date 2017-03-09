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

/**
 * Fonction pour charger les articles
 * @param articles
 */
function loadArticles(articles) {

    for(i = 0; i < articles.length; i++){
        h1 = document.createElement('H1')
        h1.innerHTML = articles[i].titre

        desc = document.createElement('P')
        desc.innerHTML = articles[i].description

        lien = document.createElement('A')
        lien.href = articles[i].source
        lien.innerHTML = articles[i].source

        var tags = document.createElement('DIV')
        list_themes = articles[i].themes
        for(j = 0; j < list_themes.length; j++){
            var theme = document.createElement('DIV')

            if(list_themes[j].couleur === "BLUE")
                theme.style.backgroundColor = "#77c9d2"
            if(list_themes[j].couleur === "VERT")
                theme.style.backgroundColor = "#bbdeab"
            if(list_themes[j].couleur === "INDIGO")
                theme.style.backgroundColor = "#acb9dd"
            if(list_themes[j].couleur === "VIOLET")
                theme.style.backgroundColor = "#d49fb8"
            if(list_themes[j].couleur === "JAUNE")
                theme.style.backgroundColor = "#fed899"
            if(list_themes[j].couleur === "ORANGE")
                theme.style.backgroundColor = "#f9b98f"
            if(list_themes[j].couleur === "ROUGE")
                theme.style.backgroundColor = "#f59888"

            p = document.createElement('P')
            p.innerHTML = list_themes[j].titre

            theme.appendChild(p)
            tags.appendChild(theme)
            console.log(theme)
        }

        div = document.createElement('DIV')
        div.appendChild(h1)
        div.appendChild(desc)
        div.appendChild(lien)
        div.appendChild(tags)

        document.getElementById('articles').appendChild(div)
    }
}