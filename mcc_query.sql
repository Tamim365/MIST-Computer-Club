--In our project code, this view is used at resources/views/dashboard/committee.blade.php at line 74
CREATE OR REPLACE FORCE VIEW panel_members AS 
SELECT club_id, panel_role, committe_name, email, name, picture
FROM members
WHERE panel_role IS NOT NULL;

--In our project code, this view is used at resources/views/courses/index.blade.php at line 12
CREATE OR REPLACE FORCE VIEW available_courses AS
SELECT course_id, course_name, course_status, course_info, start_date, course_materialsfee
FROM courses
WHERE course_status != 'Ended';

--In our project code, this join is used at app/http/controllers/EnrollController.php at line 12
select club_id, name,course_id,course_name,participation_role from members natural join  enrolls natural join courses;

SET SERVEROUTPUT on;

--PROCEDURE for updating course status depending on current date
CREATE OR REPLACE PROCEDURE update_course_status
(c_id IN courses.course_id%TYPE)
IS
s_date courses.start_date%TYPE;
e_date courses.start_date%TYPE;
status courses.course_status%TYPE;
BEGIN
    SELECT start_date, end_date INTO s_date, e_date FROM courses WHERE course_id = c_id;
    IF trunc(s_date) > trunc(sysdate) THEN
        status := 'Comming Soon';
    ELSE
        IF e_date IS NULL THEN
            status := 'Running';
        ELSIF trunc(e_date) > trunc(sysdate) THEN
            status := 'Running';
        ELSE
            status := 'Ended';
        END IF;
    END IF;
    UPDATE courses SET course_status = status WHERE course_id = c_id;
END;
--EXECUTE update_course_status(1000);
--In our project code, this procedure is used at resourses/views/dashboard/courses.blade.php at line 122

--custom hash function
create or replace function custom_hash (p_username in varchar2, p_password in varchar2)
return varchar2
is
  l_password varchar2(4000);
  l_salt varchar2(4000) := 'WV5FBTWOJOAZ68FRIU7A4YF64D8ZA7';
begin
l_password := utl_raw.cast_to_raw(dbms_obfuscation_toolkit.md5
  (input_string => p_password || substr(l_salt,10,13) || p_username ||
    substr(l_salt, 4,10)));
return l_password;
end;
--go to database/migration from our project directory and open migration table of member/moderator/admin to see the use of hash function
--this hash function is used while storing and retriving member/moderator/admin password
--for storing and retriving go to app/http/controllers/AuthController.php to see the use

--SEQUENCES 
CREATE SEQUENCE  "ADMINS_ADMIN_ID_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE ;
CREATE SEQUENCE  "BUDGETS_BUDGET_ID_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1000 NOCACHE  NOORDER  NOCYCLE ;
CREATE SEQUENCE  "COACHES_COACH_ID_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1000 NOCACHE  NOORDER  NOCYCLE ;
CREATE SEQUENCE  "COURSES_COURSE_ID_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1000 NOCACHE  NOORDER  NOCYCLE ;
CREATE SEQUENCE  "FESTS_FEST_ID_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1000 NOCACHE  NOORDER  NOCYCLE ;
CREATE SEQUENCE  "MEMBERS_CLUB_ID_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 14000 NOCACHE  NOORDER  NOCYCLE ;
CREATE SEQUENCE  "R_N_D_S_PROJECT_ID_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1000 NOCACHE  NOORDER  NOCYCLE ;
CREATE SEQUENCE  "TEAMS_TEAM_ID_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1000 NOCACHE  NOORDER  NOCYCLE ;
CREATE SEQUENCE  "USERS_ID_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER  NOCYCLE ;
CREATE SEQUENCE  "VOLUNTEERS_VOLUNTEER_ID_SEQ"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1000 NOCACHE  NOORDER  NOCYCLE ;
--These sequences are used in migration table. Go to database/migrations to see.

--TRIGGERS
create or replace trigger admins_Admin_Id_trg
            before insert on ADMINS
            for each row
                begin
            if :new.ADMIN_ID is null then
                select admins_Admin_Id_seq.nextval into :new.ADMIN_ID from dual;
            end if;
            end;

create or replace trigger budgets_Budget_Id_trg
            before insert on BUDGETS
            for each row
                begin
            if :new.BUDGET_ID is null then
                select budgets_Budget_Id_seq.nextval into :new.BUDGET_ID from dual;
            end if;
            end;

create or replace trigger coaches_coach_Id_trg
            before insert on COACHES
            for each row
                begin
            if :new.COACH_ID is null then
                select coaches_coach_Id_seq.nextval into :new.COACH_ID from dual;
            end if;
            end;

