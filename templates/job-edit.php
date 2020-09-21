<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Edit Job Listing</h2>
    <form action="edit.php?id=<?php echo $job -> id; ?>" method="post">
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" name="company" class="form-control" value="<?php echo $job -> company; ?>">
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select type="text" name="category" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <?php if($job -> category_id == $category -> id): ?>
                        <option value="<?php echo $category -> id; ?> " selected>
                            <?php echo $category -> name; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $category -> id; ?> ">
                            <?php echo $category -> name; ?>
                        </option>
                    <?php endif; ?>
                 <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="job_title">Job Title</label>
            <input type="text" name="job_title" class="form-control" value="<?php echo $job -> job_title; ?>">
        </div>

        <div class="form-group">
            <label for="job_description">Description</label>
            <textarea name="job_description" class="form-control"><?php echo $job -> job_description; ?></textarea>
        </div>

        <div class="form-group">
            <label for="job_location">Location</label>
            <input type="text" name="job_location" class="form-control"
            value="<?php echo $job -> job_location; ?>">
        </div>

        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" name="salary" class="form-control" 
            value="<?php echo $job -> salary; ?>">
        </div>

        <div class="form-group">
            <label for="contact-user">Contact User</label>
            <input type="text" name="contact_user" class="form-control"
            value="<?php echo $job -> contact_user; ?>">
        </div>

        <div class="form-group">
            <label for="contact-email">Contact Email</label>
            <input type="text" name="contact_email" class="form-control"
            value="<?php echo $job -> contact_email; ?>">
        </div>

        <input type="submit" value="submit" name="submit" class="btn btn-primary">
    </form>
<?php include 'inc/footer.php'; ?>