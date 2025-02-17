# 登入登出系統與主要 SQL 指令教學

本專案展示了一個基本的登入登出系統，並透過 SQL 操作實現留言功能，包含留言新增、修改、刪除等操作。適合學習基礎 SQL 指令與後端應用的初學者。

---

## 功能介紹

### 1. 登入與登出功能
- 使用者可以註冊新帳號。
- 登入後將驗證使用者身份，並產生會話或 Token。
- 登出後清除會話或 Token，確保安全性。

### 2. 留言板功能
- **新增留言**：使用者可以新增留言。
- **修改留言**：使用者可編輯自己發佈的留言。
- **刪除留言**：使用者可刪除自己發佈的留言。

---

## 系統架構
- **前端**：提供簡單的使用者界面（HTML + CSS + JS）。
- **後端**：使用 Node.js 或其他後端框架處理業務邏輯。
- **資料庫**：MySQL 或其他支持 SQL 的資料庫。

---

## 資料庫結構
### 使用者表 (`users`)
| 欄位名稱 | 資料型態 | 說明             |
| -------- | -------- | ---------------- |
| id       | INT      | 使用者唯一識別碼 |
| username | VARCHAR  | 使用者名稱       |
| password | VARCHAR  | 使用者密碼 (加密)|

### 留言表 (`messages`)
| 欄位名稱   | 資料型態 | 說明                   |
| ---------- | -------- | ---------------------- |
| id         | INT      | 留言唯一識別碼         |
| user_id    | INT      | 發布留言的使用者 ID    |
| content    | TEXT     | 留言內容               |
| created_at | DATETIME | 留言創建時間           |
| updated_at | DATETIME | 留言最後更新時間       |

---

## 主要 SQL 指令

### 1. 使用者相關指令
- **註冊使用者**  
  ```sql
  INSERT INTO users (username, password) VALUES ('user1', 'hashed_password');
