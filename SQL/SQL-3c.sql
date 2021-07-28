-- SELECT ALL COLUMNS FROM TABLE EMPLOYEES ALIASED AS A
SELECT * FROM employees as a
-- JOINED THE DEPARTMENTS TABLE ALIASED AS B
JOIN departments as b
-- CONNECTING THE ID OF WHAT ID THEIR RELATED AT
ON a.department_id = b.id
-- THEN CHOSING THE COLUMN DEPARTMENT  WHICH IS EQUAL TO IT
WHERE (b.department = 'IT')
-- AND FILTERED WITH THE DATE-HIRED FROM 2018 ONWARDS
AND (a.date_hired BETWEEN '2018-1-1' AND CURDATE());