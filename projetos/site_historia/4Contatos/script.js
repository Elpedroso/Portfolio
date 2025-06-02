function enviar(){
    email = document.getElementById("email").value;
    msg = document.getElementById("msg").value;
    resp = document.getElementById("resposta");
    resp.style.color = "#0abf43";
    resp.style.margin = "10px";
    resp.style.fontSize = "25px"

    emailC = document.getElementById("email");
    msgC = document.getElementById("msg");

    if (email === ""){
        emailV = false;
    }else{
        emailV = true;
    }

    if (msg === ""){
        msgV = false;
    }else{
        msgV = true;
    }

    if (emailV && msgV === true){
        resp.textContent = "Mensagem Enviada!"
        email.textContent = ""
        msg.textContent = ""
    }else if (emailV === true){
        resp.textContent = "Digite alguma mensagem!";
        resp.style.color = "red";
        msgC.focus();
    }else if (msgV === true){
        resp.textContent = "Digite seu email!";
        resp.style.color = "red";
        emailC.focus();
    }else{
        resp.textContent = "Preencha todos os campos!";
        resp.style.color = "red";
    }
}

