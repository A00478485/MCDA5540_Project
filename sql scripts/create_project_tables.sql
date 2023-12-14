SET foreign_key_checks = 0;

drop table if exists candidate;

create table candidate (
	candidate_id int auto_increment,
    first_name varchar(40),
    middle_name varchar(40),
    last_name varchar(40),
    phone_number varchar(20),
    email_id varchar(40),
    address_line_1 varchar(50),
    address_line_2 varchar(50),
    city varchar(30),
    province varchar(30),
    zipcode varchar(15),
    country varchar(30),
    website varchar(50),
    primary key (candidate_id)
);

drop table if exists employee;

create table employee (
	emp_id int auto_increment,
    first_name varchar(40),
    middle_name varchar(40),
    last_name varchar(40),
    phone_number varchar(20),
    email_id varchar(40),
    position_name varchar(40),
    primary key (emp_id)
);

drop table if exists job_posting;

create table job_posting (
	job_id int auto_increment,
    title varchar(40),
    job_type varchar(20),
    job_description varchar(1000),
    deadline date,
    posting_date date,
    posted_by_emp int,
    primary key (job_id),
    foreign key (posted_by_emp) references employee(emp_id)  ON DELETE CASCADE
);

drop table if exists job_questions;

create table job_questions (
	question_id int auto_increment,
    job_id int,
    question varchar(200),
    question_type varchar(20),
    answer_type varchar(20),
    posted_by_emp int,
    primary key (question_id),
    foreign key (posted_by_emp) references employee(emp_id)  ON DELETE CASCADE,
    foreign key (job_id) references job_posting(job_id)  ON DELETE CASCADE
);

drop table if exists application;

create table application (
	application_id int auto_increment,
    application_date date,
    candidate_id int,
    job_id int,
    stage varchar(20),
    primary key (application_id),
    foreign key (job_id) references job_posting(job_id)  ON DELETE CASCADE,
    foreign key (candidate_id) references candidate(candidate_id) ON DELETE CASCADE
);

drop table if exists experience;

create table experience (
	exp_id int auto_increment,
    designation varchar(30),
    exp_role varchar(30),
    exp_desc varchar(200),
    company varchar(40),
    start_date date,
    end_date date,
    primary key (exp_id)
);

drop table if exists education;

create table education (
	edu_id int auto_increment,
    institute_name varchar(40),
    start_date date,
    end_date date,
    degree_type varchar(30),
    degree_name varchar(30),
    grade varchar(30),   
    primary key (edu_id)
);

drop table if exists file_details;

create table file_details (
	file_id int auto_increment,
    application_id int,
    file_type varchar(20),
    file_location varchar(100),
    primary key (file_id),
    foreign key (application_id) references application(application_id)  ON DELETE CASCADE
);

drop table if exists EducationToApplication;

create table EducationToApplication (
	application_id int,
    education_id int,
    primary key (application_id, education_id),
    foreign key (application_id) references application(application_id) ON DELETE CASCADE,
    foreign key (education_id) references education(edu_id)  ON DELETE CASCADE
);

drop table if exists ExperienceToApplication;

create table ExperienceToApplication (
	experience_id int,
    application_id int,
    primary key (application_id, experience_id),
    foreign key (application_id) references application(application_id) ON DELETE CASCADE,
    foreign key (experience_id) references experience(exp_id)  ON DELETE CASCADE
);

drop table if exists interview;

create table interview (
    application_id int,
    emp_id int,
    schedule_time datetime,
    technical_eval int,
    behavirol_eval int,
    relavance_eval int,
    skills_eval int,
    primary key (application_id, emp_id),
    foreign key (emp_id) references employee(emp_id) ON DELETE CASCADE,
    foreign key (application_id) references application(application_id)  ON DELETE CASCADE
);

SET foreign_key_checks = 1;