<?php 
    $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank","ömer","ali","faruk","ayşe","fatma","emine","zeynep","","",NULL);

    function EnterNum($input,$num){
        if($num > 2){
            if($num > 10){
                echo "Lütfen 11'den Küçük Bir Sayı Giriniz!";
            }else{

                echo $num;  

                $inputFilter = array_filter($input);
        
                    $randomNum =  rand(2,$num);
        
                    $rand_keys = array_rand($inputFilter,$randomNum);
                    $resultArray = array();
        
                    for($i=0;$i<$randomNum;$i++){
                        array_push($resultArray,$inputFilter[$rand_keys[$i]]."\n");
                    }
                };

                echo "<pre>";

                print_r($resultArray);
             
            }
            else{
                echo "Lütfen 2'den Büyük Bir Sayı Giriniz";
            }
        }
        print_r(EnterNum($input,10));
        print_r(EnterNum($input,10));
        print_r(EnterNum($input,10));
        // print_r(EnterNum($input,5));
        // print_r(EnterNum($input,7));

?>