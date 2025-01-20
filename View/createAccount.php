<?php if (isset($info)) : ?>
    <div class="alert alert-info" style="padding: 15px; background-color: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; border-radius: 5px; text-align: center; margin-bottom: 20px;">
        <?php echo htmlspecialchars($info); ?>
    </div>
<?php endif; ?>

<!-- Formulaire création de compte -->
<form method="POST" action="index.php?ctrl=user&action=doCreate" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 400px; margin: auto; display: flex; flex-direction: column; gap: 15px;">
    <h1 style="text-align: center; font-size: 24px; color: #333; margin-bottom: 20px;">Création de compte</h1>

    <input type="text" name="lastName" placeholder="Nom" required 
        style="padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; width: 100%; outline: none; transition: border-color 0.3s ease;"
        onfocus="this.style.borderColor='#4A90E2'" onblur="this.style.borderColor='#ddd'">

    <input type="text" name="firstName" placeholder="Prénom" required 
        style="padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; width: 100%; outline: none; transition: border-color 0.3s ease;"
        onfocus="this.style.borderColor='#4A90E2'" onblur="this.style.borderColor='#ddd'">

    <input type="email" name="email" placeholder="Email" required 
        style="padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; width: 100%; outline: none; transition: border-color 0.3s ease;"
        onfocus="this.style.borderColor='#4A90E2'" onblur="this.style.borderColor='#ddd'">

    <input type="password" name="password" placeholder="Mot de passe" required 
        style="padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; width: 100%; outline: none; transition: border-color 0.3s ease;"
        onfocus="this.style.borderColor='#4A90E2'" onblur="this.style.borderColor='#ddd'">

    <button type="submit" style="background-color: #4A90E2; color: #fff; border: none; padding: 12px; border-radius: 5px; font-size: 18px; cursor: pointer; transition: background-color 0.3s ease;">
        Créer un compte
    </button>
</form>
