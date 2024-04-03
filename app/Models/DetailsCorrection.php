<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsCorrection extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'id',
    //     'person',
    //     'jury',
    //     'taux',
    //     'nbrCopies',
    //     'prixCopie',
    //     'dateCorrection',
    // ];
    protected $table = 'details_corrections';
}
