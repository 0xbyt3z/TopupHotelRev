const forgotpass = () =>{
    alert("forgot password");
}


const handleCreditCard = () =>{
    let element = event.target
    let string  =  element.value.replace(/\-/g,"")
    string = string.match(/.{1,4}/g).join("-")
    event.target.value  = string
}


const handleSubmit =()=>{
    alert()
}