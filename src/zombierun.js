function navbarFunction(){
    let x=document.getElementById("myNavbar");
    if (x.className === "navbar"){
        x.className +="-responsive";
    } else {
        x.className = "navbar";
    }
}

function ShowMore() {
    let dots = document.getElementById("dots");
    let moreText = document.getElementById("more");
    let btnText = document.getElementById("moreBtn");

    if (dots.style.display == "none") {
        dots.style.display = "inlinine";
        btnText.innerHTML = "Read More...";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "...Show less";
        moreText.style.display = "inline";
    }

}