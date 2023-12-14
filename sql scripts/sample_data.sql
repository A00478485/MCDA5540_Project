INSERT INTO candidate (first_name, middle_name, last_name, phone_number, email_id, address_line_1, address_line_2, city, province, zipcode, country, website) VALUES
('John', 'A.', 'Doe', '123-456-7890', 'john.doe@example.com', '123 Main Street', 'Apt 45', 'Cityville', 'Stateville', '12345', 'USA', 'www.johndoe.com'),
('Alice', 'B.', 'Smith', '987-654-3210', 'alice.smith@example.com', '456 Oak Street', 'Unit 12', 'Townsville', 'Stateland', '56789', 'USA', 'www.alicesmith.com'),
('Bob', 'C.', 'Johnson', '111-222-3333', 'bob.johnson@example.com', '789 Pine Street', 'Suite 3', 'Villageville', 'Provinceland', '67890', 'USA', 'www.bobjohnson.com'),
('Eva', 'D.', 'Williams', '444-555-6666', 'eva.williams@example.com', '101 Elm Street', 'Apt 7', 'Hamletville', 'Countyland', '23456', 'USA', 'www.evawilliams.com'),
('Chris', 'E.', 'Brown', '777-888-9999', 'chris.brown@example.com', '202 Cedar Street', 'Unit 23', 'Cityburg', 'Territorytown', '34567', 'USA', 'www.chrisbrown.com');

INSERT INTO employee (first_name, middle_name, last_name, phone_number, email_id, position_name) VALUES
('Michael', 'M.', 'Jones', '555-666-7777', 'michael.jones@example.com', 'HR Manager'),
('Sara', 'S.', 'Miller', '999-888-7777', 'sara.miller@example.com', 'Software Engineer'),
('David', 'D.', 'Clark', '111-333-5555', 'david.clark@example.com', 'Project Manager'),
('Emily', 'E.', 'White', '444-777-9999', 'emily.white@example.com', 'Marketing Specialist'),
('Brian', 'B.', 'Lee', '777-999-1111', 'brian.lee@example.com', 'Financial Analyst');

INSERT INTO job_posting (title, job_type, job_description, deadline, posting_date, posted_by_emp) VALUES
('Software Developer', 'Full-time', 'Seeking a skilled software developer with experience in Java and Spring framework.', '2023-01-31', '2023-01-15', 2),
('Marketing Coordinator', 'Part-time', 'Looking for a creative individual to coordinate marketing activities and campaigns.', '2023-02-28', '2023-02-10', 4),
('Project Manager', 'Full-time', 'Experienced project manager needed to lead and oversee software development projects.', '2023-03-15', '2023-03-01', 3),
('HR Assistant', 'Contract', 'Assist with HR activities and recruitment process on a contractual basis.', '2023-04-30', '2023-04-15', 1),
('Financial Analyst', 'Full-time', 'Join our finance team to analyze financial data and provide insights for decision-making.', '2023-05-31', '2023-05-10', 5);

INSERT INTO job_questions (job_id, question, question_type, answer_type, posted_by_emp) VALUES
(1, 'What is your experience with Java?', 'Technical', 'Text', 2),
(2, 'Describe a successful marketing campaign you have coordinated.', 'Behavioral', 'Text', 4),
(3, 'How do you handle project timelines and deadlines?', 'Behavioral', 'Text', 3),
(4, 'Why are you interested in the HR field?', 'Behavioral', 'Text', 1),
(5, 'Explain a financial analysis project you have worked on.', 'Technical', 'Text', 5);

INSERT INTO application (application_date, candidate_id, job_id, stage) VALUES
('2023-01-20', 1, 1, 'Review'),
('2023-02-05', 2, 2, 'Interview'),
('2023-03-10', 3, 3, 'Written Test'),
('2023-04-25', 4, 4, 'Phone Screening'),
('2023-05-05', 5, 5, 'Final Interview');

INSERT INTO experience (designation, exp_role, exp_desc, company, start_date, end_date) VALUES
('Software Engineer', 'Backend Developer', 'Developed scalable backend systems using Java and Spring Boot.', 'TechCorp', '2020-01-15', '2022-03-20'),
('Marketing Specialist', 'Campaign Coordinator', 'Coordinated and executed various marketing campaigns to boost brand visibility.', 'AdAgency', '2018-05-10', '2021-08-30'),
('Project Manager', 'Software Project Manager', 'Led cross-functional teams in delivering software projects on time and within budget.', 'SoftProjects', '2016-03-01', '2019-06-15'),
('HR Assistant', 'Recruitment Coordinator', 'Assisted in the recruitment process, from posting jobs to conducting initial interviews.', 'HRConnect', '2019-09-05', '2022-01-10'),
('Financial Analyst', 'Financial Planning Analyst', 'Conducted financial analysis and prepared reports for strategic decision-making.', 'FinanceCorp', '2017-07-15', '2020-11-30');