create or replace trigger courses_Course_Id_trg
            before insert on COURSES
            for each row
                begin
            if :new.COURSE_ID is null then
                select courses_Course_Id_seq.nextval into :new.COURSE_ID from dual;
            end if;
            end;

create or replace trigger fests_Fest_Id_trg
            before insert on FESTS
            for each row
                begin
            if :new.FEST_ID is null then
                select fests_Fest_Id_seq.nextval into :new.FEST_ID from dual;
            end if;
            end;

create or replace trigger members_Club_Id_trg
            before insert on MEMBERS
            for each row
                begin
            if :new.CLUB_ID is null then
                select members_Club_Id_seq.nextval into :new.CLUB_ID from dual;
            end if;
            end;

create or replace trigger r_n_d_s_project_id_trg
            before insert on R_N_D_S
            for each row
                begin
            if :new.PROJECT_ID is null then
                select r_n_d_s_project_id_seq.nextval into :new.PROJECT_ID from dual;
            end if;
            end;

create or replace trigger teams_team_Id_trg
            before insert on TEAMS
            for each row
                begin
            if :new.TEAM_ID is null then
                select teams_team_Id_seq.nextval into :new.TEAM_ID from dual;
            end if;
            end;

create or replace trigger volunteers_volunteer_id_trg
            before insert on VOLUNTEERS
            for each row
                begin
            if :new.VOLUNTEER_ID is null then
                select volunteers_volunteer_id_seq.nextval into :new.VOLUNTEER_ID from dual;
            end if;
            end;

--These triggers are used while inserting the data. Go to app/http/controllers to see various insertions.

--for calculating budget, used at resources/views/dashboard/budget.blade.php at line 218
SELECT SUM(BUDGET_AMOUNT) FROM BUDGETS;


--for debugging

SELECT * FROM MEMBERS;
SELECT * FROM ENROLLS;
SELECT * FROM ADMINS;
SELECT * FROM COURSES;
SELECT * FROM BUDGETS;
SELECT * FROM panel_members;
SELECT * FROM available_courses;

Insert into ADMINS (ADMIN_ID,ADMIN_NAME,ADMIN_EMAIL,ADMIN_PASSWORD,ADMIN_PHONE,ACCESS_TIME) values (1,'Tariquel Islam Tamim','admin@mcc.mist.ac.bd','$2y$10$4Wdf316q/BaieErQGygoi.xH5bzdjaNd0tf97i1ghiFF.yL5jGhKS',null,null);

Insert into MODERATORS (FACULTY_ID,NAME,DEPARTMENT,EMAIL,PASSWORD,PHONE_NO,ADDRESS,PICTURE,CREATED_AT,UPDATED_AT) values ('676565','Shafin Hossain','IPE','shafin@gmail.com','$2y$10$O8oq7Gp0hqvhsI8eYCjASuwPdW2.aVn/lkkYimJmRv76DfL42rfPm',null,null,'/default_user_img.png',to_date('22-JUN-21','DD-MON-RR'),to_date('22-JUN-21','DD-MON-RR'));
Insert into MODERATORS (FACULTY_ID,NAME,DEPARTMENT,EMAIL,PASSWORD,PHONE_NO,ADDRESS,PICTURE,CREATED_AT,UPDATED_AT) values ('1234','Raiyan Jahangir','ME','raiyan@gmail.com','$2y$10$yIyq3lw14kMeXvVz3d7a.eQuhTSA5SVPCxPibBIsPnYwvTdm6n9bi',null,null,'/default_user_img.png',to_date('22-JUN-21','DD-MON-RR'),to_date('22-JUN-21','DD-MON-RR'));
Insert into MODERATORS (FACULTY_ID,NAME,DEPARTMENT,EMAIL,PASSWORD,PHONE_NO,ADDRESS,PICTURE,CREATED_AT,UPDATED_AT) values ('45454554','Ahsan Rahat','EECE','rahat@gmail.com','$2y$10$ZlSYHZJJnqTu7XBQKo6hauNMrgRtldOYYimFuxMgICzm5OUBz0n7C',null,null,'/default_user_img.png',to_date('22-JUN-21','DD-MON-RR'),to_date('22-JUN-21','DD-MON-RR'));
Insert into MODERATORS (FACULTY_ID,NAME,DEPARTMENT,EMAIL,PASSWORD,PHONE_NO,ADDRESS,PICTURE,CREATED_AT,UPDATED_AT) values ('4454545','Wasif Ul Islam','CE','wasif@gmail.com','$2y$10$Fej4ZB98Zr2FtBQsMY6MTeySrFxF2MTm1wuv5MA9ipUB5glt7RP6O',null,null,'/default_user_img.png',to_date('22-JUN-21','DD-MON-RR'),to_date('22-JUN-21','DD-MON-RR'));

