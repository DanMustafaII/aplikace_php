<form action="<?php echo htmlspecialchars($action); ?>" method="<?php echo htmlspecialchars($method); ?>">
    <label for="name">Jméno:</label>
    <input type="text" id="name" name="name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
    <br>
    <br>
    <button type="submit">Odeslat</button>
</form>
