<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Numbers extends Model
{
    protected $fillable = ['name', 'number', 'numbers_network_id_foreign'];

    public function getNetwork()
    {
        $data = ' ';
        $data = Networks::where('id', $this->numbers_network_id_foreign)->orWhere('network_id', $this->numbers_network_id_foreign);
        if($data->first() == null){
            $data = $this->numbers_network_id_foreign;
        // dd($data);

        }else {
            $data = $data->first()->name . ' - ' . $this->numbers_network_id_foreign;
            //  dd($data);
        }
        return $data;
        // return $this->belongsTo('App\Network', 'numbers_network_id_foreign');
    }
}
