<!-- Code CSS amélioré -->
<style>
    /* Général */
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f4f4f4;
    }

    h1, h2 {
        text-align: center;
        color: #333;
    }

    p {
        margin: 5px;
        font-size: 16px;
        color: #333;
    }

    /* Tableaux */
    table {
        width: 100%;
        max-width: 900px;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #007BFF;
        color: white;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    /* Bouton */
    button {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #218838;
    }

    /* Sélection */
    select {
        padding: 5px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    /* Formulaires */
    form {
        margin: 20px auto;
        text-align: center;
    }

    form div {
        margin-bottom: 15px;
    }

    label {
        font-weight: bold;
        margin-right: 10px;
    }

    /* Section principale */
    #main-section {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Statistiques */
    .statistics {
        margin-top: 30px;
        text-align: center;
    }

    /* Couleurs des cases */
    .color-red {
        background-color: #dc3545;
        color: white;
    }

    .color-green {
        background-color: #28a745;
        color: white;
    }

    .color-yellow {
        background-color: #ffc107;
        color: black;
    }

    .color-blue {
        background-color: #007BFF;
        color: white;
    }

    .color-orange {
        background-color: #fd7e14;
        color: white;
    }
</style>

<h1>Planning des corvées d'épluchage</h1>

<!-- Formulaire pour le changement d'annee -->
<form method="GET" action="index.php">
    <input type="hidden" name="ctrl" value="planning">
    <input type="hidden" name="action" value="voirPlanning">
    <div style="margin-bottom: 1rem;">
        <label for="year">Année :</label>
        <select name="year" id="year" onchange="this.form.submit()">
            <?php for ($i = 2014; $i <= 2030; $i++): ?>
                <option value="<?= $i ?>" <?= ($i == $anneeSelectionne) ? 'selected' : '' ?>><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
</form>

<!-- Formulaire pour assigner des utilisateurs -->
<form method="POST" action="index.php?ctrl=planning&action=assignerUtilisateur">
    <input type="hidden" name="year" value="<?= $anneeSelectionne ?>">

    <table>
        <thead></thead>
        <tbody>
            <tr>
                <!-- Boucle 52 weeks -->
                <?php for ($week = 1; $week <= 52; $week++): ?>
                    <?php if (($week - 1) % 4 === 0 && $week > 1): ?>
            </tr>
            <tr>
            <?php endif; ?>
            <td>
                <div style="display: flex; align-items: center; justify-content: center; padding: 0 1rem;">
                    <p><?= $weeksDates[$week] ?></p>
                    <!-- Systeme de selection -->
                    <select name="assignements[<?= $week ?>]" class="color-<?= isset($planning[$week]['color']) ? $planning[$week]['color'] : 'white' ?>">
                        <option value="">personne</option>
                        <?php foreach ($users as $user): ?>
                            <option value="<?= (string)$user['_id'] ?>" <?= (isset($planning[$week]['userId']) && (string)$planning[$week]['userId'] === (string)$user['_id']) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($user['firstName']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </td>
        <?php endfor; ?>
            </tr>
        </tbody>
    </table>

    <button type="submit">Valider le planning</button>
</form>

<div class="statistics">
    <h2>Statistiques des utilisateurs</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Nombre de semaines</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ajout des statistiques -->
            <?php foreach ($statistiques as $stat): ?>
                <tr>
                    <td><?= htmlspecialchars($stat['lastName']) ?></td>
                    <td><?= htmlspecialchars($stat['firstName']) ?></td>
                    <td><?= $stat['weeksCount'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
