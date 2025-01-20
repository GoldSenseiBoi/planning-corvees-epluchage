<section style="display: flex; align-items: center; justify-content: center; height: 100vh; background-color: #f4f4f4;" id="main-section">
    <div style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); max-width: 400px; width: 100%;">
        <h2 style="text-align: center; font-size: 24px; color: #333; margin-bottom: 20px;">Connexion</h2>
        
        <!-- Formulaire de connexion -->
        <form action="index.php?ctrl=user&amp;action=doLogin" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="email" name="email" placeholder="Mail" required
                style="padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; outline: none; transition: border-color 0.3s ease;"
                onfocus="this.style.borderColor='#4A90E2'" onblur="this.style.borderColor='#ddd'">

            <input type="password" name="password" placeholder="Password" required
                style="padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; outline: none; transition: border-color 0.3s ease;"
                onfocus="this.style.borderColor='#4A90E2'" onblur="this.style.borderColor='#ddd'">

            <button type="submit" style="background-color: #4A90E2; color: white; border: none; padding: 12px; border-radius: 5px; font-size: 18px; cursor: pointer; transition: background 0.3s ease;">
                Connexion
            </button>
        </form>

        <!-- Lien de création de compte -->
        <p style="text-align: center; font-size: 14px; margin-top: 15px; color: #666;">
            Vous n'avez pas de compte ? 
            <a href="index.php?ctrl=user&amp;action=create" style="color: #4A90E2; text-decoration: none; font-weight: bold;">Créez-en un</a> !
        </p>
    </div>
</section>
