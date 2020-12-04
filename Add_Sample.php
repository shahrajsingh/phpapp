<?php session_start(); ?>
<?php include 'header_file.php'; ?>
<?php include 'Custom_Menu_file.php'; ?>
<?php include 'sidebar_file.php';  ?>
<?php
if ($_SESSION['userrole'] == "HOSPITAL") {
?>
    <div class="card add-sample-card">
        <div class="card-body">
            <p class="h4">Add a Blood Sample</p>
            <br>
            <form method="post" name="Add_Blood_Info" action="Add_Blood_Info.php">

                <div class="form-group">
                    <label for="add_info">Select a Blood Type</label>
                    <select id="add_info" name="add_info" required action="Add_Blood_Info.php" class="form-control">
                        <option value=" ">Select Blood Group</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="quantity">Add Quantity (in Units)</label>
                    <input type="number" min="1" required class="form-control" name="quantity">
                </div>
                <button class="btn btn-outline-secondary" style="width:100%" type="submit" name="add_info_submit" value="Add">Add</button>
            </form>
        </div>
    </div>

<?php
}
?>
<?php include 'footer_file.php'; ?>