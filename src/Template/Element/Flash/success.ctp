<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<br><p>
<div class="message success" onclick="this.classList.add('hidden')"><br><p><br><h1><?= $message ?></h1></div>
