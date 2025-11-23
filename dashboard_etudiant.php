<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Étudiant</title>

    <!-- mon CSS du dashboard -->
    <link rel="stylesheet" href="Css/etudiant.css">

    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- ================= SIDEBAR ================= -->
    <div class="sidebar">

        <a href="#" onclick="showSection('dashboard-section')">
            <i class="fa-solid fa-gauge"></i>
            Tableau de bord
        </a>

        <a href="#" onclick="showSection('cours-section')">
             <i class="fa-solid fa-book"></i>
             Cours      
        </a>
        <a href="#" onclick="showSection('time-section')">
            <i class="fa-solid fa-calendar-days"></i>
            Emploi du temps
        </a>

        <a href="#" onclick="showSection('notes-section')">
            <i class="fa-solid fa-clipboard-list"></i>
            Notes & évaluations
        </a>

        <a href="#" onclick="showSection('profil-section')">
            <i class="fa-solid fa-user-graduate"></i>
            Profil étudiant
        </a>

        <a href="#" onclick="showSection('messages-section')">
            <i class="fa-solid fa-envelope"></i>
            Messages
        </a>

        <a href="#" onclick="showSection('parametres-section')">
            <i class="fa-solid fa-gear"></i>
            Paramètres
        </a>

        <a href="#" class="logout">
            <i class="fa-solid fa-right-from-bracket"></i>
            Déconnexion
        </a>

    </div>
    <!-- ================= FIN SIDEBAR ================= -->


    <!-- ================= MAIN CONTENT ================= -->
    <main class="main">
                        <div id="dashboard-section">

                            <!-- TOPBAR -->
                            <header class="topbar">
                                <h2>Dashboard Etudiant</h2>

                                <div class="search-box">
                                    <input type="text" placeholder="Rechercher...">
                                </div>

                                <div class="user-info">
                                    <img src="image/logo.png" alt="">
                                    <div>
                                        <b>Njoya Jacques</b><br>
                                        Etudiant
                                    </div>
                                </div>
                            </header>


                            <!-- STAT CARDS -->
                            
                                    <section class="stats">
                                        <div class="card">
                                            <div class="info">
                                                <h1>12</h1>
                                                <p>Cours inscrits</p>
                                            </div>
                                            <i class="fa-solid fa-book-open icon"></i>
                                        </div>

                                        <div class="card">
                                            <div class="info">
                                                <h1>80%</h1>
                                                <p>scolarité payée</p>
                                            </div>
                                            <i class="fa-solid fa-wallet icon"></i>
                                        </div>

                                        <div class="card">
                                            <div class="info">
                                                <h1>75%</h1>
                                                <p>Présence</p>
                                            </div>
                                            <i class="fa-solid fa-chart-line icon"></i>
                                        </div>

                                        <div class="card highlight">
                                            <div class="info">
                                                <h1>14.2</h1>
                                                <p>Moyenne générale</p>
                                            </div>
                                            <i class="fa-solid fa-star icon"></i>
                                        </div>
                                    </section>


                            <!-- SECTION 2 COLUMNS -->
                            <section class="content">

                                <!-- TABLEAU NOTES -->
                                <div class="box">
                                    <div class="box-header">
                                        <h3>Dernières Notes</h3>
                                        <a href="#"  class="btn">Voir tout</a>
                                    </div>

                                    <table>
                                        <tr>
                                            <th>Matière</th>
                                            <th>Professeur</th>
                                            <th>Note</th>
                                            <th>Statut</th>
                                        </tr>

                                        <tr>
                                            <td>Mathématiques</td>
                                            <td>M. Dupont</td>
                                            <td>15.5</td>
                                            <td>
                                                <div class="statut">
                                                    <span class="dot dot-green"></span>
                                                    <span class="statut-text">Validé</span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Physique</td>
                                            <td>Dr. Claire</td>
                                            <td>13.0</td>
                                            <td>
                                                <div class="statut">
                                                    <span class="dot dot-green"></span>
                                                    <span class="statut-text">Validé</span>
                                                </div>
                                            </td>
                                        
                                        </tr>

                                        <tr>
                                            <td>Algorithmique</td>
                                            <td>M. Lemoine</td>
                                            <td>8.5</td>
                                            <td>
                                                <div class="statut">
                                                    <span class="dot dot-orange"></span>
                                                    <span class="statut-text">insuffisant</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>


                                <!-- DROITE -->
                                <div class="box">
                                    <div class="box-header">
                                        <h3>Prochains Cours</h3>
                                        <a href="#" class="btn">Voir tout</a>
                                    </div>

                                    <table class="cours-table">
                                        <thead>
                                            <tr>
                                                <th>Matières</th>
                                                <th>Horaires</th>
                                                <th>Salle</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Maths</td>
                                                <td>10h00</td>
                                                <td>B12</td>
                                            </tr>

                                            <tr>
                                                <td>Physique</td>
                                                <td>13h00</td>
                                                <td>A21</td>
                                            </tr>

                                            <tr>
                                                <td>Informatique</td>
                                                <td>15h00</td>
                                                <td>C02</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
