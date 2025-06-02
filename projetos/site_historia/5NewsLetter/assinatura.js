function assinar(){
    emailc = document.getElementById("email");
    email = document.getElementById("email").value;
    aviso = document.getElementById("aviso");
    
    if(email === ""){
        aviso.style.color = "red";
        aviso.textContent = "Preencha o campo acima com seu email!";
        emailc.focus()
    }else{
        aviso.textContent = "Seu email foi cadastrado com sucesso!";
        aviso.style.color = "green";
    }
}