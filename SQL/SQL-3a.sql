-- SELECTING ALL DATA FROM EMPLOYEES TABLE AND ALIASED  A
SELECT * FROM employees as a
-- JOIN SALARY TABLE  ALIASED AS B WITH THEIR SAME ID
JOIN salary as b ON b.id = a.salary_id
-- ALSO JOIN THE CALCULATED MAX SALARY FROM SALARY TABLE
 AND salary IN (SELECT MAX(salary) from salary);