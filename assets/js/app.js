const reponses = document.querySelectorAll (".reponse")
const repButtons = document.querySelectorAll (".repButton")
const imgs = document.querySelectorAll ("img")
const boxShadow = document.querySelector (".boxShadow")

// boutton pour réponse
for (let index = 0; index < reponses.length; index++) {
    const el = reponses[index];
    const buttonEl = repButtons[index]
    buttonEl.addEventListener("click", ()=>{
        console.log("hello !");
        buttonEl.classList.add("repButtonDisplay")
        el.classList.add("reponseDisplay")
    })
}

// modal pour les images du cours (clic sur l'image)
console.log(imgs);
for (let i = 0; i < imgs.length; i++) {
    const element = imgs[i];
    element.addEventListener("click", ()=>{

        element.classList.toggle("bigImg")
        boxShadow.classList.toggle("boxShadowDisplay")
    })
}