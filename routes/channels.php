<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


// Broadcast::channel('user.{toUserId}', function ($user, $toUserId) {

//     return $user->id == $toUserId;

// });


Broadcast::channel('chat', function ($user) {
	return true;
});


Broadcast::channel('user.1', function ($user) {
	return true;
});
