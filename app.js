const forgotpass = () =>{
    alert("forgot password");
}


const handleCreditCard = () =>{
    let element = event.target
    let string  =  element.value.replace(/\-/g,"")
    string = string.match(/.{1,4}/g).join("-")
    event.target.value  = string
}















//for animations

const animateCSS = (element, animation, prefix = 'animate__') =>
  // We create a Promise and return it
  new Promise((resolve, reject) => {
    const animationName = `${prefix}${animation}`;
    //const node = document.querySelector(element);
    const node = element;

    node.classList.add(`${prefix}animated`, animationName);

    // When the animation ends, we clean the classes and resolve the Promise
    function handleAnimationEnd(event) {
      event.stopPropagation();
      node.classList.remove(`${prefix}animated`, animationName);
      resolve('Animation ended');
    }

    node.addEventListener('animationend', handleAnimationEnd, {once: true});
  });