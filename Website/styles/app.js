const people = [
    {
        id: `person-one`,
        name: `Person One`,
        job: `Web Developer`,
        description: `Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ex culpa quae dolorum ut, eos consectetur sequi nam velit esse voluptatibus ipsum consequuntur unde doloribus, magnam illo laborum sunt! Accusamus.`,
        img: `img/person-one.jpg`
    }, {
        id: `person-two`,
        name: `Person Two`,
        job: `Software Engineer`,
        description: `Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolorem totam architecto iusto nulla, ipsum sed quibusdam beatae exercitationem consectetur praesentium veritatis a, quasi, inventore libero distinctio rem odio! Ullam.`,
        img: `img/person-two.jpg`
    }, {
        id: `person-three`,
        name: `Person Three`,
        job: `Game Developer`,
        description: `Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquid corrupti nobis et, similique magni dolorum amet suscipit aut ipsa voluptate deserunt sint praesentium voluptates excepturi quia mollitia vel! Libero.`,
        img: `img/person-three.jpg`
    }
];
const testimonialsContainer = document.querySelector('.testimonials');
const bottomImgs = document.querySelectorAll('.wrapper-img');

window.addEventListener('DOMContentLoaded', () => {
    testimonialsContainer.innerHTML = `<img src="${people[0].img}" class="person-img">
                                        <h2 class="person-name">${people[0].name}</h2>
                                        <h3 class="person-job">${people[0].job}</h3>
                                        <p class="person-text">${people[0].description}</p>`;
})

bottomImgs.forEach(e => {
    e.addEventListener('click', () => {
        const identifier = e.dataset.identify;
        let personInfo = people.map(ev => {
            if (ev.id === identifier) {
                return `<img src="${ev.img}" class="person-img">
                <h2 class="person-name">${ev.name}</h2>
                <h3 class="person-job">${ev.job}</h3>
                <p class="person-text">${ev.description}</p>`
            }
        }).join('');
        testimonialsContainer.innerHTML = personInfo;
    })
})
