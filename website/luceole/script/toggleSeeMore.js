
//Cette fonction étend le texte d'un article.
function toggleSeeMore(article_id, see_more_id) {
    if(document.getElementById(article_id).style.display == 'none') {
        document.getElementById(article_id).style.display = 'block';
        document.getElementById('seeMore'.concat(see_more_id)).innerHTML = 'See Less';
    }
    else {
        document.getElementById(article_id).style.display = 'none';
        document.getElementById('seeMore'.concat(see_more_id)).innerHTML = 'See Less';
    }
}
