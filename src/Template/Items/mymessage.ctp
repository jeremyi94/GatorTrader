<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = "new";
?>
<?php foreach($myMessages as $row)?>
<table border="0" cellpadding="0" cellspacing="0" class="body well" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;width:100%;">
    <tr>
        <td style="font-family:sans-serif;font-size:14px;vertical-align:top;"> </td>
        <td class="container" style="font-family:sans-serif;font-size:14px;vertical-align:top;display:block;max-width:580px;padding:10px;width:580px;Margin:0 auto !important;">
            <div class="content" style="box-sizing:border-box;display:block;Margin:0 auto;max-width:580px;padding:10px;">
                <!-- START CENTERED WHITE CONTAINER -->
                <span class="preheader" style="color:transparent;display:none;height:0;max-height:0;max-width:0;opacity:0;overflow:hidden;mso-hide:all;visibility:hidden;width:0;">This is preheader text. Some clients will show this text as a preview.</span>
                <table class="main" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;background:#fff;border-radius:3px;width:100%;">
                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper" style="font-family:sans-serif;font-size:14px;vertical-align:top;box-sizing:border-box;padding:20px;">
                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;width:100%;">
                                <tr><p>From:  <?php echo $username;?></p>  <p><?php echo'on '.$row->date;?></p>  </tr>
                                <tr>
                                    <td style="font-family:sans-serif;font-size:14px;vertical-align:top;">
                                        <br/>                                        
                                        <p style="font-family:sans-serif;font-size:14px;font-weight:normal;margin:0;Margin-bottom:15px; text-align: justify; text-justify: inter-word;">
                                        <?php echo''.$row->text;?>  
                                        </p>
                                       
                                       
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- END MAIN CONTENT AREA -->
                </table>
                <div >
                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;mso-table-lspace:0pt;mso-table-rspace:0pt;width:100%;">
                        <tr>
                            <!--<td><a href="account" class="account-button">Back to My Account</a></td> -->
                            <td><?php echo $this->Html->link('Back to My Account', ['controller' => 'items', 'action' => 'myaccount']); ?></td>
                            <td><?php echo $this->Html->link('Reply', ['controller' => 'messages', 'action' => 'add']); ?></td>
                            <td><a href="account" ></a><i class="icon-trash"></i></td>
                        </tr>
                    </table>
                </div>
                <!-- END CENTERED WHITE CONTAINER -->
            </div>
        </td>
        <td style="font-family:sans-serif;font-size:14px;vertical-align:top;"> </td>
    </tr>
</table>
<script>document.title = "Gator Trader-Messaging";</script>