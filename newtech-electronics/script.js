function changeView() {

    var signUpBox = document.getElementById("signUpBox");
    var signInBox = document.getElementById("signInBox");

    signUpBox.classList.toggle("d-none");
    signInBox.classList.toggle("d-none");

}



function signout() {

                window.location = "index.php";

}

function cart(){
    window.location = "cart.php";
}

