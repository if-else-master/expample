<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言板</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>留言板</h2>
        <form method="POST" action="messages.php">
            <label for="message">留言:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">留言</button>
        </form>
        <h3>所有留言</h3>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="message">
                <p><strong>留言ID:</strong> <?php echo $row['id']; ?></p>
                <p><strong>使用者:</strong> <?php echo $row['username']; ?></p>
                <p><strong>留言內容:</strong> <?php echo $row['message']; ?></p>
                <p><strong>留言時間:</strong> <?php echo $row['created_at']; ?></p>
                <?php if ($row['username'] == $_SESSION['username']): ?>
                    <div class="edit-delete">
                        <a href="edit_message.php?id=<?php echo $row['id']; ?>">修改</a>
                        <form method="POST" action="messages.php" style="display:inline;">
                            <input type="hidden" name="message_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete">刪除</button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        <a href="login.php">登出</a>
    </div>
</body>
</html>