<!-- ======================= ÉVALUATIONS À VENIR ======================= -->
                                <div class="box">
                                    <div class="box-header">
                                        <h3>Évaluations à venir</h3>
                                        <a href="#" class="btn">Voir tout</a>
                                    </div>

                                    <table class="cours-table">
                                        <thead>
                                            <tr>
                                                <th>Matière</th>
                                                <th>Date</th>
                                                <th>Durée</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Mathématiques</td>
                                                <td>20/11/2025</td>
                                                <td>2h</td>
                                            </tr>

                                            <tr>
                                                <td>Physique</td>
                                                <td>22/11/2025</td>
                                                <td>1h30</td>
                                            </tr>

                                            <tr>
                                                <td>Algorithmique</td>
                                                <td>25/11/2025</td>
                                                <td>2h</td>
                                            </tr>

                                            <tr>
                                                <td>Programmation C++</td>
                                                <td>28/11/2025</td>
                                                <td>2h</td>
                                            </tr>

                                            <tr>
                                                <td>Mécanique des fluides</td>
                                                <td>30/11/2025</td>
                                                <td>2h</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                                            


                            </section>
                        </div>

<!-- ================= DEBUT DE LA PAGE COURS =================  -->
   <div id="cours-section" style="display:none;">
         <section class="courses-page">

                    <h2 class="title">📘 Mes Cours</h2>

                    <!-- Cards -->
                    <div class="course-grid">

                        <div class="course-card">
                            <h3>Mathématiques</h3>
                            <p>Prof : Dr. Dupont</p>
                            <span class="progress">Progression : 80%</span>
                            <button>Accéder</button>
                        </div>

                        <div class="course-card">
                            <h3>Programmation C++</h3>
                            <p>Prof : Mme Laurent</p>
                            <span class="progress">Progression : 65%</span>
                            <button>Accéder</button>
                        </div>

                        <div class="course-card">
                            <h3>Mécanique des fluides</h3>
                            <p>Prof : Dr. Njoya</p>
                            <span class="progress">Progression : 40%</span>
                            <button>Accéder</button>
                        </div>

                        <!-- Nouveaux cours ajoutés -->
                        <div class="course-card">
                            <h3>Physique</h3>
                            <p>Prof : Dr. Claire</p>
                            <span class="progress">Progression : 70%</span>
                            <button>Accéder</button>
                        </div>

                        <div class="course-card">
                            <h3>Chimie</h3>
                            <p>Prof : Dr. Martin</p>
                            <span class="progress">Progression : 55%</span>
                            <button>Accéder</button>
                        </div>

                        <div class="course-card">
                            <h3>Informatique</h3>
                            <p>Prof : Mme Dupuis</p>
                            <span class="progress">Progression : 90%</span>
                            <button>Accéder</button>
                        </div>

                        <div class="course-card">
                            <h3>Algèbre</h3>
                            <p>Prof : Dr. Bernard</p>
                            <span class="progress">Progression : 60%</span>
                            <button>Accéder</button>
                        </div>

                        <div class="course-card">
                            <h3>Histoire</h3>
                            <p>Prof : Mme Leroy</p>
                            <span class="progress">Progression : 50%</span>
                            <button>Accéder</button>
                        </div>

                        <div class="course-card">
                            <h3>Économie</h3>
                            <p>Prof : M. Fabre</p>
                            <span class="progress">Progression : 75%</span>
                            <button>Accéder</button>
                        </div>

                        <div class="course-card">
                            <h3>Langues</h3>
                            <p>Prof : Mme Petit</p>
                            <span class="progress">Progression : 85%</span>
                            <button>Accéder</button>
                        </div>
                    </div>

                    <!-- Bouton d'affichage -->
                    <button id="toggleTable" class="view-table-btn">
                        Voir le tableau détaillé 📊
                    </button>

                    <!-- Tableau caché -->
                    <div id="courseTable" class="hidden">
                        <table>
                            <thead>
                                <tr>
                                    <th>Cours</th>
                                    <th>Professeur</th>
                                    <th>Progression</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Mathématiques</td>
                                    <td>Dr. Dupont</td>
                                    <td>80%</td>
                                    <td><button class="small-btn">Ouvrir</button></td>
                                </tr>

                                <tr>
                                    <td>Programmation C++</td>
                                    <td>Mme Laurent</td>
                                    <td>65%</td>
                                    <td><button class="small-btn">Ouvrir</button></td>
                                </tr>

                                <tr>
                                    <td>Mécanique des fluides</td>
                                    <td>Dr. Njoya</td>
                                    <td>40%</td>
                                    <td><button class="small-btn">Ouvrir</button></td>
                                </tr>

                                <tr>
                                    <td>Physique</td>
                                    <td>Dr. Claire</td>
                                    <td>70%</td>
                                    <td><button class="small-btn">Ouvrir</button></td>
                                </tr>

                                <tr>
                                    <td>Chimie</td>
                                    <td>Dr. Martin</td>
                                    <td>55%</td>
                                    <td><button class="small-btn">Ouvrir</button></td>
                                </tr>

                                <tr>
                                    <td>Informatique</td>
                                    <td>Mme Dupuis</td>
                                    <td>90%</td>
                                    <td><button class="small-btn">Ouvrir</button></td>
                                </tr>

                                <tr>
                                    <td>Algèbre</td>
                                    <td>Dr. Bernard</td>
                                    <td>60%</td>
                                    <td><button class="small-btn">Ouvrir</button></td>
                                </tr>

                                <tr>
                                    <td>Histoire</td>
                                    <td>Mme Leroy</td>
                                    <td>50%</td>
                                    <td><button class="small-btn">Ouvrir</button></td>
                                </tr>

                                <tr>
                                    <td>Économie</td>
                                    <td>M. Fabre</td>
                                    <td>75%</td>
                                    <td><button class="small-btn">Ouvrir</button></td>
                                </tr>

                                <tr>
                                    <td>Langues</td>
                                    <td>Mme Petit</td>
                                    <td>85%</td>
                                    <td><button class="small-btn">Ouvrir</button></td>
                                </tr>
                            </tbody>
                        </table>
                </div>

            </section>

     </div>

     <!-- ================= DEBUT DE LA PAGE TIME =================  -->

        <div id="time-section" style="display:none;">
            <section class="timetable-section">
        
                <h2>📅 Emploi du Temps</h2>

                            <!-- TIMETABLE HAUT (08:00 - 11:00) -->
                            <div class="timetable-wrapper">
                            <!--<div class="timetable-label">Matin</div>-->
                            <div class="timetable timetable-top">
                                <div class="timetable-header"></div>
                                <div class="timetable-header">Lundi</div>
                                <div class="timetable-header">Mardi</div>
                                <div class="timetable-header">Mercredi</div>
                                <div class="timetable-header">Jeudi</div>
                                <div class="timetable-header">Vendredi</div>
                                <div class="timetable-header">Samedi</div>

                                <div class="timetable-time">08:00</div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>

                                <div class="timetable-time">09:00</div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell course math">
                                <span class="course-title">Maths</span>
                                <span class="course-room">Salle B2</span>
                                <span class="course-hour">09h–11h</span>
                                </div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>

                                <div class="timetable-time">10:00</div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell course math"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell course reseau">
                                <span class="course-title">Réseaux</span>
                                <span class="course-room">Salle C1</span>
                                <span class="course-hour">10h–12h</span>
                                </div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>

                                <div class="timetable-time">11:00</div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell course reseau"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                            </div>
                            </div>

                            <!-- BARRE PAUSE 12:00 -->
                            <div class="pause-bar">
                            <div class="pause-content">12:00 Pause Déjeuner — Reprise à 13:00</div>
                            </div>

                            <!-- TIMETABLE BAS (13:00 - 17:00) -->
                            <div class="timetable-wrapper">
                            <div class="timetable timetable-bottom">
                                <div class="timetable-time">13:00</div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>

                                <div class="timetable-time">14:00</div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>

                                <div class="timetable-time">15:00</div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>

                                <div class="timetable-time">16:00</div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>

                                <div class="timetable-time">17:00</div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                                <div class="timetable-cell"></div>
                            </div>
                            </div>

            </section>
        </div>
                        <!-- ================= FIN DE LA PAGE TIME ================= -->



    </main>
    <!-- ================= FIN MAIN CONTENT ================= -->


    <!-- ================= SCRIPT POUR LE SIDEBAR ACTIF ================= -->
    <script src="Js/script.js"></script>


</body>
</html>
