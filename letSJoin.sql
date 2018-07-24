

--  write the SQL query to display an article (id = 10) and its author using a join. 


SELECT a.*, u.firstname, u.lastname
FROM user u
JOIN articles a ON u.id = a.id_user
WHERE a.id = 10;