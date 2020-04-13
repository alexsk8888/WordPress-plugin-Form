
const forma = {

    oneLic      : document.querySelector(".oneLicense"),
    twoLic      : document.querySelector(".twoLicense"),
    sendMas     : document.querySelector(".sendMas"),
    duration    : document.querySelector(".duration"),
    valDuration : document.querySelector(".valDuration"),
    amount      : document.querySelector(".amount"),
    valAmount   : document.querySelector(".valAmount"),
    price       : document.querySelector(".price"),
    form        : document.forms['appeal'],
    kurse       : document.querySelector('.kurse')
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

//===================================================

forma.form.addEventListener('submit', function (ev) {

    ev.preventDefault();

    let fD = new FormData(),
        url = 'AriosoFormSend.php',
        form = forma.form,
        kurse = forma.kurse.value,
        amount = forma.amount.value,
        duration = forma.duration.value;

    fD.append('kurse', kurse);
    fD.append('amount', amount);
    fD.append('duration', duration);
    fD.append('nameClient', form.nameClient.value);
    fD.append('tel', form.tel.value);
    fD.append('Email', form.Email.value);
    fD.append('message', form.message.value);

    fetch(url, {
        method: "POST",
        body: fD
    }).then(respons => respons.text())
        .then(text => {
            console.log(text);
        })
})