Insert into BUDGETS (BUDGET_ID,BUDGET_AMOUNT,BUDGET_PROPOSAL_INFO,BUDGET_TRANSACTION_DATE,REMARKS,BUDGET_STATUS) values (1002,70000,'For Intra Programming Contest',null,'Good','Accepted');
Insert into BUDGETS (BUDGET_ID,BUDGET_AMOUNT,BUDGET_PROPOSAL_INFO,BUDGET_TRANSACTION_DATE,REMARKS,BUDGET_STATUS) values (1000,50000,'For Programming Contest',null,'Good','Accepted');
Insert into BUDGETS (BUDGET_ID,BUDGET_AMOUNT,BUDGET_PROPOSAL_INFO,BUDGET_TRANSACTION_DATE,REMARKS,BUDGET_STATUS) values (1001,60000,'For Computer Day Festival',null,'Good','Declined');
Insert into BUDGETS (BUDGET_ID,BUDGET_AMOUNT,BUDGET_PROPOSAL_INFO,BUDGET_TRANSACTION_DATE,REMARKS,BUDGET_STATUS) values (1003,80000,'For Opening Ceremony Of Computer Club',null,'Good','Pending');

Insert into MEMBERS (CLUB_ID,FACULTY_ID,NAME,STUDENT_ID,DEPARTMENT,"LEVEL",EMAIL,PASSWORD,PHONE_NO,ADDRESS,PICTURE,PANEL_ROLE,COMMITTE_NAME,DOB,CREATED_AT,UPDATED_AT) values (14000,null,'Subah Tasnim Khan Shiary','201914021','CSE',0,'shiaryk29@gmail.om','$2y$10$I4vEZJrRAXvdPBLb4YyA3uAcMlkLDJ9mkuTRJBrdm8oBKof/.c1gK',null,null,'https://ucarecdn.com/cbc9b417-eb48-49b7-9397-c49cccb59437/-/crop/487x487/0,56/-/preview/','Executive_Director','Executive',null,null,null);
Insert into MEMBERS (CLUB_ID,FACULTY_ID,NAME,STUDENT_ID,DEPARTMENT,"LEVEL",EMAIL,PASSWORD,PHONE_NO,ADDRESS,PICTURE,PANEL_ROLE,COMMITTE_NAME,DOB,CREATED_AT,UPDATED_AT) values (14001,null,'Tariquel Islam Tamim','201914028',null,null,'tamim@gmail.com','$2y$10$.CSSDSDg.86Wfn14j9KaJOAIsn52vSobdRYhS7daV6lMOvs8c4uxe',null,null,'https://ucarecdn.com/ac43c7ae-d2d9-4d80-8af9-6afda07fde19/-/crop/557x557/0,416/-/preview/','Executive_Director',null,null,null,null);
Insert into MEMBERS (CLUB_ID,FACULTY_ID,NAME,STUDENT_ID,DEPARTMENT,"LEVEL",EMAIL,PASSWORD,PHONE_NO,ADDRESS,PICTURE,PANEL_ROLE,COMMITTE_NAME,DOB,CREATED_AT,UPDATED_AT) values (14002,null,'Riasat Haque','201914042',null,null,'riasat@gmail.com','$2y$10$GIcB4/l0JPPfMZZ2WZMrieaRVzfz6aC4qsUhOWTG.px2BkSQ9tQBy',null,null,'https://ucarecdn.com/c2a0acee-c597-46a0-bd95-88658b2224d8/-/crop/2325x2322/903,0/-/preview/','Executive_Director','Executive',null,null,null);
Insert into MEMBERS (CLUB_ID,FACULTY_ID,NAME,STUDENT_ID,DEPARTMENT,"LEVEL",EMAIL,PASSWORD,PHONE_NO,ADDRESS,PICTURE,PANEL_ROLE,COMMITTE_NAME,DOB,CREATED_AT,UPDATED_AT) values (14003,null,'Nawreen Anan','201914006',null,null,'nawreen@gmail.com','$2y$10$V2QzqkQta7hK3SaFG5UCI.fTj9Homz7XOmICkXFOCpKdJ35oiN8TW',null,null,'https://ucarecdn.com/15e9a9be-18f1-4c8e-a691-f746b9db6668/-/crop/360x360/140,0/-/preview/','Executive_Member','Executive',null,null,null);
Insert into MEMBERS (CLUB_ID,FACULTY_ID,NAME,STUDENT_ID,DEPARTMENT,"LEVEL",EMAIL,PASSWORD,PHONE_NO,ADDRESS,PICTURE,PANEL_ROLE,COMMITTE_NAME,DOB,CREATED_AT,UPDATED_AT) values (14004,null,'Raiyan Abrar','201914013','CSE',0,'raiyan@gmail.com','$2y$10$4Qgsh.VgM4ZxeFAvZBeXqOBt5mTeHCNCZq88xHvEhR77woiCeAU72',null,null,'https://ucarecdn.com/a4d0dea5-fef2-4bc6-bb52-8fb3a5edfe06/',null,null,null,null,null);
Insert into MEMBERS (CLUB_ID,FACULTY_ID,NAME,STUDENT_ID,DEPARTMENT,"LEVEL",EMAIL,PASSWORD,PHONE_NO,ADDRESS,PICTURE,PANEL_ROLE,COMMITTE_NAME,DOB,CREATED_AT,UPDATED_AT) values (14005,null,'Koushik Halder','201914060',null,null,'koushik@gmail.com','$2y$10$Of3NPbw97rE.CpNlyKgP6OfSlZAFY4Wg8daSiIxLiVPZMIVcu2OS.',null,null,'https://ucarecdn.com/ed9a3dac-c2cc-421d-bcf4-2699bee67239/',null,null,null,null,null);
Insert into MEMBERS (CLUB_ID,FACULTY_ID,NAME,STUDENT_ID,DEPARTMENT,"LEVEL",EMAIL,PASSWORD,PHONE_NO,ADDRESS,PICTURE,PANEL_ROLE,COMMITTE_NAME,DOB,CREATED_AT,UPDATED_AT) values (14006,null,'Mahapara Naim','201914057',null,null,'mahapara@gmail.com','$2y$10$BqnAKzVFySsH5nK2Sh2HBuHKgJ3lhhWCPLaELSLT5qzKaZlEKzZhm',null,null,'https://ucarecdn.com/dc566afa-7044-471f-a382-31164a1bdf18/-/crop/453x452/118,0/-/preview/',null,null,null,null,null);


