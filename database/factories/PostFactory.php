<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
class PostFactory extends Factory
{
	 protected $model =Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
       'name'=>$this->generateRandomString(),
	   'created_at'=>date('Y-m-d'),
	   'updated_at'=>date('Y-m-d'),
        ];
    }
	
	
	private function generateRandomString($length=10){
		$characters = 'xscdcdssftyyyff166564f6grgtgtsdfghregtgtgtgresfeffrfgrg';
		$charactersLenfth = strlen($characters);
		$randomString='';
		for($i=0;$i < $length; $i++){
			$randomString .= $characters[rand(0,$charactersLenfth-1)];
		}
		return $randomString;
	}
}
