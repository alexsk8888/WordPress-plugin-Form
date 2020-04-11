
const forma = {

    oneLic      : document.querySelector(".oneLicense"),
    twoLic      : document.querySelector(".twoLicense"),
    sendMas     : document.querySelector(".sendMas"),
    duration    : document.querySelector(".duration"),
    valDuration : document.querySelector(".valDuration"),
    amount      : document.querySelector(".amount"),
    valAmount   : document.querySelector(".valAmount"),
    price       : document.querySelector(".price")

}

forma.amount.onchange = function() {

    forma.valAmount.innerHTML = forma.amount.value;
    forma.price.innerHTML = forma.amount.value*forma.duration.value +" ‎€";
}

forma.duration.onchange = function(){

    forma.valDuration.innerHTML = forma.duration.value+ " min";
    forma.price.innerHTML = forma.amount.value*forma.duration.value + "  ‎€";
    }

forma.oneLic.onchange = function() {

if(forma.oneLic.cheked == true){
    forma.twoLic.disabled = true;
}else{
    forma.twoLic.disabled = false;
}
}
forma.twoLic.onchange = function() {

    if(forma.twoLic.cheked == true){
        forma.sendMas.disabled = true;
    }else{
        forma.sendMas.disabled = false;
    }
    }
   