/**
 * Variables Couleurs
 */
var bleu = "#2196f3"
    vert = "#4caf50"
    indigo = "#009688"
    violet = "#9c27b0"
    jaune = "#cddc39"
    orange = "#ff9800"
    rouge = "#f44336"

/**
 * Fonction pour charger les themes
 * @param themes
 */
function loadThemes(themes) {
    var liste = document.getElementById('slide-out')
    for (i = 0; i < themes.length; i++){
        var li = document.createElement('LI')

        var a = document.createElement('A')
        a.innerHTML = themes[i].titre
        a.title = themes[i].description

        // Couleurs
        if(themes[i].couleur === "BLUE")
            a.style.backgroundColor = bleu
        if(themes[i].couleur === "VERT")
            a.style.backgroundColor = vert
        if(themes[i].couleur === "INDIGO")
            a.style.backgroundColor = indigo
        if(themes[i].couleur === "VIOLET")
            a.style.backgroundColor = violet
        if(themes[i].couleur === "JAUNE")
            a.style.backgroundColor = jaune
        if(themes[i].couleur === "ORANGE")
            a.style.backgroundColor = orange
        if(themes[i].couleur === "ROUGE")
            a.style.backgroundColor = rouge

        /*a.addEventListener("click", function () {
            this.className = "selected"
        })*/
        li.appendChild(a)
        liste.appendChild(li)
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
        tags.className = "article__tags"
        list_themes = articles[i].themes
        for(j = 0; j < list_themes.length; j++){
            var theme = document.createElement('DIV')
            theme.className = "article__tag"

            if(list_themes[j].couleur === "BLUE")
                theme.style.backgroundColor = bleu
            if(list_themes[j].couleur === "VERT")
                theme.style.backgroundColor = vert
            if(list_themes[j].couleur === "INDIGO")
                theme.style.backgroundColor = indigo
            if(list_themes[j].couleur === "VIOLET")
                theme.style.backgroundColor = violet
            if(list_themes[j].couleur === "JAUNE")
                theme.style.backgroundColor = jaune
            if(list_themes[j].couleur === "ORANGE")
                theme.style.backgroundColor = orange
            if(list_themes[j].couleur === "ROUGE")
                theme.style.backgroundColor = rouge

            p = document.createElement('P')
            p.innerHTML = list_themes[j].titre

            theme.appendChild(p)
            tags.appendChild(theme)
        }

        div = document.createElement('DIV')
        div.className = "article"
        div.appendChild(h1)
        div.appendChild(desc)
        div.appendChild(lien)
        div.appendChild(tags)

        document.getElementById('articles').appendChild(div)
    }
}