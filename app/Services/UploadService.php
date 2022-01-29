<?php

namespace App\Services;

class UploadService
{
    
    $arquivo->storeAs('public', $arquivo->getClientOriginalName());

    return '/storage/' . $arquivo->getClientOriginalName();

}
