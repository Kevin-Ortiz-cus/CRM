CREATE TABLE IF NOT EXISTS clientes(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    ciudad VARCHAR(255) NOT NULL,
    edad INT NOT NULL,
    fecha_registro VARCHAR(10) NOT NULL
);
CREATE TABLE IF NOT EXISTS ventas_clientes(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_cliente BIGINT UNSIGNED NOT NULL,
    monto DECIMAL(9,2)  NOT NULL,
    fecha VARCHAR(10) NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id) ON UPDATE CASCADE ON DELETE CASCADE
);