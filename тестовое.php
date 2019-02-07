<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                function BynaryS($key,$znach) {
                    $handle= fopen("Data.txt","r");
                    while(!feof($handle, 4000)){
                        $string = explode(fgets($handle,4000));
                        
                        foreach ($string as $key  => $value) {
                            $arr[] = explode ('\t', $value);
                        }
                         $start = 0;
                         $end = count($arr)-1;
                         
                         while($start <= $end) {
                             $mid = floor(($start +$end)/2);
                             $str = strnatcasecmp($arr[$start][0], $znach);
                             if ($str>0) {
                                 $end=$mid-1;
                             }else if($str<0) {
                                 $start = $znach+1;
                             } else {
                                 return $arr[$mid][1];
                             }
                            
                        }
                        
                        
                    }
                    return 'undef';
                }
                echo BynaryS($key,$znach);
        ?>
    </body>
</html>
