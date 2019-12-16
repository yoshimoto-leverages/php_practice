<?php $this->setLayoutVar('title', 'アカウント登録') ?>

<h2>アカウント登録</h2>

<form action="<?php echo $base_url; ?>/account/register" method="post">
    <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>" />

    <?php if (isset($errors) && count($errors) > 0): ?>
    <ul class="error_list">
        <?php foreach ($errors as $error): ?>
        <li><?php echo $this->escape($error); ?><li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

<<<<<<< HEAD

    <?php echo $this->render('account/inputs', array(
        'user_name' => $user_name, 'password' => $password,
    )); ?>
=======
    <table>
        <tbody>
            <tr>
                <th>ユーザID</th>
                <td>
                    <input type="text" name="user_name" value="" />
                </td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td>
                    <input type="password" name="password" value=""/>
                </td>
            </tr>
        </tbody>
    </table>
>>>>>>> cf148875bdaeb86a659d7cb7223b443e87fa41ce

    <p>
        <input type="submit" value="登録" />
    </p>
</form>