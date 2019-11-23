<?php
    
        $operation = 'умножение';
        if($input_file = fopen("input_file.txt","r")){
            while(!feof($input_file)){
                $each_line = fgets($input_file,7);
                $reg = '/[^\s]+/m';
                preg_match_all($reg, $each_line, $matches, PREG_SET_ORDER,0);
                $line = explode(' ', $each_line);
                $left_side_values = trim($line[0]);
                $left_to_int = (int)$left_side_values;
                $right_side_values = trim($line[1]);
                $right_to_int = (int)$right_side_values;
                echo $right_to_int.'</br>';
                
                
                if($operation == 'сложение'){
                    $output_file = fopen("output_file.txt", "a+");
                   
                        if(($left_to_int > 0) && ($right_to_int > 0)){
                           $sum_of_positive = $left_to_int + $right_to_int;
                           
                            if($output_file){
                                fwrite($output_file, $sum_of_positive."\n");                            
                            }
                        }
                        if(($left_to_int < 0) && ($right_to_int < 0)){
                            $sum_of_negative = $left_to_int + $right_to_int;
                            if($outputfile){
                                fwrite($output_file, $sum_of_negative."\n");
                            }
                        }
                    
                    fclose($output_file);
                    
                }

                if($operation == 'умножение'){
                    
                    $output_file = fopen("output_file.txt", "a+");
                    
                    if(($left_to_int > 0) && ($right_to_int > 0)){
                        $multiplication = $left_to_int * $right_to_int;
                        echo $multiplication;
                        if($output_file){
                            fwrite($output_file, $multiplication."\n");
                        }
                    }
                
                    fclose($output_file);
                }

                if($opearation == 'вычитание'){
                    $output_file = fopen("output_file.txt", "a+");
                    if(($left_to_int > 0) && ($right_to_int > 0)){
                        $substraction_of_positive = $left_to_int - $right_to_int;
                        
                        if($output_file){
                             fwrite($output_file, $substraction_of_positive."\n");                            
                        }
                    }
                    if(($left_to_int < 0) && ($right_to_int < 0)){
                        $substraction_of_negative = $left_to_int - $right_to_int;
                        if($outputfile){
                            fwrite($output_file, $substion_of_negative."\n");
                        }
                    }
                    fclose($output_file);
                }

                if($operation == 'деление'){
                    $output_file = fopen("output_file.txt", "a+");
                    if(($left_to_int > 0) && ($right_to_int > 0)){
                        $division_of_positive = $left_to_int / $right_to_int;
                        
                        if($output_file){
                             fwrite($output_file, $substraction_of_positive."\n");                            
                        }
                    }
                    if(($left_to_int < 0) && ($right_to_int < 0)){
                        $division_of_negative = $left_to_int / $right_to_int;
                        if($outputfile){
                            fwrite($output_file, $division_of_negative."\n");
                        }
                    }
                    fclose($output_file);
                }

                
                

            }
           fclose($input_file);
        }   
        

            
            
        
    



?>