Insert into COACHES (COACH_ID,COACH_NAME,COACH_ADDRESS,COACH_UNIVERSITY,COACH_EMAIL,COACH_PHONE) values (1000,'Tamim','House-911,Avenue-2,Road-13,Mirpur Dohs','MIST','tamim@mist.com',1934498168);
Insert into COACHES (COACH_ID,COACH_NAME,COACH_ADDRESS,COACH_UNIVERSITY,COACH_EMAIL,COACH_PHONE) values (1001,'Raiyan','Zero Street','BUET','raiyan@mist.com',1934498897);
Insert into COACHES (COACH_ID,COACH_NAME,COACH_ADDRESS,COACH_UNIVERSITY,COACH_EMAIL,COACH_PHONE) values (1002,'Rakib','Rangpur','CUET','rakib@gmail.com',1565498168);


Insert into COURSES (COURSE_ID,BUDGET_ID,COURSE_NAME,START_DATE,END_DATE,COURSE_STATUS,COURSERATING,MENTORRATING,MENTOR_FEE,COURSE_MATERIALSFEE) values (1000,null,'CSE 301',to_date('01-JAN-21','DD-MON-RR'),null,'Running',null,null,50000,10000);
Insert into COURSES (COURSE_ID,BUDGET_ID,COURSE_NAME,START_DATE,END_DATE,COURSE_STATUS,COURSERATING,MENTORRATING,MENTOR_FEE,COURSE_MATERIALSFEE) values (1001,null,'CSE 302',to_date('16-JUN-21','DD-MON-RR'),null,'Running',null,null,5036000,45000);
Insert into COURSES (COURSE_ID,BUDGET_ID,COURSE_NAME,START_DATE,END_DATE,COURSE_STATUS,COURSERATING,MENTORRATING,MENTOR_FEE,COURSE_MATERIALSFEE) values (1002,null,'CSE 303',to_date('26-MAR-21','DD-MON-RR'),null,'Running',null,null,40000,23000);
Insert into COURSES (COURSE_ID,BUDGET_ID,COURSE_NAME,START_DATE,END_DATE,COURSE_STATUS,COURSERATING,MENTORRATING,MENTOR_FEE,COURSE_MATERIALSFEE) values (1003,null,'CSE 317',to_date('20-AUG-21','DD-MON-RR'),null,'Running',null,null,70000,10000);
Insert into COURSES (COURSE_ID,BUDGET_ID,COURSE_NAME,START_DATE,END_DATE,COURSE_STATUS,COURSERATING,MENTORRATING,MENTOR_FEE,COURSE_MATERIALSFEE) values (1004,null,'CSE 323',to_date('10-JUN-21','DD-MON-RR'),null,'Running',null,null,600000,23000);
