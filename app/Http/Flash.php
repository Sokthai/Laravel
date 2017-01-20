<?php
/**
 * Created by PhpStorm.
 * User: sokthaitang
 * Date: 1/15/17
 * Time: 11:09 PM
 */
namespace App\Http;

class Flash{

    private function create($title, $message, $level, $key = 'flash_message'){
        return session()->flash($key, [
            'title' => $title,
            'message' => $message,
            'level' => $level
        ]);
    }


    public function overlay($title, $message, $level = 'success'){
        return $this->create($title, $message, $level, 'flash_message_overlay');
    }

    public function message($title, $message){
        return $this->create($title, $message, 'info');
    }

    public function error($title, $message){
        return $this->create($title, $message, 'error');
    }

    public function warning($title, $message){
        return $this->create($title, $message, 'warning');
    }

    public function success($title, $message){
        return $this->create($title, $message, 'success');
    }

}