DROP TABLE IF EXISTS posts;
DROP TABLE IF EXISTS users;
CREATE TABLE users(
    username VARCHAR(100) PRIMARY KEY,
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    last_login DATETIME
);
CREATE TABLE posts(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title BLOB,
    description BLOB,
    date_time DATE,
    id_user VARCHAR(100),

    FOREIGN KEY (id_user) REFERENCES users(username)
);
INSERT INTO users VALUES ('Bruno','brunofrs7@gmail.com',md5('jBrlARt$QOo1'),NOW());
INSERT INTO posts VALUES (1,'Lançamento do novo site','Desde o ano de 2019 que decidi colocar o meu site online, um pouco como hobbie e para fazer algumas experiências. Iniciei o desenvolvimento em WordPress procurando apresentar as informações mais relevantes sobre mim e projetos que fui desenvolvendo ao longo do tempo. O WordPress é uma ferramenta muito interessante para desenvolvimento de sites poupando tempo e necessidade de conhecimentos técnicos na área de programação, mas senti falta de mais... a performance, ou falta dela, foi o principal fator que me fez criar este novo site, agora muito mais rápido e leve e igualmente responsivo.',NOW(),'Bruno');