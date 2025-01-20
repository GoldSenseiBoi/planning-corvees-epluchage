<header style="background-color: #4A90E2; padding: 20px 0; color: white; text-align: center;">
    <div id="banner-bloc">
        <h1 style="margin: 0; font-size: 28px; font-weight: bold;">Bienvenue chez POMPOMCOUPE BY IB</h1>
    </div>

    <div id="account_bar" style="margin-top: 15px;">
        <div class="connection center">
            <?php if (!isset($_SESSION['user'])): ?>
                <a href="./index.php?ctrl=user&amp;action=login" class="no-deco" title="Login or create account" style="display: flex; align-items: center; gap: 10px; text-decoration: none; color: white;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" fill="white">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                    </svg>
                    <div class="text" style="font-size: 18px;">Login</div>
                </a>
            <?php endif; ?>
            <?php if (isset($_SESSION['user'])): ?>
                <a href="index.php?ctrl=user&action=logout" class="no-deco" title="Logout" style="display: flex; align-items: center; gap: 10px; text-decoration: none; color: white;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" fill="white">
                        <path d="M10 17v-2h8v-6h-8V7l-5 5 5 5zm2-13h-2V2h2v2zm6 0h-2V2h2v2zm-6 18h-2v-2h2v2zm6 0h-2v-2h2v2z"></path>
                    </svg>
                    <div class="text" style="font-size: 18px;">Déco</div>
                </a>
            <?php endif; ?>
        </div>
    </div>
</header>
