--A table of film genres and the total of films per genre
SELECT c.name AS "Categories", COUNT(fc.film_ID) AS "Number Available"
FROM category c
JOIN film_category fc ON fc.category_ID = c.category_ID
GROUP BY c.name;
