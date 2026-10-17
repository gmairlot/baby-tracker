<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Baby Tracker</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="site-header">
    <h1>Baby Tracker</h1>
    <p>Le quotidien de bébé, simplement</p>
  </header>

  <main>
    <!-- Résumé du jour -->
    <section class="card" aria-labelledby="titre-resume">
      <h2 id="titre-resume">Résumé du jour</h2>
      <ul class="summary">
        <li><strong id="count-feeding">0</strong> tétées / biberons</li>
        <li><strong id="count-diaper">0</strong> couches</li>
        <li><strong id="total-sleep">0 h 00</strong> de sommeil</li>
      </ul>
    </section>

    <!-- Formulaire d'ajout -->
    <section class="card" aria-labelledby="titre-ajout">
      <h2 id="titre-ajout">Ajouter un événement</h2>

      <form id="event-form" method="post" action="save.php">
        <fieldset class="type-choices">
          <legend>Type d'événement</legend>
          <label>
            <input type="radio" name="type" value="feeding" required>
            <span>🍼 Tétée</span>
          </label>
          <label>
            <input type="radio" name="type" value="diaper">
            <span>🧷 Couche</span>
          </label>
          <label>
            <input type="radio" name="type" value="sleep">
            <span>😴 Sommeil</span>
          </label>
        </fieldset>

        <label class="field">
          Heure de l'événement
          <input type="datetime-local" name="started_at" required>
        </label>

        <!-- Champs propres à chaque type : JavaScript les affichera selon le choix -->
        <div class="type-fields" data-type="feeding">
          <label class="field">
            Mode
            <select name="feeding_kind">
              <option value="breast_left">Sein gauche</option>
              <option value="breast_right">Sein droit</option>
              <option value="bottle">Biberon</option>
            </select>
          </label>
          <label class="field">
            Durée (minutes)
            <input type="number" name="duration_min" min="0" max="180">
          </label>
          <label class="field">
            Quantité (ml, biberon seulement)
            <input type="number" name="amount_ml" min="0" max="500">
          </label>
        </div>

        <div class="type-fields" data-type="diaper">
          <label class="field">
            Contenu
            <select name="diaper_kind">
              <option value="wet">Pipi</option>
              <option value="dirty">Selle</option>
              <option value="both">Les deux</option>
            </select>
          </label>
        </div>

        <div class="type-fields" data-type="sleep">
          <label class="field">
            Heure de réveil
            <input type="datetime-local" name="ended_at">
          </label>
        </div>

        <label class="field">
          Note (facultatif)
          <input type="text" name="notes" maxlength="200">
        </label>

        <button type="submit" class="btn-primary">Enregistrer</button>
      </form>
    </section>

    <!-- Journal -->
    <section class="card" aria-labelledby="titre-journal">
      <h2 id="titre-journal">Journal du jour</h2>
      <ol class="timeline">
        <!-- Placeholder : PHP générera ces éléments à partir des données collectées et stockées -->
        <li class="event event-feeding">
          <time>08:15</time>
          <span class="event-label">🍼 Tétée, sein gauche, 12 min</span>
        </li>
      </ol>
    </section>
  </main>

  <script src="app.js"></script>
</body>
</html>