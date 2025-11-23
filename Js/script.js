
        // je sélectionne tous les liens du sidebar
        const links = document.querySelectorAll('.sidebar a');

        // pour chaque lien je vais écouter le clic
        links.forEach(link => {
            link.addEventListener('click', function() {
                // au clic je retire la classe active de tous les liens
                links.forEach(l => l.classList.remove('active'));

                // puis j'ajoute la classe active seulement au lien cliqué
                this.classList.add('active');
            });
        });
        
            function showSection(sectionId) {
            // on cache toutes les sections enfants de main
            document.querySelectorAll('.main > div').forEach(div => div.style.display = 'none');
            
            // on affiche la section demandée
            document.getElementById(sectionId).style.display = 'block';
            }




            // Afficher/masquer les champs étudiants
document.getElementById('type_utilisateur').addEventListener('change', function () {
    const type = this.value;
    const etuFields = document.getElementById('etudiantFields');

    if (type === 'Etudiant') {
        etuFields.style.display = 'block';
    } else {
        etuFields.style.display = 'none';
    }
});

// Charger les options selon le cycle
document.getElementById('cycle').addEventListener('change', function () {
    const cycle = this.value;

    const niveau = document.getElementById('niveau');
    const filiere = document.getElementById('filiere');

    const niveauContainer = document.getElementById('niveauContainer');
    const filiereContainer = document.getElementById('filiereContainer');

    // Reset des champs
    niveau.innerHTML = "";
    filiere.innerHTML = "";
    niveauContainer.style.display = "none";
    filiereContainer.style.display = "none";

    if (cycle === "prepa") {
        niveauContainer.style.display = "block";
        filiereContainer.style.display = "block";

        niveau.innerHTML = `
            <option value="" disabled selected>Choisissez le niveau</option>
            <option value="Prépa 1">Prépa 1</option>
            <option value="Prépa 2">Prépa 2</option>
        `;

        filiere.innerHTML = `
            <option value="" disabled selected>Choisissez la filière</option>
            <option value="Économie">Économie</option>
            <option value="Management">Management</option>
            <option value="Génie Civil">Génie Civil</option>
            <option value="Informatique">Informatique</option>
        `;
    }

    if (cycle === "lmd") {
        niveauContainer.style.display = "block";
        filiereContainer.style.display = "block";

        niveau.innerHTML = `
            <option value="" disabled selected>Choisissez le niveau</option>
            <option value="L1">L1</option>
            <option value="L2">L2</option>
            <option value="L3">L3</option>
        `;

        filiere.innerHTML = `
            <option value="" disabled selected>Choisissez la filière</option>
            <option value="Génie Civil">Génie Civil</option>
            <option value="Informatique">Informatique</option>
        `;
    }
});
