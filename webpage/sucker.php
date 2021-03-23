
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>

<?php  if($_REQUEST["name"]=="" || $_REQUEST["cardnumber"]=="" || !isset($_REQUEST['cardtype']) || $_REQUEST["section"]=="") { ?>

    <h2>Sorry</h2>
    <p>You did not fill the form completely
        <a href="index.php">Try again?</a>
    </p>

<?php } else {?>

    <h1>Thanks, sucker!</h1>

    <p>Your information has been recorded.</p>

    <dl>
        <dt>Name</dt>
        <dd>
            <?= $_REQUEST["name"]?>
        </dd>

        <dt>Section</dt>
        <dd>

            <?= $_REQUEST["section"] ?>

        </dd>

        <dt>Credit Card</dt>
        <dd>
            <?= $_REQUEST["cardnumber"] ?>
            (<?= $_REQUEST["cardtype"] ?>)
        </dd>
    </dl>

    <P>Here are all suckers who have submitted here:</P>
<pre>

    <?php
    $name = $_REQUEST["name"];
    $section = $_REQUEST["section"];
    $cardnumber = $_REQUEST["cardnumber"];
    $cardtype = $_REQUEST["cardtype"];

    $data = [$name,"; ",$section, "; ",$cardnumber, "; ",$cardtype ,"\n"];
    file_put_contents("suckers.txt",$data, FILE_APPEND);
    $text = file_get_contents("suckers.txt");
    print_r($text);
    ?>

</pre>

<?php }?>


</body>
</html>