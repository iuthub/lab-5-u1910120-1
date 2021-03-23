<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>
<body>



    <h1>Buy Your Way to a Better Education!</h1>

    <p>
        The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
    </p>

    <hr />

    <h2>Give us your money</h2>
    <form action="sucker.php" method="post">
        <dl>
            <dt>Name</dt>
            <dd>
                <input type="text" name="name" />
            </dd>

            <dt>Section</dt>
            <dd>
                <select name="section">
                    <option value="">(Select a section)</option>
                    <option>MA</option>
                    <option>MB</option>
                    <option>MC</option>
                    <option>MD</option>
                    <option>ME</option>
                    <option>MF</option>
                    <option>MG</option>
                    <option>MH</option>
                </select>
            </dd>

            <dt>Credit Card</dt>
            <dd>
                <input type="text" name="cardnumber" /><br />
                <label><input type="radio" name="cardtype" value="visa" />Visa</label>
                <label><input type="radio" name="cardtype" value="mastercard" />MasterCard</label>
            </dd>
        </dl>

        <div>
            <input type="submit" value="I am a giant sucker." />
        </div>
    </form>

</body>
</html>