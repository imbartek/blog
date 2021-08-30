const list = document.querySelector('.post-list');
const searchBar = document.forms["search-post"].querySelector("input");
searchBar.addEventListener("keyup", function(e) {
    const term = e.target.value.toLowerCase();
    const posts = list.getElementsByTagName('li');
    Array.from(posts).forEach(function(post) {
        const title = post.firstElementChild.textContent;
        if (title.toLowerCase().indexOf(term) != -1) {
            post.style.display = "block";
        } else {
            post.style.display = "none";
        }
    });
});
