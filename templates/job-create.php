<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Create Job Listing</h2>
    <form action="create.php" method="post">
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" name="company" class="form-control">
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select type="text" name="category" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category -> id; ?> ">
                        <?php echo $category -> name; ?>
                    </option>
                 <?php endforeach;?>
            </select>
        </div>

        <div class="form-group">
            <label for="job_title">Job Title</label>
            <input type="text" name="job_title" class="form-control">
        </div>

        <div class="form-group">
            <label for="job_description">Description</label>
            <textarea name="job_description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="job_location">Location</label>
            <input type="text" name="job_location" class="form-control">
        </div>

        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" name="salary" class="form-control">
        </div>

        <div class="form-group">
            <label for="contact-user">Contact User</label>
            <input type="text" name="contact_user" class="form-control">
        </div>

        <div class="form-group">
            <label for="contact-email">Contact Email</label>
            <input type="text" name="contact_email" class="form-control">
        </div>

        <input type="submit" value="submit" name="submit" class="btn btn-primary">
    </form>
<?php include 'inc/footer.php'; ?>