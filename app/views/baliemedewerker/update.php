<?php //var_dump($data);?>

<?= $data['title']; ?>

<form action="<?= URLROOT; ?>baliemedewerker/update" method="post">
    <table>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="firstname" id="firstname" value="<?= $data["row"]->firstname;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="lastname" id="lastname" value="<?= $data["row"]->lastname;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="email" id="email" value="<?= $data["row"]->email;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="class" id="class" value="<?= $data["row"]->class;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="studentid" value="<?= $data["row"]->studentid;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" value="verzenden">verzenden</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>