<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserResetPassword extends Notification
{
    use Queueable;

    protected $token;
    /**
     * Create a new notification instance.

     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Restablece tu contraseña')
                    ->greeting('Estimado Usuario')
                    ->line('A continuacón puede resetear su contraseña.')
                    ->line('Recibimos una solicitud ya que presenta problemas para acceder a su cuenta.')
                    ->action('Reestablecer Contraseña', url('/').route('password.reset', ['token' => $this->token, 'email' => $notifiable->getEmailForPasswordReset()], false))
                    ->line('Si  no has solicitado esta peticion, ignora este mensaje')
                    ->salutation('Gracias!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
