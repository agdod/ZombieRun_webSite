function navbarFunction(){
    let x=document.getElementById("myNavBar");
    if (x.className === "navbar"){
        x.className +="responsive";
    } else {
        x.className = "navbar";
    }
}