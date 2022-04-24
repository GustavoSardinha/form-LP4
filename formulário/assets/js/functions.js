function verify(id){
    var input = document.querySelector(id);
    input.classList.toggle("bg-danger");
}
function verifyAll(ids){
    ids.forEach(id => {
        var input = document.querySelector(id);
        if(input.checked){
            input.classList.add("bg-danger");
        }else{
            input.classList.remove("bg-danger");
        }
    });
}
function show(inputid, eyeid){
    var input = document.querySelector(inputid);
    var eye =  document.querySelector(eyeid);

    if(input.getAttribute("type") == "password"){
        input.setAttribute("type", "text");
        eye.style.background = "url(assets/img/olho.png)";
    }else{
        input.setAttribute("type", "password");
        eye.style.background = "url(assets/img/olho-aberto.png)";
    }
}
function toLower(id){
    var input = document.querySelector(id);
    input.value = input.value.toLowerCase();
}