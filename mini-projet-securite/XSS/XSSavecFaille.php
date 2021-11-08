 <form method="post" action="faille.php">
        <label>
            <input type="text" placeholder="Username" name="Username" id="Username" required>
        </label>
        <label>
            <input type="password" placeholder="Password" name="Password" id="Password" required>
        </label>
        <button type="submit">Se connecter</button>
        <p>Veuillez rentrer "<?php echo htmlentities("<script>alert()</script>") ?>" </p>
    </form>