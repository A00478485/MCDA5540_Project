<?php include 'header.php'; ?>



<div class="content" style="height:80vh;" >
  

  <div class="container" style="display: flex;  justify-content: center; align-item:center;">
  <form action="function.php" method="post">
  List of all the Tables in our DB: 
    <select onchange="this.form.submit()" name="selectedOption">
    <option value="-1"> select an option </option>
    <option value="EducationToApplication"> EducationToApplication </option>
    <option value="ExperienceToApplication"> ExperienceToApplication </option>
    <option value="application"> application </option>
    <option value="./candidate/cadidateList.php"> candidate </option>
    <option value="education"> education </option>
    <option value="./recruiter/List.php"> employee </option>
    <option value="experience"> experience </option>
    <option value="file_details"> file_details </option>
    <option value="interview"> interview </option>
    <option value="./job-posting/List.php"> job_posting </option>
    <option value="job_questions"> job_questions </option>

    </select>
    </form>
    </div>
</div>

<?php include 'footer.php'; ?>