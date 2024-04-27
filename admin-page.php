<?php
if (isset($_POST['submit'])) {
    // Retrieve form data
    $sid = $_POST['twilio_sid'];
    $auth_token = $_POST['twilio_auth_token'];

    // Save data to options table
    update_option('twilio_sid', $sid);
    update_option('twilio_auth_token', $auth_token);

    // Display success message
    echo '<div class="notice notice-success is-dismissible"><p>Settings saved successfully!</p></div>';
}
?>

<div class="wrap">
    <h1>Twilio Verify Plugin Settings</h1>
    <form method="post">
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Twilio SID</th>
                <td><input type="text" name="twilio_sid" value="<?php echo esc_attr(get_option('twilio_sid')); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row">Twilio Auth Token</th>
                <td><input type="text" name="twilio_auth_token" value="<?php echo esc_attr(get_option('twilio_auth_token')); ?>" /></td>
            </tr>
        </table>
        <input type="submit" name="submit" class="button-primary" value="Save Changes" />
    </form>
</div>
