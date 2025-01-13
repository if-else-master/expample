<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>README</title>
</head>
<body>
    <h1>登入登出系統與主要 SQL 指令教學</h1>

    <p>此專案包含一個簡單的登入登出系統，並輔以主要的 SQL 指令教學，功能涵蓋：</p>
    <ul>
        <li>登入 (Login)</li>
        <li>登出 (Logout)</li>
        <li>留言 (Post Message)</li>
        <li>修改留言 (Edit Message)</li>
        <li>刪除留言 (Delete Message)</li>
    </ul>

    <h2>專案結構</h2>
    <pre>
    ├── src
    │   ├── index.html         <!-- 前端介面 -->
    │   ├── styles.css         <!-- 樣式檔 -->
    │   ├── app.js             <!-- 前端邏輯 -->
    │   └── api
    │       ├── login.php      <!-- 登入功能 -->
    │       ├── logout.php     <!-- 登出功能 -->
    │       ├── post.php       <!-- 留言功能 -->
    │       ├── edit.php       <!-- 修改功能 -->
    │       └── delete.php     <!-- 刪除功能 -->
    ├── db
    │   └── schema.sql         <!-- 資料庫結構 -->
    └── README.md              <!-- 本文件 -->
    </pre>

    <h2>環境需求</h2>
    <ul>
        <li>PHP 7.4 以上</li>
        <li>MySQL 5.7 以上</li>
        <li>Web 伺服器 (如 Apache 或 Nginx)</li>
    </ul>

    <h2>安裝與設定</h2>
    <ol>
        <li>將專案 Clone 至本地：
            <pre><code>git clone https://github.com/你的帳號/你的專案.git</code></pre>
        </li>
        <li>建立資料庫並匯入 <code>db/schema.sql</code>：
            <pre><code>mysql -u [使用者名稱] -p [資料庫名稱] < db/schema.sql</code></pre>
        </li>
        <li>設定 API 中的資料庫連線資訊（如 <code>api/config.php</code>）。</li>
        <li>啟動伺服器，打開 <code>index.html</code> 測試系統。</li>
    </ol>

    <h2>主要 SQL 指令教學</h2>

    <h3>1. 登入</h3>
    <pre><code>SELECT * FROM users WHERE username = ? AND password = ?;</code></pre>

    <h3>2. 登出</h3>
    <p>登出功能通常涉及刪除 Session 或 Token。</p>

    <h3>3. 留言</h3>
    <pre><code>INSERT INTO messages (user_id, content, created_at) VALUES (?, ?, NOW());</code></pre>

    <h3>4. 修改留言</h3>
    <pre><code>UPDATE messages SET content = ? WHERE id = ? AND user_id = ?;</code></pre>

    <h3>5. 刪除留言</h3>
    <pre><code>DELETE FROM messages WHERE id = ? AND user_id = ?;</code></pre>

    <h2>版權</h2>
    <p>此專案採用 MIT 授權，詳見 LICENSE 檔案。</p>

    <h2>貢獻</h2>
    <p>歡迎提出 Pull Request 或 Issue，協助改進此專案。</p>

    <p>如有任何問題，請聯絡：<a href="mailto:你的Email@example.com">你的Email@example.com</a></p>
</body>
</html>
