document.addEventListener('DOMContentLoaded', () => {

    let textWrapper = document.querySelector('.animText h1');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    let textWrapperTwo = document.querySelector('.animTextTwo h2');
    textWrapperTwo.innerHTML = textWrapperTwo.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    let textWrapperThree = document.querySelector('.animTextThree h2');
    textWrapperThree.innerHTML = textWrapperThree.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    let myTimeline = anime.timeline({ loop: true })
        .add({
            targets: '.animText h1 .letter',
            opacity: [0, 1],
            easing: "easeInOutQuad",
            duration: 900,
            delay: (el, i) => 100 * (i + 1)
        })
        .add({
            targets: '.animTextTwo h2 .letter',
            opacity: [0, 1],
            easing: "easeInOutQuad",
            duration: 300,
            delay: (el, i) => 100 * (i + 1)
        })
        .add({
            targets: '.animTextThree h2 .letter',
            opacity: [0, 1],
            easing: "easeInOutQuad",
            duration: 300,
            delay: (el, i) => 100 * (i + 1)
        })
        .add({
            targets: '.animText h1',
            opacity: 1,
            duration: Infinity,
          })
})