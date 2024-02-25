<?php
$path = realpath(dirname(__FILE__));
$docRoot = "/GradeBookApp/";

$header = $path . "/includes/headerLoggedIn.php";
$footer = $path . "/includes/footer.php";

require_once($path . "/includes/config.php");

if (!isset($_SESSION["loggedin"])) {
    header("location: " . $docRoot . "index.php");
    exit();
}

include($header);
?>
<link rel="stylesheet" href="/css/submissions.css">
<h1>Submissions</h1>
<table style="width: 100%;">
    <tr class="columnHeaders">
        <td>Submission</td>
        <td>Status</td>
        <td>Grade</td>
        <td>Feedback</td>
    </tr>
    <?php
    foreach ($submissions as $submission) {
        echo "<tr>";
        echo "<td><div><a href=''>" . $submission['name'] . "</a></div><div>Submitted Date</div></td>";
        echo "<td class='status'><div>" . $submission['status'] . "</div></td>";
        echo "<td class='grade'><div>" . $submission['grade'] . "</div></td>";
        echo "<td class='feedback'><div><a href=''>" . $submission['feedback'] . "</a></div></td>";
        echo "</tr>";
    }
    ?>
</table>
<?php
include($footer);
?>
