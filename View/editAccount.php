<?php if (isset($user)): ?>
    <form method="POST" action="index.php?ctrl=user&action=doEdit" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 400px; margin: auto; display: flex; flex-direction: column; gap: 15px;">
        <h1 style="text-align: center; font-size: 24px; color: #333; margin-bottom: 20px;">Modifier l'utilisateur</h1>

        <input type="hidden" name="id" value="<?= $user->getId() ?>" />

        <label for="firstName" style="font-weight: 600; color: #333;">Prénom</label>
        <input type="text" name="firstName" value="<?= htmlspecialchars($user->getFirstName()) ?>" 
            style="padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; width: 100%; outline: none; transition: border-color 0.3s ease;"
            onfocus="this.style.borderColor='#4A90E2'" onblur="this.style.borderColor='#ddd'" required />

        <label for="lastName" style="font-weight: 600; color: #333;">Nom</label>
        <input type="text" name="lastName" value="<?= htmlspecialchars($user->getLastName()) ?>" 
            style="padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; width: 100%; outline: none; transition: border-color 0.3s ease;"
            onfocus="this.style.borderColor='#4A90E2'" onblur="this.style.borderColor='#ddd'" required />

        <label for="email" style="font-weight: 600; color: #333;">Email</label>
        <input type="email" name="email" value="<?= htmlspecialchars($user->getEmail()) ?>" 
            style="padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; width: 100%; outline: none; transition: border-color 0.3s ease;"
            onfocus="this.style.borderColor='#4A90E2'" onblur="this.style.borderColor='#ddd'" required />

        <label for="password" style="font-weight: 600; color: #333;">Mot de passe (laisser vide pour ne pas modifier)</label>
        <input type="password" name="password" 
            style="padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; width: 100%; outline: none; transition: border-color 0.3s ease;"
            onfocus="this.style.borderColor='#4A90E2'" onblur="this.style.borderColor='#ddd'" />

        <button type="submit" style="background-color: #4A90E2; color: white; border: none; padding: 12px; border-radius: 5px; font-size: 18px; cursor: pointer; transition: background 0.3s ease;">
            Enregistrer
        </button>
    </form>
<?php else: ?>
    <p style="text-align: center; color: #ff0000; font-size: 18px;">Utilisateur introuvable.</p>
<?php endif; ?>
