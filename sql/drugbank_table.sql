DROP TABLE IF EXISTS drugbank;
CREATE TABLE drugbank (
	id INT NOT NULL,
	type VARCHAR(30),
	name VARCHAR(30),
	description TEXT,
	pharmacology TEXT,
	PRIMARY KEY (id)
);
