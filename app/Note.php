<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function card(){
      return $this->belongsTo(Card::Class);
    }

<<<<<<< HEAD

=======
>>>>>>> origin/master
}
