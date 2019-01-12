
//Cette fonction étend le texte d'un article.
function toggleSeeMore(article_id) {
    if(document.getElementById(article_id).style.display == 'none') {
        document.getElementById(article_id).style.display = 'block';
        document.getElementById("seeMore").innerHTML = 'See less';
    }
    else {
        document.getElementById(article_id).style.display = 'none';
        document.getElementById("seeMore").innerHTML = 'See more';
    }
}