INSERT INTO education (institute_name, start_date, end_date, degree_type, degree_name, grade) VALUES
('University of Tech', '2016-09-01', '2020-05-15', 'Bachelor', 'Computer Science', 'A'),
('Marketing Institute', '2014-08-15', '2018-04-30', 'Bachelor', 'Marketing Management', 'B+'),
('Project Management School', '2012-10-01', '2016-06-30', 'Bachelor', 'Project Management', 'A-'),
('HR Training Academy', '2017-01-20', '2020-07-05', 'Diploma', 'Human Resource Management', 'A'),
('Finance College', '2015-06-10', '2019-03-25', 'Bachelor', 'Finance and Accounting', 'A');

INSERT INTO file_details (application_id, file_type, file_location) VALUES
(1, 'Resume', '/files/resume_john_doe.pdf'),
(2, 'Cover Letter', '/files/cover_letter_alice_smith.docx'),
(3, 'Test Results', '/files/test_results_bob_johnson.pdf'),
(4, 'Resume', '/files/resume_eva_williams.doc'),
(5, 'Interview Transcript', '/files/interview_transcript_chris_brown.pdf');

INSERT INTO EducationToApplication (application_id, education_id) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

INSERT INTO ExperienceToApplication (application_id, experience_id) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);


INSERT INTO interview (application_id, emp_id, schedule_time, technical_eval, behavirol_eval, relavance_eval, skills_eval) VALUES
(1, 2, '2023-02-01 10:00:00', 4, 5, 4, 5),
(2, 4, '2023-02-15 14:30:00', 3, 4, 4, 3),
(3, 3, '2023-03-20 09:45:00', 5, 4, 5, 4),
(4, 1, '2023-05-01 11:00:00', 4, 3, 4, 3),
(5, 5, '2023-05-10 15:30:00', 5, 5, 5, 5);

INSERT INTO candidate (first_name, middle_name, last_name, phone_number, email_id, address_line_1, address_line_2, city, province, zipcode, country, website) VALUES
('Emma', 'F.', 'Johnson', '555-123-9876', 'emma.johnson@example.com', '789 Maple Street', 'Suite 15', 'Villageton', 'Territoryville', '45678', 'USA', 'www.emmajohnson.com'),
('Daniel', 'G.', 'Martinez', '333-789-4567', 'daniel.martinez@example.com', '987 Birch Street', 'Apt 3', 'Citytown', 'Countyland', '56789', 'USA', 'www.danielmartinez.com'),
('Sophia', 'H.', 'Anderson', '222-456-7890', 'sophia.anderson@example.com', '456 Pine Street', 'Unit 8', 'Towndale', 'Stateville', '67890', 'USA', 'www.sophiaanderson.com'),
('Liam', 'I.', 'Taylor', '888-777-5555', 'liam.taylor@example.com', '101 Cedar Street', 'Apt 20', 'Cityville', 'Provinceland', '78901', 'USA', 'www.liamtaylor.com'),
('Olivia', 'J.', 'Brown', '444-666-2222', 'olivia.brown@example.com', '202 Oak Street', 'Suite 5', 'Villageburg', 'Territorytown', '89012', 'USA', 'www.oliviabrown.com');

INSERT INTO employee (first_name, middle_name, last_name, phone_number, email_id, position_name) VALUES
('Christopher', 'C.', 'Anderson', '666-555-4444', 'christopher.anderson@example.com', 'IT Specialist'),
('Ava', 'A.', 'Williams', '222-444-6666', 'ava.williams@example.com', 'Graphic Designer'),
('Ethan', 'E.', 'Davis', '777-999-1111', 'ethan.davis@example.com', 'Data Analyst'),
('Mia', 'M.', 'Garcia', '111-333-5555', 'mia.garcia@example.com', 'Customer Service Representative'),
('Lucas', 'L.', 'Hernandez', '555-888-7777', 'lucas.hernandez@example.com', 'Systems Engineer');

