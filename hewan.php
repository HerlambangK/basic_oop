<?php 

 class Hewan{

    protected $nama;
    protected $darah;
    protected $jumlahKaki;
    protected $keahlian;
         //konstruktor
    public function __construct($nama, $jumlahKaki, $darah,$kemampuan)
        {
            $this->nama = $nama;
            $this->darah = $darah;
            $this->jumlahKaki = $jumlahKaki;
            $this->kemampuan = $kemampuan;
              
        }

    public function get_namaHewan()
        {
              return $this->nama ;
        }

    public function get_darah()
        {
              return $this->darah ;
        }
        
    public function get_kemampuan()
        {
              return $this->kemampuan ;
        }

     public function get_jumlahKaki()
        {
              return $this->jumlahKaki ;
        }

 

    // method
     public function atraksi(){
        // echo "nama hewan: " .$this->nama; 
        
    }

 }
 

 //inheritance
class Elang extends Hewan{

public function atraksi()
    {
          echo 'Bertarung : Terbang tinggi' ;
    }
public function serang()
        {
            echo 'Elang sedang menyerang Harimau';
        }
 }

class Harimau extends Hewan {


    public function atraksi()
        {
               echo 'Bertarung : Cakar Tajam' ;
        }
    public function serang()
        {
            echo 'Harimau sedang menyerang Elang';
        }
   
  }

  class Fight{
    public $attackPower;
    public $defencePower;
    public $Hp ;

    // public function get_darah()
    //     {
    //           return $this->darah ;
    //     }

    public function serang($attackPower,$harimau,$elang)
          {
             echo 'harimau sedang menyerang elang <br/>'  ;
             echo'Kekuatan '. $this->$attackPower =  $harimau - $elang. 'power<br/>';
             echo'Pertahanan '. $this->$harimau. '';
          }
    public function diserang($attackPower,$harimau,$elang)
            {
                    echo 'elang sedang menyerang harimau</br>'  ;
                    echo'Kekuatan '. $this->$attackPower =  $harimau - $elang. 'power<br/>';
                    echo'Pertahanan '. $this->$harimau. '';
            
           
            }
  }


 

?>