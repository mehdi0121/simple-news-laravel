<?php

use Illuminate\Support\Facades\Storage;

if(!function_exists("storage")){

    function storage($disk="local"){

        return Storage::disk($disk);
    }

}