INSERT INTO job_posting (title, job_type, job_description, deadline, posting_date, posted_by_emp) VALUES
('Web Developer', 'Full-time', 'Hiring a skilled web developer proficient in HTML, CSS, and JavaScript.', '2023-06-30', '2023-06-15', 1),
('Sales Representative', 'Full-time', 'Seeking a dynamic sales representative with proven experience in B2B sales.', '2023-07-31', '2023-07-10', 4),
('Database Administrator', 'Full-time', 'Experienced database administrator needed to manage and optimize databases.', '2023-08-15', '2023-08-01', 3),
('Marketing Analyst', 'Contract', 'Analytical mind needed to analyze marketing data and provide insights for campaigns.', '2023-09-30', '2023-09-15', 2),
('Finance Manager', 'Full-time', 'Join our finance team as a manager to oversee financial operations and reporting.', '2023-10-31', '2023-10-10', 5);

INSERT INTO job_questions (job_id, question, question_type, answer_type, posted_by_emp) VALUES
(6, 'What is your experience with web development?', 'Technical', 'Text', 1),
(7, 'How do you approach B2B sales?', 'Behavioral', 'Text', 4),
(8, 'What databases have you managed and optimized?', 'Technical', 'Text', 3),
(9, 'How do you analyze marketing data for campaign insights?', 'Technical', 'Text', 2),
(10, 'Describe your experience in financial reporting and operations.', 'Behavioral', 'Text', 5);

INSERT INTO application (application_date, candidate_id, job_id, stage) VALUES
('2023-06-20', 6, 6, 'Review'),
('2023-07-05', 7, 7, 'Interview'),
('2023-08-10', 8, 8, 'Written Test'),
('2023-09-25', 9, 9, 'Phone Screening'),
('2023-10-05', 10, 10, 'Final Interview');

INSERT INTO experience (designation, exp_role, exp_desc, company, start_date, end_date) VALUES
('Web Developer', 'Frontend Developer', 'Developed user-friendly and responsive web interfaces using HTML, CSS, and JavaScript.', 'WebTech', '2021-02-10', '2022-05-15'),
('Sales Representative', 'B2B Sales Specialist', 'Achieved and exceeded sales targets through effective B2B sales strategies.', 'SalesCorp', '2019-07-01', '2022-09-30'),
('Database Administrator', 'DBA Specialist', 'Managed and optimized large-scale databases for optimal performance and reliability.', 'DataSolutions', '2018-03-15', '2021-06-30'),
('Marketing Analyst', 'Data Analyst', 'Analyzed marketing data to provide insights for targeted and effective marketing campaigns.', 'MarketInsight', '2020-09-05', '2022-01-10'),
('Finance Manager', 'Financial Operations Manager', 'Led financial reporting and operations to ensure compliance and efficiency in financial processes.', 'FinanceLeader', '2017-01-20', '2020-07-05');

INSERT INTO education (institute_name, start_date, end_date, degree_type, degree_name, grade) VALUES
('Coding University', '2017-09-01', '2021-05-15', 'Bachelor', 'Computer Science', 'A-'),
('Business School', '2015-08-15', '2019-04-30', 'Bachelor', 'Business Administration', 'A'),
('Tech Institute', '2013-10-01', '2017-06-30', 'Bachelor', 'Information Technology', 'B+'),
('Marketing College', '2018-01-20', '2021-07-05', 'Diploma', 'Marketing Management', 'A'),
('Finance University', '2016-06-10', '2020-03-25', 'Bachelor', 'Finance and Accounting', 'B');

INSERT INTO file_details (application_id, file_type, file_location) VALUES
(6, 'Resume', '/files/resume_emma_johnson.pdf'),
(7, 'Cover Letter', '/files/cover_letter_daniel_martinez.docx'),
(8, 'Test Results', '/files/test_results_sophia_anderson.pdf'),
(9, 'Resume', '/files/resume_liam_taylor.doc'),
(10, 'Interview Transcript', '/files/interview_transcript_olivia_brown.pdf');

INSERT INTO EducationToApplication (application_id, education_id) VALUES
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

INSERT INTO ExperienceToApplication (application_id, experience_id) VALUES
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

INSERT INTO interview (application_id, emp_id, schedule_time, technical_eval, behavirol_eval, relavance_eval, skills_eval) VALUES
(6, 1, '2023-07-01 10:30:00', 4, 5, 4, 5),
(7, 4, '2023-07-15 15:00:00', 3, 4, 4, 3),
(8, 3, '2023-08-20 10:15:00', 5, 4, 5, 4),
(9, 2, '2023-10-01 11:30:00', 4, 3, 4, 3),
(10, 5, '2023-10-10 16:00:00', 5, 5, 5, 5);
