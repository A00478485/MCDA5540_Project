<?php include '../header.php'; ?>

<h3>Add Job & Question</h3>
<form action="InsertCombined.php" method="post">
    <div class="form-group">
        <label for="title">Job Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter title" />
    </div>
    <div class="form-group">
        <label for="job_type">Job Type</label>
        <input type="text" class="form-control" name="job_type" placeholder="Enter job type" />
    </div>
    <div class="form-group">
        <label for="job_description">Job Description</label>
        <textarea class="form-control" name="job_description" placeholder="Enter title" ></textarea>
    </div>
    <div class="form-group">
        <label for="deadline">Deadline</label>
        <input type="date" class="form-control" name="deadline" />
    </div>

    <div class="form-group">
        <label for="posting_date">Posting Date</label>
        <input type="date" class="form-control" name="posting_date" />
    </div>

    <div class="form-group">
        <label for="posted_by_emp">Recruiter ID</label>
        <input type="text" class="form-control" name="posted_by_emp" placeholder="Enter recruiter ID"/>
    </div>

    <div class="form-group">
        <label for="question">Question</label>
        <input type="text" class="form-control" name="question" placeholder="Enter Question"/>
    </div>

    <div class="form-group">
        <label for="question_type">Question Type</label>
        <input type="text" class="form-control" name="question_type" placeholder="Enter Question Type"/>
    </div>

    <div class="form-group">
        <label for="answer_type">Answer Type</label>
        <input type="text" class="form-control" name="answer_type" placeholder="Enter Answer Type"/>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

<?php include '../footer.php'; ?>