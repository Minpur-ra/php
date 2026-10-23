CREATE TABLE generos (
    id        INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome      VARCHAR(100) NOT NULL,
    descricao VARCHAR(255) NULL,
    PRIMARY KEY (id),
    UNIQUE KEY uk_generos_nome (nome)
) ENGINE=InnoDB;