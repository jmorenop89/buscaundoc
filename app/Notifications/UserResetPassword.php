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
                    ->subject('Solicitud de reestablecimiento de contraseña')
                    ->greeting('Hola que tal')
                    ->line('Como nos has solicitado, aqui tienes una URL para resetear tu contraseña de Buscaundoc para tu cuenta asociada con el mail ')
                    ->action('Reestablecer Contraseña', url('/').route('password.reset', ['token' => $this->token, 'email' => $notifiable->getEmailForPasswordReset()], false))
                    ->line('Si tu no has solicitado esta peticion, ignora este mensaje')
                    ->salutation('Gracias mamao');
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
