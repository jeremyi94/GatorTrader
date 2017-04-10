<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;
use Cake\Mailer\Email;

/**
 * ContactForm mailer.
 */
class ContactFormMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'ContactForm';

    public function submission(array $data)
    {
        /*$email = new Email();
        $email->from('app@domain.com','Users')
              ->to('farbod.zolghadr@yahoo.com', 'Me')
              ->temple('default','default')
              ->viewVars(['data'=> $data])
              ->send();*/
        $email = new Email('default');
        $email->setFrom(['fzolghad@sfsuse.com' => 'My Site'])
              ->setTo('farbod.zolghadr@yahoo.com', 'Me')
              ->setSubject('About')
              ->send('My message');
    }
}
