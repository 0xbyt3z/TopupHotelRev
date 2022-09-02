const forgotpass = () => {
  alert("forgot password");
}


const handleCreditCard = () => {
  let element = event.target
  let string = element.value.replace(/\-/g, "")
  string = string.match(/.{1,4}/g).join("-")
  event.target.value = string
}

const showAlert = (t, m, status) => {
  let bgcolor = ""
  let textcolor = ""
  switch (status) {
    case "success":
      bgcolor = "bg-green-300"
      textcolor = "text-green-900"
      break;
    case "error":
      bgcolor = "bg-red-300"
      textcolor = "text-red-900"
      break;
    default:
      break;

    }
  let parent = document.createElement("div")
  parent.className = "absolute w-screen h-auto bottom-0"

  let alertbody = document.createElement("div")
  alertbody.className = `flex flex-col p-4 text-sm ${textcolor} ${bgcolor} `

  let titlewrapper = document.createElement("div")
  titlewrapper.className = "flex mb-3"
  titlewrapper.innerHTML = '<svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>'

  let title = document.createElement("span")
  title.className = "font-medium"
  title.innerHTML = t
  titlewrapper.appendChild(title)
  alertbody.appendChild(titlewrapper)

  let msg = document.createElement('p')
  msg.className = "font-extralight"
  msg.innerHTML = m
  alertbody.append(msg)

  parent.appendChild(alertbody)
  document.body.appendChild(parent)
  setTimeout(() => {
    document.body.removeChild(parent)
  }, 3000);
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

    node.addEventListener('animationend', handleAnimationEnd, { once: true });
  });