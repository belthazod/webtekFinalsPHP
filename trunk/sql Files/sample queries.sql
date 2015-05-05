-- TO DISPLAY ENROLLMENT FORM OF STUDENT
select lastname, firstname, classcode, courseno, description, days, class.time, room
from student natural join enrollment natural join enrollmentdetails join class using (classcode)
		join course using (courseno)
where idno = 2110005;
--


-- TO DISPLAY CLASSES OFFERED BY SPECIFIC SCHOOL, FOR A SPECIFIC SEMESTER
select classcode, courseno, description, time, days, units
from class natural join (school natural join coursedetails natural join course)
where school.schoolid = 'SCIS' and
		semester = 'first';
-- 