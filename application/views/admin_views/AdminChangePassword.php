


<style>
    /* Style inputs with type="text", select elements and textareas */
    input[type=text], select, textarea {
        width: 100%; /* Full width */
        padding: 12px; /* Some padding */
        border: 1px solid #ccc; /* Gray border */
        border-radius: 4px; /* Rounded borders */
        box-sizing: border-box; /* Make sure that padding and width stays in place */
        margin-top: 6px; /* Add a top margin */
        margin-bottom: 16px; /* Bottom margin */
        resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
    }

    /* Style the submit button with a specific background color etc */
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type=button] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    /* When moving the mouse over the submit button, add a darker green color */
    input[type=submit]:hover {
        background-color: #45a049;
    }
    input[type=button]:hover {
        background-color: #45a049;
    }
    /* Add a background color and some padding around the form */
    .container12 {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<center><h1>Change Your Password</h1>
    <div class="container12">

        <?php echo form_open_multipart(base_url().'member/changepassword');?>
        <label for="fname">Current Password</label>

        <input type="password" id="fname2" name="currentpass" placeholder=""><label for="fname">New Password</label>

        <input type="password" id="fname" name="newpass" placeholder=""><label for="fname">Again New Password</label>
        <input type="password" id="fname" name="againnewpass" placeholder="">



        <?php echo "<input type='submit' name='submit' value='Change Password' /> ";?>

        <?php echo "</form>"?>



        </form>
    </div>
</center>