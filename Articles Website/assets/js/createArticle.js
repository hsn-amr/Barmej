let newTitle = document.getElementById("new-title");
let newArticle = document.getElementById("new-article");
let publishButton = document.getElementById("publish");
let createArticleForm = document.getElementById("create-article-form");

publishButton.onclick = (event) => {
    if(newTitle.value == "" || newArticle.value == ""){
        event.preventDefault();

        if(newTitle.value == ""){
            newTitle.classList.add("empty");
        }
        if(newArticle.value == ""){
            newArticle.classList.add("empty");
        }
    }
}

newTitle.onkeyup = function (){
    this.classList.remove("empty");
}
newArticle.onkeyup = function (){
    this.classList.remove("empty");
}