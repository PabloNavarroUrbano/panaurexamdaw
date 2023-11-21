CREATE TABLE IF NOT EXISTS valores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    edad INT NOT NULL,
    estilo VARCHAR(255) NOT NULL 
);

INSERT INTO valores (id, nombre, edad, estilo) VALUES
(1, 'Pablito', 19, 'Reguetton'),
(2, 'Navarrito', 20, 'Jazz');
