function togglePassword(){

    let pass = document.getElementById("password");

    if(!pass){
        console.log("password bulunamadı");
        return;
    }

    if(pass.type === "password"){
        pass.type = "text";
    } else {
        pass.type = "password";
    }
}