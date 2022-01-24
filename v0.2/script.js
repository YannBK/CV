
//observer de la "barre de navigation"
let navObserver = new IntersectionObserver((scrolls) => {
  let nav = document.querySelector("nav");
  let liens = document.querySelectorAll("nav ul li a");
  let bordures = document.querySelectorAll("nav ul li span");

  scrolls.forEach((scroll) => {
    if (scroll.isIntersecting) {
      nav.classList.remove('fondnoir');
      nav.classList.remove('textblanc');
      liens.forEach(lien => {
        lien.classList.remove('textblanc');
      });
      bordures.forEach(bordure => {
        bordure.classList.remove('bordure');
      });
    } else {
      nav.classList.add('fondnoir');
      nav.classList.add('textblanc');
      liens.forEach(lien => {
        lien.classList.add('textblanc');
      });
      bordures.forEach(bordure => {
        bordure.classList.add('bordure');
      });
    }
  });
}, { threshold: 1 });

navObserver.observe(document.querySelector("#titre"));

//observer des sections
let sections = document.querySelectorAll(".box-div");

if (document.body.clientWidth > 850) {
  sections.forEach((section) => {
    let navcard1Observer = new IntersectionObserver((scrolls) => {
      scrolls.forEach((scroll) => {
        if (scroll.isIntersecting) {

          if (section.getAttribute("id") == "competence") {
            let iconeOne = document.querySelector("#competence article ul:nth-child(1)");
            iconeOne.style.animation = "slideRight 0.8s linear forwards";
            let iconeTwo = document.querySelector("#competence article ul:nth-child(2)");
            iconeTwo.style.animation = "slideLeft 0.8s linear forwards";

            let all = document.querySelector("#competence article");
            all.style.animation = "comeon 0.8s linear forwards";
          }

          if (section.getAttribute("id") == "parcoursA") {

            let sites = document.querySelectorAll(".sites div");
            sites.forEach(site => {
              site.style.animation = "slideRight 0.8s linear forwards";
            })

            let alls = document.querySelectorAll('.sites');
            alls.forEach(all => {
              all.style.animation = "comeon 0.8s linear forwards";
            });
          }

          if (section.getAttribute("id") == "realisation") {

            let elts = document.querySelectorAll("#realisation article div a img");
            elts.forEach(el => {
              el.style.animation = "appear 0.8s linear forwards";
            });
          }
        }
      });
    }, { threshold: 0.4 });

    navcard1Observer.observe(section);
  });
}
else {
  let elts = document.querySelectorAll("#realisation article div a img");
  elts.forEach(el => {
    el.style.transform = "scale(1)";
  })
  let all = document.querySelector("#competence article");
  all.style.opacity = "1";
}
