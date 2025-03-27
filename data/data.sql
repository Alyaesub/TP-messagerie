CREATE TABLE users (
  idUser integer AUTO_INCREMENT,
  pseudo varchar(50),
  name varchar(100),
  surname varchar(100),
  email varchar(255) NOT NULL UNIQUE,
  password varchar(255) NOT NULL,
  PRIMARY KEY (idUser)
);


-- Création de l’utilisateur
CREATE USER 'user_php_messagerie'@'localhost' IDENTIFIED BY '3f7zhhRn4NH69R';
GRANT SELECT, INSERT, UPDATE, DELETE ON tp_authentification.users TO 'user_php_messagerie'@'localhost';

CREATE TABLE messages (
  idMessage INTEGER AUTO_INCREMENT,
  sender_id INTEGER NOT NULL,
  recipient_id INTEGER NOT NULL,
  content TEXT NOT NULL,
  sent_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (idMessage),
  FOREIGN KEY (sender_id) REFERENCES users(idUser),
  FOREIGN KEY (recipient_id) REFERENCES users(idUser)
);