export function afficher_les_informationes(etudient) {
    document.querySelector(".nom_prenom").textContent = etudient.nomEtudiant + ' ' + etudient.prenomEtudiant
    document.querySelector(".nom").textContent = etudient.nomEtudiant;
    document.querySelectorAll(".prenom").forEach(el => {
        el.textContent = etudient.prenomEtudiant
    });
    document.querySelector(".filiere").textContent = etudient.filiere;
    document.querySelector(".niveau").textContent = etudient.niveau;
    let img = etudient.img;
    document.querySelectorAll("img").forEach(el => {
        if (el.getAttribute('src') == "images/avatar.png") 
            el.setAttribute('src',`imagesOfUsers/${img}`)
    })
}
export function afficher_mes_clubes(clubes) {
    clubes.forEach((club) => {
        let clubDiv = document.createElement('div');
        clubDiv.classList.add('club');

        let header = document.createElement('header');
        let img = document.createElement('img');
        img.setAttribute('src',`uploads/${club.logo}`)
        header.prepend(img)
        clubDiv.prepend(header);

        let div = document.createElement("div");
        let h3 = document.createElement("h3");
        h3.textContent = club.nomClub;
        let p = document.createElement('p');
        p.textContent = club.Slogan;
        div.prepend(h3);
        div.append(p);
        let divEvent = document.querySelector(".event").cloneNode(true);
        divEvent.classList.remove('d-none');
        div.append(divEvent);
        clubDiv.append(div);
        document.querySelector('.lesClubes').append(clubDiv);
    })
}
//
document.querySelectorAll('aside ul li').forEach((el) => {
    el.onclick = function() {
        document.querySelector(".active").classList.remove('active')
        document.getElementById(el.textContent.trim().toLocaleLowerCase()).classList.add('active','show');
    }
})
// 