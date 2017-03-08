/**
 * Fonction pour charger les themes
 * @param themes
 */
function loadThemes(themes) {
    for (i = 0; i < themes.length; i++){
        var tr = document.createElement('TR')
        for(j = 0; j < 5; j++){
            td = document.createElement('TD')
            td.innerHTML = themes[j].titre
            tr.appendChild(td)
        }
        document.getElementById('liste').appendChild(tr)
    }
}