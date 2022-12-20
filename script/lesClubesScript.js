export function showClubes(objJson) {
    for (let i = 0; i < objJson.length; i++) {
        let clube = document.querySelector(".clube").cloneNode();
        clube.classList.remove("d-none");
        let img = document.createElement("img");
        let div = document.createElement("div");
        div.classList.add("p-3")
        img.setAttribute("src",`http://localhost/gl_projet/Gestion-des-Club---ESTD/uploads/${objJson[i].logo}`);
        clube.appendChild(img);
        let h3 = document.createElement("h3");
        h3.textContent = objJson[i].nomClub;
        let p = document.createElement("p");
        p.textContent = objJson[i].description;
        div.appendChild(h3);
        div.appendChild(p);
        let footer_of_announce = document.querySelector(".footer_of_announce").cloneNode(true);
        clube.appendChild(div);
        clube.appendChild(footer_of_announce)
        document.querySelector(".lesClubes").prepend(clube)
    }
}