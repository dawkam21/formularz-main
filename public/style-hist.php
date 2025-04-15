<?php
header("Content-type: text/css");
?>

/* Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

/* Tło całej strony */
body {
  background: linear-gradient(135deg, #2c3e50, #3498db);
  min-height: 100vh;
  color: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
}

/* Nagłówek */
h1, h2, h3 {
  text-align: center;
  margin-bottom: 20px;
}

/* Linki */
a {
  color: #ecf0f1;
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}

/* Sekcja kontenera */
.container {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(8px);
  border-radius: 16px;
  padding: 30px;
  width: 95%;
  max-width: 1100px;
  overflow-x: auto;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
}

/* Tabela */
.mainTable {
  width: 100%;
  border-collapse: collapse;
  color: #fff;
}

.mainTable th, .mainTable td {
  padding: 12px;
  text-align: left;
  border-bottom: 1px solid #ffffff33;
}

.mainTable tr:hover {
  background-color: #ffffff11;
}

.active-row {
  font-weight: bold;
}

.blue a {
  color: #3498db;
}

.red a {
  color: #e74c3c;
}

/* Przyciski i formularze */
form, fieldset {
  background: rgba(255, 255, 255, 0.05);
  border-radius: 12px;
  padding: 20px;
  margin: 20px auto;
  max-width: 600px;
  width: 100%;
  color: #fff;
}

input[type="submit"], input[type="text"], .bttnSbmt, .bttnCancel {
  padding: 10px 15px;
  margin: 10px 5px;
  border: none;
  border-radius: 6px;
  font-size: 1rem;
}

input[type="submit"], .bttnSbmt {
  background-color: #2ecc71;
  color: white;
  cursor: pointer;
  transition: background-color 0.3s;
}

.bttnCancel {
  background-color: #e74c3c;
  color: white;
  cursor: pointer;
  transition: background-color 0.3s;
}

.bttnCancel:hover {
  background-color: #c0392b;
}

input[type="submit"]:hover, .bttnSbmt:hover {
  background-color: #27ae60;
}

input[type="text"] {
  background-color: #ecf0f1;
  color: #2c3e50;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .mainTable th, .mainTable td {
    font-size: 0.9rem;
    padding: 8px;
  }

  form, fieldset {
    padding: 15px;
  }
}

@media (max-width: 480px) {
  .mainTable th, .mainTable td {
    font-size: 0.8rem;
  }

  input[type="submit"], input[type="text"] {
    width: 100%;
    margin: 10px 0;
  }
}

.form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 16px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 600px;
}

.mainTr {
  background-color: ;
  font-weight: bold;
  text-align: center;
  padding: 10px;
  border-radius: 8px;
  margin-bottom: 10px;
  transition: background-color 0.3s ease;
  cursor: pointer;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 0.9rem;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.mainTr:hover {
  background-color: #3498db;
  color: white;
  transform: scale(1.02);
  transition: transform 0.3s ease, background-color 0.3s ease;
}