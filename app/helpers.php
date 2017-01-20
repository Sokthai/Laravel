<?php
/**
 * Created by PhpStorm.
 * User: sokthaitang
 * Date: 1/15/17
 * Time: 9:56 PM
 */


/**
 *  this is the autoload file, which mean will be load when application is running,
 *  so it functionality will be available through out the program. simply call 'flash('your title', 'your message')'
 *  to make it autoload, edit the 'composer.json' file of autoload section and at the ' "files":["app/helpers.php"] '
 *  then run the ' composer dump-autoload ' to refresh it
 */

function flash($title = null, $message = null){
    //$flash = app('App\Http\Flash'); // the app() use to make variable become global variable;
    $flash = new App\Http\Flash; //this one is work also

    if(func_num_args() == 0){ //if the user doesn't provide any argument, just return the flash object instance
        return $flash;
    }

    return $flash->message($title, $message); //it will call the message() in the 'App\Http\Flash'
}