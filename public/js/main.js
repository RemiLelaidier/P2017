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
    var liste = document.querySelector('.menu')
    for (i = 0; i < themes.length; i++){
        var li = document.createElement('LI')
        li.className = "row theme"

        var a = document.createElement('A')
        a.innerHTML = themes[i].titre
        a.title = themes[i].description

        var container = document.createElement('DIV')
        container.className = 'theme__title col s10'

        container.appendChild(a)
        li.appendChild(container)

        var div = document.createElement('DIV')
        div.className = "theme__card col s1"

        // Couleurs
        if(themes[i].couleur === "BLUE")
            div.style.backgroundColor = bleu
        if(themes[i].couleur === "VERT")
            div.style.backgroundColor = vert
        if(themes[i].couleur === "INDIGO")
            div.style.backgroundColor = indigo
        if(themes[i].couleur === "VIOLET")
            div.style.backgroundColor = violet
        if(themes[i].couleur === "JAUNE")
            div.style.backgroundColor = jaune
        if(themes[i].couleur === "ORANGE")
            div.style.backgroundColor = orange
        if(themes[i].couleur === "ROUGE")
            div.style.backgroundColor = rouge

        /*a.addEventListener("click", function () {
            this.className = "selected"
        })*/
        li.appendChild(div)

        var empty = document.createElement('DIV')
        empty.className = 'theme__empty col s1'

        li.appendChild(empty)
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
        lien.className = "waves-effect btn left col s12"
        lien.href = articles[i].source
        lien.innerHTML = "Lien"

        tags = document.createElement('DIV')
        tags.className = "article__tags row"
        list_themes = articles[i].themes

        for(j = 0; j < list_themes.length; j++){
            theme = document.createElement('DIV')
            theme.className = "col s3 article__tag"

            icon = document.createElement('DIV')
            icon.className = "chip"
            icon.innerHTML = list_themes[j].titre
            if(list_themes[j].couleur === "BLUE")
                icon.style.color = bleu
            if(list_themes[j].couleur === "VERT")
                icon.style.color = vert
            if(list_themes[j].couleur === "INDIGO")
                icon.style.color = indigo
            if(list_themes[j].couleur === "VIOLET")
                icon.style.color = violet
            if(list_themes[j].couleur === "JAUNE")
                icon.style.color = jaune
            if(list_themes[j].couleur === "ORANGE")
                icon.style.color = orange
            if(list_themes[j].couleur === "ROUGE")
                icon.style.color = rouge
            theme.appendChild(icon)

            tags.appendChild(theme)
        }

        div = document.createElement('DIV')
        div.className = "col s6 article container"
        div.appendChild(h1)
        div.appendChild(desc)
        div.appendChild(lien)
        div.appendChild(tags)

        document.getElementById('articles').appendChild(div)
    }
}