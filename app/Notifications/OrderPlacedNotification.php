<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Http\Controllers\ProductController;

class OrderPlacedNotification extends Notification
{
    use Queueable;
    private $order;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        // the order class
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {   $trackingId = $this->order->tracking_id;
        $url = route('order.tracking', ['id' => $trackingId]);
        return (new MailMessage)
            ->subject('Your order is placed')
            ->line('Your order tracking id is: ' . $trackingId)
            ->action('Track order from here', $url)
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'order_id' => $this->details['order_id']
        ];
    }
}
