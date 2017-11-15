--A table of film genres and the total of films per genre
SELECT c.name AS "Categories", COUNT(fc.film_ID) AS "Number Available"
FROM category c
JOIN film_category fc ON fc.category_ID = c.category_ID
GROUP BY c.name;

--Testing customer name retriaval
SELECT first_name, last_name FROM customer WHERE email = "PATRICIA.JOHNSON@sakilacustomer.org"
