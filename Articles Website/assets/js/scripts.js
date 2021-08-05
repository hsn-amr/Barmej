let article = document.getElementsByClassName("article-index");
let newPost = document.getElementById("new-post");

for(let i = 0; i<article.length; i++){
    article[i].addEventListener("click", () => {
        window.location = "articleDetails.php?id="+i;
    })
}

newPost.onclick = () => {
    window.location = "createArticle.php";
}