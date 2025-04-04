<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Devis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header class="bg-dark text-white py-4"> <!-- Hauteur augmentée -->
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                
                <!-- Logo (plus à gauche) -->
                <div class="d-flex align-items-center logo-container">
                    <img src="logo2.png" alt="Logo" width="40" height="40" class="me-2">
                    <h2 class="m-0 fw-light">Sportify</h2> <!-- fw-light pour une écriture fine -->
                </div>

                <!-- Connexion (texte simple, plus haut) -->
                <div class="login">
                    <a href="login.html" class="nav-link">Connexion | Inscription</a>
                </div>
            </div>

            <!-- Liens de navigation (centrés et plus bas) -->
            <nav class="mt-3">
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="cours.php">Nos Cours</a></li>
                    <li class="nav-item"><a class="nav-link" href="devis.php">Demande de Devis</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        
    <h1 class="text-center text-white mt-4">Demande de Devis</h1>
    <p class="text-center text-light">Remplissez le formulaire ci-dessous pour obtenir un devis personnalisé.</p>

        <div class="row justify-content-center">
            <div class="col-md-6 form-container">
                <h3 class="text-center">Informations Client</h3>
                <form action="send_devis.php" method="POST">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" required>
                
                    <label for="fname">Prénom :</label>
                    <input type="text" id="fname" name="fname" required>
                
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                
                    <label for="phone">Téléphone :</label>
                    <input type="tel" id="phone" name="phone" required>
                
                    <label for="service">Type de service :</label>
                    <select id="service" name="service" required>
                        <option value="">Sélectionnez un service</option>
                        <option value="individuel">Cours individuels</option>
                        <option value="collectif">Cours collectifs</option>
                        <option value="programme">Programme personnalisé</option>
                    </select>
                
                    <div id="programme-details" style="display: none;">
                        <label for="programme-type">Type de programme personnalisé :</label>
                        <select id="programme-type" name="programme-type">
                            <option value="">Sélectionnez un programme</option>
                            <option value="reeducation">Rééducation</option>
                            <option value="entrainement">Entraînement intensif</option>
                            <option value="suivi">Suivi personnalisé</option>
                        </select>
                    </div>
                
                    <label for="handicap">Êtes-vous handicapé ?</label>
                    <select id="handicap" name="handicap" required>
                        <option value="">Sélectionnez</option>
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>
                    </select>
                
                    <label for="course-type">Type de cours :</label>
                    <select id="course-type" name="course-type" required>
                        <option value="">Sélectionnez un type de cours</option>
                        <option value="yoga">Yoga</option>
                        <option value="fitness">Fitness</option>
                        <option value="musculation">Musculation</option>
                    </select>
                
                    <label for="session-count">Nombre de sessions :</label>
                    <input type="number" id="session-count" name="session-count" required min="1">
                
                    <!-- Estimation du prix (cachée pour l'utilisateur) -->
                    <input type="hidden" id="price" name="price">
                
                    <button type="submit" class="buttons">Envoyer la demande</button>
                </form>
            </div>
        </div>
    </main>

    
    <footer>
        <div class="container text-center">
            <p><i class="fas fa-map-marker-alt"></i> 185 avenue Albert Thomas, 87000 Limoges</p>
            <p>
                <a href="mailto:contact@sportify.com" class="text-white text-decoration-none">
                    <i class="fas fa-envelope"></i> contact@sportify.com
                </a>
            </p>
            <p><i class="fas fa-phone"></i> +33 6 12 34 56 78</p>

            <div class="mb-2">
                <a href="https://facebook.com" class="me-2 text-white">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a href="https://instagram.com" class="text-white">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
            </div>

            <p class="m-0 small">&copy; 2025 Sportify. Tous droits réservés.</p>
        </div>
    </footer>
    
    <script>
        // Attendre que le DOM soit complètement chargé
        document.addEventListener('DOMContentLoaded', function () {
            // Sélection des éléments nécessaires
            const serviceSelect = document.getElementById('service');
            const programmeDetails = document.getElementById('programme-details');
    
            // Fonction qui met à jour l'affichage du champ programme-details
            function updateForm() {
                const service = serviceSelect.value;
    
                // Afficher ou masquer le champ selon le service sélectionné
                if (service === 'programme') {
                    programmeDetails.style.display = 'block'; // Afficher le sous-type de programme
                } else {
                    programmeDetails.style.display = 'none'; // Masquer si un autre service est choisi
                }
    
                updatePrice(); // Recalculer l'estimation du prix
            }
    
            // Fonction qui calcule l'estimation du prix
            function updatePrice() {
                const courseType = document.getElementById('course-type').value;
                const sessionCount = parseInt(document.getElementById('session-count').value) || 1;
                const programmeType = document.getElementById('programme-type').value;
                let price = 0;
    
                // Calcul du prix en fonction du service choisi
                const service = serviceSelect.value;
                if (service === 'individuel') {
                    price += 50;
                } else if (service === 'collectif') {
                    price += 20;
                } else if (service === 'programme') {
                    price += 100;
                    // Ajuster le prix selon le type de programme choisi
                    if (programmeType === 'reeducation') {
                        price += 150;
                    } else if (programmeType === 'entrainement') {
                        price += 200;
                    } else if (programmeType === 'suivi') {
                        price += 250;
                    }
                }
    
                // Calculer le prix par session
                if (courseType === 'yoga') {
                    price += 10 * sessionCount;
                } else if (courseType === 'fitness') {
                    price += 15 * sessionCount;
                } else if (courseType === 'musculation') {
                    price += 20 * sessionCount;
                }
    
                // Envoi du prix au champ caché
                document.getElementById('price').value = price;
            }
    
            // Attacher l'événement de changement pour le service sélectionné
            serviceSelect.addEventListener('change', updateForm);
    
            // Initialiser le formulaire au cas où l'utilisateur avait déjà choisi un service
            updateForm();
        });
    </script>
    

</body>
</html>
