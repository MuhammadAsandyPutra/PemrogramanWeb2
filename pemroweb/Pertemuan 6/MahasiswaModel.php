<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
   protected $nama= "Muhammad Asandy Putra";
   protected $nim="2110817310002";
   protected $prodi="Teknologi Informasi";
   Protected $hobi="Tidur";
   protected $skill="Meluluhkan hatinya";
   protected $nick="Asandy";


   public function getNama(){
       return $this->nama;
   }

   public function getNim(){
       return $this->nim;
   }

   public function getProdi(){
       return $this->prodi;
   }

   public function getHobi(){
       return $this->hobi;
   }

   public function getSkill(){
       return $this->skill;
   }

   public function getNick(){
       return $this->nick;
   }

}
