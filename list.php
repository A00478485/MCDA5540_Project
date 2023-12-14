<?php include 'header.php'; ?>



  <div class="container" style="display: flex;  justify-content: center; align-item:center;">
  <form action="function.php" method="post">
   <h2>List of all the Tables in our DB: </h2>
    <select onchange="this.form.submit()" name="selectedOption">
    <option value="-1"> select an option </option>
    <option value="./education-to-application/List.php"> EducationToApplication </option>
    <option value="./experience-to-application/List.php"> ExperienceToApplication </option>
    <option value="./application/List.php"> application </option>
    <option value="./candidate/"> candidate </option>
    <option value="./education/List.php"> education </option>
    <option value="./recruiter/"> employee </option>
    <option value="./experience/List.php"> experience </option>
    <option value="./file-details/List.php"> file_details </option>
    <option value="./interview/List.php"> interview </option>
    <option value="./job-posting/List.php"> job_posting </option>
    <option value="./job-question/List.php"> job_question </option>

    </select>
    </form>
  </div>

<?php include 'footer.php'; ?>