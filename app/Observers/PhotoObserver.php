<?php

namespace App\Observers;

use App\Photo;

class PhotoObserver
{
    /**
     * Listen to the Photo created event.
     *
     * @param  Photo  $photo
     * @return void
     */
    public function created(Photo $photo)
    {
        //
    }

    /**
     * Listen to the Photo deleting event.
     *
     * @param  Photo  $photo
     * @return void
     */
    public function deleting(Photo $photo)
    {

        //Supprime si elles existent les photos
        if(file_exists(storage_path('app/public/photos/crags/1300/' . $photo->slug_label))) unlink(storage_path('app/public/photos/crags/1300/' . $photo->slug_label));
        if(file_exists(storage_path('app/public/photos/crags/200/' . $photo->slug_label))) unlink(storage_path('app/public/photos/crags/200/' . $photo->slug_label));
        if(file_exists(storage_path('app/public/photos/crags/100/' . $photo->slug_label))) unlink(storage_path('app/public/photos/crags/100/' . $photo->slug_label));
        if(file_exists(storage_path('app/public/photos/crags/50/' . $photo->slug_label))) unlink(storage_path('app/public/photos/crags/50/' . $photo->slug_label));

    }
}