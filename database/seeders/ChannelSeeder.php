<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $channel = new Channel();
        $channel->name = "Whatsapp";
        $channel->description = "canal de whatsapp";
        $channel->cell_phone = "938785028";
        $channel->link = "--";
        $channel->user_id = 1;
        $channel->status = 1;
        $channel->save();

        $channel = new Channel();
        $channel->name = "Telegram";
        $channel->description = "canal de telegram";
        $channel->cell_phone = "938785028";
        $channel->link = "--";
        $channel->user_id = 1;
        $channel->status = 1;
        $channel->save();

        $channel = new Channel();
        $channel->name = "Messenger";
        $channel->description = "canal de messenger";
        $channel->cell_phone = "938785028";
        $channel->link = "--";
        $channel->user_id = 1;
        $channel->status = 1;
        $channel->save();
    }
}
