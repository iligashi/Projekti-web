let imgBox = document.getElementById("imgBox");
let qrImage = document.getElementById("qrImage");
let qrText = document.getElementById("qrText");

function generateQR() {
    if (qrText.value.length > 0) {
        qrImage.src = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" + qrText.value;
        imgBox.classList.add("show-img");
    }
    else {
        qrText.classList.add('error');
        setTimeout(() => {
            qrText.classList.remove('error')
        }, 1000);
    }

}
function validateForm() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    const login = document.getElementById("login");
    const index = document.getElementById("index_1");
    if (email === "didirexha@gmail.com" && password === "didibaba") {
        if (login) {
            login.style.display = "none";
        }
        if (index) {
            index.style.display = "block";
        }
    }
    else {
        document.getElementById("invalid-username").innerHTML = "Invalid username or password"
    }
    

}