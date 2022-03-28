<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeleMarque extends Model
{

    protected $table = 'marque';

    public function retourner_marques($pNoMarque = false)
    {
        if ($pNoMarque === false) {
            return $this->orderBy('NOM', 'asc')
            ->findAll();
        }

        return $this->where(['NOMARQUE' => $pNoMarque])->first();
    }
}