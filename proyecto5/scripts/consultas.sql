/* Selects */
SELECT * FROM mydb.users;

SELECT * FROM users WHERE idusers=1;

SELECT * FROM users WHERE name="Sebastian";

SELECT * FROM users WHERE name LIKE "%n";

SELECT * FROM users WHERE genders_idgenders=1;

SELECT * FROM users WHERE genders_idgenders=1 
ORDER BY name DESC;

SELECT * FROM users WHERE genders_idgenders=1 
ORDER BY name ASC;

SELECT * FROM users WHERE genders_idgenders=1 
ORDER BY name ASC, email DESC;

SELECT * FROM users LIMIT 0,100;

SELECT DISTINCT name, cities_idcities, genders_idgenders 
FROM users;

/* Inserts */

INSERT INTO pets (pet) VALUES ('tigre');

SELECT * FROM pets;

INSERT INTO users (name, email, password, photo, 
				phone,cities_idcities, genders_idgenders)
VALUES ('Elizabeth', 'elizabeth@gmail.com', '1234567', 'P5',
				 '', 1,1);

INSERT INTO users SET name='Canelo',
					  password='123canelo',
					  email='canelo@gmail.com',
					  genders_idgenders=1,
					cities_idcities=1;

UPDATE users SET password='12345678',
				 email='canelin@gmail.com'
WHERE idusers=6;

DELETE FROM users WHERE idusers IN (6);

DELETE FROM users WHERE idusers>4;

SELECT name, email, city, gender 
FROM users, genders, cities
WHERE 
users.cities_idcities=cities.idcities AND
genders_idgenders=idgenders;

SELECT name, email, city, gender AS sexo
FROM users AS u, genders, cities
WHERE 
u.cities_idcities=cities.idcities AND
genders_idgenders=idgenders;


SELECT name, email, gender, city,idstate
FROM users
	INNER JOIN genders ON idgenders = genders_idgenders
	INNER JOIN cities ON idcities = cities_idcities;

SELECT name, email, gender, city,idstate
FROM users
	INNER JOIN genders ON idgenders = genders_idgenders
	INNER JOIN cities ON idcities = cities_idcities
	INNER JOIN states ON idstates = idstate;


SELECT name, email, gender, city,idstate
FROM users
	INNER JOIN genders ON idgenders = genders_idgenders
	INNER JOIN cities ON idcities = cities_idcities
	RIGHT JOIN states ON idstates = idstate;

SELECT name, email, gender, city,idstate
FROM users
	INNER JOIN genders ON idgenders = genders_idgenders
	INNER JOIN cities ON idcities = cities_idcities
	LEFT JOIN states ON idstates = idstate;


describe SELECT name, email, gender, city,idstate
FROM users
	INNER JOIN genders ON idgenders = genders_idgenders
	INNER JOIN cities ON idcities = cities_idcities;


describe SELECT name, email, city, gender AS sexo
FROM users AS u, genders, cities
WHERE 
u.cities_idcities=cities.idcities AND
genders_idgenders=idgenders;


describe SELECT DISTINCT name, cities_idcities, genders_idgenders 
FROM users;

analyze table users;
